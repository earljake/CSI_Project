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
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<body>

    <div class="wrapper">
        <div class="container">
            <div class="box">
                <div class="marketbox">
                    <div class="market">Marketing And Sales</div>
                    <form action="{{ route('marketing') }}" method="POST">
                      @csrf
                    <div class="box1">
                        <div class="left">
                            <div class="input1">

                                <p>Customer ID</p>
                                <p>Customer Name</p>
                                <p>Sales Person</p>
                                <p>Project Category</p>

                            </div>
                            <div class="input2">


                                <input type="text" name="custom_id" class="boxcl" id="customer-id" placeholder="Customer ID" readonly>

                                <input list="fullNames" name="customer_name" class="boxcl" id="customer-name" required placeholder="Type the name of the customer" onchange="updateCustomerId()">
                                <datalist id="fullNames">
                                    @foreach($uniqueFullNames as $fullName)
                                        <option value="{{ $fullName }}">
                                    @endforeach
                                </datalist>

                                <input list="sales_person" name="sales_person" class="boxcl" placeholder="Type the name of the salesperson">
                                <datalist id="sales_person">
                                    <option value=""></option>
                                    <!-- Add other options as needed -->
                                </datalist>

                                <input list="projectcategory" name="project_category" class="boxcl">
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
                                <input type="text" name="reference" class="boxcl">
                                <input type="text" name="project_description" class="boxcl">
                                <input type="date" name="lead_date" class="boxcl">
                                <input type="date" name="engage_date" class="boxcl">
                            </div>
                        </div>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Register">
                    </div>
                    </form>
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
                
                    function updateCustomerId() {
                        var customerNameInput = document.getElementById('customer_name');
                        var customerIdInput = document.getElementById('customer_id');
                
                        // Check if an option from the datalist is selected
                        var selectedOption = document.querySelector('#fullNames option:checked');
                        if (selectedOption) {
                            // Assume you have a route in Laravel to fetch the custom ID by name
                            var apiUrl = "http://localhost:8000/get-custom-id/" + encodeURIComponent(selectedOption.value);

                
                            fetch(apiUrl)
                                .then(response => response.json())
                                .then(data => {
                                    // Update the Customer ID input
                                    customerIdInput.value = data.custom_id;
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                });
                        } else {
                            // If no option is selected, clear the Customer ID input
                            customerIdInput.value = "";
                        }
                    }
                
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
