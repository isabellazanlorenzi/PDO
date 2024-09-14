<?php

function conectar(){


$local_serve = 'localhost';
$usuario_serve = 'root';
$senha_servece = ' ';
$banco_de_dados = 'platzi_imobiliaria';

try {
  $pdo = new PDO("mysql:host=$local_serve;dbname_de_dados", $usuario_serve, $senha_serve);
  $pdo > exec("SET CHARSET SET utf8");
  
} catch (\Throwable $th) {
  return $th;
  die;
}

return $pdo;

}
  

  
}
