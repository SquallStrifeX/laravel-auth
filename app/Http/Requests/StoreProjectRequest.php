<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize()
    {
        // Qui puoi inserire la logica per determinare se l'utente è autorizzato a fare questa richiesta.
        // Per ora, restituiamo true per consentire a chiunque di creare un progetto.
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255', // Esempio: il nome del progetto è obbligatorio e deve essere una stringa
            'description' => 'required|string', // Esempio: la descrizione è obbligatoria e deve essere una stringa
            // Aggiungi altre regole di validazione necessarie per i tuoi campi del progetto
        ];
    }
}
