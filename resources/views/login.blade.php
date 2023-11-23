<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
   
</head>
<body>
    
    <div class="wrapper">
        <div class="wrapper-left">
            <div class="logo">
                <img src="/img/logo.png" id=back>
                <div><h2 id=text>Monitoring System</h2></div>
            </div>
        </div>
        <section>
        <div class="wrapper-right">
                <div class="form-box">
                    <div class="form-value">
                        <form action="/login" method="POST">
                            @csrf
                            <h2 class="login">Log In</h2>
                            <div class="inputbox">
                                <input name="loginusername" type="text" placeholder="Username">
                            </div>
                            <div class="inputbox">
                                <input name="loginpassword" type="Password" placeholder="Password">
                               
                            </div>
                            
                            <button class="btn">Login</button>
                            <div class="Register">
                                <p>Not a member? <a href="#"> Sign up now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        </section>
    </div>
</body>
</html>