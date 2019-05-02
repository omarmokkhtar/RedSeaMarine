<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Customs_clearance;
use App\financial_report;


class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function returnName()
    {
        $userName = User::find(Auth::id());
        $user= User::find( Auth::id());

        $name = $user->name;

        return view('ClientHomePage', array('$userName'=>$userName , 'name'=>$name));
    }
    function returnPage()
    {

        $id = Auth::id();
        $clients = Customs_clearance::where( 'clients_id','=' ,$id)->get();
        $user= User::find( Auth::id());

        $name = $user->name;
        return view('ShowDataTable.AllClientEpisodes' , array('clients' => $clients , 'name' =>$name) );
    }

    function returnCurrentEpisode($id)
    {

        $clients = Customs_clearance::where( 'id','=' ,$id)->first();
        $user= User::find( Auth::id());

        $name = $user->name;
        // return $clients;
        return view('ShowDataTable.ShowClientEpisode' , array('clients' => $clients , 'name'=>$name) );
    }

    function returnFinReport($id)
    {

        //$id = Auth::id();
        $finReport = financial_report::where( 'cc_id','=' ,$id)->first();
        $user= User::find( Auth::id());

        $name = $user->name;
        // return $clients;
        if((empty($finReport)))
        {
            $finReport=0;
            return view('ShowDataTable.ClientFinancialReport' , array('finReport' => $finReport , 'name'=>$name) );

        }
        else
        {
            return view('ShowDataTable.ClientFinancialReport' , array('finReport' => $finReport , 'name'=>$name) );

        }
    }



    function create(Request $request)
    {
        $rules = array(
            'name'=>'required',
            'password' => 'required',
            'tax_number' =>'required',
            'mobile' => 'required|max:11'

        );
        $messages = array(
            'name' => 'The company name field is empty!',
            'password' =>'The password field is empty',
            'tax_number' =>'The tax no field is empty',
            'mobile' => 'The mobile no field is empty'
        );
        $validator = Validator::make(input::all(), $rules , $messages);
        if(!$validator ->fails())
        {
            $client = new User();
            $client->name = $request->input('name');
            if($client->password = $request->input('password') ==  $client->password = $request->input('re_password'))
            {
                $client->password = bcrypt($request->input('password'));

            }
            $client->tax_number = $request->input('tax_number');
            $number = '+2';
            $number .= $request->input('mobile');
            $client->mobile = $number;
            $client->email = $request->input('email');
            $client->flag =1;
            $client->save();
            return back();

        }
        else{
            return response()->json($validator->messages(),500);
        }
    }
    function update(Request $request)
    {

        $rules = array(
            'company_name'=>'required',
            'password' => 'required',
            'taxNo' =>'required',
            'mobileNo' => 'required|max:11'

        );
        $messages = array(
            'company_name' => 'The company name field is empty!',
            'password' =>'The password field is empty',
            'taxNo' =>'The tax no field is empty',
            'mobileNo' => 'The mobile no field is empty'
        );
        $validator = Validator::make(input::all(), $rules , $messages);
        if($validator->fails())
        {
            $id = $request->input('id');
            $client = client::find($id);
            $client->company_name = $request->input('comapny_name');
            $client->password = $request->input('password');
            $client->taxNo = $request->input('taxNo');
            $client->mobileNo= $request->input('mobileNo');
            $client->email = $request->input('email');

            $client->save();
        }
        else{
            return response()->json($validator->messages(),500);
        }



    }
    function read()
    {
        $clients = User::where( 'flag','=' ,1)->get();
        $user= User::find( Auth::id());

        $name = $user->name;
        return view('Register.ClientRegistration', array('clients'=>$clients , 'name' =>$name));
    }

    function readAdmin()
    {
        $admins = User::where( 'flag','=' ,0)->get();
        $user= User::find( Auth::id());

        $name = $user->name;
        return view('Register.AdminRegistration', array('admins'=>$admins , 'name'=>$name));
    }

    function  createAdmin(Request $request)
    {
        $rules = array(
            'name'=>'required',
            'password' => 'required',


        );
        $messages = array(
            'name' => 'The company name field is empty!',
            'password' =>'The password field is empty',

        );
        $validator = Validator::make(input::all(), $rules , $messages);
        if(!$validator ->fails())
        {
            $client = new User();
            $client->name = $request->input('name');
            if($client->password = $request->input('password') ==  $client->password = $request->input('re_password'))
            {
                $client->password = bcrypt($request->input('password'));

            }
            $client->email = $request->input('email');
            $client->flag =0;
            $client->save();
            return back();

        }
        else{
            return response()->json($validator->messages(),500);
        }
    }


    function delete($id){
        User::destroy($id);
        return back();
    }



}
