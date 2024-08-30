@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <!-- Page Header -->
        <div class="row mb-4">
            <div class="col text-center">
                <h1 class="display-4">All Users</h1>
                <p class="lead">Manage and view details of all users.</p>
            </div>
        </div>

        <!-- Table Container -->
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                        <tr>
                            <th class="text-center" style="font-size: 18px;">Name</th>
                            <th class="text-center" style="font-size: 18px;">Email</th>
                            <th class="text-center" style="font-size: 18px;">Role</th>
                            <th class="text-center" style="font-size: 18px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="text-center" style="font-size: 16px;">{{ $user->name }}</td>
                                <td class="text-center" style="font-size: 16px;">{{ $user->email }}</td>
                                <td class="text-center" style="font-size: 16px;">{{ ucfirst($user->role) }}</td>
                                <td class="text-center">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">View</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


@endsection
