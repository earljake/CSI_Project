<html lang="en">
<head>
    <title>Converge.IT Solutions Monitoring System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/landingstyle.css') }}">
</head>
<body>
    <div class="container">
        <div class="box">
                <div class="navbar">
                    
                </div>

            <div class="wrapper">
                <div class="left">
                    <div class="leftlogo">
                        <img src="img/convergelogo.png" id="leftlogo" >
                        <p id="text">Monitoring System</p>
                    </div>
                    <div class="btndiv">
                        <a href="{{ route('login') }}"><button id="btn">Log In</button></a>
                        <a href="{{ route('register') }}"><button id="btn">Sign Up</button></a>
                    </div>  
                </div>

                <div class="right">
                    <img src="img/image.png" id="rightlogo">
                </div>

            </div>
        </div>

    </div>
</body>
</html>