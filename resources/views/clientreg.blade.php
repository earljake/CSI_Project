<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Registration</title>
    <link rel="stylesheet" href="{{ asset('css/clientstyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Add this in the head section of your HTML file -->
    


</head>
<body>
   
    <div class="wrapper">
        <div class="logo">
            <img src="/img/logo.png">
        </div>
        
        <div class="form">
            <form action="{{ route('clientreg') }}" method="POST">
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
        <div class="button"> <button id="btn">Register</button></div>
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
    <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span></span>
        </label>
    
        <div class="menu__box">
            <ul class="menu__list">
                <li><a class="menu__item" href="#"><i class="fa fa-home fa-1x" aria-hidden="true"></i>Home</a></li>
                <li><a class="menu__item" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Registration of Client</a></li>
                <li><a class="menu__item" href="#"><i class="fa-solid fa-table-list"></i>Client Masterlist</a></li>
                <li><a class="menu__item" href="#"><i class="fa-solid fa-chart-simple"></i>Marketing and Sales</a></li>
                <li><a class="menu__item" href="#"><i class="fa-solid fa-gear"></i>Engineering</a></li>
            </ul>
        </div>
        <div class="overlay"></div>

        <script>
            document.getElementById('menu__toggle').addEventListener('change', function() {
                document.body.classList.toggle('overlay-visible', this.checked);
            });
        </script>
</div>
</body>
</html>