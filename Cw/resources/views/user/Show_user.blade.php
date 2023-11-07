<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Dane użytkownika:</h3>
    {{print_r($user)}}

    <br>
    Name: {{$user['firstName']}} {{$user['lastName']}} City: {{$user['city']}} <br>
    Hobby: {{$user['hobby'][0]}} i {{$user['hobby'][2]}} <br>

    Hobby list:
        <ul>

            @foreach($user['hobby'] as $hobby)
                <li>{{$hobby}}</li>
            @endforeach

        </ul>
</body>
</html>
