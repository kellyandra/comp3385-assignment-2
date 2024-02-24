@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h2>Feedback Form</h2>
        <form action="{{ url('/feedback') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <small class="text-danger">(Required)</small>
                <input type="text" class="form-control" id="name" name="name" required>
                
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <small class="text-danger">(Required)</small>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label">Comments</label>
                <small class="text-danger">(Required)</small>
                <textarea class="form-control" id="Comments" name="Comments" rows="3" required></textarea>
            </div>
            <div class="mb-3">
            <label for="closing sentence" class="form-label">Let us know what you think of our website.</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection