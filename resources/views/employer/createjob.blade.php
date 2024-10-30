<!-- resources/views/employer/create_job.blade.php -->
@extends('layouts.app')

@section('title', 'Post a New Job')

@section('content')
<div class="create-job">
    <h2>Post a New Job</h2>

    <form action="{{ route('employer.jobs.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Job Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Job Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="requirements">Requirements</label>
            <textarea name="requirements" id="requirements" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" id="salary" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Post Job</button>
    </form>
</div>
@endsection
