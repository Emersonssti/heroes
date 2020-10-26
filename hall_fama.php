<? include "header.php"; ?>

  


    <!--MAIN MENU WRAP END-->

    <!--BREADCRUMBS BEGIN-->
<section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <h1>Hall da Fama</h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->

    <!--CONTENT BEGIN-->

    <div class="content">
        <div class="container">
            <div class="row row-offcanvas row-offcanvas-left">

     <!--CLUB STAFF TOP BEGIN-->



     <div class="club-staff-top">
        <div class="container">

        <?
   
        $sql_torneio= "SELECT 
        torneio.NOME,
        primeiro.NOME,
        segundo.NOME, 
        terceiro.NOME,
        torneio.URL_IMG_PRIMEIRO,
        torneio.URL_IMG_SEGUNDO,
        torneio.URL_IMG_TERCEIRO
        FROM torneio 
        INNER JOIN inscricao primeiro ON primeiro.ID_INSCRICAO = torneio.PRIMEIRO
        INNER JOIN inscricao segundo ON segundo.ID_INSCRICAO = torneio.SEGUNDO
        INNER JOIN inscricao terceiro ON terceiro.ID_INSCRICAO = torneio.TERCEIRO
        WHERE torneio.ID_STATUS = 3 ORDER BY torneio.ID_TORNEIO DESC";
        foreach ($db_heroes->query($sql_torneio) as $result_torneio) {
        

       ?>
            <div class="row">
                <div class="col-md-12">
                    <h4><? echo $result_torneio[0];?></h4>
                </div>
                
                <div class="staff-box">            
                    <div class="col-md-4  col-sm-6 col-xs-12">
                        <a href="#" class="item">
                            <span class="info">
                                <span class="name"><? echo $result_torneio[1]; ?></span>
                                <span class="position">Campeão</span>
                                <span class="number">1</span>
                            </span>
                            <img src="<? echo $result_torneio[4];?>" alt="player">
                        </a>
                    </div>                                         
                    <div class="col-md-4  col-sm-6 col-xs-12">
                        <a href="#" class="item">
                            <span class="info">
                                <span class="name"><? echo $result_torneio[2]; ?></span>
                                <span class="position">Vice campeão</span>
                                <span class="number">2</span>
                            </span>
                            <img src="<? echo $result_torneio[5];?>" alt="player">
                        </a>
                    </div>
                    <div class="col-md-4  col-sm-6 col-xs-12">
                        <a href="#" class="item">
                            <span class="info">
                                <span class="name"><? echo $result_torneio[3]; ?></span>
                                <span class="position">Terceiro Lugar</span>
                                <span class="number">3</span>
                            </span>
                            <img src="<? echo $result_torneio[6];?>" alt="player">
                        </a>
                    </div>   

                    
                </div>    
        </div>
               
        <?}?>
            </div>
        </div>


    </div>

    <!--CLUB STAFF TOP END-->



            </div>
        </div>
    </div>

    <!--CONTENT END-->





<? include "footer.php"; ?>