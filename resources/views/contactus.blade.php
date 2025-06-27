<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <h1>Contact Us</h1>
    {{-- <h2>Name: {{$name}}</h2>
    <h2>Email: {{$email}}</h2> --}}

    <h2>Name: {{request()->name}}</h2>
    <h2>ID: {{request()->id}}</h2>

    @include('SubViews.Input',[
            'myname' => request()->name,
        ])

    @for ($i = 0;$i < 10;$i++)
            <p>Item {{$i}}</p>
            @if($i%2 == 0)
                <p>Even number</p>
            @else
                <p>Odd number</p>   
            @endif        
        @endfor
</div>
