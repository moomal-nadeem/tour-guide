<html>
    <head>
    <title>Schedule - Get Your Tour Guide Uae</title>
    </head>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .invoice-container {
            background-color: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
            padding: 1.5rem;
            max-width: 20rem;
            margin: auto;
            margin-top: 2rem;
        }

        .company-name {
            font-weight: bold;
            font-size: 1.25rem;
            color: #2563eb;
            text-align: center;
            margin-bottom: 1rem;
        }

        .separator {
            border: 1px solid #e2e8f0;
            margin-bottom: 1rem;
        }

        .bill-to {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .bill-to div {
            color: #4a5568;
        }

        .bill-details {
            margin-bottom: 1rem;
        }

        .bill-details table {
            width: 100%;
            margin-bottom: 0.5rem;
            border-collapse: collapse;
        }

        .bill-details th,
        .bill-details td {
            border: 1px solid #e2e8f0;
            padding: 0.5rem;
            text-align: left;
        }

        .bill-details th {
            font-weight: bold;
            color: #4a5568;
        }

        .booked-dates,
        .schedule {
            color: #4a5568;
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="company-name">GYTG-UAE</div>
        <div class="separator"></div>

        <div class="bill-details">
            <div class="bill-to">
                <h1>Invoice</h1>
                <div>
                    <div>Date: {{$deal->created_at}}</div>
                    <div>Invoice #: {{$deal->invoice}}</div>
                </div>
            </div>

            <h2>Bill To:</h2>
            <div class="text-gray-700 mb-1">{{$deal->name}}</div>
            <div class="text-gray-700 mb-1">{{$deal->pno}}</div>
            <div class="text-gray-700 mb-1">{{$deal->email}}</div>

            <table class="w-full mb-1">
                <thead>
                    <tr>
                        <th class="text-left font-bold text-gray-700">Description</th>
                        <th class="text-right font-bold text-gray-700">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left text-gray-700">Days {{$deal->days}}</td>
                        <td class="text-right text-gray-700">{{$deal->total}} AED</td>
                    </tr>
                </tbody>
            </table>

            <div class="booked-dates"><b>Booked Dates :</b>  {{$deal->dated}}</div>
            <div class="schedule"><b>Schedule :</b> {{$deal->schedule}}</div>
        </div>
    </div>
</body>
</html>
