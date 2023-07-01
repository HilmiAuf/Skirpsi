<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    public function index(){
        return view('addtestimoni');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'isi_testimoni' => 'required|max:400',
            'name' => 'required',
            'foto' => 'image|file|max:5024|required', //maksudnya maksimal file nya 1024 kilobyte ata 1 mb
        ]);

        //jika ada gambar yang di upload
        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto'); //maka simpan di dalam storage/app/foto
        }

        Testimoni::create($validatedData);

        return redirect('/testimoni')->with('success', 'New Event has Been Added');
    }

    public function getTestimoni()
    {
        // ddd($category->id);
        return view('testimoni', [
            'testimonis' => Testimoni::all()
        ]);

    }

    public function testimoniAdmin()
    {
        // ddd($category->id);
        return view('Admin.testimoniadmin', [
            'testimonis' => Testimoni::all()
        ]);

    }

    public function destroy(Testimoni $testimoni)
    {
        //untuk mendelete image lama agar ga numpuk
        if ($testimoni->foto) {
            Storage::delete($testimoni->foto);
        }
        Testimoni::destroy($testimoni->id);

        return redirect('/testimoni-admin')->with('success', 'testimoni has Been deleted');
    }
}
