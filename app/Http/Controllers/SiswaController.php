<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::get();
        $test = "Hello";
        // return view("siswa.index", ["siswa" => $siswa, "test" => $test]);
        return view("siswa.index", compact("siswa", "test"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("siswa.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->only(["nis", "nama", "tgl_lahir", "tmp_lahir"]);
            $siswa = Siswa::create($data);
            if (!$siswa) {
                return "Data Siswa gagal disimpan.";
            }
            return redirect(route("siswa.index"));
        } catch (\Exception $e) {
            return "Data Siswa gagal disimpan.";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $siswa = Siswa::where("id", $id)->fisrt();
        $siswa = Siswa::findOrFail($id);
        return view("siswa.edit", compact("siswa"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->only(["nis", "nama", "tgl_lahir", "tmp_lahir"]);
            $siswa = Siswa::find($id)->update($data);
            if (!$siswa) {
                return "Data Siswa gagal disimpan.";
            }
            return redirect(route("siswa.index"));
        } catch (\Exception $e) {
            return "Data Siswa gagal disimpan.";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}