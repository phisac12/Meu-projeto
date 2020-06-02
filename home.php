<!doctype html>
            <html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Bem vindo Brothers</title>
    
    <?php
    session_start();
    if(!isset($_SESSION['izaker'])){

        header('Location:login2.html');

    }

    ?>
      
<style>
      
    .navbar1{
        
        background-color:#6c19de;
        color:white;
        padding:5px 18px;
        border-radius:8px;
        font-family:sans-serif;
        text-transform:uppercase;
        
    }  
    
    .navbar1:hover{
        
        background-color:#ad5cf4;
        text-decoration:none;
        color:white;
        transition: .1s;
    }

    h1{
        
        
        font-family:coolvetica;
    }
    
    @font-face {
        
        src: url(fonts/coolvetica_rg.ttf);
        font-family:coolvetica;
            
    }
        
        
</style>                                                                                                               
          
</head>
   
    
<body>
    
<div class="row">
        <div class="col-md-2" style="background-color:#afafaf;">
    
    </div>
    <div class="col-md-8" style="background-color:#d3d2cf;">
        <nav class="navbar navbar-light bg-white" style="border:2px solid black; border-radius:5px;">
            <a class="navbar-brand" href="#">
                <img src="images/logopp.png" width="30" height="30" class="d-inline-block align-top" alt="">  Brothers 
            </a>
            <a href="home.php" style="margin-left:70%;" class="navbar1">Inicio</a>
            <a href="info.html" class="navbar1" >Contato</a>
        </nav>  
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/carousel1.jpeg" alt="First slide" style="border-radius:5px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/carousel2.jpeg" alt="Second slide" style="border-radius:5px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/carousel3.jpeg" alt="Third slide" style="border-radius:5px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
        </div>
   <!--<h1 class="display-1">A Tecnologia</h1>-->
        <div class="row">
            <div class="col-md-10"> 
                <h1 class="display-1" style="margin-top:3%; margin-left:10%;">A Tecnologia</h1>
                <img src="images/ault.jpg" style="width:982px; margin-top:3%; margin-left:1%; border-radius:12px; margin-bottom:5%;">
            </div>
            <div class="col-md-2">
                <img src="images/aspas.png" style="margin-top:90%; margin-right:55px;">
                <p style="margin-top:10%; margin-right:20%; font-family:sans-serif; background:#d8d7d7; border:1px solid white; border-radius:5px">Você sabia que a tecnolgia avançou mundialmente, onde tudo e todos necesitam dela a todo momento e muitos trabalhos hoje utilizam ela a seu favor. Quem diria que chegariamos aonde estamos ne!?
                </p>
            </div>
        </div>
         
        <div class="row">
            <div class="col-md-9">
                <h1 class="display-1" style="margin-top:7%;margin-bottom:6%; filter-drop-shadow:2px 2px red; margin-left:7%;">Ambiente de trabalho</h1>
                <img src="images/tec.jpg" style="width:782px; margin-left:13%;border-radius:12px;">
            
            </div>
            <div class="col-md-3">
            <img src="images/aspas.png" style="margin-top:150%; margin-right:25%;">
            <p style="margin-top:10%; margin-right:35%; font-family:sans-serif; background:#d8d7d7; border:1px solid white; border-radius:5px">O ambiente de trabalho é necessário para o trabalho individual e focado, algumas pessoas se identificam  melhor com um ambiente bem texturizado e muito agradavel com várias decorações.
                
            </p>
            </div>
        </div>
    
    <h1 class="display-1" style="margin-top:10%; margin-bottom:4%; background-color:#ccc;border:2px solid white;border-radius:15px;">como a <span style="color:#3535c7;">tecnologia</span> te favorece?</h1>
    
    <h1 style="margin-left:5%;margin-bottom:3%;">Lista  do que a tecnologia pode te ajudar</h1>
        <ul style="border:3px dashed black;margin-right:40%; margin-left:5%; margin-bottom:3%; padding:10px 0 10px 2px;">
            <li>Fazer compras virtuais</li>    
            <li>Ler livros em pdf ao invez de comprar físicamente</li>    
            <li>Conversar com um parente distante em tempo real</li>    
            <li>Trabalhar em casa (home office)</li>    
            <li>Pesquisar sobre qualquer assunto</li>    
            <li>Entreterimento em diversos aspectos</li>    
            <li>Aprender alguma coisa diferente</li>
        </ul>
        
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-1" style="margin-top:3%; margin-bottom:5%; text-align: center;">Vamos estudar?</h1>
                <img src="images/office.jpg" style="width:800px; margin-left:3%; border-radius:12px;">
            </div>
            
            <div class="col-md-4">
                
                <h3 style="margin-top:50%;">Quando o  assunto é estudar a tecnologia pode te ajudar em diversos fatos, pela web você pode encontrar diversos assuntos, basta  saber navegar corretamente e você tirará bastante proveito.um dos sites mais famosos que conhecemos é o <a href="https://www.wikipedia.org/" target="_blank">Wikipedia.org</a> lá você poderá encontrar diversos temas e assuntos para sanar suas duvidas.Mas não se limite apenas a isso, pesquise em varios sites que você encontrará
                </h3>
            
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    
        
        
        
            
    </div>
        <div class="col-md-2" style="background-color:#afafaf;">
    
    </div>
</div>    
    
    
    <footer style="height:10%;">
    
       
        <p style="text-align: center; margin-right:20%; margin-top:10px; text-shadow:0 3px 5px;">
            <img src="images/logopp.png" style="width:40px; height:40px; margin-right:30%; margin-top:8px;">
        Todos os direitos reservados &copy; &trade;
         
        </p>
    
    
    
    </footer> 
    
    
    
    
</body>
    
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>