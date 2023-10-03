<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Travel agency | Admin Login</title>
</head>
<body>
    <div class="image">
    </div>
    <div class="container" >
        <form  method="post" action="{{ route('homePage') }}">
            @csrf
            <h2>Admin Login</h2>
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" value="Login" class="btn">
        </form>
    </div>