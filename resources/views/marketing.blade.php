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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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


                                
                        
                                
                       
                                    <input type="text" id="companyName" name="custom_id" class="boxcl" readonly >
                               
                            
                                <!-- Display other company information as needed -->
                       
                                <!-- Update the onchange attribute to call updateCustomerId instead of updateCompanyId -->
                                <div class="customer_box"><input list="companyNames" name="customer_name" class="boxcl" id="customer-name" required placeholder="Type the name of the customer" onchange="updateCustomId()">
                                <datalist id="companyNames">
                                    @foreach($uniqueCompanyNames as $companyName)
                                        <option value="{{ $companyName }}">
                                    @endforeach
                                </datalist>
                                <button type="button" onclick="displayCustomId()">Show Customer ID</button></div>

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
            <div class="table-wrapper">
                <table class="fl-table">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Sales Person</th>                   
                            <th>Project Category</th>
                            <th>Project Description</th>
                            <th>Reference</th>
                            <th>Lead Date</th>
                            <th>Engage Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->customer_name }}</td>
                                <td>{{ $data->sales_person }}</td>
                                <td>{{ $data->project_category }}</td>
                                <td>{{ $data->project_description }}</td>
                                <td>{{ $data->reference }}</td>
                                <td>{{ $data->lead_date }}</td>
                                <td>{{ $data->engage_date }}</td>
                            </tr>
                        @endforeach
                    <tbody>
                </table>
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

                <script defer> 

function displayCustomId() {
            var companyName = document.getElementById('customer-name').value;
            console.log('Company Name:', companyName);
            // Make an AJAX request to fetch custom_id based on company_name
            $.ajax({
                url: "{{ route('getCustomId') }}", // Replace with your route to fetch custom_id
                type: 'GET',
                data: { company_name: companyName },
                success: function(response) {
                    document.getElementById('companyName').value = response.custom_id;
                },
                error: function(error) {
                    console.error('Error fetching custom_id:', error);
                }
            });
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
