<form action="" class="md:w-1/2 space-y-5">
    <div>
        {{-- Titulo --}}
        <x-input-label for="titulo" :value="__('Titulo vacante')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            name="titulo"
            :value="old('tituo')"  
            placeholder="Titulo vacante"
            />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    {{-- Salario --}}
    <div>
        <x-input-label for="salario" :value="__('Salario mensual')" />
        <select
            id="salario"
            name="salario",
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
            >
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>
    {{-- Categoria --}}
    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select
            id="categoria"
            name="categoria",
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
            >
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>
    {{-- Empresa --}}
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            name="empresa"
            :value="old('empresa')"  
            placeholder="Empresa: ej. Netlifx, uber, etc."
            />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    {{-- Ultimo dia --}}
    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />
        <x-text-input 
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            name="ultimo_dia"
            :value="old('ultimo_dia')"
            />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>

    {{-- Descripcion --}}
    <div>
        <x-input-label for="descripcion" :value="__('Descripción del puesto')" />
        <textarea
            name="descripcion"
            placeholder="Descripción general del puesto"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72"
            ></textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>

    {{-- Subida de imagen --}}
    <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            name="imagen"
            />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    {{-- Boton para crear la vacante --}}
    <x-primary-button>
        Crear vacante
    </x-primary-button>
</form>