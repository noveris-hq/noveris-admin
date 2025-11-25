<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@me.com',
                'phone' => '555-1234',
                'address' => '123 Maple St',
                'city' => 'Springfield',
                'postal_code' => '12345',
                'organization_number' => 'ORG123456',
                'referral_source' => 'Martin',
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob@gmail.com',
                'phone' => '555-5678',
                'address' => '456 Oak St',
                'city' => 'Greenville',
                'postal_code' => '67890',
                'organization_number' => 'ORG654321',
                'referral_source' => 'Anders',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
