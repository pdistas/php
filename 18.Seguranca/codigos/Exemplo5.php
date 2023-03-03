<html>

  <head>
      <title>reCaptcha</title>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script> <!-- link fornecido na doc do google -->
  </head>

  <body>

   <h3>Cadastre-se para receber nossa Newsletter.</h3>

    <form method="post" action="cadastrar.php">
         e-Mail:
        <input type="text" name="email"><br><br>
        <div class="g-recaptcha" data-sitekey="your public key"></div> <!--chave do site fornecida pelo google -->
        <br>
        <button type="submit">Enviar</button>
    </form>
  </body>

</html>
