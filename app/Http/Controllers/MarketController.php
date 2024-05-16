<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Cars;
use App\Models\Carsrent;


class MarketController extends Controller
{
    public function index()
    {

        $user = Auth::user(); // Auth User
        $cardata = Cars::inRandomOrder()->get(); // Display Random

        // innerjoin to array
        $usersxcars = DB::table('owners')
        ->join('cars','owners.owner_id','=','cars.owner_id')
        ->get();

        $userxcar = json_decode($usersxcars); // Decode
        shuffle($userxcar);

        return view('Market/market', compact('user','cardata','userxcar'));
    }

    public function details($kode_mobil)
    {
        $cardata = Cars::inRandomOrder()->get(); // Display Random

        $cars = Cars::where('kode_mobil', $kode_mobil)->first();
        $own = DB::table('owners')->where('owner_id',$cars->owner_id)->first();

         // innerjoin to array
         $usersxcars = DB::table('owners')
         ->join('cars','owners.owner_id','=','cars.owner_id')
         ->get();

         $userxcar = json_decode($usersxcars);
         shuffle($userxcar);

        return view('Market/market-detail', compact('cars', 'cardata','own','userxcar'));
    }

    public function wishlist()
    {
        $useruuid = Auth::user()->uuid;
        $wishlist = Wishlist::where('uuid', $useruuid)->get();

        return view('Market/market-wishlist', compact('useruuid','wishlist'));
    }

    public function addWishlist(Request $request){

        $data = $request->validate([
            'uuid' => 'required',
            'kode_mobil' => 'required',
            'foto_mobil' => 'required',
            'owner' => 'required',
            'merk' => 'required',
            'model' => 'required',
            'tarif' => 'required',

        ]);


            $wish = Wishlist::create($data);


            $wish->save();

            toast('Your Wishlist Successfully Saved','success','top-end')->autoClose(7000);
            return redirect('wishlist');

    }

    public function delWishlist(string $id)
    {
        Wishlist::destroy($id);

        toast('Wishlist Deleted Successfully','success','top-end')->autoClose(7000);
        return back();

    }

    public function rent($kode_mobil)
    {
        $users = Auth::user(); // Auth User
        $cars = Cars::where('kode_mobil', $kode_mobil)->first();
        $owners = DB::table('owners')->where('owner_id',$cars->owner_id)->first();

         // innerjoin to array
         $usersxcars = DB::table('owners')
         ->join('cars','owners.owner_id','=','cars.owner_id')
         ->get();

         $userxcar = json_decode($usersxcars);
        return view('Market/market-rent', compact('users','cars','owners','userxcar'));
    }

    public function requestRent(Request $request){

        $data = $request->validate([
            'kode_mobil' => 'required',
            'uuid_penyewa' => 'required',
            'penyewa' => 'required',
            'pemilik' => 'required',
            'tanggal_rent' => 'required',
            'akhir_rent' => 'required',
            'lama_sewa' => 'required',
            'tarif_rent' => 'required',
            'total_rent' => 'required',
            'bukti_pembayaran' => 'required',

        ]);


            $reqRent = Carsrent::create($data);


            $reqRent->save();

            toast('Your Request Rent Successfully Sent','success','top-end')->autoClose(7000);
            return redirect('profile');

    }


}
