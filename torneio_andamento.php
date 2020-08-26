<? include "header.php"; ?>


    <!--BREADCRUMBS BEGIN-->
<section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <h1>Torneio em andamento</h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->


    <!--STANDING CUP BEGIN-->
    <section class="standing-cup">
    <div class="container">

   <?
   $sql_torneio= "SELECT 
   ID_TORNEIO,
   NOME
   FROM torneio WHERE ID_STATUS = 2";
   foreach ($db_heroes->query($sql_torneio) as $result_torneio) {
   ?>
        <div class="row">
            <h1><? echo $result_torneio[1];?></h1>
        <ul class="nav tab-filters">
            <li class="active"><a data-toggle="tab" href="#id_class1">Classificatória 1</a></li>
        </ul>



                <!-- <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h4>HOME</h4>
                    <p>Some content.</p>
                </div>
                </div> -->
        </div>
<?}?>
    </div>
</section>





<? include "footer.php"; ?>