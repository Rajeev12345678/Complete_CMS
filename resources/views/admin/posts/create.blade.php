@extends('layouts.app')

@section('content')
@include('admin.includes.errors')
  <div class="card">
      <div class="card-header">
        Create a new post
      </div>

      <div class="card-body">
        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control mb-2">
          </div>

          <div class="form-group">
            <label for="featured">Featured Image</label>
            <input type="file" name="featured" class="form-control mb-2">
          </div>

          <div class="form-group">
            <label for="category">Select a category</label>
            <select name="category_id" id="category" class="form-control mb-2">
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="tags"class="mb-2">Select tags</label>
            @foreach($tags as $tag)
            <div class="checkbox">
                <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="mb-2"> {{$tag->tag}}</label>
          </div>
          @endforeach
          </div>

          <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="5" rows="5" class="form-control mb-2"></textarea>
          </div>

          <div class="form-group">
            <div class="text-center">
              <button class="btn btn-success" type="submit">
                Store Post
              </button>
            </div>
          </div>
        </form>
      </div>
  </div>
@stop

@section('styles')
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@stop

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
        $('#content').summernote();
    });
</script>
@stop
