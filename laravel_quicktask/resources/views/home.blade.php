@extends('layouts.app')

@section('content')
<a class="btn-create" href="">
    {{ __('create-card') }}
</a>

<!-- list item -->
<div class="cart-list">
    <div class="cart">
        <a href="" style="text-decoration: none">
            <img class="cart-img" src="" alt="">
            <h5 class="cart-title">Card title</h5>
        </a>
        <div class="btn-group">
            <a href="" class="btn update">{{ __('edit') }}</a>
            <a attr-id="" id="delete-btn" class="btn delete">{{ __('delete') }}</a>
        </div>
    </div>
</div>
@endsection
