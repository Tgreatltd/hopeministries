<div class="container max-w-screen mx-auto ">
<div class="flex flex-wrap -mx-2">
    @foreach($prayers as $prayer)
    <div class="w-full sm:w-1/2  lg:w-1/3 px-2 mb-4 bg-blue-500">
        <div class="bg-white shadow-lg rounded-lg p-5">
            <!-- <p>{{$prayer->prayerPoint}}</p> -->
            <strong>{{$prayer->created_at}}</strong>
            <div style="width: 100%; height:130px;" class="flex items-center justify-center bg-shadow-500 mb-4">
               

                <i>{{$prayer->prayerPoint}}</i>
            </div>
        </div>
    </div>
   
    @endforeach
</div>

<div> {{ $prayers->links() }}</div>
</div>