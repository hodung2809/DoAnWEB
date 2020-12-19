<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screening;
use App\Models\Cinema;
use App\Models\Movie;

class ScreeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Screenings = Screening::all();
        return view('XuatChieu/ds-screenings')->with('Screenings',$Screenings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Movies = Movie::all();
        $Cinemas = Cinema::all();
        return view('XuatChieu/nhap-thong-tin-screenings')->with('Movies',$Movies)->with('Cinemas',$Cinemas);
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
        $Screenings = new Screening();
        $Screenings->movie_id=$request->movie_id;
        $Screenings->cinema_id=$request->cinema_id;
        $Screenings->time=$request->time;
        $Screenings->status=$request->status=1;
        $Screenings->save();
        return redirect()->route('screening.index');
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
        $Screenings = Screening::find($id);
        $Screenings->status=0;
        $Screenings->save();
        return redirect()->route('screening.index')->with('thongbao','Xóa thành công!');
    }
}
