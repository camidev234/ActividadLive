<div class="lg:flex w-full h-full sm:pt-5 lg:pt-0">
    <livewire:add-ticket />

    <div class="dos lg:w-[50%] md:w-[100%] sm:w-[100%] flex flex-col items-center pt-9 h-[100vh] overflow-auto">
        <h1 class="font-bold text-2xl mb-6">Listado de boletas</h1>
        @if(!$tickets->isEmpty())
        <div class="search mb-5 lg:w-[50%] sm:w-[30%] ">
            <input type="text" placeholder="Buscar boletas por numero" class="lg:w-full pl-2 pt-1 pr-2 pb-2 rounded-md border-[1px] border-zinc-900 outline-none" wire:model.live="search_word">
        </div>
        @endif
        @forelse($tickets as $ticket)
        <div class="card lg:w-[50%] sm:w-[60%] bg-zinc-900 p-3 border-b-[7px] rounded-md border-b-zinc-900 mb-4 shadow-lg">
            <div class="w-full lg:flex lg:items-center sm:flex sm:justify-around lg:justify-between">
                <span class="text-white">{{$ticket->created_at}}</span>
                <span class="text-red-500 font-mono">N° {{$ticket->ticket_code}}</span>
            </div>
            <div class="lg:flex sm:flex lg:flex-row mt-2">
                <article class="w-full lg:w-[50%] flex flex-col justify-center items-center">
                    <span class="text-white font-semibold">Ultimas 3 cifras</span>
                    <span class="text-yellow-600">$20.000</span>
                </article>
                <article class="w-full lg:w-[50%] mt-2 lg:mt-0 ml-0 lg:ml-4 flex flex-col justify-center items-center">
                    <span class="text-white font-semibold">Ultimas 4 cifras</span>
                    <span class="text-yellow-600">$50.000</span>
                </article>
            </div>
        </div>

        <!-- <table>
            <thead>
                <tr>
                    <th>N° de boleta</th>
                    <th>Es Valida</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table> -->
        @empty
        <span>No hay boletas agregadas aun</span>
        @endforelse
    </div>
    @livewireScripts
</div>