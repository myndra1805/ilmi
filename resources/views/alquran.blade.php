@section('title', "Al-Qur'an")
<x-app-layout>
 <div class="bg-green-900" style="height: 70vh;">
  <img src="{{asset('/images/al-quran.png')}}" alt="" class="h-80 mx-auto">
  <div class="text-center">
   <h1 class="text-white text-3xl font-bold">Al-Qur'an</h1>
   <p class="text-white max-w-sm mx-auto">Al-Qur'an yang disajikan dilengkapi dengan tafsir masing-masing ayat dan audio untuk didengarkan</p>
  </div>
 </div>
 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#064e3b" fill-opacity="1" d="M0,0L26.7,42.7C53.3,85,107,171,160,170.7C213.3,171,267,85,320,69.3C373.3,53,427,107,480,122.7C533.3,139,587,117,640,122.7C693.3,128,747,160,800,165.3C853.3,171,907,149,960,138.7C1013.3,128,1067,128,1120,144C1173.3,160,1227,192,1280,176C1333.3,160,1387,96,1413,64L1440,32L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
 </svg>
 <div class="container mx-auto my-5">
  <div class="flex flex-wrap justify-evenly">
   @foreach($list_surah as $surah)
   <div class="w-full md:w-1/2 lg:w-1/3 px-5 xl:w-1/4">
    <a href="/al-quran/surah/{{$surah->nomor}}" class="my-3 shadow-md w-full flex items-center rounded-md justify-between bg-white p-3 card">
     <div class="flex items-center">
      <p class="m-0">{{$surah->nomor}}</p>
      <div class="ml-2">
       <p class="m-0"><span class="font-bold">{{$surah->nama}}</span> ({{$surah->ayat}})</p>
       <p class="m-0 text-gray-500 text-sm">{{$surah->arti}}</p>
      </div>
     </div>
     <P class="m-0 text-xl" style="font-family: 'Amiri', serif;">{{$surah->asma}}</P>
    </a>
   </div>
   @endforeach
  </div>
 </div>
</x-app-layout>