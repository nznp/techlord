@extends('layouts.dashboard')

@section('content')
<div class="card card-default">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        Welcome!
    </div>
</div>
@endsection
