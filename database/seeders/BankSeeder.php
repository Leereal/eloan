<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cash = Bank::create([
            'name'=>'Cabs',
            'account_number'=>'565548585655565'   	        	
        ]); 

         $bank = Bank::create([
            'name'=>'CBZ',
            'account_number'=>'0891245451'                    
        ]); 

         $swip = Bank::create([
            'name'=>'Ecocash',
            'account_number'=>'0772 123 4567'                
        ]);  

         $Ecocash = Bank::create([
            'name'=>'One Wallet',
            'account_number'=>'0712 123 4567'                  
        ]); 
    }
}
