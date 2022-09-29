<?php

namespace Database\Seeders;

use App\Models\Users;
use App\Models\UserRoles;
use App\Models\Transfer;
use App\Models\TarikTunai;
use App\Models\Roles;
use App\Models\Pembayaran;
use App\Models\ListrikPulsa;
use App\Models\CekSaldo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create ([
            "name" => "Zhevanya",
            "username" => "zhevanya",
            "password" => Hash::make("2004"),
            "no_rekening" => "12345"
        ]);

        Users::create ([
            "name" => "Revalia",
            "username" => "revalia",
            "password" => Hash::make("2004"),
            "no_rekening" => "12344"
        ]);

        Users::create ([
            "name" => "Vendra",
            "username" => "vendra",
            "password" => Hash::make("2004"),
            "no_rekening" => "12343"
        ]);

        Roles::create ([
            "name" => "customer"
        ]);

        Roles::create ([
            "name" => "operator"
        ]);

        Roles::create ([
            "name" => "manager"
        ]);

        UserRoles::create ([
            "user_id" => "1",
            "role_id" => "3"
        ]);

        UserRoles::create ([
            "user_id" => "2",
            "role_id" => "2"
        ]);

        UserRoles::create ([
            "user_id" => "3",
            "role_id" => "1"
        ]);

        CekSaldo::create ([
            "user_id" => "3",
            "sisa_saldo" => 5000000
        ]);

        Transfer::create ([
            "user_id" => "3",
            "rekening_tujuan" => 50000,
            "nominal" => "54321",
            "invoice_code" => "54301"
        ]);

        TarikTunai::create ([
            "user_id" => "3",
            "nominal" => 50000
        ]);

        ListrikPulsa::create ([
            "user_id" => "3",
            "nominal" => 100000,
            "pembayaran_id" => "1",
            "no_hp" => "085892576097",
            "invoice_code" => "INV_54301"
        ]);

        Pembayaran::create ([
            "id" => "1",
            "name" => "listrik"
        ]);

        Pembayaran::create ([
            "id" => "2",
            "name" => "pulsa"
        ]);

        Pembayaran::create ([
            "id" => "3",
            "name" => "air"
        ]);
    }
}
