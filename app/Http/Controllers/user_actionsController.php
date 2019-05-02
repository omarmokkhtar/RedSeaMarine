<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;



class user_actionsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

    function returnClientReg()
    {
        $user= User::find( Auth::id());

        $name = $user->name;
        return view('Register.ClientRegistration' ,  array('name'=>$name));
    }

    function changePass(Request $request){

        $user= User::find( Auth::id());

        if(Hash::check($request->input('old_password'), $user->password)){

            $user->password = bcrypt($request->input('new_password'));

            $user->save();
            return redirect('/home');


        }else{

            echo "error";

            //return Response::json(['error' => 'كلمة المرور الحالية غير صحيحة'], 404); // Status code here
        }
    }
    function clientChangePassword(Request $request){

        $user= User::find( Auth::id());

        if(Hash::check($request->input('old_password'), $user->password)){

            $user->password = bcrypt($request->input('new_password'));

            return $user;
            $user->save();
            return redirect('/home');


        }else{

            echo "error";

            //return Response::json(['error' => 'كلمة المرور الحالية غير صحيحة'], 404); // Status code here
        }
    }

    function returnChangePassword()
    {
        $user= User::find( Auth::id());

        $name = $user->name;
        return view('ChangePassword.ChangeAdminPassword' , array('name'=>$name));
    }
    function returnClientChangePassword()
    {
        $user= User::find( Auth::id());

        $name = $user->name;
        return view('ChangePassword.ChangeClientPassword' , array('name'=>$name));
    }
}
