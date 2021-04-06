<div>
    <h1> THis is header test </h1>
    <h3>Hello {{$name}}</h3>
    <h3>Fruits are: </h3>
    <ul>
        @foreach ($fruits as $fruits)
            <li>{{$fruits}}</li>
        @endforeach
    </ul>
    <!-- Well begun is half done. - Aristotle -->
</div>