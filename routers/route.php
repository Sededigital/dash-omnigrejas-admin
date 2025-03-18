<?php

$start_page ="home.php"; 

$pages = [
  'home', 
  'igrejas',
  'planos',
  'departamentos',
  'instuicional',
  'Categoria',
  'alicancas',
  'meus_usuarios',
  'agendamentos',
  'obreiro'
  
];


if (isset($_GET['page'])) {
  $page = $_GET['page'];
  
  if (in_array($page, $pages)) {
      $start_page =  $page . ".php";
  }
  else {
      $start_page = "home.php";
  }
}

?>