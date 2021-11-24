<!-- Editar Feirante -->
<div class="modal fade bd-example-modal-lg" id="edit_<?php echo $linha->codFeirante; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Atualizar Feirante</h4>
                <h6>Cadastro: <?php echo $linha->codFeirante; ?></h6>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="controller/feiranteControllerEdit.php?cod=<?php echo $linha->codFeirante; ?>" method="POST">




                        <div class="row">
                            <div class="col-sm-2 align-self-center mr-3">
                                <picture>

                                    <img src="./view/img/user-feirante.png" class="img-thumbnail" alt="user_feirante">
                                </picture>


                            </div>
                            <div class="col-sm-4 mb-sm-0">
                                <div class="sm-2">
                                    <label for="">Acesso ao sistema:</label>
                                    <input type="password" class="form-control form-control-sm mb-sm-1" name="senha" placeholder="Senha">
                                    <input type="password" class="form-control form-control-sm" name="confirmasenha" placeholder="Confirmar Senha">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <hr>
                            </div>

                        </div>

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Dados</a>
                                <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Atividades</a>
                                <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Local de Feira</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">

                                    <div class="col-12">

                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="mb-1">
                                                    <label for="">Nome Completo</label>
                                                    <input type="text" class="form-control form-control-sm" name="nome" value="<?php echo $linha->nome ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="">CPF (apenas números)</label>
                                                    <input type="text" class="form-control form-control-sm" name="cpf" value="<?php echo $linha->cpf ?>" required>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="">RG</label>
                                                    <input type="text" class="form-control form-control-sm" name="rg" value="<?php echo $linha->rg ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-1">
                                                    <label for="">Telefone 1</label>
                                                    <input type="tel" class="form-control form-control-sm" id="inputFone1" name="telefone1" value="<?php echo $linha->tel1 ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-1">
                                                    <label for="">Telefone 2</label>
                                                    <input type="tel" class="form-control form-control-sm" id="inputFone2" value="<?php echo $linha->tel2 ?>" name="telefone2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="">Email</label>
                                                    <input type="email" class="form-control form-control-sm" id="email" name="email" value="<?php echo $linha->email ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <hr>
                                </div>
                                <div class="row justify-content-sm-start">
                                    <div class="col-12">
                                        <label for="">Endereço de correspondência:</label>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="mb-1">
                                            <label for="">CEP</label>
                                            <input type="text" class="form-control form-control-sm mt-0" id="cep" value="<?php echo $linha->cep ?>" name="cep" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="mb-1">
                                            <label for="">Rua</label>
                                            <input type="text" class="form-control form-control-sm" id="rua" name="rua" value="<?php echo $linha->rua ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="mb-1">
                                            <label for="">Número</label>
                                            <input type="text" class="form-control form-control-sm" id="numero" name="numero" value="<?php echo $linha->numero ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-1">
                                            <label for="">Bairro</label>
                                            <input type="text" class="form-control form-control-sm" id="bairro" name="bairro" value="<?php echo $linha->bairro ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="mb-1">
                                            <label for="">Cidade</label>
                                            <input type="text" class="form-control form-control-sm" id="cidade" name="cidade" value="<?php echo $linha->cidade ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="mb-1">
                                            <label for="">UF</label>
                                            <input type="text" class="form-control form-control-sm" id="uf" name="uf" value="<?php echo $linha->uf ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-1">
                                            <label for="">Complemento</label>
                                            <input type="text" class="form-control form-control-sm" id="complemento" name="complemento" value="<?php echo $linha->complemento ?>">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                                <div class="mt-2 row">
                                    <label class="col-sm-3 col-form-label">Atividade Comercial: </label>
                                    <div class="col-sm-9">

                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected></option>
                                            <?php
                                            include_once './model/DAO/conexaoMysql.php';
                                            $sql = 'SELECT * FROM atividade order by descricao ASC';
                                            $ler = Conexao::getConn()->prepare($sql);
                                            $ler->execute();
                                            if (isset($ler)) {

                                                while ($ativ = $ler->fetch(PDO::FETCH_OBJ)) {
                                                    echo "<option value='$ativ->codAtiv'>$ativ->descricao</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                        </div>







                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='bx bxs-x-circle'></i> Cancel</button>
                <button type="submit" name="edit" class="btn btn-primary"><i class='bx bx-save'></i> Atualizar</a>
                    </form>
            </div>

        </div>
    </div>
</div>
<!-- Deletar Feirante -->
<div class="modal fade" id="del_<?php echo $linha->codFeirante; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Exclusão Feirante</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">Tem certeza que pretende <span>EXCLUIR</span> o registro</p>
                <h2 class="text-center"><?php echo $linha->nome; ?></h2>
            </div>
            <div class="modal-footer">

                <a href="./controller/feiranteControllerDelete.php?cod=<?php echo $linha->codFeirante; ?>" class="btn btn-danger"><i class='bx bxs-x-circle'></i>Excluir</a>
            </div>

        </div>
    </div>
</div>

<!-- Editar Atividade -->
<div class="modal fade" id="editAtiv_<?php echo $linha->codAtiv; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Atualizar Atividades</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="controller/atividadesControllerEdit.php?cod=<?php echo $linha->codAtiv ?>" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="mb-1">
                                            <label for="">Descrição</label>
                                            <input type="text" class="form-control form-control-sm" name="desc_atividade" value="<?php echo $linha->descricao ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <label for="">valor</label>
                                            <input type="text" class="form-control form-control-sm" name="valor_taxa" value="<?php echo $linha->valor ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='bx bxs-x-circle'></i> Cancel</button>
                            <button type="submit" name="edit" class="btn btn-primary"><i class='bx bx-save'></i> Atualizar</button>
                            <a class='btn btn-outline-danger btn-sm me-1' href='#delAtiv_<?php echo $linha->codAtiv; ?>' data-toggle='modal'><i class='bx bx-trash-alt'></i></a>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Deletar Atividade -->
<div class="modal fade" id="delAtiv_<?php echo $linha->codAtiv; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Exclusão Atividade</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">Tem certeza que pretende <span>EXCLUIR</span> o registro</p>
                <h2 class="text-center"><?php echo $linha->descricao; ?></h2>
            </div>
            <div class="modal-footer">

                <a href="./controller/atividadesControllerDelete.php?cod=<?php echo $linha->codAtiv; ?>" class="btn btn-danger"><i class='bx bxs-x-circle'></i>Excluir</a>
            </div>

        </div>
    </div>
</div>