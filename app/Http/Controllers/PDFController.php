<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\User;

class PDFController extends Controller
{
public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];

        $users = User::all()->toArray();
        $pdf = PDF::loadView('users.pdf', ['users' => $users]);
        return $pdf->download('users-data.pdf');
    }
    public function Invoice()
    {
        $pdf = PDF::loadView('invoice.pdf');
        return $pdf->download('invoice.pdf');

    }
}


