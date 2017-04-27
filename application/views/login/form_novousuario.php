<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>"/>                            
            <script src="<?= base_url('assets/js/jquery-3.2.1.js') ?>"></script>
            <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>                                        
            <script src="<?= base_url('assets/js/login.js') ?>"></script>              
            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
            <title>CartolaFC IBS Liga</title>
    </head>
    <body>
        <div id="wrapper">
            <div class="navbar navbar navbar-fixed-top">
                <div class="adjust-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="main" class="container-fluid" style="margin-top: 50px">
                            <title>Cadastrar</title>

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
                                            
                                            <!-- Username Field -->
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
                                                    <label for="loginUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Usuário:</label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="loginUsuario" type="text" name="loginUsuario" placeholder="Informe seu usuário" required/>
                                                        <span class="input-group-btn">
                                                            <label class="btn btn-warning"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
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
                                                        <input onkeyup="verificarSenha();" class="form-control" id="senhaUsuario2" type="password" name="senhaUsuario2" placeholder="Confirme sua senha" required/>
                                                        <span class="input-group-btn">
                                                            <label class="btn btn-warning"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p id="resultado"></p>
                                            <div class="row">                          
                                                <div class="form-group col-xs-12">
                                                    <label for="timeUsuario"><span class="text-danger" style="margin-right:5px;">*</span>Selecione seu time do coração:</label>
                                                    <div class="input-group">
                                                        <select class="form-control" id="timeUsuario" name="timeUsuario"></select>                            
                                                        <span class="input-group-btn">
                                                            <label class="btn btn-warning"><span class="glyphicon glyphicon-heart" aria-hidden="true"></label>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  cartola.com.br | Design by: <a href="" style="color:#fff;" target="_blank">rafael.doria@ibs.edu.br</a>
                </div>
            </div>
        </div>
    </body>
</html>     




