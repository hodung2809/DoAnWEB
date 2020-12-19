<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use App\Models\Movie;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actors = Actor::all();
        return view('DienVien/ds-actorslnMovies')->with('actors',$actors);
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
        return view('DienVien/nhap-thong-tin-actorslnMovies')->with('Movies',$Movies);
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
            'actor_name.required' => 'Tên diễn viên không được để trống!',
            'actor_name.required' => 'Tên diễn viên không được để trống!',
            'actor_name.max'=>'Tên diễn viên không quá 20 ký tự!'
            ];
        $validatedData = $request->validate([
            'actor_name' => 'required|max:20'
        ], $messages);
        //
        $actor = new Actor;
        $actor->movie_id = $request->movie_id;
        $actor->actor_name = $request->actor_name;
        $actor->status =$request->status=1;
        $actor->save();
        return redirect()->route('actor.index');
        $errors = $validate->errors();
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
        $messages = [
            'actor_name.required' => 'Tên diễn viên không được để trống!',
            'actor_name.required' => 'Tên diễn viên không được để trống!',
            'actor_name.max'=>'Tên diễn viên không quá 20 ký tự!'
            ];
        $validatedData = $request->validate([
            'actor_name' => 'required|max:20'
        ], $messages);
        //
        $Actors = Actor::find($id);
        $Actors->actor_name=$request->actor_name;
        $Actors->movie_id=$request->movie_id;
        $Actors->save();
        return redirect()->route('actor.index')->with('thongbaoo','Sửa thành công!');
        $errors = $validate->errors();
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
        $Actors = Actor::find($id);
        $Actors->status=0;
        $Actors->save();
        return redirect()->route('actor.index')->with('thongbao','Xóa thành công!');
    }
    public function getActor($id)
    {
        $Movies = Movie::all();
        $Actors = Actor::find($id);
        return view('DienVien/sua-actor')->with('Actor',$Actors)->with('Movies',$Movies);
    }
}
