<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
 
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class TabelIdUser extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;
 
    public $paginate=10;


    public $fromDate= null;
    public $toDate = null;
    
    public function render()
    {
        $search= '%'.$this->searchTerm.'%';

        if($this->fromDate == null || $this->toDate == null )

        {
              $itmes =Appointment::where('id_file','like', $search)->paginate($this->paginate);
        }
  
          if($this->toDate != null && $this->fromDate != null)
  
          {
            
            $itmes =Appointment::where('user_id',Auth::user()->id)->where('id_file','like', $search)->whereBetween('date', [$this->fromDate,  $this->toDate])->paginate($this->paginate);
 
            }        

      ;
      //  dd(Mohajer::where('user_id',Auth::user()->id)->where('id_file','like', $search)->get());
         return view('livewire.tabel-id-user', 
        [
            'moueds' => $itmes
           
        ]
    );
  
    }
    public function login()
    {
        dd( Auth::user()->can('browse_admin'));
    }
}
