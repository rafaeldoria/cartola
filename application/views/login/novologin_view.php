

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
                <form role="form" method="post" action="<?= base_url('Login/novo_cadastro') ?>" id="formulario_adicionarUsuario">
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
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="senhaUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Senha:</label>
                            <div class="input-group">
                                <input class="form-control" id="senhaUsuario" type="password" name="senhaUsuario" placeholder="Informe sua senha" required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-warning"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="senhaUsuario2"><span class="text-danger" style="margin-right:5px;">*</span>Confirmar Senha:</label>
                            <div class="input-group">
                                <input class="form-control" id="senhaUsuario2" type="password" name="senhaUsuario2" placeholder="Confirme sua senha" required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-warning"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <label for="nomeUsuario" id="resultado"></label>                    
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="timeUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Digite nome do seu time:</label>
                            <div class="input-group">
                                <input class="form-control" id="timeUsuario" type="text" name="timeUsuario" placeholder="Digite nome do seu time" required/>                                                          
                                <span class="input-group-btn">
                                    <label class="btn btn-warning"><span class="glyphicon glyphicon-heart" aria-hidden="true"></label>                                    
                                </span>
                                </span>
                            </div>
                        </div>
                    </div>                         
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <label for="timesBuscados"><span class="text-danger" style="margin-right:5px;">*</span>Selecione seu time:</label>
                            <div class="input-group">
                                <select class="form-control" name="timesBuscados" id="timesBuscados" rows="5" cols="30"></select>
                                <span class="input-group-btn" id="busqueTime">
                                    <label class="btn btn-warning" ><span class="glyphicon glyphicon-hand-left" aria-hidden="true"></label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="tecnico"><span class="text-danger" style="margin-right:5px;">*</span>Técnico:</label>
                            <div class="input-group">
                                <input class="form-control" id="tecnico" type="text" name="tecnico" readonly="true" required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-warning"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
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





