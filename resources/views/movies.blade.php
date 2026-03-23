@extends('layouts.master')

@section('content')
<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
        @foreach($movies as $movie)
        @php
        $vote = $movie['vote'] / 2;
        $stars = "";
        for($i = 0; $i < 5; $i++) {
            if ($vote> $i) {
            $stars .= "★";
            } else {
            $stars .= "☆";
            }
            }
            @endphp
            <div class="col">
                <x-Card>
                    <x-slot:title>{{$movie['title']}}</x-slot:title>
                    <x-slot:originalTitle>{{$movie['original_title']}}</x-slot:originalTitle>
                    <x-slot:nationality>{{$movie['nationality']}}</x-slot:nationality>
                    <x-slot:date>{{$movie['date']}}</x-slot:date>
                    <x-slot:stars>{{$stars}}</x-slot:stars>
                </x-Card>
            </div>
            @endforeach
    </div>
</div>
@endsection