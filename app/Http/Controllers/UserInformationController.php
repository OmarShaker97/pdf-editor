<?php


namespace App\Http\Controllers;

#echo getcwd() . "\n";

require '../vendor/autoload.php';
#require_once '../vendor/tmw/fpdm/src/fpdm.php';

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
        
        return redirect()->route('viewgeneratepdf');
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

        // ----------------------- ORIGINAL CODE PHP-PDFTK ---------------------

        $dict = array("name"=>"TextField4","address"=>"TextField5","country"=>"TextField6", "city"=>"TextField7", "telephone"=>"TextField8", "fax"=>"TextField9", "email"=>"TextField10", "send"=>"RadioButton1", "chkphone"=>"CheckBox1");

        $query = UserInformation::whereId($request->id)->first();

        $pdf = new Pdf(storage_path('app/public/KYC_eng2.pdf'));

        $new_pdf_name = "filled_".$query->name."_".$query->id.".pdf";
        
        //$pdf->allow('AllFeatures');

        $pdf->fillForm([
            $dict["name"]=>$query->name,
            $dict["address"]=>$query->address,
            $dict["country"]=>$query->country,
            $dict["city"]=>$query->city,
            $dict["telephone"]=>$query->telephone,
            $dict["fax"]=>$query->fax,
            $dict["email"]=>$query->email,
            $dict["send"] => $query->send,
            $dict['chkphone']=>$query->chkphone
        ])
        ->needAppearances()
        // ->flatten()
        ->saveAs(storage_path('app/public/'.$new_pdf_name));
      

        if (!$pdf->saveAs('my.pdf')) {
            $error = $pdf->getError();
        }

        // ----------------------- NATIVE PHP ---------------------

        // $src = storage_path('app/public/'.$new_pdf_name);

        // dd($src);

        // $file = $_GET[$src]  . ".pdf"; 

        // $fp = fopen($file, "r");

        // while (!feof($fp)) { 
        //     echo fread($fp, 65536); 
        //     flush(); // This is essential for large downloads 
        // }  
          
        // fclose($fp);

         // ----------------------- FPDM Library ---------------------

        //  $fields = array(
        //     $dict["name"]=>$query->name,
        //     $dict["address"]=>$query->address,
        //     $dict["country"]=>$query->country,
        //     $dict["city"]=>$query->city,
        //     $dict["telephone"]=>$query->telephone,
        //     $dict["fax"]=>$query->fax,
        //     $dict["email"]=>$query->email,
        // );

            
        // $pdf = new FPDM('storage/KYC_eng4.pdf');
        // $pdf->useCheckboxParser = true; // Checkbox parsing is ignored (default FPDM behaviour) unless enabled with this setting
        // $pdf->Load($fields, false);
        // $pdf->Merge();
        // $pdf->Output('qaf.pdf', 'F');
        #$pdf = new FPDM(storage_path('app/public/KYC_eng.pdf'));
        #dd($pdf);
       # $pdf->Load($fields, false);
       # $pdf->Merge();

       # $pdf->Output(storage_path('app/public/'.$new_pdf_name), 'D');

    }
} 