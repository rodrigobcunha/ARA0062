<?php
include_once "../servico/Autenticacao.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>Gerenciamento de blog</title>
        <style>
        body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('http://www.capecodpetresort.com/wp-content/uploads/background-paws-page-tall.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;

}

h1 {
color: #2496e2;
font-family: arial, sans-serif;
font-size: 50px;
font-weight: bold;
text-align: center;
padding:20px;
margin-top: 20px;
}

    </style>
  </head>
  <body>
      
    <div class="container">
        
        <h1>Criação de card</h1>
         <hr>
        <a href="ConsultaBlog.php"> < Voltar </a>
        
       <br><br>
        
        <form action="salvar.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Titulo</label>
            <input type="text" name="titulo" class="form-control"  >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Corpo do texto</label>
            <input type="text" name="corpo" class="form-control" >
          </div>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

       
        <br><br>
   </div> <!-- container -->
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
     
  </body>
</html>