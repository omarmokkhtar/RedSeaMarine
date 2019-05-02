<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Customs_clearance;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('AdminHomePage');

        $user= User::find( Auth::id());

        $name = $user->name;

        if($user->flag == 0)
        {
            $clients = User::where( 'flag','=' ,1)->get();
            return view('Episodes.AddNewEpisode', array('clients'=>$clients , 'name'=>$name));

          //  return view('Episodes.AddNewEpisode');
        }
        elseif ($user->flag==1)
        {


            $clients = Customs_clearance::where( 'clients_id','=' , Auth::id())->get();

            $user= User::find( Auth::id());

            $name = $user->name;
            return view('ShowDataTable.AllClientEpisodes' , array('clients' => $clients , 'name' =>$name) );
            //return view('ClientHomePage');
        }
    }


}
