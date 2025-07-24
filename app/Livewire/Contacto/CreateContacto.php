<?php

namespace App\Livewire\Contacto;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\ContactoForm;

class CreateContacto extends Component
{
    public ContactoForm $form;

    public function save(){
        $this->form->store();

        return redirect('/contacto/create-contacto');
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.contacto.create-contacto');
    }
}
