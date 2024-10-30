<!-- resources/views/employer/manage_jobs.blade.php -->
@extends('layouts.app')

@section('title', 'Manage Jobs')

@section('content')
<div class="manage-jobs">
    <h2>Manage Jobs</h2>
    
    @if($jobs->isEmpty())
        <p>No jobs found. <a href="{{ route('employer.jobs.create') }}">Post a new job</a>.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Applicants</th>
                    <th>Posted Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->applicants_count ?? 0 }}</td>
                        <td>{{ $job->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('employer.jobs.edit', $job->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('employer.jobs.destroy', $job->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
