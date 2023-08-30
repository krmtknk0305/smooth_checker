@extends('layouts.layout')

@section('content')
<section id="course_create">
    <h2>コース登録・変更</h2>
    <h3>内容確認</h3>
    <div class="confirm_menu">
        <span>この内容で登録します。よろしいですか？</span>
        <form action="courses_store" method="post" class="">
            <input type="hidden" name="course_name" value="{{ $course_name }}">
            {{ csrf_field() }}
            <p>{{ $course_name }}</p>
            <input type="submit" value="登録" id="btn">
        </form>
        <input type="button" class="send-button" id="btn" onclick="history.back()" value="戻る">
    </div>
</section>
@endsection
