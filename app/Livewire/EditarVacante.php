<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

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
    public $imagen_nueva;

    use WithFileUploads;

    protected $rules = [
        "titulo" => "required|string",
        "salario" => "required",
        "categoria" => "required",
        "empresa" => "required",
        "ultimo_dia" => "required",
        "descripcion" => "required",
        "imagen_nueva" => "nullable|image|max:1024",


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
        if ($this->imagen_nueva) {
            $imagen = $this->imagen_nueva->store('public/vacantes');
            $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);

        }

        $vacante = Vacante::find($this->id);
        $vacante->titulo = $datos["titulo"];
        $vacante->salario_id = $datos["salario"];
        $vacante->categoria_id = $datos["categoria"];
        $vacante->empresa = $datos["empresa"];
        $vacante->descripcion = $datos["descripcion"];
        $vacante->imagen = $datos["imagen"] ?? $vacante->imagen;
        $vacante->save();
        session()->flash("mensaje", "La Vacante se Actualizo correctamente");

        return redirect()->route("vacantes.index", $this->id);
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
