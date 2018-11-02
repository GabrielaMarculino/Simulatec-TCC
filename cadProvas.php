<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <form action = "cadastroProva.php" method = "POST" enctype="multipart/form-data"> 
  <?php
     session_start();
     if (!isset($_SESSION['admin'])) 
       
  ?>
  
    <!--Adicionando o ícone no navegador-->
 <link rel="shortcut icon" href="img/lamp.ico" type="image/x-icon" />
  <meta charset="UTF-8">
    <title>Cadastro de prova</title>
     <!-- Aqui chamamos o nosso arquivo css externo -->
  <link rel="stylesheet"  type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"  href="css/style2.css" />
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
          <a class="navbar-brand" href="index.html"><img src="img/logosimula.png" width="120px" id="imgSimula"></img></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="https://www.vestibulinhoetec.com.br/unidades-cursos/">Sobre as ETECs</a></li>
            <li><a href="https://tinetworking.000webhostapp.com/ ">Quem Somos ?</a></li>
            <li><a href="#courses">Sobre o vestibulinho</a></li>
            <li><a href="logado.html">Logado</a></li>-->
            <li><a href = "sair.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>
<br><br><br>
<div class="row">
     <div class="col-md-12"> 
	<center><h2>Cadastro de prova</h2></center>
	</div>
</div>
<br><br>
<div class="fon">
<div class="row">
     <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Questão</th>
      <th scope="col">Imagem</th>
      <th scope="col">A</th>
      <th scope="col">B</th>
      <th scope="col">C</th>
      <th scope="col">D</th>
      <th scope="col">E</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><input type="file" name="foto12" value='Cadastrar foto'></td>
      <td><input type="radio" name="1"/></td>
      <td><input type="radio" name="1"/></td>
      <td><input type="radio" name="1"/></td>
      <td><input type="radio" name="1"/></td>
      <td><input type="radio" name="1"/></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
     <th scope="row">16</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">18</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">20</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">21</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">22</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">23</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">24</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">25</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">26</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">27</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">28</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">29</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">30</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">31</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">32</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">33</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">34</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">35</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">36</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
     <th scope="row">37</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">38</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">39</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">40</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">41</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">42</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">43</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">44</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">45</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">46</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">47</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">48</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">49</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    <tr>
      <th scope="row">50</th>
      <td><input type="file" name="foto" value='Cadastrar foto'></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
      <td><input type="radio" name=""/></td>
    </tr>
    
  </tbody>
</table>
   <div class="bot">
	      <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
	      <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
	      </form>
	      <br>
    </div>
</div>
</div>
</body>
</html>