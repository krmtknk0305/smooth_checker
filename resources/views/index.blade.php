@extends('layouts.layout')

@section('content')
<div class="edit_btn">
    <a href ="courses"><button" id="btn">コース名編集</button></a>
    <a href ="seats"><button id="btn">テーブル番号編集</button></a>
</div>
<section id="index">
    <table>
        <th>テーブル番号</th>
        <th>コース名</th>
        <th>ご来店時刻</th>
        <th>ラストオーダー</th>
        <th>退店チェック</th>
        @foreach ($timers as $t)
        <tr>
            <td>{{ $t->seat_name }}</td>
            <td>{{ $t->course_name }}</td>
            <td>{{ substr($t->start, 0, 5) }}</td>
            <td>{{ substr($t->limit_time, 0, 5) }}</td>
            <td><a href="/{{$t->id}}/timer_clear"><button id="btn" onclick="return confirm('退店処理を続行します。よろしいでしょうか？')">退店</button></a></td>
        </tr>
        @endforeach
    </table>
    <div class="in">
        <p>ご来店登録</p>
        <form action="timer_create" method="post" class="">
            {{ csrf_field() }}
            <select class="select_btn" name="seat_name" required>
                <option value="" hidden>選択</option>
                @foreach ($seats as $s)
                    <option value="{{ $s->seat_name }}">
                    {{ $s->seat_name }}
                    </option>
                @endforeach
            </select>
            <select class="select_btn" name="course_name" required >
                <option value="" hidden>選択</option>
                @foreach ($courses as $c)
                    <option value="{{ $c->course_name }}">
                    {{ $c->course_name }}
                    </option>
                @endforeach
            </select>
            <a href="/timer_create"><button id="btn">登録</button></a>
        </form>
    </div>
</section>
@endsection
