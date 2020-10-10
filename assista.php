<? include "header.php"; ?>

  


    <!--MAIN MENU WRAP END-->

    <!--BREADCRUMBS BEGIN-->
<section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <h1>Assista</h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->

    <!--CONTENT BEGIN-->

    <div class="content">
        <div class="container" style="margin-bottom: 10px;">
            <div class="row row-offcanvas row-offcanvas-left">

                <?
                
                $sql_assista= "SELECT LINK, TITULO FROM assista ORDER BY DATA";
                foreach ($db_heroes->query($sql_assista) as $result_noticia) {
                ?>

                <div class="news-list col-md-4">
                    <h6><? echo utf8_encode($result_noticia[1])?></h6>
                    <div class="embed-responsive embed-responsive-16by9">

                    <iframe width="853" height="480" src="<? echo $result_noticia[0]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        
                    </div>
                </div>

                <?}?>

            </div>
        </div>
        
    </div>

    <!--CONTENT END-->





<? include "footer.php"; ?>