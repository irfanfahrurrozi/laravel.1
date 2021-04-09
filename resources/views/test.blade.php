@include('headers')

<h1>Test BLADE </h1>

@php
    $fruits = array('mango','banana','susu','timun');
    $name = 'Jennifer';
    $age = '9';
@endphp

<h2>{{$name}}</h2>

<h2>Fruits</h2>
@foreach($fruits as $fruit)
    <ul>
        <li>{{$fruit}}</li>
    </ul>
@endforeach

<br>

@for($i=1; $i<=10; $i++)
    {{$i}} <br>
@endfor


<br>

@if (count($fruits)==1)
    single Fruit
@elseif(count($fruits)>1)
    More than one fruit
@else  
    No Fruit
@endif

<br>

{{ $age >= 18 ? 'You Are Adult' : 'You are not Adult'}}

