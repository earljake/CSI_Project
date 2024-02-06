<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</head>
<body>
    <div class="wrapper">
       
        <div class="container">
            <div class="left">
                
                <div class="sidebar">
                    <ul>
                        <div class="logo">
                            <img src="img/logo.png" id="leftlogo">
                        </div>
                        <li><a href="{{ route('clientregistration') }}"><iconify-icon icon="mdi:user"></iconify-icon>Registration of Client</a></li>
                        <li><a href="{{ route('table') }}"><iconify-icon icon="mdi:user-search"></iconify-icon>Client Masterlist</a></li>
                        <li><a href="{{ route('marketing') }}"><iconify-icon icon="cil:chart-line"></iconify-icon>Marketing and Sales</a></li>
                        <li><a href="{{ route('marketing') }}"><iconify-icon icon="material-symbols:engineering"></iconify-icon>Engineering</a></li>
                    </ul>
                </div>
            
            </div>
            <div class="right">
                <div class="csilogo"><img src="img/logo.png" id="csilogo"></div>
                <div class="undraw"><img src="img/home.png" id="undraw"></div>
            </div>
        </div>
    </div>
</body>
</html>