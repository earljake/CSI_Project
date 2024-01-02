<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/tablestyle.css') }}">
</head>
<body>
    <button class="backbtn">Back</button>

    @csrf

<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Customer Category</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Mobile Number</th>
            <th>Company Name</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td>
                @if ($data->category == 1)
                        Residential
                    @elseif ($data->category == 2)
                        Commercial
                        @elseif ($data->category == 3)
                        Government

                    @else
                    @endif
                    </td>
                <td>{{ $data->lastname }}</td>
                <td>{{ $data->firstname }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->phone_number }}</td>
                <td>{{ $data->company_name }}</td>               
            </tr>
            @endforeach
        <tbody>
    </table>
</div>
</body>
</html>
