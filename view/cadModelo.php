<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="panel">
                <form action="controller/feiranteController.php" method="POST">
                    <div class="panel-header">
                        <strong><i class='bx bx-file me-3'></i>Dados do Feirante</strong>
                    </div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-sm-4 offset-sm-8 mb-sm-0">
                                <div class="sm-2">
                                    <label for="">Acesso ao sistema:</label>
                                    <input type="password" class="form-control form-control-sm mb-sm-1" id="exampleInputPassword1" name="senha" placeholder="Senha" required>
                                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" name="confirmasenha" placeholder="Confirmar Senha" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <hr>
                            </div>

                        </div>
                        <div class="row mb-sm-2 p-sm-2">
                            <div class="col-2 align-self-center mr-3">
                                <picture>

                                    <img src="./view/img/user-feirante.png" class="img-thumbnail" alt="user_feirante">
                                </picture>


                            </div>
                            <div class="col-10">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-1">
                                            <label for="">Nome Completo</label>
                                            <input type="text" class="form-control form-control-sm" name="nome" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <label for="">CPF (apenas números)</label>
                                            <input type="text" class="form-control form-control-sm" name="cpf" required>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <label for="">RG</label>
                                            <input type="text" class="form-control form-control-sm" name="rg" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-1">
                                            <label for="">Telefone 1</label>
                                            <input type="tel" class="form-control form-control-sm" id="inputFone1" name="telefone1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-1">
                                            <label for="">Telefone 2</label>
                                            <input type="tel" class="form-control form-control-sm" id="inputFone2" name="telefone2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control form-control-sm" id="email" name="email" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row border border-1 mb-sm-2 p-sm-2 justify-content-sm-start">
                            <div class="col-12">
                                <label for="">Endereço de correspondência:</label>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-2">
                                    <label for="">CEP</label>
                                    <input type="text" class="form-control form-control-sm" id="cep" value="" name="cep" required>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-2">
                                    <label for="">Rua</label>
                                    <input type="text" class="form-control form-control-sm" id="rua" name="rua" required>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="mb-2">
                                    <label for="">Número</label>
                                    <input type="text" class="form-control form-control-sm" id="numero" name="numero" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-2">
                                    <label for="">Bairro</label>
                                    <input type="text" class="form-control form-control-sm" id="bairro" name="bairro" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="mb-2">
                                    <label for="">Cidade</label>
                                    <input type="text" class="form-control form-control-sm" id="cidade" name="cidade" required>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="mb-2">
                                    <label for="">UF</label>
                                    <input type="text" class="form-control form-control-sm" id="uf" name="uf" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-2">
                                    <label for="">Complemento</label>
                                    <input type="text" class="form-control form-control-sm" id="complemento" name="complemento">
                                </div>
                            </div>

                        </div>

                        <div class="text-end">
                            <hr>
                            <input id="efetuar-cadastro" class="btn btn-sm btn-success" type="submit" value="INCLUIR DADOS">
                            <input class="btn btn-sm btn-info" type="reset" value="LIMPAR">
                        </div>
                    </div>


                </form>
            </div>

        </div>
        <div class="col-sm-1"></div>
    </div>


</div>
</div>