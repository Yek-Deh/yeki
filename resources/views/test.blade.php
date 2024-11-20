<x-yeki-layout>
    <x-slot:content>
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

                <tr>
                    <th scope="row">dtg</th>
                    <td>fhg</td>
                    <td>hgj</td>
                    <td>
                        <a href="{{route('user.show',1)}}" class="btn btn-outline-primary">Detail</a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </x-slot:content>
</x-yeki-layout>
