<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Input extends Controller
{
    var  $input  ="<label for='exampleInputEmail1' class='form-label'>Email address</label>
    <input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'>
    <div id='emailHelp' class='form-text'>We'll never share your email with anyone else.</div>
";
    

function render() {

    $output = "<div class='mb-3'>" 
    
           . $this->input  
      
    ;

    $output .= "</div>";
  
    return $output;
}
}
