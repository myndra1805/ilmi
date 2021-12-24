@section('title', 'Surah ' . $tafsir->nama_latin)
<x-app-layout>
 <div>
  <div class="container my-5 px-4 mx-auto text-center">
   <h1 class="text-2xl font-bold">{{$tafsir->nama_latin}}</h1>
   <p class="text-sm mb-3">({{ $tafsir->arti }} - {{$tafsir->jumlah_ayat}} Ayat)</p>
   <p id="deskripsi">{!! $tafsir->deskripsi !!}</p>
  </div>
  <div class="container mx-auto lg:px-20 px-4">
   <div class="grid grid-cols-1">
    @if($id != 1)
    <div class="py-5 text-center">
     <p class="text-3xl font-bold" style="font-family: 'Scheherazade', serif;">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</p>
     <p>Dengan nama Allah Yang Maha Pengasih, Maha Penyayang.</p>
    </div>
    @endif
    @foreach($surah[0]->ayahs as $index => $ayat)
    <div class="py-10 border-t border-gray-400 relative">
     <div class="absolute top-0 left-0 flex">
      <div class="bg-black text-white h-8 rounded-md w-8 flex justify-center items-center">
       {{$index + 1}}
      </div>
      <button class="mx-2 btn-audio p-1 bg-blue-900 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
       </svg>
      </button>
      <button data-tafsir="{{$tafsir->tafsir[$index]->tafsir}}" data-nomor="{{$index + 1}}" class="tafsir p-1 bg-blue-900 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
       </svg>
      </button>
      <audio class="audio">
       <source src="https://cdn.islamic.network/quran/audio/64/ar.alafasy/{{$ayat->number}}.mp3" type="audio/mp3">
       Your browser does not support the audio element.
      </audio>
     </div>
     <p class="text-right text-3xl font-bold my-4" style="font-family: 'Amiri', serif;">{{$ayat->text}}</p>
     <p>{{$surah[1]->ayahs[$index]->text}}</p>
    </div>
    @endforeach
   </div>
  </div>
 </div>

 <!--Modal-->
 <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

  <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

   <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
    <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
     <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
    </svg>
    <span class="text-sm">(Esc)</span>
   </div>

   <!-- Add margin if you want to see some of the overlay behind the modal-->
   <div class="modal-content py-4 text-left px-6">
    <!--Title-->
    <div class="flex justify-between items-center pb-3">
     <p class="text-2xl font-bold">Tafsir Ayat Ke-<span id="no-surat"></span></p>
     <div class="modal-close cursor-pointer z-50">
      <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
       <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
      </svg>
     </div>
    </div>

    <!--Body-->
    <div class="overflow-auto h-60">
     <p class="content-tafsir"></p>
    </div>

    <!--Footer-->
    <div class="flex justify-end pt-2">
     <button class="modal-close px-4 bg-red-500 p-3 rounded-lg text-white hover:bg-blue-400">Close</button>
    </div>

   </div>
  </div>
 </div>
</x-app-layout>
<script>
 document.addEventListener("DOMContentLoaded", event => {
  // document.querySelector("#deskripsi").innerHTML = "{{$tafsir->deskripsi}}"
  const listAudio = [...document.querySelectorAll('.audio')]
  const listBtnAudio = [...document.querySelectorAll('.btn-audio')]
  listBtnAudio.map((btn, i) => {
   btn.addEventListener("click", event => {
    listAudio.map(audio => {
     audio.pause()
     audio.currentTime = 0
    })
    listAudio[i].play()
   })
  })

  const openmodal = document.querySelectorAll('.tafsir')
  for (let i = 0; i < openmodal.length; i++) {
   openmodal[i].addEventListener('click', (event) => {
    event.preventDefault()
    toggleModal()
    const tafsir = openmodal[i].dataset.tafsir
    document.querySelector(".content-tafsir").innerHTML = window.snarkdown(tafsir)
    document.querySelector("#no-surat").innerHTML = openmodal[i].dataset.nomor
   })
  }

  const overlay = document.querySelector('.modal-overlay')
  overlay.addEventListener('click', toggleModal)

  const closemodal = document.querySelectorAll('.modal-close')
  for (let i = 0; i < closemodal.length; i++) {
   closemodal[i].addEventListener('click', toggleModal)
  }

  document.onkeydown = function(evt) {
   evt = evt || window.event
   let isEscape = false
   if ("key" in evt) {
    isEscape = (evt.key === "Escape" || evt.key === "Esc")
   } else {
    isEscape = (evt.keyCode === 27)
   }
   if (isEscape && document.body.classList.contains('modal-active')) {
    toggleModal()
   }
  };


  function toggleModal() {
   const body = document.querySelector('body')
   const modal = document.querySelector('.modal')
   modal.classList.toggle('opacity-0')
   modal.classList.toggle('pointer-events-none')
   body.classList.toggle('modal-active')
   body.classList.toggle('overflow-hidden')
   body.classList.toggle('m-0')
   body.classList.toggle('h-full')
  }
 })
</script>