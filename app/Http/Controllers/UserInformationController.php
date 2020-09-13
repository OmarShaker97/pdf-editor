<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInformation;
use mikehaertl\pdftk\Pdf;
use setasign\Fpdi\Fpdi;

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
        $dict = array("name"=>"TextField4","address"=>"TextField5","country"=>"TextField6", "city"=>"TextField7", "telephone"=>"TextField8", "fax"=>"TextField9", "email"=>"TextField10");

        $query = UserInformation::whereId($request->id)->first();

        $pdf = new Pdf(storage_path('app/public/KYC_eng.pdf'));

        $new_pdf_name = "filled_".$query->name."_".$query->id.".pdf";

        $pdf->fillForm([
            $dict["name"]=>$query->name,
            $dict["address"]=>$query->address,
            $dict["country"]=>$query->country,
            $dict["city"]=>$query->city,
            $dict["telephone"]=>$query->telephone,
            $dict["fax"]=>$query->fax,
            $dict["email"]=>$query->email,
        ])
        ->needAppearances()
        ->saveAs(storage_path('app/public/'.$new_pdf_name));


      //  dd($pdf->getDataFields());

        if (!$pdf->saveAs('my.pdf')) {
            $error = $pdf->getError();
        }

        
        // $fpdi = new Fpdi();
        
        // $pages_count = $fpdi->setSourceFile(storage_path('app/public/'.$new_pdf_name));

        // for($i = 1; $i <= $pages_count; $i++){
        //     $fpdi->AddPage(); 
        //     $tplIdx = $fpdi->importPage($i);
        //     $fpdi->useTemplate($tplIdx, 0, 0); 
        // }

        // $fpdi->Output(storage_path('app/public/'.$new_pdf_name), 'I'); 
    }
}