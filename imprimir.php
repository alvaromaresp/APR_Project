 <?php 
 error_reporting(0);
 ini_set("display_errors",0);
 $con = mysqli_connect('localhost','root','', 'aprapido');
 use Mpdf\Mpdf;
 date_default_timezone_set('America/Sao_Paulo');
 $data = date('d/m/Y');
 $tc = $_COOKIE['id_tarefa']; 
 
 $quer = sprintf("SELECT * FROM apr WHERE id_apr='$tc'") or die("erro ao selecionar");

  $dado = mysqli_query($con, $quer) or die(mysqli_error());
  $li = mysqli_fetch_assoc($dado); //array de informações dentro da tabela
  $tot = mysqli_num_rows($dado); // num de info

  $naturezas=$li['NR_sim'];
  $nat= explode(", ",$naturezas);
  $nnatt  = count(array_filter($nat));

  $um='imagens\a.png';
  $dois='imagens\a.png';
  $tres='imagens\a.png';
  $quatro='imagens\a.png';
  $cinco='imagens\a.png';
  $seis='imagens\a.png';
  $sete='imagens\a.png';

  for ($j = 0; $j <= $nnatt; $j++){
    if ($nat[$j]=='1'){
      $um='imagens\s.png'; 
    }
  }

  for ($j = 0; $j <= $nnatt; $j++){
    if ($nat[$j]=='2'){
      $dois='imagens\s.png';
    }
  }

  for ($j = 0; $j <= $nnatt; $j++){
    if ($nat[$j]=='3'){
      $tres='imagens\s.png';
    }
  }

  for ($j = 0; $j <= $nnatt; $j++){
    if ($nat[$j]=='4'){
      $quatro='imagens\s.png';
    }
  }

  for ($j = 0; $j <= $nnatt; $j++){
    if ($nat[$j]=='5'){
      $cinco='imagens\s.png';
    }
  }

  for ($j = 0; $j <= $nnatt; $j++){
    if ($nat[$j]=='7'){
      $seis='imagens\s.png';
    }
  }

  for ($j = 0; $j <= $nnatt; $j++){
    if ($nat[$j]=='8'){
      $sete='imagens\s.png';
    }
  }

  $aprz=$li['id_apr'];
  $qapr = sprintf("SELECT * FROM imprimir WHERE apr='$aprz' ORDER BY id DESC LIMIT 1") or die("erro ao selecionar");
  $dadoapr = mysqli_query($con, $qapr) or die(mysqli_error());
  $liapr = mysqli_fetch_assoc($dadoapr); //array de informações dentro da tabela

  $n_apr=$liapr['id'];


  $tarefa=$li['nome'];
  $area=$liapr['area'];
  $celula=$liapr['celula'];
  $tel=$liapr['telr'];
  $resp=$liapr['resp'];
  $id_sesmt=$liapr['id_sesmt'];
  $id_cord=$liapr['id_cord'];

  $qsesmt = sprintf("SELECT * FROM sesmt WHERE id_sesmt='$id_sesmt'") or die("erro ao selecionar");
  $dadomt = mysqli_query($con, $qsesmt) or die(mysqli_error());
  $limt = mysqli_fetch_assoc($dadomt); //array de informações dentro da tabela

  $tels=$limt['telefone'];
  $snome=$limt['nome'];


  $qco = sprintf("SELECT * FROM coordena WHERE id_cord='$id_cord'") or die("erro ao selecionar");
  $dadoco = mysqli_query($con, $qco) or die(mysqli_error());
  $lico = mysqli_fetch_assoc($dadoco); //array de informações dentro da tabela

  $telc=$lico['tel'];
  $cnome=$lico['nome'];

  
  



$htmld .="
 <table style='width:75%'>
<tr>
  <td colspan='5'>
  <h1 class='atras'><center>Pessoas envolvidas na atividade e treinadas na análise de riscos desta tarefa. Estou ciente de todos os riscos nas atividades a serem executadas e vou cumprir as medidas preventivas estabelecidas.</center></h1>
  </td>
</tr>
<tr>
    <td><h1><center>Nome</center></h1></td>
    <td><h1><center>Empresa</center></h1></td>
    <td><h1><center>Registro</center></h1></td> 
    <td colspan='2'><h1><center>Assinatura</center></h1></td>
</tr>
<tr>
    <td><h1>1- </h1></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h1>2- </h1></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h1>3- </h1></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h1>4- </h1></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h1>5- </h1></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h1>6- </h1></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h1>7- </h1></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h1>8- </h1></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h1>9- </h1></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h1>10- </h1></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h1>11- </h1></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h1>12- </h1></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <th><h1>Nomes Adicionais</h1></th>
    <th><h1>Empresa</h1></th>
    <th><h1>Registro</h1></th> 
    <th><h1>Assinatura</h1></th>
    <th><h1>Coord. Serviço</h1></th>
</tr>
<tr>
    <td><h1>1- </h1></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h1>2- </h1></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h1>3- </h1></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h1>4- </h1></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h1>5- </h1></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h1><center>Modalidade da Energia (Elet. Pneum.Hidrul.Cinet.Term.Potenc.)</center></h1></td>
    <td colspan='2'><h1><center>Localização do Bloqueio</center></h1></td>
    <td><h1><center>Alívio de Energia</center></h1></td> 
    <td><h1><center>Procedimentos de Testes e Verificações</center></h1></td>
</tr>
<tr>
    <td><br><br><br><br><br></td>
    <td colspan='2'></td>
    <td></td> 
    <td></td> 
</tr>
<tr>
    <td><br><br><br><br><br><br></td>
    <td colspan='2'></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
  <td colspan='5'><h1><center>REVALIDAÇÃO DIÁRIA</center></h1></td>
</tr>
<tr>
    <td><h1><center>Coordenação do Serviço</center></h1></td>
    <td><h1><center>Data</center></h1></td>
    <td><h1><center>Aprovação da Área</center></h1></td> 
    <td><h1><center>Data</center></h1></td> 
    <td><h1><center>Número da(s) PT(s)</center></h1></td> 
</tr>
</tr>
<tr>
    <td><h1>1- </h1></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h1>2- </h1></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h1>3- </h1></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h1>4- </h1></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h1>5- </h1></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>

</table>";

$topo="
<table>
<tr>
    <td class='invisible'>
    <img src='imagens\MarcaFarmax.png' class='farmax'>
    <img src='imagens\icot.png' class='icot'>  
    </td>
    <td class='invisible'>
    <h1 class='apr'><center><b>ANÁLISE PRELIMINAR DE RISCOS</b></center></h1>
    </td>
    <td class='invisible'>
    <center><h1 class='data'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APR N°:&nbsp;&nbsp;$n_apr &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data: $data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pág: {PAGENO}/{nb}</h1></center>
    </td>
  </tr>
  </table>";
$htmlz="
 <table>
 
  <tr>
    <td>
    <center><h1 class='nat'>NATUREZA DOS RISCOS</h1></center>
    <center><h1 class='data'>Caso marcar um item 'S' deve abrir uma PT.</h1></center>
    </td>
    <td colspan='2'>
      <h2><img src='$um'>Trabalho em altura <img src='$tres' style='margin-left: 102px;'> Fonte de eneriga perigosa <img src='$cinco' style='margin-left: 100px;'> Trabalho a quente <img src='$sete' style='margin-left: 60px;'> Escavações<br></h2>
      <h2><img src='$dois'>Trabalho com içamentos <img src='$quatro' style='margin-left: 30px;'>Ambiente confinado <img src='$seis' style='margin-left: 190px;'>Produtos químicos</h2>
    </td>
  </tr>
  <tr>
    <td colspan='3'>
    <br>
    </td> 
  </tr>
  <tr>
    <td>
      <h1>SETOR: $area</h1>
    </td>
    <td colspan='2'>
      <h1>LOCAL DO SERVIÇO: $celula</h1>
    </td>>
  </tr>
  <tr>
    <td class='invisible' colspan='2'>
      <h1><br>Tarefa: $tarefa</h1>
    </td>
    <td class='invisible'>
      <h1 class='data'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
    </td>
  </tr>
  <tr>
    <td colspan='3'>
      <h1 class='data'><center>Cabe ao contratado a responsabilidade de treinar todos os executantes nas tarefas definidas nesse documento, evidenciando com as assinaturas no verso.</center></h1>
    </td>
  </tr>
  <tr>
    <td><h1><center>CORDENAÇÃO DE SERVIÇO</center></h1></td>
    <td><h1><center>SESMT</center></h1></td>
    <td><h1><center>RESPONSÁVEL PELA ÁREA</center></h1></td>
  </tr>
  <tr>
    <td><h1>Nome: $cnome <br> Tel: $telc <br><br> Assinatura:</h1></td>
    <td><h1>Nome: $snome <br> Tel: $tels <br><br> Assinatura:</h1></td>
    <td><h1>Nome: $resp <br> Tel: $tel</h1> <br><br><h1> Assinatura:</h1></td>
  </tr>
  <tr>
    <th><h1>ATIVIDADES</h1></th>
    <th><h1>RISCOS POTENCIAIS</h1></th> 
    <th><h1>MEDIDAS PREVENTIVAS/RECOMENDAÇÕES DE SEGURANÇA</h1></th>
  </tr>
  <tr>
    <td><h1><center>(com suas respectivas etapas/passos)</center></h1></td>
    <td><h1><center>(o que poderá sair de errado)</center></h1></td>
    <td><h1><center>(evitar o acidente ou minimizar os danos, caso ocorra)</center></h1></td>
  </tr>";
            $atin=0;
           
            $qr = sprintf("SELECT * FROM apr WHERE id_apr='$tc'") or die("erro ao selecionar");
            $dado = mysqli_query($con, $qr) or die(mysqli_error());
            $li = mysqli_fetch_assoc($dado); //array de informações dentro da tabela
          $tot = mysqli_num_rows($dado); // num de info
          $nome=$li['nome'];                   
    
          $infoz = sprintf("SELECT * FROM apr WHERE id_apr='$tc'") or die("erro ao selecionar");
          $data = mysqli_query($con, $infoz) or die(mysqli_error());
          $ly = mysqli_fetch_assoc($data); //array de informações dentro da tabela
          $t = mysqli_num_rows($data); // num de info
          $arraya= $ly['ids_atividades'];
          $atividades = explode(", ",$arraya);
          $b  = count(array_filter($atividades))-1;

          for ($a = 0; $a <= $b; $a++){
            $ativi=$a+1;
                $ativida = $atividades[$a];
                $pega = sprintf("SELECT * FROM atividade WHERE id_atividade='$ativida'") or die("erro ao selecionar");
                $dadinho = mysqli_query($con, $pega) or die(mysqli_error());
                $line = mysqli_fetch_assoc($dadinho); //array de informações dentro da tabela
          $arrayf= $line['ids_ferramenta'];
          $ferramenta = explode(", ",$arrayf);
          $i  = count(array_filter($ferramenta))-1;
          $yay =$i+1; 
          

            for ($j = 0; $j <= $i; $j++){
              $feran=0;
                $fer = $ferramenta[$j];
                $qry = sprintf("SELECT * FROM ferramentas WHERE id_ferramenta='$fer'") or die("erro ao selecionar");
                $dados = mysqli_query($con, $qry) or die(mysqli_error());
                  $linha = mysqli_fetch_assoc($dados); //array de informações dentro da tabela
              $tota = mysqli_num_rows($dados);
              $arrayr=$linha['riscos'];    
            $risco = explode(", ",$arrayr);
            $r  = count(array_filter($risco))-1;
            $yan=$r+1;
            $riscosz='';
            $riscan=0;

            for ($k = 0; $k <= $r; $k++){
              $riscon=$k+1;
              $ris=$risco[$k];
              $qury = sprintf("SELECT * FROM riscos WHERE id_risco='$ris'") or die("erro ao selecionar");
                  $dad = mysqli_query($con, $qury) or die(mysqli_error());
                    $linh = mysqli_fetch_assoc($dad);
              $riscosz= $linh['risco'];
              $arraymp=$linh['MP']; 
              $mp = explode(", ",$arraymp);
              $m  = count(array_filter($mp))-1;
              $man=$m+1; 
              $medina=0;

              for ($n = 0; $n <= $m; $n++){
              $medidaimp='';
              $mps=$mp[$n];
              $quey = sprintf("SELECT * FROM medidaspreventivas WHERE id_MP='$mps'") or die("erro ao selecionar");
                  $da = mysqli_query($con, $quey) or die(mysqli_error());
                    $lin = mysqli_fetch_assoc($da);
              $medidasz= $lin['medida_preventiva'];

              
              $ferram=$j+1;
              
              $medidin=$n+1;
              if($ativi>$atin){
                  $atividadeimp=$ativi.". ".$line['atividade'];
                  $atin=$atin+1;
                }else{
                  $atividadeimp='';
                }

                if($riscon>$riscan){
                  $riscoimp=$ativi.". ".$riscon.". ".$riscosz; 
                  $riscan=$riscan+1;
                }else{
                  $riscoimp='';
                }

                $medidaimp=$ativi.". ".$riscon.". ".$medidin.". ".$medidasz; 
              
          $htmlz .="
          <tr>
                <td><h1> 
                $atividadeimp
                </h1></td>
                <td><h1>
                  $riscoimp
                  </h1>
                </td>
                <td><h1>
                  $medidaimp
                  </h1>
                </td>
          </tr>";
            }
          };
        }
      }

   $htmlz .= "</table>";
   $html = "
<table style='width:30%'>
<tr>
    <td colspan='3' style='background-color:#DCDCDC;'><center><h1 class='data'>CHECK LIST</h1></center></td>
</tr>
<tr>
    <td style='width:750%;'><h1><center>Itens a avaliar</center></h1></td>
    <td><h1><center>Sim</center></h1></td>
    <td><h1><center>Não</center></h1></td>
</tr>";

//check list               
  $query = sprintf("SELECT * FROM checklist") or die("erro ao selecionar");
  mysqli_set_charset($con,"utf8");
  $dados = mysqli_query($con, $query) or die(mysqli_error());
  $linha = mysqli_fetch_assoc($dados); //array de informações dentro da tabela
  $total = mysqli_num_rows($dados); // num de info
  $i=1;

  $simm=$li['checklist_sim'];
  $pedacosim = explode(", ",$simm);

  $naoo=$li['checklist_nao'];
  $pedaconao = explode(", ",$naoo);


  if ($total > 0){
        do {
          $idItem=$linha['id_item'];
          $idz = explode(", ",$idItem);
          $resultado = array_intersect($idz, $pedacosim);
          $r  = count(array_filter($resultado));
          $resultad = array_intersect($idz, $pedaconao);
          $w  = count(array_filter($resultad));
          if ($r>=1) {$rsim='rgb(127,127,127)';}else{ $rsim='white'; }
          if ($w>=1) {$rnao='rgb(127,127,127)';}else{ $rnao='white'; } 
         $html .= "<tr>
                      <td><h1>". $i . ') ' .$linha['item'] ."</h1></td>
                      <td style='background-color:$rsim;'><br></td>
                      <td style='background-color:$rnao;'><br></td>
                  </tr>";
          $i=$i+1;
        }while($linha = mysqli_fetch_assoc($dados));
     }

 $html.= "</table>";

$mpdf = new mPDF(
             '',    // mode - default ''
             'A4-L',    // format - A4, for example, default ''
             0,     // font size - default 0
             '',    // default font family
             15,    // margin_left
             15,    // margin right
             22,     // margin top    -- aumentei aqui para que não ficasse em cima do header
             5,    // margin bottom
             6,     // margin header
             0,     // margin footer
             'L');  // L - landscape, P - portrait 
 //$mpdf->allow_charset_conversion = true;// retirar quando arrumar banco
 //$mpdf->charset_in = 'iso-8859-4';//retirar quando arrumar banco

 $mpdf->SetDisplayMode('fullpage');
 $mpdf->SetHTMLHeader($topo,'O',true);

 $css = file_get_contents("css/estilo.css");

 $mpdf->WriteHTML($css,1);
 $mpdf->WriteHTML($htmlz);

 $mpdf->AddPage();
 $mpdf->WriteHTML($css,1);
 $mpdf->WriteHTML($html);

 $mpdf->AddPage();
 $mpdf->WriteHTML($css,1);
 $mpdf->WriteHTML($htmld);

 //$mpdf->Output();
 exit;