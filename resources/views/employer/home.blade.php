<!-- resources/views/employer/dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Employer Dashboard')

@section('content')
<div class="employer-dashboard">
    <h2>Employer Dashboard</h2>
    
    <div class="stats">
        <div class="stat">
            <h3>Total Jobs Posted</h3>
            <p>{{ $jobCount ?? 0 }}</p>
        </div>
        <div class="stat">
            <h3>Total Applicants</h3>
            <p>{{ $applicantCount ?? 0 }}</p>
        </div>
    </div>

    <div class="actions">
        <a href="{{ route('employer.jobs.create') }}" class="btn btn-primary">Post a New Job</a>
        <a href="{{ route('employer.jobs.index') }}" class="btn btn-secondary">Manage Jobs</a>
    </div>
</div>
@endsection
