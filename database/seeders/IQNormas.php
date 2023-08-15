<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IQNormas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("iq_normas")->insert([
            [
                "sw"            => 58,
                "iq"            => 37,
                "percentage"    => 0,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 60,
                "iq"            => 40,
                "percentage"    => 0,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 62,
                "iq"            => 43,
                "percentage"    => 0,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 64,
                "iq"            => 46,
                "percentage"    => 0,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 66,
                "iq"            => 49,
                "percentage"    => 0,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 68,
                "iq"            => 52,
                "percentage"    => 0,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 70,
                "iq"            => 55,
                "percentage"    => 0,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 72,
                "iq"            => 58,
                "percentage"    => 0,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 74,
                "iq"            => 61,
                "percentage"    => 0,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 76,
                "iq"            => 64,
                "percentage"    => 1,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 77,
                "iq"            => 66,
                "percentage"    => 1,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 78,
                "iq"            => 67,
                "percentage"    => 1,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 80,
                "iq"            => 70,
                "percentage"    => 2,
                "category"      => "Mentally Defective"
            ],
            [
                "sw"            => 82,
                "iq"            => 73,
                "percentage"    => 3,
                "category"      => "Borderline"
            ],
            [
                "sw"            => 83,
                "iq"            => 75,
                "percentage"    => 4,
                "category"      => "Borderline"
            ],
            [
                "sw"            => 84,
                "iq"            => 76,
                "percentage"    => 5,
                "category"      => "Borderline"
            ],
            [
                "sw"            => 85,
                "iq"            => 78,
                "percentage"    => 7,
                "category"      => "Borderline"
            ],
            [
                "sw"            => 86,
                "iq"            => 79,
                "percentage"    => 8,
                "category"      => "Borderline"
            ],
            [
                "sw"            => 87,
                "iq"            => 81,
                "percentage"    => 10,
                "category"      => "Low Average"
            ],
            [
                "sw"            => 88,
                "iq"            => 82,
                "percentage"    => 12,
                "category"      => "Low Average"
            ],
            [
                "sw"            => 89,
                "iq"            => 84,
                "percentage"    => 14,
                "category"      => "Low Average"
            ],
            [
                "sw"            => 90,
                "iq"            => 85,
                "percentage"    => 16,
                "category"      => "Low Average"
            ],
            [
                "sw"            => 91,
                "iq"            => 87,
                "percentage"    => 18,
                "category"      => "Low Average"
            ],
            [
                "sw"            => 92,
                "iq"            => 88,
                "percentage"    => 21,
                "category"      => "Low Average"
            ],
            [
                "sw"            => 93,
                "iq"            => 90,
                "percentage"    => 24,
                "category"      => "Average"
            ],
            [
                "sw"            => 94,
                "iq"            => 91,
                "percentage"    => 27,
                "category"      => "Average"
            ],
            [
                "sw"            => 95,
                "iq"            => 92,
                "percentage"    => 30,
                "category"      => "Average"
            ],
            [
                "sw"            => 96,
                "iq"            => 94,
                "percentage"    => 34,
                "category"      => "Average"
            ],
            [
                "sw"            => 97,
                "iq"            => 96,
                "percentage"    => 38,
                "category"      => "Average"
            ],
            [
                "sw"            => 98,
                "iq"            => 97,
                "percentage"    => 42,
                "category"      => "Average"
            ],
            [
                "sw"            => 99,
                "iq"            => 98,
                "percentage"    => 46,
                "category"      => "Average"
            ],
            [
                "sw"            => 100,
                "iq"            => 100,
                "percentage"    => 50,
                "category"      => "Average"
            ],
            [
                "sw"            => 101,
                "iq"            => 101,
                "percentage"    => 54,
                "category"      => "Average"
            ],
            [
                "sw"            => 102,
                "iq"            => 103,
                "percentage"    => 58,
                "category"      => "Average"
            ],
            [
                "sw"            => 103,
                "iq"            => 104,
                "percentage"    => 62,
                "category"      => "Average"
            ],
            [
                "sw"            => 104,
                "iq"            => 106,
                "percentage"    => 66,
                "category"      => "Average"
            ],
            [
                "sw"            => 105,
                "iq"            => 107,
                "percentage"    => 70,
                "category"      => "Average"
            ],
            [
                "sw"            => 106,
                "iq"            => 109,
                "percentage"    => 73,
                "category"      => "Average"
            ],
            [
                "sw"            => 107,
                "iq"            => 110,
                "percentage"    => 76,
                "category"      => "High Average"
            ],
            [
                "sw"            => 108,
                "iq"            => 112,
                "percentage"    => 79,
                "category"      => "High Average"
            ],
            [
                "sw"            => 109,
                "iq"            => 113,
                "percentage"    => 81,
                "category"      => "High Average"
            ],
            [
                "sw"            => 110,
                "iq"            => 115,
                "percentage"    => 84,
                "category"      => "High Average"
            ],
            [
                "sw"            => 111,
                "iq"            => 116,
                "percentage"    => 86,
                "category"      => "High Average"
            ],
            [
                "sw"            => 112,
                "iq"            => 118,
                "percentage"    => 88,
                "category"      => "High Average"
            ],
            [
                "sw"            => 113,
                "iq"            => 120,
                "percentage"    => 90,
                "category"      => "Superior"
            ],
            [
                "sw"            => 114,
                "iq"            => 121,
                "percentage"    => 92,
                "category"      => "Superior"
            ],
            [
                "sw"            => 115,
                "iq"            => 122,
                "percentage"    => 93,
                "category"      => "Superior"
            ],
            [
                "sw"            => 119,
                "iq"            => 128,
                "percentage"    => 97,
                "category"      => "Superior"
            ],
            [
                "sw"            => 120,
                "iq"            => 130,
                "percentage"    => 98,
                "category"      => "Superior"
            ],
            [
                "sw"            => 121,
                "iq"            => 131,
                "percentage"    => 98,
                "category"      => "Superior"
            ],
            [
                "sw"            => 122,
                "iq"            => 133,
                "percentage"    => 99,
                "category"      => "Superior"
            ],
            [
                "sw"            => 123,
                "iq"            => 134,
                "percentage"    => 99,
                "category"      => "Superior"
            ],
            [
                "sw"            => 124,
                "iq"            => 136,
                "percentage"    => 99,
                "category"      => "Superior"
            ],
            [
                "sw"            => 125,
                "iq"            => 137,
                "percentage"    => 99,
                "category"      => "Superior"
            ],
            [
                "sw"            => 126,
                "iq"            => 139,
                "percentage"    => 100,
                "category"      => "Superior"
            ],
            [
                "sw"            => 127,
                "iq"            => 140,
                "percentage"    => 100,
                "category"      => "Very Superior"
            ],
            [
                "sw"            => 128,
                "iq"            => 142,
                "percentage"    => 100,
                "category"      => "Very Superior"
            ],
            [
                "sw"            => 129,
                "iq"            => 143,
                "percentage"    => 100,
                "category"      => "Very Superior"
            ],
            [
                "sw"            => 130,
                "iq"            => 145,
                "percentage"    => 100,
                "category"      => "Very Superior"
            ],
            [
                "sw"            => 132,
                "iq"            => 148,
                "percentage"    => 100,
                "category"      => "Very Superior"
            ],
            [
                "sw"            => 134,
                "iq"            => 151,
                "percentage"    => 100,
                "category"      => "Very Superior"
            ],
            [
                "sw"            => 136,
                "iq"            => 154,
                "percentage"    => 100,
                "category"      => "Very Superior"
            ],
            [
                "sw"            => 136,
                "iq"            => 157,
                "percentage"    => 100,
                "category"      => "Very Superior"
            ],
            [
                "sw"            => 140,
                "iq"            => 160,
                "percentage"    => 100,
                "category"      => "Very Superior"
            ]
        ]);
    }
}
