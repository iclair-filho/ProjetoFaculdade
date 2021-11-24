<!-- <div class="col">
    <div class="titulo-home">Cadastro de Feirantes</div>

</div> -->

<div class="container-fluid">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="panel">
                <form action="controller/feiranteController.php" method="POST">
                    <div class="panel-header">
                        <strong><i class='bx bx-file me-3'></i>Cadastro de Usuario</strong>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-3">
                                <img src="./view/img/user-feirante.png" alt="user_feirante">
                            </div>
                            <div class="col-9">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-2">
                                            <label for="">Nome Completo</label>
                                            <input type="text" class="form-control form-control-sm" name="nome" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-2">
                                            <label for="">CPF (apenas números)</label>
                                            <input type="text" class="form-control form-control-sm" name="cpf" required>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="mb-2">
                                            <label for="">Email</label>
                                            <input type="fone" class="form-control form-control-sm" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-2">
                                            <label class="form-label">Nível de Usuário</label>
                                            <select class="form-select form-select-sm" name="nivel" required>
                                                <option selected></option>
                                                <option value="1">Administrador</option>
                                                <option value="2">Usuário</option>
                                                <option value="3">Fiscal</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                            <div class="mb-2">
                                                <label class="form-label">Senha</label>
                                                <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" name="senha" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-2">
                                                <label class="form-label">Confirmar Senha</label>
                                                <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" name="confirmasenha" required>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end p-t-10">
                            <hr>
                            
                            <input id="efetuar-cadastro" class="btn btn-sm btn-success" type="submit" value="INCLUIR DADOS">
                            <input class="btn btn-sm btn-info" type="reset" value="LIMPAR">
                        </div>
                    </div>

                    <div class="row">



                    </div>


                </form>
            </div>

        </div>
        <div class="col-1"></div>
    </div>


</div>
</div>