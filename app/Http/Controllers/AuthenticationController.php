<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('web.login', [
            'title' => 'Inventory Mate - Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // Validate the user
        $authentication = [
            'user' => 'email',
            'password' => 'required'
        ];
    
        // Message to be displayed if validation fails
        $feedback = [
            'user.email' => 'Please enter a valid email address',
            'password.required' => 'Please enter your password'
        ];
    
        $request->validate($authentication, $feedback);
    
        // check on db if user exists
        $email = $request->get('user');
        $password = $request->get('password');
    
        $user = User::where('email', $email)->first();
    
        if ($user && Hash::check($password, $user->password)) {
            session_start();
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;
    
            return redirect()->route('app.home');
        } else {
            // User does not exist or password is incorrect
            return redirect()->route('web.login')->with('error', 'Invalid email or password');
        }
    }
    

    public function logout()
    {

        session_destroy();

        return redirect()->route('web.home');
    }
}
