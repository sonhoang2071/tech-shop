@extends('admin.layouts.master')
@section('content')
    <div class="container py-5">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="">Trạng thái</label>
                <select name="category_id" class="form-select w-50">
                    <option value="0">Tất cả các nhóm</option>
                        @if (!empty(getAllCategory()))
                            @foreach(getAllCategory() as $item)
                                <option value="{{$item->id}}">{{$item->tenLoai}}</option>
                            @endforeach
                        @endif
                </select>
                @error('soLuong')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
        </form>
    </div>
@endsection
