<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Registration</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="wrapper">
<div class="wrapper-left">
    <div class="logo">
        <img src="img/logo.png" id="logo1">
        <img src="img/bg1.png" id="bg">
    </div>
    </div>
<div class="wrapper-right">
    <div class="forms">
        
        <h1> Sign Up</h1>
        <form action="/register" method="POST">
            @csrf
        <div class="column">
            <div class="select-box">
                <select name="designation">
                    <option value="" disabled selected>Select Designation</option>
                    <option value="1">Engineering</option>
                    <option value="2">Marketing and Sales</option>
                    <option value="3">Accounting</option>
                </select>
            </div>  
        <input name="firstname" type="text" class="input-box" placeholder="First Name">
        <input name="lastname" type="text" class="input-box" placeholder="Last Name">
        <input name="username" type="text" class="input-box" placeholder="Username">
        <input name="password" type="password" class="input-box" placeholder="Password (minimum 8 characters)">
        <button id="btn">Sign Up</button>
    </form> 


    </div>

</div>
</div>

</body>
</html>