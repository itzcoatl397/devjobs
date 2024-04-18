<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text "
        wire:model="titulo" :value="old('titulo')" placeholder="Titulo de  la Vacante" />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />

        <select wire:model="salario" id="salario" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
            <option class="" value="{{$salario->id}}
                ">{{$salario->salario}}</option>
            @endforeach
        </select>

        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />

        <select wire:model="categoria"  id="categoria" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
        <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
            <option class="" value="{{$categoria->id}}
                ">{{$categoria->categoria}}</option>
            @endforeach
        </select>

        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text " wire:model="empresa" :value="old('empresa')" placeholder="Empresa ej Netflix,Uber" />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>


    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo Día para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date " wire:model="ultimo_dia" :value="old('ultimo_dia')" />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripción puesto')" />
        <textarea wire:model="descripcion" id="descripcion" placeholder="Descripcion del puesto" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm h-72">{{old('descripcion')}}</textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 w-full p-4" type="file " wire:model="imagen" accept="image/*" />

        <div class="my-5 w-80" >
        <x-input-label for="imagen" :value="__('Imagen Actual')" />
        <img src="{{asset('./storage/vacantes/'.$imagen)}}" alt="">


             <!-- {{-- @if ($imagen)

        Imagen:
        <img src="{{$imagen->temporaryUrl()}}" alt="">

        @endif --}} -->
        </div>
       <div class="my-5 w-80">
<!-- {{-- @if ($imagen)

        Imagen:
        <img src="{{$imagen->temporaryUrl()}}" alt="">

        @endif --}} -->
       </div>
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />

    </div>
    <x-primary-button class="w-full text-center justify-center">
           Guardar
        </x-primary-button>
</form>
