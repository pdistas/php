<?php
$str = "curso1=Informática&curso2=Edificações&curso3=Enfermagem";
parse_str($str,$cursos);
print_r($cursos);