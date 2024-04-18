<div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

        @forelse ($vacantes as $vacante)


           <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center">
              <div class="leading-10">
                 <a href=""  class="text-xl font-bold">{{ $vacante->titulo }}</a>
                 <p class="text-sm text-gray-600 dark:text-gray-200 font-bold">{{ $vacante->empresa }}</p>
                   <p class="text-sm text-gray-500 ">Ultimo dia : {{ $vacante->ultimo_dia}}</p>
              </div>

              <div class="flex gap-3 flex-col md:flex-row items-stretch mt-5 md:mt-0">

               <a class="bg-slate-800 uppercase  mt-2 dark:bg-black py-2 px-4 rounded-lg text-white text-xs font-bold text-center " href="#">
                   Candidatos
               </a>
               <a class="bg-blue-500 uppercase  mt-2 dark:bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center " href="#">
                 Editar
               </a>
               <a class="bg-red-500 uppercase  mt-2 dark:bg-red-800 py-2 px-4 rounded-lg text-white text-xs font-bold  text-center" href="#">
                   Eliminar
               </a>

              </div>
           </div>
           @empty
               <p class=" bg-white dark:bg-slate-300 text-center p-2 font-bold uppercase">Sin Vacantes</p>
           @endforelse



       </div>
       <div class=" m-10 ">
           {{ $vacantes->links() }}
       </div>

</div>
