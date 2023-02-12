<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = Obat::all();
        return view('index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('create');
    }
    public function inputCreate(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'bentuk' => 'required',
            'konsumsi' => 'required',
            'harga' => 'required',
        ]);

        $obat = new Obat([
            'nama' => $request->nama,
            'bentuk' => $request->bentuk,
            'konsumsi' => $request->konsumsi,
            'harga' =>  $request->harga,
        ]);

        $obat->save();

        return redirect('/');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $data = Obat::where('id',$id)->first();
        return view ('edit', compact('data'));
    }

    public function update(Request $request , $id){

        Obat::where('id',$id)->update([
            'nama' => $request->nama,
            'bentuk' => $request->bantuk,
            'konsumsi' => $request->konsumsi,
            'harga' => $request->harga,           
        ]);

        return redirect(route('index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Obat::where('id', $id)->delete();
        return redirect()->back()->with('danger', 'Yey, Data berhasil di hapus !');
    }
}
