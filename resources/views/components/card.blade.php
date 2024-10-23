<section
      class="relative text-white rounded-md px-9 py-14 z-10 bg-gradient-to-b from-rgba-blue-sky to-black 
      overflow-hidden"
      style='height: 650px'
    >
      <label class="text-2xl">{{ $name }}</label>
      <p class="z-20 mt-5 px-3 leading-7 text-sm">{{ $info }}</p>
      <img
        class="rounded-md object-cover w-full h-full absolute top-0 left-0 -z-10 opacity-30 duration-1000 delay-100
        hover:transform hover:opacity-40 hover:scale-110 hover:duration-1000"
        src= {{ $image }}
      />
</section>