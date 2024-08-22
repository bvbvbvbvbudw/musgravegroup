<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
        }
        .footer {
            font-size: 0.9em;
            color: #999;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>New Supplier Form Submission</h1>
    <p>Hello Admin,</p>
    <p>A new supplier has submitted the form with the following details:</p>
    <ul>
        <li><span class="label">Brand Name:</span> {{ $data['brand_name'] }}</li>
        <li><span class="label">Company Name:</span> {{ $data['company_name'] }}</li>
        <li><span class="label">Business Address:</span> {{ $data['business_address'] }}</li>
        <li><span class="label">Phone:</span> {{ $data['mobileTelephone'] }}</li>
        <li><span class="label">Email:</span> {{ $data['applicantEmail'] }}</li>
        <li><span class="label">Is Contact:</span> {{ $data['formData']['33'] }}</li>
        <li><span class="label">Tell About:</span> {{ $data['formData']['7495'] }}</li>
        <li><span class="label">Payment Type:</span> {{ $data['formData']['1312'] }}</li>
        <li><span class="label">Product Name:</span> {{ $data['product_name'] }}</li>
        <li><span class="label">Product Type:</span> {{ $data['type_of_product'] }}</li>
        <li><span class="label">Description:</span> {{ $data['description_few'] }}</li>
        <li><span class="label">Manufacturing Your Product:</span> {{ $data['manufacturing_your_product'] }}</li>
        <li><span class="label">Product Made:</span> {{ $data['product_made'] }}</li>
        <li><span class="label">Market Place:</span> {{ $data['market_place'] }}</li>
        <li><span class="label">Products Similar:</span> {{ $data['products_similar'] }}</li>
        <li><span class="label">Product Fit:</span> {{ $data['product_fit'] }}</li>
        <li><span class="label">Additional Comment:</span> {{ $data['additional_comment'] }}</li>
    </ul>
    <p>Please review the submission at your earliest convenience.</p>
    <p>Best regards,<br>The System</p>
    <div class="footer">
        <p>This is an automated message. Please do not reply directly to this email.</p>
    </div>
</div>
</body>
</html>
