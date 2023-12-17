<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class downloadController extends Controller
{
    public function telechargerCv() {
        $path = Storage::path('public/pdf/CV.pdf');
        $originalFilename = 'CV.pdf'; // Nom du fichier avec extension
        return response()->download($path, $originalFilename);
    }    
}
