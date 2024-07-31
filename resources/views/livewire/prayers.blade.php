<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-5">Submit Your Message</h1>

    @if (session()->has('success'))
    <div class="bg-green-500 text-white p-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif


    <form wire:submit.prevent="savePrayer">
        @csrf
        <div class="mb-4">
            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">PRAYERS FOR TODAY</label>
            <textarea id="message" wire:model="prayerPoint" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('message') border-red-500 @enderror" rows="10"></textarea>
            @error('prayerPoint') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded w-full">Submit</button>
        </div>
    </form>





    <table class="min-w-full table">
        <thead class="bg-green-500">
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-gray-800 uppercase tracking-wider">ID</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-gray-800 uppercase tracking-wider">PRAYER POINTS</th>
        </thead>
        <tbody>
           @foreach ($points as $point)
           <tr class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
           <td class="px-6 py-4 whitespace-no-wrap bg-red-300">{{$point->id}}</td>
           <td class="px-6 py-4 whitespace-no-wrap bg-green-100 ">{{$point->prayerPoint}}</td>
           </tr>
           @endforeach
        </tbody>
    </table>
</div>