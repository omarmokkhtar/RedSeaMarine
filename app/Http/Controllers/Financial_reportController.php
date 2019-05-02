<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\financial_report;
use App\Customs_clearance;
use App\User;
use Illuminate\Support\Facades\Auth;

use Twilio;
class Financial_reportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');




    }


    function returnPage($id)
    {
        $user= User::find( Auth::id());

        $name = $user->name;

        return view('Episodes.AddFinancialReport', array('id' => $id , 'name'=> $name));
    }

    function  returnFinReport($id)
    {
        $finReport = financial_report::where( 'cc_id' , '=' , $id)->first();
       // $finReport=  financial_report::findOrFail($id);

        //$finReport = financial_report::where( 'cc_id','=' ,$id)->findOrFail();
        //if(array_key_exists('id', $finReport))
        $user= User::find( Auth::id());

        $name = $user->name;
        return view('Episodes.showFinancialReport', array('finReport'=>$finReport , 'name' =>$name));

         //return view('Episodes.showFinancialReport', array('finReport' => $finReport));







    }
    function  archiveFinReport($id)
    {
        //$finReport = financial_report::where( 'cc_id' , '=' , $id)->get();
        $finReport=  financial_report::findOrFail($id);
        $user= User::find( Auth::id());

        $name = $user->name;
        return view('Episodes.archiveFinReport', array('finReport'=>$finReport , 'name' =>$name));


    }


    function create(Request $request , $id)
    {

        /*
        $rules = array(
        'custom_fees' =>'required',
        'supervisoryAuthority_Fees' => 'required',
        'imports_exports_fees' => 'required',
        'dumpsReturn_fees' => 'required',
        'navigational_fees' => 'required',
        'form_fees' => 'required',
        'bank_communion_fees' => 'required',
        'eServices_fees' => 'required',
        'navigational_fine_fees' => 'required',
        'storage_fees' => 'required',
        'tax_report_fees' => 'required',
        'transportation_fees' => 'required',
        'summary_fees' => 'required',
        'container_transportation_fees' => 'required',
        'road_fees' => 'required',
        'total_amount' => 'required',
        'req_transactions' => 'required'
        );

        $messages = array(
            'custom_fees' =>'The field is empty ',
            'supervisoryAuthority_Fees' => 'The field is empty',
            'imports_exports_fees' => 'The field is empty',
            'dumpsReturn_fees' => 'The field is empty',
            'navigational_fees' => 'The field is empty',
            'form_fees' => 'The field is empty',
            'bank_communion_fees' => 'The field is empty',
            'eServices_fees' => 'The field is empty',
            'navigational_fine_fees' => 'The field is empty',
            'storage_fees' => 'The field is empty',
            'tax_report_fees' => 'The field is empty',
            'transportation_fees' => 'The field is empty',
            'summary_fees' => 'The field is empty',
            'container_transportation_fees' => 'The field is empty',
            'road_fees' => 'The field is empty',
            'total_amount' => 'The field is empty',
            'req_transactions' => 'The field is empty'
        );

        $validator = Validator::make(input::all(), $rules , $messages);


        if($validator ->fails())
        {
        */
       // $financial_report = financial_report::find($id);



        $financial_report = new financial_report();
        $req_transactions_value= $request->input('req_transactions');
            $financial_report->cc_id = $id;

            $financial_report->custom_fees = $request->input('custom_fees');
            $financial_report->supervisoryAuthority_Fees = $request->input('supervisoryAuthority_Fees');
            $financial_report->imports_exports_fees = $request->input('imports_exports_fees');
            $financial_report->dumpsReturn_fees = $request->input('dumpsReturn_fees');
            $financial_report->navigational_fees = $request->input('navigational_fees');
            $financial_report->form_fees = $request->input('form_fees');
            $financial_report->bank_communion_fees = $request->input('bank_communion_fees');
            $financial_report->eServices_fees = $request->input('eServices_fees');
            $financial_report->navigational_fine_fees = $request->input('navigational_fine_fees');
            $financial_report->storage_fees = $request->input('storage_fees');
            $financial_report->tax_report_fees = $request->input('tax_report_fees');
            $financial_report->summary_fees = $request->input('summary_fees');
            $financial_report->container_transportation_fees = $request->input('container_transportation_fees');
            $financial_report->road_fees = $request->input('road_fees');
            $financial_report->total_amount = $request->input('total_amount');
            $financial_report->req_transactions = $request->input('req_transactions');
            $financial_report->noloon_fees = $request->input('noloon_fees');
            $financial_report->insurance_fee = $request->input('insurance_fee');
            $financial_report->other_fees = $request->input('other_fees');
            $financial_report->other_fees2 = $request->input('other_fees2');
            $financial_report->old_amount = $request->input('old_amount');
            $financial_report->procedures_fees = $request->input('procedures_fees');
            $financial_report->transportation_fees = $request->input('transportation_fees');
            $financial_report->total_amount = $request->input('total_amount');
            $financial_report->req_transactions =$req_transactions_value;
            $financial_report->notes = $request->input('notes');

        $client= Customs_clearance::find($id);
        $client_id = $client->clients_id;
        $client_number = User::find($client_id);
        $client_num = $client_number->mobile;

            $financial_report->save();
        Twilio::message($client_num, $req_transactions_value);

        //$this->sendMessage($id , $req_transactions_value);
            return back();
/*
        }
        else
        {
            return response()->json($validator->messages(),500);

        }

*/
    }
    function sendMessage($id , $message)
    {


        //return $client_id;

       // $client_number = User::find($client_id);
        $client_num = $client_number->mobile;
        Twilio::message($client_num, $message);



    }

    function update( Request $request , $id)
    {
        /*
        $rules = array(
            'custom_fees' =>'required',
            'supervisoryAuthority_Fees' => 'required',
            'imports_exports_fees' => 'required',
            'dumpsReturn_fees' => 'required',
            'navigational_fees' => 'required',
            'form_fees' => 'required',
            'bank_communion_fees' => 'required',
            'eServices_fees' => 'required',
            'navigational_fine_fees' => 'required',
            'storage_fees' => 'required',
            'tax_report_fees' => 'required',
            'transportation_fees' => 'required',
            'summary_fees' => 'required',
            'container_transportation_fees' => 'required',
            'road_fees' => 'required',
            'total_amount' => 'required',
            'req_transactions' => 'required'
        );

        $messages = array(
            'custom_fees' =>'The field is empty ',
            'supervisoryAuthority_Fees' => 'The field is empty',
            'imports_exports_fees' => 'The field is empty',
            'dumpsReturn_fees' => 'The field is empty',
            'navigational_fees' => 'The field is empty',
            'form_fees' => 'The field is empty',
            'bank_communion_fees' => 'The field is empty',
            'eServices_fees' => 'The field is empty',
            'navigational_fine_fees' => 'The field is empty',
            'storage_fees' => 'The field is empty',
            'tax_report_fees' => 'The field is empty',
            'transportation_fees' => 'The field is empty',
            'summary_fees' => 'The field is empty',
            'container_transportation_fees' => 'The field is empty',
            'road_fees' => 'The field is empty',
            'total_amount' => 'The field is empty',
            'req_transactions' => 'The field is empty'
        );

        $validator = Validator::make(input::all(), $rules , $messages);

        if($validator->fails())
        {
        */
            //$id = $request->input('id');
            $financial_report = financial_report::find($id);

            $financial_report->custom_fees = $request->input('custom_fees');
            $financial_report->supervisoryAuthority_Fees = $request->input('supervisoryAuthority_Fees');
            $financial_report->imports_exports_fees = $request->input('imports_exports_fees');
            $financial_report->dumpsReturn_fees = $request->input('dumpsReturn_fees');
            $financial_report->navigational_fees = $request->input('navigational_fees');
            $financial_report->form_fees = $request->input('form_fees');
            $financial_report->bank_communion_fees = $request->input('bank_communion_fees');
            $financial_report->eServices_fees = $request->input('eServices_fees');
            $financial_report->navigational_fine_fees = $request->input('navigational_fine_fees');
            $financial_report->storage_fees = $request->input('storage_fees');
            $financial_report->tax_report_fees = $request->input('tax_report_fees');
            $financial_report->summary_fees = $request->input('summary_fees');
            $financial_report->container_transportation_fees = $request->input('container_transportation_fees');
            $financial_report->road_fees = $request->input('road_fees');
            $financial_report->total_amount = $request->input('total_amount');
            $financial_report->req_transactions = $request->input('req_transactions');
            $financial_report->noloon_fees = $request->input('noloon_fees');
            $financial_report->insurance_fee = $request->input('insurance_fee');
            $financial_report->other_fees = $request->input('other_fees');
            $financial_report->other_fees2 = $request->input('other_fees2');
            $financial_report->old_amount = $request->input('old_amount');
            $financial_report->procedures_fees = $request->input('procedures_fees');
            $financial_report->transportation_fees = $request->input('transportation_fees');
            $financial_report->total_amount = $request->input('total_amount');
            $financial_report->req_transactions = $request->input('req_transactions');
            $financial_report->notes = $request->input('notes');

            $financial_report->save();
            return back();
    /*
    }
        else{
            return response()->json($validator->messages(),500);
        }
    */
    }

    function read()
    {
        return financial_report::all();
    }

    function readItem($id)
    {
        return financial_report::findOrFail($id);
    }

    function delete($id)
    {
        financial_report::destroy($id);
    }
}
