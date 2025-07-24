<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Contact;
use App\Mail\ContactNotification;

class ContactoForm extends Form
{
    //

    #[Validate('required|min:6')]
    public $nombre;

    #[Validate('required|email')]
    public $email;

    #[Validate('required')]
    public $body;

    public function store(){
        $this->validate();

        Mail::to($this->email)->send(new ContactNotification($this->nombre, $this->email, $this->body));

        return redirect('/contacto/create-contacto');
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio',

            'email.required' => 'El campo email es obligatorio',

            'body.required' => 'El campo mensaje  es obligatorio',
        ];
    }

    public function validationAttributes(): array
    {
        return [
            'nombre' => 'nombre del usuarioi',
            'email' => 'email del usuarioi',
            'body' => 'Mensaje del usuario',
        ];
    }

}
