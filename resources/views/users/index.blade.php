@extends('layouts.app')
@section('content')

    <div class="users-container container">
        <div class="cont-title">
            <p class="user-list-c-title">User List</p>
        </div>
        <div class="row justify-content-center mb-5">
             @foreach($users as $user)
                <div class="card card_users">
                    <div class="card-header">Details for {{ $user->name }}</div>

                    @if(session('success'))
                        <div class="alert alert-primary">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                            @method('DELETE')
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <p><strong>Name:</strong> {{ $user->name }}</p>
                                    <p><strong>Email:</strong> {{ $user->email }}</p>
                                    <p><strong>Role:</strong> @if($user->role_id == 1) Admin @else Client)@endif</p>
                                </div>
                            </div>
                            <hr>
                            <button class="btn btn-danger" type="submit">Delete</button>
                            <a class="btn btn-primary" href="/users/{{ $user->id }}/edit">Edit</a>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


