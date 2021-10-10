@extends('layouts.app')

@section('content')

            <div class="col-md-3">
              <div class="card mb-2">
                <div class="card-header">
                  POSTS
                </div>
                <div class="card-body">
                  <h1 class="text-center">{{$posts_count}}</h1>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card mb-2">
                <div class="card-header">
                  TRASHED POSTS
                </div>
                <div class="card-body">
                  <h1 class="text-center">{{$trashed_count}}</h1>
                </div>
              </div>
            </div>


            <div class="col-md-3">
              <div class="card mb-2">
                <div class="card-header">
                  USERS
                </div>
                <div class="card-body">
                  <h1 class="text-center">{{$users_count}}</h1>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card mb-2">
                <div class="card-header">
                  CATEGORIES
                </div>
                <div class="card-body">
                  <h1 class="text-center">{{$categories_count}}</h1>
                </div>
              </div>
            </div>

@endsection
