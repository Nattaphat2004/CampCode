@extends('layouts.app')
@section('title', 'บทความ')

@section('content')
    @if (count($blogs) > 0)
    <h1 class="text text-center py-2">บทความทั้งหมด</h1>
    <br>
    <table class="table table-bordered text-center">
        <thead>
            <tr class="table">
                <th scope="col">ชื่อบทความ</th>
                <th scope="col">เนื้อหา</th>
                <th scope="col" style="width: 200px">สถานะ</th>
                <th scope="col">จัดการบทความ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr class="table">
                    {{-- ชื่อ title, content มาจาก ชื่อใน database --}}
                    <td>{{ $item->title }}</td>
                    {{-- สำหรับต้องการแสดงผล 10 ตัว --}}
                    <td>{{ Str::limit($item->content, 0) }}</td>
                    <td>
                        @if ($item->status == true)
                            <a href="{{ route('change', $item->id) }}" class="btn btn-success">เผยแพร่</a>
                        @else
                            <a href="{{ route('change', $item->id) }} " class="btn btn-warning">ไม่เผยแพร่</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('edit', $item->id) }}" class="btn btn-primary" style="margin-right: 5px">
                            แก้ไข
                        </a>
                        <a href="{{ route('delete', $item->id) }}" class="btn btn-danger"
                            onclick="return confirm ('ต้องการลบ {{ $item->title }} ใช่ไหมไอแม่เยส')">ลบ
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $blogs->links() }}

    @else
        <h2 class="text text-center py-2">ไม่มีบทความ</h2>
        <a href="{{ route('create') }}" class="btn btn-primary">สร้างบทความ</a>
        <a href="/blog" class="btn btn-secondary">ย้อนกลับ</a>
    @endif
@endsection
