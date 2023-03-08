@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>User List</h1>
                <form action="{{ route('users.search') }}" method="GET">
                    <div class="form-group">
                        <input type="text" class="form-control" name="query" placeholder="Search products...">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <a href="{{ route('users.edit', ['id' => $user->id]) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
                                    <form method="post" action="{{ route('users.destroy', ['id' => $user->id]) }}"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
