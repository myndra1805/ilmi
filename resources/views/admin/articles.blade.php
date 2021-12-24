@section('title', 'Articles')
<x-guest-layout>
 <div class="px-5 my-10 grid grid-cols-1 gap-4">
  @if (session('status'))
  <div class="flex justify-center items-center font-medium py-1 px-2 bg-white rounded-md text-green-100 bg-green-700 border border-green-700" id="alert-success">
   <div slot="avatar">
    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
     <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
     <polyline points="22 4 12 14.01 9 11.01"></polyline>
    </svg>
   </div>
   <div class="text-xl font-normal  max-w-full flex-initial">
    <div class="py-2">{{ session('status') }}
    </div>
   </div>
   <div class="flex flex-auto flex-row-reverse">
    <div>
     <svg id="close" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-green-400 rounded-full w-5 h-5 ml-2">
      <line x1="18" y1="6" x2="6" y2="18"></line>
      <line x1="6" y1="6" x2="18" y2="18"></line>
     </svg>
    </div>
   </div>
  </div>
  @endif
  <form action="/articles/create" method="post" enctype="multipart/form-data">
   @csrf
   <div class="my-2">
    <input type="text" value="{{old('judul')}}" name="judul" id="judul" class="rounded-xl w-full focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-transparent py-2.5" placeholder="Masukkan judul artikel">
    @error('judul')
    <div class="text-red-600">{{ $message }}</div>
    @enderror
   </div>
   <div class="my-2">
    <div class="flex w-full items-center bg-grey-lighter">
     <label class="w-64 flex items-center px-4 py-2.5 bg-white text-blue rounded-xl shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-green-700 hover:text-white">
      <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
       <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
      </svg>
      <span class="ml-2">Thumbnail Artikel</span>
      <input type='file' name="thumbnail" class="hidden" onchange="preview_image(event)" />
     </label>
    </div>
    @error('thumbnail')
    <div class="text-red-600">{{ $message }}</div>
    @enderror
   </div>
   <img id="output_image" class="" />
   <div class="my-2">
    <textarea class="focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-transparent" id="content" placeholder="Konten artikel" name="content"></textarea>
    @error('content')
    <div class="text-red-600">{{ $message }}</div>
    @enderror
   </div>
   <button class="my-4 inline-block text-center btn-audio p-2 bg-green-900 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" id="submit" type="submit">Posting</button>
  </form>
 </div>
</x-guest-layout>
<script>
 window.addEventListener("DOMContentLoaded", event => {
  CKEDITOR.replace('content');
  var editor = CKEDITOR.instances['content'];
  document.addEventListener("click", event => {
   if(event.target.id === 'close'){
    document.querySelector("#alert-success").classList.add("hidden")
   }
  })
 });

 function preview_image(event) {
  const reader = new FileReader();
  reader.onload = function() {
   const output = document.getElementById('output_image');
   output.src = reader.result;
   output.classList.add('w-40')
   output.classList.add('mb-2')
  }
  reader.readAsDataURL(event.target.files[0]);
 }
</script>