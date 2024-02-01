<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketing and Sales</title>
    <link rel="stylesheet" href="{{ asset('css/marketingstyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head><script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<body>

    <div class="wrapper">
        <div class="container">
            <div class="box">
                <div class="marketbox">
                    <div class="market">Marketing And Sales</div>
                    <div class="box1">
                        <div class="left">
                            <div class="input1">

                                <p>Customer Name</p>
                                <p>Sales Person</p>
                                <p>Project Category</p>
                              
                            </div>
                            <div class="input2">
                                

                                <input list="fullNames" name="fullname" id="box" required placeholder="Type the name of the customer">
                                <datalist id="fullNames">
                                    @foreach($uniqueFullNames as $fullName)
                                        <option value="{{ $fullName }}">
                                    @endforeach
                                </datalist>

                                <input list="salesperson" name="salesperson" id="box"placeholder="Type the name of the salesperson">
                                <datalist id="salesperson">
                                    <option value=""></option>
                                    <!-- Add other options as needed -->
                                </datalist>

                                <input list="projectcategory" name="projectcategory" id="box">
                                <datalist id="projectcategory">
                                    <option value="Supply Only"></option>
                                    <option value="Supply and Install"></option>
                                    <option value="Install Only"></option>
                                    <option value="Technical Support"></option>
                                    <option value="Rehab and Upgrade"></option>
                                    
                                    <!-- Add other options as needed -->
                                </datalist>

                              
                            </div>
                        </div>
                        <div class="right">
                            <div class="input3">
                                <p>Project Description</p>
                                <p>Reference</p>
                                <p>Lead Date</p>
                                <p>Engage Date</p>
                            </div>
                            <div class="input4">
                                <input type="text" name="reference" id="box">
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
                    @if(session('successMessage'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('successMessage') }}',
            });
        @endif
                </script>
            </div>
        </div>
    </div>

</body>

</html>
