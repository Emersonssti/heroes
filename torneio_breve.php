<? include "header.php"; ?>

  


    <!--MAIN MENU WRAP END-->

    <!--BREADCRUMBS BEGIN-->
<section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <h1>Próximos Torneios</h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->


    <!--CLUB WRAP BEGIN-->

    
   <?
   $sql_torneio= "SELECT 
        ID_TORNEIO,
        NOME, 
        TH, 
        DATE_FORMAT(INICIO_INSCRICAO,'%d/%m/%Y'), 
        DATE_FORMAT(FINAL_INSCRICAO,'%d/%m/%Y'),
        DATE_FORMAT(INICIO_CLASSIFICATORIA,'%d/%m/%Y'),
        DESCRICAO,
        REGRAS,
        PREMIOS,
        CALENDARIO
    FROM torneio WHERE ID_STATUS = 4";
   foreach ($db_heroes->query($sql_torneio) as $result_torneio) {
    ?>

<input type="hidden" id="id_torneio" value="<? echo $result_torneio[0]; ?>">
<input type="hidden" id="cv" value="<? echo $result_torneio[2]; ?>">
    <section class="club-wrap club-champ">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h4><? echo $result_torneio[1];?> </h4>
                    <div class="champ-date"></div>
                </div>
                <div class="col-md-3">
                    <a href="trophies.html"  type="button" class="btn btn-primary" data-toggle="modal" data-target="#inscricao" data-whatever="@fat" class="btn small club-top-btn">Inscrição</a>
                </div>
            </div>
        </div>

        <? include "modal_inscricao.php"; ?>

<div class="championship-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="club-logo">
                    <img src="images/Trofeu.png" class="img-responsive" alt="champ image">                
                </div>
            </div>
            <div class="col-md-3">
                <div class="club-info">
                    <div class="item"><span>Centro de vila:</span> <? echo $result_torneio[2];?></div>
                    <div class="item"><span>Inscrições:</span> <? echo $result_torneio[3]; ?> À <? echo  $result_torneio[4]; ?></div>
                    <div class="item"><span>Início do torneio:</span> <? echo $result_torneio[5]; ?></div>
                    <div class="item"><span>Formato:</span> X1</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="club-info">
                    <div class="item">Sobre o Torneio</div>
                    <p><? echo $result_torneio[6];?></p>
                </div>	
            </div>
        </div>	
    </div>	
</div>
    </section>

    <!--CLUB WRAP END-->

    <!--CHAMPIONSHIP WRAP BEGIN-->

    <div class="championship-wrap">
        <!--CHAMPIONSHIP NAVIGATION BEGIN -->
<div class="champ-navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="champ-nav-list">
                    <li class="active"><a href="#regras">Regras</a></li>
                    <li><a href="#premios">Prêmios</a></li>
                    <li ><a href="#agenda">Agenda</a></li>
                    <li><a href="#participantes">Participantes</a></li>
                </ul>		
            </div>
        </div>
    </div>				
</div>
<!--CHAMPIONSHIP NAVIGATION END -->
        <div class="champ-tab-wrap tab-content">


<!--Regras -->
<div class="tab-item news-tab tab-pane active" id="regras">
    <div class="news-list">
        <div class="container">
            <div class="row">
            <? echo $result_torneio[7]; ?>
            </div>
        </div>
    </div>
</div>
<!--Prêmios -->
<div class="tab-item news-tab tab-pane" id="premios">
    <div class="news-list">
        <div class="container">
            <div class="row">
            <? echo $result_torneio[8]; ?>
            </div>
        </div>
    </div>
</div>

<!--Agenda -->
<div class="tab-item news-tab tab-pane" id="agenda">
    <div class="news-list">
        <div class="container">
            <div class="row">
            <? echo $result_torneio[9]; ?>
            </div>
        </div>
    </div>
</div>

<!--Participantes -->
<div class="tab-item news-tab tab-pane" id="participantes">
    <div class="part-list">
        <div class="container">
            <div class="row">
            <?
   $sql_part= "SELECT 
       NOME_VILA
    FROM inscricao WHERE ID_TORNEIO = '".$result_torneio[0]."'";
   foreach ($db_heroes->query($sql_part) as $result_part) {
    ?>
                <div class="col-md-3">
                    <a class="item">
                        <span class="name"><? echo $result_part[0];?></span>
                    </a>
                </div>
    <?}?>
            </div>
        </div>
    </div>
</div>




    </div>	
</div>
<!--CHAMPIONSHIP NEWS TAB END -->
<?}?>




<? include "footer.php"; ?>