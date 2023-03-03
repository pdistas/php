<?php

mkdir('./teste1', 0777); ////Permissao padrão é 0777, que significa o acesso mais abrangente possível

mkdir('./teste2/teste3', 0777, true); //recursive=true permite criar uma pasta dentro da outra

//chmod('./teste1', 0600);