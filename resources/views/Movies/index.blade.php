@extends('layout')





@section('content')
Movies:
<ul>
<h1>Movies Categories</h1>
@foreach ( $categories as $category)
<a href="{{route('movies.category',$category)}}">{{$category}}</a>

@endforeach
<h1>Movie List</h1>
@foreach ($movies as $id=>$movie)
 <li><a href="{{route('movies.id',$id)}}">{{$movie["title"]}} ({{$movie["year"]}})</a></li>
@endforeach
</ul>
@endsection
