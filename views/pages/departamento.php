
    <div class="pagetitle">
        <h1> Departamentos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Departamentos</a></li>
                <li class="breadcrumb-item active">Painel de Controle</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
    
                    <!-- Total de Departamentos Card -->
                    <div class="col-xxl-6 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Total de Departamentos <span>| Geral</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-diagram-3"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Total de Departamentos Card -->
    
                    <!-- Total de Igrejas Card -->
                    <div class="col-xxl-6 col-md-6">
                        <div class="card info-card customers-card">
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
                        <h5 class="card-title">Lista de Departamentos</h5>
    
                        <div class="d-flex justify-content-end mb-3">
                            <button class="btn btn-primary" title="Adicionar Departamento" onclick="abrirModal()">
                                <i class="fas fa-plus"></i> Adicionar
                            </button>
                        </div>
    
                        <!-- Tabela -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th><b>Nº</b></th>
                                    <th>Nome</th>
                                    <th>Cargo</th>
                                    <th>Igreja Pertencente</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody id="tabela-corpo">
                                <tr>
                                    <td>1</td>
                                    <td>Ministério Jovem</td>
                                    <td>Líder</td>
                                    <td>Igreja Esperança</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" onclick="editarDepartamento(this)">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm" onclick="excluirDepartamento(this)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Coral</td>
                                    <td>Maestro</td>
                                    <td>Igreja Redenção</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" onclick="editarDepartamento(this)">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm" onclick="excluirDepartamento(this)">
                                            <i class="fas fa-trash"></i>
                                        </button>
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
    <div class="modal fade" id="modalDepartamento" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar Departamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="formDepartamento">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome do Departamento</label>
                            <input type="text" id="nome" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="cargo" class="form-label">Cargo</label>
                            <input type="text" id="cargo" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="igreja" class="form-label">Igreja Pertencente</label>
                            <select id="igreja" class="form-control" required>
                                <option value="Igreja Esperança">Igreja Esperança</option>
                                <option value="Igreja Redenção">Igreja Redenção</option>
                                <option value="Igreja Vida Nova">Igreja Vida Nova</option>
                            </select>
                        </div>
                        <input type="hidden" id="editIndex">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" onclick="salvarDepartamento()">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    
    
  
  <!-- Adicione FontAwesome para os ícones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  
  

    
    



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    function abrirModal() {
        document.getElementById("formDepartamento").reset();
        document.getElementById("editIndex").value = "";
        var modal = new bootstrap.Modal(document.getElementById("modalDepartamento"));
        modal.show();
    }

    function salvarDepartamento() {
        let nome = document.getElementById("nome").value;
        let cargo = document.getElementById("cargo").value;
        let igreja = document.getElementById("igreja").value;
        let editIndex = document.getElementById("editIndex").value;
        let tabela = document.getElementById("tabela-corpo");

        if (editIndex) {
            let linha = tabela.rows[editIndex];
            linha.cells[1].textContent = nome;
            linha.cells[2].textContent = cargo;
            linha.cells[3].textContent = igreja;
            Swal.fire("Atualizado!", "O departamento foi atualizado com sucesso!", "success");
        } else {
            let novaLinha = tabela.insertRow();
            let index = tabela.rows.length;
            novaLinha.innerHTML = `
                <td>${index}</td>
                <td>${nome}</td>
                <td>${cargo}</td>
                <td>${igreja}</td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="editarDepartamento(this)">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-danger btn-sm" onclick="excluirDepartamento(this)">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            `;
            Swal.fire("Adicionado!", "O departamento foi salvo com sucesso!", "success");
        }

        var modal = bootstrap.Modal.getInstance(document.getElementById("modalDepartamento"));
        modal.hide();
    }

    function editarDepartamento(botao) {
        let linha = botao.closest("tr");
        document.getElementById("nome").value = linha.cells[1].textContent;
        document.getElementById("cargo").value = linha.cells[2].textContent;
        document.getElementById("igreja").value = linha.cells[3].textContent;
        document.getElementById("editIndex").value = linha.rowIndex - 1;
        abrirModal();
    }

    function excluirDepartamento(botao) {
        Swal.fire({
            title: "Tem certeza?",
            text: "Você não poderá reverter esta ação!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Sim, excluir!"
        }).then((result) => {
            if (result.isConfirmed) {
                let linha = botao.closest("tr");
                linha.remove();
                Swal.fire("Excluído!", "O departamento foi removido.", "success");
            }
        });
    }
</script>
 