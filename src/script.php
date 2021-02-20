<?php

    $desafioEscolhido = $_POST["desafios"];
    $texto = $_POST["texto"];

    echo("Desafio: " . $desafioEscolhido . "<br> Entrada: ". $texto);

    switch ($desafioEscolhido) {
        case 1:
            echo "<br>Resultado: " . isValid($texto);
            getVoltarCmp();
            break;
        case 2:
            echo "<br>Resultado: " . removeCharacters($texto);
            getVoltarCmp();
            break;
        case 3:
            echo "<br>Resultado: " . calculaPontuacao($texto);
            getVoltarCmp();
            break;
        case 4:
            echo "<br>Resultado: " . dividirGrupos($texto);
            getVoltarCmp();
            break; 
        case 5:
            echo "<hr><br>Resultado: " . mutiplicar($texto);
            getVoltarCmp();
            break;
        default:
            # code...
            break;
    }
    
    function getVoltarCmp(){
        echo '<br><a href="/index.php" > Voltar</a>';
    }

    /* Desafio 1 */

    function isValid($telefone){
        $pattern = "/\([0-9]{3}\)\s[0-9]{3}-[0-9]{4}/i";
        return  preg_match($pattern, $telefone);
    }

     /* Desafio 2 */

    function removeCharacters($texto){
        $pattern = "/[^a-zA-Z0-9\-_ ]/i";
        $de      = "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ";
        $para    = "aaaaeeiooouucAAAAEEIOOOUUC";
        echo '<br>'. strtr($texto, $de, $para);
        echo '<br>'.  preg_replace($pattern," ", $texto);

        return preg_replace($pattern, "", strtr($texto, $de, $para));
    }

    /* Desafio 3 */

    function calculaPontuacao($entrada){
        $vetor= str_split($entrada);
        $vetorLetrasProcessadas = array();

        foreach($vetor as $letra){
            $vetorLetrasProcessadas[$letra] += 1 ;
        }
        return '['. implode(',', $vetorLetrasProcessadas).']';
    }

     /* Desafio 4 */
    function dividirGrupos($entrada){
        $vetor= str_split($entrada);
        $vetorLetrasProcessadas = array();
        $vetorIndiceUnico = array_unique($vetor);

        foreach($vetorIndiceUnico as $letra){
            echo '<br>'.$letra;
           for($i = 0; $i <  count($vetor); $i++){
                if( $vetor[$i] == $letra){
                    $vetorLetrasProcessadas[$letra] = $vetorLetrasProcessadas[$letra].$vetor[$i];
                }
           }
        }

        return '['. implode(',', $vetorLetrasProcessadas).']';
    }

    /* Desafio 5 */

    function mutiplicar($valor){
      $valorFinal = 1;
      for($i = $valor ; $i > 1 ; $i--){
            $valorFinal *= $i;
      }
        return $valorFinal; 
    }
?>
