<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <h1 class="text-center">BOOLEAN HOUSES</h1>
    
        {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt="" /> --}}
       
    <div class="container">
        <div class="row g-3 row-cols-3">
            @foreach ($houses as $house)
                <div class="col">
                    <div class="card h-100">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                                <h5 class="card-title">{{ $house->address }}</h5>
                                <h6 class="card-text"> Stanze: {{ $house->rooms }}</h6>
                                <p class="card-text">{{ $house->description }}</p>
                                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
      
    </body>
</html>
