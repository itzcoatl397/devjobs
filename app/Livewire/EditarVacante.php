<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;

class EditarVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;

    public $imagen;

    public function mount(Vacante $vacante)
    {

        $this->titulo = $vacante->titulo;
        $this->salario = $vacante->salario_id;
        $this->categoria = $vacante->categoria_id;
        $this->empresa = $vacante->empresa;
        $this->ultimo_dia = $vacante->ultimo_dia;
        $this->descripcion = $vacante->descripcion;
        $this->imagen = $vacante->imagen;

    }
    public function render()
    {
        $salario = Salario::all();
        $categorias = Categoria::all();

        return view(
            'livewire.editar-vacante',
            [
                'salarios' => $salario,
                'categorias' => $categorias,
            ]
        );
    }
}
