<? include "header.php"; ?>

<?
$star1 = '<i class="fa fa-star star1"></i>';
$star2 = '<i class="fa fa-star star2"></i> <i class="fa fa-star star2">';
$star3 = '<i class="fa fa-star star3"></i> <i class="fa fa-star star3"></i> <i class="fa fa-star star3"></i>';

$vitoria = '<i style="color:green" class="fa fa-check-square"></i>';
$derrota = '<i  style="color:red" class="fa fa-square"></i>';

$divisoes = '<table>
                    <tr>
                    <th width="20%" style="background-color: #2ecc71 !important;">1ª Divisão</th>
                    <th width="20%" style=" background-color:#f1c40f">2ª Divisão Grupo A</th>
                    <th width="20%" style=" background-color:#f39c12">2ª Divisão Grupo B</th>
                    <th width="20%" style="background-color: #e67e22;">3ª Divisão Grupo A</th>
                    <th width="20%" style="background-color: #c0392b;">3ª Divisão Grupo B</th>
                    </tr>
             </table>'
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

            <li class=""><a data-toggle="tab" href="#class1">Classificatória 01</a></li>
            <li class=""><a data-toggle="tab" href="#class2">Classificatória 02</a></li>
            <li class=""><a data-toggle="tab" href="#class3">Classificatória 03</a></li>
            <li class=""><a data-toggle="tab" href="#class4">Classificatória 04</a></li>
            <li class=""><a data-toggle="tab" href="#class5">Classificatória 05</a></li>
            <li class="active"><a data-toggle="tab" href="#class6">Classificatória 06</a></li>
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
                color:black;
            }
            .star2{
                color:black;
            }
            .star3{
                color:green;
            }
            td{text-transform: uppercase};
            .divisao1{background-color:#2ecc71}
        </style>

            <div class="tab-content">

            <!--Classificatória 1 --------------->
                <div id="class1" class="tab-pane fade">
                    <h4>Classificatória 01 - DATA: 09/09 às 19h BRT</h4>
                    <div class="row">
      
					<? echo $divisoes; ?>
	  
                    </div>
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
 <!--JOGADOR 1-->           <td style="background-color: white !important;"> Zezinhonaul <? echo $star2?> 79%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
   <!--OITAVAS 1-->         <td style="background-color: #c0392b !important;">GuguBlack <? echo $star1?> 68%</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 2-->            <td style="background-color: white !important;" colspan="1">GuguBlack <? echo $star2?> 80%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
    <!--SEMIFINAL 1-->       <td style="background-color: orange !important;"> KAKASHI HATAKI <? echo $vitoria;?></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 3-->            <td style="background-color: white !important;" colspan="1">KAKASHI HATAKI <? echo $star3?> 100%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 2-->     <td style="background-color: white !important;">KAKASHI HATAKI <? echo $star2?> 86%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>
                        <tr>
<!--JOGADOR 4-->            <td style="background-color: white !important;" colspan="1">Titan Samgas <? echo $star2?> 74%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="3"></td>
             <!-- FINAL 1--><td style="background-color: #f1c40f !important;">☁️MASTERM☁️ <? echo $derrota?> <? echo $derrota?></td>
                        </tr>

                        <tr>
<!--JOGADOR 5-->            <td style="background-color: white !important;" colspan="1">☁️MASTERM☁️  <? echo $star3?> 100%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
          <!--OITAVAS 3-->  <td style="background-color: white !important;">☁️MASTERM☁️ <? echo $star2?> 70%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 6-->            <td style="background-color: white !important;">TyuClash <? echo $star3?> 100%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td ></td>
                            <td></td>
    <!--SEMIFINAL 2-->      <td style="background-color: white !important;">☁️MASTERM☁️ <? echo $derrota;?><? echo $vitoria;?><? echo $vitoria;?></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 7-->            <td style="background-color: white !important;" >Yondaime <? echo $star2?> 90%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 4-->     <td style="background-color: white !important;">Yondaime <? echo $star2?> 69%</td>
                            <td></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 8-->         <td style="background-color: white !important;">Cap.Braga F/C <? echo $star2?> 73%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr><td colspan="4"></td> </tr>
                        <tr>
<!--JOGADOR 9-->            <td style="background-color: white !important;" colspan="1">Edson <? echo $star2?> 68%</td>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
<!--OITAVAS 5-->            <td style="background-color: white !important;"> Edson</td>
                            <td colspan="2"></td>
                        </tr>

                        <tr>
  <!--JOGADOR 10-->         <td style="background-color: white !important;" colspan="1">まあSONY <? echo $star1?> 76%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="2"></td>
      <!--SEMIFINAL 3-->    <td style="background-color: white !important;">Edson <? echo $vitoria?> <? echo $vitoria?></td>
                            <td></td>

                        </tr>

                        <tr>
  <!--JOGADOR 11-->         <td style="background-color: white !important;">DAYVISSON <? echo $star1?> 78%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
         <!--OITAVAS 6-->   <td style="background-color: white !important;">Azevedouc (WO)</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 12 -->         <td style="background-color: white !important;" colspan="1">Azevedouc <? echo $star2?> 71%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>
                            <td></td>
                            <td></td>
                            <td></td>
            <!--final 2-->  <td style="background-color: #2ecc71 !important;">Edson <? echo $vitoria?> <? echo $vitoria?></td>

                        <tr>
<!--JOGADOR 13-->           <td style="background-color: white !important;">CTB Melchorl93 <? echo $star2?> 97%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>


                        <tr>
                            <td  style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
        <!--OITAVAS 7-->    <td style="background-color: white !important;">CTB Melchorl93 <? echo $star2?> 82%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>
                        <tr>
 <!--JOGADOR 14-->          <td style="background-color: white !important;">♡SrtaMai♡ <? echo $star2?> 81%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
          <!--SEMIFINAL 4--><td style="background-color: #e67e22 !important;"> CTB Melchorl93 <? echo $derrota?> <? echo $derrota?></td>
                            <td></td>
                        </tr>


                        <tr>
<!--JOGADOR 15-->        <td style="background-color: white !important;" colspan="1">Jolly Roger's <? echo $star2?> 69%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td ></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
        <!--OITAVAS 8-->       <td style="background-color: white !important;">Jolly Roger's <? echo $star2?> 54%</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 16-->           <td style="background-color: white !important;">Thc <? echo $star2?>66%</td> 
                            <td style="background-color: #f7f7f7;"></td>
                            <td></td>
                            <td></td>
                        </tr>
    

                        </tbody>
                    </table>

                    </div>
                    
                </div>
 <!--Classificatória 1 --------------->



<!--Classificatória 2 --------------->
                <div id="class2" class="tab-pane fade ">
                    <h4>Classificatória 02 - DATA: 09/09 às 21h BRT</h4>
                    <div class="row">
                 
				 <? echo $divisoes;?>
				 
                    </div>
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
 <!--JOGADOR 1-->           <td style="background-color: white !important;"> Gui <? echo $star2?> 66%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
   <!--OITAVAS 1-->          <td style="background-color: white !important;">Driivelkz <? echo $star2?> 63%</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 2-->            <td style="background-color: white !important;" colspan="1">Driivelkz <? echo $star2?> 80% </td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
    <!--SEMIFINAL 1-->       <td style="background-color: white !important;">Heimdall Sama <? echo $vitoria?> <? echo $derrota?> <? echo $vitoria?></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 3-->            <td style="background-color: white !important;" colspan="1"> Lord Leomar <? echo $star2?>70%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 2-->     <td style="background-color: white !important;">Heimdall Sama <? echo $star2?> 83%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>
                        <tr>
<!--JOGADOR 4-->            <td style="background-color: white !important;" colspan="1">Heimdall Sama <? echo $star2?> 78%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="3"></td>
             <!-- FINAL 1--><td style="background-color: #f1c40f !important;">Heimdall Sama <? echo $derrota?> <? echo $vitoria?> <? echo $derrota?>  </td>
                        </tr>

                        <tr>
<!--JOGADOR 5-->            <td style="background-color: white !important;">Tobirama-Club <? echo $star2 ?>90%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
          <!--OITAVAS 3-->  <td style="background-color: white !important;">Tobirama-Club <? echo $star2?> 77%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 6-->            <td style="background-color: white !important;">Nosbor <? echo $star2 ?> 71%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td ></td>
                            <td></td>
    <!--SEMIFINAL 2-->      <td style="background-color: #f39c12 !important;">Tobirama-Club <? echo $derrota?> <? echo $vitoria?> <? echo $derrota?></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 7-->            <td style="background-color: white !important;" >Alfa <? echo $star2 ?> 82%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 4-->     <td style="background-color: white !important;">Braddock <? echo $star2?> 74%</td>
                            <td></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 8-->         <td style="background-color: white !important;">Braddock <? echo $star2 ?> 93%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr><td colspan="4"></td> </tr>
                        <tr>
<!--JOGADOR 9-->            <td style="background-color: white !important;" colspan="1">[Akaizer] WO</td>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
<!--OITAVAS 5-->            <td style="background-color: white !important;">JoaoZin <? echo $star2?> 87%</td>
                            <td colspan="2"></td>
                        </tr>

                        <tr>
  <!--JOGADOR 10-->         <td style="background-color: white !important;" colspan="1">JoaoZin</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="2"></td>
      <!--SEMIFINAL 3-->    <td style="background-color: #e67e22 !important;">🔶️IE-LEONARDO🔶️ <? echo $derrota?> <? echo $derrota?></td>
                            <td></td>

                        </tr>

                        <tr>
  <!--JOGADOR 11-->         <td style="background-color: white !important;">🔶️IE-LEONARDO🔶️ <? echo $star2?> 86%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
         <!--OITAVAS 6-->   <td style="background-color: white !important;">🔶️IE-LEONARDO🔶️ <? echo $star2?> 92%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 12 -->         <td style="background-color: white !important;" colspan="1">justicier <? echo $star1?> 47%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>
                            <td></td>
                            <td></td>
                            <td></td>
     <!--Final 2-->         <td style="background-color: #2ecc71 !important;"> 女神プリシリア❤ <? echo $vitoria?> <? echo $derrota?> <? echo $vitoria?></td>

                        <tr>
<!--JOGADOR 13-->           <td style="background-color: white !important;"> 女神プリシリア❤</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>


                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
        <!--OITAVAS 7-->    <td style="background-color: white !important;"> 女神プリシリア❤ <? echo $star2?> 75%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
 <!--JOGADOR 14-->          <td style="background-color: white !important;">AllanPig WO</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
          <!--SEMIFINAL 4--><td style="background-color: white !important;"> 女神プリシリア❤ <? echo $vitoria?><? echo $vitoria?></td>
                            <td></td>
                        </tr>


                        <tr>
<!--JOGADOR 15-->        <td style="background-color: white !important;" colspan="1">Dj Yell <? echo $star2 ?> 62% (2:19')</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td ></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
        <!--OITAVAS 8-->       <td style="background-color: white !important;">Dj Yell <? echo $star2?> 71%</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 16-->           <td style="background-color: white !important;" >Dentinho <? echo $star2?> 62% (2:31')</td> 
                            <td style="background-color: #f7f7f7;"></td>
                            <td></td>
                            <td></td>
                        </tr>
    

                        </tbody>
                    </table>

                    </div>
                </div>
  <!--Classificatória 2 --------------->
               
  
  <!--Classificatória 3---------------->
                <div id="class3" class="tab-pane fade">
                    <h4>Classificatória 03 - DATA: 10/09 às 19h BRT</h4>
                    <div class="row">
					
						<? echo $divisoes;?>
				 
                    </div>
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
 <!--JOGADOR 1-->           <td style="background-color: white !important;">¥fernandes¥ <? echo $star2?> 75%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
   <!--OITAVAS 1-->          <td style="background-color: white !important;"> ¥fernandes¥ <? echo $star2?> 89% </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 2-->            <td style="background-color: white !important;">IRM-Tanagucha <? echo $star1?> 81%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
    <!--SEMIFINAL 1-->       <td style="background-color: white !important;"> @Daleprani <? echo $derrota?> <? echo $vitoria?> <? echo $vitoria?></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 3-->            <td style="background-color: white !important;">DOCTOR WHO <? echo $star2?> 77%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 2-->     <td style="background-color: white !important;">@Daleprani <? echo $star2?> 98%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>
                        <tr>
<!--JOGADOR 4-->            <td style="background-color: white !important;">@Daleprani <? echo $star2?> 81%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="3"></td>
             <!-- FINAL 1--><td style="background-color: #f1c40f !important;">@Daleprani <? echo $derrota?> <? echo $vitoria?> <? echo $derrota?> </td>
                        </tr>

                        <tr>
<!--JOGADOR 5-->            <td style="background-color: white !important;">Senna jg <? echo $star2?> 58%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
          <!--OITAVAS 3-->  <td style="background-color: white !important;">aguiar_100 <? echo $star2?> 73% </td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 6-->            <td style="background-color: white !important;">aguiar_100 <? echo $star2?> 83%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td ></td>
                            <td></td>
    <!--SEMIFINAL 2-->      <td style="background-color: #f39c12 !important;">Wilmer <? echo $vitoria?> <? echo $derrota?> <? echo $derrota?></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 7-->            <td style="background-color: white !important;" >Wilmer <? echo $star2?> 85%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 4-->     <td style="background-color: white !important;">Wilmer <? echo $star2?>82%</td>
                            <td></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 8-->         <td style="background-color: white !important;">Sobek <? echo $star1?> 73%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr><td colspan="4"></td> </tr>
                        <tr>
<!--JOGADOR 9-->            <td style="background-color: white !important;">DarkBlade <b>(WO)</b></td>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
<!--OITAVAS 5-->            <td style="background-color: white !important;">MeiaNoite <? echo $star2?> 97%</td>
                            <td colspan="2"></td>
                        </tr>

                        <tr>
  <!--JOGADOR 10-->         <td style="background-color: white !important;">MeiaNoite</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="2"></td>
      <!--SEMIFINAL 3-->    <td style="background-color: white !important;">MeiaNoite <? echo $vitoria?> <? echo $vitoria?></td>
                            <td></td>

                        </tr>

                        <tr>
  <!--JOGADOR 11-->         <td style="background-color: white !important;">Belatrix tow <? echo $star3?> 100% </td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
         <!--OITAVAS 6-->   <td style="background-color: #c0392b !important;">Belatrix tow <? echo $star2?> 83%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 12 -->         <td style="background-color: white !important;">Sr. Sam <? echo $star1?> 43%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>
                            <td></td>
                            <td></td>
                            <td></td>
     <!--Final 2-->         <td style="background-color: #2ecc71 !important;">MeiaNoite <? echo $vitoria?> <? echo $derrota?> <? echo $vitoria?></td>

                        <tr>
<!--JOGADOR 13-->           <td style="background-color: white !important;">Helder Sousa <? echo $star3?> 100%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>


                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
        <!--OITAVAS 7-->    <td style="background-color: white !important;">Helder Sousa <? echo $star2?> 82%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
 <!--JOGADOR 14-->          <td style="background-color: white !important;">Lalo <? echo $star1?> 91%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
          <!--SEMIFINAL 4--><td style="background-color: #e67e22 !important;">Blanc-tuga <? echo $derrota?> <? echo $derrota?></td>
                            <td></td>
                        </tr>


                        <tr>
<!--JOGADOR 15-->           <td style="background-color: white !important;">Nicolaevsky <b>(WO)</b></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td ></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
        <!--OITAVAS 8-->       <td style="background-color: white !important;">Blanc-tuga <? echo $star1?> 89%</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 16-->           <td style="background-color: white !important;" >Blanc-tuga </td> 
                            <td style="background-color: white;"></td>
                            <td></td>
                            <td></td>
                        </tr>
    

                        </tbody>
                    </table>

                    </div>
                </div>



  <!--Classificatória 4 ------------------------------------------------------------------------------->
                <div id="class4" class="tab-pane fade">
                    <h4>Classificatória 04 - DATA: 10/09 às 21h BRT</h4>
                    <div class="row">
						<? echo $divisoes;?>
                    </div>
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
 <!--JOGADOR 1-->           <td style="background-color: white !important;">BRUNOSLB190 <? echo $star2?> 90%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
   <!--OITAVAS 1-->          <td style="background-color: white !important;">BRUNOSLB190 <? echo $star3?> 100%</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 2-->            <td style="background-color: white !important;">EBL <? echo $star2?> 78%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
    <!--SEMIFINAL 1-->      <td style="background-color: #e67e22 !important;">BRUNOSLB190 <? echo $derrota ?> <? echo $derrota ?></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 3-->            <td style="background-color: white !important;">Hustler <? echo $star2?> 75%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 2-->     <td style="background-color: white !important;">Jhonjhon <? echo $star2?> 84%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>
                        <tr>
<!--JOGADOR 4-->            <td style="background-color: white !important;">Jhonjhon <? echo $star2?> 91%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="3"></td>
             <!-- FINAL 1--><td style="background-color: #f1c40f !important;"> Jaco mito ☆☆☆ <? echo $derrota?> <? echo $vitoria?> <? echo $derrota?></td>
                        </tr>

                        <tr>
<!--JOGADOR 5-->            <td style="background-color: white !important;">Japa Tigers  <? echo $star3?> 100%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
          <!--OITAVAS 3-->  <td style="background-color: #c0392b !important;">Japa Tigers <? echo $star2?> 90%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 6-->            <td style="background-color: white !important;">Jc <? echo $star1?> 69%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td ></td>
                            <td></td>
    <!--SEMIFINAL 2-->      <td style="background-color: white !important;"> Jaco mito ☆☆☆ <? echo $vitoria ?> <? echo $vitoria ?></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 7-->            <td style="background-color: white !important;" >Mc' Kekana  <? echo $star2?> 64%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 4-->     <td style="background-color: white !important;">Jaco mito ☆☆☆ <? echo $star3?> 100%</td>
                            <td></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 8-->         <td style="background-color: white !important;">Jaco mito ☆☆☆  <? echo $star2?> 70%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr><td colspan="4"></td> </tr>
                        <tr>
<!--JOGADOR 9-->            <td style="background-color: white !important;">Danilo Ferreira <? echo $star2?> 92%</td>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
<!--OITAVAS 5-->            <td style="background-color: white !important;">Ghaladon⚡ <? echo $star1 ?> 62%</td>
                            <td colspan="2"></td>
                        </tr>

                        <tr>
  <!--JOGADOR 10-->         <td style="background-color: white !important;" >Ghaladon⚡  <? echo $star3?> 100%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="2"></td>
      <!--SEMIFINAL 3-->    <td style="background-color: #f39c12 !important;"> Rivera.CR☆☆☆ <? echo $vitoria?> <? echo $derrota?> <? echo $derrota?></td>
                            <td></td>

                        </tr>

                        <tr>
  <!--JOGADOR 11-->         <td style="background-color: white !important;">({N.Santos}) <? echo $star2 ?> 70%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
         <!--OITAVAS 6-->   <td style="background-color: white !important;">Rivera.CR☆☆☆ <? echo $star2?> 79%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 12 -->         <td style="background-color: white !important;">Rivera.CR☆☆☆  <? echo $star3 ?> 100% </td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>
                            <td></td>
                            <td></td>
                            <td></td>
     <!--Final 2-->         <td style="background-color: #2ecc71 !important;"> aldeano8 <? echo $vitoria?> <? echo $derrota?> <? echo $vitoria?> </td>

                        <tr>
<!--JOGADOR 13-->           <td style="background-color: white !important;">Marcia <b>(WO)</b></td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>


                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
        <!--OITAVAS 7-->    <td style="background-color: white !important;">Mr. White <? echo $star2 ?> 55%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
 <!--JOGADOR 14-->          <td style="background-color: white !important;">Mr. White</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
          <!--SEMIFINAL 4--><td style="background-color: white !important;">aldeano8 <? echo $derrota?> <? echo $vitoria?> <? echo $vitoria?></td>
                            <td></td>
                        </tr>


                        <tr>
<!--JOGADOR 15-->        <td style="background-color: white !important;">aldeano8 <? echo $star2 ?> 81%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td ></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
        <!--OITAVAS 8-->       <td style="background-color: white !important;"> aldeano8 <? echo $star3 ?> 100%</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 16-->           <td style="background-color: white !important;" >Japa<? echo $star3 ?> 71%</td> 
                            <td style="background-color: white;"></td>
                            <td></td>
                            <td></td>
                        </tr>
    

                        </tbody>
                    </table>

                    </div>
                </div>


  <!--Classificatória 5 ------------------------------------------------------------------------------->
                <div id="class5" class="tab-pane fade">
                    <h4>Classificatória 05 - DATA: 11/09 às 19h BRT</h4>
                    <div class="row">
						<? echo $divisoes;?>
                    </div>
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
 <!--JOGADOR 1-->           <td style="background-color: white !important;">Silvio <? echo $star2?> 76%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
   <!--OITAVAS 1-->          <td style="background-color: white !important;">Silvio <? echo $star2; ?> 97%</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 2-->            <td style="background-color: white !important;">☠paka☠ <? echo $star2; ?> 71%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
    <!--SEMIFINAL 1-->       <td style="background-color: #e67e22 !important;">Silvio <? echo $derrota?> <? echo $derrota?></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 3-->            <td style="background-color: white !important;">wnRossini <? echo $star2; ?> 84%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 2-->     <td style="background-color: white !important;">Spartta <? echo $star2; ?> 75%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>
                        <tr>
<!--JOGADOR 4-->            <td style="background-color: white !important;">Spartta <? echo $star3; ?> 100%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="3"></td>
             <!-- FINAL 1--><td style="background-color: #f1c40f !important;">Strong_Gab <? echo $derrota?> <? echo $vitoria?> <? echo $derrota?></td>
                        </tr>

                        <tr>
<!--JOGADOR 5-->            <td style="background-color: white !important;">༄༼༆ɢғ༆༽༄ <? echo $star2; ?> 72%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
          <!--OITAVAS 3-->  <td style="background-color: white !important;">Strong_Gab <? echo $star2; ?> 78%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 6-->            <td style="background-color: white !important;">Strong_Gab <? echo $star2; ?>88%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td ></td>
                            <td></td>
    <!--SEMIFINAL 2-->      <td style="background-color: white !important;">Strong_Gab <? echo $vitoria?> <? echo $vitoria?></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 7-->            <td style="background-color: white !important;" >ROD.COC.BR <? echo $star2; ?> 62%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 4-->     <td style="background-color: white !important;">Eletrid <? echo $star2; ?> 57%</td>
                            <td></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 8-->         <td style="background-color: white !important;">Eletrid <? echo $star2; ?> 91%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr><td colspan="4"></td></tr>
                        <tr>
<!--JOGADOR 9-->            <td style="background-color: white !important;">-</td>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
<!--OITAVAS 5-->            <td style="background-color: white !important;">Ronny Tavares <? echo $star2; ?> 76%</td>
                            <td colspan="2"></td>
                        </tr>

                        <tr>
  <!--JOGADOR 10-->         <td style="background-color: white !important;"> Ronny Tavares</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td colspan="2"></td>
      <!--SEMIFINAL 3-->    <td style="background-color: #f39c12 !important;">Ronny Tavares <? echo $derrota?> <? echo $derrota?></td>
                            <td></td>

                        </tr>

                        <tr>
  <!--JOGADOR 11-->         <td style="background-color: white !important;">Warley Maikon <? echo $star2; ?> 88%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
         <!--OITAVAS 6-->   <td style="background-color: white !important;">Warley Maikon <? echo $star2; ?> 75%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 12 -->         <td style="background-color: white !important;">_-*RaGnaR*-_ <? echo $star2; ?> 56%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>
                            <td></td>
                            <td></td>
                            <td></td>
     <!--Final 2-->         <td style="background-color: #2ecc71 !important;">Bernaul <? echo $vitoria?> <? echo $derrota?> <? echo $vitoria?></td>

                        <tr>
<!--JOGADOR 13-->           <td style="background-color: white !important;">Darkgms <? echo $star2; ?> 86%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>


                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
        <!--OITAVAS 7-->    <td style="background-color: white !important;">Bernaul <? echo $star3; ?> 100%(Atk 2)</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
 <!--JOGADOR 14-->          <td style="background-color: white !important;">Bernaul <? echo $star2; ?>96%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
          <!--SEMIFINAL 4--><td style="background-color: white !important;">Bernaul <? echo $vitoria?> <? echo $vitoria?> </td>
                            <td></td>
                        </tr>


                        <tr>
<!--JOGADOR 15-->        <td style="background-color: white !important;">¥WELLINGTON¥ <? echo $star2; ?> 76%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td ></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
        <!--OITAVAS 8-->       <td style="background-color: white !important;">Geovanio <? echo $star2; ?> 77%(Atk 2)</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 16-->           <td style="background-color: white !important;">Geovanio <? echo $star2; ?> 79%</td> 
                            <td style="background-color: white;"></td>
                            <td></td>
                            <td></td>
                        </tr>
    

                        </tbody>
                    </table>

                    </div>
                </div>


  <!--Classificatória 6 ------------------------------------------------------------------------------->
                <div id="class6" class="tab-pane fade in active">
                    <h4>Classificatória 06 - DATA: 11/09 às 21h BRT</h4>
                    <div class="row">
						<? echo $divisoes;?>
                    </div>
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
 <!--JOGADOR 1-->           <td style="background-color: white !important;">MateusLucas <? echo $star2; ?> 66%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
   <!--OITAVAS 1-->          <td style="background-color: white !important;">Presidente® <? echo $star2; ?> 78%</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 2-->            <td style="background-color: white !important;">Presidente® <? echo $star2; ?> 74%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
    <!--SEMIFINAL 1-->       <td style="background-color: white !important;">Efex <? echo $vitoria; ?> <? echo $vitoria; ?></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 3-->            <td style="background-color: white !important;">Efex <? echo $star2; ?> 83%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 2-->     <td style="background-color: white !important;">Efex <? echo $star2; ?> 89%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>
                        <tr>
<!--JOGADOR 4-->            <td style="background-color: white !important;">☢️SBR_Striker☢️ <? echo $star2; ?> 79%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="3"></td>
             <!-- FINAL 1--><td style="background-color: #2ecc71 !important;">Efex <? echo $vitoria; ?> <? echo $vitoria; ?></td>
                        </tr>

                        <tr>
<!--JOGADOR 5-->            <td style="background-color: white !important;">Marufuji Ryo <b>(WO)</b> </td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
          <!--OITAVAS 3-->  <td style="background-color: white !important;">danilo <? echo $star3; ?> 100%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 6-->            <td style="background-color: white !important;">danilo <? echo $star3; ?> 100%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td ></td>
                            <td></td>
    <!--SEMIFINAL 2-->      <td style="background-color: #e67e22 !important;">danilo <? echo $derrota; ?> <? echo $derrota; ?></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 7-->            <td style="background-color: white !important;" >Zemigas  <? echo $star2; ?> 70%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 4-->     <td style="background-color: white !important;">Zemigas <? echo $star2; ?> 54%</td>
                            <td></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 8-->         <td style="background-color: white !important;">C.R.O.N.O.S  <? echo $star2; ?> 66%</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr><td colspan="4"></td> </tr>
                        <tr>
<!--JOGADOR 9-->            <td style="background-color: white !important;">King Mustafa <b>(WO)</b></td>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
<!--OITAVAS 5-->            <td style="background-color: white !important;">PitiBull  <? echo $star2; ?> 66%</td>
                            <td colspan="2"></td>
                        </tr>

                        <tr>
  <!--JOGADOR 10-->         <td style="background-color: white !important;" >PitiBull</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="2"></td>
      <!--SEMIFINAL 3-->    <td style="background-color: #f39c12 !important;">Köveiro <? echo $derrota; ?> <? echo $derrota; ?></td>
                            <td></td>

                        </tr>

                        <tr>
  <!--JOGADOR 11-->         <td style="background-color: white !important;">Köveiro  <? echo $star2; ?> 88%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
         <!--OITAVAS 6-->   <td style="background-color: white !important;">Köveiro</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 12 -->         <td style="background-color: white !important;">Danilo souza <b>(WO)</b></td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>
                            <td></td>
                            <td></td>
                            <td></td>
     <!--Final 2-->         <td style="background-color: #f1c40f !important;"> Rafael <? echo $derrota; ?> <? echo $derrota; ?></td>

                        <tr>
<!--JOGADOR 13-->           <td style="background-color: white !important;">Rafael <? echo $star3; ?> 100%</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>


                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
        <!--OITAVAS 7-->    <td style="background-color: white !important;">Rafael <? echo $star2; ?> 95%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
 <!--JOGADOR 14-->          <td style="background-color: white !important;">1909 <? echo $star2; ?> 76%</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
          <!--SEMIFINAL 4--><td style="background-color: white !important;">Rafael <? echo $vitoria; ?> <? echo $vitoria; ?></td>
                            <td></td>
                        </tr>


                        <tr>
<!--JOGADOR 15-->        <td style="background-color: white !important;">MarshMelloW <b>(WO)</b></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td ></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
        <!--OITAVAS 8-->       <td style="background-color: white !important;">Leandro A. <? echo $star2; ?> 64%</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 16-->           <td style="background-color: white !important;" >Leandro A.</td> 
                            <td style="background-color: white;"></td>
                            <td></td>
                            <td></td>
                        </tr>
    

                        </tbody>
                    </table>

                    </div>
                </div>


  <!--Classificatória 7 ------------------------------------------------------------------------------->
                <div id="class7" class="tab-pane fade">
                    <h4>Classificatória 07 - DATA: 12/09 às 19h BRT</h4>
                    <div class="row">
						<? echo $divisoes;?>
                    </div>
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
 <!--JOGADOR 1-->           <td style="background-color: white !important;">Mayhem</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
   <!--OITAVAS 1-->          <td style="background-color: white !important;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 2-->            <td style="background-color: white !important;">Pedrinho</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
    <!--SEMIFINAL 1-->       <td style="background-color: white !important;"></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 3-->            <td style="background-color: white !important;">marinaul</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 2-->     <td style="background-color: white !important;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>
                        <tr>
<!--JOGADOR 4-->            <td style="background-color: white !important;">Tuga ⭐⭐⭐</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="3"></td>
             <!-- FINAL 1--><td style="background-color: white !important;"></td>
                        </tr>

                        <tr>
<!--JOGADOR 5-->            <td style="background-color: white !important;">A.Sobcsik</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
          <!--OITAVAS 3-->  <td style="background-color: white !important;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 6-->            <td style="background-color: white !important;">DUDUDU</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td ></td>
                            <td></td>
    <!--SEMIFINAL 2-->      <td style="background-color: white !important;"></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 7-->            <td style="background-color: white !important;" > Sargento M</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 4-->     <td style="background-color: white !important;"></td>
                            <td></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 8-->         <td style="background-color: white !important;">Tiaguera</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr><td colspan="4"></td> </tr>
                        <tr>
<!--JOGADOR 9-->            <td style="background-color: white !important;"> Sr. Maldinii</td>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
<!--OITAVAS 5-->            <td style="background-color: white !important;"></td>
                            <td colspan="2"></td>
                        </tr>

                        <tr>
  <!--JOGADOR 10-->         <td style="background-color: white !important;" >SPORTING1906</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="2"></td>
      <!--SEMIFINAL 3-->    <td style="background-color: white !important;"></td>
                            <td></td>

                        </tr>

                        <tr>
  <!--JOGADOR 11-->         <td style="background-color: white !important;">Krlos Clash</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
         <!--OITAVAS 6-->   <td style="background-color: white !important;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 12 -->         <td style="background-color: white !important;">Dawson</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>
                            <td></td>
                            <td></td>
                            <td></td>
     <!--Final 2-->         <td style="background-color: white !important;"> </td>

                        <tr>
<!--JOGADOR 13-->           <td style="background-color: white !important;">Targaryen </td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>


                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
        <!--OITAVAS 7-->    <td style="background-color: white !important;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
 <!--JOGADOR 14-->          <td style="background-color: white !important;">Caetano RCK</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
          <!--SEMIFINAL 4--><td style="background-color: white !important;"> </td>
                            <td></td>
                        </tr>


                        <tr>
<!--JOGADOR 15-->        <td style="background-color: white !important;">Danillo-SVS</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td ></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
        <!--OITAVAS 8-->       <td style="background-color: white !important;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 16-->           <td style="background-color: white !important;">LORD SOMBRIO</td> 
                            <td style="background-color: white;"></td>
                            <td></td>
                            <td></td>
                        </tr>
    

                        </tbody>
                    </table>

                    </div>
                </div>


  <!--Classificatória 8 ------------------------------------------------------------------------------->
                <div id="class8" class="tab-pane fade">
                    <h4>Classificatória 08 - DATA: 12/09 às 21h BRT</h4>
                    <div class="row">
						<? echo $divisoes;?>
                    </div>
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
 <!--JOGADOR 1-->           <td style="background-color: white !important;"> Chagas</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
   <!--OITAVAS 1-->          <td style="background-color: white !important;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 2-->            <td style="background-color: white !important;">Patolino</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
    <!--SEMIFINAL 1-->       <td style="background-color: white !important;"></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 3-->            <td style="background-color: white !important;">悪夢 毛尺工ㄈ长ㄎのれ</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 2-->     <td style="background-color: white !important;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>
                        <tr>
<!--JOGADOR 4-->            <td style="background-color: white !important;">Mr. R</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="3"></td>
             <!-- FINAL 1--><td style="background-color: white !important;"></td>
                        </tr>

                        <tr>
<!--JOGADOR 5-->            <td style="background-color: white !important;">Erty</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
          <!--OITAVAS 3-->  <td style="background-color: white !important;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 6-->            <td style="background-color: white !important;">Diego</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td ></td>
                            <td></td>
    <!--SEMIFINAL 2-->      <td style="background-color: white !important;"></td>
                            <td></td>

                        </tr>

                        <tr>
<!--JOGADOR 7-->            <td style="background-color: white !important;" >kroz</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
       <!--OITAVAS 4-->     <td style="background-color: white !important;"></td>
                            <td></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 8-->         <td style="background-color: white !important;">celinho</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr><td colspan="4"></td> </tr>
                        <tr>
<!--JOGADOR 9-->            <td style="background-color: white !important;">FIRsT BO$$</td>
                            <td colspan="3"></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
<!--OITAVAS 5-->            <td style="background-color: white !important;"></td>
                            <td colspan="2"></td>
                        </tr>

                        <tr>
  <!--JOGADOR 10-->         <td style="background-color: white !important;" >YₒᵤOⁿˡʸLᵢᵥₑOⁿᶜᵉ</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td colspan="2"></td>
      <!--SEMIFINAL 3-->    <td style="background-color: white !important;"></td>
                            <td></td>

                        </tr>

                        <tr>
  <!--JOGADOR 11-->         <td style="background-color: white !important;">☣EduDebochado☣</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
         <!--OITAVAS 6-->   <td style="background-color: white !important;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                            
                        </tr>

                        <tr>
<!--JOGADOR 12 -->         <td style="background-color: white !important;">Joel</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>

                        </tr>
                            <td></td>
                            <td></td>
                            <td></td>
     <!--Final 2-->         <td style="background-color: white !important;"> </td>

                        <tr>
<!--JOGADOR 13-->           <td style="background-color: white !important;">Pedro Fhelipe</td>
                            <td></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td></td>
                        </tr>


                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"> </td>
        <!--OITAVAS 7-->    <td style="background-color: white !important;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
 <!--JOGADOR 14-->          <td style="background-color: white !important;">Morgan XII</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none; border-top:none"></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
          <!--SEMIFINAL 4--><td style="background-color: white !important;"> </td>
                            <td></td>
                        </tr>


                        <tr>
<!--JOGADOR 15-->        <td style="background-color: white !important;">TEC Taylor leal.(Ptzeiro)</td>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
                            <td ></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td style="border: 1px solid black;border-bottom:none;border-left:none;"></td>
        <!--OITAVAS 8-->       <td style="background-color: white !important;"></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
<!--JOGADOR 16-->           <td style="background-color: white !important;">BriFixGamer89</td> 
                            <td style="background-color: white;"></td>
                            <td></td>
                            <td></td>
                        </tr>
    

                        </tbody>
                    </table>

                    </div>
                </div>

         </div>
        </div>

    </div>
</section>





<? include "footer.php"; ?>