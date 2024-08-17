@extends('layouts.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Danh sách bài viết</h3>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Mô tả</th>
            <th scope="col-5">Ảnh</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Tác giả</th>
            <th scope="col">Thuộc</th>
            <th scope="col">Tin nóng</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Thời gian tạo</th>
            <th scope="col">Thời gian cập nhật</th>
            <th scope="col">Hành động</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($Post as $key => $cate)
          <tr>
            <td scope="row">{{ $key }}</td>
            <td>{{ $cate->name }}</td>
            <td>{{ $cate->description }}</td>
            <td style="width: 130px;"><img src="{{ asset('backend/uploads/'.$cate->img) }}" alt="{{ $cate->name }}"></td>
            <td>{{ $cate->noidung }}</td>
            <td>{{ $cate->tac_gia }}</td>
            <td>{{ $cate->category->name }}</td>
            <td>
              @if($cate->thinh_hanh==1)
              <span class="text text-success">Có</span>
              @else
              <span class="text text-danger">Không</span>
              @endif
          </td>
            <td>
                @if($cate->status==1)
                <span class="text text-success">Hiển thị</span>
                @else
                <span class="text text-danger">Không hiển thị</span>
                @endif
            </td>
            <td>{{ $cate->created_at }}</td>
            <td>{{ $cate->updated_at }}</td>
            <td>
              <div class="btn-group">
                <a class="btn btn-warning mx-1" href="{{ route('Post.edit',[$cate->id]) }}">Sửa</a>
                  <form onsubmit="return confirm('Bạn có muốn xóa hàng này không ?')" action="{{ route('Post.destroy',[$cate->id]) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <input type="submit" class="btn btn-danger" value="Xóa">
                  </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@endsection