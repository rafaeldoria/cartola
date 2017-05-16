<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-warning">
            <div class="panel-heading">Realizar Cadastro</div>
            <div class="panel-body">

                <div class="panel-heading">
                    <div class="panel-title text-center">
                        <h2 class="title">CartolaFC</h2>
                        <hr />
                    </div>
                </div> 
                <!-- Login Form -->
                <form role="form" method="post" action="<?= base_url('Cadastro/novo_cadastro') ?>" id="formulario_adicionarUsuario">
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="nomeUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Nome:</label>
                            <div class="input-group">
                                <input class="form-control" id="nomeUsuario" type="text" name="nomeUsuario" placeholder="Informe seu nome" required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-warning"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="emailUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Email:</label>
                            <div class="input-group">
                                <input class="form-control" id="emailUsuario" type="email" name="emailUsuario" placeholder="Informe seu e-mail" required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-warning"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>                                                                    
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="celularUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Celular: (xxxxxxxxx)</label>
                            <div class="input-group">
                                <input class="form-control" id="celularUsuario" type="tel" name="celularUsuario"  pattern="^\d{9}$" placeholder="Informe seu celular" required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-warning"><span class="glyphicon glyphicon-phone" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <button id="botao_cadastrar" type="submit" class="btn btn-warning btn-lg btn-block login-button" >Cadastrar</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>





