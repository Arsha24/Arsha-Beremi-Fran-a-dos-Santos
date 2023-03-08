<?php
require_once("banco.php");
require_once("tabelas.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="trabalho2.css">
    <title>Tela de Login </title>
</head>

<body> 

    
  <form action="trabalho3.php" method="post" class="form">
  <div class="quadro-cabeçario">

    <h2>Login</h2>




<div class="nome">
    <label for="fname">Primeiro:</label><br>
    <input type="text" id="fname" name="fname"><br>

    <label for="lname">Sobrenome:</label><br>
    <input type="text" id="lname" name="lname"> 

    <label for="email">email:</label>
    <input type="email" id="email" name="email">
</div>

<div class="aniver">

    <label for="aniver">Aniversario:</label>
    <input type="date" id="aniver" name="aniver">

</div>
<div class="escolha">

    <input type="radio" id="gojo" name="fav_persg" value="Gojo">
    <label for="Gojo">Satoru Gojo</label><br>
    <input type="radio" id="Yuta" name="fav_persg" value="Yuta">
    <label for="Yuta">Yuta Okkotsu</label><br>
    <input type="radio" id="Yuji" name="fav_persg" value="Yuji">
    <label for="Yuji">Yuji Itadori</label><br>
    <input type="radio" id="Megumi" name="fav_persg" value="megumi">
    <label for="Megumi">Megumi Fushiguro</label>
</div>

<fieldset>
    <legend>Escolha o seu Vilão favorito</legend>
	<?php
	$vilao = select_vilao();
	foreach($vilao as $vilao) {
		echo "<input type=\"radio\" name=\"linha\" id=\"linha_{$vilao['id_linha']}\" value=\"{$vilao['id_linha']}\">\n";
		echo "<label for=\"linha_{$vilao['id_linha']}\">{$vilao['nome']}</label>";
	}		
	?>
</fieldset>
<div class="texto">
    <label for="Opinião"> Dê a sua opinão sobre o magá ou o anime de Jujutsu Kaisen</label>
    <textarea name="message" style="width:200px; height:600px;">
   
    </textarea>
</div>   

<div class="quantidade"> 
        <label for="quantidade">Sua nota para a obra</label>
        <input type="number" id="quantidade" name="quanti" min="0" max="100" step="10" value="30">

</div>  

    <div class="botão">
        <input type="submit" value="enviar" class="submit">
    </div>   

</div>
</div>
  </form> 
</body>    