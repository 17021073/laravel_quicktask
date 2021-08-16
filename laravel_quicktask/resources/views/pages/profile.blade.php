@extends('layouts.app')

@section('content')
<div class='contain'>
    <a class='btn_back' href="">{{ __('back-home') }}</a>
    <form action="" method="POST" class="form_create">
        @csrf
        <table class="table_create">
            <tr>
                <td>{{ __('username') }}</td>
                <td><input type="text" name='name' value="" class='form-info'></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input class="form-info" value="" type="email" name="email"></td>
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
