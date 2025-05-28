

<?



function conta_elementi_in_vettore($myvett , $elemento ){


    $numero_elementi = 0;


    foreach($myvett as $current_value){
        if($elemento == $current_value)
            $numero_elementi++;
    }

    return  $numero_elementi;
}


?>