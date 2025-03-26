

    <div class="pagetitle">
        <h1>Gestão de Planos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Gestão de Planos</a></li>
                <li class="breadcrumb-item active">Painel de Controle</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

 


    
   
    
    <section class="section p-4">
      <div class="row">
        <div class="col-lg-12">
            <div class="card-body">
              <h5 class="card-title">Gestão de Planos</h5>
    
              <div class="d-flex justify-content-end mb-3">
                <button class="btn btn-primary" title="Nova Operação" data-bs-toggle="modal" data-bs-target="#addPlanModal">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
    
              <!-- Tabela -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Plano</th>
                    <th>Preço</th>
                    <th>Tempo de Ativação</th>
                    <th>Data</th>
                    <th>Ação</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Plano Básico</td>
                    <td>KZ 5.000</td>
                    <td>1 ano</td>
                    <td>01/02/2024</td>
                    <td>
                      <div class="d-flex gap-2">
                        <button class="btn btn-warning btn-sm edit-btn" title="Editar">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-danger btn-sm delete-btn" title="Excluir">
                          <i class="fas fa-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Plano Premium</td>
                    <td>KZ 10.000</td>
                    <td>2 anos</td>
                    <td>15/03/2024</td>
                    <td>
                      <div class="d-flex gap-2">
                        <button class="btn btn-warning btn-sm edit-btn" title="Editar">
                          <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-danger btn-sm delete-btn" title="Excluir">
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
    
    <!-- Modal Adicionar Plano -->
    <div class="modal fade" id="addPlanModal" tabindex="-1" aria-labelledby="addPlanModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addPlanModalLabel">Adicionar Novo Plano</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="addPlanForm">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="planName" class="form-label">Plano</label>
                  <input type="text" class="form-control" id="planName" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="planPrice" class="form-label">Preço</label>
                  <input type="text" class="form-control" id="planPrice" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="activationTime" class="form-label">Tempo de Ativação</label>
                  <input type="text" class="form-control" id="activationTime" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="planDate" class="form-label">Data</label>
                  <input type="date" class="form-control" id="planDate" required>
                </div>
              </div>
              <button type="submit" class="btn btn-primary w-100">Adicionar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  
    
  
  <!-- Adicione FontAwesome para os ícones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  

    
    

</main>

  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Direitos Autorais <strong><span>Omnigrejas </span></strong>. Todos os direitos reservados
    </div>
    <div class="credits">
      Desenvolvido por <a href="https://sededigital.ao/">Sededigital</a>
 
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    $(document).ready(function() {
      
      // Adicionar Plano
      $("#addPlanForm").submit(function(event) {
        event.preventDefault();
        
        Swal.fire({
          title: "Nova operação adicionada",
          html: '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%"></div></div>',
          timer: 2000,
          timerProgressBar: true,
          showConfirmButton: false
        }).then(() => {
          $("#addPlanModal").modal("hide");
          $("#addPlanForm")[0].reset();
        });
      });
    
      // Editar Plano
      $(".edit-btn").click(function() {
        Swal.fire({
          title: "Editar Plano",
          text: "Função de edição será implementada!",
          icon: "info"
        });
      });
    
      // Deletar Plano
      $(".delete-btn").click(function() {
        Swal.fire({
          title: "Tem certeza?",
          text: "Essa ação não pode ser desfeita!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#d33",
          cancelButtonColor: "#3085d6",
          confirmButtonText: "Sim, excluir!",
          cancelButtonText: "Cancelar"
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: "Plano excluído!",
              text: "A operação foi concluída com sucesso.",
              icon: "success",
              timer: 2000,
              timerProgressBar: true,
              showConfirmButton: false
            });
          }
        });
      });
    
    });
    </script>
    
 