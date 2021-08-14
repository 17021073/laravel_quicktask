@extends('layout.main')
@section('main-content')
    <!-- header page -->
    @include('layout.header')

    <!-- content page -->
    <!-- create cart button -->

    <a class="btn-create" 
            href="">Create cart</a>

    <!-- list item -->
    <div class="cart-list">
        <div class='cart'>
            <a href='' style='text-decoration: none'>
                <img class='cart-img' src='' alt=''>
                    <h3 class='cart-title'>Card title</h3>
            </a>
            <div class='btn-group'>
                <a href='{$edit}' class='btn update'>Edit</a>
                <a id='delete-btn' class='btn delete'>Delete</a>
            </div>

        </div>
    </div>

@endsection