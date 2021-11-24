<!-- Adicionar Feirante -->
<div class="modal fade bd-example-modal-lg" id="addfeirante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Novo Feirante</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form action="controller/feiranteControllerAdd.php" method="POST">



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

						



						<div class="row">

							<div class="col-12">

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
									<input type="text" class="form-control form-control-sm mt-0" id="cep" value="" name="cep" required>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="mb-1">
									<label for="">Rua</label>
									<input type="text" class="form-control form-control-sm" id="rua" name="rua" required>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="mb-1">
									<label for="">Número</label>
									<input type="text" class="form-control form-control-sm" id="numero" name="numero" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mb-1">
									<label for="">Bairro</label>
									<input type="text" class="form-control form-control-sm" id="bairro" name="bairro" required>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="mb-1">
									<label for="">Cidade</label>
									<input type="text" class="form-control form-control-sm" id="cidade" name="cidade" required>
								</div>
							</div>
							<div class="col-sm-1">
								<div class="mb-1">
									<label for="">UF</label>
									<input type="text" class="form-control form-control-sm" id="uf" name="uf" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mb-1">
									<label for="">Complemento</label>
									<input type="text" class="form-control form-control-sm" id="complemento" name="complemento">
								</div>
							</div>

						</div>




				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class='bx bxs-x-circle'></i> Cancel</button>
				<button type="submit" name="add" class="btn btn-primary"><i class='bx bx-save'></i> Salvar</a>
					</form>
			</div>

		</div>
	</div>
</div>