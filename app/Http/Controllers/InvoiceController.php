<?php

namespace App\Http\Controllers;
use App\Models\Invoice;
use App\User;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Invoices = Invoice::all();
        return view('HoaDon/ds-invoices')->with('Invoices',$Invoices);
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
        return view('HoaDon/nhap-thong-tin-invoices')->with('Users',$Users);
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
        $Invoices = new Invoice();
        $Invoices->user_id=$request->user_id;
        $Invoices->date=$request->date;
        $Invoices->status=$request->status=1;
        $Invoices->save();
        return redirect()->route('invoice.index');
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
        $Invoices = Invoice::find($id);
        $Invoices->status=0;
        $Invoices->save();
        return redirect()->route('invoice.index')->with('thongbao','Xóa thành công!');
    }
}
