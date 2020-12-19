<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Countries = Country::all();
        return view('QuocGia/ds-countrys')->with('Countries',$Countries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('QuocGia/nhap-thong-tin-countrys');
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
            'name.required' => 'Tên nước không được để trống!',
            'name.max'=>'Tên nước không quá 20 ký tự!'
            ];
        $validatedData = $request->validate([
            'name' => 'required|max:20'
        ], $messages);
        $country = new Country;
        $country->name=$request->name;
        $country->status=$request->status=1;
        $country->save();
        return redirect()->route('country.index');
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
            'name.required' => 'Tên nước không được để trống!',
            'name.max'=>'Tên nước không quá 20 ký tự!'
            ];
        $validatedData = $request->validate([
            'name' => 'required|max:20'
        ], $messages);
        $Countries = Country::find($id);
        $Countries->name=$request->name;
        $Countries->save();
        return redirect()->route('country.index')->with('thongbaoo','Sửa thành công!');
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
        $Countries = Country::find($id);
        $Countries->status=0;
        $Countries->save();
        return redirect()->route('country.index')->with('thongbao','Xóa thành công!');
       
    }
    public function getCountry($id)
    {
        $Countries = Country::find($id);
        return view('QuocGia/sua-country')->with('Country',$Countries);
    }
}
