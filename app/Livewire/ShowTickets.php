<?php

namespace App\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class ShowTickets extends Component
{

    public $search_word;

    public function render()
    {

        $tickets = Ticket::where('ticket_code', 'like', '%' . $this->search_word . '%')->get();

        return view('livewire.show-tickets', [
            'tickets' => $tickets
        ]);
    }
}
