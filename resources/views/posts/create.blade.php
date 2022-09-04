@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="caption" class="col-form-label text-md-end">Bạn đang nghĩ gì?</label>

                    <input id="caption" 
                    type="text" 
                    class="form-control @error('caption') is-invalid @enderror" 
                    name="caption" value="{{ old('caption') }}" 
                    autocomplete="caption" autofocus>
                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="caption" class="col-form-label text-md-end">Đăng ảnh</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-3">
                    <button class="btn btn-primary">Thêm Tin Mới</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection