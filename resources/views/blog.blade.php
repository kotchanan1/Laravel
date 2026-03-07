@extends('layout.layout')
@section('title', 'หน้าบทความ')
@section('content')
@section('subtitle', 'คำบรรยาย')

    <h1>หน้า blog </h1>

    <a href="/add" class="btn btn-success mb-3">สร้างบทความ</a>
    <table class="table caption-top">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ชื่อบทความ</th>
                <th scope="col">เนื้อหา</th>
                <th scope="col">สถานะ</th>
                <th scope="col">คำบรรยาย</th>
                <th scope="col">เครื่องมือ</th>

            </tr>
        </thead>
        <tbody>
            {{-- เริ่มต้น --}}
            @foreach ($blogs as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->subtitle }}</td>
                    <td>
                        @if ($item->status)
                            <a>เผยแพร่</a>
                        @else
                            <a>ฉับบร่าง</a>
                        @endif
                    </td>
                    <td>
                        <a href="/edit/{{ $item->id }}" class="btn btn-primary">แก้ไข</a>
                        <form action='/delete/{{ $item->id }}' method="POST">
                            @csrf
                            @method('DELETE')
                            <button type = "submit" class="btn btn-danger">
                                ลบ
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
            {{-- สิ้นสุด --}}
        </tbody>
    </table>
@endsection
