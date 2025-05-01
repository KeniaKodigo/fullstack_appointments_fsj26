<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    public function getPatients(){
        $patients = Patient::select('id','name','birthdate','address','phone')->get();
        $date = now()->format('d-m-Y');

        $pdf = Pdf::loadView('pdf.patients', compact('patients','date'));
        return $pdf->stream('patients.pdf');
    }
}
