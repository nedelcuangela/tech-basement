@extends('layouts.app')@section('title', 'Site Roles')

@section('content')

    <div class="col-12 d-flex justify-content-center">
        <div class="col-8 content-pagee">
            <h1>Site Roles</h1>
            <a class="btn btn-primary btn-lg btn-block" href="/roles/create">Add new role</a>

            <hr>

            <table id="table" class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Role</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td class="col-6"><a href="/roles/{{$role->id}}">{{ $role->name }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>


@endsection
