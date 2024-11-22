<x-yeki-layout>
    <x-slot:content>
        <h3>Edit {{$user->name}}</h3>
        <div class="container text-center">
{{--        <div class="bg-gradient p-2" style="width: fit-content">--}}

            <form action="{{route('user.update',$user->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div style="width: 50%">
                        <img width="30%" src="{{asset($user->image)}}" alt="no image">
                    </div>
                    <label for="image" class="mt-2 mb-2">Image</label>
                    <x-text-input type="file" name="image" id="image" value="{{$user->image}}"/>
                    @error('image')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <div style="width: 60%" class=" mt-2">
                        @foreach($user->images as $image)
                            <img width="30%" src="{{asset($image->path)}}" alt="no image">
                        @endforeach
                    </div>
                    <label for="images" class="mt-2 mb-2">Images</label>
                    <x-text-input type="file" name="images[]" id="images" multiple/>
                    @error('images')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="editor" class="mt-2 mb-2">Description</label>
                    <textarea name="description" id="editor">{!! $user->description !!}</textarea>
                    @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
{{--        </div>--}}
    </x-slot:content>
</x-yeki-layout>
