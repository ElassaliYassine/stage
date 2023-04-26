<!DOCTYPE html>
<html>
<head>
    <title>AllPHPTricks.com</title>
</head>
<body>
    {{-- <h1>{{ $testMailData['title'] }}</h1>
    <p>{{ $testMailData['body'] }}</p> --}}

    <table class="table">
      <tbody>
             <tr>
            
                <th>subject</td>
                <th>{{ $testMailData['subject'] }}</td>
            </tr>
            <tr>
                <td>name</th>
                <th>{{ $testMailData['name'] }}</th>
             
            </tr>
     
     
            <tr>
                
                <td>email</td>
                <td>  <a href="mailto:{{ $testMailData['email'] }}">{{ $testMailData['email'] }}</a> </td>
            </tr>
            <tr>
            
                <td>message</td>
                <td>{{ $testMailData['message'] }}</td>
            </tr>
           
        </tbody>
    </table>

</body>
</html>