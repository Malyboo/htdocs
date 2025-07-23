<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Php </title>
</head>
<body>
    <?php 
        $nome = 'Jhonas';

        if($nome == 'Jhonas'){
            echo " É o Jhonas ";
        }else{
            echo "É um impostor";
        }

        echo "<h1> Olá mundo! Bem-vindo(a) $nome </h1>";
 
        $idade = 17;
            if($idade >= 16){
                echo '<br> Pode votar!';
            }else{
                echo '<br> Não pode voltar!';
            }

            for($contador=0; $contador < 10; $contador++){
                echo '<hr> <img width="50" src="LINK DA FOTO">';
                echo $contador;
            }

            $numero = 0;
            while($numero < 10){
                echo "<br> Item da lista Número $numero";
                $numero = $numero + 1;
            }
   ?>

    
</body>
</html>