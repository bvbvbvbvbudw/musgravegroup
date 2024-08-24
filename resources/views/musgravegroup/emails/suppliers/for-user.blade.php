<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
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
    <h1>Thank You for Your Submission</h1>
    <p>Dear {{ $data['name'] }},</p>
    <p>Thank you for submitting your form. We have received the following information:</p>
    <ul>
        <li><span class="label">Brand name:</span> {{ $data['brand_name'] }}</li>
        <li><span class="label">Company name:</span> {{ $data['company_name'] }}</li>
        <li><span class="label">Registered business address:</span> {{ $data['business_address'] }}</li>
        <li><span class="label">Phone number:</span> {{ $data['mobileTelephone'] }}</li>
        <li><span class="label">Name:</span> {{ $data['name'] }}</li>
        <li><span class="label">Email:</span> {{ $data['applicantEmail'] }}</li>
        <li><span class="label">Have contacted Sainsbury's before with this product:</span> {{ $data['formData']['33'] }}</li>
        <li><span class="label">Tell about this product:</span> {{ $data['formData']['7495'] }}</li>
        <li><span class="label">Product name:</span> {{ $data['product_name'] }}</li>
        <li><span class="label">Product type:</span> {{ $data['type_of_product'] }}</li>
        <li><span class="label">Description business:</span> {{ $data['description_few'] }}</li>
        <li><span class="label">Payment type:</span>
            @if($data['formData']['1312'] === 'prepayment')
                Prepayment only
            @elseif($data['formData']['1312'] === 'net')
                NET payment
            @else
                Credit insurance
            @endif
        </li>
        <li><span class="label">Manufacturing product:</span> {{ $data['manufacturing_your_product'] }}</li>
        <li><span class="label">Product made / manufacturing:</span> {{ $data['product_made'] }}</li>
        <li><span class="label">Market place:</span> {{ $data['market_place'] }}</li>
        <li><span class="label">Products similar:</span> {{ $data['products_similar'] }}</li>
        <li><span class="label">Product fit:</span> {{ $data['product_fit'] }}</li>
        <li><span class="label">Additional comment:</span> {{ $data['additional_comment'] }}</li>
    </ul>
    <p>We will review your submission and get back to you soon.</p>
    <p>Best regards,<br>The Team</p>
    <div class="footer">
        <p>If you have any questions, please reply to this email.</p>
    </div>
</div>
</body>
</html>
