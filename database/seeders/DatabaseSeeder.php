<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'username' => 'admin_username',
            'email' => 'admin@gmail.com', // Tambahkan email untuk admin
            'password' => bcrypt('admin123'),
            'gender' => 'male',
            'tanggal_lahir' => '2002-01-01',
            'umur' => Carbon::now()->diffInYears('2002-01-01'),
            'role' => 'admin',
            'alamat' => 'jogjakarta, bantul'
        ]);

        // Membuat regular user
        User::factory()->create([
            'name' => 'user',
            'username' => 'user_username',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'gender' => 'female',
            'tanggal_lahir' => '2002-05-15',
            'umur' => Carbon::now()->diffInYears('2002-05-15'),
            'role' => 'user',
            'alamat' => 'jogjakarta, sleman'
        ]);

        // Menambahkan produk
        DB::table('products')->insert([
            [
                'nama' => 'Apel Fuji',
                'harga' => 30000.00,
                'stok' => 50,
                'berat' => 0.2,
                'image' => 'apel_fuji.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Apel Fuji segar dan manis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Jeruk Sunkist',
                'harga' => 25000.00,
                'stok' => 40,
                'berat' => 0.15,
                'image' => 'jeruk_sunkist.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Jeruk Sunkist segar dan kaya vitamin C.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pisang Cavendish',
                'harga' => 20000.00,
                'stok' => 60,
                'berat' => 1.2,
                'image' => 'pisang_cavendish.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Pisang Cavendish matang dan lezat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Anggur Merah',
                'harga' => 40000.00,
                'stok' => 30,
                'berat' => 0.5,
                'image' => 'anggur_merah.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Anggur Merah segar dan kaya antioksidan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Melon Honeydew',
                'harga' => 45000.00,
                'stok' => 25,
                'berat' => 1.5,
                'image' => 'melon_honeydew.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Melon Honeydew manis dan segar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Mangga Harum Manis',
                'harga' => 30000.00,
                'stok' => 35,
                'berat' => 0.3,
                'image' => 'mangga_harum_manis.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Mangga Harum Manis lezat dan segar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Nanas Madu',
                'harga' => 25000.00,
                'stok' => 20,
                'berat' => 1.2,
                'image' => 'nanas_madu.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Nanas Madu manis dan segar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kiwi Green',
                'harga' => 35000.00,
                'stok' => 30,
                'berat' => 0.1,
                'image' => 'kiwi_green.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Kiwi Green kaya vitamin dan segar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pepaya California',
                'harga' => 20000.00,
                'stok' => 40,
                'berat' => 1.0,
                'image' => 'pepaya_california.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Pepaya California manis dan kaya serat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Semangka Merah',
                'harga' => 15000.00,
                'stok' => 50,
                'berat' => 2.5,
                'image' => 'semangka_merah.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Semangka Merah segar dan manis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Lemon California',
                'harga' => 30000.00,
                'stok' => 25,
                'berat' => 0.2,
                'image' => 'lemon_california.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Lemon California segar dan kaya vitamin C.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pir Golden',
                'harga' => 40000.00,
                'stok' => 35,
                'berat' => 0.3,
                'image' => 'pir_golden.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Pir Golden manis dan segar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Stroberi California',
                'harga' => 50000.00,
                'stok' => 15,
                'berat' => 0.25,
                'image' => 'stroberi_california.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Stroberi California segar dan manis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Durian Montong',
                'harga' => 150000.00,
                'stok' => 10,
                'berat' => 3.0,
                'image' => 'durian_montong.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Durian Montong legit dan harum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Alpukat Mentega',
                'harga' => 25000.00,
                'stok' => 30,
                'berat' => 0.4,
                'image' => 'alpukat_mentega.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Alpukat Mentega lezat dan kaya nutrisi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Buah Naga Merah',
                'harga' => 35000.00,
                'stok' => 20,
                'berat' => 0.5,
                'image' => 'buah_naga_merah.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Buah Naga Merah segar dan kaya serat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ceri Manis',
                'harga' => 60000.00,
                'stok' => 15,
                'berat' => 0.1,
                'image' => 'ceri_manis.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Ceri Manis lezat dan segar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Delima Merah',
                'harga' => 40000.00,
                'stok' => 25,
                'berat' => 0.4,
                'image' => 'delima_merah.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Delima Merah segar dan kaya antioksidan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Jambu Kristal',
                'harga' => 30000.00,
                'stok' => 35,
                'berat' => 0.35,
                'image' => 'jambu_kristal.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Jambu Kristal renyah dan manis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rambutan Binjai',
                'harga' => 20000.00,
                'stok' => 40,
                'berat' => 1.0,
                'image' => 'rambutan_binjai.jpg',
                'kondisi' => 'baru',
                'deskripsi' => 'Rambutan Binjai manis dan segar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        
    }
}
