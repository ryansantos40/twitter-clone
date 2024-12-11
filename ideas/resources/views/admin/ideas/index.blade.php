
@extends('layout.layout')

@section('title', 'Ideas | Admin')

@section('content')
<div class="row">
    <div class="col-3">
        @include('admin.shared.left-sidebar')
    </div>
    <div class="col-9">
        <h1>Ideas</h1>
        <table class="table table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Content</th>
                    <th>Created At</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ideas as $idea)    
                <tr>
                    <td>{{ $idea->id }}</td>
                    <td> <a href="{{ route('users.show', $idea->user) }}">{{ $idea->user->name }}</a></td>
                    <td>{{ $idea->content }}</td>
                    <td>{{ $idea->created_at->toDateString() }}</td>
                    <td>
                        <a href="{{ route('ideas.show', $idea->id) }}">View</a>
                        <a href="{{ route('ideas.edit', $idea->id) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{-- {{ $users->links() }} --}}
        </div>
    </div>
</div>
@endsection