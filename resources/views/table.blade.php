<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/tablestyle.css') }}">
</head>
<body>
    <button class="backbtn">Back</button>
<div class="wholetbl">   
<table class="table">
<thead>
<th>Customer Category</th>
<th>Last Name</th>
<th>First Name</th>

<th>Email</th>
<th>Address</th>
<th>Mobile Number</th>

<th>Company Name</th>

</thead>
<tbody>
    
      @foreach ($data as $data)
      <tr>
    
        <td data-label="Customer">{{$data->category}}</td>
        <td data-label="Customer">{{$data->lastname}}</td>
        <td data-label="Customer">{{$data->firstname}}</td>  
        <td data-label="Customer">{{$data->email}}</td>
        <td data-label="Customer">{{$data->address}}</td>
        <td data-label="Customer">{{$data->phone_number }}</td> 
        <td data-label="Customer">{{$data->company_name}}</td>

     
    
    
       
              
    </tr>
   

</tbody>
@endforeach
</table>
</div>   
</body>
</html>
