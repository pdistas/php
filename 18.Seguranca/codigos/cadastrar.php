<?php
/**
 * reCaptcha e cURL
 ** A biblioteca cURL nos permite uma conexão direta com uma página da web, seja ela interna ao seu domínio,
 * ou mesmo, externa, podendo até enviar ou receber dados com cURL, de forma totalmente transparente ao usuário.
 */

  //var_dump($_POST);

  //inicio o uso da biblioteca cURL setando seus parâmetros
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");//url fornecida pela doc do google
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

  //dados fornecidos pela doc do google
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
      "secret"=>"sua chave secreta fornecida pelo google", /*chave secreta fornecida pelo google*/
      "response"=>$_POST["g-recaptcha-response"],
      "remoteip"=>$_SERVER["REMOTE_ADDR"]
  )));

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //setando a biblioteca para retornar o resultado da execução

  $recaptcha = json_decode(curl_exec($ch), true);//o retorno vem em formato json - parêmetro success

  //var_dump($recaptcha);

  curl_close($ch);

  if ($recaptcha["success"] === true) {
      echo "OK: " . $_POST["email"]; //aqui poderia conectar com BD, etc
  } else {
      header("Location: Exemplo5.php");
  }

  ?>
