<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Screening;
use App\Models\Seat;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Tickets = Ticket::all();
        return view('Ve/ds-tickets')->with('Tickets',$Tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Screenings = Screening::all();
        $Seats = Seat::all();
        return view('Ve/nhap-thong-tin-tickets')->with('Screenings',$Screenings)->with('Seats',$Seats);
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
        $Tickets = new Ticket();
        $Tickets->screening_id=$request->screening_id;
        $Tickets->seat_id=$request->seat_id;
        $Tickets->status=$request->status=1;
        $Tickets->save();
        return redirect()->route('ticket.index');
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
        $Tickets = Ticket::find($id);
        $Tickets->status=0;
        $Tickets->save();
        return redirect()->route('ticket.index')->with('thongbao','Xóa thành công!');
    }
}
