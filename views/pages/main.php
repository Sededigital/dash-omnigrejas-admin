<?php 
include '../../routers/route.php'; 
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

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                <li class="breadcrumb-item active">Painel de Controle</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <!-- Conteúdo Dinâmico -->
                <?php include($start_page); ?>
                <!-- Fim do Conteúdo Dinâmico -->

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
