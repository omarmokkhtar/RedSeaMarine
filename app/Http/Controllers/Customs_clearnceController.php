<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customs_clearnce;
use App\Customs_clearance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\User;
use Twilio;
use Illuminate\Support\Facades\Redirect;
class Customs_clearnceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    function returnArchive()
    {
        //$clients = Customs_clearance::where( 'flag','=' ,1)->get();

        $clients = Customs_clearance::join('users', 'customs_clearances.clients_id', '=', 'users.id')
            ->select('users.name as client_name', 'customs_clearances.*')
            ->where( 'customs_clearances.flag' , '=' , 1)
            ->get();

        $user= User::find( Auth::id());

        $name = $user->name;
        return view('DataTable.Archieve', array('clients'=>$clients , 'name' => $name));
    }

    function returnPage()
    {
        $clients = User::where( 'flag','=' ,1)->get();
        $user= User::find( Auth::id());

        $name = $user->name;
        return view('Episodes.AddNewEpisode', array('clients'=>$clients , 'name'=>$name));
    }
    function episodeBack($id)
    {
        $Customs_clearnce = Customs_clearance::find($id);

        $Customs_clearnce->flag = 0;

        $Customs_clearnce->save();
        return back();
    }
    function returnEpisodes()
    {
        //$customs = Customs_clearance::all();
       // $customs = Customs_clearance::where( 'flag' , '=' , 0)->get();

        $customs = Customs_clearance::join('users', 'customs_clearances.clients_id', '=', 'users.id')
            ->select('users.name as client_name', 'customs_clearances.*')
            ->where( 'customs_clearances.flag' , '=' , 0)
            ->get();
        $user= User::find( Auth::id());

        $name = $user->name;
        return view('DataTable.AllEpisodes', array('customs'=>$customs , 'name'=>$name));

    }

    function returnPrint()
    {
        //$customs = Customs_clearance::all();
        // $customs = Customs_clearance::where( 'flag' , '=' , 0)->get();

        $customs = Customs_clearance::join('users', 'customs_clearances.clients_id', '=', 'users.id')
            ->select('users.name as client_name', 'customs_clearances.*')
            ->where( 'customs_clearances.flag' , '=' , 0)
            ->get();

        $user= User::find( Auth::id());

        $name = $user->name;
        return view('DataTable.printTable', array('customs'=>$customs , 'name' => $name));

    }


    /*
    function completeData()
    {
        return view('Episodes.CompleteEpisodes');
    }
    */
    function completeEpisodes()
    {
        $customs = Customs_clearance::join('users', 'customs_clearances.clients_id', '=', 'users.id')
            ->select('users.name as client_name', 'customs_clearances.*')
            ->where( 'customs_clearances.flag' , '=' , 0)
            ->get();

        $user= User::find( Auth::id());

        $name = $user->name;
        //return $customs;
        return view('Episodes.CompleteEpisodes', array('customs'=>$customs , 'name'=>$name));
    }

    function returnCurrentData($id)
    {
        $customs=  Customs_clearance::findOrFail($id);

        $user= User::find( Auth::id());

        $name = $user->name;

        return view('DataTable.ShowEpisode' , array('customs'=>$customs , 'name' => $name));
    }

    function returnArchiveData($id)
    {
        $clients=  Customs_clearance::findOrFail($id);
        $user= User::find( Auth::id());

        $name = $user->name;
        return view('DataTable.ShowArchiveEpisode' , array('clients'=>$clients , 'name'=> $name));
    }

    function create(Request $request)
    {
        //$twilio = new Aloha\Twilio\Twilio('ACd6a9eac12542e5b0c2f3bc03c69229a2', 'e2eed24a7278fcc48750e4f99cce51b5', '+17752340599');
       // $twilio = new Twilio::sms('+201118053900', 'Pink Elephants and Happy Rainbows');
        //Twilio::sms('+201118053900', 'Message text');
       // Twilio::message('+201118053900', 'Hussien ya gamed!');

        $rules = array(
            'box_number' => 'required',
            'policy_no' =>'required',
            'type' =>'required',
            'power_of_attorney' =>'required',
            'doc_date' =>'required'

        );
        $messages = array(
            'box_number' => 'box number filed is missing ',
            'policy_no' =>'policy filed is missing ',
            'type' =>'type field is missing ',
            'power_of_attorney' =>'powerOfAttorney field is missing ',
            'doc_date' =>' document field is missing '
        );
        $validator = Validator::make(input::all(), $rules , $messages);
        if(!$validator ->fails())
        {
            $client_id = $request->input('user_id');
            $emp_name = User::find(Auth::id());
            $client_number = User::find($client_id);
            $client_num = $client_number->mobile;
            $notes=$request->input('notes');
            $Customs_clearnce = new Customs_clearance();
            $Customs_clearnce->clients_id =  $request->input('user_id');
            $Customs_clearnce->employee_name = $emp_name->name;
            $Customs_clearnce->container_20 = $request->input('container_20');
            $Customs_clearnce->container_40 = $request->input('container_40');
            $Customs_clearnce->container_number = $request->input('container_number');
            $Customs_clearnce->box_number = $request->input('box_number');
            $Customs_clearnce->policy_no = $request->input('policy_no');
            $Customs_clearnce->type = $request->input('type');
            $Customs_clearnce->powerOfAttorney = $request->input('power_of_attorney');
            $Customs_clearnce->doc_date = $request->input('doc_date');
            $Customs_clearnce->notes = $notes;
            $Customs_clearnce->flag = 0;
            $Customs_clearnce->save();

            if ($notes) {

                Twilio::message($client_num, $notes);
            }
            else{
                Twilio::message($client_num, 'Episode added');

            }

            return back();
        }
        else{
            //return json_encode($validator->messages());

            return Redirect::back()->withErrors($validator->messages());

           // return response()->json($validator->messages(),500);
        }
        /*
        $accountSid = env('TWILIO_ACCOUNT_SID');
        $authToken = env('TWILIO_AUTH_TOKEN');
        $twilioNumber = env('TWILIO_NUMBER');
        */


    }



    function  delete($id)
    {
         Customs_clearance::destroy($id);
         return back();
    }


    function createPhase2(Request $request , $id)
    {
        $rules = array(
            'container_arrival'=>'required',
            'date_of_withdrawal' =>'required',
            'certificate_reg' => 'required',
            'certificate_no' => 'required',
            'checkup_date' =>'required',


        );
        $messages = array(
            'container_arrival'=>'Container is missing ',
            'date_of_withdrawal' =>'withdrawal filed is missing ',
            'certificate_reg' => 'certificate_reg filed is missing',
            'certificate_no' => 'certificate_no filed is missing ',
            'checkup_date' =>'checkup_date filed is missing ',

        );
        $validator = Validator::make(input::all(), $rules , $messages);
        if(!$validator ->fails())
        {

            //$Customs_clearnce = new Customs_clearance();

            $Customs_clearnce = Customs_clearance::find($id);
            $client_id = $Customs_clearnce->clients_id;
            $Customs_clearnce->container_arrival = $request->input('container_arrival') ;
            $Customs_clearnce->date_of_withdrawal = $request->input('date_of_withdrawal');
            $Customs_clearnce->certificate_reg = $request->input('certificate_reg');
            $Customs_clearnce->certificate_no = $request->input('certificate_no');
            $Customs_clearnce->checkup_date = $request->input('checkup_date');
            $Customs_clearnce->save();

            $clinet = User::find($client_id);
            $client_number = $clinet->mobile;
            Twilio::message($client_number, 'Phase 2 added');

            return back();

        }
        else{
            return response()->json($validator->messages(),500);
        }
    }


    function updateArchive($id)
    {
        $Customs_clearance = Customs_clearance::find($id);
        $Customs_clearance->flag=1;
        $Customs_clearance->save();
        return back();
    }


    function updatePhase2($request)
    {
        $rules = array(
            'container_arrival'=>'required',
            'date_of_withdrawal' =>'required',
            'certificate_reg' => 'required',
            'certificate_no' => 'required',
            'checkup_date' =>'required',


        );
        $messages = array(
            'container_arrival'=>'Container is missing ',
            'date_of_withdrawal' =>'withdrawal filed is missing ',
            'certificate_reg' => 'certificate_reg filed is missing',
            'certificate_no' => 'certificate_no filed is missing ',
            'checkup_date' =>'checkup_date filed is missing ',
        );
        $validator = Validator::make(input::all(), $rules , $messages);
        if(!$validator ->fails())
        {

            $id = $request->input('id');
            $Customs_clearnce = Customs_clearnce::find($id);
            $Customs_clearnce->container_arrival = $request->input('container_arrival');
            $Customs_clearnce->date_of_withdrawal = $request->input('date_of_withdrawal');
            $Customs_clearnce->certificate_reg = $request->input('certificate_reg');
            $Customs_clearnce->certificate_no = $request->input('certificate_no');
            $Customs_clearnce->checkup_date = $request->input('checkup_date');
            $Customs_clearnce->save();
        }
        else{
            return response()->json($validator->messages(),500);
        }
    }

    function createPhase3(Request $request , $id)
    {
        $rules = array(
            'primary'=>'required',
            'detection_date' =>'required',
            'imports_of_varieties' => 'required',
            'customs_after_precious' => 'required',
            'commission_fees' =>'required',
            'transaction' =>'required',


        );
        $messages = array(
            'primary'=>'Container is missing ',
            'detection_date' =>'withdrawal filed is missing ',
            'imports_of_varieties' => 'certificate_reg filed is missing',
            'customs_after_precious' => 'certificate_no filed is missing ',
            'transaction' =>'checkup_date filed is missing ',
            'commission_fees' =>'checkup_date filed is missing ',

        );
        $validator = Validator::make(input::all(), $rules , $messages);
        if(!$validator ->fails())
        {
            //$Customs_clearnce = new Customs_clearance();
            $Customs_clearnce = Customs_clearance::find($id);
            $client_id = $Customs_clearnce->clients_id;

            $Customs_clearnce->primary = $request->input('primary') ;
            $Customs_clearnce->detection_date = $request->input('detection_date');
            $Customs_clearnce->imports_of_varieties = $request->input('imports_of_varieties');
            $Customs_clearnce->customs_after_precious = $request->input('customs_after_precious');
            $Customs_clearnce->commission_fees = $request->input('commission_fees');
            $Customs_clearnce->transaction = $request->input('transaction');

            $Customs_clearnce->save();
            $clinet = User::find($client_id);
            $client_number = $clinet->mobile;
            Twilio::message($client_number, 'Phase 3 added');

            return back();

        }
        else{
            return response()->json($validator->messages(),500);
        }
    }


    function createPhase4(Request $request , $id)
    {
        $rules = array(
            'transportation_contractor'=>'required',



        );
        $messages = array(
            'transportation_contractor'=>'Container is missing ',


        );
        $validator = Validator::make(input::all(), $rules , $messages);
        if(!$validator ->fails())
        {
            //$Customs_clearnce = new Customs_clearance();
            $Customs_clearnce = Customs_clearance::find($id);
            $client_id = $Customs_clearnce->clients_id;

            $Customs_clearnce->transportation_contractor = $request->input('transportation_contractor');
           // $Customs_clearnce->finalCheck = $request->input('finalCheck');



            if($request->input('finalCheck') ==1)
            {
                $Customs_clearnce->matching = $request->input('matching');

            }
            elseif ($request->input('finalCheck') ==2)
            {
                $Customs_clearnce->resetting = $request->input('resetting');

            }

            $clinet = User::find($client_id);
            $client_number = $clinet->mobile;
            Twilio::message($client_number, 'Phase 4 added');
            $Customs_clearnce->save();
            return back();

        }
        else{
            return response()->json($validator->messages(),500);
        }
    }

    function updateallItems( Request $request , $id)
    {
        $rules = array(
            'container_arrival'=>'required',
            'date_of_withdrawal' =>'required',
            'certificate_reg' => 'required',
            'certificate_no' => 'required',
            'checkup_date' =>'required',


        );
        $messages = array(
            'container_arrival'=>'Container is missing ',
            'date_of_withdrawal' =>'withdrawal filed is missing ',
            'certificate_reg' => 'certificate_reg filed is missing',
            'certificate_no' => 'certificate_no filed is missing ',
            'checkup_date' =>'checkup_date filed is missing ',
        );
        $validator = Validator::make(input::all(), $rules , $messages);
        if(!$validator ->fails())
        {

            $Customs_clearnce = Customs_clearance::find($id);
            $Customs_clearnce->importer = $request->input('importer');
            $Customs_clearnce->container_20 = $request->input('container_20');
            $Customs_clearnce->container_40 = $request->input('container_40');
            $Customs_clearnce->container_number = $request->input('container_number');
            $Customs_clearnce->box_number = $request->input('box_number');
            $Customs_clearnce->policy_no = $request->input('policy_no');
            $Customs_clearnce->type = $request->input('type');
            $Customs_clearnce->powerOfAttorney = $request->input('power_of_attorney');
            $Customs_clearnce->doc_date = $request->input('doc_date');


            $Customs_clearnce->container_arrival = $request->input('container_arrival');
            $Customs_clearnce->date_of_withdrawal = $request->input('date_of_withdrawal');
            $Customs_clearnce->certificate_reg = $request->input('certificate_reg');
            $Customs_clearnce->certificate_no = $request->input('certificate_no');
            $Customs_clearnce->checkup_date = $request->input('checkup_date');

            $Customs_clearnce->primary = $request->input('primary');
            $Customs_clearnce->detection_date = $request->input('detection_date');
            $Customs_clearnce->imports_of_varieties = $request->input('imports_of_varieties');
            $Customs_clearnce->customs_after_precious = $request->input('customs_after_precious');
            $Customs_clearnce->commission_fees = $request->input('commission_fees');
            $Customs_clearnce->transaction = $request->input('transaction');
            $Customs_clearnce->transportation_contractor = $request->input('transportation_contractor');



            if($request->input('finalCheck') ==1)
            {
                $Customs_clearnce->matching = $request->input('matching');

            }
            elseif ($request->input('finalCheck') ==2)
            {
                $Customs_clearnce->resetting = $request->input('resetting');

            }
            $Customs_clearnce->save();
            return back();
        }
        else{
            return response()->json($validator->messages(),500);
        }
    }
}
