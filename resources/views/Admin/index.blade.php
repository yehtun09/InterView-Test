@extends('layouts.admin-master')

@section('content')
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Employee Id</th>
                    <th scope="col">email</th>
                    <th scope="col">Img</th>
                    <th scope="">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)


                <tr>
                    <th scope="row">1</th>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->emp_code}}</td>
                    <td>{{ $user->email}}</td>
                    <td> <img src="{{ asset('/img/'.$user->img)}}" alt="" width="300px"></td>
                    <th>
                        <button class="btn btn-primary">Edit</button>
                        <form action="{{ route('user-delete', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </div>
                        </form>
                        {{-- <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button> --}}

                    </th>
                    <a href="{{ asset('/img/'.$user->img)}}" style="width: 100%">
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
