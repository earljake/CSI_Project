<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Masterlist</title>
    <link rel="stylesheet" href="{{ asset('css/tablestyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    @csrf

    <div class="topnav">
        <div class="search-container">
            <form action="/search" method="get">
                <input type="text" placeholder="Search..." name="q">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Category</th>                   
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                 
                
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->custom_id }}</td>
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
                        <td>{{ $data->firstname }}</td>
                        <td>{{ $data->lastname }}</td>
                        <td>{{ $data->company_name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone_number }}</td>
                        <td>{{ $data->address }}</td>
                     
                    
                    </tr>
                @endforeach
            <tbody>
        </table>
    </div>

    <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>

        <div class="menu__box">
            
            <ul class="menu__list"><img src="/img/logo.png" class="logo_box">
                <li><a class="menu__item" href="{{ route('home') }}"><i class="fa fa-home fa-1x" aria-hidden="true"></i>Home</a></li>
                <li><a class="menu__item" href="{{ route('clientregistration') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Registration
                    of Client</a></li>
                <li><a class="menu__item" href="{{ route('table') }}"><i class="fa-solid fa-table-list"></i>Client Masterlist</a></li>
                <li><a class="menu__item" href="{{ route('marketing') }}"><i class="fa-solid fa-chart-simple"></i>Marketing and Sales</a></li>
                <li><a class="menu__item" href="{{ route('marketing') }}"><i class="fa-solid fa-gear"></i>Engineering</a></li>
            </ul>
        </div>
        <div class="overlay"></div>

        <script>
            document.getElementById('menu__toggle').addEventListener('change', function () {
                document.body.classList.toggle('overlay-visible', this.checked);
            });
        </script>
    </div>
</body>

</html>
