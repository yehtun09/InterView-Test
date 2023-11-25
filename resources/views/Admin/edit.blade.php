@extends('layouts.admin-master')

@section('content')
    <div class="container">

        <div class="row">
            <form action="{{ route('users.update', [$users->id]) }}" method="POST" enctype="multipart/form-data">
                {{-- @method('PUT') --}}
                @csrf
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" value="{{ $users->name }}" name="name">

                <label for="" class="form-label">Employee Code</label>
                <input type="text" class="form-control" value="{{ $users->emp_code }}" name="emp_code">

                <label for="" class="form-label">Email</label>
                <input type="text" class="form-control" value="{{ $users->email }}" name="email">

                <label for="" class="form-lable">Image</label>
                <input type="file" name="img" id="">
                <input type="hidden" name="hd_img" value="{{ $users->img }}">
                <img src="{{ asset('/img/' . $users->img) }}" alt="" style="width: 300px">

                <a class="btn btn-primary" href="{{ url()->previous() }}">Cancel</a>
                <button class="btn btn-success" type="submit">Update</button>
            </form>
        </div>

    </div>
@endsection
