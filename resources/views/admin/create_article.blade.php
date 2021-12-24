@section('title', 'Articles')
<x-guest-layout>
 <div class="px-5 my-10 grid grid-cols-1 gap-4">
  <input type="text" name="judul" id="judul" class="rounded-xl w-full focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-transparent py-2.5" placeholder="Masukkan judul artikel">
  <div class="flex w-full my-2 items-center bg-grey-lighter">
   <label class="w-64 flex items-center px-4 py-2.5 bg-white text-blue rounded-xl shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-green-700 hover:text-white">
    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
     <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
    </svg>
    <span class="ml-2">Thumbnail Artikel</span>
    <input type='file' class="hidden" onchange="preview_image(event)" />
   </label>
  </div>
  <img id="output_image" class=""/>
  <textarea class="focus:outline-none focus:ring-2 focus:ring-green-700 focus:border-transparent" id="content" placeholder="Konten artikel" name="content"></textarea>
 </div>
</x-guest-layout>
<script>
 window.addEventListener("DOMContentLoaded", event => {
  ClassicEditor
   .create(document.querySelector('#content'))
   .catch(error => {
    console.error(error);
   });
 })

 function preview_image(event) {
  const reader = new FileReader();
  reader.onload = function() {
   const output = document.getElementById('output_image');
   output.src = reader.result;
   output.classList.add('w-40')
  }
  reader.readAsDataURL(event.target.files[0]);
 }
</script>