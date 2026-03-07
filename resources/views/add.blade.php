@extends('layout.layout')
@section('title', 'สร้างบทความ')
@section('content')
@section('subtitle', 'คำบรรยาย')

    <h1>หน้าสร้างบทความ</h1>

    <form action="/create" method="POST">
        @csrf
        <div>
            <label for="exampleFormControlInput1" class="form-label">title</label>
            <input type="text" name='title' class="form-control" id="exampleFormControlInput1" placeholder="กรอกชื่อเรื่อง" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">content</label>
            <input type="text" name='content' class="form-control" id="exampleFormControlInput1" placeholder="กรอกเนื้อหา" required>
        </div>

         <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">subtitle</label>
            <input type="text" name='subtitle' class="form-control" id="exampleFormControlInput1" placeholder="คำบรรยาย" required>
        </div>

        <label for="exampleFormControlInput1" class="form-label">สถานะ</label>
        <select class="form-select" aria-label="Default select example" name='status'>

            <option value="1">เผยเเพร่</option>
            <option value="0">ฉับบร่าง</option>
        </select>
        <a href="/blog" class="btn btn-primary">ย้อนกลับ</a>
        <button type = 'submit' class="btn btn-primary">
            สร้าง
        </button>
    </form>
@endsection
