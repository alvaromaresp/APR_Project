<DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        </head>
        <body>
            <div class="container" style="border: 5px solid #00004c; height: 85vh;">
                <div class="row" style="height: 7vh"></div>
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col">
                                <img src="img/logo.png" width="250">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col offset-lg-3">
                                <p>> Menu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <hr style="background: #00004c; height: 65vh; width: 3px">
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12" style="margin-left: -5%">
                        @yield('content');
                    </div>
                </div>
            </div>
        </body>
    </html>