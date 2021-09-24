<?php
/**Validação para verificar se é um numero*/
function is_number($var){
    if ($var == (string) (float) $var) {
        /**se for um numero com ponto 8.5  retorna true*/
        return (bool) is_numeric($var);
    }
    if ($var >= 0 && is_string($var) && !is_float($var)) {
        /**se for um numero com virgula 8,5 retorna true*/
        return (bool) ctype_digit($var);
    }
    /**se for um numero retorna true */
    return (bool) is_numeric($var);
}
/**Validação para verificar se existem apenas numeros no array */
function validar($array){
  /*Percorre cada posição do array */
  foreach($array as $v){
    if(!(is_number($v))){
      /**se a posição não for um numero retorna 0 */
      echo "array invalido";
      return 0;
    }
  }
  return 1;
  
}
/**Função para mostrar na tela  */
function mostrarResultado($resultado,$nome){
  
  echo $nome.": ";
  if(is_array($resultado)){
    /**se for um array conta as posições */
    $tamanho1=count($resultado);
    $i=1;
    /**Percorre o array */
    foreach($resultado as $v){

      if($tamanho1 == $i){
        /**se for a ultima posição dá quebra de linha */
        echo $v."<br />";
      }else{ 
        /**se não acrescenta uma vergula na tela */
        echo $v.', ';
      }	
      $i++;
    }
  }else{
    /**se não mostra o unico resultado */
    echo $resultado."<br />";
    $tamanho1= 1;
  }
  echo "numero de elementos do array: ".$tamanho1."<br />";
  echo "--------------------------------------------------<br />";
}
/**Função para somar dois arrays */
function soma($n1,$n2){
  /**conta o tamanho de cada um */
  $tamanho1=count($n1);
  $tamanho2=count($n2);
  $total = array();
  if($tamanho1 == $tamanho2){
    /**se forem iguais os tamanhos pode fazer a conta com as mesmas posições de cada array */
    for ($i = 0; $i < $tamanho1; $i++) {
      array_push($total,($n1[$i] + $n2[$i]));
    }
  }
  if($tamanho1 < $tamanho2){
    /**se o segundo array for maior */
    for ($i = 0; $i < $tamanho2; $i++) {
      /**percorre todo o segundo */
      while($i<$tamanho2){
        /**vai percorrer o inicio do primeiro até acabar as posições do segundo */
        for ($j = 0; $j < $tamanho1 && $i < $tamanho2; $j++) {
          /**percorre o primeiro e soma com as devidas posições */
          array_push($total,($n1[$j] + $n2[$i]));
          $i++;
        }
      }
    }
  }
  if($tamanho1 > $tamanho2){
    /**se o primeiro array for maior */
    for ($i = 0; $i < $tamanho1; $i++) {
      /**percorre todo o primeiro */
      while($i<$tamanho1){
        /**vai percorrer o inicio do segundo até acabar as posições do primeiro */
        for ($j = 0; $j < $tamanho2 && $i < $tamanho1; $j++) {
          /**percorre o segundo e soma com as devidas posições */
          array_push($total,($n1[$i] + $n2[$j]));
          $i++;
        }
      }
    }
  }
  /**retorna o arrey com o total em cada posição */
  return $total;
}
/**Função para subtrair dois arrays */
function subtracao($n1,$n2){
  /**conta o tamanho de cada um */
  $tamanho1=count($n1);
  $tamanho2=count($n2);
  $total = array();
  if($tamanho1 == $tamanho2){
    /**se forem iguais os tamanhos pode fazer a conta com as mesmas posições de cada array */
    for ($i = 0; $i < $tamanho1; $i++) {
      array_push($total,($n1[$i] - $n2[$i]));
    }
  }
  if($tamanho1 < $tamanho2){
    /**se o segundo array for maior */
    for ($i = 0; $i < $tamanho2; $i++) {
      /**percorre todo o segundo */
      while($i<$tamanho2){
        /**vai percorrer o inicio do primeiro até acabar as posições do segundo */
        for ($j = 0; $j < $tamanho1 && $i < $tamanho2; $j++) {
          /**percorre o primeiro e soma com as devidas posições */
          array_push($total,($n1[$j] - $n2[$i]));
          $i++;
        }
      }
    }
  }
  if($tamanho1 > $tamanho2){
    /**se o primeiro array for maior */
    for ($i = 0; $i < $tamanho1; $i++) {
      /**percorre todo o primeiro */
      while($i<$tamanho1){
        /**vai percorrer o inicio do segundo até acabar as posições do primeiro */
        for ($j = 0; $j < $tamanho2 && $i < $tamanho1; $j++) {
          /**percorre o segundo e soma com as devidas posições */
          array_push($total,($n1[$i] - $n2[$j]));
          $i++;
        }
      }
    }
  }
  /**retorna o arrey com o total em cada posição */
  return $total;
}
/**Função para dividir dois arrays */
function divisao($n1,$n2){
  /**conta o tamanho de cada um */
  $tamanho1=count($n1);
  $tamanho2=count($n2);
  $total = array();
  if($tamanho1 == $tamanho2){
    /**se forem iguais os tamanhos pode fazer a conta com as mesmas posições de cada array */
    for ($i = 0; $i < $tamanho1; $i++) {
      array_push($total,($n1[$i] / $n2[$i]));
    }
  }
  if($tamanho1 < $tamanho2){
    /**se o segundo array for maior */
    for ($i = 0; $i < $tamanho2; $i++) {
      /**percorre todo o segundo */
      while($i<$tamanho2){
        /**vai percorrer o inicio do primeiro até acabar as posições do segundo */
        for ($j = 0; $j < $tamanho1 && $i < $tamanho2; $j++) {
          /**percorre o primeiro e soma com as devidas posições */
          array_push($total,($n1[$j] / $n2[$i]));
          $i++;
        }
      }
    }
  }
  if($tamanho1 > $tamanho2){
    /**se o primeiro array for maior */
    for ($i = 0; $i < $tamanho1; $i++) {
      /**percorre todo o primeiro */
      while($i<$tamanho1){
        /**vai percorrer o inicio do segundo até acabar as posições do primeiro */
        for ($j = 0; $j < $tamanho2 && $i < $tamanho1; $j++) {
          /**percorre o segundo e soma com as devidas posições */
          array_push($total,($n1[$i] / $n2[$j]));
          $i++;
        }
      }
    }
  }
  /**retorna o arrey com o total em cada posição */
  return $total;
}
/**Função para multiplicar dois arrays */
function multiplicacao($n1,$n2){
  /**conta o tamanho de cada um */
  $tamanho1=count($n1);
  $tamanho2=count($n2);
  $total = array();
  if($tamanho1 == $tamanho2){
    /**se forem iguais os tamanhos pode fazer a conta com as mesmas posições de cada array */
    for ($i = 0; $i < $tamanho1; $i++) {
      array_push($total,($n1[$i] * $n2[$i]));
    }
  }
  if($tamanho1 < $tamanho2){
    /**se o segundo array for maior */
    for ($i = 0; $i < $tamanho2; $i++) {
      /**percorre todo o segundo */
      while($i<$tamanho2){
        /**vai percorrer o inicio do primeiro até acabar as posições do segundo */
        for ($j = 0; $j < $tamanho1 && $i < $tamanho2; $j++) {
          /**percorre o primeiro e soma com as devidas posições */
          array_push($total,($n1[$j] * $n2[$i]));
          $i++;
        }
      }
    }
  }
  if($tamanho1 > $tamanho2){
    /**se o primeiro array for maior */
    for ($i = 0; $i < $tamanho1; $i++) {
      /**percorre todo o primeiro */
      while($i<$tamanho1){
        /**vai percorrer o inicio do segundo até acabar as posições do primeiro */
        for ($j = 0; $j < $tamanho2 && $i < $tamanho1; $j++) {
          /**percorre o segundo e soma com as devidas posições */
          array_push($total,($n1[$i] * $n2[$j]));
          $i++;
        }
      }
    }
  }
  /**retorna o arrey com o total em cada posição */
  return $total;
}
/**função para fazer o fatorial de um numero */
function fatorial($n1){
  $total = 1;
  while ($n1 > 1){
    /**faz  a multiplicação do ultimo total com o numero da vez */
    $total = $total * $n1;
    /**decrecenta para que possa percorrer do numero passado como parametrô até o numero 1 */
    $n1--;
  }
  return $total;
}

//função que gera a sequência de fibonacci e retorna em array
function fibonacci($count){
  if($count == 0){
    /**se pedir 0 numeros o array retorna vazio */
    return[];
  }if($count == 1){
    /**se pedir 1 numero o array retorna com o valor 1 */
    return[1];
  }if($count >= 2){ 
    /**se pedir 2 ou mais numeros inicia com 1,1 o array */
    $sequencial = array();
    array_push($sequencial,1,1);
    for($i = 2; $i < $count; $i++){
      array_push($sequencial,($sequencial[$i-1] + $sequencial[$i-2]));	
    }
    return $sequencial;
  }
    

}

/**declara os dois arrays de entrada */
$a = array(1,2,3,2);
$b = array(1,2,3);
/**mostra o primeiro array */
mostrarResultado($a,"primeiro array de entrada");
/**mostra o segundo array */
mostrarResultado($b,"segundo array de entrada");

if(validar($a) && validar($b)){
  /**se os dois arrays são validos */

  $resultadoa = soma($a,$b);
  /**mostra a saida */
  mostrarResultado($resultadoa,"soma");
  
  $resultadob = subtracao($a,$b);
  /**mostra a saida */
  mostrarResultado($resultadob,"subtracao");
  
  $resultadoc = divisao($a,$b);
  /**mostra a saida */
  mostrarResultado($resultadoc,"divisão");

  $resultadod = multiplicacao($a,$b);
  /**mostra a saida */
  mostrarResultado($resultadod,"multiplicação");
}
$c = 5;
$d = 20;
/**mostra valor do numero para o fatorial  */
mostrarResultado($c,"numero para o fatorial");
/**faz o fatorial do numero 5 */
$resultadoe = fatorial($c);
/**mostra a saida */
mostrarResultado($resultadoe,"fatorial");
/**mostra valor da quantidade de numeros da sequencia fibonacci  */
mostrarResultado($d,"quantidade de numeros da sequencia fibonacci");
$fib = fibonacci($d);
/**mostra a saida */
mostrarResultado($fib,"fibonacci");
  
?>