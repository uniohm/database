<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from Account
        $account = DB::table('Account')->get();
        return view('account.index', compact('account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'ACC_No' => 'required',
            'Type_No' => 'required',
            'ACC_Name' => 'required',
            'ACC_Surname' => 'required',
            'Address' => 'required',
            'SubDistrict' => 'required',
            'District' => 'required',
            'Province' => 'required',
            'ZipCode' => 'required',
            'Balance' => 'required'
        ]);

        DB::table('Account')->insert([

            'ACC_No' => $request->ACC_No,
            'Type_No' => $request->Type_No,
            'ACC_Name' => $request->ACC_Name,
            'ACC_Surname' => $request->ACC_Surname,
            'Address' => $request->Address,
            'SubDistrict' => $request->SubDistrict,
            'District' => $request->District,
            'Province' => $request->Province,
            'ZipCode' => $request->ZipCode,
            'Dateop' => now(),
            'Balance' => $request->Balance

        ]);
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
}
