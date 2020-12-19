<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
    public function trangchu()
    {
        return view('TrangChinh/trang-chu');
    }
    public function login()
    {
        return view('TrangChinh/login');
    }
    public function dsUser()
    {
        return view('ds-user');
    }
    public function nhapThongTinUser()
    {
        return view('nhap-thong-tin-user');
    }
    public function dsInvoices()
    {
        return view('ds-invoices');
    }
    public function nhapThongTinInvoice()
    {
        return view('nhap-thong-tin-invoices');
    }
    public function dsManagers()
    {
        return view('ds-managers');
    }
    public function nhapThongTinManager()
    {
        return view('nhap-thong-tin-managers');
    }
    public function dsBranches()
    {
        return view('ds-branches');
    }
    public function nhapThongTinBranch()
    {
        return view('nhap-thong-tin-branches');
    }
    public function dsInvoiceDetail()
    {
        return view('ds-invoicedetail');
    }
    public function nhapThongTinInvoiceDetail()
    {
        return view('nhap-thong-tin-invoicedetail');
    }
    public function dsTickets()
    {
        return view('ds-tickets');
    }
    public function nhapThongTinTicket()
    {
        return view('nhap-thong-tin-tickets');
    }
    public function dsSeats()
    {
        return view('ds-seats');
    }
    public function nhapThongTinSeat()
    {
        return view('nhap-thong-tin-seats');
    }
    public function dsScreenings()
    {
        return view('ds-screenings');
    }
    public function nhapThongTinScreening()
    {
        return view('nhap-thong-tin-screenings');
    }
    public function dsCinemas()
    {
        return view('ds-cinemas');
    }
    public function nhapThongTinCinema()
    {
        return view('nhap-thong-tin-cinemas');
    }
    public function dsCountrys()
    {
        return view('ds-countrys');
    }
    public function nhapThongTinCountry()
    {
        return view('nhap-thong-tin-countrys');
    }
    public function dsMovies()
    {
        return view('ds-movies');
    }
    public function nhapThongTinMovie()
    {
        return view('nhap-thong-tin-movies');
    }
    public function dsMovieTypes()
    {
        return view('ds-moviestypes');
    }
    public function nhapThongTinMovieType()
    {
        return view('nhap-thong-tin-moviestypes');
    }
    public function dsActors()
    {
        return view('ds-actorslnMovies');
    }
    public function nhapThongTinActor()
    {
        return view('nhap-thong-tin-actorslnMovies');
    }
    public function sua()
    {
        return view('sua-country');
    }
}
