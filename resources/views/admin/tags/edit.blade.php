@extends('layouts.dashboard')

@section('page_heading','Edit Tag')
@section('section')

    @include('admin.includes.errors')

    <div class="card card-default">
        <div class="card-header">
            Update tag: {{ $tag -> tag}}
        </div>
        <div class="card-body">
            <form action="{{ route('tag.update',['id'=> $tag->id]) }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" name="tag" value="{{$tag->tag}}" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="Submit">
                            Update tag
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop