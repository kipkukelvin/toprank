<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicController extends Controller
{
      public function pptt()
    {
        return view('school.pptt');
    }
     public function academic()
    {
        return view('academic.academic');
    }
      public function cna()
    {
        return view('school.cna');
    }
    public function programs()
    {
        return view('academic.programs');
    }
    public function orthopedics()
    {
        return view('school.orthopedics');
    }
    public function packages()
    {
        return view('school.packages');
    }
}
