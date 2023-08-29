@extends('layouts.layout')

@section('content')
<section id="course">
    <h2>コース登録・変更</h2>
    <h3>登録内容</h3>
    @foreach ($courses as $c)
    <div class="course_table">
        <table>
            <tr>
                <td id="td_name">{{ $c->course_name }}</td>
                <td>
                    <form action="courses_edit" method="post" class="">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$c->id}}" name="course_id">
                    <input type="hidden" value="{{$c->course_name}}" name="course_name">
                    <input type="submit" value="編集" id="tab">
                    </form>
                    <a href="/{{$c->id}}/courses_destroy"><button onclick="return confirm('削除します。よろしいでしょうか？')">削除</button></a>
                </td>
            </tr>
        @endforeach
        </table>
    </div>
    <h3>コースを追加する</h3>
    <div class="edit_course">
        <p>ご希望のコース名を入力して下さい。</p>
        <form action="courses_create" method="post" class="">
            {{ csrf_field() }}
            <textarea name="course_name" min="0" maxlength="150" required></textarea><br>
            <input type="submit" value="登録" id="btn">
        </form>
        <a href ="index"><button id="btn">TOPへ戻る</button></a>
    </div>
</section>
@endsection
