<?php

namespace App\Http\Controllers;

use App\City;
use App\Province;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /*
     * Get City
     */
    public function getCities()
    {
        $cities = City::where('province_id', request()->province_id)->get();
        return response()->json(["code" => 200,
            "status" => 'success',
            "data" => $cities]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cities = City::with(["province"])
            ->orderBy("province_id", "ASC")
            ->paginate(10);

        return view("admin.cities.index", compact('cities'));
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

        return view('admin.cities.create', compact('provinces'));
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
            'province_id' => "required|exists:provinces,id",
            "name" => "required|string",
            "type" => "required",
            "postal_code" => "required|numeric"
        ]);

        City::create($request->except('_token'));

        return redirect(route('admin.cities.index'))
            ->with(['success' => 'Kota berhasil ditambah!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        //
        $provinces = Province::orderBy('created_at', "desc")->get();

        return view('admin.cities.edit', compact('provinces', 'city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        //
        $this->validate($request, [
            'province_id' => "required|exists:provinces,id",
            "name" => "required|string",
            "type" => "required",
            "postal_code" => "required|numeric"
        ]);

        $city->update($request->except('_token'));

        return redirect(route('admin.cities.index'))
            ->with(['success' => 'Kota berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        //
        $selectedCity = City::with(["province"])
            ->where("id", $city->id)
            ->first();

        if(count($selectedCity->province) > 0){
            return redirect(route('admin.cities.index'))
                ->with(['error' => 'Kota sedang dipakai']);
        }
        $city->delete();

        return redirect(route('admin.cities.index'))
            ->with(['success' => 'Kota berhasil dihapus']);
    }
}
