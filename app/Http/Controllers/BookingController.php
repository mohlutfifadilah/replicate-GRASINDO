<?php

namespace App\Http\Controllers;

use App\Models\Kuota;
use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class BookingController extends Controller
{
    //
    public function index() {
        $user = User::find(Auth::user()->id);
        $pendaftar = Pendaftar::where('kode_pendaki', '=', $user->kode_pendaki)->where('status', '=', 0)->get();
        $riwayat = Pendaftar::where('kode_pendaki', '=', $user->kode_pendaki)->where('status', '=', 1)->get();
        $count_pendaftar = Pendaftar::where('kode_pendaki', '=', $user->kode_pendaki)->where('status', '=', 0)->count();
        $count_riwayat = Pendaftar::where('kode_pendaki', '=', $user->kode_pendaki)->where('status', '=', 1)->count();
        $pendaftar_first = Pendaftar::where('kode_pendaki', '=', $user->kode_pendaki)->where('status', '=', 0)->first();
        $riwayat_first = Pendaftar::where('kode_pendaki', '=', $user->kode_pendaki)->where('status', '=', 1)->first();

        $harga = 35000;

        $segment = request()->segment(1);
        if ($segment===null){
            $segment = 'booking';
        }
        return view('booking', compact('user', 'pendaftar', 'riwayat', 'count_pendaftar', 'count_riwayat', 'pendaftar_first', 'riwayat_first', 'harga', 'segment'));
    }

    public function booking($id){
        if(!Auth::check()){
            Alert::error('Error', 'Kamu harus login dulu!');
            return redirect('/login')->with('error','Kamu harus login dulu');
        }
        $pendaftar = Pendaftar::where('kode_pendaki', '=', Auth::user()->kode_pendaki)->where('status', '=', 0)->first();

        if($pendaftar){
            return redirect('booking')->with('error','Tidak bisa registrasi lebih dari 1');
        }

        $segment = request()->segment(1);
        if ($segment===null){
            $segment = 'cek_kuota';
        }
        $user = User::find(Auth::user()->id);
        $kuota = Kuota::find($id);
        return view('registrasi', compact('segment','user', 'kuota'));
    }

    public function registrasi(Request $request, $id){
        // check kuota
        $kuota = Kuota::find($id);
        $sisa_kuota = $kuota->kuota_full-$kuota->kuota_sisa;
        // Tangkap jumlah pendaki dari formulir
        $jumlahPendaki = $request->total_pendaki;
        if ($kuota->kuota_sisa === $kuota->kuota_full){
            return redirect()->route('bookingg', $id)->with('error', 'Kuota penuh');
        }
        if($jumlahPendaki>=$sisa_kuota){
            return redirect()->route('bookingg', $id)->with('error', 'Kuota tidak mencukupi');
        }
        if (is_null($request->tanggal_turun)) {
            return redirect()->route('bookingg', $id)->with('tanggal_turun', 'Tanggal Turun harus diisi');
        }
        if (is_null($request->total_pendaki)) {
            return redirect()->route('bookingg', $id)->with('total_pendaki', 'Total Pendaki harus diisi');
        }

        $user = User::find(Auth::user()->id);

        Pendaftar::create([
            'kode_pendaki' => $user->kode_pendaki,
            'nama' => $user->nama_lengkap,
            'usia' => $user->usia,
            'no_telepon' => $user->no_telepon,
            'no_telepon_darurat' => $user->no_telepon,
            'alamat' => $user->alamat,
            'tanggal_naik' => $kuota->tanggal,
            'tanggal_turun' => $request->tanggal_turun,
            'status' => 0
        ]);


        // Loop untuk menangkap data setiap pendaki
        for ($i = 1; $i <= $jumlahPendaki; $i++) {
            $namaPendaki = $request->input('nama_pendaki_' . $i);
            $usiaPendaki = $request->input('usia_pendaki_' . $i);
            $noTeleponPendaki = $request->input('no_telepon_pendaki_' . $i);
            $noTeleponDaruratPendaki = $request->input('no_telepon_darurat_pendaki_' . $i);
            $alamatPendaki = $request->input('alamat_pendaki_' . $i);
            // Lakukan operasi dengan data pendaki
            // Misalnya, simpan ke database atau proses lainnya

            Pendaftar::create([
                'kode_pendaki' => $user->kode_pendaki,
                'nama' => $namaPendaki,
                'usia' => $usiaPendaki,
                'no_telepon' => $noTeleponPendaki,
                'no_telepon_darurat' => $noTeleponDaruratPendaki,
                'alamat' => $alamatPendaki,
                'tanggal_naik' => $kuota->tanggal,
                'tanggal_turun' => $request->tanggal_turun,
                'status' => 0
            ]);
        }

        $kuota->update([
            'kuota_sisa' => $kuota->kuota_sisa+$jumlahPendaki+1,
        ]);
        Alert::success('Berhasil', 'Booking berhasil, silahkan lanjutkan pembayaran!');
        return redirect()->route('booking')->with('sukses', 'Registrasi Pendakian Berhasil!');
    }
    public function delete($id){

        // dd($id);
        $pendaftar = Pendaftar::find($id);

        $data = Pendaftar::where('kode_pendaki', '=', $pendaftar->kode_pendaki)->where('status', 0);
        $total_pendaki = $data->count();
        $kuota = Kuota::where('tanggal', $pendaftar->tanggal_naik)->first();
        $kuota->update([
            'kuota_sisa' => $kuota->kuota_sisa-$total_pendaki,
        ]);
        $data->delete();
        Alert::success('Berhasil', 'Booking berhasil dihapus');
        return redirect('booking')->with('sukses','Booking berhasil dihapus');
    }

    public function survey(Request $request, $id){

        // $response = Http::post('http://127.0.0.1:5000/predict', [
        //     'pernah_mendaki'     => 1,
        //     'jumlah_pendakian'   => 1,
        //     'diatas_2000'        => 1,
        //     'bawa_beban'         => 1,
        //     'pernah_inap'        => 1,
        //     'jumlah_anggota'     => 8
        // ]);

        if(!$request->jumlah_pendakian){
            $jumlah_pendakian = 0;
        } else {
            $jumlah_pendakian = $request->jumlah_pendakian;
        }

        $fitur = [
            (int) $request->pernah_mendaki,
            (int) $jumlah_pendakian,
            (int) $request->diatas_2000,
            (int) $request->bawa_beban,
            (int) $request->pernah_inap,
            (int) $request->jumlah_anggota,
        ];

        $response = Http::post('http://127.0.0.1:5000/predict', [
            'fitur' => $fitur
        ]);

        if ($response->successful()) {
            $json = $response->json();
            $pendaftar = Pendaftar::find($id);

            if ($json['prediksi'] === 0){
                $pesan = "Disarankan membawa porter atau guide, terutama jika belum terbiasa membawa beban berat atau melakukan pendakian jarak jauh. Jangan memaksakan diri jika kondisi fisik tidak fit. Pantau cuaca minimal 1–2 hari sebelum keberangkatan. Selalu utamakan keselamatan, bukan puncak.";
            } else if ($json['prediksi'] === 1){
                $pesan = "Sudah dapat melakukan pendakian mandiri, tetapi tetap perlu evaluasi kesiapan fisik dan logistik. Disarankan mulai belajar navigasi dasar dan manajemen perjalanan tim. Mulai biasakan mendaki dengan membawa beban sendiri dan mengatur ritme perjalanan. Cek kondisi cuaca dan jalur pendakian secara detail, serta siapkan rencana cadangan. Pelajari pertolongan pertama dasar dan etika mendaki (Leave No Trace).";
            } else {
                $pesan = "Siap untuk pendakian panjang, teknikal, atau ekspedisi. Perhatikan manajemen risiko dan cuaca ekstrem. Idealnya menjadi pemimpin tim dan bertanggung jawab atas keselamatan kelompok.Jadilah contoh dalam konservasi alam dan etika lingkungan.";
            }

            $pendaftar->update([
                'kategori' => $json['kategori'],
                'prediksi' => $json['prediksi'],
                'pesan' => $pesan,
            ]);
            Alert::success('Berhasil', 'Survey Berhasil diisi!, silahkan lanjutkan pembayaran');
            return redirect()->route('booking')->with('sukses', 'Survey Berhasil diisi!');
        } else {
            return response()->json([
                'error' => 'Gagal menghubungi API Flask.'
            ], 500);
        }

        // Alert::success('Berhasil', 'Pembayaran berhasil!');
        // return redirect('booking')->with('sukses','Booking berhasil dihapus');
    }
    public function bayar(Request $request, $id){

        if ($request->file('bukti')) {
            // Ambil ukuran file dalam bytes
            $fileSize = $request->file('bukti')->getSize();
            // Periksa apakah ukuran file melebihi batas maksimum (2 MB)
            if ($fileSize > 2 * 1024 * 1024 || $fileSize === False) {
                // File terlalu besar, kembalikan respons dengan pesan kesalahan
                Alert::error('Error', 'Ukuran file tidak lebih dari 2 mb');
                return redirect()->back()->with('bukti', 'Ukuran file tidak lebih dari 2 mb');
            }
            $file = $request->file('bukti');
            $image = $request->file('bukti')->store('bukti');
            $file->move('storage/bukti/', $image);
            $image = str_replace('bukti/', '', $image);
        } else {
            Alert::error('Error', 'Bukti Pembayaran harus diisi');
            return redirect()->back()->with('bukti', 'Bukti Pembayaran harus diisi');
        }
        $pendaftar = Pendaftar::find($id);

        $pendaftar->update([
            'bukti' => $image,
        ]);
        Alert::success('Berhasil', 'Pembayaran berhasil!');
        return redirect('booking')->with('sukses','Booking berhasil dihapus');
    }
}
