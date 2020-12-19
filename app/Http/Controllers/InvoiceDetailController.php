<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoiceDetail;
use App\Models\Invoice;
use App\Models\Ticket;
class InvoiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $InvoiceDetails = InvoiceDetail::all();
        return view('ChiTietHoaDon/ds-invoicedetail')->with('InvoiceDetails',$InvoiceDetails);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Invoices = Invoice::all();
        $Tickets = Ticket::all();
        return view('ChiTietHoaDon/nhap-thong-tin-invoicedetail')->with('Invoices',$Invoices)->with('Tickets',$Tickets);
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
        $InvoiceDetails = new InvoiceDetail();
        $InvoiceDetails->invoice_id=$request->invoice_id;
        $InvoiceDetails->ticket_id=$request->ticket_id;
        $InvoiceDetails->status=$request->status=1;
        $InvoiceDetails->save();
        return redirect()->route('invoicedetail.index');
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
        $InvoiceDetails = InvoiceDetail::find($id);
        $InvoiceDetails->status=0;
        $InvoiceDetails->save();
        return redirect()->route('invoicedetail.index')->with('thongbao','Xóa thành công!');
    }
}
