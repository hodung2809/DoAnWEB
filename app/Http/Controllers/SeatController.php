<?php

namespace App\Http\Controllers;
use App\Models\Seat;
use App\Models\Cinema;

use Illuminate\Http\Request;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Seats = Seat::all();
        return view('Ghe/ds-seats')->with('Seats',$Seats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Cinemas = Cinema::all();
        return view('Ghe/nhap-thong-tin-seats')->with('Cinemas',$Cinemas);
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
        $Seats = new Seat();
        $Seats->name=$request->name;
        $Seats->cinema_id=$request->cinema_id;
        $Seats->status=$request->status=1;
        $Seats->save();
        return redirect()->route('seat.index');
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
        //
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
        //
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
        $Seats = Seat::find($id);
        $Seats->status=0;
        $Seats->save();
        return redirect()->route('seat.index')->with('thongbao','Xóa thành công!');
    }
}
