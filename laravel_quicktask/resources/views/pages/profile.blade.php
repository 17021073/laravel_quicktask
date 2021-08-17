@extends('layouts.app')

@section('content')
<div class='contain'>
    <a class='btn_back' href="{{ route('home') }}">{{ __('back-home') }}</a>
    <form action="" method="POST" class="form_create">
        @method('PUT')
        @csrf
        <table class="table_create">
            <tr>
                <td>{{ __('username') }}</td>
                <td>
                    <input type="text" name='name' value="{{ $user->name }}" class="form-info @error('title') is-invalid @enderror" required autocomplete="title" autofocus>
                    @if ($errors->any())
                        @foreach ($errors->get('name') as $error)
                            <span class="invalid-feedback">{{$error}}</span>
                        @endforeach
                    @endif 
                </td>

            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input class="form-info @error('title') is-invalid @enderror" value="{{ $user->email }}" type="email" name="email" required autocomplete="email" autofocus>
                    @if ($errors->any())
                        @foreach ($errors->get('email') as $error)
                            <span class="invalid-feedback">{{$error}}</span>
                        @endforeach
                    @endif
                </td>
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
