<!DOCTYPE html>
<html>
<head>
    <title>New Job Subscription</title>
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
            color: #e74c3c;
        }
        p {
            margin: 15px 0;
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
    <h1>New Job Subscription</h1>
    <p>A new user has subscribed to receive notifications about job vacancies.</p>
    <p><strong>User Email:</strong> {{ $data['applicantEmail'] }}</p>
    <p><strong>Preferred Categories:</strong> {{ implode(', ', $categories) }}</p>
    <p><strong>Preferred Locations:</strong> {{ implode(', ', $locations) }}</p>
    <p>Best regards,<br>{{ config('app.name') }} Notification System</p>
</div>
<div class="footer">
    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
</div>
</body>
</html>
