@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('post.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Title <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="title" value="{{ old('title', $post->title) }}" />
            </div>
            <div class="mb-3">
                <label>Image <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="image" />
                <div class="form-text">
                    <img src="{{ $post->image() }}" height="75" />
                </div>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="10">{{ old('description', $post->description) }}</textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
                <a class="btn btn-danger" href="{{ route('post.index') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection