@extends('layouts.app')

@section('content')
<div class='contain'>
    <a class='btn_back' href="{{ route('home') }}">{{ __('back-home') }}</a>
    <form action="{{ route('cards.store') }}" method="POST" class="form_create">
        @csrf
        <table class="table_create">
            <tr>
                <td>{{ __('title') }}</td>
                <td>
                    <input type="text" name='title' class="form-info @error('title') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="title" autofocus>
                    @if ($errors->any())
                        @foreach ($errors->get('title') as $error)
                            <span class="invalid-feedback">{{$error}}</span>
                        @endforeach
                    @endif 
                </td>
            </tr>
            <tr>
                <td>{{ __('description') }}</td>
                <td>
                    <textarea name="description" id="" cols="20" rows="5" class="form-info @error('description') is-invalid @enderror" required autofocus></textarea>
                </td>
            </tr>
            <tr>
                <td>{{ __('photo') }}</td>
                <td>
                    <input class="form-info" type="text" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus placeholder="{{ __('please_write') }}">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="{{ __('Create') }}" class="button" name="create">
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection
