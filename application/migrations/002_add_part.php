<?php

class Migration_Add_part extends CI_Migration{

	public function up(){
		$field=[
			'id'=>[
				'type'=>'text'
			],
			'id_book'=>[
				'type'=>'text'
			],
			'title'=>[
				'type'=>'text'
			],
			'article'=>[
				'type'=>'text'
			]
		];
		$this->dbforge->add_field($field);
		$this->dbforge->create_table('part');
		
		// data of part
		$data=[
			[
				'id'=>'part-00001',
				'id_book'=>'book-00001',
				'title'=>'Pemasangan',
				'article'=>'<p>Pertama-tama anda harus menginstall aplikasi ini terlebih dahulu. Namun jika kamu sudah melihat tulisan ini kemungkinan besar kamu telah berhasil menginstal aplikasi ini. Selamat, anda bisa ke step selanjutnya</p>'
			],
			[
				'id'=>'part-00002',
				'id_book'=>'book-00001',
				'title'=>'Penjelasan book dan part',
				'article'=>'<p>Book adalah buku. Sedangkan part adalah bagian dalam buku. Karena saya tidak tahu bahasa inggrisnya bab maka saya menamainya part.
							Seperti halnya buku pada umumnya yang memiliki banyak bab, disini kamu juga bisa menuliskan banyak bab. </p>
							<p>Untuk menulis sesuatu seperti deskripsi buku atau artikel dari part kamu juga bisa menambahkan tag html. Jika ingin menulis paragraf maka bungkus diantara tag p. Jika ingin menebalkan tulisan maka bungkus tulisan tadi dengan tag b. Dan lain lain</p>'
			],
			[
				'id'=>'part-00003',
				'id_book'=>'book-00001',
				'title'=>'Halaman admin',
				'article'=>'<p>Untuk masuk ke halaman admin kamu bisa mengetikkan url pada browser kamu dengan aturan berikut:
					sesuai baseurl kamu di konfig /admin .</p><p>Username:admin<br>Password:admin</p>'
			],
			[
				'id'=>'part-00004',
				'id_book'=>'book-00001',
				'title'=>'Menu book',
				'article'=>'<p>Dengan mengetikkan baseurl kamu/admin , maka kamu akan diarahkan ke menu book. Disana kamu bisa menambahkan book, mengedit, dan juga menghapus book dengan cara menekan tombol masing-masing. Untuk menambahkan part ke sebuah book maka kamu bisa menuju ke part menu dengan mengklik tombol part.</p>'
			],
			[
				'id'=>'part-00005',
				'id_book'=>'book-00001',
				'title'=>'Menu part',
				'article'=>'<p>Sama seperti menu book. Kamu bisa menambahkan, mengedit, dan menghapus part dengan mengklik tombol masing-masing.</p>'
			],
			[
				'id'=>'part-00006',
				'id_book'=>'book-00001',
				'title'=>'Terimakasih',
				'article'=>'<p>Terimakasih telah menggunakan aplikasi ini. Tentu masih banyak kekurangan fitur dan eror yang mungkin masih sering muncul. Bila ada saran untuk fitur kedepannya atau kamu menemukan eror dalam aplikasi ini, kamu bisa menghubungi kami melalui kontak di bawah atau langsung email ke:</p> <b>hadziqay@gmail.com</b>'
			]
		];
		// insert into db
		$this->db->insert_batch('part',$data);
	}
	
	public function down(){
		$this->dbforge->drop_table('part');
	}

}