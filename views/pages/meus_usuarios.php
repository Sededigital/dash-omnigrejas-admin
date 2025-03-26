



    <div class="pagetitle">
        <h1>Alianças</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Alianças</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Usuários</h5>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-plus"></i>
                        </div>
                        <div class="ps-3">
                            <h6>2</h6>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
      </div>
  </section>


 

  <section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de Usuários</h5>

                    <!-- Tabela -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th><b>Nº</b></th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Data de Criação</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Adão Magalhães</td>
                                <td>adao@gemail.com</td>
                                <td>13/03/2025</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-primary btn-sm btn-contact" title="enviar mensagem" data-nome="Adão Magalhães" data-email="adao@gmail.com">
                                            <i class="fas fa-envelope text-white"></i>
                                        </button>
                                        
                                        <button class="btn btn-danger btn-sm btn-delete" title="Eliminar">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Maria Santos</td>
                                <td>maria@email.com</td>
                                <td>15/03/2024</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-primary btn-sm btn-contact" data-nome="Maria Santos" data-email="maria@email.com">
                                            <i class="fas fa-envelope text-white"></i>
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

<!-- Modal de Contato -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Enviar Mensagem</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="contactForm">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="assunto" class="form-label">Assunto</label>
                        <input type="text" class="form-control" id="assunto" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert e Scripts -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Abrir modal de contato com os dados do usuário
        document.querySelectorAll(".btn-contact").forEach(button => {
            button.addEventListener("click", function () {
                const nome = this.getAttribute("data-nome");
                const email = this.getAttribute("data-email");

                document.getElementById("nome").value = nome;
                document.getElementById("email").value = email;

                var contactModal = new bootstrap.Modal(document.getElementById("contactModal"));
                contactModal.show();
            });
        });

        // SweetAlert para excluir usuário
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
                        Swal.fire("Eliminado!", "O usuário foi removido.", "success");
                        // Aqui pode adicionar a lógica para realmente apagar o usuário
                    }
                });
            });
        });

        // Lógica para enviar mensagem (apenas exemplo)
        document.getElementById("contactForm").addEventListener("submit", function (e) {
            e.preventDefault();
            Swal.fire("Enviado!", "Sua mensagem foi enviada com sucesso.", "success");
            var contactModal = bootstrap.Modal.getInstance(document.getElementById("contactModal"));
            contactModal.hide();
        });
    });
</script>


  
  <!-- Adicione FontAwesome para os ícones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  

    
    
