@section('title', 'Home')
<x-app-layout>
  <style>
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
    }
  </style>

  <div class="relative">
    <div class="bg-green-900 flex md:justify-evenly items-center flex-wrap" style="height: 90vh;">
      <div class="text-center mx-auto md:m-0 mt-20">
        <img src="{{asset('/images/logo.png')}}" alt="" width="100px" class="mx-auto hidden md:block">
        <p class="text-white text-3xl">Selamat Datang di</p>
        <h1 class="text-white font-bold text-6xl">ILMI</h1>
      </div>
      <img src="{{asset('/images/bg.png')}}" alt="" class="md:w-3/6 w-full">
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#064e3b" fill-opacity="1" d="M0,288L30,245.3C60,203,120,117,180,74.7C240,32,300,32,360,69.3C420,107,480,181,540,197.3C600,213,660,171,720,128C780,85,840,43,900,74.7C960,107,1020,213,1080,218.7C1140,224,1200,128,1260,101.3C1320,75,1380,117,1410,138.7L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
    </svg>
  </div>
  <div class="container mx-auto my-10">
    <h1 class="font-bold text-2xl text-center">Tambah Pengetahuan Di ILMI</h1>
    <hr class="bg-green-900 w-52 mx-auto h-1.5 rounded-md mb-3">
    <p style="max-width: 490px;" class="mx-auto text-center">Ada tiga media yang dapat kamu gunakan untuk meningkatkan pengetahuan tentang agama Islam di website Islamic App</p>
    <div class="flex flex-wrap justify-evenly mt-10">
      <div class="w-full md:w-1/2 lg:w-1/4 p-4">
        <a href="/al-quran" class="bg-white h-96 inline-block transition p-5 duration-500 hover:-translate-y-2 transform hover:shadow-2xl shadow-md text-center h-auto">
          <img src="{{asset('/images/al-quran.png')}}" alt="" class="mx-auto h-52">
          <h3 class="font-bold text-xl text-center mt-5">Al-Qur'an</h3>
          <p class="text-center">Menyajikan Al-Qur'an lengkap dengan tafsir masing-masing ayat serta audio yang dapat di dengar</p>
        </a>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 p-4">
        <a href="/iqra" class="bg-white h-96 inline-block transition p-5 duration-500 hover:-translate-y-2 transform hover:shadow-2xl shadow-md text-center h-auto">
          <img src="{{asset('/images/al-quran.png')}}" alt="" class="mx-auto h-52">
          <h3 class="font-bold text-xl text-center mt-5">Iqra</h3>
          <p class="text-center">Menampilkan iqra satu sampai enam yang dapat digunakan untuk belajar membaca Al-Qur'an</p>
        </a>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 p-4">
        <a href="/tausiah" class="bg-white h-96 inline-block transition p-5 duration-500 hover:-translate-y-2 transform hover:shadow-2xl shadow-md text-center h-auto">
          <img src="{{asset('/images/video.png')}}" alt="" class="mx-auto h-52">
          <h3 class="font-bold text-xl text-center mt-5">Tausiah</h3>
          <p class="text-center">Dengarkan video ceramah ustadz-ustadz terbaik untuk menambah pengetahuan</p>
        </a>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 p-4">
        <a href="/articles" class="bg-white h-96 inline-block transition p-5 duration-500 hover:-translate-y-2 transform hover:shadow-2xl shadow-md text-center h-auto">
          <img src="{{asset('/images/artikel.png')}}" alt="" class="mx-auto h-52">
          <h3 class="font-bold text-xl text-center mt-5">Articles</h3>
          <p class="text-center">Tambah pengetahuan anda dengan membaca artikel tentang agama islam</p>
        </a>
      </div>
    </div>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffffff" fill-opacity="1" d="M0,256L26.7,261.3C53.3,267,107,277,160,266.7C213.3,256,267,224,320,224C373.3,224,427,256,480,261.3C533.3,267,587,245,640,208C693.3,171,747,117,800,133.3C853.3,149,907,235,960,250.7C1013.3,267,1067,213,1120,186.7C1173.3,160,1227,160,1280,170.7C1333.3,181,1387,203,1413,213.3L1440,224L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
  </svg>
  <div class="bg-white py-10">
    <h1 class="font-bold text-2xl text-center">Daftar Tausiah Terbaru</h1>
    <hr class="bg-green-900 w-52 mx-auto h-1.5 rounded-md mb-3">
    <p style="max-width: 490px;" class="mx-auto text-center">Dengarkan ceramah dari ustad-ustad terbaik berikut untuk menambah pengetahuan dalam agama Islam</p>
    <div class="container mx-auto">
      <div class="swiper-container mySwiper">
        <div class="swiper-wrapper pb-16">
          @foreach($listTausiah as $tausiah) <div class="swiper-slide">
            <a href="/tausiah/{{$tausiah->id}}" class="shadow-xl inline-block">
              <img src="{{asset($tausiah->image)}}" height="250px" width="200px" />
              <div class="p-4">
                <h3 class="font-bold text-xl" style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;">{{$tausiah->title}}</h3>
                <p style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;">{{$tausiah->ustad}}</p>
              </div>
            </a>
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="text-center mt-5">
      <a href="/tausiah" class="mx-4 my-4 inline-block text-center btn-audio py-2 px-6 bg-green-900 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">Lihat Semua</a>
    </div>
  </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffffff" fill-opacity="1" d="M0,160L26.7,144C53.3,128,107,96,160,112C213.3,128,267,192,320,192C373.3,192,427,128,480,112C533.3,96,587,128,640,122.7C693.3,117,747,75,800,85.3C853.3,96,907,160,960,192C1013.3,224,1067,224,1120,197.3C1173.3,171,1227,117,1280,96C1333.3,75,1387,85,1413,90.7L1440,96L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
  </svg>

  <div class="container mx-auto my-10">
    <h1 class="font-bold text-2xl text-center">Artikel Terbaru Dari Kami</h1>
    <hr class="bg-green-900 w-52 mx-auto h-1.5 rounded-md mb-3">
    <p style="max-width: 490px;" class="mx-auto text-center">Tambah pengetahuan dengan membaca artikel-artikel yang berisi informasi tentang agama Islam</p>
    <div class="flex flex-wrap justify-evenly mt-10">
      @foreach($articles as $article) <div class="lg:w-4/12 md:w-6/12 w-full p-4">
        <div class="shadow-xl bg-white">
          <div class="overflow-hidden">
            <img src="{{asset('/images/articles/' . $article->image)}}" alt="" width="100%" class="h-44 hover:scale-150 transition duration-500 transform">
          </div>
          <div class="mt-2">
            <p class="text-sm px-4">{{explode(' ', $article->created_at)[0]}}</p>
          </div>
          <p style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;" class="font-bold text-xl px-4 my-1">{{$article->title}}</p>
          <p class="px-4" style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden;">{!!strip_tags($article->content)!!}.</p>
          <a href="/article/{{$article->id}}" class="mx-4 my-4 inline-block text-center btn-audio p-2 bg-green-900 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">Selengkapnya</a>
        </div>
    </div>
    @endforeach
  </div>
  <div class="text-center mt-5">
    <a href="/articles" class="mx-4 my-4 inline-block text-center btn-audio py-2 px-6 bg-green-900 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">Lihat Semua</a>
  </div>
  </div>
</x-app-layout>

<script>
  window.addEventListener("DOMContentLoaded", event => {
    const swiper = new window.Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  })
</script>