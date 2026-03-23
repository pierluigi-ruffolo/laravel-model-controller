@extends('layouts.master')

@section('content')
<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
        @foreach($movies as $movie)
        <div class="col">
            <x-Card>
                <x-slot:title>{{$movie['title']}}</x-slot:title>
                <x-slot:originalTitle>{{$movie['original_title']}}</x-slot:originalTitle>
                <x-slot:nationality>{{$movie['nationality']}}</x-slot:nationality>
                <x-slot:date>{{$movie['date']}}</x-slot:date>
            </x-Card>
        </div>
        @endforeach
    </div>
</div>
@endsection