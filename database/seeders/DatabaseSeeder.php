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
            'name' => 'Marini, Amd.Kep',
            'email' => 'marini@inspecsi.my.id',
            'username' => 'marini',
            'password' => bcrypt('marini'),
            'role' => 'Ketua Tim',
            'hospital_id' => 1,
            'room_id' => 1,
        ]);

        Hospital::create([
            'name' => 'dr. Bratanata'
        ]);

        Room::create([
            'name' => 'Pav. Kartika',
            'hospital_id' => 1,
            'user_id' => 3,
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
            'nama' => "nyeri akut"
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
