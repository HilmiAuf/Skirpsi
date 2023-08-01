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
    public function booking(Request $request) //booking memerlukan data data di bawah ini
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255', 
            'category' => 'required',
            'harga' => 'required',
            'foto' => 'required', //maksudnya maksimal file nya 1024 kilobyte ata 1 mb
            'ringkasan' => 'required',
            'isi_paket' => 'required',
            'telepon' => 'required|digits_between:10,12',
            'alamat' => 'required|min:10',
            'tanggal' => 'required|date|after_or_equal:today',
            'jumlah_pengunjung' => 'required|min:1',
            'status' => 'required',
        ]);
        $validatedData['user_id'] = auth()->user()->id; //mengecek id yang login dan untuk mengetahui siapa yang login
        Booking::create($validatedData); //membuat data dan dimasukan kedalam database
        return redirect('/pesanan')->with('success', 'New Event has Been Added');// dan setelah berhasil akan menuju ke halaman pesanan
    }

    public function index()
    {
        return view('Admin.bookadmin', [ //untuk menampilkan data pada admin dan menampilkan seluruh data booking
            'bookings' => Booking::all()//mengambil seluruh data
        ]);
    }

    public function destroy(Booking $booking) //untuk menghapus data booking
    {
        Booking::destroy($booking->id);

        if(auth()->user()->utype === "ADM")
        {
        return redirect('/book-admin')->with('success', 'booking has Been deleted'); //kalo dia admin akan masuk ke halama booking admin
        }
        else
        {
            return redirect('/pesanan')->with('success', 'booking has Been deleted');// kalo bukan admin akan masuk kehalaman pesanan
        }
    }

    public function indexUser() //booking terbaru akan berada diatas dan booking sebelumnya ada dibawahnya
    {
        return view('pesanan', [
            'bookings' => Booking::latest()->where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function update(Request $request, Booking $booking) //untuk update status booking 
    {
        Booking::where('id',$request->id)->update([
            'status'=> $request->status, 
        ]);
        return redirect()->to('/book-admin');
    }
}

