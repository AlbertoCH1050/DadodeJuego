<html>
<head>
    <title>mainDadoJuego
    </title>
</head>
<body>

<?php

include 'Dadodejuego.php';

$tirada = new dadoRol();
$tirada->setminNumDado(1);
$tirada->setmaxNumDado(13);
?>

<p>
<?php 
    if($tirada->getmaxNumDado()<$tirada->getminNumDado()){
        echo "Numeros inválidos para la tirada";
    } else {
        if($tirada->getminNumDado()>=0 && $tirada->getmaxNumDado()<=12){
                for($i=0; $i<12; $i++){
                echo $tirada->tirarDado(); ?> <br> <?php 
                }          
        } else{
                    echo "Numeros inválidos para la tirada"; 
                }
    
}

?>
</p>
</body>

</html>