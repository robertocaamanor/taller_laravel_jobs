<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\TypeJob;

class AdminJobController extends Controller
{
    public function createJob()
    {
        $jobTypes = TypeJob::all();
        $categories = Category::all();
        return view('admin/createJob', compact('jobTypes', 'categories'));
    }
}
