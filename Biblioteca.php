<?php
    $num1=$_POST['numero1'];
    $num2=$_POST['numero2'];
    $operaciones=$_POST['operacion'];
    
    if( $operaciones=="sumar"){
        $suma=$num1+$num2;
        echo "el resultado de la suma es : ".$suma;
    }
        elseif ($operaciones=="restar"){
        $resta=$num1-$num2;
        echo "el resultado de la resta es : ".$resta;
    }
    elseif ($operaciones=="multiplicar"){
        $multiplicacion=$num1*$num2;
        echo "el resultado de la multiplicacion es : ".$multiplicacion;
    }
    elseif ($operaciones=="dividir"){
        $division=$num1/$num2;
        echo "el resultado de la division es : ".$division;
    }
?>

