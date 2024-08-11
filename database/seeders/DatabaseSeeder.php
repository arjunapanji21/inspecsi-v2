<?php

namespace Database\Seeders;

use App\Models\Hospital;
use App\Models\KategoriMasalahKeperawatan;
use App\Models\MasalahKeperawatan;
use App\Models\Room;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@inspecsi.my.id',
            'username' => 'superadmin',
            'password' => bcrypt('superadmin'),
            'role' => 'Super Admin',
        ]);
        User::create([
            'name' => 'Ernawati',
            'email' => 'ernawati@inspecsi.my.id',
            'username' => 'ernawati',
            'password' => bcrypt('ernawati'),
            'role' => 'Super Admin',
        ]);

        Hospital::create([
            'name' => 'dr. Bratanata'
        ]);

        Room::create([
            'name' => 'Pav. Kartika',
            'hospital_id' => 1,
            'user_id' => 3,
        ]);
        Room::create([
            'name' => 'Pav. Hesti',
            'hospital_id' => 1,
            'user_id' => 4,
        ]);
        Room::create([
            'name' => 'Wira Sakti',
            'hospital_id' => 1,
            'user_id' => 5,
        ]);
        Room::create([
            'name' => 'Eka Paksi (B)',
            'hospital_id' => 1,
            'user_id' => 6,
        ]);
        Room::create([
            'name' => 'Eka Paksi (A)',
            'hospital_id' => 1,
            'user_id' => 7,
        ]);
        Room::create([
            'name' => 'Kirana',
            'hospital_id' => 1,
            'user_id' => 8,
        ]);
        Room::create([
            'name' => 'Akasia',
            'hospital_id' => 1,
            'user_id' => 9,
        ]);
        Room::create([
            'name' => 'Cempaka',
            'hospital_id' => 1,
            'user_id' => 10,
        ]);
        Room::create([
            'name' => 'ICU',
            'hospital_id' => 1,
            'user_id' => 11,
        ]);
        Room::create([
            'name' => 'Meranti',
            'hospital_id' => 1,
            'user_id' => 12,
        ]);
        Room::create([
            'name' => 'Kenari',
            'hospital_id' => 1,
            'user_id' => 13,
        ]);

        User::create([
            'name' => 'Sri Nurhandayani, Amd.Kep',
            'email' => 'sri.nurhandayani@inspecsi.my.id',
            'username' => 'srinurhandayani',
            'password' => bcrypt('srinurhandayani'),
            'role' => 'Kepala Ruang',
            'hospital_id' => 1,
            'room_id' => 1,
        ]);
        User::create([
            'name' => 'Homsiah, Amd.Kep',
            'email' => 'homsiah@inspecsi.my.id',
            'username' => 'homsiah',
            'password' => bcrypt('homsiah'),
            'role' => 'Kepala Ruang',
            'hospital_id' => 1,
            'room_id' => 2,
        ]);
        User::create([
            'name' => 'Yulia Meryani, Amd.Kep',
            'email' => 'yulia.meryani@inspecsi.my.id',
            'username' => 'yuliameryani',
            'password' => bcrypt('yuliameryani'),
            'role' => 'Kepala Ruang',
            'hospital_id' => 1,
            'room_id' => 3,
        ]);
        User::create([
            'name' => 'Anita, Amd.Kep',
            'email' => 'anita@inspecsi.my.id',
            'username' => 'anita',
            'password' => bcrypt('anita'),
            'role' => 'Kepala Ruang',
            'hospital_id' => 1,
            'room_id' => 4,
        ]);
        User::create([
            'name' => 'Siti Masitah, Amd.Kep',
            'email' => 'siti.masitah@inspecsi.my.id',
            'username' => 'sitimasitah',
            'password' => bcrypt('sitimasitah'),
            'role' => 'Kepala Ruang',
            'hospital_id' => 1,
            'room_id' => 5,
        ]);
        User::create([
            'name' => 'Devi Kartika Sari, Amd.Kep',
            'email' => 'devi.ks@inspecsi.my.id',
            'username' => 'deviks',
            'password' => bcrypt('deviks'),
            'role' => 'Kepala Ruang',
            'hospital_id' => 1,
            'room_id' => 6,
        ]);
        User::create([
            'name' => 'Ernidawati, Amd.Kep',
            'email' => 'ernidawati@inspecsi.my.id',
            'username' => 'ernidawati',
            'password' => bcrypt('ernidawati'),
            'role' => 'Kepala Ruang',
            'hospital_id' => 1,
            'room_id' => 7,
        ]);
        User::create([
            'name' => 'Sumarni, S.Kep',
            'email' => 'sumarni@inspecsi.my.id',
            'username' => 'sumarni',
            'password' => bcrypt('sumarni'),
            'role' => 'Kepala Ruang',
            'hospital_id' => 1,
            'room_id' => 8,
        ]);
        User::create([
            'name' => 'Deddy, Amd.Kep',
            'email' => 'deddy@inspecsi.my.id',
            'username' => 'deddy',
            'password' => bcrypt('deddy'),
            'role' => 'Kepala Ruang',
            'hospital_id' => 1,
            'room_id' => 9,
        ]);
        User::create([
            'name' => 'Dewi Supriyanti, Amd.Keb',
            'email' => 'dewi.supriyanti@inspecsi.my.id',
            'username' => 'dewisupriyanti',
            'password' => bcrypt('dewisupriyanti'),
            'role' => 'Kepala Ruang',
            'hospital_id' => 1,
            'room_id' => 10,
        ]);
        User::create([
            'name' => 'Suwarni, Amd.Kep',
            'email' => 'suwarni@inspecsi.my.id',
            'username' => 'suwarni',
            'password' => bcrypt('suwarni'),
            'role' => 'Kepala Ruang',
            'hospital_id' => 1,
            'room_id' => 11,
        ]);

        User::create([
            'name' => 'Marini, Amd.Kep',
            'email' => 'marini@inspecsi.my.id',
            'username' => 'marini',
            'password' => bcrypt('marini'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 1,
        ]);
        User::create([
            'name' => 'Mery Anggraini, Amd.Kep',
            'email' => 'mery.anggraini@inspecsi.my.id',
            'username' => 'meryanggraini',
            'password' => bcrypt('meryanggraini'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 1,
        ]);
        User::create([
            'name' => 'Nining Paurdiah, Amd.Kep',
            'email' => 'nining.paurdiah@inspecsi.my.id',
            'username' => 'niningpaurdiah',
            'password' => bcrypt('niningpaurdiah'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 1,
        ]);
        User::create([
            'name' => 'Eva CN, Amd.Kep',
            'email' => 'eva.cn@inspecsi.my.id',
            'username' => 'evacn',
            'password' => bcrypt('evacn'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 1,
        ]);

        User::create([
            'name' => 'Herlindayanti, Amd.Kep',
            'email' => 'herlindayanti@inspecsi.my.id',
            'username' => 'herlindayanti',
            'password' => bcrypt('herlindayanti'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 2,
        ]);
        User::create([
            'name' => 'Een Yuheni, Amd.Kep',
            'email' => 'een.yuheni@inspecsi.my.id',
            'username' => 'eenyuheni',
            'password' => bcrypt('eenyuheni'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 2,
        ]);
        User::create([
            'name' => 'Luh Utami Dewi, Amd.Kep',
            'email' => 'luh.utami.dewi@inspecsi.my.id',
            'username' => 'luhutamidewi',
            'password' => bcrypt('luhutamidewi'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 2,
        ]);
        User::create([
            'name' => 'Cherly, Amd.Kep',
            'email' => 'cherly@inspecsi.my.id',
            'username' => 'cherly',
            'password' => bcrypt('cherly'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 2,
        ]);
        User::create([
            'name' => 'Siti Fatimah, Amd.Kep',
            'email' => 'siti.fatimah@inspecsi.my.id',
            'username' => 'sitifatimah',
            'password' => bcrypt('sitifatimah'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 3,
        ]);
        User::create([
            'name' => 'Siti Ria, Amd.Kep',
            'email' => 'siti.ria@inspecsi.my.id',
            'username' => 'sitiria',
            'password' => bcrypt('sitiria'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 3,
        ]);
        User::create([
            'name' => 'Sarinah, Amd.Kep',
            'email' => 'sarinah@inspecsi.my.id',
            'username' => 'sarinah',
            'password' => bcrypt('sarinah'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 3,
        ]);
        User::create([
            'name' => 'Lilis Suryani, Amd.Kep',
            'email' => 'lilis.suryani@inspecsi.my.id',
            'username' => 'lilissuryani',
            'password' => bcrypt('lilissuryani'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 3,
        ]);
        User::create([
            'name' => 'Sarida, Amd.Kep',
            'email' => 'sarida@inspecsi.my.id',
            'username' => 'sarida',
            'password' => bcrypt('sarida'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 4,
        ]);
        User::create([
            'name' => 'Maryati, Amd.Kep',
            'email' => 'maryati@inspecsi.my.id',
            'username' => 'maryati',
            'password' => bcrypt('maryati'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 4,
        ]);
        User::create([
            'name' => 'Yulian Susanti, Amd.Kep',
            'email' => 'yulian.susanti@inspecsi.my.id',
            'username' => 'yuliansusanti',
            'password' => bcrypt('yuliansusanti'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 4,
        ]);
        User::create([
            'name' => 'Siti Komsiah, Amd.Kep',
            'email' => 'siti.komsiah@inspecsi.my.id',
            'username' => 'sitikomsiah',
            'password' => bcrypt('sitikomsiah'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 4,
        ]);
        User::create([
            'name' => 'Lisma NS, Amd.Kep',
            'email' => 'lisma.ns@inspecsi.my.id',
            'username' => 'lismans',
            'password' => bcrypt('lismans'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 5,
        ]);
        User::create([
            'name' => 'Mona Tarontika, Amd.Kep',
            'email' => 'mona.tarontika@inspecsi.my.id',
            'username' => 'monatarontika',
            'password' => bcrypt('monatarontika'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 5,
        ]);
        User::create([
            'name' => 'Dwita Triani, Amd.Kep',
            'email' => 'dwita.triani@inspecsi.my.id',
            'username' => 'dwitatriani',
            'password' => bcrypt('dwitatriani'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 5,
        ]);
        User::create([
            'name' => 'Sri Mulyati, Amd.Kep',
            'email' => 'sri.mulyati@inspecsi.my.id',
            'username' => 'srimulyati',
            'password' => bcrypt('srimulyati'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 5,
        ]);
        User::create([
            'name' => 'Roza Ramdani, Amd.Kep',
            'email' => 'roza.ramdani@inspecsi.my.id',
            'username' => 'rozaramdani',
            'password' => bcrypt('rozaramdani'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 6,
        ]);
        User::create([
            'name' => 'Ade Cahya, S.Kep',
            'email' => 'ade.cahya@inspecsi.my.id',
            'username' => 'adecahya',
            'password' => bcrypt('adecahya'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 6,
        ]);
        User::create([
            'name' => 'Ririn Omatik, Amd.Kep',
            'email' => 'ririn.omatik@inspecsi.my.id',
            'username' => 'ririnomatik',
            'password' => bcrypt('ririnomatik'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 6,
        ]);
        User::create([
            'name' => 'Martini, Amd.Kep',
            'email' => 'martini@inspecsi.my.id',
            'username' => 'martini',
            'password' => bcrypt('martini'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 6,
        ]);
        User::create([
            'name' => 'Wilda Neti, Amd.Kep',
            'email' => 'wilda.neti@inspecsi.my.id',
            'username' => 'wildaneti',
            'password' => bcrypt('wildaneti'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 7,
        ]);
        User::create([
            'name' => 'Dewi Puspita, Amd.Kep',
            'email' => 'dewi.puspita@inspecsi.my.id',
            'username' => 'dewipuspita',
            'password' => bcrypt('dewipuspita'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 7,
        ]);
        User::create([
            'name' => 'Nurmala, Amd.Kep',
            'email' => 'nurmala@inspecsi.my.id',
            'username' => 'nurmala',
            'password' => bcrypt('nurmala'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 7,
        ]);
        User::create([
            'name' => 'Weny, Amd.Kep',
            'email' => 'weny@inspecsi.my.id',
            'username' => 'weny',
            'password' => bcrypt('weny'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 7,
        ]);
        User::create([
            'name' => 'Apmaneti, Amd.Kep',
            'email' => 'apmaneti@inspecsi.my.id',
            'username' => 'apmaneti',
            'password' => bcrypt('apmaneti'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 8,
        ]);
        User::create([
            'name' => 'Aryaningsih, Amd.Kep',
            'email' => 'aryaningsih@inspecsi.my.id',
            'username' => 'aryaningsih',
            'password' => bcrypt('aryaningsih'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 8,
        ]);
        User::create([
            'name' => 'Nani, Amd.Kep',
            'email' => 'nani@inspecsi.my.id',
            'username' => 'nani',
            'password' => bcrypt('nani'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 8,
        ]);
        User::create([
            'name' => 'Devi Nuraflinda, Amd.Kep',
            'email' => 'devi.nuraflinda@inspecsi.my.id',
            'username' => 'devinuraflinda',
            'password' => bcrypt('devinuraflinda'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 8,
        ]);
        User::create([
            'name' => 'Susilawati, Amd.Kep',
            'email' => 'susilawati@inspecsi.my.id',
            'username' => 'susilawati',
            'password' => bcrypt('susilawati'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 9,
        ]);
        User::create([
            'name' => 'Fitriyana, Amd.Kep',
            'email' => 'fitriyana@inspecsi.my.id',
            'username' => 'fitriyana',
            'password' => bcrypt('fitriyana'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 9,
        ]);
        User::create([
            'name' => 'Evi Perawati, Amd.Kep',
            'email' => 'evi.perawati@inspecsi.my.id',
            'username' => 'eviperawati',
            'password' => bcrypt('eviperawati'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 9,
        ]);
        User::create([
            'name' => 'Devi Farisa, Amd.Kep',
            'email' => 'devi.farisa@inspecsi.my.id',
            'username' => 'devifarisa',
            'password' => bcrypt('devifarisa'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 9,
        ]);
        User::create([
            'name' => 'Aria Puspitasari, Amd.Keb',
            'email' => 'aria.puspitasari@inspecsi.my.id',
            'username' => 'ariapuspitasari',
            'password' => bcrypt('ariapuspitasari'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 10,
        ]);
        User::create([
            'name' => 'Destin Pradewi, Amd.Keb',
            'email' => 'destin.pradewi@inspecsi.my.id',
            'username' => 'destinpradewi',
            'password' => bcrypt('destinpradewi'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 10,
        ]);
        User::create([
            'name' => 'Dwi Aulia W., Amd.Keb',
            'email' => 'dwi.auliaw@inspecsi.my.id',
            'username' => 'dwiauliaw',
            'password' => bcrypt('dwiauliaw'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 10,
        ]);
        User::create([
            'name' => 'Salamudiana, Amd.Kep',
            'email' => 'salamudiana@inspecsi.my.id',
            'username' => 'salamudiana',
            'password' => bcrypt('salamudiana'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 11,
        ]);
        User::create([
            'name' => 'Yeni Rorika, Amd.Kep',
            'email' => 'yeni.rorika@inspecsi.my.id',
            'username' => 'yenirorika',
            'password' => bcrypt('yenirorika'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 11,
        ]);
        User::create([
            'name' => 'Sandri Arizona, S.Kep',
            'email' => 'sandri.arizona@inspecsi.my.id',
            'username' => 'sandriarizona',
            'password' => bcrypt('sandriarizona'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 11,
        ]);
        User::create([
            'name' => 'Aniar, Amd.Kep',
            'email' => 'aniar@inspecsi.my.id',
            'username' => 'aniar',
            'password' => bcrypt('aniar'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 11,
        ]);

        KategoriMasalahKeperawatan::create([
            'nama' => "Respirasi"
        ]);
        KategoriMasalahKeperawatan::create([
            'nama' => "sirkulasi"
        ]);
        KategoriMasalahKeperawatan::create([
            'nama' => "nutrisi / cairan"
        ]);
        KategoriMasalahKeperawatan::create([
            'nama' => "eliminasi"
        ]);
        KategoriMasalahKeperawatan::create([
            'nama' => "aktifitas dan istirahat"
        ]);
        KategoriMasalahKeperawatan::create([
            'nama' => "neurosensori"
        ]);
        KategoriMasalahKeperawatan::create([
            'nama' => "reproduksi dan seksualitas"
        ]);
        KategoriMasalahKeperawatan::create([
            'nama' => "nyeri dan kenyamanan"
        ]);
        KategoriMasalahKeperawatan::create([
            'nama' => "integritas ego"
        ]);
        KategoriMasalahKeperawatan::create([
            'nama' => "pertumbuhan dan perkembangan"
        ]);
        KategoriMasalahKeperawatan::create([
            'nama' => "kebersihan diri"
        ]);
        KategoriMasalahKeperawatan::create([
            'nama' => "penyuluhan dan pembelajaran"
        ]);
        KategoriMasalahKeperawatan::create([
            'nama' => "interaksi sosial"
        ]);

        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 1,
            'kode' => "0001",
            'nama' => "Bersihan Jalan Napas Tidak Efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 1,
            'kode' => "0002",
            'nama' => "Gangguan Penyapihan Ventilator"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 1,
            'kode' => "0003",
            'nama' => "Gangguan Pertukaran Gas"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 1,
            'kode' => "0004",
            'nama' => "Gangguan Ventilasi spontan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 1,
            'kode' => "0005",
            'nama' => "pola napas tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 1,
            'kode' => "0006",
            'nama' => "risiko aspirasi"
        ]);
        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 2,
            'kode' => "0007",
            'nama' => "gangguan sirkulasi spontan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 2,
            'kode' => "0008",
            'nama' => "penurunan curah jantung"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 2,
            'kode' => "0009",
            'nama' => "perfusi perifer tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 2,
            'kode' => "0010",
            'nama' => "risiko gangguan sirkulasi spontan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 2,
            'kode' => "0011",
            'nama' => "risiko penurunan curah jantung"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 2,
            'kode' => "0012",
            'nama' => "risiko pendarahan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 2,
            'kode' => "0013",
            'nama' => "risiko perfusi gastrointestinal tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 2,
            'kode' => "0014",
            'nama' => "risiko perfusi miokard tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 2,
            'kode' => "0015",
            'nama' => "risiko perfusi perifer tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 2,
            'kode' => "0016",
            'nama' => "risiko perfusi renal tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 2,
            'kode' => "0017",
            'nama' => "risiko perfusi serebral tidak efektif"
        ]);
        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0018",
            'nama' => "berat badan lebih"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0019",
            'nama' => "defisit nutrisi"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0020",
            'nama' => "diare"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0021",
            'nama' => "disfungsi motilitas gastrointestinal"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0022",
            'nama' => "hipervolemia"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0023",
            'nama' => "hipovolemia"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0024",
            'nama' => "ikterik neonatus"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0025",
            'nama' => "kesiapan peningkatan keseimbangan cairan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0026",
            'nama' => "kesiapan peningkatan nutrisi"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0027",
            'nama' => "ketikdakstabilan kafar glukosa darah"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0028",
            'nama' => "menyusui efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0029",
            'nama' => "menyusui tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0030",
            'nama' => "obesitas"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0031",
            'nama' => "risiko berat badan lebih"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0032",
            'nama' => "risiko defisit nutrisi"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0033",
            'nama' => "risiko disfungsi motilitas gastrointestinal"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0034",
            'nama' => "risiko hipovolemia"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0035",
            'nama' => "risiko ikterik neonatus"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0036",
            'nama' => "risko ketidakseimbangan cairan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0037",
            'nama' => "risiko ketidakseimbangan elektrolit"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0038",
            'nama' => "risiko ketidakstabilan kadar glukosa darah"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 3,
            'kode' => "0039",
            'nama' => "risiko syok"
        ]);
        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0040",
            'nama' => "gangguan eliminasi urin"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0041",
            'nama' => "inkontinensia fekal"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0042",
            'nama' => "inkontinensia urin berlanjut"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0043",
            'nama' => "inkontinensia urin fungsional"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0044",
            'nama' => "inkontinensia urin berlebih"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0045",
            'nama' => "inkontinensia urin refleks"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0046",
            'nama' => "inkontinensia urin stres"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0047",
            'nama' => "inkontinensia urin urgensi"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0048",
            'nama' => "kesiapan peningkatan eliminasi urin"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0049",
            'nama' => "konstipasi"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0050",
            'nama' => "retensi urin"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0051",
            'nama' => "risiko inkontinensia urin urgensi"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 4,
            'kode' => "0052",
            'nama' => "risiko konstipasi"
        ]);
        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 5,
            'kode' => "0053",
            'nama' => "disorganisasi perilaku bayi"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 5,
            'kode' => "0054",
            'nama' => "gangguan mobilitas fisik"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 5,
            'kode' => "0055",
            'nama' => "gangguan pola tidur"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 5,
            'kode' => "0056",
            'nama' => "intoleransi aktivitas"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 5,
            'kode' => "0057",
            'nama' => "keletihan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 5,
            'kode' => "0058",
            'nama' => "kesiapan peningkatan tidur"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 5,
            'kode' => "0059",
            'nama' => "risiko disorganisasi perilaku bayi"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 5,
            'kode' => "0060",
            'nama' => "risiko intoleransi aktifitas"
        ]);
        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 6,
            'kode' => "0061",
            'nama' => "disrefleksia otonom"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 6,
            'kode' => "0062",
            'nama' => "gangguan memori"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 6,
            'kode' => "0063",
            'nama' => "gangguan menelan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 6,
            'kode' => "0064",
            'nama' => "konfusi akut"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 6,
            'kode' => "0065",
            'nama' => "konfusi kronis"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 6,
            'kode' => "0066",
            'nama' => "penurunan kapasitas adaptif intrakarnial"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 6,
            'kode' => "0067",
            'nama' => "risiko disfungsi neurovaskuler perifer"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 6,
            'kode' => "0068",
            'nama' => "risiko konfusi akut"
        ]);
        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 7,
            'kode' => "0069",
            'nama' => "disfungsi seksual"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 7,
            'kode' => "0070",
            'nama' => "kesiapan persalinan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 7,
            'kode' => "0071",
            'nama' => "pola seksual tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 7,
            'kode' => "0072",
            'nama' => "risiko disfungsi seksual"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 7,
            'kode' => "0073",
            'nama' => "risiko kehamilan tidak dikehendaki"
        ]);
        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 8,
            'kode' => "0074",
            'nama' => "gangguan rasa nyaman"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 8,
            'kode' => "0075",
            'nama' => "ketidak nyamanan pasca partum"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 8,
            'kode' => "0076",
            'nama' => "nausea"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 8,
            'kode' => "0077",
            'nama' => "nyeri akut",
            'slki' => '<h2>Setelah dilakukan tindakan nyeri berkurang dengan kriteria hasil:</h2>
            <ol>
                <li>Keluhan nyeri menurun</li>
                <li>Meringis menurun</li>
                <li>Sikap protektif menurun</li>
                <li>Gelisah menurun</li>
                <li>Kesulitan tidur menurun</li>
                <li>Frekuensi nadi membaik</li>
            </ol>',
            'intervensi' => '<h2>Manajemen Nyeri</h2>
            <h3>Terapeutik</h3>
            <ol>
                <li>Berikan Teknik nonfarmakologis untuk mengurangi nyeri (mis: TENS, hypnosis, akupresur, terapi musik, biofeedback, terapi pijat, aromaterapi, Teknik imajinasi terbimbing, kompres hangat/dingin, terapi bermain)</li>
                <li>Kontrol lingkungan yang memperberat rasa nyeri (mis: suhu ruangan, pencahayaan, kebisingan)</li>
                <li>Fasilitasi istirahat dan tidur</li>
                <li>Pertimbangkan jenis dan sumber nyeri dalam pemilihan strategi meredakan nyeri</li>
            </ol>
        
            <h2>Observasi</h2>
            <ol>
                <li>Identifikasi lokasi, karakteristik, durasi, frekuensi, kualitas, intensitas nyeri</li>
                <li>Identifikasi skala nyeri</li>
                <li>Identifikasi respon nyeri non verbal</li>
                <li>Identifikasi faktor yang memperberat dan memperingan nyeri</li>
                <li>Identifikasi pengetahuan dan keyakinan tentang nyeri</li>
                <li>Identifikasi pengaruh budaya terhadap respon nyeri</li>
                <li>Identifikasi pengaruh nyeri pada kualitas hidup</li>
                <li>Monitor keberhasilan terapi komplementer yang sudah diberikan</li>
                <li>Monitor efek samping penggunaan analgesik</li>
            </ol>
        
            <h2>Edukasi</h2>
            <ol>
                <li>Jelaskan penyebab, periode, dan pemicu nyeri</li>
            </ol>
            ',
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 8,
            'kode' => "0078",
            'nama' => "nyeri kronis"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 8,
            'kode' => "0079",
            'nama' => "nyeri melahirkan"
        ]);
        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0080",
            'nama' => "ansietas"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0081",
            'nama' => "berduka"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0082",
            'nama' => "distres spiritual"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0083",
            'nama' => "gangguan citra tubuh"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0084",
            'nama' => "gangguan identitas diri"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0085",
            'nama' => "gangguan persepsi sensori"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0086",
            'nama' => "harga diri rendah kronis"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0087",
            'nama' => "harga diri rendah situasional"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0088",
            'nama' => "keputusasaan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0089",
            'nama' => "kesiapan peningkatan konsep diri"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0090",
            'nama' => "kesiapan peningkatan koping keluarga"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0091",
            'nama' => "kesiapan peningkatan koping komunitas"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0092",
            'nama' => "ketidakberdayaan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0093",
            'nama' => "ketidakmampuan koping keluarga"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0094",
            'nama' => "koping defensif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0095",
            'nama' => "koping komunitas tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0096",
            'nama' => "koping tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0097",
            'nama' => "penurunan koping keluarga"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0098",
            'nama' => "penyangkalan tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0099",
            'nama' => "perilaku kesehatan cenderung beresiko"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0100",
            'nama' => "risiko distres spiritual"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0101",
            'nama' => "risiko harga diri rendah kronis"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0102",
            'nama' => "risiko harga diri rendah situasional"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0103",
            'nama' => "risiko ketidakberdayaan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 9,
            'kode' => "0104",
            'nama' => "sindrom pasca trauma"
        ]);
        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 10,
            'kode' => "0105",
            'nama' => "gangguan tumbuh kembang"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 10,
            'kode' => "0106",
            'nama' => "risiko gangguan perkembangan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 10,
            'kode' => "0107",
            'nama' => "risiko gangguan pertumbuhan"
        ]);
        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 11,
            'kode' => "0108",
            'nama' => "defisit perawatan diri"
        ]);
        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 12,
            'kode' => "0109",
            'nama' => "defisit kesehatan komunitas"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 12,
            'kode' => "0110",
            'nama' => "defisit pengetahuan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 12,
            'kode' => "0111",
            'nama' => "kesiapan peningkatan manajemen kesehatan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 12,
            'kode' => "0112",
            'nama' => "kesiapan peningkatan pengetahuan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 12,
            'kode' => "0113",
            'nama' => "ketidakpatuhan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 12,
            'kode' => "0114",
            'nama' => "manajemen kesehatan keluarga tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 12,
            'kode' => "0115",
            'nama' => "manajemen kesehatan tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 12,
            'kode' => "0116",
            'nama' => "pemeliharaan kesehatan tidak efektif"
        ]);
        
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 13,
            'kode' => "0117",
            'nama' => "gangguan interaksi sosial"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 13,
            'kode' => "0118",
            'nama' => "gangguan komunikasi verbal"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 13,
            'kode' => "0119",
            'nama' => "gangguan proses keluarga"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 13,
            'kode' => "0120",
            'nama' => "isolasi sosial"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 13,
            'kode' => "0121",
            'nama' => "kesiapan peningkatan menjadi orang tua"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 13,
            'kode' => "0122",
            'nama' => "kesiapan peningkatan proses keluarga"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 13,
            'kode' => "0123",
            'nama' => "ketegangan peran pemberi asuhan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 13,
            'kode' => "0124",
            'nama' => "penampilan peran tidak efektif"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 13,
            'kode' => "0125",
            'nama' => "pencapaian peran menjadi orang tua"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 13,
            'kode' => "0126",
            'nama' => "risiko gangguan perlekatan"
        ]);
        MasalahKeperawatan::create([
            'kategori_masalah_keperawatan_id' => 13,
            'kode' => "0127",
            'nama' => "risiko proses pengasuhan tidak efektif"
        ]);
    }
}
