<link rel="stylesheet" href="{{ public_path('css/grid_bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('css/grid_bootstrap.css') }}">

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
                    APR N°: {{sprintf('%04d', $data['apr']->id)}}
                </div>
                <div class="col">
                    Data: {{$data['impressao']->created_at->format('d/m/Y')}}
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
        <div class="col bordaBaixa">
            <div class="row">
                @php
                    $i=0;
                    $arrayNR = array();
                    foreach ($data['naturezariscos'] as $nat){
                        array_push( $arrayNR,$nat->id);
                    }
                @endphp
                @foreach($data['todosnr'] as $nat)
                    @php
                        $completa1 = "";
                        $completa2 = "cinquenta";

                        if(in_array($nat->id,$arrayNR)){
                            $completa1 = "cinquenta";
                            $completa2 = "";
                        }
                    @endphp
                    <div class="col">
                        <div class="row">
                            <div class="col quadradin {{$completa1}}">S</div>
                            <div class="col quadradin {{$completa2}}">NA</div>
                            <div class="col-8">{{$nat->natureza_risco}}</div>
                        </div>
                    </div>
                    @php $i++; @endphp
                    @if($i>=3)
                        @php $i=0; @endphp
                        </div>
                        <div class="row">
                    @endif
                @endforeach
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
            Nome: {{$data['coordena']->nome}}<br/>
            Tel: {{$data['coordena']->telefone}}<br/><br/>
            Assinatura:
        </div>
        <div class="col bordaLado">
            Nome: {{$data['sesmt']->nome}}<br/>
            Tel: {{$data['sesmt']->telefone}}<br/><br/>
            Assinatura:
        </div>
        <div class="col">
            Nome: {{$data['impressao']->responsavel}}<br/>
            Tel: {{$data['impressao']->telResponsavel}}<br/><br/>
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

    @foreach($data['atividade'] as $atv)
        <div class="row bordaAlto">
        @php $prim = true; @endphp
        <div class="col-4 bordaLado">{{$atv->atividade}}</div>
        @foreach($atv->ferramentas as $fer)
            @foreach($fer->riscos as $risco)
                @if(!$prim)
                    <div class="row">
                        <div class="col-4  bordaLado"></div>
                    @php $prim = true; @endphp
                @endif
                <div class="col-4  bordaLado  bordaAlto">{{$risco->risco}}</div>
                @foreach($risco->medidaspreventivas as $mp)
                    @if(!$prim)
                        <div class="row">
                            <div class="col-4 bordaLado"></div>
                            <div class="col-4 bordaLado"></div>
                    @endif
                        <div class="col-4 bordaAlto">{{$mp->medidapreventiva}}</div>
                    </div>
                    @php $prim=false; @endphp
                @endforeach
            @endforeach
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
                    APR N°: {{sprintf('%04d', $data['apr']->id)}}
                </div>
                <div class="col">
                    Data: {{$data['impressao']->created_at->format('d/m/Y')}}
                </div>
                <div class="col">
                    Pág: paginacao
                </div>
            </div>
        </div>
        <br><br><br>
    </div>

    <div class="row">
        <div class="col txt-centro bordaBaixa tons">
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
    @php
    $arrayCheck = array();
    foreach ($data['checklist'] as $check){
        array_push( $arrayCheck,$check->id);
    }
    @endphp
    @foreach($data['checklistsGeral'] as $check)
        <div class="row bordaBaixa">
            <div class="col-8 bordaLado">
                <b>{{$check->item}}</b>
            </div>
            @php
                $completa1 = "";
                $completa2 = "cinquenta";

                if(in_array($check->id,$arrayCheck)){
                    $completa1 = "cinquenta";
                    $completa2 = "";
                }
            @endphp
            <div class="col bordaLado txt-centro {{$completa1}}">

            </div>
            <div class="col txt-centro {{$completa2}}">
            </div>
        </div>
    @endforeach
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
    <td><h7>1- </h7></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h7>2- </h7></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h7>3- </h7></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h7>4- </h7></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h7>5- </h7></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h7>6- </h7></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h7>7- </h7></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h7>8- </h7></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h7>9- </h7></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h7>10- </h7></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h7>11- </h7></td>
    <td></td>
    <td></td> 
    <td colspan='2'></td>
</tr>
<tr>
    <td><h7>12- </h7></td>
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
    <td><h7>1- </h7></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h7>2- </h7></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h7>3- </h7></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h7>4- </h7></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h7>5- </h7></td>
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
    <td><h7>1- </h7></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h7>2- </h7></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h7>3- </h7></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h7>4- </h7></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
<tr>
    <td><h7>5- </h7></td>
    <td></td>
    <td></td> 
    <td></td> 
    <td></td>
</tr>
</table>

<br><br>

