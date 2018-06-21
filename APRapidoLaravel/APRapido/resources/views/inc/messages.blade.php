@if(count($errors) > 0)

    @foreach($errors->all() as $error)

        <div class="alert alert-danger">
            {{$error}}
        </div>

    @endforeach

@endif

@if(session('success'))
        <div class="mt-5 mb-5 ml-5 mr-5 alert alert-success">
            {{session('success')}}
        </div>
@endif

@if(session('danger'))
        <div class="mt-5 mb-5 ml-5 mr-5 alert alert-danger">
            {{session('danger')}}
        </div>
@endif

@if(session('error'))
        <div class="mt-5 mb-5 ml-5 mr-5 alert alert-danger">
            {{session('error')}}
        </div>
@endif