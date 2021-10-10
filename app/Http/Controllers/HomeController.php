<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data =Record::orderBy('id', 'desc')->get();
        return view('home',compact('data'));
    }
    public function pdfGen($id)
    {
        $data = Record::where('id',$id)->first();
        $pdf = PDF::loadView('Admin.Header.generate',$data)->setPaper('a4', 'landscape');
        $name=$data->name_of_offician;
        $mob=$data->mobile;
        return $pdf->download('invoice.pdf');
    }
}
