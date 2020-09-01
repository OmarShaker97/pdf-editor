<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInformation;
use mikehaertl\pdftk\Pdf;

class UserInformationController extends Controller
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
        return view('userinformation.insert');
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
        //dd($request);
        UserInformation::create($request->all());
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

    public function viewgeneratepdf(){
        return view('userinformation.generatepdf');
    }

    public function generatepdf(Request $request){
        //dd($request);
        $query = UserInformation::whereId($request->id);
        //dd($query->first());
        $pdf = new Pdf('./././KYC_arabic_with_fields.pdf');

        dd($pdf->getData());

        $pdf->fillForm([
            'Text1'=>'Omaaaar',
            'Text2' => 'Teeeeeest',
        ])
        ->flatten()
        ->saveAs('filled.pdf');

        if (!$pdf->saveAs('my.pdf')) {
            $error = $pdf->getError();
        }
        
    }
}
