<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Role;
use App\Models\Saldo;
use App\Models\Transaksi;
use App\Models\User;
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
        $admin = Role::create(["name" => "Administrator"]);
        $bank_mini = Role::create(["name" => "Bank Mini"]);
        $canteen = Role::create(["name" => "Canteen"]);
        $student = Role::create(["name" => "Student"]);

        User::create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("admin"),
            "role_id" => $admin->id
        ]);

        User::create([
            "name" => "Bank Mini",
            "email" => "bankmini@gmail.com",
            "password" => Hash::make("bankmini"),
            "role_id" => $bank_mini->id
        ]);

        User::create([
            "name" => "Canteen",
            "email" => "canteen@gmail.com",
            "password" => Hash::make("canteen"),
            "role_id" => $canteen->id
        ]);

        $fadhil = User::create([
            "name" => "Fadhil",
            "email" => "fadhil@gmail.com",
            "password" => Hash::make("fadhil"),
            "role_id" => $student->id
        ]);

        $piscok = Barang::create([
            "name" => "Piscok",
            "price" => 2500,
            "stock" => 50,
            "desc" => "Pisang Cokelat"
        ]);

        $risol = Barang::create([
            "name" => "Risol",
            "price" => 3000,
            "stock" => 50,
            "desc" => "Risol Aja"
        ]);

        $burger = Barang::create([
            "name" => "Burger",
            "price" => 6000,
            "stock" => 50,
            "desc" => "Burger Daging Tipis"
        ]);

        $oasis = Barang::create([
            "name" => "Oasis",
            "price" => 2000,
            "stock" => 50,
            "desc" => "Minuman"
        ]);

        $teh_pucuk = Barang::create([
            "name" => "Teh Pucuk",
            "price" => 3500,
            "stock" => 50,
            "desc" => "Minuman teh"
        ]);

        Saldo::create([
            "user_id" => $fadhil->id,
            "saldo" => 50000
        ]);

        //Isi Saldo
        Transaksi::create([
            "user_id" => $fadhil->id,
            "barang_id" => null,
            "jumlah" => 50000,
            "invoice_id" => "SAL_001",
            "type" => 1,
            "status" => 3
        ]);

    }
}
