<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel React</title>
    
    {{-- @vite('resources/js/app.js') --}}
    {{-- <script src="{{ asset('js/app.js') }}" ></script>  --}}
</head>
<body>
    {{-- <h1>blade from php</h1> --}}
    {{-- <div id="hello-react" :postId="3"></div> --}}
    {{-- <div id="hello-react" ></div> --}}
    pojpo
  {{-- {{ $posts }} --}}
  {{-- {{$posts}} --}}
     @foreach($posts as $d)
            @foreach ($d as $i)
                {{
                    $i->id
                }}
            @endforeach
    @endforeach
 
</body>
</html>