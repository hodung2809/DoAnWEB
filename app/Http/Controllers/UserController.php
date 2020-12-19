<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Users = User::all();
        return view('KhanGia/ds-user')->with('Users',$Users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('KhanGia/nhap-thong-tin-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //kiểm tra lỗi
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
            'password.min'=>'Mật khẩu ít nhất 6 ký tự!',
            'birthday.required' => 'Ngày sinh không được để trống!',
            'birthday.date'=>'Ngày sinh không hợp lệ!',
            ];
        $validatedData = $request->validate([
            'first_name' => 'required|max:20|min:2',
            'last_name' => 'required|max:20|min:2',
            'phone' => 'required|numeric',
            'password' => 'required|max:12|min:6',
            'birthday' => 'required|date',
        ], $messages);
        
        //Lấy dữ liệu đưa về db
        $Users = new User();
        $Users->first_name=$request->first_name;
        $Users->last_name=$request->last_name;
        $Users->phone=$request->phone;
        $Users->password=$request->password;
        $Users->birthday=$request->birthday;
        $Users->status=$request->status=1;
        $Users->save();
        return redirect()->route('user.index');
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
        $Users = User::find($id);
        $Users->first_name=$request->first_name;
        $Users->last_name=$request->last_name;
        $Users->phone=$request->phone;
        $Users->password=$request->password;
        $Users->birthday=$request->birthday;
        $Users->save();
        return redirect()->route('user.index')->with('thongbaoo','Sửa thành công!');
        $errors = $validate->errors();
    }
    public function destroy($id)
    {
        //
        $Users = User::find($id);
        $Users->status=0;
        $Users->save();
        return redirect()->route('user.index')->with('thongbao','Xóa thành công!');
    }

    
    public function __construct() {
        @session_start();        
    }    
    public function postlogin(Request $request){
        if($request->username == '' || $request->password == ''){
            return redirect('/')->with('notice', 'Tài khoản và mật khẩu không được để trống.');
        }

        if($request->username == 'admin' && $request->password == '123456'){
            $_SESSION['admin'] = 'Admin';
            return redirect('trang-chu');       
        }else{
            return redirect('/')->with('notice', 'Tài khoản hoặc mật khẩu chưa chính xác.');
        }        
    }    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUser($id)
    {
        $Users = User::find($id);
        return view('KhanGia/sua-user')->with('User',$Users);
    }
    
}
