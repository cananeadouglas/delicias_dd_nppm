<?php

$cupom = date('m.d.y');
//echo $today;

session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cupom</title>
    <link rel="stylesheet" href="/css/estilo.css">
</head>
<body>
    <header>
        <h3>Cadastre Seu Cupom</h3>
    </header>
    
    <section><center>

        <?php

        $today = date('d.m.y');
        
        $cupom = $_SESSION['cupom'];
        $nome = $_SESSION['nome'];
        $whatsapp = $_SESSION['whatsapp'];


        include "conn.php";

        $sql3 = "SELECT count(whatsapp) from cadastro WHERE whatsapp = '$whatsapp';";
        $result2 = mysqli_query($conn, $sql3);
        $fetch2 = mysqli_fetch_assoc($result2);
        $fetch2 = array_shift($fetch2);

        $pontos = $fetch2;


         

        echo "<b>Parabéns! Agora você está participando do nosso plano de fidelidade. Faça mais compras com a gente para ganhar mais pontos. Você possui ( $pontos ) pontos. Essa pontuação é válida com o cadastro de hoje. Você se cadastrou com o nome: ( $nome ) e seu WhatsApp é ( $whatsapp ) Lembre-se, o mais importante é o seu WhatsApp, a partir do seu número faremos a contagem para você ganhar. Muito obrigado, você está sendo importante, para o nosso desenvolvimento. Não deixe de comentar na rede social do Instagram @delicias_da_dany_gourmet se fez toda a diferença no seu dia e marca a agente pra gente repostar sua publicação. Seu feedback nos faz crescer mais e mais. Tenham um abençoado dia.</b>";
        



         ?>
            <a href="http://docker.localhost">
                <input type="submit" value="Cadastrar outro Cupom">
            </a>
            </center>
    </section>

    <a href="https://www.instagram.com/delicias_da_dany_gourmet/" target="_blank">
        
        <section class="semcor">
            <img src="logo trufa.png" height="400" alt="Instagram Delícias da Dany" >
        </section>
    </a>
    

    <footer>
        
        
    </footer>
    <script src="script.js"></script>
    
</body>
</html>