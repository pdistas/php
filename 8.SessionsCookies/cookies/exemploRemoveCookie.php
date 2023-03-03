<?php

    setcookie("Nome", 0, time()-3600, "/");
    setcookie("Idade", 0, time()-3600, "/");
    setcookie("Cor", 0, time()-3600, "/");
    setcookie("contaVisitas", 0, time()-3600, "/");
    // Resultado: zera os valores e seta a data para expirar para 1 hora atras...

?>