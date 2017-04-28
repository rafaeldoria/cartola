<div class="container" style="margin-top: 5%;">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-warning">
            <div class="panel-heading">LOGIN</div>
            <div class="panel-body">
                <div class="panel-heading">
                    <div class="panel-title text-center">
                        <h2 class="title">CartolaFC IBS Liga</h2>
                        <hr />
                    </div>
                </div>
                <!-- Login Form -->
                <form role="form" method="post" action="<?= base_url('Login/autenticar') ?>" id="formulario_login">                
                <!-- Username Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="username"><span class="text-danger" style="margin-right:5px;">*</span>Usuário:</label>
                        <div class="input-group">
                            <input class="form-control" id="username" type="text" name="username" placeholder="usuário" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-warning"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Content Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label for="password"><span class="text-danger" style="margin-right:5px;">*</span>Senha:</label>
                        <div class="input-group">
                            <input class="form-control" id="password" type="password" name="password" placeholder="senha" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-warning"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-8">
                        <button id="btnCadastrar" class="btn btn-warning" type="submit">Logar</button>
                        <?= anchor('Login/novo_login', 'Cadastrar', array("class" => "btn btn-warning")); ?></li>                            
                    </div>
                </div>  
                </form>
                <!-- End of Login Form -->
            </div>
        </div>
    </div>  
</div>
