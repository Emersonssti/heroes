<? include "header.php"; ?>

<?
$star1 = '<i class="fa fa-star star1"></i>';
$star2 = '<i class="fa fa-star star2"></i> <i class="fa fa-star star2">';
$star3 = '<i class="fa fa-star star3"></i> <i class="fa fa-star star3"></i> <i class="fa fa-star star3"></i>';
?>
    <!--BREADCRUMBS BEGIN-->
<section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <h1>Heroes Tournaments TH13 - 4ª Edição</h1>
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
    <h2>Classificatórias</h2>

  
        <div class="row">


        <ul class="nav tab-filters">

            <li class="active"><a data-toggle="tab" href="#class1">Classificatória 01</a></li>
            <li class=""><a data-toggle="tab" href="#class2">Classificatória 02</a></li>
            <li class=""><a data-toggle="tab" href="#class3">Classificatória 03</a></li>
            <li class=""><a data-toggle="tab" href="#class4">Classificatória 04</a></li>
            <li class=""><a data-toggle="tab" href="#class5">Classificatória 05</a></li>
            <li class=""><a data-toggle="tab" href="#class6">Classificatória 06</a></li>
            <li class=""><a data-toggle="tab" href="#class7">Classificatória 07</a></li>
            <li class=""><a data-toggle="tab" href="#class8">Classificatória 08</a></li>

        </ul>


        <style>
            tbody{
                background-color:#ddd !important;
            }

            tbody tr td{
                background-color:#ddd !important;
            }

            .direita{
            border: 1px solid black;border-bottom:none;border-left:none;
            }

            .star1{
                color:red;
            }
            .star2{
                color:yellow;
            }
            .star3{
                color:green;
            }
        </style>

            <div class="tab-content">

                <div id="class1" class="tab-pane fade in active">
                    <h4>Classificatória 01 - DATA: 09/09 às 19h BRT</h4>
                    
                    <div class="row">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                            <th width="20%" colspan="1">Oitavas</th>
                            <th width="20%" colspan="1">Quartas</th>
                            <th width="20%" colspan="1">Semifinal</th>
                            <th width="20%" colspan="1">Final</th>
                            </tr>
                        </thead>
                
                        <tbody>

                        <tr>
 <!--JOGADOR 1-->           <td style="background-color: white !important;"> JOGADOR 1 - <? echo $star3;?> 100%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
   <!--OITAVAS 1-->          <td style="background-color: white !important;">OITAVAS 1 </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 2-->            <td style="background-color: white !important;" colspan="1">JOGADOR 2 - <? echo $star2;?> </td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
    <!--SEMIFINAL 1-->       <td style="background-color: white !important;">Semifinal 1</td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 3-->            <td style="background-color: white !important;" colspan="1">JOGADOR 3 - <? echo $star1;?>30%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 2-->     <td style="background-color: white !important;">OITAVAS 2</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>
                        <tr>
<!--JOGADOR 4-->            <td style="background-color: white !important;" colspan="1">JOGADOR 4</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="3"></td>
             <!-- FINAL 1--><td style="background-color: white !important;">FINAL 1</td>
                        </tr>

                        <tr>
<!--JOGADOR 5-->            <td style="background-color: white !important;" colspan="1">JOGADOR 5</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
          <!--OITAVAS 1-->  <td style="background-color: white !important;">OITAVAS 3</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 6-->            <td style="background-color: white !important;">JOGADOR 6</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td ></td>
                            <td></td>
    <!--SEMIFINAL 2-->      <td style="background-color: white !important;">Semifinal 2</td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 7-->            <td style="background-color: white !important;" >JOGADOR 7</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 1-->     <td style="background-color: white !important;">OITAVAS 4</td>
                            <td></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 8-->         <td style="background-color: white !important;">JOGADOR 8</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr><td colspan="4"></td> </tr>
                        <tr>
<!--JOGADOR 9-->            <td style="background-color: white !important;" colspan="1">JOGADOR 9</td>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
<!--OITAVAS 5-->            <td style="background-color: white !important;">OITAVAS 5</td>
                            <td colspan="2"></td>
                        </tr>

                        <tr>
  <!--JOGADOR 10-->         <td style="background-color: white !important;" colspan="1">JOGADOR 10</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="2"></td>
      <!--SEMIFINAL 3-->    <td style="background-color: white !important;">Semifinal 3</td>
                            <td></td>

                        </tr>

                        <tr>
  <!--JOGADOR 11-->         <td style="background-color: white !important;">JOGADOR 11</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
         <!--OITAVAS 6-->   <td style="background-color: white !important;">OITAVAS 6</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 12 -->         <td style="background-color: white !important;" colspan="1">JOGADOR 12</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="background-color: white !important;">FINAL 2</td>

                        <tr>
<!--JOGADOR 13-->           <td style="background-color: white !important;">JOGADOR 13</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>


                        <tr>
                            <td  style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
        <!--OITAVAS 7-->    <td style="background-color: white !important;">OITAVAS 7</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>
                        <tr>
 <!--JOGADOR 14-->          <td style="background-color: white !important;">JOGADOR 14</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
          <!--SEMIFINAL 4--><td style="background-color: white !important;"> Semifinal 4</td>
                            <td></td>
                        </tr>


                        <tr>
<!--JOGADOR 15-->        <td style="background-color: white !important;" colspan="1">JOGADOR 15</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td ></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
        <!--OITAVAS 8-->       <td style="background-color: white !important;">OITAVAS 8</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 16-->           <td style="background-color: white !important;" >JOGADOR 16</td> 
                            <td style="background-color: #f7f7f7;"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        

                        
    

                        </tbody>
                    </table>

                    </div>
                    
                </div>

                <div id="class2" class="tab-pane fade">
                    <h4>Classificatória 02 - DATA: 09/09 às 21h BRT</h4>
                    <p>Some content.</p>
                </div>
                
                <div id="class3" class="tab-pane fade">
                    <h4>Classificatória 03 - DATA: 10/09 às 19h BRT</h4>
                    <p>Some content.</p>
                </div>

                <div id="class4" class="tab-pane fade">
                    <h4>Classificatória 04 - DATA: 10/09 às 21h BRT</h4>
                    <p>Some content.</p>
                </div>

                <div id="class5" class="tab-pane fade">
                    <h4>Classificatória 05 - DATA: 11/09 às 19h BRT</h4>
                    <p>Some content.</p>
                </div>

                <div id="class6" class="tab-pane fade">
                    <h4>Classificatória 06 - DATA: 11/09 às 21h BRT</h4>
                    <p>Some content.</p>
                </div>

                <div id="class7" class="tab-pane fade">
                    <h4>Classificatória 07 - DATA: 12/09 às 19h BRT</h4>
                    <p>Some content.</p>
                </div>

                <div id="class8" class="tab-pane fade">
                    <h4>Classificatória 08 - DATA: 12/09 às 21h BRT</h4>
                    <p>Some content.</p>
                </div>

         </div>
        </div>

    </div>
</section>





<? include "footer.php"; ?>