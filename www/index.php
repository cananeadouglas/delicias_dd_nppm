<?php

$today = date('m.d.y');
//echo $today;


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cupom - Delícias da Dany</title>
    <link rel="stylesheet" href="/css/estilo.css">
</head>
<body>
    <header>
        <h2>Cadastre Seu Cupom</h2>
    </header>
    
    <section>
            <form action="cad.php" method="POST">

                <label>Digite Seu Cupom Aqui</label><br>
                <input type="text" name="cupomaqui" required="required" placeholder="ATENÇÃO, 1(um) cadastro por vez." autofocus>
 
                <label>Digite Seu Nome e Sobrenome</label><br>
                <input type="text" name="nomeaqui" required="required" placeholder="Ex. Maria Silva">
                
                <label>Seu WhatsApp</label><br>
                <input type="text" id="telefoneaqui" placeholder="Format:19999229933 sem espaços" name="telefoneaqui" size="11" maxlength="11">
                <br>
                
                <input type="checkbox" name="informa" value="sim" checked>
                <label for="informa">Aceito Receber Promoções no WhatsApp</label><br><br>

                <label for="vol" >Qual é o Seu Nível de Satisfação Sobre o Produto?</label><br>
                <center><input type="range" id="vol" name="vol" min="0" max="100" step="10" ></center>
                
                
                <input type="submit" value="Enviar Dados Para Cadastro">
            </form>

            <label class="fontess"><center>Regras: Cadastre seu WhatsApp em cada produto adquirido da ‘‘Delícias da Dany’’. Acumule 15 pontos e troque por uma trufa de qualquer sabor disponível. Os cupons estarão nas embalagens, então, não jogue-as no lixo sem antes cadastrar em nosso site.
            </center></label>
            <label class="fontess"><center>Atenção, você só precisará ter um cupom válido. Juntou ganhou! Insira seus dados corretamente, principalmente do Whatsapp, pois vamos fazer a contagem através do número e não através do nome. Também não será permitido usar dois WhatsApps para resgatar o prêmio. Oferta é válida para os 500 produtos vendidos. Não será possível usar o mesmo cupom 2 (duas) vezes. Vocé verá sua pontuação a partir de um novo cadastro.
            </center></label>
    </section>
    
<a href="https://www.instagram.com/delicias_da_dany_gourmet/" target="_blank">
    <section class="semcor">
        <img src="logo trufa.png" height=400>
    </section>
</a>
    <footer>
        
        
    </footer>
    <script src="script.js"></script>
    
</body>
</html>