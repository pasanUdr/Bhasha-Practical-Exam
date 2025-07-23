<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CourseModel;
use App\Models\StudentModel;

class StudentController extends BaseController
{
    public $studentModel;

    public function __construct()
    {
        $this->studentModel = new studentModel();
    }

    public function getAllStudents()
    {
        // $students = $this->studentModel->findAll();
        // Join students with courses
        $students = $this->studentModel
            ->select('students.*, courses.course_name')
            ->join('courses', 'courses.id = students.course_id')
            ->findAll();

        return view('student/list', ['students' => $students]);
    }

    public function register()
    {
        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->findAll();
        return view('student/register', $data);
    }

    public function store()
    {
        $studentModel = $this->studentModel;

        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'birthday' => $this->request->getPost('birthday'),
            'address' => $this->request->getPost('address'),
            'contact_number' => $this->request->getPost('contact_number'),
            'course_id' => $this->request->getPost('course_id')
        ];

        $studentModel->save($data);
        return redirect()->to(base_url('/student/register'))->with('success', 'Student registered successfully.');
    }
}
