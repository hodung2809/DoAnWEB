<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovieType;

class MovieTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Movietypes = MovieType::All();
        return view('LoaiPhim/ds-moviestypes')->with('ivdetail',$Movietypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("LoaiPhim/nhap-thong-tin-moviestypes");
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
        $messages = [
            'name.required' => 'Tên nước không được để trống!',
            'name.max'=>'Tên loại phim không quá 100 ký tự!',
            'name.min'=>'Tên loại phim ít nhất 2 ký tự!'
            ];
        $validatedData = $request->validate([
            'name' => 'required|max:100|min:2'
        ], $messages);
        $movietypes = new MovieType();
        $movietypes->name=$request->name;
        $movietypes->status=$request->status=1;
        $movietypes->save();
        return redirect()->route('movietype.index');
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
        $messages = [
            'name.required' => 'Tên loại phim không được để trống!',
            'name.max'=>'Tên loại phim không quá 100 ký tự!',
            'name.min'=>'Tên loại phim ít nhất 2 ký tự!'
            ];
        $validatedData = $request->validate([
            'name' => 'required|max:100|min:2'
        ], $messages);
        $MovieTypes = MovieType::find($id);
        $MovieTypes->name=$request->name;
        $MovieTypes->save();
        return redirect()->route('movietype.index')->with('thongbaoo','Sửa thành công!');
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
        $MovieTypes = MovieType::find($id);
        $MovieTypes->status=0;
        $MovieTypes->save();
        return redirect()->route('movietype.index')->with('thongbao','Xóa thành công!');
    }
    public function getMovieType($id)
    {
        $MovieTypes = MovieType::find($id);
        return view('LoaiPhim/sua-movietype')->with('MovieType',$MovieTypes);
    }
}
