@extends('template.main')
@section('title', 'GRASINDO')
@section('content')

<div class="container">
    <nav aria-label="breadcrumb" class="mt-4">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">S.O.P</li>
        </ol>
    </nav>
</div>

<div class="container">
    <h2>
        Standar Operasional Prosedur : Gunung Sindoro via Kledung
    </h2>
    <img src="{{ asset('storage/assets/image/rute.png') }}" alt="" width="500"  height="700" style="margin-left: auto; margin-right: auto; display: block; margin-top: 20px;">
    <div class="medium-7 large-12 columns">
        <h5><b>Keterangan Perjalanan Pendakian</b></h5>
        <ul>
            <li>Basecamp - POS 1 (2 - 2,5 Jam)</li>
            <p style="text-align: justify;">Dari Basecamp, pendakian dimulai dengan naik melewati perkebunan penduduk dan
                jajaran pohon pinus. Pendakian mulai menanjak, melewati jalan setapak yang kadang membingungkan antara jalur
                pendakian dan jalur perkebunan penduduk. Sehingga harus hati-hati dan mencari petunjuk jalur pendakian yang
                benar apabila melewati persimpangan. Biasanya dipasang di sebuah pohon yang cukup besar dan mudah ditemukan.
                Setelah melewati jajaran pohon pinus, selanjutnya jalur pendakian akan mulai melewati berbagai vegetasi khas
                gunung dengan pohon-pohon yang besar. Pendakian terus saja menanjak tanpa bonus dataran yang cukup lapang.
            </p>
            <li>POS 1 - POS 2 (1,5 - 2 Jam)</li>
            <p style="text-align: justify;">Pos 1 berada di ketinggian 1960 mdpl. Berupa tanah datar tanpa ada shelter. Akan
                tetapi, cukuplah untuk melepas penat setelah melewati Pos 1 yang cukup panjang. Selanjutnya, menuju Pos 2
                trek masih tidak jauh berbeda dengan perjalanan menuju Pos 1. Dengan pohon-pohon besar dan tinggi yang dapat
                melindungi kita dari sinar matahari. Pada perjalanan menuju Pos 2, sering juga ditemukan kawanan lutung yang
                bergelantungan diatas pohon yang tinggi.</p>
            <li>POS 2 - POS 3 (2 - 3 Jam)</li>
            <p style="text-align: justify;">Pos 2 berada pada ketinggian 2080 mdpl. Pos 2 berupa tanah datar dengan luas
                tidak jauh berbeda dengan Pos 1. Perjalanan menuju Pos 3 sedikit lebih ringan, kemudian melewati titik
                pertemuan jalur antara jalur pendakian via Bambangan Purbalingga dangan Dipajaya Pemalang pada ketinggian
                2440 mdpl. Selanjutnya, jalur tetap menanjak hingga sampai di Pos 3 (Pondok Cemara).</p>
            <li>POS 3 - POS 4 (1 - 1,5 Jam)</li>
            <p style="text-align: justify;">Pos 3 Pondok Cemara berada di ketinggian 2465 mdpl, berupa tanah datar yang
                cukup luas. Trek yang dilalui menuju pos 4 mulai banyak pohon besar dengan akar yang tidak kalah besar. Akar
                ini dapat membantu maupun menyulitkan pendaki. Dengan jalu yang tetap menanjak, akar dan dahan tersebut
                dapat kita memanfaatkan untuk berpegangan. Namun, terdapat juga akar dan dahan yang menghalangi jalur,
                sehingga cukup menyulitkan pendakian.</p>
            {{-- <li>POS 4 - POS 5 (0,5 - 1 Jam)</li>
            <p style="text-align: justify;">POS 4 (Samaranthu) berada pada ketinggian 2635 mdpl. Dikenal sebagai pos angker
                sehingga jarang digunakan untuk berkemah. Pos samaranthu dipercaya berasal dari kata samar dan hantu, yang
                artinya yang samar-samar atau hantuyang suka menyamar. Perjalanan menuju Pos 5 tidak terlalu jauh, dengan
                trek banyak akar dan dahan seperti pada perjalanan menuju Pos 4.</p>
            <li>POS 5 - POS 6 (0,5 - 1 Jam)</li>
            <p style="text-align: justify;">POS 5 (Mata Air) berada di ketinggian 2775 mdpl. Di Pos ini berupa tanah yang
                cukup lapang dan terdapat sumber mata air musiman sehingga sering digunakan untuk bermalam pendaki. Di Pos 5
                terdapat shelter dan juga warung yang menyediakan berbagai makanan. Perjalanan menuju Pos 6 tidak jauh
                dengan vegetasi yang tidak serimbun sebelumnya.</p>
            <li>POS 6 - POS 7 (0,5 - 1 Jam)</li>
            <p style="text-align: justify;">Pos 6 (Samyang Kendit), berupa tanah datar yang tidak terlalu luas. Setelah
                melewati Pos 6, perjalanan mulai terbuka, kita dapat melihat bintang bertebaran di malam hari dan
                pemandangan indah di siang hari asal tidak tertutup kabut.</p>
            <li>POS 7 - POS 9 (1,5 - 2 Jam)</li>
            <p style="text-align: justify;">Pos 7 (Samyang Jampang) merupakan tempat favorit bagi pendaki untuk mendirikan
                tenda dan berkemah. Sebab Pos 7 berupa tanah yang cukup lapang dengan shelter serta cukup terbuka. Sehingga,
                pemandangan terlihat sangat indah. Selain itu, Pos 7 juga sudah tidak jauh lagi dengan puncak slamet. Trek
                selanjutnya lebih berat, kita akan menuju ke lahan terbuka melewati Pos 8 (Samyang Kendit) kemudian menuju
                Pos 9 (Pelawangan). Walaupun cukup berat, tapi pemandangannya juga sangat indah dengan bunga Edelweiss yang
                banyak ditemukan jika sedang waktunya mekar.</p> --}}
            <li>POS 4 - Puncak (2 - 3 Jam)</li>
            <p style="text-align: justify;">Pos 9 merupakan batas vegetasi yang ditandai dengan adanya sebuah bendera Merah
                Putih. Trek selanjutnya lebih berat lagi dan sangat menantang. Jalur pendakian yang dilalui cukup terjal
                dengan banyak batuan dan kerikil yang labil bercampur dengan pasir. Sehingga, sangat rawan terpeleset dan
                terjatuh jika tidak waspada dan hati-hati.</p>
        </ul>
        <h5><b>Barang yang wajib dibawa :</b></h5>
        <p style="text-align: justify;">Calon Pendaki diwajibkan membawa barang berupa :
        </p>
        <ul>
            <li>Peralatan Pribadi seperti Sleeping Bag, Senter/Headlamp, Jas Hujan</li>
            <li>Sepatu Tracking (Wajib bagi yang melakukan pendakian Camp)</li>
            <li>Peralatan Pribadi seperti jas hujan, senter/Headlamp dan juga sepatu tracking. (Wajib bagi yang melakukan pendakian tektok)</li>
            <li>Untuk perbekalan air mineral/orangnya 3 liter untuk yang camp</li>
            <li>Sedangkan yang tek-tok/orangnya 1.5 liter.</li>
            <li>⁠Pendakian Tek-tok wajib menggunakan Emergency Blanket (minimal 1 /rombongan)</li>
            <li>Pendakian Tek-tok wajib membawa Nasi Bungkus (/orangnya 1)</li>
            <li>Bagi Perempuan yang sedang berhalangan, batas pendakian hanya sampai Sunrise Camp</li>
        </ul>
        {{-- <h5><b>Larangan-Larangan saat Pendakian</b></h5>
        <p style="text-align: justify;">Calon Pendaki diwajibkan membawa barang dasar (akan diperiksa di basecamp) berupa :
        </p>
        <ol>
            <li>Masuk dan melakukan kegiatan pendakian tanpa izin dari pengelola basecamp.</li>
            <li>Tidak membawa turun sampah yang dihasikan selama kegiatan pendakian.</li>
            <li>Merusak, mengotori dan melakukan kegiatan vandalisme, seperti mencoret-coret bangunan/plang/batu/pohon,
                menempel stiker, memasang penunjuk arah tidak resmi, dan melakukan pencemaran lingkungan.</li>
            <li>Membawa dan menyalakan petasan, tlare, atau kembang api di kawasan Gunung Slamet.</li>
            <li>Mengambil, memetik, dan merusak pepohonan dan tumbuhan yang dilindungi seperti bunga edelweis.</li>
            <li>Menangkap, membunuh, melukai, atau membawa keluar satwa dari kawasan hutan Gunung Slamet.</li>
            <li>Membawa minuman keras, obat terlarang, senjata tajam, senapan.</li>
        </ol>
        <center style="color: red;">
            <h5><b>Daftar Blacklist Pendaki</b></h5>
        </center>
        <div class="row column">
            <div class="large-12">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Lama Hari</th>
                            <th>Jangka Waktu</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $u)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $u->nama_lengkap }}</td>
                            <td>{{ $u->deskripsi }}</td>
                            <td>{{ $u->lama }} hari</td>
                            <td>{{ $u->jangka }}</td>
                            <td>
                                <h2 class="badge alert">Blacklist</h2>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <p style="text-align: justify;">Dan mematuhi semua peraturan yang diterapkan di Basecamp Pendakian Gunung Slamet via
            Dipajaya. Serta akan bertanggungjawab dan menerima sanksi apabila melanggar peraturan.</p> --}}
    </div>
</div>

@endsection
@section('script')
<script>
</script>
@endsection
