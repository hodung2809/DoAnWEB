<?php

namespace App\Http\Controllers;
use App\Models\Cinema;
use App\Models\Branch;

use Illuminate\Http\Request;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Cinemas = Cinema::all();
        return view('Rap/ds-cinemas')->with('Cinemas',$Cinemas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Branches = Branch::all();
        return view('Rap/nhap-thong-tin-cinemas')->with('Branches',$Branches);
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
            'name.required' => 'Tên rạp không được để trống!',
            'name.max'=>'Tên rạp không quá 100 ký tự!',
            'name.min' => 'Tên rạp ít nhất 3 ký tự!',
            'seat_quantity.required' => 'Số lượng ghế không được để trống!',
            'seat_quantity.max'=>'Số lượng ghế không quá 4 ký tự!',
            'seat_quantity.min'=>'Số lượng ghế ít nhất 2 ký tự!',
            'seat_quantity.integer' => 'Số lượng ghế phải là số nguyên!',
            ];
        $validatedData = $request->validate([
            'name' => 'required|max:100|min:3',
            'seat_quantity' => 'required|integer'
        ], $messages);
        //
        $Cinemas = new Cinema();
        $Cinemas->name=$request->name;
        $Cinemas->seat_quantity=$request->seat_quantity;
        $Cinemas->branch_id=$request->branch_id;
        $Cinemas->status=$request->status=1;
        $Cinemas->save();
        return redirect()->route('cinema.index');
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
        $messages = [
            'name.required' => 'Tên rạp không được để trống!',
            'name.max'=>'Tên rạp không quá 100 ký tự!',
            'name.min' => 'Tên rạp ít nhất 3 ký tự!',
            'seat_quantity.required' => 'Số lượng ghế không được để trống!',
            'seat_quantity.max'=>'Số lượng ghế không quá 4 ký tự!',
            'seat_quantity.min'=>'Số lượng ghế ít nhất 2 ký tự!',
            'seat_quantity.integer' => 'Số lượng ghế phải là số nguyên!',
            ];
        $validatedData = $request->validate([
            'name' => 'required|max:100|min:3',
            'seat_quantity' => 'required|integer'
        ], $messages);
        //
        $Cinemas = Cinema::find($id);
        $Cinemas->name=$request->name;
        $Cinemas->seat_quantity=$request->seat_quantity;
        $Cinemas->branch_id=$request->branch_id;
        $Cinemas->save();
        return redirect()->route('cinema.index')->with('thongbaoo','Sửa thành công!');
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
        $Cinemas = Cinema::find($id);
        $Cinemas->status=0;
        $Cinemas->save();
        return redirect()->route('cinema.index')->with('thongbao','Xóa thành công!');
    }
    public function getCinema($id)
    {
        $Branches = Branch::all();
        $Cinemas = Cinema::find($id);
        return view('Rap/sua-cinema')->with('Cinema',$Cinemas)->with('Branches',$Branches);
    }
}
