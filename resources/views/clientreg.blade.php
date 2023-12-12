<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Registration</title>
    <link rel="stylesheet" href="{{ asset('css/clientstyle.css') }}">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="/img/logo.png">
        </div>
        
        <div class="form">
            <form action="/clientreg" method="POST">
                @csrf
            <div class="header">
            <h1> Registration of Client</h1></div>
            <div class="dropdown">
                <select name="category">
                <option value="" disabled selected>Customer Category</option>
                <option value="1">Residential</option>
                <option value="2">Commercial</option>
                <option value="3">Government</option>
            </select>
            </div>
            <div class="txtbox">
                <div class="txt1">
                <input name="firstname" type="text" class="input-box" placeholder="First Name">
                <input name="address" type="text" class="input-box" placeholder="Address">
                <input name="company_name" type="text" class="input-box" placeholder="Company Name">
            </div>
            <div class="txt2">
                <input name="lastname" type="text" class="input-box" placeholder="Last Name">
                <input name="email" type="text" class="input-box" placeholder="Email">
                <input name="phone_number" type="text" class="input-box" placeholder="Phone Number">
            </div>

        </div>
        <div class="button"> <button id="btn">Sign Up</button></div>
            </form>
    </div>
</body>
</html>