@section('title', 'Articles')
<x-app-layout>
 <div>
  <div class="bg-green-900" style="height: 70vh;">
   <img src="{{asset('/images/artikel.png')}}" alt="" class="h-80 mx-auto">
   <div class="text-center">
    <h1 class="text-white text-3xl font-bold">Articles</h1>
    <p class="text-white max-w-sm mx-auto">Baca artikel dari kami untuk menambah informasi dan pengetahuan anda tentang agama Islam</p>
   </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
   <path fill="#064e3b" fill-opacity="1" d="M0,32L26.7,69.3C53.3,107,107,181,160,192C213.3,203,267,149,320,144C373.3,139,427,181,480,181.3C533.3,181,587,139,640,112C693.3,85,747,75,800,80C853.3,85,907,107,960,138.7C1013.3,171,1067,213,1120,197.3C1173.3,181,1227,107,1280,85.3C1333.3,64,1387,96,1413,112L1440,128L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
  </svg>
  <div class="container mx-auto my-10">
   <div class="flex justify-evenly flex-wrap">
    @foreach($articles as $i => $article) 
    <div class="lg:w-4/12 md:w-6/12 w-full p-4">
     <div class="shadow-xl bg-white">
      <img src="/images/articles/{{$article->image}}" alt="" width="100%" class="h-52">
      <div class="mt-2">
       <p class="text-sm px-4">{{explode(' ', $article->created_at)[0]}}</p>
      </div>
      <p style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;" class="font-bold text-xl px-4 my-1">{{$article->title}}</p>
      <p class="px-4" style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden;">{!!strip_tags($article->content)!!}</p>
      <a href="/article/{{$article->id}}" class="mx-4 my-4 inline-block text-center btn-audio p-2 bg-green-900 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">Selengkapnya</a>
     </div>
   </div>
   @endforeach
  </div>
 </div>
 </div>
</x-app-layout>