<!DOCTYPE html>
<html>
    <head>
        <title>Data Item Category</title>
    </head>
    <body>
        <h1>Data Item Category</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Category Code</th>
                <th>Category Name</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{$d->cat_id}}</td>
                    <td>{{$d->cat_code}}</td>
                    <td>{{$d->cat_name}}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>