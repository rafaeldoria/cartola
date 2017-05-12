<?php
$dadosUsuarioLogado = $this->session->userdata("usuario_logado");
?>
<nav class="navbar navbar-default" >
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="home">Cartola Brodis</a>
        </div>
        <ul class="nav navbar-nav">            
            <li class="active"><?= anchor('Login/Home', '<span class="hidden-tablet">Home</span>') ?></li>            
        </ul>
        <li class="nav navbar-nav navbar-right" id="dadosUsuario"></li>
        </ul>        
    </div>
</nav>
<?php
echo($dadosUsuarioLogado['Email']);  
?>