@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($portfolio as $portfolios)
            <li>{{$portfolios->title}}</li>
            <li>{{$portfolios->description}}</li>
            <li>{{$portfolios->thumb}}</li>
        @endforeach
    </ul>
@endsection