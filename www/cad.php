<?php 

include "conn.php"; // chama a conexão com o banco de dados

$today = date('y.m.d');
$cupom = $_POST['cupomaqui'];
$nome = $_POST['nomeaqui'];
$whatsapp = $_POST['telefoneaqui'];
$recebe = $_POST['informa'];
$pesqui = $_POST['vol'];

//criando não do informar whatsapp, se for null recebe não
if (strlen($recebe) <= 1){
	$recebe = 'nao';
}


//verificação de Cupom
$verificar = mysqli_query($conn, "SELECT cupom FROM cadastro WHERE cupom = '$cupom'; ") or die(mysqli_error());

$valor_cupom = mysqli_num_rows($verificar);


if ($valor_cupom > 0){
	//echo "existe";
	
	//verificação de Whatsapp
	$sql3 = "SELECT whatsapp FROM cadastro WHERE cupom = '$cupom'; ";
	$result2 = mysqli_query($conn, $sql3);
	$fetch2 = mysqli_fetch_assoc($result2);
	$fetch9 = array_shift($fetch2);
	$valor_whatsapp = $fetch9;

	//verificação de Nome
	$sql4 = "SELECT nome FROM cadastro WHERE cupom = '$cupom'; ";
	$result4 = mysqli_query($conn, $sql4);
	$fetch4 = mysqli_fetch_assoc($result4);
	$fetch5 = array_shift($fetch4);
	$valor_nome = $fetch5;


	if(!empty($valor_whatsapp)){ 
		//esta preenchido com numeoros
		//echo "existe cupom. whatsapp é $valor_nome";

		echo"<script language='javascript' type='text/javascript'>
        alert('Este CUPOM já foi usado e já tem um Whatsapp cadastrado com o nome ( $valor_nome ) Você não pode usar este cupom. Tente novamente com outro cupom. ');window.location.href='index.php';</script>"; mysqli_close();

	}else{
		//echo "não existe whatsapp, cadastrar aqui, vai ser modificado";

		session_start();
		$_SESSION['cupom'] = $cupom;
		$_SESSION['nome'] = $nome;
		$_SESSION['whatsapp'] = $whatsapp;
	    // modificar
		mysqli_query($conn, " UPDATE cadastro SET data_compra = '$today' WHERE cupom = '$cupom' ") or die(mysqli_error());
		mysqli_query($conn, " UPDATE cadastro SET nome = '$nome' WHERE cupom = '$cupom' ") or die(mysqli_error());
		mysqli_query($conn, " UPDATE cadastro SET whatsapp = '$whatsapp' WHERE cupom = '$cupom' ") or die(mysqli_error());
		mysqli_query($conn, " UPDATE cadastro SET informa = '$recebe' WHERE cupom = '$cupom' ") or die(mysqli_error());
		mysqli_query($conn, " UPDATE cadastro SET pesquisa = '$pesqui' WHERE cupom = '$cupom' ") or die(mysqli_error());

	        echo"<script language='javascript' type='text/javascript'>
			window.location.href='confirma.php';</script>";
		
	}



}else{
	//echo "não existe, cupom invalido";

	echo"<script language='javascript' type='text/javascript'>
        alert('Cupom não é válido ou digitou algo errado. Tente novamente.');window.location
        .href='index.php';</script>";
        mysqli_close();



}




//   4xrbVSFI6A5%ryGAB8%^5pzcJ55oJxm2
//   senha de configuração mysql aws


//SELECT id_cad FROM cadastro WHERE cupom = '$cupom'      and  and 


//cadastro

/*
$sql1 = mysql_query("INSERT INTO cadastro (data_compra, cupom, nome, whatsapp, informa, pesquisa) VALUE ('$today', '$cupom', '$nome', '$whatsapp', '$recebe', '$pesqui'); ") or die(mysql_error());

mysqli_query($conn, $sql1) or die(mysqli_error());

echo"<script language='javascript' type='text/javascript'>
alert('Registrado com Sucesso');window.location
.href='index.php';</script>";




$sql = mysqli_query($conn,"SELECT nome FROM usuario WHERE login = '$login' and senha = '$senha';") or die(mysqli_error());

$row = mysqli_num_rows($sql);
if($row > 0){
    session_start();
	$_SESSION["login"] = $login;
    echo"<script language='javascript' type='text/javascript'>
        alert('Você esta logado');window.location
        .href='entrada.php';</script>";
}
else{
    echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos, tente novamente');window.location
        .href='index.php';</script>";
        mysqli_close();
}



*/

?>

