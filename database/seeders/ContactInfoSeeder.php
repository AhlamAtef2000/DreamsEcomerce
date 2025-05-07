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
            'postal_address' => 'PO 11910, Hay abu Marhaf Str, Amman, Jordan',  // Example address
            'mobile' => '+962 772150893',  // Jordanian mobile number format
            'fax' => '+962 770717654',  // Example Jordanian fax number
            'support_email' => 'support24/7@jordanexample.com',  // Jordanian support email
            'info_email' => 'khashashnehahlam@gmail.com', 
        ]);
    }
}
