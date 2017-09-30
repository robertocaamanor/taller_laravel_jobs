<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\TypeJob;
use App\Job;
use Illuminate\Support\Facades\Auth;

class AdminJobController extends Controller
{
    public function createJob()
    {
        $jobTypes = TypeJob::all();
        $categories = Category::all();
        return view('admin/createJob', compact('jobTypes', 'categories'));
    }

    public function saveJob(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'salary' => 'required|numeric',
            'city' => 'required',
            'country' => 'required',
            'type_job_id' => 'required'
        ]);

        $job = Job::create($request->all());
        dd($job);
    }

    public function myJobs()
    {
        
    }
}
