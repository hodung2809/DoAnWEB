<?php

namespace App\Http\Controllers;
use App\Models\Manager;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Mangers = Manager::all();
        return view('QuanLy/ds-managers')->with('Managers',$Mangers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('QuanLy/nhap-thong-tin-managers');
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
            'first_name.required' => 'Họ không được để trống!',
            'first_name.max'=>'Họ không quá 20 ký tự!',
            'first_name.min'=>'Họ ít nhất 2 ký tự!',
            'last_name.required' => 'Tên không được để trống!',
            'last_name.max'=>'Tên không quá 20 ký tự!',
            'last_name.min'=>'Tên ít nhất 2 ký tự!',
            'phone.required' => 'Số điện thoại không được để trống!',
            'phone.max'=>'Số điện thoại không quá 12 ký tự!',
            'phone.min'=>'Số điện thoại ít nhất 3 ký tự!',
            'phone.numeric'=>'Chỉ được nhập số!',
            'password.required' => 'Mật khẩu không được để trống!',
            'password.max'=>'Mật khẩu không quá 12 ký tự!',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự!'
            ];
        $validatedData = $request->validate([
            'first_name' => 'required|max:20|min:2',
            'last_name' => 'required|max:20|min:2',
            'phone' => 'required|numeric',
            'password' => 'required|max:12|min:6'
        ], $messages);
        //
        $Managers = new Manager();
        $Managers->first_name=$request->first_name;
        $Managers->last_name=$request->last_name;
        $Managers->phone=$request->phone;
        $Managers->password=$request->password;
        $Managers->status=$request->status=1;
        $Managers->save();
        return redirect()->route('manager.index');
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
        //
        $messages = [
            'first_name.required' => 'Họ không được để trống!',
            'first_name.max'=>'Họ không quá 20 ký tự!',
            'first_name.min'=>'Họ ít nhất 2 ký tự!',
            'last_name.required' => 'Tên không được để trống!',
            'last_name.max'=>'Tên không quá 20 ký tự!',
            'last_name.min'=>'Tên ít nhất 2 ký tự!',
            'phone.required' => 'Số điện thoại không được để trống!',
            'phone.max'=>'Số điện thoại không quá 12 ký tự!',
            'phone.min'=>'Số điện thoại ít nhất 3 ký tự!',
            'phone.numeric'=>'Chỉ được nhập số!',
            'password.required' => 'Mật khẩu không được để trống!',
            'password.max'=>'Mật khẩu không quá 12 ký tự!',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự!'
            ];
        $validatedData = $request->validate([
            'first_name' => 'required|max:20|min:2',
            'last_name' => 'required|max:20|min:2',
            'phone' => 'required|numeric',
            'password' => 'required|max:12|min:6'
        ], $messages);
        //
        $Managers = new Manager();
        $Managers->first_name=$request->first_name;
        $Managers->last_name=$request->last_name;
        $Managers->phone=$request->phone;
        $Managers->password=$request->password;
        $Managers->status=$request->status=1;
        $Managers->save();
        return redirect()->route('manager.index');
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
        $Managers = Manager::find($id);
        $Managers->status=0;
        $Managers->save();
        return redirect()->route('manager.index')->with('thongbao','Xóa thành công!');
    }
    public function getManager($id)
    {
        $Managers = Manager::find($id);
        return view('QuanLy/sua-manager')->with('Manager',$Managers);
    }
}
