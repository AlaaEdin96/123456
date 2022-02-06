<?php

namespace App\Http\Livewire;

use App\Models\User ;
use Livewire\Component;
use Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class LoginRegister extends Component
{
    public $users, $email, $password, $name,$convert_password;
    public $registerForm = false;

    public function render()
    {
        return view('livewire.login-register');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function login()
    {
         
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
               redirect("/admin/home");
                session()->flash('message', "You are Login successful.");
        }else{
             
            session()->flash('error', 'email and password are wrong.');
        }
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore()
    {
       
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'convert_password' => 'required',
        ]);

        $this->password = Hash::make($this->password); 

        $user =  User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);
        event(new Registered($user));
        auth()->login($user);
        redirect("/admin/login");
        session()->flash('message', "Your register successfully Go to the login page");

        $this->resetInputFields();

    }
}

