<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body class="bg-black  text-white">
  <header class="bg-black">
    <nav>
      <p>Envio Gratis a partir de $18.000</p>
    </nav>
  </header>
  <div class="bg-trama-home px-6 pt-1 pb-14 text-white ">
    <div class="relative pt-[280px] w-full">
      <div class="bg-gray-500 p-6 w-full rounded-3xl shadow-xl shadow-gray-800 absolute top-[22px]">
        <p>
          Dejalo guardado por siempre en tu merchandising
        </p>
        <p class="text-5xl font-bold">
          Campeones del mundo.
        </p>
        <p class="mb-6">
          Que lindo poder decir, somos...
        </p>
        <button class="btn-orange">
          Ver catalogo
        </button>
      </div>
      <div class="rounded-b-3xl overflow-hidden">
        <img src="{{ asset('/images/home_1.png') }}" alt="">
      </div>
    </div>
  </div>
  <div class="">
    <div class="flex flex-col justify-center text-center py-10">
      <p class="font-bold text-3xl">
        MÁS VENDIDOS
      </p>
      
    </div>
    <div class="flex justify-center mb-10">
      <button class="btn-orange">
        Ver todo
      </button>
    </div>

    <div id="carouselExampleControls" class="carousel slide relative pb-10 h-[350px] px-12 py-24 mb-12" data-bs-ride="carousel">
      <div class="carousel-inner relative w-full overflow-hidden mb-10">
        <div class="carousel-item active relative float-left w-full">
          <img
            src="{{ asset('/images/carousel/carousel-1.jpeg') }}"
            class="block w-full"
            alt="Domes"
          />
          <div class="py-12 text-center">

            <p class="font-bold mb-1">
              Llaveros Cinta
            </p>
            <p class="font-bold mb-2">15cm</p>
            <p>$17.500,00</p>
          </div>
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="{{ asset('/images/carousel/carousel-2.jpeg') }}"
            class="block w-full"
            alt="Llaveros cinta"
          />
          <div class="py-12 text-center">

            <p class="font-bold mb-1">
              Llaveros Cinta
            </p>
            <p class="font-bold mb-2">15cm</p>
            <p>$17.500,00</p>
          </div>
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="{{ asset('/images/carousel/carousel-3.jpeg') }}"
            class="block w-full"
            alt="Llaveros cinta"
          />
          <div class="py-12 text-center">

            <p class="font-bold mb-1">
              Llaveros Cinta
            </p>
            <p class="font-bold mb-2">15cm</p>
            <p>$17.500,00</p>
          </div>
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="{{ asset('/images/carousel/carousel-4.jpeg') }}"
            class="block w-full"
            alt="Llaveros cinta"
          />
          <div class="py-12 text-center">

            <p class="font-bold mb-1">
              Llaveros Cinta
            </p>
            <p class="font-bold mb-2">15cm</p>
            <p>$17.500,00</p>
          </div>
        </div>
        <div class="carousel-item relative float-left w-full">
          <img
            src="{{ asset('/images/carousel/carousel-5.jpeg') }}"
            class="block w-full"
            alt="Llaveros cinta"
          />
          <div class="py-12 text-center">

            <p class="font-bold mb-1">
              Llaveros Cinta
            </p>
            <p class="font-bold mb-2">15cm</p>
            <p>$17.500,00</p>
          </div>
        </div>
      </div>
      <button
      class="carousel-control-next text-white h-[350px] pt-52 absolute top-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-[-10px]"
      type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next text-white h-[350px] pt-52 absolute top-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-[-10px]"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>