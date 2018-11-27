<?php
    use app\Controllers\CompaniesController;

    $company = new CompaniesController();
?>
<!--Estrutura do Template-->
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1 mr-0">
        <span id="logo-text">Nossa Logo</span>
    </span>
    <ul style="padding-top: 10px" class="nav justify-content-center">
        <h4 class="text-white">
            <?= $company->Select('name') ?>
        </h4>
    </ul>
    <ul class="nav justify-content-end">

        <?php include 'app/Views/templates/notification.php' ?>

        <div class="border ml-3"></div>
        <div class="dropdown nav-item">
            <span class="nav-link text-white">
                <i class="fas fa-ban"></i>
                Status da Conta
            </span> 
        </div>
        <div class="border"></div>
        <div class="dropdown nav-item">
            <span style="cursor: pointer" class="nav-link text-white">
                <i class="fas fa-user-alt"></i>
                Admin: Usuário
                <i class="fas fa-caret-down"></i>
            </span> 
            <div class="dropdown-content dropdown-menu-right text-center p-1">
                <a id="logout" class="dropdown-item" href="logout" data-toggle="modal" data-target="#logoutModal">
                    Sair <i class="fas fa-sign-out-alt"></i> 
                </a>
            </div>
        </div>                
    </ul>
</nav>
<nav class="navbar bg-primary">
    <span></span>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link px-2" href="<?=URL?>/empresa/dashboard">
                <i class="fas fa-tachometer-alt"></i>
                Dasboard
            </a>
        </li>
        <div class="dropdown nav-item">
            <span style="cursor: pointer" class="nav-link text-white">
                <i class="fas fa-plus-circle"></i>
                Cadastros
            </span> 
            <div class="dropdown-content p-1">
                <a class="dropdown-item" href="logout" data-toggle="modal" data-target="#addFuncionario">
                    <i class="fas fa-user-plus"></i> Funcionários 
                </a>
                <a class="dropdown-item" href="clientes">
                    <i class="fas fa-user-friends"></i> Clientes 
                </a>
                <a class="dropdown-item" href="produtos">
                    <i class="fas fa-box"></i> Produtos 
                </a>
                <a class="dropdown-item" href="fornecedores">
                    <i class="fas fa-truck"></i> Fornecedores 
                </a>
            </div>
        </div> 
        <li class="nav-item">
            <a class="nav-link px-2" href="<?=URL?>/empresa/conta">
                <i class="fas fa-user-alt"></i>
                Minha Conta
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link px-2" href="<?=URL?>/empresa/ajuda">
                <i class="fas fa-question-circle"></i>
                Ajuda
            </a>
        </li>
    </ul>
    <span></span>
</nav>

<!-- Modal Sair-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Tem certeza que deseja sair?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <a href="<?=$_SERVER['REQUEST_URI']?>/logout" class="btn btn-danger">Sair</a>
        </div>
        </div>
    </div>
</div>

<!-- Modal Cadastrar Funcionário-->
<div class="modal fade" id="addFuncionario" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Funcionario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    Body
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>