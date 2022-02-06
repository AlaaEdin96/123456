<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
class FormController extends Controller {
    var $attributes,
       $description,
       $chldrin,  
        $heading;
    public function __construct(  $description,   $chldrin,   $heading ) {
        $this->description = $description;
        $this->chldrin = $chldrin;
        $this->heading = $heading;
    }

    function render() {
        
        $output = "<form " . /* insert attributes here */ ">"
              . "<h1>" .$this->heading . "</h1>"
              . "<p>" .  $this->description . "</p>"
        ;
        // wrap your inputs in whatever output style you prefer:
        // ordered list, table, etc.
        foreach ($this->chldrin as $child) {
             
            $output .= $child;
        }
        $output .= "   <button type='submit' class='btn btn-primary'>Submit</button>
        </form>";
      
        return $output;
    }
}
