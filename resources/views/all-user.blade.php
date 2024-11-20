<x-yeki-layout>
    <x-slot:content>
        <div class="text-center">
            <table class="table table-hover table-bordered table-dark">
                <thead>
                <tr>
                    <th scope="col">Num</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row" class="align-content-center">{{$loop->iteration}}</th>
                        <td class="align-content-center">{{$user->name}}</td>
                        <td class="align-content-center">{{$user->email}}</td>
                        <td class="align-content-center">{{$user->description}}</td>
                        <td><img src="{{asset($user->image)}}" alt="no image" width="30%"></td>
                        <td class="align-content-center">
                            <a href="{{route('user.show',$user->id)}}" class="btn btn-outline-primary">Detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </x-slot:content>
</x-yeki-layout>
