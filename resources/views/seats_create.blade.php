@extends('layouts.layout')

@section('content')
<section id="seat_create">
    <h2>座席・部屋名変更</h2>
    <h3>登録内容</h3>
    <div class="confirm_menu">
        <span>この内容で登録します。よろしいですか？</span>
        <form action="seats_store" method="post" class="">
            <input type="hidden" name="seat_name" value="{{ $seat_name }}">
            {{ csrf_field() }}
            <p>{{ $seat_name }}</p>
            <input type="submit" value="登録" id="btn">
        </form>
        <input type="button" class="send-button" id="btn" onclick="history.back()" value="戻る">
    </div>
</section>
@endsection
