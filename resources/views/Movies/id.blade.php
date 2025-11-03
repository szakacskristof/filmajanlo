@extends('layout')
@section('content')
<h1>Selected Movie Id: {{$sid}}</h1>
<table>


<tr>
    <td>Title:</td>
    <td>{{$selectedMovie["title"]}}</td>
</tr>
<tr>
    <td>Release Year:</td>
    <td>{{$selectedMovie["year"]}}</td>
</tr>
<tr>
    <td>Director:</td>
    <td>{{$selectedMovie["director"]}}</td>
</tr>
<tr>
    <td>Category:</td>
    <td>{{$selectedMovie["category"]}}</td>
</tr>
<tr>
    <td>Description:</td>
    <td>{{$selectedMovie["description"]}}</td>
</tr>
<tr>
    <td>Pciture:</td>
    <td><img src={{$selectedMovie["poster"]}}></td>
</tr>


<h2><a href="{{route('movies.id',$sid-=1)}}">Előző film</a></h2>
<h2><a href="{{route('movies.id',$sid+=2)}}">Következő film </a></h2>

</table>
@endsection
