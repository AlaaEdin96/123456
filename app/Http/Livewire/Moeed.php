<?php

namespace App\Http\Livewire;

use App\Models\Appointment;

use Livewire\Component;
use Livewire\WithPagination;

class Moeed extends Component
{
   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;
    public $DateEnd;
    public $DateStart;
    public $paginate=10;

    public function render()
    {
        $search= '%'.$this->searchTerm.'%';
        if ($this->DateStart!= null) {
            $moueds = Appointment::where('id_file','like', $search)
            ->whereDate('date', '=', $this->DateStart)
             ->paginate($this->paginate);
           
  
        };
        if ($this->DateStart!= null && $this->DateEnd!= null) {
            $moueds = Appointment::where('id_file','like', $search)
            ->whereBetween('date', [ $this->DateEnd,$this->DateStart])
             ->paginate($this->paginate);
           
  
        }
        else{
            $moueds = Appointment::where('id_file','like', $search)
              ->paginate($this->paginate);
        };
      //  dd(Mohajer::where('user_id',Auth::user()->id)->where('id_file','like', $search)->get());
         return view('livewire.moeed', 
        [
            'moueds' => $moueds
           
        ]
    );
  
    }
    public function login()
    {
        dd( $this->DateEnd, $this->DateStart);
    }
}
