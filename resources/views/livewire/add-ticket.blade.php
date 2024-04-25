<div class="lg:w-[50%] md:w-full sm:w-full lg:h-[100vh] flex flex-col items-center justify-center gap-7 pt-5">

    <form wire:submit.prevent class="flex flex-col gap-3 bg-white w-2/3 p-4 shadow-lg rounded-sm">
        <h1 class="font-bold text-2xl m-auto mb-8">Agregar nueva boleta</h1>
        <label for="">Numero de boleta <span class="text-red-600">*</span></label>
        <input type="text" wire:model.live="ticket_code" placeholder="N° de boleta" class="p-1 border-b-[2px] border-zinc-800 mb-4 outline-none focus:border-zinc-800">
        @error('ticket_code')
        <span class="text-red-500 sm:text-sm">{{$message}}</span>
        @enderror
        <button class="p-1 rounded-2xl bg-zinc-900 text-white" wire:click="saveTicket">Añadir boleta</button>
    </form>
</div>