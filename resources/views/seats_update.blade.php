@extends('layouts.layout')

@section('content')
<p>選択された項目</p>
<p>{{ $seat_name }}</p>
<form action="seats_update" method="post" class="">
    <input type="hidden" name="id" value="{{ $id }}">
    {{ csrf_field() }}
    <textarea name="seat_name" min="0" maxlength="150" required>{{ $seat_name }}</textarea>
    <p>この内容に上書きします。よろしいですか？</p>
    <input type="submit" value="登録" id="">
</form>
<input type="button" class="send-button" onclick="history.back()" value="戻る">
@endsection
