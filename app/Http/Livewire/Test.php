<?php

namespace App\Http\Livewire;

use App\Http\Controllers\FormController;
use App\Http\Controllers\Input;
use App\Http\Controllers\Tabel;
use App\Models\User;
use Livewire\Component;
 
class Test extends Component
{
    public $text;
   
    public function mount()
    {
        
        
        $tabel = new Tabel('App\Models\User') ;
         $input = new Input;
        $tabel ->thead('Name')->tbodyy('name');
        $tabel ->thead('Code')->tbodyy('email');
        $tabel ->thead('User')->tbodyy('id');
 
        $this->text= $tabel ->render();
// tabel::thead('Name')->tbody('name')
        $form = new FormController(
            "ftr",
            [
                $input->render() ,
                $input->render() ,
                $input->render() ,
            ],
            'NEW',
        );
      //  $this->text=$form->render();
    }
   
        
 
    public function render()
    {
        return view('livewire.test',[
            'text'=>$this->text,
        ]);
    }
}
