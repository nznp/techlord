@extends('layouts.dashboard')

@section('page_heading','All Tags')
@section('section')

<div class="card card-default">
        <div class="card-header"> Tags</div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Tag Name
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
            </thead>
            <tbody>
                    @if ($tags->count() > 0)
                @foreach ($tags as $tag)
    
                    <tr>
                        <td>
                            {{ $tag->tag }}
                        </td>
                        <td>
                            <a href="{{ route('tag.edit', ['id' => $tag->id ])}}" class="btn btn-xs btn-info">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('tag.delete', ['id' => $tag->id ])}}" class="btn btn-xs btn-danger">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    
                @endforeach
                @else
                <tr>
                        <th colspan="5" class="text-center">No tags!</th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

@stop