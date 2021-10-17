<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicStructure;

class AcademicController extends Controller
{
    public function index()
    {
        $structures = AcademicStructure::get()->toTree();
        return view('academic', compact('structures'));
    }
}
