<!DOCTYPE html>
    <html lang="{{app()->getLocale() }}">
        <head>
            <title>{{config('app.name','APRápido')}}</title>
            <link rel="shortcut icon" type="image/x-icon" href="/img/icone.ico">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <script src="{{asset('js/app.js')}}"></script>
            <script type="text/javascript">
                window.onload=function(){
                  var elemento = document.getElementById('corpo');
                  var linha = document.getElementById('linha');
                  var altura = elemento.scrollHeight;
                  linha.style.height = altura + 'px';
                }
            </script>  
            <style>
                @media (min-width: 992px) {
                    .bigButton {
                        background-color: #e6e6e6;
                        border-style: solid;
                        border-width: 0.1em;
                        border-color: #00004c;
                        color: #00004c;
                        padding: 0 0.45em 0.1em 0.45em;
                        text-decoration: none;
                        font-size: 4em;
                        margin: 0.3em 0.3em;
                        border-radius: 50%;
                        cursor: pointer;
                    }

                    .bigButton:hover{
                        background-color: #00004c;
                        color: #e6e6e6;
                    }
                }

                @media (max-width: 992px) {
                    .bigButton {
                        background-color: #e6e6e6;
                        border-style: solid;
                        border-width: 0.1em;
                        border-color: #00004c;
                        color: #00004c;
                        padding: 0 0.45em 0.1em 0.45em;
                        text-decoration: none;
                        font-size: 2em;
                        margin: 0.25em 0.25em;
                        border-radius: 50%;
                        cursor: pointer;
                    }

                    .bigButton:hover{
                        background-color: #00004c;
                        color: #e6e6e6;
                    }
                }

                .btn-dark{
                    background-color: #00004c !important;
                    border-color: #00004c !important;
                }

                .btn-dark:hover{
                    background-color: rgb(0,0,34) !important;
                    border-color: #00004c !important;
                }

                .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
                .show > .btn-dark.dropdown-toggle:focus {
                    box-shadow: #0000e6 !important;
                }

                .btn-dark:focus, .btn-dark.focus{
                    box-shadow: #0000e6 !important;
                }

                .btn-primary{
                    width: 15em;
                    background-color: #00004c !important;
                    border-color: #00004c !important;
                }

                .btn-primary:hover{
                    background-color: rgb(0,0,34) !important;
                    border-color: #00004c !important;
                }

                .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
                .show > .btn-primary.dropdown-toggle:focus {
                    box-shadow: #0000e6 !important;
                }

                .btn-primary:focus, .btn-primary.focus{
                    box-shadow: #0000e6 !important;
                }


                .smallButton {
                    background-color: #e6e6e6;
                    border-style: solid;
                    border-width: 0.25em;
                    border-color: #00004c;
                    color: #00004c;
                    padding: 0 0.5em;
                    text-decoration: none;
                    font-size: 1.2em;
                    margin: 0.3em 0.3em 0.3em 0;
                    border-radius: 100%;
                    cursor: pointer;
                    float: right;
                }

                .smallButton:hover{
                    background-color: #00004c;
                    color: #e6e6e6;
                }

                a {
                    color:grey;
                }

                a:hover{
                    color:grey;
                }
            </style>

        </head>
            <body>
                <div class="container mb-5 mt-5" id="corpo" style="border: 1vh solid #00004c">
                    <div class="row mt-4 mb-4">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col">
                                    <img src="/img/logo.png" width="250">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col offset-lg-3">
                                    <br>
                                    <p>@yield('caminho')</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn smallButton" data-toggle="modal" data-target="#exampleModal">
                                    ?
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 d-none d-lg-block">
                            <hr id="linha" style="background: #00004c; width: 3px; min-height: 60vh;">
                        </div>
                        <div class="col-lg-1 d-block d-lg-none" style="max-height: 100px; max-width: 80vw;">
                            <hr style="background: #00004c; height: 65vh; width: 3px; transform:rotate(90deg); margin-top: -200px">
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12" style="margin-left: -5%">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </body>

    </html>