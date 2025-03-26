

    <div class="pagetitle">
        <h1>Igrejas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Igrejas</a></li>
                <li class="breadcrumb-item active">Painel de Controle</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
          <div class="col-lg-12">
              <div class="row">
  
                  <!-- Igrejas Ativas Card -->
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
                              <h5 class="card-title">Igrejas Ativas <span>| Total</span></h5>
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
                  </div><!-- End Igrejas Ativas Card -->
  
                  <!-- Ativação de Igrejas Pendentes Card -->
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
                              <h5 class="card-title ">Ativação  Pendentes <span>| Total</span></h5>
                              <div class="d-flex align-items-center">
                                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                      <i class="bi bi-hourglass-split"></i>
                                  </div>
                                  <div class="ps-3">
                                      <h6>0</h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div><!-- End Ativação de Igrejas Pendentes Card -->
  
                  <!-- Total de Igrejas Card -->
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
                              <h5 class="card-title">Total de Igrejas <span>| Geral</span></h5>
                              <div class="d-flex align-items-center">
                                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                      <i class="bi bi-buildings"></i>
                                  </div>
                                  <div class="ps-3">
                                      <h6>0</h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div><!-- End Total de Igrejas Card -->
  
              </div>
          </div>
      </div>
  </section>


  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lista de Igrejas</h5>
  
            <div class="d-flex justify-content-end ">
              <button class="btn btn-primary" title="Adicionar Igreja" data-bs-toggle="modal" data-bs-target="#modalAdicionarIgreja">
                <i class="fas fa-plus"></i>
              </button>
            </div>
  
  
            <!-- Tabela -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th><b>Nº</b></th>
                  <th>Igreja</th>
                  <th>Usuário</th>
                  <th>E-mail</th>
                  <th>Categoria</th>
                  <th>Ativação</th>
                  <th>Data</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Católica</td>
                  <td>Seniamara Benedito</td>
                  <td>seniamaraa@gmail.com</td>
                  <td>AEA</td>
                  <td>2 anos</td>
                  <td>13/03/2025</td>
                  <td>
                    <div class="d-flex gap-2">
                      <button class="btn btn-success btn-sm" title="Ativar">
                        <i class="fas fa-check"></i>
                      </button>
                      <button class="btn btn-warning btn-sm" title="Desativar">
                        <i class="fas fa-ban"></i>
                      </button>
                      <button class="btn btn-info btn-sm" title="Ver">
                        <i class="fas fa-eye"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Simão Toco</td>
                  <td>Pedro Mulembro</td>
                  <td>mulembo@gmail.com</td>
                  <td>CISA</td>
                  <td>1 ano</td>
                  <td>13/03/2025</td>
                  <td>
                    <div class="d-flex gap-2">
                      <button class="btn btn-success btn-sm" title="Ativar">
                        <i class="fas fa-check"></i>
                      </button>
                      <button class="btn btn-warning btn-sm" title="Desativar">
                        <i class="fas fa-ban"></i>
                      </button>
                      <button class="btn btn-info btn-sm" title="Ver">
                        <i class="fas fa-eye"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- Fim da Tabela -->
          </div>
        </div>
      </div>
    </div>
  </section>




<!-- Modal -->
<div class="modal fade" id="modalAdicionarIgreja" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Adicionar Igreja</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formIgreja">
          <div class="row">
            <div class="col-md-4">
              <label class="form-label">Nome da Igreja</label>
              <input type="text" class="form-control" name="nome_igreja" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">NIF da Igreja</label>
              <input type="text" class="form-control" name="nif_igreja" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">Diário da República</label>
              <input type="file" class="form-control" name="diario_republica">
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-4">
              <label class="form-label">Sigla</label>
              <input type="text" class="form-control" name="sigla">
            </div>
            <div class="col-md-4">
              <label class="form-label">Telefone</label>
              <input type="text" class="form-control" name="telefone">
            </div>
            <div class="col-md-4">
              <label class="form-label">Localização</label>
              <input type="text" class="form-control" name="localizacao">
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-4">
              <label class="form-label">Tempo de Ativação</label>
              <select class="form-select" name="tempo_ativacao">
                <option value="">Selecione...</option>
                <option value="menos_1_ano"> 1 ano</option>
                <option value="1_5_anos">1 a 5 anos</option>
                <option value="mais_5_anos">Mais de 5 anos</option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label">Categoria</label>
              <select class="form-select" name="categoria">
                <option value="">Selecione...</option>
                <option value="evangelica">Evangélica</option>
                <option value="catolica">Católica</option>
                <option value="outra">Outra</option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label">Alianças</label>
              <select class="form-select" name="aliancas">
                <option value="">Selecione...</option>
                <option value="nenhuma">Nenhuma</option>
                <option value="nacional">Nacional</option>
                <option value="internacional">Internacional</option>
              </select>
            </div>
          </div>
          

          <div class="row mt-3">
            <div class="col-md-4">
              <label class="form-label">Logotipo</label>
              <input type="file" class="form-control" name="logotipo">
            </div>
            <div class="col-md-4">
              <label class="form-label">Foto de Capa</label>
              <input type="file" class="form-control" name="foto_capa">
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-6">
              <label class="form-label">Sobre</label>
              <textarea class="form-control" name="sobre" rows="3"></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label">Descrição</label>
              <textarea class="form-control" name="descricao" rows="3"></textarea>
            </div>
          </div>

          <div class="modal-footer mt-4">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">




  
  

