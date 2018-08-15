<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <link rel="stylesheet" href="{{ public_path('css/grid_bootstrap.css') }}">
</head>

<body>
<div class="row superBorda">
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <img  class="imgm mt-2 float-right" src="{{public_path('img/farmax.png')}}"/>
                </div>
                <div class="col">
                    <img  class="imgm mt-2 float-left" src="{{public_path('img/icot.png')}}"/>
                </div>
            </div>
        </div>
        <div class="col txt-centro h4 mt-2">
            <b>ANÁLISE PRELIMINAR DE RISCOS</b>
        </div>
        <div class="col-4">
            <div class="row txt-dir">
                <div class="col">
                    APR N°: {{sprintf('%04d', $data['impressao']->id)}}
                </div>
                <div class="col">
                    Data: {{$data['impressao']->created_at->format('d/m/Y')}}
                </div>

            </div>
        </div>
        <br><br><br>
    </div>
</body>
</html>