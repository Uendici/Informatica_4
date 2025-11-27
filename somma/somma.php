
<?php
    $operazione = $_POST['operazione'];
    switch($operazione){
        case 'somma':
            $a = $_POST['a'];
            $b = $_POST['b'];
            $somma = $a + $b;
            echo "La somma di $a e $b è: $somma";
            break;
        case 'sottrazione':
            $a = $_POST['a'];
            $b = $_POST['b'];
            $sottrazione = $a - $b;
            echo "La sottrazione di $a e $b è: $sottrazione";
            break;
        case 'moltiplicazione':
            $a = $_POST['a'];
            $b = $_POST['b'];
            $moltiplicazione = $a * $b;
            echo "La moltiplicazione di $a e $b è: $moltiplicazione";
            break;
        case 'divisione':
            $a = $_POST['a'];
            $b = $_POST['b'];
            if($b != 0){
                $divisione = $a / $b;
                echo "La divisione di $a e $b è: $divisione";
            } else {
                echo "Errore: Divisione per zero non consentita.";
            }
            break;
        default:
            echo "Operazione non valida.";
    }
?>
