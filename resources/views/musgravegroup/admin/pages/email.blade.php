@extends('musgravegroup.admin.base')

@section('title', 'Email Settings')

@section('content')
    <div class="container">
        <h1>Email Settings</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.email.settings.update') }}" method="POST" class="form-email-settings">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="email_address">Email Address</label>
                <input type="email" id="email_address" name="email_address" class="form-control" value="{{ old('email_address', $settings->email_address) }}" placeholder="Enter email address" required>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" id="should_send" name="should_send" class="form-check-input" {{ $settings->should_send ? 'checked' : '' }}>
                <label class="form-check-label" for="should_send">Should send emails</label>
            </div>

            <button type="submit" class="btn btn-primary">Update Settings</button>
        </form>
    </div>

    <style>
        .form-email-settings {
            margin-top: 20px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-check {
            margin-bottom: 20px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
@endsection
