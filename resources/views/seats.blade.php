@extends('layouts.layout')

@section('content')
<section class="menu">
    <h2>座席・部屋名変更</h2>
    <h3>登録内容</h3>
    <div class="menu_table">
        @foreach ($seats as $s)
        <table>
            <tr>
                <td id="td_name">{{ $s->seat_name }}</td>
                <td>
                    <form action="seats_edit" method="post" class="">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$s->id}}" name="seat_id">
                    <input type="hidden" value="{{$s->seat_name}}" name="seat_name">
                    <input type="submit" value="編集" id="tab">
                    </form>
                    <a href="/{{$s->id}}/seats_destroy"><button onclick="return confirm('削除します。よろしいでしょうか？')">削除</button></a>
                </td>
            </tr>
        </table>
        @endforeach
    </div>
    <h3>座席・部屋を追加する</h3>
    <div class="edit_menu">
        <p>ご希望の座席・部屋名や番号を入力して下さい。</p>
        <form action="seats_create" method="post" class="">
            {{ csrf_field() }}
            <textarea name="seat_name" min="0" maxlength="150" required></textarea><br>
            <input type="submit" value="登録" id="btn">
        </form>
        <a href ="index"><button id="btn">TOPへ戻る</button></a>
    </div>
</section>
@endsection
