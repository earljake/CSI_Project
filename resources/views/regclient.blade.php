<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/regclient.css') }}">
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
                <div class="regbox">
                    <div class="regclient">Registration Of Client</div>
                    <div class="box1">
                <div class="left">
                    <div class="input1">
                    <p>Customer Category</p>
                    <p>Last Name</p>
                    <p>First Name</p>
                    <p>Middle Name</p>
                </div>
                    <div class="input2">
                        <select name="" id="custcat">
                            <option value=""></option>
                          </select>
                        <input type="text" name="lastname" id="last">
                        <input type="text" name="firstname" id="last">
                        <input type="text" name="middlename" id="last">
                    </div>
                </div>
                    <div class="right">
                    <div class="input3">
                        <p>Company Name</p>
                        <p>Email</p>
                        <p>Phone Number</p>
                    </div>
                    <div class="input4">
                    <input type="text" name="companyname" id="num">
                    <input type="Email" name="email" id="num">
                    <input type="Number" name="number" id="num">
                    </div>
                    </div>
                    </div>
                    <div class="btn"><button id="btn">Submit</button></div>
                </div>              
            </div>
        </div>
    </div>
</body>
</html>