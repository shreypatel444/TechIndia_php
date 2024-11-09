<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .payment-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h2 {
            color: #333;
            margin-bottom: 1rem;
        }
        .qr-code-container {
            margin-top: 1rem;
        }
        .qr-code-container img {
            width: 200px;
            height: 200px;
            margin-top: 1rem;
        }
    </style>
</head>
<body>

    <div class="payment-container">
        <h2>Payment Details</h2>
        
        <!-- Display Your Name -->
        <p><strong>Name:</strong> SHREY MUKESHBHAI PATEL</p>

        <!-- Display QR Code -->
        <div class="qr-code-container">
            <p>Scan the QR code to pay:</p>
            <img src="../img/qr.jpg" alt="UPI QR Code">
        </div>
    </div>

</body>
</html>
