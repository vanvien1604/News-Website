@extends('layouts.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Cập nhật bài viết</h3>
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
    <form method="POST" action="{{ route('Post.update',[$Post->id]) }}" enctype="multipart/form-data">
        @method("PUT")
        @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Tiêu đề</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $Post->name }}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Mô tả</label>
            <input type="text" name="description" class="form-control" id="exampleInputEmail1" value="{{ $Post->description }}">
          </div>
          <div class="form-group">
            <label for="img">File image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" name="img" class="form-control-file" id="img">
                <label class="custom-file-label" for="img">Choose file</label>
              </div>
              <img height="100px" width="80px" src="{{ asset('backend/uploads/'.$Post->img) }}" alt="">
            </div>
          </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nội dung</label>
              <textarea id="content" name="noidung" style="width: 100%; height: 300px; border-color: #ccc;">{{ $Post->noidung }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tác giả</label>
              <input type="text" name="tac_gia" class="form-control" id="exampleInputEmail1" value="{{ $Post->tac_gia }}">
            </div>
            <div class="form-group">
              <label for="exampleSelect1">Thuộc</label>
              <select class="form-control" id="exampleSelect1" name="categories_id">
                  @foreach ($Categories as $key => $view_dm)
                      <option value="{{ $view_dm->id }}" {{ old('categories_id', $Post->categories_id) == $view_dm->id ? 'selected' : '' }}>
                          {{ $view_dm->name }}
                      </option>
                  @endforeach
              </select>
          </div>
          <div class="form-group">
            <label for="exampleSelect1">Tin nóng</label>
            <select class="form-control" id="exampleSelect1" name="thinh_hanh">
              <option value="1" {{ old('thinh_hanh', $Post->thinh_hanh) == 1 ? 'selected' : '' }}>Có</option>
              <option value="0" {{ old('thinh_hanh', $Post->thinh_hanh) == 0 ? 'selected' : '' }}>Không</option>
            </select>
          </div>
        <div class="form-group">
          <label for="exampleSelect1">Trạng thái</label>
          <select class="form-control" id="exampleSelect1" name="status">
            <option value="1" {{ old('status', $Post->status) == 1 ? 'selected' : '' }}>Hiển thị</option>
            <option value="0" {{ old('status', $Post->status) == 0 ? 'selected' : '' }}>Không hiển thị</option>
          </select>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
      </div>
    </form>
  </div>
@endsection