<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bookstore.css')}}">
    <title>Book Store</title>
    
    <x-script></x-script>
</head>
<body>

    @if (!request()->is('loginCustomer') && !request()->is('signup'))
        <div class="container">
            <div class="row">
                <x-navbar></x-navbar>
            </div>
            {{$slot}}
        </div>

    @else
        {{$slot}}
    @endif
    
</body>
</html>