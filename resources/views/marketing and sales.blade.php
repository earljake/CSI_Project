<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/marketing.css') }}">
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
                <div class="marketbox">
                    <div class="market">Marketing And Sales</div>
                    <div class="box1">
                <div class="left">
                    <div class="input1">
                    <p>Customer Category</p>
                    <p>Sales Person</p>
                    <p>Project Category</p>
                    <p>Reference</p>
                </div>
                    <div class="input2">
                    <select name="customercategory" id="box">
                        <option value=""></option>
                        </select>
                    <select name="salesperson" id="box">
                        <option value=""></option>
                        </select>
                    <select name="projectcategory" id="box">
                        <option value=""></option>
                         </select>
                    <input type="text" name="reference" id="box">
                    </div>
                </div>
                    <div class="right">
                    <div class="input3">
                        <p>Project Description</p>
                        <p>Lead Date</p>
                        <p>Engage Date</p>
                    </div>
                    <div class="input4">
                     <input type="text" name="projectdescription" id="box">
                     <input type="date" name="leaddate" id="box">
                     <input type="date" name="engagedate" id="box">
                    </div>
                    </div>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Register">
                </div>              
            </div>
        </div>
    </div>
</body>
</html>
