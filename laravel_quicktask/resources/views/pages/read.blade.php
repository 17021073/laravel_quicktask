@extends('layouts.app')

@section('content')
    <div class="back">
        <a class='btn_back back-read' href="{{ route('home') }}">{{ __('back-home') }}</a>
    </div>
    <div class='main'>
        <div class="card-img">
            <img src="{{ $card->image }}" alt="">
        </div>
        <div class="des-group">
            <h3 class="title">{{ $card->title }}</h3>
            <p class="des">{{ $card->description }}</p>
        </div>
    </div>
@endsection
