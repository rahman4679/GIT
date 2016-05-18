create database sistem_kopma_order;
use sistem_kopma_order; 

create table costumer(
	id_costumer int(12) auto_increment primary key,
	nama_costumer varchar(30) not null,
	alamat_kirim varchar(50) not null,
	telp_costumer varchar(15) not null
);

create table menu(
	id_menu varchar(30) primary key,
	nama_menu varchar(30) not null,
	harga_menu int(10) not null
);

create table transaksi(
	id_transaksi int(5) auto_increment primary key,
	no_transksi int(5) not null,
	id_costumer int(12) not null,
	id_menu varchar(30) not null,
	waktu timestamp,
	jumlah_pesanan int(5) not null,
	total_harga int(10) not null,
	foreign key (id_menu) references menu(id_menu),
	foreign key (id_costumer) references costumer(id_costumer)
);

insert into menu values
	('BRG001','Ayam Penyet',8000),
	('BRG002','Nasi Goreng',6000),
	('BRG003','Jus Jeruk',5000),
	('BRG004','Jus Alpukat',7000),
	('BRG005','Jus Mangga',7000),
	('BRG006','Kentang Goreng Balado',4000);
