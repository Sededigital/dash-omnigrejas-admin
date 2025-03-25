<?php

// Definir a página inicial padrão
$start_page = "../views/pages/home.php"; 

// Lista de páginas permitidas
$pages = [
    'home', 
    'igrejas',
    'planos',
    'departamentos',
    'institucional', 
    'categoria',
    'aliancas',
    'meus_usuarios',
    'agendamentos',
    'obreiro'
];

// Verifica se foi passado um parâmetro "page" via GET
if (isset($_GET['page'])) {
    // Normaliza a entrada removendo caracteres indesejados
    $page = strtolower(trim($_GET['page']));  
    $page = basename($page); // Remove possíveis caminhos maliciosos

    // Se a página existir na lista de páginas permitidas
    if (in_array($page, $pages)) {
        $file_path = "../views/pages/" . $page . ".php";

        // Verifica se o arquivo realmente existe antes de incluir
        if (file_exists($file_path)) {
            $start_page = $file_path;
        }
    }
}



?>
