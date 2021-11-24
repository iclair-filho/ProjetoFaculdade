<div class="container-fluid">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="panel">
                <div class="panel-header">
                    <strong><i class='bx bx-file me-3'></i>Atividades Comerciais</strong>
                </div>
                <div class="panel-body">
                    <form action="controller/atividadesController.php" method="POST">
                        <div class="row align-items-center">
                            <div class="col-md-9">
                                <div class="mb-2">
                                    <label for="">Descrição da Atividade</label>
                                    <input type="text" class="form-control form-control-sm" name="desc_atividade" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-2">
                                    <label for="">Valor da Taxa</label>
                                    <input type="text" class="form-control form-control-sm" name="valor_taxa" required>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <input id="efetuar-cadastro" class="btn btn-success mt-2" type="submit" value="+">
                            </div>
                        </div>
                    </form>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col-8">Descrição</th>
                                <th scope="col-2">Valor</th>
                                <th scope="col-2"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include_once './model/DAO/conexaoMysql.php';
                            $sql = 'SELECT * FROM atividade order by descricao ASC';
                            $read = Conexao::getConn()->prepare($sql);
                            $read->execute();


                            if (isset($read)) {



                                while ($linha = $read->fetch(PDO::FETCH_OBJ)) {
                                    $valor = number_format($linha->valor, 2, ',', '.');


                                    echo "<tr>";

                                    echo "<td class='col-8'>$linha->descricao</td>";
                                    echo "<td class='col-2'>$valor</td>";

                                    echo "<td class='col-2'>";
                                    echo "<a class='btn btn-outline-info btn-sm me-1' href='#editAtiv_$linha->codAtiv' data-toggle='modal'><i class='bx bx-edit-alt'></i>Atualizar</a>";
                                   

                                    echo "</td>";
                                    echo "</tr>";

                                    include("./view/modal/edit_del_modal.php");
                                }
                            } else {
                                echo "<tr>";
                                echo "<td>Erro: Não foi possível recuperar os dados do banco de dados</td>";
                                echo "</tr>";
                            }


                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

        <div class="col-1"></div>
    </div>


</div>
</div>