@extends('layouts.app')

@section('content')

<div class="card card-default">
        <div class="card-header">Trashed posts</div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Image
                </th>
                <th>
                    Title
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Restore
                </th>
                <th>
                    Destroy
                </th>
            </thead>
            <tbody>
                @if ($posts->count() > 0)
                @foreach ($posts as $post)
    
                <tr>
                    <td>
                        <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px">
                    </td>
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        <a href="{{ route('post.edit', ['id' => $post->id ])}}" class="btn btn-xs btn-info">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('post.restore', ['id' => $post->id ])}}" class="btn btn-xs btn-success">
                            <i class="fa fa-undo" aria-hidden="true"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('post.kill', ['id' => $post->id ])}}" class="btn btn-xs btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                
            @endforeach
            @else
            <tr>
                <th colspan="5" class="text-center">No trashed post!</th>
            </tr>
                @endif
                
            </tbody>
        </table>
    </div>
</div>

@stop