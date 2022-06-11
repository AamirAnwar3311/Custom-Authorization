<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd($request->all());

        // Conditional Statements

        //  $variable_name = ModelName::WhereClause('column_name', '=', '$request->email');
        $user = User::where('email', '=', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('user_id', $user->id);
                return redirect()->route('dashboard');
                // dd(session()->all());
            }else {
                echo "Your Session Has Not Been Stored";
            }
        }else {
            echo "Email Is Not Correct!";
        }
    }

    public function register(){
        return view('register');
    }

    public function store(Request $request){
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required | same:password',
        ]);

        // dd($request->all());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login');
    }

    public function logout(Request $request){
        $request->session()->forget('user_id');
        return redirect()->route('login');
    }
}
