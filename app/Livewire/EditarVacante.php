<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;

class EditarVacante extends Component
{

    public $id;
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



    ];

    public function mount(Vacante $vacante)
    {

        $this->id = $vacante->id;
        foreach ($vacante->getAttributes() as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
        $this->salario = $vacante->salario_id;
        $this->categoria = $vacante->categoria_id;

    }

    public function editarVacante()
    {
        $datos = $this->validate();
        // si hay un a nueva imagen

        $vacante = Vacante::find($this->id);
        $vacante->titulo = $datos["titulo"];
        $vacante->salario_id = $datos["salario"];
        $vacante->categoria_id = $datos["categoria"];
        $vacante->empresa = $datos["empresa"];
        $vacante->descripcion = $datos["descripcion"];

        $vacante->save();

        session()->flash("mensaje", "La Vacante se Actualizo correctamente");

        return redirect()->route("vacantes.index", $this->id);






        // asignar



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
