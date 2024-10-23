<article class="relative w-full grid place-content-center">
    <div
      class="relative duration-200 hover:transition-all hover:ease-linear ease-linear hover:scale-105 
      hover:duration-200 max-w-screen-sm h-64 p-6 bg-slate-300 border border-gray-200 rounded-lg shadow shadow-slate-500
      dark:bg-gray-800 dark:border-gray-700 z-20"
    >
      <a href="#">
        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
          {{ $title }}
        </h5>
      </a>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-300" style="font-size:13px">
        {{ $description }}
      </p>     
      
      <img 
      class="absolute top-0 left-0 object-cover w-full h-full rounded-lg opacity-30 -z-10 "
      src={{ $image }}></img> 
    </div>
     
  </article>