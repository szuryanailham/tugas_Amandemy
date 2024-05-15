<?php
namespace Database\Seeders;

use App\Models\toko;
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
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'username' => 'admin_username',
            'password'=> bcrypt('admin123'),
            'gender' => 'male', 
            'tanggal_lahir' => '2002-01-01',
            'umur' => \Carbon\Carbon::now()->diffInYears('1990-01-01'), 
            'role' => 'admin',
            'alamat' => 'jogjakarta,bantul'
        ]);
        
        User::factory()->create([
            'name' => 'user',
            'username' => 'user_username', // Tambahkan username di sini
            'email' => 'user@gmail.com',
            'password'=> bcrypt('user123'),
            'gender' => 'female', 
            'tanggal_lahir' => '2002-05-15', 
            'umur' => \Carbon\Carbon::now()->diffInYears('1995-05-15'),
            'role' => 'user',
            'alamat' => 'jogjakarta,sleman'
        ]);
        
        
        toko::create([
            'nama' => 'Toko A',
            'user_id'=> 1,
            'alamat' => 'Jalan Toko A No. 123',
            'telepon' => '08123456789',
            'product_terbaik' => 'Produk A',
            'deskripsi' => 'Toko A adalah toko yang menyediakan berbagai macam produk.',
        ]);

        toko::create([
            'nama' => 'Toko B',
            'user_id'=> 2,
            'alamat' => 'Jalan Toko B No. 456',
            'telepon' => '08987654321',
            'product_terbaik' => 'Produk B',
            'deskripsi' => 'Toko B adalah toko yang mengkhususkan diri pada produk tertentu.',
        ]);
    }
}
