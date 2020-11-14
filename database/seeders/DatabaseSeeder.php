<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {     
        \App\Models\Client::factory(20)->create();        
        \App\Models\User::factory(60)->create();       
        \App\Models\Loan::factory(100)->create();
        \App\Models\Payment::factory(500)->create(); 
        $this->call([     
            BankSeeder::class          
        ]);       
    }
    
}
