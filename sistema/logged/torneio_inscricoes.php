
              
        <div class="modal fade torneio_inscricoes_<? echo $result_torneio[6]; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">Inscrições <? echo $result_torneio[0]?></h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <? $cont = 0?>
                            <? $sql_inscricao = "SELECT 
                       jogador.NOME, 
                       vila.TAG_VILA,
                       vila.NOME_VILA, 
                       torneio_inscricoes.DATA
                       FROM torneio_inscricoes
                       INNER JOIN jogador_vila ON jogador_vila.ID_VILA = torneio_inscricoes.ID_VILA
                       INNER JOIN jogador ON jogador.ID_JOGADOR = torneio_inscricoes.ID_JOGADOR
                       INNER JOIN torneio ON torneio.ID_TORNEIO = torneio_inscricoes.ID_TORNEIO
                       INNER JOIN vila ON vila.ID_VILA = torneio_inscricoes.ID_VILA
                        WHERE torneio_inscricoes.ID_TORNEIO = '".$result_torneio[6]."' ORDER BY torneio_inscricoes.DATA
                       ";
                        foreach ($db_heroes->query($sql_inscricao) as $result_inscricao){ 
                          $cont ++
                          ?>
                               <div class="col-md-12">
                                  <div class="form-group">
                                      <input class="form-control" disabled value="<? echo $cont; ?> - <? echo $result_inscricao[0]?> - #<? echo $result_inscricao[1]?> - <? echo $result_inscricao[2]?> - <? echo $result_inscricao[3]?> " type="text">
                                    </div>
                               </div>
                         <?}?>
                            </div>
                         
                          </div>
                        </div>
            </div>
        </div>