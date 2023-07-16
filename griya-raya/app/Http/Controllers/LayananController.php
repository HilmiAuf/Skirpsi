<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    public function index(){
        return view('Admin.add.addlayanan', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'category' => 'required',
            'harga' => 'required',
            'foto' => 'image|file|max:5024|required', //maksudnya maksimal file nya 5024 kilobyte atau 5 mb
            'ringkasan' => 'required',
            'isi_paket' => 'required',
        ]);
        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto'); //maka simpan di dalam storage/app/foto
        }
        Layanan::create($validatedData);
        return redirect('/layanan-admin')->with('success', 'New Event has Been Added');
    }

    public function getPernikahan()
    {
        // ddd($category->id);
        return view('pernikahan', [
            'layanans' => Layanan::all()->where('category', 'pernikahan')
        ]);
    }

    public function showPernikahan(Layanan $layanan)
    {
        return view('layanan', [
            'layanan' => $layanan
        ]);
    }

    public function getAkad()
    {
        // ddd($category->id);
        return view('akadpernikahan', [
            'layanans' => Layanan::all()->where('category', 'akad nikah')
        ]);
    }

    public function showAkad(Layanan $layanan)
    {
        return view('layananakad', [
            'layanan' => $layanan
        ]);
    }

    public function showAdmin(){
        return view('Admin.layadmin', [
            'layanans' => Layanan::all()
        ]);
    }

    public function edit(Layanan $layanan)
    {
        return view('Admin.edit.editlayanan', [
            'categories' => Category::all(),
            'layanan' => $layanan
        ]);
    }

    public function update(Request $request, Layanan $layanan)
    {
        $rules = [
            'judul' => 'required|max:255',
            'category' => 'required',
            'harga' => 'required',
            'foto' => 'image|file|max:5024|required', //maksudnya maksimal file nya 1024 kilobyte ata 1 mb
            'ringkasan' => 'required',
            'isi_paket' => 'required',
        ];
        $validatedData = $request->validate($rules);
        //jika ada gambar yang di upload
        if ($request->file('foto')) {
            // ika ada foto lama, maka mendelete foto lama
            if ($request->oldfoto) {
                Storage::delete($request->oldfoto);
            }
            $validatedData['foto'] = $request->file('foto')->store('post-fotos'); //maka simpan di dalam post-images
        }
        Layanan::where('id', $layanan->id)->update($validatedData);

        return redirect('/layanan-admin')->with('success', 'Event has Been Updated');
    }

    public function destroy(Layanan $layanan)
    {
        //untuk mendelete image lama agar ga numpuk
        if ($layanan->foto) {
            Storage::delete($layanan->foto);
        }
        Layanan::destroy($layanan->id);
        return redirect('/layanan-admin')->with('success', 'layanan has Been deleted');
    }
}
