<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\MovieType;
use App\Models\Country;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Movies = Movie::all();
        return view('phim/ds-movies')->with('Movies',$Movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Movies = MovieType::all();
        $Countries = Country::all();
        return view('phim/nhap-thong-tin-movies')->with('Movietypes',$Movies)->with('Countries',$Countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $messages = [
                'name.required' => 'Tên không được để trống!',
                'name.max'=>'Tên không quá 20 ký tự!',
                'name.min'=>'Tên ít nhất 2 ký tự!',
                'opening_day.required' => 'Ngày không được để trống!',
                'opening_day.date'=>'Nhập không đúng ngày!',
                'director.required' => 'Đạo diễn không được để trống!',
                'director.max'=>'Đạo diễn không quá 20 ký tự!',
                'director.min'=>'Đạo diễn ít nhất 2 ký tự!',
                'length.required' => 'Thời lượng không được để trống!',
                'phone.numeric'=>'Chỉ được nhập số!',
                'trailer.required' => 'Liên kết không được để trống!',
                'trailer.max'=>'Liên kết không quá 255 ký tự!',
                'trailer.min'=>'Liên kết ít nhất 10 ký tự!',
                'price.required' => 'Giá tiền không được để trống!'
                ];
            $validatedData = $request->validate([
                'name' => 'required|max:20|min:2',
                'director' => 'required|max:20|min:2',
                'length' => 'required',
                'trailer' => 'required|max:255|min:10',
                'price' => 'required',
                'opening_day' => 'required|date'
            ], $messages);
        //
        $Movies = new Movie();
        $Movies->name=$request->name;
        $Movies->movie_type_id=$request->movie_type_id;
        $Movies->country_id=$request->country_id;
        $Movies->director=$request->director;
        $Movies->length=$request->length;
        $Movies->trailer=$request->trailer;
        $Movies->price=$request->price;
        $Movies->image=$request->image;
        $Movies->opening_day=$request->opening_day;
        $Movies->status=$request->status=1;
        $Movies->save();
        return redirect()->route('movie.index');
        $errors=$validate->errors();
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
            'name.required' => 'Tên không được để trống!',
            'name.max'=>'Tên không quá 20 ký tự!',
            'name.min'=>'Tên ít nhất 2 ký tự!',
            'opening_day.required' => 'Ngày không được để trống!',
            'opening_day.date'=>'Nhập không đúng ngày!',
            'director.required' => 'Đạo diễn không được để trống!',
            'director.max'=>'Đạo diễn không quá 20 ký tự!',
            'director.min'=>'Đạo diễn ít nhất 2 ký tự!',
            'length.required' => 'Thời lượng không được để trống!',
            'phone.numeric'=>'Chỉ được nhập số!',
            'trailer.required' => 'Liên kết không được để trống!',
            'trailer.max'=>'Liên kết không quá 255 ký tự!',
            'trailer.min'=>'Liên kết ít nhất 10 ký tự!',
            'price.required' => 'Giá tiền không được để trống!'
            ];
        $validatedData = $request->validate([
            'name' => 'required|max:20|min:2',
            'director' => 'required|max:20|min:2',
            'length' => 'required',
            'trailer' => 'required|max:255|min:10',
            'price' => 'required',
            'opening_day' => 'required|date'
        ], $messages);

        $Movies = Movie::find($id);
        $Movies->name=$request->name;
        $Movies->movie_type_id=$request->movie_type_id;
        $Movies->country_id=$request->country_id;
        $Movies->director=$request->director;
        $Movies->image=$request->image;
        $Movies->length=$request->length;
        $Movies->trailer=$request->trailer;
        $Movies->price=$request->price;
        $Movies->opening_day=$request->opening_day;
        $Movies->save();
        return redirect()->route('movie.index')->with('thongbaoo','Sửa thành công!');
        $errors=$validate->errors();
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
        $Movies = Movie::find($id);
        $Movies->status=0;
        $Movies->save();
        return redirect()->route('movie.index')->with('thongbao','Xóa thành công!');
    }
    public function getMovie($id)
    {
        $Movies = Movie::find($id);
        $MovieTypes = MovieType::all();
        $Countries = Country::all();
        return view('phim/sua-movie')->with('Movie',$Movies)->with('Movietypes',$MovieTypes)->with('Countries',$Countries);
    }
}
