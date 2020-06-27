<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php print $cabecalho_title; ?></title>

    <?php print @$cabecalho_css; ?>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <header class="container">
            <!--[if	lt	IE	9]>				<script	src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>		<![endif]-->
            <h1><img class="logotipo" src="imagens/logo.png" alt="Mirror Fashion"></h1>
            <p class="sacola">
                Nenhum item na sacola de compras
            </p>

            <nav class="menu-opcoes">
                <ul>
                    <li><a href="#">Sua Conta</a></li>
                    <li><a href="#">Lista de Desejos</a></li>
                    <li><a href="#">Cartão Fidelidade</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="#">Ajuda</a></li>
                </ul>
            </nav>
    </header>    
</body>
</html>