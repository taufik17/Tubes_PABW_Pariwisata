CREATE DATABASE liburan;
CREATE TABLE daerah(
	id_daerah CHAR(3) NOT NULL,
	nama_daerah VARCHAR(30) NOT NULL,
	PRIMARY KEY(id_daerah)
)Engine=InnoDB;

INSERT INTO daerah (id_daerah,nama_daerah) VALUES
("KLB","Kabupaten Lampung Barat"),
("KLS","Kabupaten Lampung Selatan"),
("KLH","Kabupaten Lampung Tengah"),
("KLR","Kabupaten Lampung Timur"),
("KLU","Kabupaten Lampung Utara"),
("KMI","Kabupaten Mesuji"),
("KPB","Kabupaten Pesisir Barat"),
("KPN","Kabupaten Pasawaran"),
("KPU","Kabupaten Pringsewu"),
("KTS","Kabupaten Tanggamus"),
("KTG","Kabupaten Tulang Bawang"),
("KTB","Kabupaten Tulang Bawang Barat"),
("KWK","Kabupaten Way Kanan"),
("KBL","Kota Bandar Lampung"),
("KMO","Kota Metro");

CREATE TABLE wisata(
	id_daerah CHAR(3) NOT NULL,
	id_wisata CHAR(2) NOT NULL,
	nama_wisata VARCHAR(25) NOT NULL,
	lokasi VARCHAR(100) NOT NULL,
	deskripsi TEXT,
	PRIMARY KEY(id_wisata),
	FOREIGN KEY(id_daerah) REFERENCES daerah(id_daerah)
	ON UPDATE CASCADE ON DELETE RESTRICT
) Engine = InnoDB;

INSERT INTO wisata VALUES
("KPN","SR","Pantai Sari Ringgung","Jl. Way Ratai No.KM. 14, Sidodadi, Teluk Pandan, Kabupaten Pesawaran, Lampung 35451","Pantai Sari Ringgung merupakan salah satu objek wisata pantai favorit di Lampung. Beralamat di Kabupaten Pesawaran, Provinsi Lampung, Pantai Sari Ringgung memiliki jarak tempuh 14 Km atau ± 30 Menit dari pusat Kota Bandar Lampung. Jarak dari Kota Bandar Lampung ke Pantai Sari Ringgung sekitar 14 km, atau bisa ditempuh dengan kendaraan sekitar 30 menit.
	Saat mencapai lokasi pantai, anda akan langsung terpesona dengan hamparan pasir putih yang memanjang sepanjang pantai. Di ujung selatan Pantai Sari Ringgung, anda akan menjumpai semacam tanjung kecil dengan banyak pohon kelapa di tanam di sana. View di tanjung kecil ini sangat indah. Dari lokasi ini anda dapat melihat pemandangan sepanjang Pantai Sari Ringgung. Persis di sebelah barat dari tanjung kecil ini ada bukit, yang sudah disediakan jalan khusus untuk menanjak ke atas.
	Menjawab kebutuhan wisata keluarga yang kini sudah mulai marak dengan mengajak berwisata seluruh anggota keluraga bahkan hingga anak anak, objek wisata Pantai Sari Ringgung bahkan sudah memiliki fasilitas Water Sport. Wahana untuk kegiatan water sport diantaranya banana boat, kano dan lainya. Lebih istimewa lagi, destinasi wisata ini juga memiliki keistimewaan dengan adanya Masjid Apung Al-Aminah sebagai tujuan wisata religi.
	Ketika Anda tiba pertama kali di Pantai Sari Ringgung , maka air laut yang biru bening seakan-akan mengajak Anda untuk segera menikmati kesegarannya. Ketika sudah puas menikmati Pantai Sari Ringgung, perjalanan belum selesai, masih ada destinasi menarik yang harus di kunjungi yaitu pasir timbul yang sangat mirip dengan maldive. Ada hal yang unik selama perjalanan 15 menit menuju pasir timbul. Disana ada kawasan karamba ikan milik warga setempat dan ada sebuah masjid unik, yaitu masjid terapung al-aminah. Dan dikawasan karamba memang dihuni oleh warga, jadi karamba itu semacam perkampungan terapung lengkap dengan masjid terapungnya."),

("KPN","MN","Pantai Mutun","Sukajaya Lempasing, Padang Cermin, Kabupaten Pesawaran, Lampung 35236","Pantai Mutun adalah sebuah objek wisata yang terletak di kawasan Jalan Raya Bumi Sari Natar Gang Bima Ruko Orange Natar Lampung Selatan. Secara administratif termasuk dalam wilayah kecamatan Jalan Raya Bumi Sari Natar Gang Bima Ruko Orange Padang Cermin, Kabupaten Pesawaran. Pantai ini mulai dikenal masyarakat Andan Jejama Tabikpun sebagai tujuan wisata sejak awal tahun 2017 dan menjadi tujuan favorit warga Tanjung Karang Pusat. Pantai yang masih alami dan kemudahan akses adalah salah satu daya tarik pantai Mutun Lampung Selatan."),

("KPN","KA","Pantai Klara","Jl. Raya Way Ratay No.99, Gebang, Padang Cermin, Kabupaten Pesawaran, Lampung 35451","Pantai ini oleh masyarakat setempat biasa dikenal dengan sebuat Pantai Klara.
	Konon, asal muasal nama kelapa rapat itu maksudnya merujuk pada jejeran pohon kelapa yang berbaris rapat di sepanjang pantai.
	Saat ini ada spot-spot foto yang pastinya instagramble banget yang bisa anda kunjungi di Pantai Klara.
	Lokasi Pantai Klara berada tidak jauh dari pusat kota Bandar Lampung yang juga merupakan ibukota dari provinsi Lampung.
	Pantai yang berada di wilayah administratif Kabupaten Pesawaran ini bisa ditempuh hanya dalam waktu 1 jam bila menggunakan kendaraan bermotor.
	Sementara untuk memasuki pantai Klara pengunjung harus membayar karcis masuk sebesar Rp 25.000 per mobil atau Rp 15.000 jika menggunakan motor.
	Lokasi ini biasanya dijadikan sebagai tempat latihan bagi Batalyon Infanteri 7 Marinir Piabung.
"),

("KPN","BK","Pantai Bahari Ketapang","Gebang, Padang Cermin, Kabupaten Pesawaran, Lampung 35451","Pantai dengan perpaduan warna biru dan hijau toska itu mulai tampak saat Anda melewati tanjakan tak jauh dari Kampung Batu Menyan, Padang cermin. Anda pasti akan terpana menatap pemandangan alam yang begitu mempesona di pinggir Teluk Lampung itu. Gunung, perpaduan warna air laut hingga deretan pohon kelapa yang tak terhitung jumlah mempercantik pemandangan itu. Tak sedikit para pengguna jalan yang kemudian berhenti sejenak untuk sekedar berfoto. Itulah gambaran Teluk Lampung yang akan Anda lewati jika Anda akan berkunjung ke Pantai Bahari Ketapang.
	Jika Anda berkunjung ke pantai ini menggunakan motor dan berjumlah dua orang Anda akan dikenai tiket masuk Rp 10ribu sementara untuk mobil pribadi dikenai tarif Rp 20ribu. Pantai yang telah dibuka sejak tahun 1990-an ini menawarkan suasana damai yang mungkin tak Anda temukan di pantai lainnya. Deretan pohon kelapa yang begitu banyak membuat suasana sejuk pada pantai ini. Banyak aktivitas pantai yang bisa Anda lakukan di sini mulai dari renang, menyelam, memancing hingga banana boat. Pantai yang memiliki ombak tenang ini sangat rekomendid untuk Anda kunjungi bersama keluarga. Pondokan yang terbuat dari papan kayu dan beratapkan rumbia ini juga bisa Anda sewa dengan harga Rp 25ribu selama seharian. Banyak pondokan mungil yang berbaris memanjang di dekat pantai. Selain itu, Anda juga bisa menyebrang menuju Pulau Klagian yang terletak di depan pantai ini. Pulau Klagian sangat tampak jelas dari pantai cantik ini. Jadi, tak ada salahnya jika Anda berlibur ke pantai ini.
	"),

("KBL","NP","Curug Niagara Stone Putu","Sukadana Ham, West Tanjung Karang, Kota Bandar Lampung, Lampung 35156","Air Terjun Batu Putu terletak satu deretan dengan Wira Garden Lampung dan Bumi Kedaton Resort jadi tinggal lurus saja ikuti jalan Wan Abdul Rahman.
	Dari Gapura Air Terjun Batu Putu tersebut, masuk saja ke dalam. Sekitar 10 meter dari Gapura anda akan dimintai tiket masuk sebesar Rp5.000,- per orang (harga tiket saya beli tanggal 17 April 2016, harga bisa saja berubah sewaktu-waktu).
	Setelah itu jalan lagi ke depan sekitar 300-500 meter akan anda temukan tempat parkir kendaraan. Tempat parkir kendaraan ini persis ada di pinggiran jalan, di sebelah kiri.
	Untuk mencapai ke lokasi Air Terjun Batu Putu, anda harus jalan kaki menuruni perbukitan, sekitar 5 menit jalan kaki. Kendaraan harus dititipkan di tempat parkir yang telah disediakan.
	Jalan ke lokasi sudah dipaving sehingga tidak terlalu khawatir licin terkena air hujan. Namun, perlu hati-hati juga bagi anda karena jalan menuju air terjun ini lumayan curam juga, apa lagi pas mau turun ke air terjun persis.
	Sesampai di air terjun ini, hembusan angin yang membawa molekul-molekul air langsung membuat hawa menjadi sejuk. Jika anda berjalan ke arah air terjun, maka di sebelah kiri air terjun akan anda jumpai sebuah goa kecil yang ada sana.
"),


("KLS","KG","Curug Katibung","Karya Tunggal, Katibung, Kabupaten Lampung Selatan, Lampung","Menikmati air terjun sambil menikmati semilir angin laut dan duduk di pasir putih, sambil bermain dengan deburan ombak, ternyata bukanlah suatu yang mustahil.
	Bahkan untuk menikmati dan melihat suatu yang amat jarang dijumpai tersebut, kita tak perlu jauh-jauh bertandang ke Pulau Madura untuk mengunjungi Air Terjun Toroan, yang memang berada di tepi lautan.
	Karena ternyata di Lampung Selatan (Lamsel), tepatnya di daerah Babatan, Katibung, terdapat air terjun yang airnya langsung turun ke laut, dan tempat indah itu bernama Pantai Terjun.
");

--untuk tabel kuliner dan hotel deskripsi dihilangkan 
CREATE TABLE kuliner(
	id_resto CHAR(4) NOT NULL,
	id_daerah CHAR(3) NOT NULL,
	nama_resto VARCHAR(25) NOT NULL,
	lokasi VARCHAR(100) NOT NULL,
	--deskripsi TEXT,
	PRIMARY KEY(id_resto),
	FOREIGN KEY(id_daerah) REFERENCES daerah(id_daerah)
	ON UPDATE CASCADE ON DELETE RESTRICT
) Engine=InnoDB;

INSERT INTO kuliner VALUES
("PNGH","KPN","Ayam Bakar Mas Gendut Hanura","JL Teluk Ratai, RT. 02 RW. 02, Hanura, Padang Cermin, Pesawaran, Hanura, Padang Cermin, Kabupaten Pesawaran, Lampung 35451"),
("PNPI","KPN","Rumah Makan Pindang Ika","Hurun, Padang Cermin, Pesawaran Regency, Lampung 35451"),
("PNPM","KPN","Rumah Makan Puti Minang","JL Ahmad Yani, No. 25, RT 6 RW 3, Sukaraja, Bagelen, Gedung Tataan, Bagelen, Gedung Tataan, Kabupaten Pesawaran, Lampung 35366"),
("BLHD","KBL","Ayam Penyet Hang Dihi","Jalan Pulau Sebesi No. 001, Sukarame, Kota Bandar Lampung, Lampung 35131"),
("BLAK","KBL","Mie Ayam Koga","Jl. Teuku Umar No.48, Surabaya, Kedaton, Kota Bandar Lampung, Lampung 35112");


CREATE TABLE hotel(
	id_hotel CHAR(3) NOT NULL,
	id_daerah CHAR(3) NOT NULL,
	nama_hotel VARCHAR(25) NOT NULL,
	lokasi VARCHAR(100) NOT NULL,
	harga INT,
	--deskripsi TEXT,
	PRIMARY KEY(id_hotel),
	FOREIGN KEY(id_daerah) REFERENCES daerah(id_daerah)
	ON UPDATE CASCADE ON DELETE RESTRICT
)Engine = InnoDB;

INSERT INTO hotel VALUES
("HBS","KLS","Hotel Bandara Syariah","Jl. H. Alamsyah Ratu Prawira Negara KM, Candi Mas, Natar, Kabupaten Lampung Selatan, Lampung 35362",380000),
("NTG","KBL","Nuwono Tasya Guesthouse","Jalan Perwira No.9, Rajabasa, Kota Bandar Lampung, Lampung 35122",160000,"becekkkk barbie bechekkkkk"),
("HSL","KBL","Hotel Sheraton Lampung","Jl. Wolter Monginsidi No.175, Gulak Galik, Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35401",642000),
("HEL","KBL","Home Stay Elmo's Lampung","Perumahan Kelapa 3 Asri blok C 3, Klp. Tiga, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35214",600000);