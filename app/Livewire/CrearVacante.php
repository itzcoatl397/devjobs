<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CrearVacante extends Component
{

    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;

    public $imagen;






    protected $rules = [
        "titulo" => "required|string",
        "salario" => "required",
        "categoria" => "required",
        "empresa" => "required",
        "ultimo_dia" => "required",
        "descripcion" => "required",
        "imagen" => "required|image|max:1024",


    ];

    use WithFileUploads;

    public function crearVacante()
    {
       $datos =  $this->validate();

    }

    public function render()
    {

        // consular  la base de dartos

        $salario = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.crear-vacante', [
            'salarios' => $salario,
            'categorias' => $categorias,

        ]);
    }
}
