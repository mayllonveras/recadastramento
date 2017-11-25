<div class="main-div-index">
    <div id="logo-span">
        <img src="<?php Tools::img("logo.png"); ?>" alt="Prefeitura Municipal de Parnaiba" title="Prefeitura Municpal de Parnaiba" width="300" />
    </div>
    <hr class="index"/>
    <fieldset>
        <legend>EXPORTAR VISOES EM - CSV</legend>
        <a class="csv-link" href="<?php Tools::url("export"); ?>">
            <span>Exportar CSV</span><i class="icon-indent-left"></i>
        </a>
        <a class="csv-link" href="<?php Tools::url("export/custom"); ?>">
            <span>Customizar Export</span><i class="icon-list-alt"></i>
        </a>
    </fieldset>
    <hr class="index"/>
    <fieldset>
        <legend>EXPORTAR VISOES EM - Excel</legend>
        <a class="csv-link" href="<?php Tools::url("export/excel"); ?>">
            <span>Exportar Excel</span><i class="icon-indent-left"></i>
        </a>
        <a class="csv-link" href="<?php Tools::url("export/custom/excel"); ?>">
            <span>Customizar Export</span><i class="icon-list-alt"></i>
        </a>
        <hr class="index"/>
    <fieldset>
        <legend>EXPORTAR VISOES EM - PDF</legend>
        <a class="csv-link" href="<?php Tools::url("export/pdf"); ?>">
            <span>Exportar PDF</span><i class="icon-indent-left"></i>
        </a>
        <a class="csv-link" href="<?php Tools::url("export/custom/pdf"); ?>">
            <span>Customizar Export</span><i class="icon-list-alt"></i>
        </a>
    </fieldset>
    <hr class="index"/>
   <!-- <fieldset>
        <legend>Configuration</legend>
        <a class="csv-link" href="<?php Tools::url("dbconfig"); ?>">
        <span>Database Configuration</span> <i class="icon-wrench"></i>
    </a>
    </fieldset> -->

</div>