<!-- Listagem de Feirantes -->
<div class="container-fluid">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="panel">
                <div class="panel-header">
                    <strong><i class='bx bx-file me-3'></i>Listagem de Feirantes</strong>
                </div>
                <div class="panel-body">

                    <div class="row mb-2">
                        <div class="col-sm-8 col-sm-offset-2">
                            <a href="#addfeirante" class="btn btn-primary" data-toggle="modal">Cadastrar</a>
                        </div>


                    </div>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col-5">Nome do Feirante</th>
                                <th scope="col-2">Cidade</th>
                                <th scope="col-2">Status</th>
                                <th scope="col-2"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include_once './model/DAO/conexaoMysql.php';
                            $sql = 'SELECT * FROM feirante ORDER BY codFeirante DESC ';
                            $read = Conexao::getConn()->prepare($sql);
                            $read->execute();

                            
                            $linha = 0;

                            while ($linha = $read->fetch(PDO::FETCH_OBJ)) {
                            
                                if (isset($linha)) {

                                    echo "<tr>";

                                    echo "<td class='col-5'>$linha->nome</td>";
                                    echo "<td class='col-2'>$linha->cidade</td>";

                                    if($linha->status==1){
                                        echo "<td class='col-2'><span class='badge bg-warning text-dark'>Em Análise</span></td>";
                                    }elseif($linha->status==2){
                                        echo "<td class='col-2'><span class='badge bg-success text-light'>Liberado</span></td>";
                                    }elseif($linha->status==3){
                                        echo "<td class='col-2'><span class='badge bg-danger text-light'>Repprovado</span></td>";
                                    };
                                    

                                    echo "<td class='col-2'>";
                                    echo "<a class='btn btn-outline-info btn-sm me-1' href='#edit_$linha->codFeirante' data-toggle='modal'><i class='bx bx-edit-alt'></i></a>";
                                    echo "<a class='btn btn-outline-danger btn-sm me-1' href='#del_$linha->codFeirante' data-toggle='modal'><i class='bx bx-trash-alt'></i></a>";
                                    echo "<a class='btn btn-outline-info btn-sm me-1' href='view/gerarpdf.php?id=$linha->codFeirante'><i class='bx bx-printer'></i></a>";
                                    

                                    
                                    echo "</td>";
                                    include("./view/modal/edit_del_modal.php");
                                    echo "</tr>";
                                } else {
                                    echo "<tr>";
                                    echo "<td>Erro: Não foi possível recuperar os dados do banco de dados</td>";
                                    echo "</tr>";
                                }
                            }
                            $linha++;
                            


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
<!-- Fim de Listagem de Feirantes -->