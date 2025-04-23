<?php

namespace Database\Seeders;
use App\Models\ContactInfo;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactInfo::create([
            'postal_address' => 'PO Box 123456, King Hussein Street, Amman, Jordan',  // Example address
            'mobile' => '+962 7 1234 5678',  // Jordanian mobile number format
            'fax' => '+962 6 567 8901',  // Example Jordanian fax number
            'support_email' => 'support24/7@jordanexample.com',  // Jordanian support email
            'info_email' => 'info@jordanexample.com',  // Jordanian info email
        ]);
    }
}
