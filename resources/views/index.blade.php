@extends('layouts.layout')

@section('content')
<a href ="courses">コース編集</a>
<a href ="seats">卓番編集</a>
<div>
    @foreach ($timers as $t)
    <tr id="">
        <td>{{ $t->seat_name }}</td>
        <td>{{ $t->course_name }}</td>
        <td>{{ substr($t->start, 0, 5) }}</td>
        <td>{{ substr($t->limit_time, 0, 5) }}</td>
        <td><a href="/{{$t->id}}/timer_clear"><button onclick="return confirm('退店処理を続行します。よろしいでしょうか？')">退店</button></a></td>
    </tr>
    @endforeach
    <p>来店</p>
    <form action="timer_create" method="post" class="">
        {{ csrf_field() }}
        <select name="seat_name" required>
            <option value="" hidden>選択</option>
            @foreach ($seats as $s)
                <option value="{{ $s->seat_name }}">
                  {{ $s->seat_name }}
                </option>
            @endforeach
        </select>
        <select name="course_name" required>
            <option value="" hidden>選択</option>
            @foreach ($courses as $c)
                <option value="{{ $c->course_name }}">
                  {{ $c->course_name }}
                </option>
            @endforeach
        </select>
        <a href="/timer_create"><button>登録</button></a>
    </form>
</div>
<small>作成工数 : 3人日 ※8時間を1人日とする。</small>
@endsection
