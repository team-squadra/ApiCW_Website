<?php

function spaicon($getvalue,$wifi){
    if($getvalue == "1"){
        return'
            <i class="fas fa-spa"></i> Spa
        ';
    }
    else{
        $replacewifi=wifilicon($wifi);
        return'
            '.$replacewifi.'
        ';
    }
}

function parkingicon($getvalue,$wifi){
    if($getvalue == "1"){
        return'
            <i class="fas fa-parking"></i>  Parking 
        ';
    }
    else{
        $replacewifi=wifilicon($wifi);
        return'
            '.$replacewifi.'
        ';
    }
}

function baricon($getvalue,$wifi){
    if($getvalue == "1"){
        return'
            <i class="fas fa-glass-cheers"></i> Bar
        ';
    }
    else{
        $replacewifi=wifilicon($wifi);
        return'
            '.$replacewifi.'
        ';
    }
}

function poolicon($getvalue,$wifi){
    if($getvalue == "1"){
        return'
            <i class="fas fa-swimming-pool"></i> Pool
        ';
    }
    else{
        $replacewifi=wifilicon($wifi);
        return'
            '.$replacewifi.'
        ';
    }
}

function wifilicon($getvalue){
    if($getvalue == "1"){
        return'
            <i class="fas fa-wifi"></i> Wifi
        ';
    }
    else{
        return'';
    }
}

function setdescription($mydescription){

    $position=128; // Define how many characters you want to display.

    
    // Find what is the last character.
    $post = substr($mydescription,$position,1);

    if($post !=" "){

        while($post !=" "){
            $i=1;
            $position=$position+$i;
            $post = substr($mydescription,$position,1);
        }

    }

    $description = substr($mydescription,0,$position);

    // Display your message
    return $description;


}


?>