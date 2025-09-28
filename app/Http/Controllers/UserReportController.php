<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf; // import facade


class UserReportController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('reports.users', compact('users'));
    }

    public function exportPdf()
    {
        $users = User::all();
        $pdf = Pdf::loadView('reports.users_pdf', compact('users'));
        return $pdf->download('users-report.pdf');
    }
}
