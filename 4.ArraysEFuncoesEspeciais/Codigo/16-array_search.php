<?php
$meuArray = array();
$meuArray = array("um"=>"Maçã", "dois"=>"Melão", "tres"=>"Uva");
$key = array_search("Melão", $meuArray);
echo $key;