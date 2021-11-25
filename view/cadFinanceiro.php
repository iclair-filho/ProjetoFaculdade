<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="panel">
                <form action="controller/feiranteController.php" method="POST">
                    <div class="panel-header">
                        <strong><i class='bx bx-file me-3'></i>Cobrança Avulsa</strong>
                    </div>
                    <div class="panel-body">

                        <div class="row mb-sm-2 p-sm-2">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-1">
                                            <label for="">Selecione o Feirante:</label>

                                            <select class="form-select form-select-sm" aria-label=".form-select-sm">
                                                <option selected></option>
                                                <?php
                                                include_once './model/DAO/conexaoMysql.php';
                                                $sql = 'SELECT * FROM feirante ORDER BY codFeirante DESC ';
                                                $read = Conexao::getConn()->prepare($sql);
                                                $read->execute();

                                                while ($linha = $read->fetch(PDO::FETCH_OBJ)) {
                            
                                                    if (isset($linha)) {
                                                        echo "<option value='$linha->codFeirante'>$linha->nome   | CPF: $linha->cpf</option>";
                                                    }
                                                }


                                                ?>

                                                
                                                
                                            </select>
                                        </div>
                                    </div>

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