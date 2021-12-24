@section('title', 'Artikel')
<x-app-layout>
 <div class="flex flex-wrap justify-evenly">
  <div class="px-4 w-full my-5 lg:w-2/3">
   <div class="py-4">
    <img src="/images/articles/{{$article->image}}" alt="" class="mx-auto h-52 md:h-96">
    <h1 class="text-3xl font-bold px-5 mt-6">{{$article->title}}</h1>
    <div class="container mx-auto px-5 mt-3">
     <div>
      {!! $article->content !!}
     </div>
    </div>
   </div>
  </div>
  <div class="px-4 w-full my-5 lg:w-1/3">
   <div class="shadow-xl bg-white h-94">
    <h1 class="pt-4 px-4 text-xl font-bold">Articles Terbaru</h1>
    <div class="flex flex-col divide-y divide-rose-400">
     @foreach($articles as $item)
     <a href="/article/{{$item->id}}" class="flex items-center">
      <div class="w-2/4 pl-2 py-2">
       <img src="/images/articles/{{$item->image}}" alt="" width="" class="">
      </div>
      <div class="w-2/4 pr-2 pl-1 py-2">
       <div class="m-2 w-full">
        <p style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;" class="font-bold text-lg">{{$item->title}}</p>
        <p style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;" class="">{!!strip_tags($article->content)!!}</p>
       </div>
      </div>
     </a>
     @endforeach
    </div>
   </div>
  </div>
 </div>
</x-app-layout>

<script>
 window.addEventListener("DOMContentLoaded", event => {

 })
</script>