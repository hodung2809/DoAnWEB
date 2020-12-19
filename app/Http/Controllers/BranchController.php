<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use App\Models\Manager;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Branchs = Branch::all();
        return view('ChiNhanh/ds-branches')->with('Branches',$Branchs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Managers = Manager::all();
        return view('ChiNhanh/nhap-thong-tin-branches')->with('Managers',$Managers);
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
            'name.required' => 'Tên chi nhánh không được để trống!',
            'name.max'=>'Tên chi nhánh không quá 100 ký tự!',
            'name.min'=>'Tên chi nhánh ít nhất 4 ký tự!',
            'address.required' => 'Địa chỉ không được để trống!',
            'address.max'=>'Địa chỉ không quá 255 ký tự!',
            'address.min'=>'Địa chỉ ít nhất 15 ký tự!',
            ];
        $validatedData = $request->validate([
            'name' => 'required|max:100|min:4',
            'address' => 'required|max:255|min:15',
        ], $messages);
        //
        $Branchs = new Branch();
        $Branchs->name=$request->name;
        $Branchs->address=$request->address;
        $Branchs->manager_id=$request->manager_id;
        $Branchs->status=$request->status=1;
        $Branchs->save();
        return redirect()->route('branch.index');
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
            'name.required' => 'Tên chi nhánh không được để trống!',
            'name.max'=>'Tên chi nhánh không quá 100 ký tự!',
            'name.min'=>'Tên chi nhánh ít nhất 4 ký tự!',
            'address.required' => 'Địa chỉ không được để trống!',
            'address.max'=>'Địa chỉ không quá 255 ký tự!',
            'address.min'=>'Địa chỉ ít nhất 15 ký tự!',
            ];
        $validatedData = $request->validate([
            'name' => 'required|max:100|min:4',
            'address' => 'required|max:255|min:15',
        ], $messages);
        //
        $Branches = Branch::find($id);
        $Branches->name=$request->name;
        $Branches->address=$request->address;
        $Branches->manager_id=$request->manager_id;
        $Branches->save();
        return redirect()->route('branch.index')->with('thongbaoo','Sửa thành công!');
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
        $Branches = Branch::find($id);
        $Branches->status=0;
        $Branches->save();
        return redirect()->route('branch.index')->with('thongbao','Xóa thành công!');
    }
    public function getBranch($id)
    {
        $Managers = Manager::all();
        $Branches = Branch::find($id);
        return view('ChiNhanh/sua-branch')->with('Branch',$Branches)->with('Managers',$Managers);
    }
}
