<div class="container mx-auto mt-8">
<h1 class="text-2xl font-bold mb-5">UPLOAD YOUR PICTURES</h1>


@if (session()->has('success'))<h1 class="text-green-700">{{session()->get('success')}}</h1>@endif

@if (session()->has('error'))<h1 class="text-blue-700">{{session()->get('error')}}</h1>@endif

<form wire:submit.prevent="saveImage">
    @csrf
    <div class="mb-4">
    <div><input wire:model="image1" type="file" name="image" id="image" class="w-full py-2 px-3 border rounded" accept="image/*"></div>
    @error('image1')<small class="text-red-600">{{$message}}</small> @enderror
    <div><input wire:model="image2" type="file" name="image" id="image" class="w-full py-2 px-3 border rounded" accept="image/*"></div>
    @error('image2')<small class="text-red-600">{{$message}}</small> @enderror
    <div><input wire:model="image3" type="file" name="image" id="image" class="w-full py-2 px-3 border rounded" accept="image/*"></div>
    @error('image3')<small class="text-red-600">{{$message}}</small> @enderror
    <div><input wire:model="image4" type="file" name="image" id="image" class="w-full py-2 px-3 border rounded" accept="image/*"></div>
    @error('image4')<small class="text-red-600">{{$message}}</small> @enderror
    <div><input wire:model="image5" type="file" name="image" id="image" class="w-full py-2 px-3 border rounded" accept="image/*"></div>
    @error('image5')<small class="text-red-600">{{$message}}</small> @enderror
    </div>

    <div class="mb-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded w-full">Submit</button>
    </div>
</form>

</div>
