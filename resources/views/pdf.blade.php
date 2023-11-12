<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td><b>Company Name</b></td>
          <td><b>Contact</b></td>
          <td><b>Address Line 1</b></td>
          <td><b>Address Line 2</b></td>
          <td><b>Address Line 3</b></td>  
          <td><b>City</b></td>  
          <td><b>Country</b></td>     
        </tr>
      </thead>
      <tbody>
        @foreach($cons as $con)
          <tr>
            <td>{{ $con['company'] }}</td>
            <td>{{ $con['contact'] }}</td>
            <td>{{ $con['address_line_1'] }}</td>
            <td>{{ $con['address_line_2'] }}</td>
            <td>{{ $con['address_line_3'] }}</td>
            <td>{{ $con['city'] }}</td>
            <td>{{ $con['country'] }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
