@extends('layout.layout')
@section('title', 'สร้างบทความ')
@section('content')
@section('subtitle', 'คำบรรยาย')

<h1>แก้ไขบทความ</h1>

<form action ="/update/{{ $blog->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="กรอกชื่อเรื่อง" required
            name= 'title' value="{{ $blog->title }}">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">content</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="กรอกเนื้อหา" required
            name= 'content' value="{{ $blog->content }}">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">subtitle</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="คำบรรยาย" required
                name= 'subtitle' value="{{ $blog->subtitle }}">


            <select class="form-select" aria-label="Default select example" name='status'value="{{ $blog->status }}">

                <option value="1">เผยเเพร่</option>
                <option value="0">ฉับบร่าง</option>
            </select>
        </div>
        <a href="/blog" class="btn btn-primary">ย้อนกลับ</a>
        <button type = 'submit' class="btn btn-primary">
            บันทึก
        </button>
</form>
@endsection
