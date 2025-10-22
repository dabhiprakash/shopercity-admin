<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px 0;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            font-size: 0.8em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Message</h2>
        </div>
        <div class="content">
            <p><strong>First Name:</strong> {{ $first_name }}</p>
            <p><strong>Last Name:</strong> {{ $last_name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Message:</strong>
            {{ $body_message }}
            </p>
        </div>
        <div class="footer">
            <p>This is an automated message, please do not reply directly to this email.</p>
        </div>
    </div>
</body>
</html>
