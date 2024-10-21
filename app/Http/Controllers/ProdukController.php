<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Viewproduk()
    {
        $produk = produk::all();
        return view('produk', ['produk' => $produk]);
    }

    public function CreateProduk(Request $request)
    {
        // Inisialisasi variabel untuk nama file dan jalur penyimpanan
        $imageName = null;
        $filePath = null;

        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() . '_' . $imageFile->getClientOriginalName();  // Nama file disertai timestamp
            $filePath = $imageFile->storeAs('public/images', $imageName);  // Menyimpan file di storage/app/public/images
        }

        // Buat produk baru dengan data yang diberikan dan nama file gambar (jika ada)
        produk::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk,
            'image' => $imageName,  // Simpan nama file gambar ke database
        ]);

        // Redirect kembali ke halaman produk
        return redirect('/produk');
    }

    public function ViewAddProduk()
    {
        return view('addproduk');
    }

    public function DeleteProduk($kode_produk)
    {
        // Menghapus produk berdasarkan kode_produk
        produk::where('kode_produk', $kode_produk)->delete();

        // Redirect kembali ke halaman produk dengan pesan sukses
        return redirect('/produk')->with('success', 'Produk berhasil dihapus');
    }
}
