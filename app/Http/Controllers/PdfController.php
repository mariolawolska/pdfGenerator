<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
//
use PDF;
use App\Persons;

class PdfController extends Controller {

    public function toPdf() {

        $persons = Persons::orderBy('id', 'DESC')->get();
        $flow = 'pdf';
        $head = $this::headPdf();
        $footer = $this::footerPdf();
        $logout= true;

        $pdf = PDF::loadView('pdf.layout', compact('persons', 'flow', 'head', 'footer', 'logout'));
        return $pdf->download('Ignition('.date('Y-m-d') . ').pdf');
    }

    public function toTable() {

        $persons = Persons::orderBy('id', 'DESC')->paginate(10);
        $flow = 'view';
        $head = " ";
        $footer = " ";
        $logout= false;
        return View::make('pdf.layout', compact('persons', 'flow','head', 'footer','logout'));
    }
    
    static function headPdf() {

//        return View::make('pdf.headPdf');
    }
    static function footerPdf() {

//        return View::make('pdf.footerPdf');
    }

}
