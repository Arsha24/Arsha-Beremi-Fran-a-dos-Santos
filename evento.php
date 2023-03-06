<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="trabalho2.css">
    <title>Cadastro de Evento </title>
</head>

<body> 

    
  <form action="cadastro evento.php" method="post" class="form">
  <div class="quadro-cabecario">

    <h2>Cadastro de eventos</h2>

<div class="nome">
    <label for="fname">Nome da pessoa criadora do evento:</label><br>
    <input type="text" id="fname" name="fname"><br>

    <label for="lname">Sobrenome:</label><br>
    <input type="text" id="lname" name="lname"> 

    <label for="email">email:</label>
    <input type="email" id="email" name="email">

    <label for="text">Nome do evento</label>
    <input type="text" id="text" name="text">

</div>
<legend>data</legend>
    <label for="id">Data</label>
    <input type="date" id="id" name="id">
<div class="date">

    <label for="date">Data</label>
    <input type="date" id="aniver" name="aniver">

</div>
<div class="escolha">
    <h3>Escolha o tipo de evento </h3>

    <input type="radio" id="anime" name="tipo" value="1">
    <label for="anime">anime</label><br>
    <input type="radio" id="kpop" name="tipo" value="2">
    <label for="kpop">kpop</label><br>
    <input type="radio" id="aniversario" name="tipo" value="3">
    <label for="aniver">aniversario</label><br>
    <input type="radio" id="familia" name="tipo" value="4">
    <label for="familia">encontro familiar</label>
</div>
<div class="quantidade"> 
        <label for="quantidade">Quantidade de pessoas permitidas no evento</label>
        <input type="number" id="quantidade" name="quanti" min="0" max="100" step="10" value="30">

</div> 
<div class="cidade">
    <label for="cidade">Escolha a cidade do RS que vai acontecer o evento:</label>
    <select id="cidade" name="cidade" size="1">
        <option value="1">Gravatai</option>
        <option value="2">Porto Alegre</option>
        <option value="3">Cachoeirinha</option>
        <option value="4">Viamao</option>
        
    </select>
</div>    
<div class="texto">
    <label for="info"> Informaçoes do evento</label>
    <textarea name="message" style="width:200px; height:600px;">
   
    </textarea>
</div>   
 

    <div class="botao">
        <input type="submit" value="enviar" class="submit">
    </div>   

</div>
</div>
  </form> 
</body>    