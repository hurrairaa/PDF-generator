<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller
{

    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('pdf', $data);
    
        return $pdf->download('test-pdf.pdf');
    }
}
