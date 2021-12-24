@section('title', 'Daftar Iqra')

<x-app-layout>
 <div class="bg-green-900" style="height: 70vh;">
  <img src="{{asset('/images/al-quran.png')}}" alt="" class="h-80 mx-auto">
  <div class="text-center">
   <h1 class="text-white text-3xl font-bold">Iqra</h1>
   <p class="text-white max-w-sm mx-auto">Menyajikan iqra satu sampai enam yang dapat digunakan untuk belajar membaca Al-Qur'an</p>
  </div>
 </div>
 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#064e3b" fill-opacity="1" d="M0,224L24,234.7C48,245,96,267,144,266.7C192,267,240,245,288,213.3C336,181,384,139,432,117.3C480,96,528,96,576,117.3C624,139,672,181,720,186.7C768,192,816,160,864,138.7C912,117,960,107,1008,128C1056,149,1104,203,1152,208C1200,213,1248,171,1296,149.3C1344,128,1392,128,1416,128L1440,128L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path>
 </svg>
 <div class="container mx-auto px-5">
  <div class="flex flex-wrap justify-center">
   @foreach($images as $i => $image)
   <div class="w-full md:w-1/2 lg:w-1/6 p-5">
    <a href="/iqra/{{$i + 1}}" class="inline-block shadow-xl transition duration-500 transform hover:-translate-y-1">
     <img src="{{asset('/images/iqra/cover/' . $image)}}" alt="" class="w-full">
    </a>
   </div>
   @endforeach
  </div>
 </div>
</x-app-layout>