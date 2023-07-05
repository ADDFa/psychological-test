<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ISTNormas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function builder($rw, $sw, $cat, array $ages = [21, 22, 23, 24, 25])
        {
            return [
                "rw"                => $rw,
                "sw"                => $sw,
                "question_category" => $cat,
                "ages"               => implode(",", $ages)
            ];
        }

        // norma ist kategori se untuk usia 21 - 25
        $istNormas = [];
        $sw = 65;
        for ($i = 0; $i <= 20; $i++) {
            $sw += 3;
            if ($i === 3) $sw -= 1;
            array_push($istNormas, builder($i, $sw, "se"));
        }

        // norma ist kategori wa untuk usia 21 - 25
        $search = [2, 3, 5, 7, 9, 10, 12, 14, 16, 17, 19];
        $sw = 60;
        for ($i = 0; $i <= 20; $i++) {
            if (array_search($i, $search) !== false) {
                $sw += 4;
            } else {
                $sw += 3;
            }
            array_push($istNormas, builder($i, $sw, "wa"));
        }

        // norma ist kategori an untuk usia 21 - 25
        $sw = 73;
        for ($i = 0; $i <= 20; $i++) {
            if ($i % 2 === 0) {
                $sw += 3;
            } else {
                $sw += 2;
            }
            array_push($istNormas, builder($i, $sw, "an"));
        }

        // norma ist kategori ge untuk usia 21 - 25
        $search = [5, 9, 14, 18];
        $sw = 66;
        for ($i = 0; $i <= 20; $i++) {
            if (array_search($i, $search) !== false) {
                $sw += 2;
            } else {
                $sw += 3;
            }
            array_push($istNormas, builder($i, $sw, "ge"));
        }

        // norma ist kategori ra untuk usia 21 - 25
        $search = [2, 9, 16];
        $sw = 71;
        for ($i = 0; $i <= 20; $i++) {
            if (array_search($i, $search) !== false) {
                $sw += 2;
            } else {
                $sw += 3;
            }
            array_push($istNormas, builder($i, $sw, "ra"));
        }

        // norma ist kategori zr untuk usia 21 - 25
        $search = [2, 3, 5, 6, 8, 10, 11, 13, 14, 18, 19];
        $sw = 74;
        for ($i = 0; $i <= 20; $i++) {
            if (array_search($i, $search) !== false) {
                $sw += 2;
            } else {
                $sw += 3;
            }
            array_push($istNormas, builder($i, $sw, "zr"));
        }

        // norma ist kategori fa untuk usia 21 - 25
        $search = [4, 11, 18];
        $sw = 67;
        for ($i = 0; $i <= 20; $i++) {
            if (array_search($i, $search) !== false) {
                $sw += 2;
            } else {
                $sw += 3;
            }
            array_push($istNormas, builder($i, $sw, "fa"));
        }

        // norma ist kategori wu untuk usia 21 - 25
        $search = [2, 9, 16];
        $sw = 69;
        for ($i = 0; $i <= 20; $i++) {
            if (array_search($i, $search) !== false) {
                $sw += 2;
            } else {
                $sw += 3;
            }
            array_push($istNormas, builder($i, $sw, "wu"));
        }

        // norma ist kategori me untuk usia 21 - 25
        $search = [1, 3, 4, 6, 7, 9, 10, 12, 15, 16, 18, 19];
        $sw = 72;
        for ($i = 0; $i <= 20; $i++) {
            if (array_search($i, $search) !== false) {
                $sw += 2;
            } else {
                $sw += 3;
            }
            array_push($istNormas, builder($i, $sw, "me"));
        }

        DB::table("ist_normas")->insert($istNormas);

        function gestamtBuilder(array $swCollection, array $ages = [21, 22, 23, 24, 25])
        {
            $result = [];
            for ($i = 1; $i <= 18; $i++) {
                array_push($result, [
                    "rw"        => $i * 10,
                    "sw"        => $swCollection[$i - 1],
                    "ages"      => implode(",", $ages)
                ]);
            }

            return $result;
        }

        DB::table("ist_gestamt")->insert(gestamtBuilder([
            67, 70, 74, 78, 82,
            86, 90, 93, 97, 101,
            105, 109, 113, 117, 120,
            124, 128, 132
        ]));

        DB::table("ist_normas")->insert([
            // norma ist kategori se untuk usia 26 - 30
            builder(0, 66, "se", [26, 27, 28, 29, 30]),
            builder(1, 69, "se", [26, 27, 28, 29, 30]),
            builder(2, 72, "se", [26, 27, 28, 29, 30]),
            builder(3, 75, "se", [26, 27, 28, 29, 30]),
            builder(4, 78, "se", [26, 27, 28, 29, 30]),
            builder(5, 81, "se", [26, 27, 28, 29, 30]),
            builder(6, 84, "se", [26, 27, 28, 29, 30]),
            builder(7, 87, "se", [26, 27, 28, 29, 30]),
            builder(8, 90, "se", [26, 27, 28, 29, 30]),
            builder(9, 93, "se", [26, 27, 28, 29, 30]),
            builder(10, 96, "se", [26, 27, 28, 29, 30]),
            builder(11, 99, "se", [26, 27, 28, 29, 30]),
            builder(12, 102, "se", [26, 27, 28, 29, 30]),
            builder(13, 105, "se", [26, 27, 28, 29, 30]),
            builder(14, 108, "se", [26, 27, 28, 29, 30]),
            builder(15, 112, "se", [26, 27, 28, 29, 30]),
            builder(16, 115, "se", [26, 27, 28, 29, 30]),
            builder(17, 118, "se", [26, 27, 28, 29, 30]),
            builder(18, 121, "se", [26, 27, 28, 29, 30]),
            builder(19, 124, "se", [26, 27, 28, 29, 30]),
            builder(20, 127, "se", [26, 27, 28, 29, 30]),

            // norma ist kategori wa untuk usia 26 - 30
            builder(0, 66, "wa", [26, 27, 28, 29, 30]),
            builder(1, 69, "wa", [26, 27, 28, 29, 30]),
            builder(2, 73, "wa", [26, 27, 28, 29, 30]),
            builder(3, 76, "wa", [26, 27, 28, 29, 30]),
            builder(4, 79, "wa", [26, 27, 28, 29, 30]),
            builder(5, 83, "wa", [26, 27, 28, 29, 30]),
            builder(6, 86, "wa", [26, 27, 28, 29, 30]),
            builder(7, 89, "wa", [26, 27, 28, 29, 30]),
            builder(8, 93, "wa", [26, 27, 28, 29, 30]),
            builder(9, 96, "wa", [26, 27, 28, 29, 30]),
            builder(10, 99, "wa", [26, 27, 28, 29, 30]),
            builder(11, 103, "wa", [26, 27, 28, 29, 30]),
            builder(12, 106, "wa", [26, 27, 28, 29, 30]),
            builder(13, 109, "wa", [26, 27, 28, 29, 30]),
            builder(14, 113, "wa", [26, 27, 28, 29, 30]),
            builder(15, 116, "wa", [26, 27, 28, 29, 30]),
            builder(16, 119, "wa", [26, 27, 28, 29, 30]),
            builder(17, 123, "wa", [26, 27, 28, 29, 30]),
            builder(18, 126, "wa", [26, 27, 28, 29, 30]),
            builder(19, 129, "wa", [26, 27, 28, 29, 30]),
            builder(20, 133, "wa", [26, 27, 28, 29, 30]),

            // norma ist kategori an untuk usia 26 - 30
            builder(0, 78, "an", [26, 27, 28, 29, 30]),
            builder(1, 80, "an", [26, 27, 28, 29, 30]),
            builder(2, 83, "an", [26, 27, 28, 29, 30]),
            builder(3, 85, "an", [26, 27, 28, 29, 30]),
            builder(4, 87, "an", [26, 27, 28, 29, 30]),
            builder(5, 90, "an", [26, 27, 28, 29, 30]),
            builder(6, 92, "an", [26, 27, 28, 29, 30]),
            builder(7, 95, "an", [26, 27, 28, 29, 30]),
            builder(8, 97, "an", [26, 27, 28, 29, 30]),
            builder(9, 99, "an", [26, 27, 28, 29, 30]),
            builder(10, 102, "an", [26, 27, 28, 29, 30]),
            builder(11, 104, "an", [26, 27, 28, 29, 30]),
            builder(12, 106, "an", [26, 27, 28, 29, 30]),
            builder(13, 109, "an", [26, 27, 28, 29, 30]),
            builder(14, 111, "an", [26, 27, 28, 29, 30]),
            builder(15, 114, "an", [26, 27, 28, 29, 30]),
            builder(16, 116, "an", [26, 27, 28, 29, 30]),
            builder(17, 118, "an", [26, 27, 28, 29, 30]),
            builder(18, 121, "an", [26, 27, 28, 29, 30]),
            builder(19, 123, "an", [26, 27, 28, 29, 30]),
            builder(20, 125, "an", [26, 27, 28, 29, 30]),

            // norma ist kategori ge untuk usia 26 - 30
            builder(0, 69, "ge", [26, 27, 28, 29, 30]),
            builder(1, 71, "ge", [26, 27, 28, 29, 30]),
            builder(2, 74, "ge", [26, 27, 28, 29, 30]),
            builder(3, 77, "ge", [26, 27, 28, 29, 30]),
            builder(4, 80, "ge", [26, 27, 28, 29, 30]),
            builder(5, 83, "ge", [26, 27, 28, 29, 30]),
            builder(6, 85, "ge", [26, 27, 28, 29, 30]),
            builder(7, 88, "ge", [26, 27, 28, 29, 30]),
            builder(8, 91, "ge", [26, 27, 28, 29, 30]),
            builder(9, 94, "ge", [26, 27, 28, 29, 30]),
            builder(10, 96, "ge", [26, 27, 28, 29, 30]),
            builder(11, 99, "ge", [26, 27, 28, 29, 30]),
            builder(12, 102, "ge", [26, 27, 28, 29, 30]),
            builder(13, 105, "ge", [26, 27, 28, 29, 30]),
            builder(14, 108, "ge", [26, 27, 28, 29, 30]),
            builder(15, 110, "ge", [26, 27, 28, 29, 30]),
            builder(16, 113, "ge", [26, 27, 28, 29, 30]),
            builder(17, 116, "ge", [26, 27, 28, 29, 30]),
            builder(18, 119, "ge", [26, 27, 28, 29, 30]),
            builder(19, 121, "ge", [26, 27, 28, 29, 30]),
            builder(20, 124, "ge", [26, 27, 28, 29, 30]),

            // norma ist kategori ra untuk usia 26 - 30
            builder(0, 74, "ra", [26, 27, 28, 29, 30]),
            builder(1, 77, "ra", [26, 27, 28, 29, 30]),
            builder(2, 79, "ra", [26, 27, 28, 29, 30]),
            builder(3, 82, "ra", [26, 27, 28, 29, 30]),
            builder(4, 85, "ra", [26, 27, 28, 29, 30]),
            builder(5, 88, "ra", [26, 27, 28, 29, 30]),
            builder(6, 91, "ra", [26, 27, 28, 29, 30]),
            builder(7, 94, "ra", [26, 27, 28, 29, 30]),
            builder(8, 97, "ra", [26, 27, 28, 29, 30]),
            builder(9, 99, "ra", [26, 27, 28, 29, 30]),
            builder(10, 102, "ra", [26, 27, 28, 29, 30]),
            builder(11, 105, "ra", [26, 27, 28, 29, 30]),
            builder(12, 108, "ra", [26, 27, 28, 29, 30]),
            builder(13, 111, "ra", [26, 27, 28, 29, 30]),
            builder(14, 114, "ra", [26, 27, 28, 29, 30]),
            builder(15, 117, "ra", [26, 27, 28, 29, 30]),
            builder(16, 119, "ra", [26, 27, 28, 29, 30]),
            builder(17, 122, "ra", [26, 27, 28, 29, 30]),
            builder(18, 125, "ra", [26, 27, 28, 29, 30]),
            builder(19, 128, "ra", [26, 27, 28, 29, 30]),
            builder(20, 133, "ra", [26, 27, 28, 29, 30]),

            // norma ist kategori zr untuk usia 26 - 30
            builder(0, 79, "zr", [26, 27, 28, 29, 30]),
            builder(1, 81, "zr", [26, 27, 28, 29, 30]),
            builder(2, 83, "zr", [26, 27, 28, 29, 30]),
            builder(3, 86, "zr", [26, 27, 28, 29, 30]),
            builder(4, 88, "zr", [26, 27, 28, 29, 30]),
            builder(5, 90, "zr", [26, 27, 28, 29, 30]),
            builder(6, 93, "zr", [26, 27, 28, 29, 30]),
            builder(7, 95, "zr", [26, 27, 28, 29, 30]),
            builder(8, 97, "zr", [26, 27, 28, 29, 30]),
            builder(9, 100, "zr", [26, 27, 28, 29, 30]),
            builder(10, 102, "zr", [26, 27, 28, 29, 30]),
            builder(11, 104, "zr", [26, 27, 28, 29, 30]),
            builder(12, 107, "zr", [26, 27, 28, 29, 30]),
            builder(13, 109, "zr", [26, 27, 28, 29, 30]),
            builder(14, 111, "zr", [26, 27, 28, 29, 30]),
            builder(15, 113, "zr", [26, 27, 28, 29, 30]),
            builder(16, 116, "zr", [26, 27, 28, 29, 30]),
            builder(17, 118, "zr", [26, 27, 28, 29, 30]),
            builder(18, 120, "zr", [26, 27, 28, 29, 30]),
            builder(19, 123, "zr", [26, 27, 28, 29, 30]),
            builder(20, 125, "zr", [26, 27, 28, 29, 30]),

            // norma ist kategori fa untuk usia 26 - 30
            builder(0, 71, "fa", [26, 27, 28, 29, 30]),
            builder(1, 73, "fa", [26, 27, 28, 29, 30]),
            builder(2, 76, "fa", [26, 27, 28, 29, 30]),
            builder(3, 79, "fa", [26, 27, 28, 29, 30]),
            builder(4, 82, "fa", [26, 27, 28, 29, 30]),
            builder(5, 85, "fa", [26, 27, 28, 29, 30]),
            builder(6, 88, "fa", [26, 27, 28, 29, 30]),
            builder(7, 91, "fa", [26, 27, 28, 29, 30]),
            builder(8, 93, "fa", [26, 27, 28, 29, 30]),
            builder(9, 96, "fa", [26, 27, 28, 29, 30]),
            builder(10, 99, "fa", [26, 27, 28, 29, 30]),
            builder(11, 102, "fa", [26, 27, 28, 29, 30]),
            builder(12, 105, "fa", [26, 27, 28, 29, 30]),
            builder(13, 108, "fa", [26, 27, 28, 29, 30]),
            builder(14, 111, "fa", [26, 27, 28, 29, 30]),
            builder(15, 113, "fa", [26, 27, 28, 29, 30]),
            builder(16, 116, "fa", [26, 27, 28, 29, 30]),
            builder(17, 119, "fa", [26, 27, 28, 29, 30]),
            builder(18, 122, "fa", [26, 27, 28, 29, 30]),
            builder(19, 125, "fa", [26, 27, 28, 29, 30]),
            builder(20, 128, "fa", [26, 27, 28, 29, 30]),

            // norma ist kategori me untuk usia 26 - 30
            builder(0, 77, "me", [26, 27, 28, 29, 30]),
            builder(1, 80, "me", [26, 27, 28, 29, 30]),
            builder(2, 82, "me", [26, 27, 28, 29, 30]),
            builder(3, 84, "me", [26, 27, 28, 29, 30]),
            builder(4, 86, "me", [26, 27, 28, 29, 30]),
            builder(5, 89, "me", [26, 27, 28, 29, 30]),
            builder(6, 91, "me", [26, 27, 28, 29, 30]),
            builder(7, 93, "me", [26, 27, 28, 29, 30]),
            builder(8, 95, "me", [26, 27, 28, 29, 30]),
            builder(9, 98, "me", [26, 27, 28, 29, 30]),
            builder(10, 100, "me", [26, 27, 28, 29, 30]),
            builder(11, 102, "me", [26, 27, 28, 29, 30]),
            builder(12, 105, "me", [26, 27, 28, 29, 30]),
            builder(13, 107, "me", [26, 27, 28, 29, 30]),
            builder(14, 109, "me", [26, 27, 28, 29, 30]),
            builder(15, 111, "me", [26, 27, 28, 29, 30]),
            builder(16, 114, "me", [26, 27, 28, 29, 30]),
            builder(17, 116, "me", [26, 27, 28, 29, 30]),
            builder(18, 118, "me", [26, 27, 28, 29, 30]),
            builder(19, 120, "me", [26, 27, 28, 29, 30]),
            builder(20, 123, "me", [26, 27, 28, 29, 30]),

            // norma ist kategori wu untuk usia 26 - 30
            builder(0, 72, "wu", [26, 27, 28, 29, 30]),
            builder(1, 75, "wu", [26, 27, 28, 29, 30]),
            builder(2, 78, "wu", [26, 27, 28, 29, 30]),
            builder(3, 81, "wu", [26, 27, 28, 29, 30]),
            builder(4, 84, "wu", [26, 27, 28, 29, 30]),
            builder(5, 87, "wu", [26, 27, 28, 29, 30]),
            builder(6, 90, "wu", [26, 27, 28, 29, 30]),
            builder(7, 93, "wu", [26, 27, 28, 29, 30]),
            builder(8, 96, "wu", [26, 27, 28, 29, 30]),
            builder(9, 99, "wu", [26, 27, 28, 29, 30]),
            builder(10, 101, "wu", [26, 27, 28, 29, 30]),
            builder(11, 104, "wu", [26, 27, 28, 29, 30]),
            builder(12, 107, "wu", [26, 27, 28, 29, 30]),
            builder(13, 110, "wu", [26, 27, 28, 29, 30]),
            builder(14, 113, "wu", [26, 27, 28, 29, 30]),
            builder(15, 116, "wu", [26, 27, 28, 29, 30]),
            builder(16, 119, "wu", [26, 27, 28, 29, 30]),
            builder(17, 122, "wu", [26, 27, 28, 29, 30]),
            builder(18, 125, "wu", [26, 27, 28, 29, 30]),
            builder(19, 128, "wu", [26, 27, 28, 29, 30]),
            builder(20, 131, "wu", [26, 27, 28, 29, 30]),
        ]);

        DB::table("ist_gestamt")->insert(gestamtBuilder([
            67, 71, 75, 79, 83,
            87, 90, 94, 98, 102,
            106, 110, 113, 117, 121,
            125, 129, 132
        ]));
    }
}
