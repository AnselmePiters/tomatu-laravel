<?php

namespace App\Http\Controllers;

use App\Models\SiteIdentity;
use Illuminate\Http\Request;

class SiteIdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteIdentity = SiteIdentity::all()->first();
        return view("SiteIdentity.index")->with("siteIdentity", $siteIdentity);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("SiteIdentity.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        SiteIdentity::create($input);
        return redirect('site_identity')->with('flash_message', 'Infos ajoutées avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteIdentity  $SiteIdentity
     * @return \Illuminate\Http\Response
     */
    public function show(SiteIdentity $SiteIdentity)
    {
        // $siteIdentity = SiteIdentity::where();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteIdentity  $SiteIdentity
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $siteIdentity = SiteIdentity::find("1");
        return view('SiteIdentity.edit')->with('siteIdentity', $siteIdentity);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteIdentity  $SiteIdentity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $siteIdentity = SiteIdentity::find("1");
        $input = $request->all();
        $siteIdentity->update($input);
        return redirect('site_identity')->with('flash_message', 'Infos modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteIdentity  $SiteIdentity
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteIdentity $SiteIdentity)
    {
        //
    }
}
