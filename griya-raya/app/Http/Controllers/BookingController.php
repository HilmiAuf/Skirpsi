<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class BookingController extends Controller
{
    public function booking(Request $request)
    {
        // ddd($request);

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'category' => 'required',
            'harga' => 'required',
            // 'slug' => 'required|unique:posts',
            'foto' => 'required', //maksudnya maksimal file nya 1024 kilobyte ata 1 mb
            'ringkasan' => 'required',
            'isi_paket' => 'required',

            'telepon' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required|date|after_or_equal:today',
            'jumlah_pengunjung' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

       
        Booking::create($validatedData);

        return redirect('/')->with('success', 'New Event has Been Added');
        
    }

    public function index()
    {
        return view('Admin.bookadmin', [
            'bookings' => Booking::all()
        ]);
    }

    public function destroy(Booking $booking)
    {
        // $is_admin = User::select('utype')
        // ->where('id', '=', auth()->user()->id)
        // ->get();

        // dd($is_admin);
        //untuk mendelete image lama agar ga numpuk
        // if ($booking->foto) {
        //     Storage::delete($booking->foto);
        // }
        Booking::destroy($booking->id);

        if(auth()->user()->utype === "ADM")
        {
        return redirect('/book-admin')->with('success', 'booking has Been deleted');
        }
        else
        {
            return redirect('/pesanan')->with('success', 'booking has Been deleted');
        }

        // if($is_admin == "ADM"){
        //     return redirect('/book-admin');
        // } elseif ($is_admin == "USR") {
        //     return redirect('/pesanan')->with('success', 'booking has Been deleted');
        // }

    }

    public function indexUser()
    {
        return view('pesanan', [
            'bookings' => Booking::latest()->where('user_id', auth()->user()->id)->get(),
        ]);
    }
}

