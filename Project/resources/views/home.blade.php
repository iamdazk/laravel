<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách</h1>
    @foreach ($connect as $item)
    <p>{{ $item -> name }}</p>
    <p>{{ $item -> age }}</p>
    @endforeach
    <a href="{{ route('insert') }}">insert</a>
    <form action="/post" method="POST">
        @csrf
    
        <p>Username</p>
        <div>
            <input type="text" name="username">
        </div>
        
        <p>Password</p>
        <div>
            <input type="password" name="password">
        </div>
    
        <br>
    
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>