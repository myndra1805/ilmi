@section('title', 'Tausiah')
<x-guest-layout>
 <div class="container mx-auto px-5 my-10">
  <form action="/tausiah/create" method="post" enctype="multipart/form-data">
   @csrf
   <div class="my-4">
    <input type="text" value="{{old('judul')}}" name="judul" id="judul" class="rounded-xl w-full focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-transparent py-2.5" placeholder="Masukkan judul video">
    @error('judul')
    <div class="text-red-600">{{ $message }}</div>
    @enderror
   </div>
   <div class="my-4">
    <input type="text" value="{{old('penceramah')}}" name="penceramah" id="penceramah" class="rounded-xl w-full focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-transparent py-2.5" placeholder="Masukkan nama penceramah">
    @error('penceramah')
    <div class="text-red-600">{{ $message }}</div>
    @enderror
   </div>
   <div class="my-2">
    <div class="flex w-full items-center bg-grey-lighter">
     <label class="w-64 flex items-center px-4 py-2.5 bg-white text-blue rounded-xl shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-green-700 hover:text-white">
      <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
       <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
      </svg>
      <span class="ml-2">Thumbnail Video</span>
      <input type='file' name="thumbnail" class="hidden" onchange="preview_image(event)" />
     </label>
    </div>
    @error('thumbnail')
    <div class="text-red-600">{{ $message }}</div>
    @enderror
   </div>
   <img id="output_image" class="" />
   <div class="my-2">
    <div class="flex w-full items-center bg-grey-lighter">
     <label class="w-64 flex items-center px-4 py-2.5 bg-white text-blue rounded-xl shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-green-700 hover:text-white">
      <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
       <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
      </svg>
      <span class="ml-2">Video Tausiah</span>
      <input type='file' name="video" class="hidden" onchange="preview_video(event)" />
     </label>
    </div>
    @error('video')
    <div class="text-red-600">{{ $message }}</div>
    @enderror
    <video width="100%" id="output_video" class="mt-2 hidden" height="500px" controls controlsList="nodownload">
     <source src="" type="video/mp4">
    </video>
   </div>
   <button class="my-4 inline-block text-center btn-audio p-2 bg-green-900 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75" id="submit" type="submit">Posting</button>
  </form>
 </div>
</x-guest-layout>

<script>
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

 function preview_video() {
  const reader = new FileReader();
  reader.onload = function() {
   const output = document.getElementById('output_video');
   output.src = reader.result;
   output.classList.remove('hidden')
  }
  reader.readAsDataURL(event.target.files[0]);
 }
</script>