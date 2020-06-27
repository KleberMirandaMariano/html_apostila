<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Mirror Fashion</title>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
    <?php include ("cabecalho.php"); ?>
    <body>
        <div class="produto-back">
            <div class="container">
                <div class="produto">
                    <h1>Fuzzy cardigan</h1>
                    <p>por apenas 129,90</p>
    
                    <form>
                        <fieldset class="tamanhos">
                            <legend>Escolha o tamanho:</legend>
    
                            <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                            <output for="tamanho" name="valortamanho"><script text="javascript" src="js/produto.js"></script></output>
                        </fieldset>
                        <fieldset class="cores">
                            <legend>Escolha a cor</legend>
    
                            <input type="radio" name="cor" value="verde" id="verde" checked>
                            <label for="verde">
                                <img src="imagens/produtos/foto1-verde.png" alt="Produto na cor verde">
                            </label>
    
                            <input type="radio" name="cor" value="rosa" id="rosa" checked>
                            <label for="rosa">
                                <img src="imagens/produtos/foto1-rosa.png" alt="Produto na cor rosa">
                            </label>
    
                            <input type="radio" name="cor" value="azul" id="azul" checked>
                            <label for="azul">
                                <img src="imagens/produtos/foto1-azul.png" alt="Produto na cor azul">
                            </label>
                        </fieldset>
                        
    
                        <button class="comprar">Comprar</button>
                    </form>
    
                </div>
                <div class="detalhes">
    
                    <h2>Detalhes do produto</h2>
    
                    <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente 
                    material italiano com estampa desenhada pelos artesãos da 
                    comunidade de Krotor nas ilhas gregas. Compre já e receba hoje 
                    mesmo pela nossa entrega ajato.</p>
    
                    <table>
                        <thead>
                            <tr>
                                <th>Característica</th>
                                <th>Detalhe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Modelo</td>
                                <td>Cardigã 7845</td>
                            </tr>
                            <tr>
                                <td>Material</td>
                                <td>Algodão e poliester</td>
                            </tr>
                            <tr>
                                <td>Cores</td>
                                <td>Azul, Rosa e Verde</td>
                            </tr>
                            <tr>
                                <td>Lavagem</td>
                                <td>Lavar a mão</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </body>
    <?php include ("rodape.php"); ?>    
</body>
</html>