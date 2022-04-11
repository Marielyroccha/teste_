<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM PRODUTO WHERE EMPRESA = 1");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Produtos Roma</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles-servicos.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        
        <!-- Navigation-->
        <header class="masthead">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Trovata</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="./index.php">Voltar ao Inicio</a></l>
                    </ul>
                </div>
            </div>
        </nav>
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Roma Vendas</h2>
                <hr class="divider divider-light" />
                <input id="Busca" type="text" size="20">
                <button id="btn11" class="btn btn-primary"><b><font color="#fff" size="3">Filtrar</font></b></button>
                <div><br>
                <table id="Tab" class="table table-bordered border-primary">
                    <tr>
                    <tr>
                        <th class="cabecalho">Empresa</th>
                        <th class="cabecalho">Produto</th>
                        <th class="cabecalho">Descrição</th>
                        <th class="cabecalho">Apelido</th>
                        <th class="cabecalho">Grupo</th>
                        <th class="cabecalho">Subgrupo</th>
                        <th class="cabecalho">Situação</th>
                        <th class="cabecalho">Peso Líquido</th>
                        <th class="cabecalho">Classificação Fiscal</th>
                        <th class="cabecalho">Código de Barras</th>
                        <th class="cabecalho">Coleção</th>
                        <th></th>
                    </tr>
                    <?php foreach ($lista as $produto): ?>
                        <tr>
                            <td><?=$produto['EMPRESA'];?></td>
                            <td><?=$produto['PRODUTO'];?></td>
                            <td><?=$produto['DESCRICAO_PRODUTO'];?></td>
                            <td><?=$produto['APELIDO_PRODUTO'];?></td>
                            <td><?=$produto['GRUPO_PRODUTO'];?></td>
                            <td><?=$produto['SUBGRUPO_PRODUTO'];?></td>
                            <td><?=$produto['SITUACAO'];?></td>
                            <td><?=$produto['PESO_LIQUIDO'];?></td>
                            <td><?=$produto['CLASSIFICACAO_FISCAL'];?></td>
                            <td><?=$produto['CODIGO_BARRAS'];?></td>
                            <td><?=$produto['COLECAO'];?></td>
                            <td>
                            
                                <a href="editar.php?PRODUTO=<?=$produto['PRODUTO'];?>" class="btn btn-primar" <b><font color="#fff" size="3">Editar</font></b>
                                <br>
                                <a href="excluir.php?PRODUTO=<?=$produto['PRODUTO'];?>" onclick="funcao1()" class="btn btn-primar" <b><font color="#fff" size="3">Excluir</font></b>
                                
                            </td>
                        </tr>
                    <?php endforeach; ?> 
                    </tr>         
                </table>
            </div>      
            </div>
            <script>
                function funcao1()
                {
                alert("Produto excluido!");
                }
                </script>
        </section>
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Company Name</div></div>
        </footer>
        </header>
    </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
   </html>


