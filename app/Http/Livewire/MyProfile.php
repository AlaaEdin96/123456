<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyProfile extends Component
{
    public $user_name;
    public $user_email;
    public $user_password;
    public function mount()
    {
        $this->user_name = Auth::user()->name;
        $this->user_email = Auth::user()->email;


    }

    public function render()
    {
        return view('livewire.my-profile');
    }

    public function edit()
    {
       
 
if( $this->user_password== null)
{
    User::whereId(Auth::user()->id)->update(
        ['name' => $this->user_name, 'email' => $this->user_email,]
    );
}
if( $this->user_password != null)
{
    User::whereId(Auth::user()->id)->update(
        ['name' => $this->user_name, 'email' => $this->user_email,'password' => Hash::make($this->user_password)]
    );
        
}
   redirect("/admin/my-profile");
    session()->flash('message', "Your Editing successfully");
         
      
    }
}
