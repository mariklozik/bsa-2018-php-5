<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Most Changed Currencies</title>
</head>
<body>
<h1>Most Changed Currencies</h1>

<table>
    <tbody>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Daily % change</th>
        </tr>
    <tr>
        <td>{{ $currency['id'] }}</td>
        <td>{{ $currency['name'] }}</td>
        <td>{{ $currency['price'] }}</td>
        <td>{{ $currency['percent_change'] }}</td>
    </tr>
    </tbody>
    </table>

    </body>

    <style>
        html {
            font-family: arial, sans-serif;
        }
        h1 {
            text-align: center;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
        }
        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        th {
            border-bottom: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        td{
            padding: 10px;
            text-align: center;
        }
    </style>

    </html>
