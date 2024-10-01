<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        $data = ['name' => 'Vladyslav', 'role' => 'Student'];
        return view('welcome', $data);
    }

    public function about()
    {
        $data = ['name' => 'Vladyslav', 'role' => 'Student', 'description' => 'Trying to make it to the second half of a year'];
        return view('about', $data);
    }

    public function contact()
    {
        $data = ['email' => 'vladvladpobuta@gmail.com', 'phone' => '+380960116760'];
        return view('contact', $data);
    }

    public function hobbies()
    {
        $data = ['name' => 'Vladyslav', 'hobbies' => 'Video editing, coding'];
        return view('hobbies', $data);
    }
}
