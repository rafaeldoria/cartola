<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <body>
        <!-- mensagens tela succes e danger -->
        <?php if ($this->session->flashdata("success")) : ?>
            <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
        <?php endif ?>

        <?php if ($this->session->flashdata("danger")) : ?>
            <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
        <?php endif ?>
            
        <!-- colocando dados do usuário em um array -->
        <?php
        
        ?>
            
        <!-- abertura div container principal "main"-->
        <div id="main" class="container-fluid" style="margin-top: 50px">