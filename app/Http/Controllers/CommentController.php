<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\User;
use App\Models\Movie;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Comments = Comment::all();
        return view('DanhGia/ds-comments')->with('Comments',$Comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Users = User::all();
        $Movies = Movie::all();
        return view('DanhGia/nhap-thong-tin-comments')->with('Users',$Users)->with('Movies',$Movies);
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
        $Comments = new Comment();
        $Comments->user_id=$request->user_id;
        $Comments->movie_id=$request->movie_id;
        $Comments->rate=$request->rate;
        $Comments->content=$request->content;
        $Comments->status=$request->status=1;
        $Comments->save();
        return redirect()->route('comment.index');
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
        $Comments = Comment::find($id);
        $Comments->status=0;
        $Comments->save();
        return redirect()->route('comment.index')->with('thongbao','Xóa thành công!');
    }
}
