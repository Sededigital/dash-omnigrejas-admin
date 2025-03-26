<div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                <li class="breadcrumb-item active">Painel de Controle</li>
            </ol>
        </nav>
    </div>


<div class="row">

                    
                    <!-- Igrejas Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filtro</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Igrejas <span>| Total</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-bank"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Igrejas Card -->

                    <!-- Pastores Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filtro</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Pastores <span>| Total</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-badge"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Pastores Card -->
                    
                    <!-- Obreiros Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card customers-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filtro</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Administradores <span>| Total</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Obreiros Card -->
                    
                    <!-- Fiéis Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card customers-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filtro</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Fiéis <span>| Total</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Fiéis Card -->
                </div>

                <div class="col-12 ">
      <div class="card p-2">
    
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                  <h6>Filtro</h6>
              </li>
              <li><a class="dropdown-item" href="#">Hoje</a></li>
              <li><a class="dropdown-item" href="#">Este Mês</a></li>
              <li><a class="dropdown-item" href="#">Este Ano</a></li>
          </ul>
      </div>
    
        <div class="card-body">
          <h5 class="card-title">Relatórios</h5>
    
          <!-- Gráfico de Linhas -->
          <div id="reportsChart"></div>
    
          <script>
            document.addEventListener("DOMContentLoaded", () => {
              new ApexCharts(document.querySelector("#reportsChart"), {
                series: [{
                  name: 'Igrejas',
                  data: [31, 40, 28, 51, 42, 82, 56],
                }, {
                  name: 'Usuários',
                  data: [11, 32, 45, 32, 34, 52, 41]
                }, {
                  name: 'Pagamentos',
                  data: [15, 11, 32, 18, 9, 24, 11]
                }],
                chart: {
                  height: 350,
                  type: 'area',
                  toolbar: {
                    show: false
                  },
                },
                markers: {
                  size: 4
                },
                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                fill: {
                  type: "gradient",
                  gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.3,
                    opacityTo: 0.4,
                    stops: [0, 90, 100]
                  }
                },
                dataLabels: {
                  enabled: false
                },
                stroke: {
                  curve: 'smooth',
                  width: 2
                },
                xaxis: {
                  type: 'datetime',
                  categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                },
                tooltip: {
                  x: {
                    format: 'dd/MM/yy HH:mm'
                  },
                }
              }).render();
            });
          </script>
          <!-- Fim do Gráfico de Linhas -->
    
        </div>
    
      </div>
    </div>
    