<html lang="en">
<head>
    <title>Registration of Client</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/clientregistration.css') }}">
</head>
<body>
    <div class="admin">
      <header class="header">
          <nav class="navbar"><a href="#">Admin</a></nav>
      </header>
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="box">
                <form action="{{ route('clientregistration') }}" method="POST">
                    @csrf
                <div class="regbox">
                    <div class="regclient">Registration Of Client</div>
                    <div class="box1">
                <div class="left">
                    <div class="input1">
                    <p>Customer Category</p>
                    <p>Last Name</p>
                    <p>First Name</p>
                    <p>Address</p>
                </div>
                    <div class="input2">
                        <select name="category" id="custcat">
                            <option value="" disabled selected>Customer Category</option>
                            <option value="1">Residential</option>
                            <option value="2">Commercial</option>
                            <option value="3">Government</option>
                          </select>
                        <input type="text" name="lastname" id="last">
                        <input type="text" name="firstname" id="last">
                        <input type="text" name="address" id="last">
                    </div>
                </div>
                    <div class="right">
                    <div class="input3">
                        <p>Company Name</p>
                        <p>Email</p>
                        <p>Phone Number</p>
                    </div>
                    <div class="input4">
                    <input type="text" name="company_name" id="num">
                    <input type="Email" name="email" id="num">
                    <input type="text" name="phone_number" id="num">
                    </div>
                    </div>
                    </div>
                    <div class="btn"><button id="btn">Register</button></div>
                </div>          
                </form>   
                @isset($errorMessage)
            <div class="error-message">
                {{ $errorMessage }}
            </div>

            <script>
                // Hide the error message after 10 seconds
                setTimeout(function() {
                    document.getElementById('error-message').style.display = 'none';
                }, 10000); // 10000 milliseconds = 10 seconds
            </script>
        @endisset 
            </div>
        </div>
        <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                    <span></span>
                </label>

                <div class="menu__box">

                    <ul class="menu__list"><img src="/img/logo.png" class="logo_box">
                        <li><a class="menu__item" href="{{ route('home') }}"><i class="fa fa-home fa-1x"
                                    aria-hidden="true"></i>Home</a></li>
                        <li><a class="menu__item" href="{{ route('clientregistration') }}"><i
                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>Registration
                                of Client</a></li>
                        <li><a class="menu__item" href="{{ route('table') }}"><i class="fa-solid fa-table-list"></i>Client
                                Masterlist</a></li>
                        <li><a class="menu__item" href="{{ route('marketing') }}"><i
                                    class="fa-solid fa-chart-simple"></i>Marketing and Sales</a></li>
                        <li><a class="menu__item" href="{{ route('marketing') }}"><i
                                    class="fa-solid fa-gear"></i>Engineering</a></li>
                    </ul>
                </div>
                <div class="overlay"></div>

                <script>
                    document.getElementById('menu__toggle').addEventListener('change', function () {
                        document.body.classList.toggle('overlay-visible', this.checked);
                    });
                </script>
            </div>
    </div>
    
</body>
</html>