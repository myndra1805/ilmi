@section('title', 'Tausiah')
<x-app-layout>
 <div class="bg-green-900" style="height: 70vh;">
  <img src="{{asset('/images/video.png')}}" alt="" class="h-80 mx-auto">
  <div class="text-center">
   <h1 class="text-white text-3xl font-bold">Tausiah</h1>
   <p class="text-white max-w-sm mx-auto">Dengarkan ceramah dari ustad-ustad terbaik yang dapat menambah pengetahuan kamu</p>
  </div>
 </div>
 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#064e3b" fill-opacity="1" d="M0,32L26.7,69.3C53.3,107,107,181,160,192C213.3,203,267,149,320,122.7C373.3,96,427,96,480,96C533.3,96,587,96,640,122.7C693.3,149,747,203,800,197.3C853.3,192,907,128,960,117.3C1013.3,107,1067,149,1120,160C1173.3,171,1227,149,1280,133.3C1333.3,117,1387,107,1413,101.3L1440,96L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
 </svg>
 <div class="flex flex-wrap justify-around">
  @foreach($listTausiah as $tausiah) <div class="lg:w-2/6 xl:w-1/4 md:w-2/4 w-full p-4">
   <a href="/tausiah/{{$tausiah->id}}" class="shadow-sm inline-block transform transition duration-300 hover:-translate-y-2 hover:shadow-xl bg-white pb-5">
    <img src="{{asset('/images/tausiah/' . $tausiah->image)}}" alt="" width="100%">
    <p style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;" class="font-bold text-xl px-4 mt-2">{{$tausiah->title}}</p>
    <p style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;" class="px-4">{{$tausiah->ustad}}</p>
   </a>
 </div>
 @endforeach
 </div>
</x-app-layout>