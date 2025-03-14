<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $featuredJobs = Job::where('featured',false)->limit(3)->get();
        $jobs= Job::latest()->with(['employer','tags'])->get()->groupBy('featured');
        $tags = Tag::all();

        return view('jobs.index',[
            'jobs'=> $jobs[0],
            'tags' => $tags,
            'featuredJobs' => $jobs[1],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jobAttr = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required',Rule::in(['Full Time','Part Time'])],
            'url' => ['required'],
            'tags' => ['nullable'],
        ]);

        $jobAttr['featured'] = $request->has('featured');

         $job = Auth::user()->employer->job()->create(Arr::except($jobAttr,'tags'));

        if ($jobAttr['tags']) {
            foreach (explode(',',$jobAttr['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
