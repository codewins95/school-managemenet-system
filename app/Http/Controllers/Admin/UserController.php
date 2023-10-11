<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($user) {
        $id = $this->findRoleId($user);
        $user = User::where('user_type',$id)->orderByDesc('id')->get();
        dd($user);
    }

    function findRoleId($user){
        if ($user === 'admin') {
            return ADMIN;
        } elseif ($user === 'teachers') {
            return TEACHER;
        } elseif ($user === 'students') {
            return STUDENT;
        } elseif ($user === 'parents') {
            return PARENTS;
        }
    }
}
