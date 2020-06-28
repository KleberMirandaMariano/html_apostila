
   <?php 
        $conexao = mysqli_connect("127.0.0.1" , "root" , "" , "produtos");
        $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
        $produto = mysqli_fetch_array($dados);
        $cabecalho_css = '<link rel="stylesheet" href="css/produtos.css">';
        $cabecalho_title = $produto['nome'];
        include ("cabecalho.php");
    ?>
        <div class="produto-back">
            <div class="container">
                <div class="produto">
                    <h1><?= $produto['nome'] ?></h1>
                    <p>por apenas<?= $produto['preco'] ?></p>
    
                    <form action="checkout.php" method="POST">
                        <input type="hidden" name="nome" value="<?= $produto['nome'] ?>">
                        <input type="hidden" name="preco" value="<?= $produto['preco'] ?>">
                        <input type="hidden" name="id" value="<?= $produto['id'] ?>">

                        <fieldset class="tamanhos">
                            <legend>Escolha o tamanho:</legend>
    
                            <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                            <output for="tamanho" name="valortamanho"><script text="javascript" src="js/produto.js"></script></output>
                        </fieldset>
                        <fieldset class="cores">
                            <legend>Escolha a cor</legend>
    
                            <input type="radio" name="cor" value="verde" id="verde" checked>
                            <label for="verde">
                                <img src="imagens/produtos/foto<?= $produto['id'] ?>-verde.png" alt="Produto na cor verde">
                            </label>
    
                            <input type="radio" name="cor" value="rosa" id="rosa" checked>
                            <label for="rosa">
                                <img src="imagens/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="Produto na cor rosa">
                            </label>
    
                            <input type="radio" name="cor" value="azul" id="azul" checked>
                            <label for="azul">
                                <img src="imagens/produtos/foto<?= $produto['id'] ?>-azul.png" alt="Produto na cor azul">
                            </label>
                        </fieldset>
                        
    
                        <button class="comprar">Comprar</button>
                    </form>
    
                </div>
                <div class="detalhes">
    
                    <h2>Detalhes do produto</h2>
    
                    <p><?= $produto['descricao'] ?></p>
    
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
    <?php include ("rodape.php"); ?>    
