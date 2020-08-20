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


    <!--DONATIONS WRAP BEGIN-->
    <section class="donations-wrap">
    <div class="container">
        <div class="row">

    <?
   
   $sql_torneio= "SELECT 
   NOME,
   DATE_FORMAT(INICIO_INSCRICAO, '%d/%m'),
   DATE_FORMAT(FINAL_INSCRICAO, '%d/%m'),
   DATE_FORMAT(INICIO_CLASSIFICATORIA, '%d/%m'),
   DATE_FORMAT(DATA_FINAL, '%d/%m'),
   URL_IMG,
   DESCRICAO
   FROM torneio WHERE ID_STATUS = 4";
   foreach ($db_heroes->query($sql_torneio) as $result_torneio) {


       ?>

            <div class="col-md-12">
                <div class="donation-item">
                    <div class="row no-gutter equal-height">
                        <div class="col-md-7 col-sm-12">
                            <div class="img-wrap"><img class="img-responsive" src="<? echo $result_torneio[5];?>" alt="donation-item"></div>
                        </div>
                        <div class="col-md-5 col-sm-12 position-relative">
                            <div class="info">
                                <div class="wrap">
                                    <div class="title"><? echo utf8_encode($result_torneio[0]); ?></div>
                                    <div class="progress-wrap">
                                        <ul class="details">
                                            <li>Inscrições: <span><? echo $result_torneio[1]; ?> - <? echo $result_torneio[2]; ?></span>/</li>
                                            <li>Início: <span><? echo $result_torneio[3]; ?> </span>/</li>
                                            <li>Final: <span><? echo $result_torneio[4]; ?> </span></li>
                                           
                                        </ul>
                                        <div class="progress-line">
                                            <div class="bar"></div>
                                        </div>
                                    </div>
                                    <p><? echo $result_torneio[6]?></p>
                                    <a href="#" class="btn small">Registrar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
   <?}?>

            </div>
        </div>
    </div>
</section>
<!--DONATIONS WRAP END-->






<? include "footer.php"; ?>