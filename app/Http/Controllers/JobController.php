<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
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
        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');
        $tags = Tag::all();

        return view('jobs.index', [
            'jobs' => $jobs[0],
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
            'schedule' => ['required', Rule::in(['Full Time', 'Part Time'])],
            'url' => ['required'],
            'tags' => ['nullable'],
        ]);

        $jobAttr['featured'] = $request->has('featured');

        $job = Auth::user()->employer->job()->create(Arr::except($jobAttr, 'tags'));

        if ($jobAttr['tags']) {
            foreach (explode(',', $jobAttr['tags']) as $tag) {
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
        return view('jobs.show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Job $job)
    {

        request()->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required'],
            'url' => ['required'],
            'tags' => ['nullable'],
        ]);
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'location' => request('location'),
            'schedule' => request('schedule'),
            'url' => request('url'),
            'featured' => request()->has('featured'),
        ]);

        // dd(request('tags'));
        if ($job['tags']) {
            foreach (explode(',', request('tags')) as $tag) {
                
                    $job->tag($tag);
                
            }
        }
        foreach ($job->tags as $tag) {
            if (!Str::contains(request('tags'), $tag->name)) {
                $job->deAttach($tag);
            }

        }

        return redirect('jobs/' . $job->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/');
    }
}
