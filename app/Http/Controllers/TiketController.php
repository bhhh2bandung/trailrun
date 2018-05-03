<?php

namespace App\Http\Controllers;

use App\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tiket.index')->with('tiket', Tiket::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tiket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'harga' => 'required',
            'content' => 'required',
        ]);

        $data = new Tiket;
        $data->judul = $request->judul;
        $data->harga = $request->harga;
        $data->content = $request->content;

        $data->save();
        return redirect()->route('tiket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Tiket::find($id);
        return view('tiket.edit')->with('data', $data)->with('tiket', Tiket::all());
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
        $this->validate($request, [
            'judul' => 'required',
            'harga' => 'required',
            'content' => 'required',
        ]);
        $data = Tiket::find($id);
        $data->judul = $request->judul;
        $data->harga = $request->harga;
        $data->content = $request->content;

        $data->save();
        return redirect()->route('tiket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Tiket::find($id);
        $data->delete();

        return redirect()->back();
    }
}
