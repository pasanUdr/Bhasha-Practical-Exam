<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CourseModel;

class CourseController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        helper(['form']);
        echo view('courses/create');
    }

    public function store()
    {
        $model = new CourseModel();

        $data = [
            'course_name' => $this->request->getPost('course_name'),
            'department' => $this->request->getPost('department'),
            'fee' => $this->request->getPost('fee'),
        ];

        $model->save($data);
        return redirect()->to('/courses/create')->with('success', 'Course added successfully.');
    }
}
