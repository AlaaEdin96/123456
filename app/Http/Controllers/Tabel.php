<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Tabel extends Controller
{
 
 
   public $model ;


public  $row=[];
public  $data=[];
public  $test=array();
public  $colomen=1;
 
public function __construct($model) {
    $this->model = $model::get();
}


 function render() {
   $blade=  $this-> tabel(
         $this-> theadbody($this->data),
         $this-> tbodybody($this->row)
    );
  
     return $blade;
 }


 function  tabel($body,$data)
 { 
    $tabel="<table class='table'>".$data.$body."</table>";
    return $tabel;
    
 }
 function  thead($colum)
 { 
    $blade="<th scope='col'>". $colum."</th>";
    array_push($this->row, $blade);
    return $this;
 }

 function  tbodyy($namecolomen)
 { 
  
   
    $col = 0;
  //  dd(count($this->model));
    foreach ($this->model as $item) {
        if ($namecolomen == 'user.name') {
            str_replace('.', '->', $namecolomen);
            $dd=[0 =>'user',1 =>'name'];

        //    $name=str_replace('.', '->', $namecolomen);
     
 
      
   //   dd($item->$dd[0]->$dd[1]);
     
        }

    $this->data[$col][$this->colomen]= $item->$namecolomen;
  //  $this->data[1][2]= '$item->$namecolomen';
    //$this->data[2][2]= '$item->$namecolomen';
    $col++;
    }
    $this->colomen++;
 //   $output.=$this->test[$row][$col-1]."</tr>";
   // $tt[]= $output;
   return $this;
  }
  
 
  
 
// tabel::thead('Name')->tbody('name')
 function  theadbody($chldrin)
 { 
     $outpudt=' <tbody> ';  

    foreach ($chldrin as $child) {
        $output = "<tr>";
        foreach ($child as $item) {
           
            $output .= " <td>".$item." </td>";
        }
       
         
        $output .='</tr>';
        $outpudt .=   $output;
       // dd( $output);  
    }
    $outpudt .= " </tbody>";
   // dd($outpudt);
    return $outpudt;
 }
 function tbodybody($chldrin)
 { 
     $output='<thead>';
    foreach ($chldrin as $child) {
             
        $output .= $child;
    } 
    $output .= "</thead>";
    return $output;
 }
}
