@section('title', 'Iqra ' . $id)
<x-app-layout>
 <style>
  .swiper-container {
   width: 100%;
   height: 100%;
  }

  .swiper-slide {
   text-align: center;
   font-size: 18px;
   background: #fff;

   /* Center slide text vertically */
   display: -webkit-box;
   display: -ms-flexbox;
   display: -webkit-flex;
   display: flex;
   -webkit-box-pack: center;
   -ms-flex-pack: center;
   -webkit-justify-content: center;
   justify-content: center;
   -webkit-box-align: center;
   -ms-flex-align: center;
   -webkit-align-items: center;
   align-items: center;
  }

  .swiper-slide img {
   display: block;
   width: 100%;
   height: 100%;
   object-fit: cover;
  }
 </style>

 <div class="container mx-auto px-5 my-10" style="max-width: 450px;">

  <!-- Swiper -->
  <div class="swiper-container mySwiper">
   <div class="swiper-wrapper">
    @for($i = 0; $i < $pages; $i++)
    <div class="swiper-slide">
     <img src="{{asset($id !== 1  ? '/images/iqra/iqra' . $id . '/' . ($i + 1) . '.jpg' : '/images/iqra/iqra' . $id . '/' . $i . '.png')}}" alt="" class="h-full">
    </div>
    @endfor
   </div>
   <div class="swiper-button-next"></div>
   <div class="swiper-button-prev"></div>
  </div>
 </div>

</x-app-layout>

<script>
 window.addEventListener('DOMContentLoaded', event => {
  const swiper = new window.Swiper(".mySwiper", {
   navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
   },
  });
 })
</script>