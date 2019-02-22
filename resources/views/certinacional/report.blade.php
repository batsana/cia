
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel</title>
    </head>
    <body>
        <div class="row">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                @foreach ($certifyc as $fab)
                <tr>
                     <td>{{$fab->quantfardo}}</td>
                    <td>{{$fab->quantestenso}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>