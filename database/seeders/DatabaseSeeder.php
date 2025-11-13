<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
// Tidak perlu use AdminUserSeeder; karena sudah di namespace yang sama

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder untuk membuat user admin
        $this->call([
            AdminUserSeeder::class,
        ]);

        // User::factory(10)->create();
        // Anda mungkin ingin menghapus atau mengomentari ini agar tidak bentrok dengan test@example.com yang dibuat oleh AdminUserSeeder
        // atau pastikan emailnya berbeda. Jika tidak, akan terjadi error "Duplicate entry" pada run seeder berikutnya.

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}