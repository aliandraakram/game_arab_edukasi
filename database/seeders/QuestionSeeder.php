<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 1,
                'title' => 'Hewan ini dalam bahasa arab bernama..',
                'image' => 'public/image/hewan_tumbuhan/Monyet.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 1,
                'title' => 'Hewan herbivora ini dalam bahasa arab bernama..',
                'image' => 'public/image/hewan_tumbuhan/kambing.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 1,
                'title' => 'Hewan ini dapat berjalan di darat dan berenang di air, hewan ini bernama..',
                'image' => 'public/image/hewan_tumbuhan/bebek.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 1,
                'title' => 'Hewan burung ini dalam bahasa arab bernama..',
                'image' => 'public\image\hewan_tumbuhan\merpati-balap-darah-putra-tasik-0.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 1,
                'title' => 'Hewan yang bisa bertelur ini dalam bahasa arab bernama..',
                'image' => 'public\image\hewan_tumbuhan\Ciri-ciri ayam betina yang baik untuk induk Ayam Super.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 2,
                'title' => 'Hewan yang suka sekali memakan wortel bernama..',
                'image' => 'public\image\hewan_tumbuhan\kelinci.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 2,
                'title' => 'Hewan laut yang sangat besar ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\paus.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 2,
                'title' => 'Hewan yang sering dijadikan peliharaan ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\kucing.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 2,
                'title' => 'Hewan laut yang bernapas lewat paru-paru ini bernama ..',
                'image' => 'public\image\hewan_tumbuhan\lumba-lumba.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 2,
                'title' => 'Hewan yang bisa hidup di darat dan di air ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\kodok.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 3,
                'title' => 'Hewan bertanduk ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\deer-captured-wild-forest.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 3,
                'title' => 'Hewan yang memiliki belalai yang sangat panjang bernama..',
                'image' => 'public\image\hewan_tumbuhan\beautiful-elephant-gravel-pathway-surrounded-by-green-grass-trees.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 3,
                'title' => 'Hewan yang bisa menyimpan air di punuknya ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\unta.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 3,
                'title' => 'Hewan yang mempunyai bulu yang sangat tebal bernama..',
                'image' => 'public\image\hewan_tumbuhan\domba.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 3,
                'level_id' => 3,
                'title' => 'Hewan yang mempunyai tempurung yang sangat keras bernama..',
                'image' => 'public\image\hewan_tumbuhan\kura-kura.jpg'
            ], [
                'category_id' => 2,
                'course_id' => 6,
                'level_id' => 31,
                'title' => 'Hewan yang suka main di lumpur ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\babi.jpg',
                'audio' => 'public\voice\hewan\babi.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 6,
                'level_id' => 31,
                'title' => 'serangga yang mempunyai sayap yang sangat indah ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\kupu-kupu.jpg',
                'audio' => 'public\voice\hewan\bahasa_arab_kupu-kupu.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 6,
                'level_id' => 31,
                'title' => 'Hewan yang bisa berlari sangat kencang ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\kuda.jpg',
                'audio' => 'public\voice\hewan\kuda.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 6,
                'level_id' => 31,
                'title' => 'Hewan yang suka menggonggong ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\anjing.jpg',
                'audio' => 'public\voice\hewan\anjing.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 6,
                'level_id' => 31,
                'title' => 'Hewan karnivora ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\tiger-looking-with-open-mouth.jpg',
                'audio' => 'public\voice\hewan\bahasa_arab_harimau.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 6,
                'level_id' => 32,
                'title' => 'Hewan yang suka memakan keju ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\tikus.jpg',
                'audio' => 'public\voice\hewan\bahasa_arab_tikus.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 6,
                'level_id' => 32,
                'title' => 'Serangga yang suka memakan tumbuhan dan bergerak dengan cara melompat ini bernama',
                'image' => 'public\image\hewan_tumbuhan\belalang.jpg',
                'audio' => 'public\voice\hewan\bahasa_arab_belalang.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 6,
                'level_id' => 32,
                'title' => 'Hewan yang memiliki bisa atau racun yang mematikan ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\ular.jpg',
                'audio' => 'public\voice\hewan\ular.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 6,
                'level_id' => 32,
                'title' => 'Hewan yang bisa menghasilkan susu dan diminum oleh manusia bernama..',
                'image' => 'public\image\hewan_tumbuhan\cows-standing-green-field-front-fuji-mountain-japan.jpg',
                'audio' => 'public\voice\hewan\sapi.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 6,
                'level_id' => 32,
                'title' => 'Hewan yang menghasilkan madu ini bernama..',
                'image' => 'public\image\hewan_tumbuhan\lebah.jpg',
                'audio' => 'public\voice\hewan\bahasa_arab_lebah.mp3'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 6,
                'title' => 'Dari gambar dibawah ini, anak ini adalah seorang…',
                'image' => 'public\image\pekerjaan\siswa.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 6,
                'title' => 'Wanita dibawah ini bekerja sebagai…',
                'image' => 'public\image\pekerjaan\guru.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 6,
                'title' => 'Pria dibawah ini bekerja sebagai…',
                'image' => 'public\image\pekerjaan\supir.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 6,
                'title' => '4.	Untuk menangkap orang yang melakukan kejahatan adalah pekerjaan dari polisi. Bahasa arab dari polisi adalah..',
                'image' => 'public\image\pekerjaan\polisi.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 6,
                'title' => 'Orang yang bisa menyembuhkan orang sakit disebut',
                'image' => 'public\image\pekerjaan\dokterjpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 7,
                'title' => 'orang yang pekerjaannya memasak adalah seorang…',
                'image' => 'public\image\pekerjaan\koki.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 7,
                'title' => 'Orang yang pekerjaannya mengendarai pesawat adalah seorang…',
                'image' => 'public\image\pekerjaan\pilot.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 7,
                'title' => 'Orang yang pekerjaannya mengendarai kapal laut adalah seorang…',
                'image' => 'public\image\pekerjaan\nahkoda.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 7,
                'title' => 'Nasi adalah bahan pokok dalam makanan orang Indonesia. Yang menanam padi sebelum menjadi nasi disebut seorang…',
                'image' => 'public\image\pekerjaan\petani.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 7,
                'title' => 'Orang yang mencari ikan dilaut dinamakan seorang …',
                'image' => 'public\image\pekerjaan\nelayan.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 8,
                'title' => 'Yang bertugas untuk memberi hukuman kepada penjahat disebut sebagai …',
                'image' => 'public\image\pekerjaan\hakim.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 8,
                'title' => 'Yang bertugas untuk berperang dan menjaga negara kita ialah seorang …',
                'image' => 'public\image\pekerjaan\tentara.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 8,
                'title' => 'Orang yang bisa pergi ke luar angkasa ialah seorang …',
                'image' => 'public\image\pekerjaan\astronor.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 8,
                'title' => 'Jika rumah kita sedang kebakaran, maka kita harus memanggil …',
                'image' => 'public\image\pekerjaan\pemadam_kebakaran.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 4,
                'level_id' => 8,
                'title' => 'Orang yang menjual suatu barang kepada orang lain disebut …',
                'image' => 'public\image\pekerjaan\pedagang.jpg'
            ], [
                'category_id' => 2,
                'course_id' => 7,
                'level_id' => 36,
                'title' => 'Orang yang memiliki suara bagus biasanya akan menjadi seorang',
                'image' => 'public\image\pekerjaan\penyanyi.jpg',
                'audio' => 'public\voice\pekerjaan\penyanyi.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 7,
                'level_id' => 36,
                'title' => 'Orang yang memiliki kemampuan untuk menggambar di kanvas biasanya disebut seorang …',
                'image' => 'public\image\pekerjaan\pelukis.jpg',
                'audio' => 'public\voice\pekerjaan\bahasa_arab_pelukis.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 7,
                'level_id' => 36,
                'title' => 'Orang yang bertugas untuk membangun rumah dan Gedung biasa disebut seorang…',
                'image' => 'public\image\kuli_bangunan.jpg',
                'audio' => 'public\voice\pekerjaan\bahasa_arab_kuli-bangunan.mp3'

            ], [
                'category_id' => 2,
                'course_id' => 7,
                'level_id' => 36,
                'title' => 'Orang yang bertugas untuk memotret dan memfoto orang-orang disebut…',
                'image' => 'public\image\pekerjaan\fotografer.jpg',
                'audio' => 'public\voice\pekerjaan\fotografer.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 7,
                'level_id' => 36,
                'title' => 'Orang yang bertugas untuk membuat berita dan memberitakan suatu kejadian disebut…',
                'image' => 'public\image\pekerjaan\reporter.jpg',
                'audio' => 'public\voice\pekerjaan\reporter.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 7,
                'level_id' => 37,
                'title' => 'Orang yang memimpin negara Indonesia dinamakan …',
                'image' => 'public\image\pekerjaan\presiden.jpg',
                'audio' => 'public\voice\pekerjaan\bahasa_arab_presiden.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 7,
                'level_id' => 37,
                'title' => 'Orang yang mahir atau jago dalam suatu cabang olahraga biasa disebut sebagai …',
                'image' => 'public\image\pekerjaan\atlet.jpg',
                'audio' => 'public\voice\pekerjaan\bahasa_Arab_atlet.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 7,
                'level_id' => 37,
                'title' => 'Orang yang membantu presiden dalam pekerjaannya disebut.. ',
                'image' => 'public\image\pekerjaan\aktor.jpg',
                'audio' => 'public\voice\pekerjaan\Bahasa_Arab_Menteri.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 7,
                'level_id' => 37,
                'title' => 'Orang yang bekerja untuk membangun dan mengembangkan sesuatu disebut…',
                'image' => 'public\image\pekerjaan\aktor.jpg',
                'audio' => 'public\voice\pekerjaan\Bahasa_arab_insinyur.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 7,
                'level_id' => 37,
                'title' => 'Orang yang bekerja di apotek ini bernama',
                'image' => 'public\image\pekerjaan\Apoteker.jpg',
                'audio' => 'public\voice\pekerjaan\bahasa_arab_apoteker.mp3'
            ], 
            // Benda dirumah
            [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 11,
                'title' => 'Benda yang digunakan untuk masuk kedalam rumah bernama',
                'image' => 'public\image\benda_dirumah\pintu.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 11,
                'title' => 'Benda yang berbentuk persegi atau persegi panjang ini bernama',
                'image' => 'public\image\benda_dirumah\meja.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 11,
                'title' => 'Benda yang digunakan untuk duduk bernama',
                'image' => 'public\image\benda_dirumah\kursi.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 11,
                'title' => 'Benda yang digunakan untuk membuka pintu bernama',
                'image' => 'public\image\benda_dirumah\kunci.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 11,
                'title' => 'Benda yang digunakan untuk tidur bernama',
                'image' => 'public\image\benda_dirumah\kasur.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 12,
                'title' => 'Benda yang berguna untuk menunjukan waktu bernama',
                'image' => 'public\image\benda_dirumah\jam.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 12,
                'title' => 'Benda yang berguna untuk menutup kepala ini bernama',
                'image' => 'public\image\benda_dirumah\topi.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 12,
                'title' => 'Benda yang digunakan untuk mengukur bernama',
                'image' => 'public\image\benda_dirumah\penggaris.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 12,
                'title' => 'Benda yang digunakan untuk alas kaki dan berlari ini bernama',
                'image' => 'public\image\benda_dirumah\sepatu.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 12,
                'title' => 'Benda yang digunakan untuk menulis bernama',
                'image' => 'public\image\benda_dirumah\pensil.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 13,
                'title' => 'Benda yang berisi tulisan ini bernama',
                'image' => 'public\image\benda_dirumah\buku.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 13,
                'title' => 'Benda yang jika digunakan untuk menulis tidak bisa dihapus ini bernama',
                'image' => 'public\image\benda_dirumah\pulpen.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 13,
                'title' => 'Benda yang digunakan pada kaki sebelum memakai sepatu ini bernama',
                'image' => 'public\image\benda_dirumah\kos kaki.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 13,
                'title' => 'Benda yang biasa digunakan cewek untuk menutup kepala ini bernama',
                'image' => 'public\image\benda_dirumah\jilbab.jpg'
            ], [
                'category_id' => 1,
                'course_id' => 5,
                'level_id' => 13,
                'title' => 'Benda yang digunakan untuk menulis di papan tulis bernama',
                'image' => 'public\image\benda_dirumah\spidol.jpg'
            ], [
                'category_id' => 2,
                'course_id' => 8,
                'level_id' => 41,
                'title' => 'Benda yang digunakan untuk meminum air ini bernama',
                'image' => 'public\image\benda_dirumah\gelas.jpg',
                'audio' => 'public\voice\benda\bahasa_arab_gelas.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 8,
                'level_id' => 41,
                'title' => 'Benda yang digunakan untuk memakan mie atau spagetti ini bernama',
                'image' => 'public\image\benda_dirumah\garpu.jpg',
                'audio' => 'public\voice\benda\bahasa_arab_garpu.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 8,
                'level_id' => 41,
                'title' => 'Benda yang digunakan untuk makan ini bernama',
                'image' => 'public\image\benda_dirumah\sendok.jpg',
                'audio' => 'public\voice\benda\bahasa_arab_sendok.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 8,
                'level_id' => 41,
                'title' => 'Benda yang biasa digunakan untuk mandi ini bernama',
                'image' => 'public\image\benda_dirumah\gayung.jpg',
                'audio' => 'public\voice\benda\bahasa_arab_gayung.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 8,
                'level_id' => 41,
                'title' => 'Benda yang digunakan untuk menyapu ini bernama',
                'image' => 'public\image\benda_dirumah\sapu.jpg',
                'audio' => 'public\voice\benda\bahasa_arab_sapu.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 8,
                'level_id' => 42,
                'title' => 'Benda yang digunakan untuk tempat membuang sampah ini bernama',
                'image' => 'public\image\benda_dirumah\tempat sampah.jpg',
                'audio' => 'public\voice\benda\bahasa_arab_tempat-sampah.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 8,
                'level_id' => 42,
                'title' => 'Benda yang digunakan untuk meletakkan makanan ini bernama',
                'image' => 'public\image\benda_dirumah\piring.jpg',
                'audio' => 'public\voice\benda\bahasa_arab_piring.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 8,
                'level_id' => 42,
                'title' => 'Benda yang digunakan untuk memotong ini bernama',
                'image' => 'public\image\benda_dirumah\pisau.jpg',
                'audio' => 'public\voice\benda\bahasa_arab_pisau.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 8,
                'level_id' => 42,
                'title' => 'Benda yang biasa digunakan untuk menyimpan teh atau air ini bernama',
                'image' => 'public\image\benda_dirumah\teko.jpg',
                'audio' => 'public\voice\benda\bahasa_arab_teko.mp3'
            ], [
                'category_id' => 2,
                'course_id' => 8,
                'level_id' => 42,
                'title' => 'Benda yang digunakan untuk memasak ini bernama',
                'image' => 'public\image\benda_dirumah\kompor.jpg',
                'audio' => 'public\voice\benda\bahasa_arab_kompor.mp3'
            ], 
        ];

        Question::insert($data);
    }
}
