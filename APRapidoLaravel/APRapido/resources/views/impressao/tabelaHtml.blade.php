<link rel="stylesheet" href="{{ public_path('css/grid_bootstrap.css') }}">

<div class="container-fluid borda">
    <!-- CABEÇALHO --><br>
    <div class="row bordaBaixa">
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <img  class="cem mt-2 float-right" src="{{public_path('img/farmax.png')}}"/>
                </div>
                <div class="col">
                    <img  class="cem mt-2 float-left" src="{{public_path('img/icot.png')}}"/>
                </div>
            </div>
        </div>
        <div class="col txt-centro h4 mt-2">
            <b>ANÁLISE PRELIMINAR DE RISCOS</b>
        </div>
        <div class="col-4">
            <div class="row txt-dir">
                <div class="col">
                    APR N°: id apr
                </div>
                <div class="col">
                    Data: data do dia
                </div>
                <div class="col">
                    Pág: paginacao
                </div>
            </div>
        </div>
        <br><br><br>
    </div>

    <!-- NATUREZA DOS RISCOS -->
    <div class="row">
        <div class="col-4 txt-centro bordaBaixa bordaLado">
            NATUREZA DOS RISCOS<br/>
            Caso marcar um item 'S' deve abrir uma PT.
        </div>
        <div class="col">
            <div class="row bordaBaixa">
                <div class="col">
                    <div class="row">
                        <div class="quadradin mt-1">
                            S
                        </div>
                        <div class="quadradin float-left">
                            NA
                        </div>
                    </div>
                    <div class="row">
                        <div class="quadradin mt-1">
                            S
                        </div>
                        <div class="quadradin float-left">
                            NA
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="quadradin mt-1">
                        NA
                    </div>
                    aline
                    <div class="quadradin">
                        S
                    </div>
                </div>
                <div class="col">
                    3
                </div>
                <div class="col">
                    <br><br>
                    4
                </div>
            </div>
        </div>
    </div>

    <!-- SETOR E LOCAL -->
    <div class="row bordaBaixa">
        <div class="col-4 bordaLado">
            <b>SETOR: </b>local 
        </div>
        <div class="col">
            <b>LOCAL DO SERVIÇO: </b> celula
        </div>
    </div>

    <!-- TAREFA -->
    <div class="row bordaBaixa">
        <div class="col">
            <b>TAREFA:</b>nome apr
        </div>
    </div>

    <div class="row">
        <div class="col txt-centro bordaBaixa">
            <b>Cabe ao contratado a responsabilidade de treinar todos os executantes nas tarefas definidas nesse documento, evidenciando com as assinaturas no verso.</b>
        </div>
    </div>
    <!-- CORDENAÇÃO DE SERVIÇO SESMT RESPONSÁVEL PELA ÁREA -->
    <div class="row bordaBaixa">
        <div class="col bordaLado txt-centro">
           <b> CORDENAÇÃO DE SERVIÇO </b>
        </div>
        <div class="col bordaLado txt-centro">
           <b> SESMT </b>
        </div>
        <div class="col txt-centro">
            <b> RESPONSÁVEL PELA ÁREA </b>
        </div>
    </div>
    <div class="row bordaBaixa">
        <div class="col bordaLado">
            Nome: coordenador<br/>
            Tel: +55 (37) 0000-0000<br/><br/>
            Assinatura:
        </div>
        <div class="col bordaLado">
            Nome: Rafaela Sousa<br/>
            Tel: +55 (37) 2101-9651<br/><br/>
            Assinatura:
        </div>
        <div class="col">
            Nome:<br/>
            Tel: +55 (37) 0000-0000<br/><br/>
            Assinatura:
        </div>
    </div>


    <!-- ATIVIDADES RISCOS POTENCIAIS MEDIDAS PREVENTIVAS/RECOMENDAÇÕES DE SEGURANÇA -->
    <div class="row txt-centro bordaBaixa">
        <div class="col bordaLado">
            <b>ATIVIDADES</b>
        </div>
        <div class="col bordaLado">
            <b>RISCOS POTENCIAIS</b>
        </div>
        <div class="col">
            <b>MEDIDAS PREVENTIVAS/RECOMENDAÇÕES DE
            SEGURANÇA</b>
        </div>
    </div>
    <div class="row txt-centro bordaBaixa">
        <div class="col bordaLado">
            (com suas respectivas etapas/passos)
        </div>
        <div class="col bordaLado">
            (o que poderá sair de errado)
        </div>
        <div class="col">
            (evitar o acidente ou minimizar os danos, caso ocorra)
        </div>
    </div>



    <div class="row">
        @foreach($data['atividade'] as $atv)
            <div class="row bordaBaixa">
                <div class="col bordaLado">{{$atv->atividade}}</div>

                <?php
                $bf = true;
                ?>

                @foreach($atv->Ferramentas as $fer)
                    @if(!$bf)
                        <div class="col bordaLado">EMPTY</div>
                    @endif

                    <div class="col">{{$fer->ferramenta}}</div>

                    <?php
                    $br = true;
                    ?>

                    @foreach($fer->Riscos as $ris)
                        @if(!$br)
                            <div class="col">EMPTY</div>
                            <div class="col">EMPTY</div>
                        @endif
                        <div class="col">{{$ris->risco}}</div>

                        <?php
                        $bmp = true;
                        ?>
                        @foreach($ris->medidaspreventivas as $mp)
                            @if(!$bmp)
                                <div class="col">EMPTY</div>
                                <div class="col">EMPTY</div>
                                <div class="col">EMPTY</div>
                            @endif
                            <div class="col">{{$mp->medidapreventiva}}</div>

            </div>
            <?php
            $bmp = false;
            ?>
        @endforeach

        <?php
        $br = false;
        ?>
        @endforeach

        <?php
        $bf = false;
        ?>
        @endforeach

        @endforeach
    </div>


</div>
<br><br>
<div class="container-fluid borda">
    <!-- CABEÇALHO --><br>
    <div class="row bordaBaixa">
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <img  class="cem mt-2 float-right" src="{{public_path('img/farmax.png')}}"/>
                </div>
                <div class="col">
                    <img  class="cem mt-2 float-left" src="{{public_path('img/icot.png')}}"/>
                </div>
            </div>
        </div>
        <div class="col txt-centro h4 mt-2">
            <b>ANÁLISE PRELIMINAR DE RISCOS</b>
        </div>
        <div class="col-4">
            <div class="row txt-dir">
                <div class="col">
                    APR N°: id apr
                </div>
                <div class="col">
                    Data: data do dia
                </div>
                <div class="col">
                    Pág: paginacao
                </div>
            </div>
        </div>
        <br><br><br>
    </div>

    <div class="row">
        <div class="col txt-centro bordaBaixa" style="background-color: rgb(220,220,220);">
            <b>CHECK LIST</b>
        </div>
    </div>

    <div class="row bordaBaixa">
        <div class="col-8 bordaLado">
            <b>ITEM</b>
        </div>
        <div class="col bordaLado txt-centro">
            <b>SIM</b>
        </div>
        <div class="col txt-centro">
            <b>NÃO</b>
        </div>
    </div>

    <div class="row bordaBaixa">
        <div class="col-8 bordaLado">
            <b>Blá blá</b>
        </div>
        <div class="col bordaLado txt-centro cinquenta"> 
        </div>
        <div class="col txt-centro">
        </div>
    </div>

    <div class="row">
        <div class="col-8 bordaLado">
            <b>Blá blá</b>
        </div>
        <div class="col bordaLado txt-centro"> 
        </div>
        <div class="col txt-centro cinquenta">
        </div>
    </div>
</div>
<br><br>

<table border="2px" bordercolor="black">
<tr>
  <td colspan='5'>
  <h6><center>Pessoas envolvidas na atividade e treinadas na análise de riscos desta tarefa. Estou ciente de todos os riscos nas atividades a serem executadas e vou cumprir as medidas preventivas estabelecidas.</center></h6>
  </td>
</tr>
<tr>
    <td><h6><center>Nome</center></h6></td>
    <td><h6><center>Empresa</center></h6></td>
    <td><h6><center>Registro</center></h6></td> 
    <td colspan='2'><h6><center>Assinatura</center></h6></td>
</tr>
<tr>
    <td><h6>1- </h6></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h6>2- </h6></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h6>3- </h6></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h6>4- </h6></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h6>5- </h6></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h6>6- </h6></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h6>7- </h6></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h6>8- </h6></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h6>9- </h6></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h6>10- </h6></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h6>11- </h6></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h6>12- </h6></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <th><h6>Nomes Adicionais</h6></th>
    <th><h6>Empresa</h6></th>
    <th><h6>Registro</h6></th> 
    <th><h6>Assinatura</h6></th>
    <th><h6>Coord. Serviço</h6></th>
</tr>
<tr>
    <td><h6>1- </h6></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h6>2- </h6></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h6>3- </h6></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h6>4- </h6></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h6>5- </h6></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h6><center>Modalidade da Energia (Elet. Pneum.Hidrul.Cinet.Term.Potenc.)</center></h6></td>
    <td colspan='2'><h6><center>Localização do Bloqueio</center></h6></td>
    <td><h6><center>Alívio de Energia</center></h6></td> 
    <td><h6><center>Procedimentos de Testes e Verificações</center></h6></td>
</tr>
<tr>
    <td><br><br><br></td>
    <td colspan='2'></td>
    <td></td> 
    <td></td> 
</tr>
<tr>
    <td><br><br><br></td>
    <td colspan='2'></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
  <td colspan='5'><h6><center>REVALIDAÇÃO DIÁRIA</center></h6></td>
</tr>
<tr>
    <td><h6><center>Coordenação do Serviço</center></h6></td>
    <td><h6><center>Data</center></h6></td>
    <td><h6><center>Aprovação da Área</center></h6></td> 
    <td><h6><center>Data</center></h6></td> 
    <td><h6><center>Número da(s) PT(s)</center></h6></td> 
</tr>
</tr>
<tr>
    <td><h6>1- </h6></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h6>2- </h6></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h6>3- </h6></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h6>4- </h6></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h6>5- </h6></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
</table>

<br><br>

