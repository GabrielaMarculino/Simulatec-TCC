<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="img/lamp.ico" type="image/x-icon" />
  <meta charset="utf-8">
  
  <?php
      session_start();
    
    if(!isset($_SESSION['user']));
  ?>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Prova completa</title>
</head>
  <body>
<nav class="navbar navbar-default navbar-fixed-top">
    
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                     
                        </button>                       
                         <a class="navbar-brand" href="index.html"><img  id="imgSimula" class="logo" src="img/logosimula.png" width="120px"></img></a>              
                       </div>
        <script >
            var myTimer = setInterval(myClock, 1000);
            function myClock() {
            document.getElementById("demo").innerHTML =
            new Date().toLocaleTimeString();
            }
        </script>
              <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        </ul>
        <p id="demo"></p>
        </div>

        
      </div>
  </nav>
  <br><br><p>
<div class="container">
  <center><h2 style="font-weight:100">Questão 9</h2></center>
</div>
<div class="container" id="corpoProva">
  <div class="row">
    <div class="box">
    <img src="img/questoes/questao18.png" class="img-responsive" style="margin-left: 5%; margin-top:10%;" width="90%;">
    </div>
  </div>
</div>
<div class="container" id="alter">
  <form>
    <label class="radio-inline">
      <input type="radio" name="optradio">A
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">B
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">C
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">D
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">E
    </label>
  </form>
</div>
<div class="container" id="botoes">
  <a href="logado.php" class="btn btn-danger">Cancelar</a>
  <a href="provacompleta7.php" id="btnAnt" type="button" class="btn btn-warning" style="margin:0.5%;">Anterior</a>
  <a href="provacompleta9.php" type="button" class="btn btn-success">Próximo</a>
</div>


</body>
  <style>
  .navbar-default {
   
    border-color: #e7e7e7;
}
#imgSimula{
    margin-top: -19px
}
p
{
  margin-left:-3px;
  font-size:17px;
}
.h2, h2 {
    font-size: 30px;
    color:orange;
}
.navbar-default .navbar-brand {
    color: white;
}
.navbar-default {
    height: 60px;
}
.course-text{
    padding: 84px;
}
.navbar-default .navbar-nav > li > a {
    color: #717f86;
    font-size: 14px;
    font-weight: 700;
}
.navbar-nav > li > a{
  padding: 0px;
  margin: 10px 5px;
  padding: 10px 15px;
}
.navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover
{
  color:  #333;
}

.navbar-nav .active a{
    background: none !important;
    color: #5FCF80 !important;
    outline: none;
}

.btn-trial a{
  background-color: #5FCF80;
  border-radius: 25px;
  color: #ffffff !important;
  border: 1px solid #5FCF80;
}
.btn-trial a:hover, .btn-trial a:focus{
  border: 1px solid #5FCF80;
  background-color: #fff;
  color: #5FCF80 !important;
}
.navbar-default .navbar-brand {
    font-family:'Dosis', sans-serif !important;
    font-weight: 700;
    text-transform:none;
    padding: 0px;
    height: inherit;
    font-size: 36px;
    margin: 20px 0px;
}
.navbar-default .navbar-brand span{
  font-weight: 100 !important;
}
.navbar {
    margin-bottom: 0px;
}
.padding-zero{
  padding: 0px;
}
.mart20{
  margin-top: 20px;
}
/*logo*/
.logo{
    
    margin-top: -35px;
}
#demo{
    text-align:right;    
    margin-top: 10px;
    font-size: 35px; 
}
.box
    { 
      margin-top: 1%;
      border: 1px solid lightgrey;
      height:550px;
      width: 500px;
      
    } 
    #corpoProva
    {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    #alter
    {
      margin-top:10px;
      display: flex;
      align-items: center;
      justify-content: center;
      
    }
    #botoes
    {
      display:flex;
      align-items: center;
      justify-content: center;
      padding:0.5px; 
    }
    .btn-danger:hover
    {
      background-color: darkred;  
     
    }
    .btn-warning:hover
    {
      background-color: #c17202;  
      
    }
    .btn-success:hover
    {
      background-color: darkgreen;  
    
    }
    @media only screen and (max-width: 360px) {
    .box {
        height:450px; 
        width:300px;
    }
    #botoes
    {
      margin-top:-10px;
    }
}
 @media only screen and (max-width: 412px) {
    .box {
        height:450px; 
        width:300px;
    }
}
 @media only screen and (max-width: 414px) {
    .box {
        height:450px; 
        width:300px;
    }
}
</style>