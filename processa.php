<?php
    header('Content-Type: text/html; charset=utf-8');
    $nome = addslashes($_POST['nome']);
    $idade = addslashes($_POST['idade']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $dataInteresse = addslashes($_POST['dataInteresse']);
    $mensagem = addslashes($_POST['mensagem']);

    $to = "contato@pousada.dx.am";
    $subject = "Formulario de Contato Pousada";
    $body = "Nome: ".$nome. "\n".
    			"Idade: ".$idade."\n".
    			"Telefone: ".$telefone."\n"	.
    			"Email: ".$email."\n".
    			"Data de Interesse: ".$dataInteresse."\n".
    			"Mensagem: ".$mensagem;

    $header = "From: contato@pousada.dx.am"."\n".
    				"Reply-To:".$email."\n".
    				"X=Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)){
    	echo ("<h4 style='text-align:center; color: red; font-size:25px;'>Enviado com sucesso!</h4>");
        
    }
    else{
    	echo ("<h4 style='text-align:center; color: red; font-size:25px;'>Não enviado.</h4>");
        
    }
    		
?>
