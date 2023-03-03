<?php

session_start();

//para evitar o roubo do id da sessão, fazer esse processo sempre após processos de verificação de login/senha

session_destroy();

session_start();

session_regenerate_id();

echo session_id(); //agora a cada vez que atualizar a página, veremos um novo id

?>