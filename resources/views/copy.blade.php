<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body class="container">
@include('layouts.navbar')
<div class="text-center">
    <table class="table table-hover table-bordered table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('user.show',$user->id)}}" class="btn btn-outline-primary">Detail</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@include('layouts.footer')
</body>
</html>
