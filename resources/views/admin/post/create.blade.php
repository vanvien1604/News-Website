@extends('layouts.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tạo mới bài viết</h3>
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
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('Post.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tiêu đề</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nhập dữ liệu...">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Mô tả</label>
          <input type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Nhập dữ liệu...">
        </div>
        <div class="form-group">
            <label for="img">File image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name="img" class="form-control-file" id="img">
                <label class="custom-file-label" for="img">Choose file</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nội dung</label>
            <textarea id="content" name="noidung" style="width: 100%; height: 300px; border-color: #ccc;" placeholder="Nhập dữ liệu..."></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tác giả</label>
            <input type="text" name="tac_gia" class="form-control" id="exampleInputEmail1" placeholder="Nhập dữ liệu...">
          </div>
          <div class="form-group">
            <label for="exampleSelect1">Thuộc</label>
            <select class="form-control" id="exampleSelect1" name="categories_id">
                @foreach ($Categories as $key => $view_dm)
                    <option value="{{ $view_dm->id }}">{{ $view_dm->name }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleSelect1">Tin nóng</label>
            <select class="form-control" id="exampleSelect1" name="thinh_hanh">
              <option value="0">Không</option>
              <option value="1">Có</option>
            </select>
          </div>
        <div class="form-group">
          <label for="exampleSelect1">Trạng thái</label>
          <select class="form-control" id="exampleSelect1" name="status">
            <option value="1">Hiển thị</option>
            <option value="0">Không hiển thị</option>
          </select>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm mới</button>
      </div>
    </form>
  </div>
@endsection