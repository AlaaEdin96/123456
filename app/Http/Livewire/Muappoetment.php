<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
 
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Muappoetment extends Component
{
    public $searchTerm;
    public function login($mohajerId)
    {
        
        Appointment::where('id',$mohajerId)->update([ 'is_c' => 1]);
     
    

        return  redirect()->route('/admin/today')->with('success','Operation Successful !');
    }
     
    
    public function render()
    {  
        
        $search= '%'.$this->searchTerm.'%';
          return view('livewire.muappoetment',
    [
        'moueds'=> Appointment::where('date','=',Carbon::today())->where('id_file','like', $search)->paginate(10)
    ]);
    }
}
