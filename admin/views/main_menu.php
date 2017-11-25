<div id="navbar-example" class="navbar navbar-static">
    <div class="navbar-inner">
        <div class="container" style="width: auto;">
            <a class="brand" href="<?php Tools::url('home');?>">Prefeitura Municipal de Parnaiba</a>
            <ul class="nav" role="navigation">
                <li class="dropdown">
                    <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">CSV <b
                            class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li>
                            <a tabindex="-1" href="<?php Tools::url('export');?>">
                                <span class="float-left">Exportar CSV</span>
                                <i class="icon-indent-left float-right"></i>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a tabindex="-1" href="<?php Tools::url('export/custom/csv');?>">
                                <span class="float-left">Exportar customizado</span>
                                <i class="icon-list-alt float-right"></i>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav" role="navigation">
                <li class="dropdown">
                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Excel <b
                            class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li>
                            <a tabindex="-1" href="<?php Tools::url('export/excel');?>">
                                <span class="float-left">Export Excel</span>
                                <i class="icon-indent-left float-right"></i>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a tabindex="-1" href="<?php Tools::url('export/custom/excel');?>">
                                <span class="float-left">Exportar customizado</span>
                                <i class="icon-list-alt float-right"></i>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav" role="navigation">
                <li class="dropdown">
                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">PDF <b
                            class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li>
                            <a tabindex="-1" href="<?php Tools::url('export/pdf');?>">
                                <span class="float-left">Exportar PDF</span>
                                <i class="icon-indent-left float-right"></i>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" href="<?php Tools::url('export/custom/pdf');?>">
                                <span class="float-left">Exportar customizado</span>
                                <i class="icon-indent-right float-right"></i>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav" role="navigation">
                <li class="dropdown">
                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Configuration <b
                            class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li><a tabindex="-1" href="<?php Tools::url('dbconfig');?>">DB Configuração<i
                                class="icon-wrench"></i></a></li>

                    </ul>
                </li>
            </ul>
            <ul class="nav pull-right">
                <li id="fat-menu">
                    <a href="<?php Tools::url('logout');?>" role="button">&nbsp;Sair&nbsp; <i
                            class="icon-off"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>