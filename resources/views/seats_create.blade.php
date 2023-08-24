@extends('layouts.layout')

@section('content')
<p>この内容で登録します。よろしいですか？</p>
<form action="seats_store" method="post" class="">
    <input type="hidden" name="seat_name" value="{{ $seat_name }}">
    {{ csrf_field() }}
    <p>{{ $seat_name }}</p>
    <input type="submit" value="登録" id="">
</form>
<input type="button" class="send-button" onclick="history.back()" value="戻る">
@endsection
