<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use App\Province;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reports = Report::with(["user", "province", "city"])
            ->where("user_id", Auth::user()->id)
            ->orderBy("created_at", "DESC")
            ->paginate(10);

        return view("user.reports.index", compact("reports"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $provinces = Province::orderBy("created_at", "DESC")->get();

        return view("user.reports.create", compact("provinces"));
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
            "user_id" => "required|exists:users,id",
            "request" => "required",
            "province_id" => "required|exists:provinces,id",
            "city_id" => "required|exists:cities,id",
            "description" => "required",
        ]);

        Report::create($request->except("_token"));

        return redirect(url('reports'))->with(["success" => "Laporan berhasil dibuat!"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
