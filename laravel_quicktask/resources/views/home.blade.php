@extends('layouts.app')

@section('content')
<a class="btn-create" href="{{ route('cards.create') }}">
    {{ __('create-card') }}
</a>

<!-- list item -->
<div class="cart-list">
    @foreach ($cards as $card)
        <div class="cart">
            <a href="{{ route('cards.show', $card->id) }}">
                <img class="cart-img" src="{{ $card->image }}" alt="">
                <h5 class="cart-title">{{ $card->title }}</h5>
            </a>
            <div class="btn-group">
                <a href="{{ route('cards.edit', $card->id) }}" class="btn update">{{ __('edit') }}</a>
                <a attr-id="{{ $card->id }}" id="delete-btn" class="btn delete">{{ __('delete') }}</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
