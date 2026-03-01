<!DOCTYPE html>
<html>
    <head>
        <title>Data User Level</title>
    </head>
    <body>
        <h1>Data User Level</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Level Code</th>
                <th>Level Name</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{$d->level_id}}</td>
                    <td>{{$d->level_code}}</td>
                    <td>{{$d->level_name}}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>