<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>

            </tr>
        </thead>
        <tbody>
            @for($x = 0; $x <= count($values )-1; $x++) <tr>
                <td>{{$values[$x][0]}}</td>
                <td>{{$values[$x][1]}}</td>
                <td>{{$values[$x][2]}}</td>
                </tr>
                @endfor
        </tbody>
    </table>
</body>

</html>