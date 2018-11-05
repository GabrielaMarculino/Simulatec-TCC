<!DOCTYPE HTML>
<html lang="pt-br">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">

<head>

  <?php
    session_start();
    
    if(!isset($_SESSION['user']));
    
     
  	  $codigo = $_GET['id'];
	    var_dump($codigo);
	
	    $username = 'leonardes';
	    $login = '';
      $con = new PDO('mysql:host=localhost;dbname=Simulado', $username, $login);
    
      $rs = $con->query("SELECT * FROM tb_usuario WHERE cd_usuario = '$codigo'"); 
          
    	$users = $rs->fetch(PDO::FETCH_OBJ);
  
?>
    <!--Adicionando o ícone no navegador-->
    <link rel="shortcut icon" href="img/lamp.ico" type="image/x-icon" />
    <meta charset="UTF-8">
    <title>Logado</title>
    <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
</head>

<body>
  <form action="session.php" method="post">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="index.html"><img src="img/logosimula.png" width="120px" id="imgSimula"></img></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="https://www.vestibulinhoetec.com.br/unidades-cursos/">Sobre as ETECs</a></li>
            <li><a href="siteEmp/ti.html">Quem Somos ?</a></li>
            <li><a href="#courses">Sobre o vestibulinho</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Provas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a id="zebct" href="portugues.php"><i style="color: orange; margin-left:-15px;"  id="icone" class="fas fa-book"></i> Português</a></li>
                <li><a id="zebct" href="#"><i style="color: red; margin-left:-15px;"   id="icone" class="fas fa-calculator"></i> Matemática</a></li>
                <li><a id="zebct" href="#"><i style="color: blue; margin-left:-15px;"  id="icone" class="fas fa-globe"></i> Geografia</a></li>
                <li><a id="zebct" href="#"><i style="color: green; margin-left:-15px;" id="icone" class="far fa-clock"></i> História</a></li>
                <li><a id="zebct" href="#"><i style="color: lightgreen; margin-left:-15px;" id="icone" class="fas fa-atom"></i> Ciências</a></li>
                <li><a id="zebct" href="provacompleta.php"><i style="color: darkred; margin-left:-15px;" id="icone" class="fab fa-aws"></i> Prova Completa</a></li>
              </ul>
            </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fas fa-cog"></i> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a id="zebct" href="alterarCadUsu.php" onclick="javascript: location.href='alterarCadUsu.php?id=<?php echo $users->cd_usuario?>'"><i style="margin-left:-20px;" class="fas fa-user"></i> Alterar Perfil</a></li>
                <li><a id="zebct" href="sair.php"><i style="margin-left:-20px;" class="fas fa-sign-out-alt"></i> Sair</a></li>
              </ul>
            </li>
            
            <!--<li><a href="logado.html">Logado</a></li>-->
            <!-- <li><a id="myBtn">Login</a></li> -->
          </ul>
        </div>
      </div>
    </nav>
  </form>
  <br><br><br>
  <div class="row">
    <div class="col-lg-12 col-xs-4">
      <div class="box">
        <img alt="140x140" data-src="holder.js/140x140" class="img-circle" src="img/av.png" data-holder-rendered="true" style="width: 140px; height: 140px;">
        <p>
          <p>
           <?php
	           echo "Nome: ".$_SESSION['user']; 
	           ?>
              <br> Seu melhor progresso:
              <p>
                Prova de Matemática
                <p>
                  <div class="progress">
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                  </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-2 col-xs-4">
          <table class="table table-striped" id="rank">
            <thead>
              <tr>
                <th>#</th>
                <th>Os melhores</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Leonardo Lisboa</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Kevin dos Anjos</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Breno Lins </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Douglas Camilo</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Alberto Júnior</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Bruno Jun</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Guilherme Gonçalves</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Lidiane Pires</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Rebeca Abreu</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>Gabriela Marculino</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      
      
       <div id="box2">
        <center><h4>Melhores Provas</h4></center><br><br>
                 
                 Português<br>
                 Historia
      </div>
       <div id="box8">
         <center><h4>Seu progresso</h4></center><br><br>
        <div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      </div>
       <div id="box4">
         <center><h4>Piores Provas</h4></center><br><br>
                 
                Matemática<br>
                Geografia
      </div>
      <br>
       <div id="box5">
         <center><h4>Seu progresso</h4></center><br><br>
       <div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      </div>
      
     <!-- <div class="row">
        <div class="col-lg-4">
          <!-- Button trigger modal -->
       <!--   <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" id="btnModinha">Veja seu desempenho</button>
          <!-- Modal -->
       <!--   <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="animated slideInLeft">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Melhores provas</h4>
                </div>
                <div class="modal-body">
                    <br><br> Historia.
                    <br> Português.
                    <br>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-4">-->
          <!-- Button trigger modal -->
        <!--  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#desp" id="btnModi">Veja seu desempenho</button>
          <!-- Modal -->
         <!-- <div class="modal" id="desp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="animated slideInRight">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Piores provas</h4>
                </div>
                <div class="modal-body">
                    <br><br> Historia.
                    <br> Português.
                    <br>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>-->
  </div>
  </div>
</body>

</html>



