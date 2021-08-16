@extends('layouts.app')

@section('content')
<a class="btn-create" href="">
    {{ __('create-card') }}
</a>

<!-- list item -->
<div class="cart-list">
    @foreach ($cards as $card)
        <div class="cart">
            <a href="" style="text-decoration: none">
                <img class="cart-img" src="{{ $card->image }}" alt="">
                <h5 class="cart-title">{{ $card->title }}</h5>
            </a>
            <div class="btn-group">
                <a href="" class="btn update">{{ __('edit') }}</a>
                <a attr-id="" id="delete-btn" class="btn delete">{{ __('delete') }}</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
