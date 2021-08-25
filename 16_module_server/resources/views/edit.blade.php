@extends('lay.app')

@section('main')
<div class="navbar bg-primary">
    <div class="container">
        <a class="navbar-brand text-white" href="/">
            Yuk Pilih
        </a>
        <div class="d-flex">
            <a href="/user" class="btn btn-warning mx-2">User</a>
            <a href="/division" class="btn btn-warning mx-2">Division</a>
            <a href="/suggest" class="btn btn-warning mx-2">Suggest Poll</a>
            <a href="/logout" class="btn btn-danger mx-2">Logout</a>
        </div>
    </div>
</div>

<div class="content mt-5">
    <div class="container">
    <h2>Update User</h1>
    @foreach($polls as $poll)
        <form action="/poll/{{ $poll->id }}/update" method="post">
                @csrf
                <div class="form-group mt-2">
                    <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $poll->name }}" required>
                    </div>
                    <div class="form-group">
                    <label >Description</label>
                    <input type="text" class="form-control" name="description" value="{{ $poll->username }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                </div>
                </form>
                @endforeach
    </div>
</div>