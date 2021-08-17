@extends('layouts.app')

@section('content')
<div class='contain'>
    <a class='btn_back' href="{{ route('home') }}">{{ __('back-home') }}</a>
    <form action="{{ route('cards.update', $card->id) }}" method="POST" class="form_create">
        @method('PUT')
        @csrf
        <table class="table_create">
            <tr>
                <td>{{ __('title') }}</td>
                <td><input type="text" name='title' value="{{ $card->title }}" class='form-info'></td>
            </tr>
            <tr>
                <td>{{ __('description') }}</td>
                <td><textarea name="description" id="" cols="20" rows="5" class="form-info">{{ $card->description }}</textarea></td>
            </tr>
            <tr>
                <td>{{ __('photo') }}</td>
                <td><input class="form-info" value="{{ $card->image }}" type="text" name="image" placeholder="{{ __('please_write') }}"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="{{ __('update') }}" class="button" name="update">
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection
