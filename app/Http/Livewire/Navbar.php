<?php

namespace App\Http\Livewire;

 
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
 
use TCG\Voyager\Policies\BasePolicy as BasePolicy;

class Navbar extends Component
{
    public $user_id='';
    public $mymoeeed='admin/moeed';
    public $Allmoeeed='admin/allmoeed';
    public $mondamat='admin/orginzations';
    public $Todaysmoeeed='admin/today';
    public  $Addappointment='admin/appointment/create';
    public $Statsticsurl='admin/statstics';
    public $Users_permissions_url='admin/roles';
    public $Users_edit_view_url='admin/users';
    public $orginzations_url='admin/orginzation';
    public $Nationalitys_edit_view_url='admin/nationality';
  //  public $Profile="admin/users/".$user_id."/edit";
    public $username;

    public function render()
    {
        return view('livewire.navbar');
    }

    public function mount()
    {
        $this->username=Auth::user()->name;
    }
    public function logout() {
      
        auth()->logout();
      
        return redirect('/admin');
    }
}
