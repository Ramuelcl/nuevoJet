<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
// use Illuminate\Support\Facades\DB;
use App\Models\User as Dato;
use Livewire\Livewire;

class LiveUsersIndex extends Component
{
    public $selectedItem;

    public $nombre;
    public $email;
    public $password;
    public $profile_photo_path;
    public $is_active;

    public function render()
    {
        // eloquent
        $datos = Dato::all();
        // $datos = Dato::where('id', '>', 0)->get();


        // DB::
        // $datos = DB::table("users")->get();
        // $datos = DB::table("users")->select(["id", "name", "is_active"])->get();
        // $datos = DB::table('users')->where('id', '>', 0)->get();

        // dd($datos);
        return view('livewire.backend.live-users-index', [
            'live-users-index' => Livewire('backend.live-users-index'::class, $datos),
        ]);
        // Carga la vista Livewire y pasa los datos
        return view('ruta.de.tu.vista', [
            'componenteLivewire' => livewire(TuComponenteLivewire::class, $datos),
        ]);
    }
}
