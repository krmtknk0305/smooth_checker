@extends('layouts.layout')

@section('content')
    <h1>コース登録・変更</h1>
    <p>登録内容</p>
    @foreach ($courses as $c)
    <tr id="">
        <td id="">{{ $c->course_name }}</td>
        <td>
            <form action="courses_edit" method="post" class="">
              {{ csrf_field() }}
              <input type="hidden" value="{{$c->id}}" name="course_id">
              <input type="hidden" value="{{$c->course_name}}" name="course_name">
              <input type="submit" value="編集" id="">
            </form>
            <a href="/{{$c->id}}/courses_destroy"><button onclick="return confirm('削除します。よろしいでしょうか？')">削除</button></a>
        </td>
    </tr>
    @endforeach
    <p>コースを追加する</p>
    <p>登録名を入力</p>
    <form action="courses_create" method="post" class="">
        {{ csrf_field() }}
        <textarea name="course_name" min="0" maxlength="150" required></textarea><br>
        <input type="submit" value="登録" id="">
    </form>
    <a href ="index">戻る</a>
@endsection
