<div class="modal fade" id="modal_adiciona_saldo" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabelAdicionarSaldo"></h4>
            </div>
            <div id="div_modal" class="modal-body">
                <form role="form" method="post" action="<?= base_url('Saldo/adiciona_saldo') ?>" id="formulario_adicionarUsuario">
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="nomeUsuarioSaldo"><span class="text-danger" style="margin-right:5px;">*</span>Nome:</label>
                            <div class="input-group">
                                <input class="form-control" id="nomeUsuarioSaldo" type="text" name="nomeUsuario" required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-warning"><span class="glyphicon glyphicon-font" aria-hidden="true"></label>
                                </span>                                
                            </div>
                        </div>
                    </div>                                                             
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="saldoUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Saldo:</label>
                            <div class="input-group">
                                <input class="form-control" id="saldoUsuario" type="number" name="saldoUsuario"  required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-warning"><span class="glyphicon glyphicon-phone" aria-hidden="true"></label>
                                </span>
                            </div>
                        </div>
                    </div>
                                                                                 
                    <div class="row">                          
                        <div class="form-group col-xs-12">
                            <label for="saldoAdicionado"><span class="text-danger" style="margin-right:5px;">*</span>Saldo que deseja adicionar:</label>
                            <div class="input-group">
                                <input class="form-control" id="saldoAdicionado" type="number" name="saldoAdicionado"  placeholder="Informe valor que deseja adicionar" required/>
                                <span class="input-group-btn">
                                    <label class="btn btn-warning"><span class="glyphicon glyphicon-phone" aria-hidden="true"></label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning btn-lg btn-block login-button" >Adicionar Saldo</button>                    
                    </div>
                </form>
            </div>
            </form>
        </div>
    </div>
</div>    
