<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new Supplier();
        $supplier->name = "Supplier";
        $supplier->address = "123 Main St.";
        $supplier->phone = "1234567890";
        $supplier->email = "supplier@msup.com";
        $supplier->contact_name = "John Doe";
        $supplier->save();
    }
}
