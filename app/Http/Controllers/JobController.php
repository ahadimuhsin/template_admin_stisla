<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs = Job::orderBy("created_at", "DESC")->paginate(10);

        return view("admin.jobs.index", compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.jobs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            "name" => "required"
        ]);

        Job::create($request->except("_token"));

        return redirect(route("admin.jobs.index"))->with(["success" => "Pekerjaan berhasil ditambahkan"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
        return view('admin.jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
        $this->validate($request, [
            "name" => "required"
        ]);

        $job->update($request->except("_token"));

        return redirect(route('admin.jobs.index'))->with(["success" => "Pekerjaan berhasil diubah"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
        $selectedJob = Job::with(["users"])
            ->where("id", $job->id)
            ->first();

        if(count($selectedJob->users) > 0){
            return redirect(route("admin.jobs.index"))->index(["error" => "Pekerjaan sedang digunakan!"]);
        }
        $job->delete();

        return redirect(route("admin.jobs.index"))->with(["success" => "Pekerjaan berhasil dihapus"]);
    }
}
