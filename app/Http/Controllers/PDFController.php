<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller
{

    public function generatePDF(Request $request)
    {

        $data = $request->all();
          
        $pdf = PDF::loadView('pdf', $data);
    
        return $pdf->download('test-pdf.pdf');
    }
}
