@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div>Top 5 Movies:
                  <ul>
                    @foreach ($movies as $movie)
                    <li>{{ $movie->Title }}, relased in {{$movie->Release_Year}}
                    (<?php
                    $year =2018;
                    $release = $movie->Release_Year;
                    $old = $year - $release;
                    ?>{{$old}} years ago)</li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
        <a href="/json" class="btn btn-xs btn-info pull-right">Json</a>
    </div>
</div>
@endsection
