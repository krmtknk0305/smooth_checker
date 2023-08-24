@extends('layouts.layout')

@section('content')
    <h1>座席・部屋名変更</h1>
    <p>登録内容</p>
    @foreach ($seats as $s)
    <tr id="">
        <td id="">{{ $s->seat_name }}</td>
        <td>
            <form action="seats_edit" method="post" class="">
              {{ csrf_field() }}
              <input type="hidden" value="{{$s->id}}" name="seat_id">
              <input type="hidden" value="{{$s->seat_name}}" name="seat_name">
              <input type="submit" value="編集" id="">
            </form>
            <a href="/{{$s->id}}/seats_destroy"><button onclick="return confirm('削除します。よろしいでしょうか？')">削除</button></a>
        </td>
    </tr>
    @endforeach
    <p>座席・部屋を追加する</p>
    <p>登録名を入力</p>
    <form action="seats_create" method="post" class="">
        {{ csrf_field() }}
        <textarea name="seat_name" min="0" maxlength="150" required></textarea><br>
        <input type="submit" value="登録" id="">
    </form>
    <a href ="index">戻る</a>
@endsection
