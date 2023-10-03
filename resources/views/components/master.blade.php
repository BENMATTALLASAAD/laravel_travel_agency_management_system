<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <title>Admin space | {{$title}}</title>
</head>
<body>
    @include('partials.aside')
    @include('sweetalert::alert')
    
    <main>
            <h1>Dashboard</h1>
            
        
        <div style="margin: 2rem">
            @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="danger" style="font-size: 15px">
                    <span>- </span>{{$error}}
                </div>
            @endforeach
            @endif
        </div>
       
            
        {{$slot}}

    </main>
    @include('partials.top')
    
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</body>
</html>