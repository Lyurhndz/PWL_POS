<!DOCTYPE html>
<html>
    <head>
        <title>Form Change Data User</title>
    </head>
    <body>
        <h1>Form Change Data User</h1>
        <a href="/user">Back</a>
        <br><br>

        <form method="post" action="{{ url('/user/change_save/' . $data->user_id) }}">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <label>Username</label>
        <input type="text" name="username" placeholder="Insert Username" value="{{$data->username}}">
        <br>
        <label>Nama</label>
        <input type="text" name="name" placeholder="Insert Name" value="{{$data->name}}">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Insert Password" value="{{$data->password}}">
        <br>
        <label>Level Id</label>
        <input type="number" name="level_id" placeholder="Insert ID Level" value="{{$data->level_id}}">
        <br><br>
        <input type="submit" class="btn btn-success" value="save">
        </form>
    </body>
</html>