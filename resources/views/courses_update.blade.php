@extends('layouts.layout')

@section('content')
<section id="course_update">
    <h2>コース登録・変更</h2>
    <h3>内容確認</h3>
    <div class="confirm_course">
        <span>選択された項目</span>
        <p>{{ $course_name }}</p>
        <form action="courses_update" method="post" class="">
            <input type="hidden" name="id" value="{{ $id }}">
            {{ csrf_field() }}
            <textarea name="course_name" min="0" maxlength="150" required>{{ $course_name }}</textarea>
            <span><br>この内容に上書きします。よろしいですか？</span>
            <input type="submit" value="登録" id="btn">
        </form>
        <input type="button" class="send-button" id="btn" onclick="history.back()" value="戻る">
    </div>
</section>
@endsection
