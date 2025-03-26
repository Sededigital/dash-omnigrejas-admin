

    <div class="pagetitle">
        <h1>Institucional</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Institucional</a></li>
                <li class="breadcrumb-item active">Painel de Controle</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                
                <!-- Liderança Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Liderança</h5>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-badge"></i>
                                </div>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLideranca">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Programação Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Programação</h5>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-calendar-event"></i>
                                </div>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProgramacao">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- História Card -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">História</h5>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-book"></i>
                                </div>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalHistoria">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!---fé--->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Confissão de fê</h5>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-lightbulb"></i>                                 </div>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProgramacao">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!---missão-->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">
                               Missão, Visão, Valores
                            </h5>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-flag"></i>       
                                </div>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalHistoria">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
             <!--governo-->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">
                                Governo
                            </h5>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-bank"></i>      
                                </div>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalHistoria">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- selecção... -->
                <div class="col-12">
                    <label for="seletorCards" class="form-label">Seleciona uma opção</label>
                    <select class="form-select" id="seletorCards" onchange="atualizarTexto()">
                        <option selected disabled>Seleciona...</option>
                        <option value="História">História</option>
                        <option value="Confissão de Fé">Confissão de Fé</option>
                        <option value="Missão, Visão e Valores">Missão, Visão e Valores</option>
                        <option value="Governo">Governo</option>
                        <option value="Liderança">Liderança</option>
                        <option value="Programação">Programação</option>
                    </select>
                </div>
                
                <p id="textoSelecionado" class="mt-2">Você selecionou: Nenhuma opção</p>
                
                <script>
                    function atualizarTexto() {
                        let select = document.getElementById("seletorCards");
                        let texto = select.value;
                        document.getElementById("textoSelecionado").innerText = "Você selecionou: " +  texto;
                    }
                </script>
                
                
                
            </div>
        </div>
    </div>
</section>






  
  <!-- Adicione FontAwesome para os ícones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  

    
    
