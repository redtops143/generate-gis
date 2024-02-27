<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\events;
use TCPDF;

class PDFController extends Controller
{
    public $family_roster;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filename = "demo.pdf";
        $id = 47529;
        $events = events::latest()->get();
        dd($events.'ssssssssssss');
       //$html = view()->make('pdf',$data)->render();

        // $pdf = new TCPDF;
        // $pdf::SetTitle('Hello World');
        // $pdf::AddPage();
        // $pdf::writeHTML($html,true,false,true,false,"");
        // $pdf::Output(public_path($filename),"F");

        // return response()->download(public_path($filename));

        return view('index',[ 'events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
