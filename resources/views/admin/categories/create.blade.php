@extends('layouts.dashboard')

@section('page_heading','Create Category')
@section('section')
    
    @include('admin.includes.errors')

    <div class="card card-default">
        <div class="card-header">
            Create a new category
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="Submit">
                            Store Category
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop