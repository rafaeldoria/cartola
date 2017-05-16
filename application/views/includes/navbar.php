<nav class="navbar navbar-default" >
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="home">Cartola Brodis</a>
        </div>
        <ul class="nav navbar-nav">            
            <li class="active"><?= anchor('Login/Home', '<span class="hidden-tablet">Home</span>') ?></li>            
        </ul>              
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= base_url('Home')?>"><span class="glyphicon glyphicon-star"></span>Dicas</a></li>            
            <li><a href="<?= base_url('Home')?>"><span class="glyphicon glyphicon-align-justify"></span><?= $usuario['Nome'] ?></a></li> 
            <li><a id="teste" href="#"><span class="glyphicon glyphicon-cog"></span>Alterar Dados</a></li>            
            <li><a href="<?= base_url('Login/logout')?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>            
        </ul>
    </div>
</nav>
