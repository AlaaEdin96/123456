<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use App\Models\Mohajer;
use Livewire\Component;

class Ehsaat extends Component
{
    public $fromDate= null;
    public $toDate = null;
    public function render()
    {
      if($this->fromDate == null || $this->toDate == null )

      {
            $itmes =Appointment::get();
      }

        if($this->toDate != null && $this->fromDate != null)

        {
          
          $itmes =Appointment::whereBetween('date', [$this->fromDate,  $this->toDate])->get();
        // dd( Appointment::whereBetween('date', [$this->fromDate,  $this->toDate])->get());
         }
 

        
        return view('livewire.ehsaat',

        [
            'items'=>$itmes

        ]);
    }
}
