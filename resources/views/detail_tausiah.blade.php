@section('title', 'Tausiah')
<x-app-layout>
 <div class="container mx-auto">
  <div class="flex flex-wrap justify-evenly">
   <div class="p-4 w-full lg:w-2/3">
    <h1 class="text-2xl font-bold mt-6">{{$tausiah->title}}</h1>
    <p>{{$tausiah->ustad}}</p>
    <video width="100%" height="500px" controls poster="/images/tausiah/{{$tausiah->image}}" controlsList="nodownload">
     <source src="/videos/{{$tausiah->video}}" type="video/mp4">
     <source src="/videos/{{$tausiah->video}}" type="video/mkv">
    </video>
   </div>
   <div class="p-4 w-full lg:w-1/3">
    <div class="shadow-xl bg-white h-94">
     <h1 class="pt-4 px-4 text-xl font-bold">Tausiah Terbaru</h1>
     <div class="flex flex-col divide-y divide-rose-400">
      @foreach($listTausiah as $item) 
      <a href="/tausiah/{{$item->id}}" class="p-4 flex items-center">
       <img src="{$item->image}}" alt="" width="150px" class="">
       <div class="ml-2">
        <p style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;" class="">{{$item->ustad}}</p>
        <p style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;" class="font-bold text-lg">{{$item->title}}</p>
       </div>
     </a>
     @endforeach
    </div>
   </div>
  </div>
 </div>
 </div>
</x-app-layout>