@extends('admin.layouts.master')
@section('content')
    <div class="container py-5">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="">Trạng thái</label>
                <select name="category_id" class="form-select w-50">
                    <option value="public function getList($id=null) {
        if(!empty($id)) {
            $orders = DB::table($this->table)
            ->where('user_id','=',$id)
            ->orderBy('created_at','DESC')
            ->get();
        }
        else {
            $orders = DB::table($this->table)
            ->orderBy('created_at','DESC')
            ->get();
        }
        return $orders;
    }"></option>
                        {{-- @if ()
                            @foreach(getAllCategory() as $item)
                                <option value="{{$item->id}}">{{$item->tenLoai}}</option>
                            @endforeach
                        @endif --}}
                </select>
                @error('soLuong')
                    <span style="color: red">{{$message}}</span>
                @enderror
            </div>
        </form>
    </div>
@endsection
