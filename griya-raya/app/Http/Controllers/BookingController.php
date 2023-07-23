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
        $validatedData['user_id'] = auth()->user()->id;
        Booking::create($validatedData);
        return redirect('/pesanan')->with('success', 'New Event has Been Added');
    }

    public function index()
    {
        return view('Admin.bookadmin', [
            'bookings' => Booking::all()
        ]);
    }

    public function destroy(Booking $booking)
    {
        Booking::destroy($booking->id);

        if(auth()->user()->utype === "ADM")
        {
        return redirect('/book-admin')->with('success', 'booking has Been deleted');
        }
        else
        {
            return redirect('/pesanan')->with('success', 'booking has Been deleted');
        }
    }

    public function indexUser()
    {
        return view('pesanan', [
            'bookings' => Booking::latest()->where('user_id', auth()->user()->id)->get(),
        ]);
    }

    public function update(Request $request, Booking $booking)
    {
        // dd($request);
        // $rules = [
        //     'status' => 'required',
        // ];
        // $validatedData = $request->validate($rules);
        // Booking::where('id', $booking->id)->update($validatedData);

        // // return redirect('/book-admin')->with('success', 'Booking has Been Updated');
        // return redirect()->back()->with('success', 'your message,here');
        Booking::where('id',$request->id)->update([
            'status'=> $request->status,

        ]);
        return redirect()->to('/book-admin');

    }


}

