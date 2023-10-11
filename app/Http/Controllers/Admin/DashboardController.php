<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function AdminDashboard(){
        return view('backend.admin.dashboard');
    }
    public function TeacherDashboard(){
        return view('backend.teacher.dashboard');
    }
    public function StudentDashboard(){
        return view('backend.student.dashboard');
    }
    public function ParentDashboard(){
        return view('backend.parent.dashboard');
    }
}
