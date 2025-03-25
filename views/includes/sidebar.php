<style>
    /* Ajuste para os links do sidebar */
    .sidebar-nav .nav-link {
      color: #454242; 
      background: none !important;
      padding: 10px 15px;
      display: flex;
      align-items: center;
      border-radius: 4px;
    }
  
    .sidebar-nav .nav-link:hover {
      background: rgba(255, 255, 255, 0.1);
    }
  
    .sidebar-nav .nav-content {
      padding-left: 20px;
    }
  
    .sidebar-nav .nav-content li {
      border-bottom: none;
      padding: 5px 0;
    }
   
    .sidebar-nav .nav-content.show {
      background: none;
    }
  </style>

<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
  
      <!-- Igrejas -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#igrejas-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bank"></i><span>Igrejas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="igrejas-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li><a href="igrejas.html"><i class="bi bi-circle"></i><span>Igrejas</span></a></li>
          <li><a href="planos.html"><i class="bi bi-circle"></i><span>Menu de Preço</span></a></li>
          <li><a href="departamento.html"><i class="bi bi-circle"></i><span>Departamentos</span></a></li>
          <li><a href="institucional.html"><i class="bi bi-circle"></i><span>Institucional</span></a></li>
        </ul>
      </li>
  
      <!-- Gestão de Membros -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-people"></i><span>Gestão de Membros</span>
        </a>
      </li>
  
      <!-- Categorias -->
      <li class="nav-item">
        <a class="nav-link" href="Categoria.html">
          <i class="bi bi-tags"></i><span>Categorias</span>
        </a>
      </li>
  

      <li class="nav-item">
        <a class="nav-link" href="../pages/agendamento.html">
          <i class="bi bi-handshake"></i><span>Agendamentos</span>
        </a>
      </li>
      <!-- Aliança -->
      <li class="nav-item">
        <a class="nav-link" href="aliancas.html">
          <i class="bi bi-handshake"></i><span>Aliança</span>
        </a>
      </li>

      
  
      <!-- Gestão de Usuário -->
      <li class="nav-item">
        <a class="nav-link" href="meus_usuarios.html">
          <i class="bi bi-person-badge"></i><span>Gestão de Usuário</span>
        </a>
      </li>
  
      <!-- Gestão de Valores -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-cash-stack"></i><span>Gestão de Valores</span>
        </a>
      </li>
  
      <!-- Obreiros -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-people-fill"></i><span>Obreiros</span>
        </a>
      </li>
  
      <!-- Operações -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#operacoes-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-tools"></i><span>Operações</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="operacoes-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li><a href="#"><i class="bi bi-circle"></i><span>Serviços / Produtos</span></a></li>
          <li><a href="#"><i class="bi bi-circle"></i><span>Ativar / Publicações</span></a></li>
        </ul>
      </li>
  
      <!-- Publicações -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#public-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-megaphone"></i><span>Publicações</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="public-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li><a href="#"><i class="bi bi-circle"></i><span>Eventos / Igrejas</span></a></li>
          <li><a href="#"><i class="bi bi-circle"></i><span>Eventos / Normal</span></a></li>
        </ul>
      </li>
  
      <!-- Configurações -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-gear"></i><span>Configurações</span>
        </a>
      </li>
  
      <!-- Solicitações / Compra -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-cart"></i><span>Solicitações / Compra</span>
        </a>
      </li>
  
    </ul>
  </aside>