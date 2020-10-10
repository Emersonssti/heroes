<? include "header.php"; ?>

  


    <!--MAIN MENU WRAP END-->

    <!--BREADCRUMBS BEGIN-->
<section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <h1>Notícias</h1>
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

   <?
   
   $sql_noticia= "SELECT URL_IMG, TITULO, DATA_POSTAGEM, URL_FONTE, NOME_GERADOR FROM noticia";
   foreach ($db_heroes->query($sql_noticia) as $result_noticia) {
   
    setlocale(LC_TIME, 'portuguese'); 
    date_default_timezone_set('America/Sao_Paulo');

    $data_ = $result_noticia[2];
    $data = strftime("%d de %B de %Y", strtotime($data_));

       ?>
<!--NEWS LIST BEGIN-->
<div class="news-list col-md-4">
    <div class="item img-top">
        <div class="img-wrap">
            <a href="<? echo $result_noticia[3];?>"><img src="<? echo $result_noticia[0];?>" alt="post image"></a>
        </div>
        <div class="info">
            <a href="<? echo $result_noticia[3];?>" class="name"><? echo utf8_encode($result_noticia[1]); ?></a>	
            <div class="wrap">
                <a href="<? echo $result_noticia[3];?>"><? echo $data?></a> by <a href="<? echo $result_noticia[3];?>"><? echo $result_noticia[4];?></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?}?>
<!--NEWS LIST END-->


            </div>
        </div>
    </div>

    <!--CONTENT END-->





<? include "footer.php"; ?>