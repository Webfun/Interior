<?php

namespace App\Http\Controllers\admin;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        $users= User::all();
        $testimonials = Testimonial::all();
        return view('admin.dashboard', compact('projects', 'users', 'testimonials'));
    }

    public function profile()
    {
        $users = User::all();
        return view('admin.profile', compact('users'));
    }

}
