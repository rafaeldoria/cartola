<div class="modal fade" id="modal_edita_cadastro" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabelEditar"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <form role="form" method="post" action="<?= base_url('Cadastro/edita_cadastro') ?>" id="formulario_adicionarUsuario">
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="nomeUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Nome:</label>
                            <div class="input-group">
                                <input class="form-control" id="nomeUsuario" type="text" name="nomeUsuario" placeholder="Informe seu nome" required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-warning"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
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
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning btn-lg btn-block login-button" >Atualizar</button>                    
                    </div>
                </form>
            </div>
            </form>
        </div>
    </div>
</div>    

