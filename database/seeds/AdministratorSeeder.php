<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username="administrator";
        $administrator->name="Site Administrator";
        $administrator->email="rafiasik77@gmail.com";
        $administrator->roles=json_encode(["ADMIN"]);
        $administrator->password=\Hash::make("AdminDesa");
        $administrator->avatar="saat-ini-tidak-ada.jpg";
        $administrator->address="jalan raya jepara pati lo bro";
        $administrator->phone="085290734920";
        $administrator->save();
        $this->command->info("User Admin berhasil diinsert");
    }
}
