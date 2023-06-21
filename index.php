<?php
include "cabecalho.php";
include "menu.php";
require_once "datarequest.php";
?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        Widget settings form goes here
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn blue">Save changes</button>
                        <button type="button" class="btn default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    Dashboard <small>tudo que você precisa à um click.</small>
                </h3>
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="index.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="pull-right">
                        <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                            <i class="fa fa-calendar"></i>
                            <span>
                            </span>
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </li>
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS -->
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="clientes-box">
                <div class="dashboard-stat blue">
                    <div class="visual">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <?php print(count($clientes)) ?>
                        </div>
                        <div class="desc">Clientes</div>
                    </div>
                    <a class="more" href="#clientes" >Visualizar <i class="m-icon-swapright m-icon-white"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="usuarios-box">
                <div class="dashboard-stat green">
                    <div class="visual">
                        <i class="fa fa-group"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <?php print(count($usuarios)) ?>
                        </div>
                        <div class="desc">
                            Usuários
                        </div>
                    </div>
                    <a class="more" href="#usuários" >Visualizar <i class="m-icon-swapright m-icon-white"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="fornecedores-box">
                <div class="dashboard-stat purple">
                    <div class="visual">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <?php print(count($fornecedores)) ?>
                        </div>
                        <div class="desc">
                            Fornecedores
                        </div>
                    </div>
                    <a class="more" href="#forncedores" >
                        Visualizar <i class="m-icon-swapright m-icon-white"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- END DASHBOARD STATS -->
        <div class="clearfix">
        </div>
        <!--Tabela-->
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box grey">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-folder-open"></i>Tabela Simples
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="tabelasimples">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                                <th>Usuario</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>makr124</td>
                                <td><span class="label label-sm label-success">Aprovado</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Nilson</td>
                                <td>jac123</td>
                                <td><span class="label label-sm label-info">Pendente</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>Cooper</td>
                                <td>lar</td>
                                <td><span class="label label-sm label-warning">Suspenso</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Sandy</td>
                                <td>Lim</td>
                                <td>sanlim</td>
                                <td><span class="label label-sm label-danger">Bloqueado</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->


        <div class="portlet box grey tabela tabela-clientes" id="clientes">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-folder-open"></i>Tabela Clientes
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped" id="clientes">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Endereço</th>
                                <th>Telefone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id = 1;
                            foreach ($clientes as $cliente) : ?>
                                <tr>
                                    <td><?php print($id) ?></td>
                                    <td><?php print($cliente["nome"]) ?></td>
                                    <td><?php print($cliente["cpf"]) ?></td>
                                    <td><?php print($cliente["endereco"]) ?></td>
                                    <td><?php print($cliente["telefone"]) ?></td>
                                    <td><?php print($cliente["email"]) ?></td>
                                </tr>
                            <?php
                                $id++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="portlet box grey tabela tabela-usuarios" id="usuários">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-folder-open"></i>Tabela Usuários
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Endereço</th>
                                <th>Telefone</th>
                                <th>Usuário</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id = 1;
                            foreach ($usuarios as $usuario) : ?>
                                <tr>
                                    <td><?php print($id) ?></td>
                                    <td><?php print($usuario["nome"]) ?></td>
                                    <td><?php print($usuario["cpf"]) ?></td>
                                    <td><?php print($usuario["endereco"]) ?></td>
                                    <td><?php print($usuario["telefone"]) ?></td>
                                    <td><?php print($usuario["usuario"]) ?></td>
                                </tr>
                            <?php
                                $id++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="portlet box grey tabela tabela-fornecedores" id="forncedores">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-folder-open"></i>Tabela Fornecedores
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Cidade</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id = 1;
                            foreach ($fornecedores as $fornecedor) : ?>
                                <tr>
                                    <td><?php print($id) ?></td>
                                    <td><?php print($fornecedor["nome"]) ?></td>
                                    <td><?php print($fornecedor["cpf"]) ?></td>
                                    <td><?php print($fornecedor["cidade"]) ?></td>
                                    <td><?php print($fornecedor["email"]) ?></td>
                                </tr>
                            <?php
                                $id++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<?php include "rodape.php" ?>