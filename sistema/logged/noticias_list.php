<? include "header.php"; ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-9">
                  <h3>Notícias</h3>
                </div>
                <div class="col-lg-3" >
                    <div class="bg-transparent" style="float:right;"><a class="btn btn-success btn-lg" href="noticias_forms.php"><span class="fa fa-plus"></span>Notícia</a></div>
                </div>
              </div>
            </div>
          </div>
          


          <!-- Container-fluid starts-->
          <div class="container-fluid" >
            <div class="row">
                  <!-- Stripe styles-->
                  <div class="col-sm-12" >
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive" id="tabela">
                      <table class="stripe" id="example-style-8">
                        <thead>
                          <tr>
                            <th>Data</th>
                            <th>Título</th>
                            <th>Fonte</th>
                            <th>Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                       <? $sql_noticia = "SELECT
                      *
                        FROM noticia";
                        foreach ($db_heroes->query($sql_noticia) as $result_noticia){ 
                          ?>

                          <? include "torneio_inscricoes.php"?>
                          
                          <tr>
                            <td><? echo utf8_encode($result_noticia[0])?></td>
                            <td><? echo $result_noticia[1]?></td>
                            <td><? echo $result_noticia[2]?></td>
                            <td>
                              <!--EDITAR-->
                              <button type="button" title="Editar" class="btn btn-sm btn-icon" onclick="location.href='torneio_forms.php?id_torneio=<? echo $result_noticia[6]; ?>';" >
                                <span><i class="fa fa-pencil fa-2x" style="color:#7366ff"  aria-hidden="true"></i></span>
                              </button>

                            </td>
                      </tr>
<? } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
    

    <? include "footer.php"; ?>