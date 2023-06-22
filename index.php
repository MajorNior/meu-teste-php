<?php include 'views/cabecalho.php'; ?>

<div class="clearfix"></div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<?php include 'views/menu.php'?>

	<?php
    include 'DataRequest.php';

    $DataRequest = new DataRequest();
    $DadosClientes = $DataRequest->dadosClientes();
    $DadosUsuarios = $DataRequest->dadosUsuarios();
    $DadosFornecedores = $DataRequest->dadosFornecedores();
    ?>

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
				aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						Dashboard <small>tudo que você precisa à um click.</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.php">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="index.php">Dashboard</a>
						</li>
						<li class="pull-right">
							<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top"
								data-original-title="Change dashboard date range">
								<i class="fa fa-calendar"></i>
								<span>
								</span>
								<i class="fa fa-angle-down"></i>
							</div>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number"><?php echo count($DadosClientes); ?></div>
							<div class="desc">Clientes</div>
						</div>
						<a class="more" href="#" data-array="clientes">Visualizar <i class="m-icon-swapright m-icon-white"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat green">
						<div class="visual">
							<i class="fa fa-group"></i>
						</div>
						<div class="details">
							<div class="number"><?php echo count($DadosUsuarios); ?></div>
							<div class="desc">Usuários</div>
						</div>
						<a class="more" href="#" data-array="usuarios">Visualizar <i class="m-icon-swapright m-icon-white"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
							<div class="number"><?php echo count($DadosFornecedores); ?></div>
							<div class="desc">Fornecedores</div>
						</div>
						<a class="more" href="#" data-array="fornecedores">Visualizar <i class="m-icon-swapright m-icon-white"></i></a>
					</div>
				</div>
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			<!--Tabela-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box grey">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-folder-open"></i>Tabela Simples
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>
												#
											</th>
											<th>
												Nome
											</th>
											<th>
											cpf
											</th>
											<th>
											endereco
											</th>
											<th>
											Cidade
											</th>
											<th>
											telefone
											</th>
											<th>
											email
											</th>
											<th>
										    status
											</th>
										</tr>
									</thead>
									<tbody>

									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->

<?php include 'views/rodape.php'; ?>



</body>
<!-- END BODY -->

<script>
$(document).ready(function() {
  // Função para manipular o clique no link "Visualizar" da tabela
  $('.more').click(function(e) {
    e.preventDefault(); // Impede o comportamento padrão do link

    // Obtém os dados do array correspondente usando a propriedade 'data' do link
    var dataArray = $(this).data('array');

    // Faça aqui a sua requisição AJAX para o arquivo PHP que irá retornar os dados do array
    // Você pode usar o método $.ajax() ou o método $.get() do jQuery para isso
    $.ajax({
      url: 'DataRequest.php', // Caminho para o arquivo PHP
      method: 'POST', // Método HTTP para a requisição
      data: { array: dataArray }, // Dados a serem enviados para o arquivo PHP (se necessário)
      success: function(response) {
        // Manipule a resposta recebida do arquivo PHP aqui
        // Você pode atualizar a tabela com os dados recebidos

        // Exemplo de atualização da tabela
        var tableBody = $('.table tbody');
        tableBody.empty(); // Limpa o corpo da tabela

        // Percorra os dados recebidos e adicione as linhas à tabela
        for (var i = 0; i < response.length; i++) {
          var row = '<tr>' +
                    '<td>' + response[i].id + '</td>' +
                    '<td>' + response[i].nome + '</td>' +
                    '<td>' + response[i].cpf + '</td>' +
                    '<td>' + response[i].endereco + '</td>' +
                    '<td>' + response[i].cidade + '</td>' +
                    '<td>' + response[i].telefone + '</td>' +
                    '<td>' + response[i].email + '</td>' +
                    '<td>' + response[i].status + '</td>' +
                    '</tr>';
          tableBody.append(row); // Adiciona a linha à tabela
        }
      },
      error: function(xhr, status, error) {
        // Manipule o erro da requisição AJAX aqui
        console.log(error);
      }
    });
  });
});
</script>


</html>