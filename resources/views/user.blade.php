<!DOCTYPE html>
<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>Data User</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>ID Level User</th>
            </tr>
            {{-- @foreach ($data as $d)
                <tr>
                    <td>{{$data->user_id}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->level_id}}</td>
                </tr>
            @endforeach --}}
            
            <tr>
                    <td>{{$data->user_id}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->level_id}}</td>
        </table>
        {{-- <table border="1" cellpadding="5" cellspacing="0">
            <th>Total User</th>
            <tr>
                <td>{{$total}}</td>
            </tr> --}}
        </table>
    </body>
</html>