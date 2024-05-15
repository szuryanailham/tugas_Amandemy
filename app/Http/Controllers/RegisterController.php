<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        return view("Signup",[
            "title" =>"Form Sign Up",
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:3',
            'role' => 'required|in:admin,user',
            'tanggal_lahir' => 'required|date', 
            'alamat' => 'required|max:255',
            'gender' => 'required|in:male,female'
        ]);
    
        // Hash password before storing it in the database
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        // Create a new user record
        User::create($validatedData);
    
        // Flash a success message to the session
        // $request->session()->flash('success', 'Registrasi anda berhasil, silahkan login');
        
        return redirect('/login')->with('success', 'Registration successfull! please login');
        // Redirect to the specified route (assuming '/news' is a valid route name)
        
    }

}
