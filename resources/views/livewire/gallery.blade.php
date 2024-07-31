<div>
@foreach ($users as $user)

<div id="gal" style="width: 100%; height:130px;" class="flex items-center justify-center bg-shadow-500 mb-4">
<img  src="{{ asset('storage/'. $user->image1) }}" alt="">
<img  src="{{ asset('storage/'. $user->image2) }}" alt="">
<img  src="{{ asset('storage/'. $user->image3) }}" alt="">
<img  src="{{ asset('storage/'. $user->image4) }}" alt="">
<img  src="{{ asset('storage/'. $user->image5) }}" alt="">
</div>

@endforeach
</div>
