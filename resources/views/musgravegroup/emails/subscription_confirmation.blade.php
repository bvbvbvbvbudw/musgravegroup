<!DOCTYPE html>
<html>
<head>
    <title>Subscription Confirmation</title>
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
            color: #3498db;
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
    <h1>Thank You for Subscribing!</h1>
    <p>You have successfully subscribed to receive notifications about new job vacancies.</p>
    <p><strong>Preferred Categories:</strong> {{ implode(', ', $categories) }}</p>
    <p><strong>Preferred Locations:</strong> {{ implode(', ', $locations) }}</p>
    <p>We will notify you when a job matching your preferences is posted.</p>
    <p>If you have any questions, feel free to contact us anytime.</p>
    <p>Best regards,<br>The {{ config('app.name') }} Team</p>
</div>
<div class="footer">
    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
</div>
</body>
</html>
