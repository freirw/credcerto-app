<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {   
        $states = [
            'Acre' => 'AC',
            'AL' => 'Alagoas',
            'AP' => 'Amapá',
            'AM' => 'Amazonas',
            'BA' => 'Bahia',
            'CE' => 'Ceará',
            'DF' => 'Distrito Federal',
            'ES' => 'Espírito Santo',
            'GO' => 'Goiás',
            'MA' => 'Maranhão',
            'MT' => 'Mato Grosso',
            'MS' => 'Mato Grosso do Sul',
            'MG' => 'Minas Gerais',
            'PA' => 'Pará',
            'PB' => 'Paraíba',
            'PR' => 'Paraná',
            'PE' => 'Pernambuco',
            'PI' => 'Piauí',
            'RJ' => 'Rio de Janeiro',
            'RN' => 'Rio Grande do Norte',
            'RS' => 'Rio Grande do Sul',
            'RO' => 'Rondônia',
            'RR' => 'Roraima',
            'SC' => 'Santa Catarina',
            'SP' => 'São Paulo',
            'SE' => 'Sergipe',
            'TO' => 'Tocantins',
        ];

         return view('forms.form', [
        'states' => $states,
    ]);
    }

    public function submitForm(Request $request)
    {
        // Valide os dados do formulário conforme necessário
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'rg' => 'required|string|max:20',
            'cpf' => 'required|string|max:14',
            'birthdate' => 'required|date',
            'mother_name' => 'required|string|max:255',
            'expedition_date' => 'required|date',
            'issuing_authority' => 'required|string',
            'naturalness' => 'required|string',
            
        ]);

        // Processar os dados do formulário, como salvar no banco de dados
    
         //User::create($validatedData);

        // Redirecionar para a página de sucesso
        return redirect()->route('success');
    }
}
