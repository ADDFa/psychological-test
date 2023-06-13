<?php

namespace Database\Seeders\Questions;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MSDT extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("msdt_questions")->insert([
            [
                "first_statement"   => "Saya tidak akan menegur pelanggar-pelanggar peraturan bila saya merasa pasti bahwa tida ada satu orangpun yang mengetahui tentang pelanggar-pelanggar tersebut.",
                "second_statement"  => "Bila saya mengumumkan suatu keputusan yang kurang menyenangkan, saya akan menjelaskan kepada bawahan saya bahwa keputusan ini dibuat oleh direktur."
            ],

            [
                "first_statement"   => "Bila ada seorang karyawan yang hasil kerjanya selalu tidak memuaskan saya, saya akan menunggu suatu kesempatan untuk memindahkannya dan bukan untuk memecatnya.",
                "second_statement"  => "Bila ada bawahan saya yang dikucilkan dari kelompok kerjanya, saya akan mencari jalan agar orang lain dapat berteman dengannya."
            ],

            [
                "first_statement"   => "Bila direktur memberikan perintah yang kurang menyenangkan, saya pikir adalah cukup bijaksana bila saya menyebutkan namanya dan bukan nama saya.",
                "second_statement"  => "Bila biasanya membuat keputusan-keputusan sendiri dan menyampaikannya kepada bawahan saya."
            ],

            [
                "first_statement"   => "Bila saya ditegur oleh atasan saya, saya akan memanggil semua bawahan saya dan mengatakan semua teguran tersebut kepada mereka.",
                "second_statement"  => "Saya selalu menganjurkan kepada bawahan saya untuk memberikan usul-usul, tetapi kadang0kadang saya langsung mengambil tindakan tertentu."
            ],

            [
                "first_statement"   => "Seringkali saya lebih mementingkan tugas daripada diri saya sendiri.",
                "second_statement"  => "Saya mengijinkan bawahan-bawahan saya untuk ikut serta dalam mengambil keputusan."
            ],

            [
                "first_statement"   => "Bila jumlah dan mutu hasil kerja bagian saya tidak memuaskan, saya mengatakan kepada bawahan-bawahan saya bahwa direktur merasa kecewa. Oleh karena itu mereka harus memperbaiki kerja mereka.",
                "second_statement"  => 'Saya membiat keputusan-keputusan sendiri dan kemudian saya mencoba untuk "menjual" keputusan-keputusan itu kepada bawahan saya.'
            ],

            [
                "first_statement"   => "Bila saya mengumumkan suatu keputusan yang kurang menyenangkan, saya akan menjelaskan kepada bawahan saya bahwa keputusan ini dibuat oleh direktur.",
                "second_statement"  => "Saya mengijinkan bawahan-bawahan saya untuk ikut serta di dalam pengambilan keputusan, teptapi sayapun menyediakan susuatu yang jitu sebagai keputusan terakhir."
            ],

            [
                "first_statement"   => "Saya akan memberikan tugas-tugas yang sulit kepada bawahan saya yang belum berpengalaman, tetapi bila mereka memperoleh kesukaran, saya akan mengambil alih tanggung jawab mereka.",
                "second_statement"  => "Bila jumlah dan mutu hasil kerja bagian saya tidak memuaskan, saya menjelaskan kepda bawahan-bawahan saya bawhwa direktur merasa kecewa, Oleh karena itu mereka harus memperbaiki mutu kerja mereka itu."
            ],

            [
                "first_statement"   => "Saya menunjukkan minat saya terhadap kehidupan pribadi bawahan-bawahan saya, karena sayapun mengharapkan mereka berbuat seperti itu kepada saya.",
                "second_statement"  => "Saya merasa bahwa bawahan-bawahan saya tidak perlu mengerti mengapa mereka mengerjakan sesuatu hal, sejauh mereka mengerjakan hal tersebut."
            ],

            [
                "first_statement"   => "Saya percaya bahwa bawahan-bawahan yang tidak disiplin tidak akan memperbaiki jumlah atau mutu kerja mereka dalam jangka waktu yang panjang.",
                "second_statement"  => "Bila menghadapi masalah uang sulit, suya berusaha untuk mencapai pemecahan uang dapat diterima oleh sebagian besar orang."
            ],

            [
                "first_statement"   => "Bila ada bawahan saya merasa tidak bahagia, saya akan mencoba melakukan sesuatu untuk mengatasi hal tersebut.",
                "second_statement"  => "Saya berusaha berkerja sebaik mungkin dan memberikan ide-ide pengembangan pada pimpinan."
            ],

            [
                "first_statement"   => "Saya menyetujui kenaikan tunjangan-tunjangan untuk staf dan karyawan.",
                "second_statement"  => "Saya mendukung bawahan saya yang ingin meningkatkan pengetahuan tentang pekerjaan dan perusahaan, walaupun hal itu sebenarnya belum diperlukan untuk kedudukan mereka sekarang."
            ],

            [
                "first_statement"   => "Saya memberikan orang lain menangani tugas mereka masing-masing, walaupun mereka banyak membuat kesalahan.",
                "second_statement"  => "Saya membuat keputusan-keputusan sendiri, tetapi saya akan mempertimbangkan usul-usul dari bawahan-bawahan saya."
            ],

            [
                "first_statement"   => "Bila ada bawahan saya yang dikucilkan dari kelompok kerjanya, saya akan mencari cara agar orang lain dapat berteman dengannya.",
                "second_statement"  => "Bila seorang karyawan tidak sanggup menyelesaikan tugasnya, saya akan membantu dia untuk menyelesaikan tugasnya tersebut."
            ],

            [
                "first_statement"   => "Saya percaya bahwa penerapan disiplin merupakan contoh untuk karyawan-karyawan lain.",
                "second_statement"  => "Saya merasa lebih mementingkan tugas daripada diri saya sendiri."
            ],

            [
                "first_statement"   => "Saya mencela pembicaraan-pembicaraan yang tidak perlu di antara bawahan-bawahan saya, selama mereka bekerja.",
                "second_statement"  => "Saya menyetujui kenaikan tunjangan-tunjangan untuk staf dan karyawan."
            ],

            [
                "first_statement"   => "Saya selalu memperhatikan keterlambatan dan kemangkiran bawahan saya.",
                "second_statement"  => "Saya percaya bahwa serikat-serikat buruh akan mencoba meruntuhkan kewibawaan pimpinan perusahaan."
            ],

            [
                "first_statement"   => "Kadang-kadang saya merasa bahwa apa yang dikelukan oleh serikat buruh bukan lah masalah yang mendasar.",
                "second_statement"  => "Saya percaya bahwa serikat-serikat buruh akan mencoba meruntuhkan kewibawaan pimpinan perusahaan."
            ],

            [
                "first_statement"   => "Adalah penting bagi saya untuk memperoleh penghargaan atas ide-ide saya yang baik.",
                "second_statement"  => "Saya mengemukakan pendapat-pendapat saya dimuka umum hanya bila saya merasa bahwa orang lain akan setuju dengan saya."
            ],

            [
                "first_statement"   => "Saya percaya bahwa serikat-serikat buruh akan mencoba meruntuhkan kewibawaan pimpinan perusahaan.",
                "second_statement"  => "Saya percaya bahwa pertemuan-pertemuan yang sering dengan karyawan secara pribadi akan membantu pengembangan diri mereka."
            ],

            [
                "first_statement"   => "Saya merasa bawahan-bawahan saya tidak perlu mengerti mengapa mereka mengerjakan sesuatu hal sejauh mereka mengerjakan hal tersebut.",
                "second_statement"  => "Sya merasa bahwa jam pencataat waktu datang dan pulangnya para pegawai akan mengurangi keterlambatan."
            ],

            [
                "first_statement"   => "Saya biasanya membuat keputusan-keputusan sendiri dan menyampaikannya kepada bawahan saya.",
                "second_statement"  => "Saya merasa bahwa serikat-serikat buruh dan pimpinan perusahaan dapat bekerjasama untuk mencapai tujuan-tujuan bersama."
            ],

            [
                "first_statement"   => "Saya mentukai penggunaan skala penggajian karyawan.",
                "second_statement"  => "Saya selalu melakukan diskusi-diskusi ntuk mencapai kata sepakat."
            ],

            [
                "first_statement"   => "Saya tidak akan memberikan tugas yang tidak saya senangi kepada orang lain.",
                "second_statement"  => "Bila beberapa bawahan saya merasa tidak berbahagia, saya akan mencoba melakukan sesuatu untuk mengatasi hal tersebut."
            ],

            [
                "first_statement"   => "Bila ada tugas yang mendesak, walaipun semua perlalatannya sudah disediakan, saya akan membiarkannya saja dan meminta salah seorang bawahan saya untuk mengerjakan tugas tersebut.",
                "second_statement"  => "Adalah penting bagi saya untuk memperoleh penghargaan atas ide-ide saya yang baik."
            ],

            [
                "first_statement"   => "Tujuan saya adalah berusaha mengerjakan tugas sebaik mungkin tanpa mengeluh.",
                "second_statement"  => "Saya memberikan tugas kepada bawahan saya tanpa banyak mempertimbangkan pengalaman atau kemampuan saya lebih menuntut pencapaian hasilnya saja."
            ],

            [
                "first_statement"   => "Saya memberikan tugas kepada bawahan saya tanpa banyak mempertimbangkan pengalaman atau kemampuan. Saya lebih menuntut pada pencapaian hasilnya saja.",
                "second_statement"  => "Saya dengan sabar mendengarkan keluhan-keluhan dan ketidakpuasan-ketidakpuasan bawahan saya, tetapi seringkali saya meralat apa yang mereka katakan."
            ],

            [
                "first_statement"   => "Saya merasa bahwa keluhan-keluhan tidak dapat dicegah dan saya berusaha untuk menghilangkan keluan tersebut.",
                "second_statement"  => "Saya percaya bahwa bawahan-bawahan saya akan merasakan kepuasan kerja tanpa merasa tertekan oleh saya."
            ],

            [
                "first_statement"   => "Bila menghadapi masalah yang sulit, saya berusaha untuk mencapai pemecahan yang dapat diterima oleh sebaigan besar orang.",
                "second_statement"  => "Saya percaya bahwa pengalaman bekerja lebih bermanfaat daripada pendidikan teoritis."
            ],

            [
                "first_statement"   => "Saya selalu memberikan tugas-tugas yang sangat sulit kepada karyawan-karyawan yang paling berpengalaman.",
                "second_statement"  => "Saya percaya bahwa kenaikan jabatan adalah semata-mata berdasarkan kemampuan yang ada."
            ],

            [
                "first_statement"   => "Saya merasa bahwa masalah-masalah yang timbul di antara para karyawan biasanya akan dapat deselesaikan diantara mereka sendiri, tanpa campur tangan dari saya.",
                "second_statement"  => "Bila saya ditegur oleh atasan saya, saya akan memanggil semua bawahan saya dan mengatakan semua teguran tersebut kepada mereka."
            ],

            [
                "first_statement"   => "Saya tidak peduli dengan apa yang dikerjakan oleh karyawan saya di luar jam kerja kantornya.",
                "second_statement"  => "Saya percaya bahwa bawahan bawahan yang tidak disiplin dan akan memperbaiki jumlah atau mutu kerja mereka dalam jangka watu yang panjang."
            ],

            [
                "first_statement"   => "Saya memberikan informasi kepada pimpinan perusahaan tidak lebih dari apa yang mereka tanyakan.",
                "second_statement"  => "Kadang-kadang saya merasa bahwa apa yang dikeluhkan oleh serikat buruh bukanlah masalah yang mendasar."
            ],

            [
                "first_statement"   => "Saya kadang ragu-ragu untuk membuat suatu keputusan yang akan tidak disukai oleh bawahan-bawahan saya.",
                "second_statement"  => "Tujuan saya adalah berusaha mengerjakan tugas sebaik mungkin tanpa mengeluh."
            ],

            [
                "first_statement"   => "Saya dengan sabar mendengarkan keluhan-keluhan dan ketidakpuasan-ketidakpuasan dari bawahan saya, tetapi seringkali saya meralat apa yang mereka katakan.",
                "second_statement"  => "Saua kadang ragu untuk membuat suatu keputusan yang akan tidak disukai oleh bawahan-bawahan saya."
            ],

            [
                "first_statement"   => "Saya mengemukakan pendapat-pendapat saya dimuka umum hanya bila saya merasa bahwa orang lain akan setuju dengan saya.",
                "second_statement"  => "Sebagian besar dari bawahan-bawahan saya dapat menyelesaikan tugas-tugas mereka, bila perlu tanpa kehadiran saya."
            ],

            [
                "first_statement"   => "Saya berusahan bekerja sebaik mungkin dan memberikan ide-ide pengembangan pada pimpinan perusahaan.",
                "second_statement"  => "Bila saya memberikan tugas kepada bawahan-bawahan saya, saya menentukan batas waktu menyelesaikannya."
            ],

            [
                "first_statement"   => "Saya selalu menganjurkan kepada bawahan saya utnuk memberikan usul-usul, tetapi kadang-kadang saya langsung mengambil tindakan tertentu.",
                "second_statement"  => "Saya mencoba membuat bawahan-bawahan saya merasa senang apabila mereka berbicara dengan saya."
            ],

            [
                "first_statement"   => "Didalam diskusi-diskusi saya memberikan fakta-fakta sesuai pemahaman bawahan saya, dan membiarkan mereka untuk membuat kesimpulan sendiri.",
                "second_statement"  => "Bila direktur memberikan perintah yang kurang menyenangkan, saya pikir adalah cukup bijaksana bila saya menyebutkan namanya dan bukan nama saya."
            ],

            [
                "first_statement"   => "Bila ada tugas-tugas mendadak atau tugas yang tidak menyenangkan, sebelumnya saya akan meminta beberapa sukarelawan yang mau mengerjakan tugas tersebut.",
                "second_statement"  => "Saya menunjukkan minat saya terhadap  kehidupan pribadi bawahan saya karena sayapun mengharapkan mereka berbuat seperti utu kepada saya."
            ],

            [
                "first_statement"   => "Saya selalu memperhatikan kebahwagiaan karyawan-karyawan saya saat mereka mengertjakan tugas-tugas mereka.",
                "second_statement"  => "Saya selalu memperhatikan keterlambatan dan kemangkiran bawahan saya."
            ],

            [
                "first_statement"   => "Sebagian besar dari bawahan-bawahan saya dapat menyelesaikan tugas-tugas mereka, bila perlu, tanpa kehadiran saya.",
                "second_statement"  => "Bila ada sesuatu tugas yang mendesak, walaupun semua peralatannya sudah disediakan, saya akan mebiarkannya saja dan meminta salah seorang bawahan saya untuk mengerjakan tugas tersebut."
            ],

            [
                "first_statement"   => "Saya percaya bahwa bawahan-bawahan saya akan merasakan kepuasan kerja tanpa merasa tertekan oleh saya.",
                "second_statement"  => 'Saya memberikan informasi kepada "dewan peminpin perusahaan" tidak lebih dari apa yang mereka tanyakan.'
            ],

            [
                "first_statement"   => "Saya percaya bahwa pertemuan-pertemuan yang sering dengan karyawan secara pribadi akan membantu pengebangan diri mereka.",
                "second_statement"  => "Saya selalu memperhatikan kebahagiaan karyawan-karyawan saya saat mereka mengerjakan tugas-tugas mereka."
            ],

            [
                "first_statement"   => "Saya mendukung bawahan saya yang ingnin meningkatkan pengetahun tentang pekerjaan dan perusahaan, walaupun hal itu sebenarnya belum diperlukan untuk kedudukan mereka sekarang.",
                "second_statement"  => "Saya mengawasi benar bawahan-bawahan saya yang kurang mahir dalam pekerjaannya atay bawahan-bawahan saya yang hasil kerjaannya kurang memuaskan."
            ],

            [
                "first_statement"   => "Saya mengijinkan bawahan-bawahan saya untuk ikut serta dalam mengambil keputusan dan saya selalu mematuhi keputusan yang dibuat berdasarkan suara terbanyak.",
                "second_statement"  => "Saya membuat bawahan-bawahan saya bekerja keras, dan saya berusahan meyakinkan mereka bahwa biasanya mereka akan mendapat perlakuan yang adil dari pimpinan perusahaan."
            ],

            [
                "first_statement"   => "Saya merasa bahwa semua karyawan pada jabatan yabg sana seharusnya memperoleh gaji yang sama.",
                "second_statement"  => "Bila ada seorang karyawan yang hasil kerjanya selalu tidak memuaskan saya, saya akan menunggu suatu kesempatan untuk memindahkannya dan bukan untuk memecatnya."
            ],

            [
                "first_statement"   => "Saya merasa bahwa tujuan-tujuan serikat buruh dan tujuan-tujuan perusahaan saling berbeda.",
                "second_statement"  => "Saya merasa bahwa dengan bekerja keras bagi bawahan saya, mereka akan menyenangi saya."
            ],

            [
                "first_statement"   => "Saya mengawasi benar bawahan-bawahan saya yang kurang mahir dalam pekerjaannya atau bawahan-bawahan saya yang hasil kerjanya kurang memuaskan.",
                "second_statement"  => "Saya mencela pembicaraan-pembisaraan yang tidak perlu di antara bawahan-bawahan saya, selama mereka bekerja."
            ],

            [
                "first_statement"   => "Bila saya memberikan tugas kepada bawahan-bawahan saya, saya menentukan batas waktu penyelesaiannya.",
                "second_statement"  => "Saya tidak akan memberikan tugas yang tidak saya senangi kepada orang lain."
            ],

            [
                "first_statement"   => "Saya percaya bahwa pengalaman bekerja lebih bermanfaat darupada pendidikan teoritis.",
                "second_statement"  => "Saya tidak peduli dengan apa yang dikerjakan oleh para pegawai diluar jam kantornya."
            ],

            [
                "first_statement"   => "Saya merasa bahwa jam pencatat waktu datang dan pulangnya para pegawai akan mengurangi keterlambatan.",
                "second_statement"  => "Saya mengijinkan bawahan-bawahan saya untuk ikut serta dalam pengambilan keputusan dan saya selalu mematuhi keputusan yang dibuat berdasarkan suara terbanyak."
            ],

            [
                "first_statement"   => "Saya membuat keputusan-keputusan sendiri, tetapi saya dapat mempertimbangkan saran-saran yang wajar dari bawahan-bawahan saya.",
                "second_statement"  => "Saya merasa bahwa tujuan-tujuan serikat buruh dan tujuan-tujuan perusahaan adalah saling berbeda."
            ],

            [
                "first_statement"   => 'Saya membuat keputusan-keputusan sendiri dan kemudian saya mencoba untuk "menjual" keputusan-keputusan itu kepada bawahan saya.',
                "second_statement"  => "Apabila mungkin, saya akan membentuk kelompok-kelompok yang terdiri dari orang-orang yang sudah menjadi taman-teman baik saya."
            ],

            [
                "first_statement"   => "Saya tidak akan ragu-ragu untuk memperkerjakan pegawai-pegawai yang cacat jasmani, bilamana saya merasa pasti bahwa mereka dapat menangani pekerjaannya.",
                "second_statement"  => "Saya tidak akan menegur pelanggar-pelanggar peraturan, bila saya merasa pasti bahwa tidak ada satu orangpun yang mengetahui tentang pelanggaran-pelanggaran tersebut."
            ],

            [
                "first_statement"   => "Apabila mungkin, saya akan membentuk kelompok-kelompok kerja yang terdiri dari orang-orang yang sudah menjadi teman-teman baik saya.",
                "second_statement"  => "Saya akan memberikan tugas-tugas yang sulit kepada bawahan-bawahan saya yang berlum berpengalaman, tetapi bila mereka memperoleh kesukaranm saya akan mengambil alih tanggung jawab mereka."
            ],

            [
                "first_statement"   => "Saya membuat bawahan-bawahan saya bekerja keras, dan saya berusaha meyakinkan mereka bahwa biasanya mereka akan mendapat perlakuan yang adil dari pimpinan perusahaan.",
                "second_statement"  => "Saya percaya bahwa penerapan disiplin adalah merupakan contoh untuk karyawan-karyawan lainnya."
            ],

            [
                "first_statement"   => "Saya mencoba untuk membuat bawahan-bawahan saya merasa senang apabila mereka berbicara dengan saya.",
                "second_statement"  => "Saya menyukai penggunaan skala pengajian karyawan."
            ],

            [
                "first_statement"   => "Saya percaya bahwa kenaikan jabatan adalah semata-mata berdasarkan kemampuan yang ada.",
                "second_statement"  => "Saya merasa bahwa masalah-masalah yang timbul diantara para karyawan biasanya akan dapat diselesaikan diantara mereka sendiri, tanpa campur tangan dari saya."
            ],

            [
                "first_statement"   => "Saya merasa bahwa serikat-serikat buruh dan pimpinan perusahaan bekerja untuk mencapi tujuan-tujuan yang sama.",
                "second_statement"  => "Didalam diskusi, saya memberikan fakta-fakta sesuai pemahaman bawahan saya, dan mebiarkan mereka untuk membuat kesimpulan sendiri."
            ],

            [
                "first_statement"   => "Bila seorang karyawan tidak sanggup menyelesaikan tugasnya, saya akan emembantu dia untuk menyelesaikan tugas tersebut.",
                "second_statement"  => "Saya merasa bahwa semua karyawan pada jabatan yang sama seharusnya memperoleh gaji yang sama."
            ],

            [
                "first_statement"   => "Saya mengijinkan bawahan-bawahan saya untuk ikut serta dalam pengambilan keputusan, tetapi saya pun menyediakan sesuatu yang jitu sebagai keputusan terakhir.",
                "second_statement"  => "Saya tidak akan ragu-ragu untuk mempekerjakan pegawai-pegawai yang cacat jasmaninya, bilamana saya merasa bahwa mereka dapat menangani pekerjaannya."
            ]
        ]);
    }
}
