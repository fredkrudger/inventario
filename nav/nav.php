 <nav class="navbar navbar-default">
  <div class="container-fluid">    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../panel/">SumiPan Los LLanos</a>
    </div>    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"> 
        <li><a href="../productos/">Productos</a></li>
        <li><a href="../clientes/">Clientes</a></li>
        <li><a href="../proveedores/">Proveedores</a></li>
        <li><a href="../envios/">Envios</a></li>
      </ul> 
      <ul class="nav navbar-nav navbar-right">         
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["usuario"]; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">          
            <li><a href="../logout.php">Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>