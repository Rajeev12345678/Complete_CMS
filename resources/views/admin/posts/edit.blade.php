@extends('layouts.app')

@section('content')
@include('admin.includes.errors')
  <div class="card">
      <div class="card-header">
        Edit post: {{$post->title}}
      </div>

      <div class="card-body">
        <form action="{{route('post.update', ['id' => $post->id])}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control mb-2" value="{{$post->title}}">
          </div>

          <div class="form-group">
            <label for="featured">Featured Image</label>
            <input type="file" name="featured" class="form-control mb-2">
          </div>

          <div class="form-group">
            <label for="category">Select a category</label>
            <select name="category_id" id="category" class="form-control">
              @foreach($categories as $category)
              <option value="{{$category->id}}"
                @if($post->category_id == $category->id)
                selected
                @endif
                >{{$category->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="tags"class="mb-2">Select tags</label>
            @foreach($tags as $tag)
            <div class="checkbox">
                <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="mb-2"
                  @foreach($post->tags as $t)
                  @if($tag->id == $t->id)
                  checked
                  @endif
                  @endforeach
                  > {{$tag->tag}}</label>
          </div>
          @endforeach
          </div>

          <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="5" rows="5" class="form-control mb-2">{{$post->content}}</textarea>
          </div>

          <div class="form-group">
            <div class="text-center">
              <button class="btn btn-success" type="submit">
                Update Post
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
