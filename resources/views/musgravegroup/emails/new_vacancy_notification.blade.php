<!DOCTYPE html>
<html>
<head>
    <title>New Vacancy: {{ $vacancy->title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2ecc71;
        }
        p {
            margin: 15px 0;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #3498db;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            color: #888;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>New Job Vacancy: {{ $vacancy->title }}</h1>
    <p><strong>Location:</strong> {{ $vacancy->location->location }}</p>
    <p><strong>Category:</strong> {{ $vacancy->category->category }}</p>
    <p><strong>Description:</strong></p>
    <p>{!! $vacancy->content->content !!}</p>
    <p><a href="{{ $vacancy->url }}" class="btn">View Details</a></p>
    <p>Best regards,<br>The {{ config('app.name') }} Team</p>
</div>
<div class="footer">
    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
</div>
</body>
</html>
