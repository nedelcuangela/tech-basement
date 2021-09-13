@extends('layouts.front')@section('title', 'Site Permissions')

@section('content')

    <div class="col-12 d-flex justify-content-center">
        <div class="col-8">
            <h1>Site Permissions</h1>

            <a class="btn btn-primary btn-lg btn-block" href="permissions/create">Add new permission</a>

            <hr>

            <table id="table" class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Permission</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td class="col-6"><a href="/permissions/{{$permission->id}}">{{ $permission->name }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection