<div id="popup-modal-question" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-black rounded-lg shadow dark:bg-white">
            <button type="button"
                class="absolute top-3 end-2.5 text-gray-600 bg-transparent  rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  dark:hover:text-blue-500"
                data-modal-hide="popup-modal-question">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Cerrar</span>
            </button>
            <div class="p-4 md:p-5 text-center">                
                <ion-icon name="help-outline"  class="w-12 h-12 mb-5 text-blue-600"></ion-icon>               
                <h3 class="mb-5 text-sm font-normal text-gray-500 dark:text-black">
                    {{ $message }}
                </h3>
                <button data-modal-hide="popup-modal-question" type="submit"
                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300  font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Si
                </button>
                <button data-modal-hide="popup-modal-question" type="button"
                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    No
                </button>


            </div>
        </div>
    </div>
</div>
