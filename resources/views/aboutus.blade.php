<html>
    <body>
        <h1>About Us</h1>
        <h2>Name: {{$name}}</h2>
        {{-- <h2>Email: {{$email}}</h2> --}}
        <h2>ID: {{$id}}</h2>

        @for ($i = 0;$i < 10;$i++)
            <p>Item {{$i}}</p>
            @if($i%2 == 0)
                <p>Even number</p>
            @else
                <p>Odd number</p>   
            @endif        
        @endfor
    </body>
</html>