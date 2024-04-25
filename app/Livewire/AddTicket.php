<?php

namespace App\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class AddTicket extends Component
{
    public $ticket_code;

    public function render()
    {
        return view('livewire.add-ticket');
    }

    public function saveTicket() {
        $validatedData = $this->validate([
            'ticket_code' => 'required|min:4|max:4|string|unique:tickets'
        ], [
            'ticket_code.required' => 'El numero de la boleta es requerido',
            'ticket_code.max' => 'El numero de la boleta debe ser de solo :max caracteres',
            'ticket_code.min' => 'El numero de la boleta debe ser de :min caracteres',
            'ticket_code.unique' => 'Ya has agregado esta boleta'
        ]);

        $newTicket = new Ticket();
        $newTicket->ticket_code = $validatedData['ticket_code'];
        $newTicket->is_valid = 1;
        $newTicket->save();

        $this->reset();

        return redirect()->route('home');
    }
}
