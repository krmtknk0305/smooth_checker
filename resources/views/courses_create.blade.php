@extends('layouts.layout')

@section('content')
<p>この内容で登録します。よろしいですか？</p>
<form action="courses_store" method="post" class="">
    <input type="hidden" name="course_name" value="{{ $course_name }}">
    {{ csrf_field() }}
    <p>{{ $course_name }}</p>
    <input type="submit" value="登録" id="">
</form>
<input type="button" class="send-button" onclick="history.back()" value="戻る">
@endsection
