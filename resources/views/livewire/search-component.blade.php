<div class="w-full h-full  flex">
    <div class="contleft w-[50%]  overflow-auto h-[100vh]">
        <div class="search w-full flex justify-center items-center h-16 gap-3 sticky top-0 bg-white border-b border-gray-800">
            <input type="text" wire:model.live="queryWord" placeholder="Busca un Departamento" class="w-96 rounded-md pl-1 border border-gray-500">
            <button wire:click="search"><i class="bi bi-search"></i></button>
        </div>
        <div class="tabe">
            <div class="w-[100%] flex justify-center mt-4">
                <h1 class="m-auto">Listado de Departamentos</h1>
            </div>
            <table class="bg-red-500 m-auto mt-6 w-[80%] border border-black mb-6">
                <thead>
                    <tr class="bg-gray-400">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Codigo Del Departamento</th>
                        <th class="px-4 py-2">Nombre del Departamento</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($departaments as $departament)
                    <tr wire:key="{{ $departament->id }}" class="bg-gray-200" wire:click.prevent="selectDepartament({{ $departament->id }})">
                        <td class="px-4 py-2">{{ $departament->id }}</td>
                        <td class="px-4 py-2"><a href="">{{$departament->departament_code}}</a></td>
                        <td class="px-4 py-2"><a href="">{{ $departament->departament_name }}</a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-4 py-2">No se encontraron departamentos</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="contright w-[50%]  overflow-auto h-[100vh] flex items-center flex-col">
        <h1 class=" text-2xl mb-4 mt-8">Ciudades del Departamento</h1>
        <table class="w-[80%] bg-green-500 p-4 rounded-md border border-black">
            <thead>
                <tr class="bg-gray-400">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nombre de la Ciudad</th>
                </tr>
            </thead>
            <tbody>
                @forelse($citiesFind as $city)
                <tr class="bg-gray-200">
                    <td class="px-4 py-2">{{ $city->id }}</td>
                    <td class="px-4 py-2">{{ $city->city_name }}</td>
                </tr>
                @empty
                <span class="px-4 py-3">No hay ciudades para el departamento {{$departament_name == null ? "seleccionado" : "de" . " " . $departament_name->departament_name}}</span>
                @endforelse
            </tbody>
        </table>
    </div>
</div>