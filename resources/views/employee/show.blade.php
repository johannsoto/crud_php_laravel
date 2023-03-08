@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? 'Show Employee' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Employee</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $employee->name }}
                        </div>
                        <div class="form-group">
                            <strong>Document Type:</strong>
                            {{ $employee->document_type }}
                        </div>
                        <div class="form-group">
                            <strong>Document Number:</strong>
                            {{ $employee->document_number }}
                        </div>
                        <div class="form-group">
                            <strong>Position:</strong>
                            {{ $employee->position }}
                        </div>
                        <div class="form-group">
                            <strong>Department:</strong>
                            {{ $employee->department }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
