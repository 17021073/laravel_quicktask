@extends('layouts.app')

@section('content')
<div class='contain'>
    <a class='btn_back' href="">{{ __('back-home') }}</a>
    <form action="" method="POST" class="form_create">
        <table class="table_create">
            <tr>
                <td>{{ __('title') }}</td>
                <td><input type="text" name='title' class='form-info'></td>
            </tr>
            <tr>
                <td>{{ __('description') }}</td>
                <td><textarea name="description" id="" cols="20" rows="5" class="form-info"></textarea></td>
            </tr>
            <tr>
                <td>{{ __('photo') }}</td>
                <td><input class="form-info" type="text" name='image' placeholder="{{ __('please_write') }}"></td>
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
