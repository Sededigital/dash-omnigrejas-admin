<?php
extract($_REQUEST);
$pagina_atual = "home.php"; 

if (isset($pagina)) {
    switch ($pagina) {
        case 'home':
            $pagina_atual = "home.php"; 
            break;
        case 'igrejas':
            $pagina_atual = "igrejas.php"; 
            break;
        case 'planos':
            $pagina_atual = "planos.php"; 
            break;
        case 'departamentos':
            $pagina_atual = "departamentos.php"; 
            break;
        case'institucional':
            $pagina_atual = "institucional.php"; 
            break;
        case 'departamento':
            $pagina_atual = "departamento.php"; 
            break;
        case 'obreiro':
            $pagina_atual = "obreiro.php"; 
            break;
          case 'categoria':
            $pagina_atual = "categoria.php"; 
            break;
         case 'usuarios':
            $pagina_atual = "meus_usuarios.php"; 
            break;    
        
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Omnigrejas Admin | Bem-vindo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- links do head -->
  <?php include '../includes/link-head.php'; ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include '../includes/header.php'; ?>

  <!-- Sidebar -->
  <?php include '../includes/sidebar.php'; ?>
  <!-- End Sidebar -->

  <main id="main" class="main">

    

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

              <?php include $pagina_atual; ?>

            </div>
        </div>
    </section>

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include '../includes/footer.php'; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
      <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Vendor JS Files -->
  <?php include '../includes/link-footer.php'; ?>

</body>
</html>
