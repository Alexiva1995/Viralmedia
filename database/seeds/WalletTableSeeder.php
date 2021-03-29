<?php

use Illuminate\Database\Seeder;
// modelo
use App\Models\Wallet;

class WalletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayWallet = [

            [
                  "id"=>"1",
                  "iduser"=>"1",
                  "referred_id"=>"1",
                  "orden_id"=>"4",
                  "liquidation_id"=>"1",
                  "debito"=>"90.91",
                  "credito"=>"0",
                  "balance"=>"90.91",
                  "descripcion"=>"Comision del usuario Caslo Gonza por un monto de 500",
                  "status"=>"0",
                  "tipo_transaction"=>"0",
                  "liquidado"=>"0",
              ]
        ];
        foreach ($arrayWallet as $wallet ) {
            Wallet::create($wallet);
        }
    }
}
