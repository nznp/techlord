@extends('layouts.dashboard')

@section('page_heading','Create Post')
@section('section')

    @include('admin.includes.errors')
    
    <div class="card card-default">
        <div class="card-header">
            Create a new post
        </div>
        <div class="card-body">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">Select Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Select Tags</label>
                        <div class="checkbox">
                                @foreach ($tags as $tag )
                        <label> <input type="checkbox" name="tags[]" for="tags" value="{{$tag->id}}"> {{$tag->tag}} </label>
                                @endforeach
                        </div>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="Submit">
                            Store Post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop