<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserReportController extends Controller
{
    // Show list of users
    public function index()
    {
        $users = User::all(); // get all registered users
        return view('reports.users', compact('users'));
    }
}
