

    <div class="pagetitle">
        <h1>Obreiros</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Obreiros</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Ativos</h5>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-check-circle"></i>
                        </div>
                        <div class="ps-3">
                            <h6>0</h6>
                        </div>
                        <button class="btn btn-primary" title="Adcionar Categoria" data-bs-toggle="modal" data-bs-target="#modalLideranca">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>

  
<!-- Seção de Obreiros -->
<section class="section"> 
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Lista de Obreiros</h5>

                  <div class="d-flex justify-content-end">
                      <button class="btn btn-primary" title="Adicionar Obreiro" data-bs-toggle="modal" data-bs-target="#modalAdicionarObreiro">
                          <i class="fas fa-plus"></i>
                      </button>
                  </div>

                  <!-- Tabela -->
                  <table class="table datatable">
                      <thead>
                          <tr>
                              <th><b>Nº</b></th>
                              <th>Obreiro</th>
                              <th>Igreja Pertencente</th>
                              <th>Descrição</th>
                              <th>Data</th>
                              <th>Ação</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>Pedro Silva</td>
                              <td>Igreja Esperança</td>
                              <td>Obreiro atuante no ministério de jovens.</td>
                              <td>10/02/2024</td>
                              <td>
                                  <div class="d-flex gap-2">
                                      <button class="btn btn-warning btn-sm btn-edit" title="Editar">
                                          <i class="fas fa-edit"></i>
                                      </button>
                                      <button class="btn btn-danger btn-sm btn-delete" title="Eliminar">
                                          <i class="fas fa-trash"></i>
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

<!-- Modal Adicionar Obreiro -->
<div class="modal fade" id="modalAdicionarObreiro" tabindex="-1" aria-labelledby="modalAdicionarObreiroLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="modalAdicionarObreiroLabel">Adicionar Obreiro</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form>
                  <div class="mb-3">
                      <label for="nomeObreiro" class="form-label">Nome do Obreiro</label>
                      <select class="form-select" id="nomeObreiro">
                          <option selected disabled>Selecione um obreiro</option>
                          <option value="1">Pedro Silva</option>
                          <option value="2">Maria Oliveira</option>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="igrejaObreiro" class="form-label">Igreja Pertencente</label>
                      <select class="form-select" id="igrejaObreiro">
                          <option selected disabled>Selecione uma igreja</option>
                          <option value="1">Igreja Esperança</option>
                          <option value="2">Igreja Redenção</option>
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="fotoObreiro" class="form-label">Foto</label>
                      <input type="file" class="form-control" id="fotoObreiro">
                  </div>
                  <div class="mb-3">
                      <label for="descricaoObreiro" class="form-label">Descrição</label>
                      <textarea class="form-control" id="descricaoObreiro" rows="3" placeholder="Escreva uma breve descrição sobre o obreiro..."></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Adicionar</button>
              </form>
          </div>
      </div>
  </div>
</div>

<!-- Importar SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
      // SweetAlert para eliminar
      document.querySelectorAll(".btn-delete").forEach(button => {
          button.addEventListener("click", function () {
              Swal.fire({
                  title: "Tem certeza?",
                  text: "Esta ação não pode ser desfeita!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#d33",
                  cancelButtonColor: "#3085d6",
                  confirmButtonText: "Sim, eliminar!",
                  cancelButtonText: "Cancelar"
              }).then((result) => {
                  if (result.isConfirmed) {
                      Swal.fire("Eliminado!", "O obreiro foi removido.", "success");
                      // Aqui você pode adicionar o código para remover da tabela
                  }
              });
          });
      });

      // SweetAlert para editar
      document.querySelectorAll(".btn-edit").forEach(button => {
          button.addEventListener("click", function () {
              Swal.fire({
                  title: "Editar Obreiro",
                  html:
                      '<input id="edit-nome" class="swal2-input" placeholder="Nome do Obreiro">' +
                      '<input id="edit-igreja" class="swal2-input" placeholder="Igreja Pertencente">' +
                      '<textarea id="edit-descricao" class="swal2-textarea" placeholder="Descrição"></textarea>',
                  showCancelButton: true,
                  confirmButtonText: "Salvar",
                  cancelButtonText: "Cancelar",
                  preConfirm: () => {
                      let nome = document.getElementById("edit-nome").value;
                      let igreja = document.getElementById("edit-igreja").value;
                      let descricao = document.getElementById("edit-descricao").value;

                      if (!nome || !igreja || !descricao) {
                          Swal.showValidationMessage("Todos os campos são obrigatórios!");
                      }
                      return { nome, igreja, descricao };
                  }
              }).then((result) => {
                  if (result.isConfirmed) {
                      Swal.fire("Editado!", "Os dados foram atualizados.", "success");
                      // Aqui você pode adicionar o código para atualizar na tabela
                  }
              });
          });
      });
  });
</script>



  



  
  <!-- Adicione FontAwesome para os ícones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  

    
 