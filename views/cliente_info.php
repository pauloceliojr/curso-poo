<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Curso POO</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Estilos da aplicação -->
    <link href="../assets/css/application.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Curso POO</a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Cliente -
                <small>Detalhe</small>
            </h1>
        </div>

        <?php
            require_once '../src/CursoPOO/Cliente/Cliente.php';

            use CursoPOO\Cliente\Cliente;

            $cliente = Cliente::getCliente($_REQUEST['id']);
        ?>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img class="img-circle avatar avatar-original" style="-webkit-user-select:none;
                                display:block; margin:auto;" src="http://robohash.org/sitsequiquia.png?size=120x120">
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="only-bottom-margin"><?= $cliente->nome ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="text-muted">CPF/CNPJ:</span> <?= $cliente->cpf_cnpj ?><br>
                            <span class="text-muted">Endereço:</span> <?= $cliente->endereco ?><br>
                            <span class="text-muted">Telefone:</span> <?= $cliente->telefone ?><br>
                            <span class="text-muted">E-mail:</span> <?= $cliente->email ?><br>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p>
                <button class="btn btn-primary pull-right"><i class="glyphicon glyphicon-pencil"></i> Edit
                    <button class="btn btn-default" onclick="window.history.back();" role="button">&laquo; Voltar
                    </button>
            </p>
        </div>
    </div>
    <hr>
    <footer>
        <p>&copy; 2017 Paulo Célio Júnior</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>