<!-- resources/views/employer/edit_job.blade.php -->
@extends('layouts.app')

@section('title', 'Edit Job')

@section('content')
<div class="edit-job">
    <h2>Edit Job</h2>

    <form action="{{ route('employer.jobs.update', $job->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Job Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $job->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Job Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ $job->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="requirements">Requirements</label>
            <textarea name="requirements" id="requirements" class="form-control" rows="4" required>{{ $job->requirements }}</textarea>
        </div>

        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" id="salary" class="form-control" value="{{ $job->salary }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Job</button>
    </form>
</div>
@endsection
