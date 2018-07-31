<link rel="stylesheet" href="{{ public_path('css/grid_bootstrap.css') }}">

<div class="container-fluid">
    <!-- CABEÇALHO -->
    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <img  class="cem" src="{{public_path('img/tik.png')}}"/>
                </div>
                <div class="col">
                    <img  class="cem" src="{{public_path('img/tik.png')}}"/>
                </div>
            </div>
        </div>
        <div class="col txt-centro h4">
            ANÁLISE PRELIMINAR DE RISCOS
        </div>
        <div class="col-4">
            <div class="row txt-dir">
                <div class="col">
                    APR N°: 0019
                </div>
                <div class="col">
                    Data: 21/07/2018
                </div>
                <div class="col">
                    Pág: 1/3
                </div>
            </div>
        </div>
    </div>

    <!-- NATUREZA DOS RISCOS -->
    <div class="row">
        <div class="col-4 txt-centro">
            NATUREZA DOS RISCOS<br/>
            Caso marcar um item 'S' deve abrir uma PT.
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    1
                </div>
                <div class="col">
                    2
                </div>
                <div class="col">
                    3
                </div>
                <div class="col">
                    4
                </div>
            </div>
        </div>
    </div>

    <!-- SETOR E LOCAL -->
    <div class="row">
        <div class="col-4">
            SETOR: ALMOXARIFADO COSMETICO II
        </div>
        <div class="col">
            LOCAL DO SERVIÇO:
        </div>
    </div>

    <!-- TAREFA -->
    <div class="row">
        <div class="col">
            Tarefa: khdasah
        </div>
    </div>

    <div class="row">
        <div class="col">
            Cabe ao contratado a responsabilidade de treinar todos os executantes nas tarefas definidas nesse documento, evidenciando com as assinaturas no verso.
        </div>
    </div>
    <!-- CORDENAÇÃO DE SERVIÇO SESMT RESPONSÁVEL PELA ÁREA -->
    <div class="row">
        <div class="col">
            CORDENAÇÃO DE SERVIÇO
        </div>
        <div class="col">
            SESMT
        </div>
        <div class="col">
            RESPONSÁVEL PELA ÁREA
        </div>
    </div>
    <div class="row">
        <div class="col">
            Nome: coordenador<br/>
            Tel: +55 (37) 0000-0000<br/><br/>
            Assinatura:
        </div>
        <div class="col">
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
    <div class="row">
        <div class="col">
            ATIVIDADES
        </div>
        <div class="col">
            RISCOS POTENCIAIS
        </div>
        <div class="col">
            MEDIDAS PREVENTIVAS/RECOMENDAÇÕES DE
            SEGURANÇA
        </div>
    </div>
    <div class="row">
        <div class="col">
            (com suas respectivas etapas/passos)
        </div>
        <div class="col">
            (o que poderá sair de errado)
        </div>
        <div class="col">
            (evitar o acidente ou minimizar os danos, caso ocorra)
        </div>
    </div>



    <div class="row">
        @foreach($data['atividade'] as $atv)
            <div class="row">
                <div class="col">{{$atv->atividade}}</div>

                <?php
                $bf = true;
                ?>

                @foreach($atv->Ferramentas as $fer)
                    @if(!$bf)
                        <div class="col">EMPTY</div>
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