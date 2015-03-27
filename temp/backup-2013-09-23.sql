#
# TABLE STRUCTURE FOR: gl_bpendapatan
#

DROP TABLE IF EXISTS gl_bpendapatan;

CREATE TABLE `gl_bpendapatan` (
  `id_transaksi` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `id_proyek` varchar(20) NOT NULL,
  `id_currency` varchar(20) NOT NULL,
  `total` decimal(15,0) NOT NULL,
  `created` datetime NOT NULL,
  `creator` varchar(20) NOT NULL,
  `modified` datetime NOT NULL,
  `modifier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_bpendapatan (`id_transaksi`, `tanggal`, `id_proyek`, `id_currency`, `total`, `created`, `creator`, `modified`, `modifier`) VALUES ('1', '2013-07-04', 'TES', 'RP.', '300000', '2013-07-01 12:49:18', '1', '2013-07-08 07:57:08', '1');
INSERT INTO gl_bpendapatan (`id_transaksi`, `tanggal`, `id_proyek`, `id_currency`, `total`, `created`, `creator`, `modified`, `modifier`) VALUES ('2', '2013-07-08', 'TES', 'RP.', '2000000000000', '2013-07-08 06:56:22', '1', '2013-07-08 06:56:52', '1');
INSERT INTO gl_bpendapatan (`id_transaksi`, `tanggal`, `id_proyek`, `id_currency`, `total`, `created`, `creator`, `modified`, `modifier`) VALUES ('1', '2013-07-04', 'TES', 'RP.', '300000', '2013-07-01 12:49:18', '1', '2013-07-08 07:57:08', '1');
INSERT INTO gl_bpendapatan (`id_transaksi`, `tanggal`, `id_proyek`, `id_currency`, `total`, `created`, `creator`, `modified`, `modifier`) VALUES ('2', '2013-07-08', 'TES', 'RP.', '2000000000000', '2013-07-08 06:56:22', '1', '2013-07-08 06:56:52', '1');


#
# TABLE STRUCTURE FOR: gl_bpendapatan_perkiraan
#

DROP TABLE IF EXISTS gl_bpendapatan_perkiraan;

CREATE TABLE `gl_bpendapatan_perkiraan` (
  `id` int(11) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `id_proyek` tinytext NOT NULL,
  `id_perkiraan` varchar(20) NOT NULL,
  `nama_perkiraan` varchar(20) NOT NULL,
  `jumlah` decimal(15,0) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_bpendapatan_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (0, '2', 'TES', '410100', 'Pendapatan Mobilisas', '2000000000000', 'xxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO gl_bpendapatan_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (0, '1', 'TES', '110110', 'Kas Lubuk Linggau', '100000', 'rr');
INSERT INTO gl_bpendapatan_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (1, '1', 'TES', '110140', 'Kas Nibung', '200000', 'xxxxxxxxxxxxxxxxxxx');
INSERT INTO gl_bpendapatan_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (0, '2', 'TES', '410100', 'Pendapatan Mobilisas', '2000000000000', 'xxxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO gl_bpendapatan_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (0, '1', 'TES', '110110', 'Kas Lubuk Linggau', '100000', 'rr');
INSERT INTO gl_bpendapatan_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (1, '1', 'TES', '110140', 'Kas Nibung', '200000', 'xxxxxxxxxxxxxxxxxxx');


#
# TABLE STRUCTURE FOR: gl_bpengeluaran
#

DROP TABLE IF EXISTS gl_bpengeluaran;

CREATE TABLE `gl_bpengeluaran` (
  `id_transaksi` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `id_proyek` varchar(20) NOT NULL,
  `id_currency` varchar(20) NOT NULL,
  `total` decimal(15,2) NOT NULL,
  `created` datetime NOT NULL,
  `creator` varchar(20) NOT NULL,
  `modified` datetime NOT NULL,
  `modifier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_bpengeluaran (`id_transaksi`, `tanggal`, `id_proyek`, `id_currency`, `total`, `created`, `creator`, `modified`, `modifier`) VALUES ('2', '2013-07-02', 'TES', 'RP.', '14555.00', '2013-07-02 08:52:52', '1', '2013-07-08 05:39:09', '1');
INSERT INTO gl_bpengeluaran (`id_transaksi`, `tanggal`, `id_proyek`, `id_currency`, `total`, `created`, `creator`, `modified`, `modifier`) VALUES ('1', '2013-07-03', 'TES', 'US$', '1344.00', '2013-07-02 08:58:30', '1', '2013-07-05 07:27:25', '1');
INSERT INTO gl_bpengeluaran (`id_transaksi`, `tanggal`, `id_proyek`, `id_currency`, `total`, `created`, `creator`, `modified`, `modifier`) VALUES ('2', '2013-07-02', 'TES', 'RP.', '14555.00', '2013-07-02 08:52:52', '1', '2013-07-08 05:39:09', '1');
INSERT INTO gl_bpengeluaran (`id_transaksi`, `tanggal`, `id_proyek`, `id_currency`, `total`, `created`, `creator`, `modified`, `modifier`) VALUES ('1', '2013-07-03', 'TES', 'US$', '1344.00', '2013-07-02 08:58:30', '1', '2013-07-05 07:27:25', '1');


#
# TABLE STRUCTURE FOR: gl_bpengeluaran_perkiraan
#

DROP TABLE IF EXISTS gl_bpengeluaran_perkiraan;

CREATE TABLE `gl_bpengeluaran_perkiraan` (
  `id` int(11) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `id_proyek` tinytext NOT NULL,
  `id_perkiraan` varchar(20) NOT NULL,
  `nama_perkiraan` varchar(20) NOT NULL,
  `jumlah` decimal(15,0) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_bpengeluaran_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (0, '1', 'TES', '110100', 'Kas HO', '122', 'tes');
INSERT INTO gl_bpengeluaran_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (1, '1', 'TES', '110130', 'Kas Transportir', '1222', 'tes lagi');
INSERT INTO gl_bpengeluaran_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (0, '2', 'TES', '110140', 'Kas Nibung', '12222', 'tester2');
INSERT INTO gl_bpengeluaran_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (1, '2', 'TES', '110110', 'Kas Lubuk Linggau', '2333', 'sss');
INSERT INTO gl_bpengeluaran_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (0, '1', 'TES', '110100', 'Kas HO', '122', 'tes');
INSERT INTO gl_bpengeluaran_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (1, '1', 'TES', '110130', 'Kas Transportir', '1222', 'tes lagi');
INSERT INTO gl_bpengeluaran_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (0, '2', 'TES', '110140', 'Kas Nibung', '12222', 'tester2');
INSERT INTO gl_bpengeluaran_perkiraan (`id`, `id_transaksi`, `id_proyek`, `id_perkiraan`, `nama_perkiraan`, `jumlah`, `keterangan`) VALUES (1, '2', 'TES', '110110', 'Kas Lubuk Linggau', '2333', 'sss');


#
# TABLE STRUCTURE FOR: gl_currency
#

DROP TABLE IF EXISTS gl_currency;

CREATE TABLE `gl_currency` (
  `kd_currency` tinytext NOT NULL,
  `nama` tinytext NOT NULL,
  `kurs` double DEFAULT NULL,
  `default` tinyint(1) DEFAULT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  UNIQUE KEY `kd_currency` (`kd_currency`(10))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_currency (`kd_currency`, `nama`, `kurs`, `default`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('RP.', 'RUPIAH', '1', 1, NULL, NULL, NULL, NULL);
INSERT INTO gl_currency (`kd_currency`, `nama`, `kurs`, `default`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('US$', 'US$', '9810', 0, NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: gl_customer
#

DROP TABLE IF EXISTS gl_customer;

CREATE TABLE `gl_customer` (
  `kd_customer` tinytext NOT NULL,
  `nama` tinytext NOT NULL,
  `alamat` tinytext NOT NULL,
  `telepon` tinytext NOT NULL,
  `fax` tinytext NOT NULL,
  `npwp` tinytext NOT NULL,
  `kontak` tinytext NOT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  UNIQUE KEY `kd_customer` (`kd_customer`(10))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_customer (`kd_customer`, `nama`, `alamat`, `telepon`, `fax`, `npwp`, `kontak`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('001', 'TEST', '-', '-', '-', '-', '-', NULL, NULL, NULL, NULL);
INSERT INTO gl_customer (`kd_customer`, `nama`, `alamat`, `telepon`, `fax`, `npwp`, `kontak`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('aasd', 'asd', 'asd', 'asda', 'sdas', 'dasd', 'asda', NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: gl_datagl
#

DROP TABLE IF EXISTS gl_datagl;

CREATE TABLE `gl_datagl` (
  `periode` varchar(6) NOT NULL,
  `id_perkiraan` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `level` int(10) unsigned NOT NULL,
  `perkiraan_general` varchar(20) NOT NULL,
  `grup` varchar(20) NOT NULL,
  `debet` decimal(15,2) NOT NULL,
  `kredit` decimal(15,2) NOT NULL,
  `saldo_awal` decimal(15,2) NOT NULL,
  `saldo_akumulasi` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id_perkiraan`,`periode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_group
#

DROP TABLE IF EXISTS gl_group;

CREATE TABLE `gl_group` (
  `kd_group` tinytext NOT NULL,
  `namagroup` tinytext NOT NULL,
  `kds_group` tinytext NOT NULL,
  `namasub` tinytext NOT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  UNIQUE KEY `kds_group` (`kds_group`(10))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_group (`kd_group`, `namagroup`, `kds_group`, `namasub`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('001', 'SPARE PARTS', '001.001', 'IDLER', NULL, NULL, NULL, NULL);
INSERT INTO gl_group (`kd_group`, `namagroup`, `kds_group`, `namasub`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('001', 'SPARE PARTS', '001.002', 'KOMATSU', NULL, NULL, NULL, NULL);
INSERT INTO gl_group (`kd_group`, `namagroup`, `kds_group`, `namasub`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('asd', 'asd', 'asd-a', 'asdasd', NULL, NULL, NULL, NULL);
INSERT INTO gl_group (`kd_group`, `namagroup`, `kds_group`, `namasub`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('asd', 'asd', 'asd-b', 'sdfsgfv', NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: gl_gudang
#

DROP TABLE IF EXISTS gl_gudang;

CREATE TABLE `gl_gudang` (
  `kode_gudang` tinytext NOT NULL,
  `namagd` tinytext NOT NULL,
  `alamatgd` tinytext NOT NULL,
  `telepongd` tinytext NOT NULL,
  `faxgd` tinytext NOT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  UNIQUE KEY `kode_gudang` (`kode_gudang`(10))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_gudang (`kode_gudang`, `namagd`, `alamatgd`, `telepongd`, `faxgd`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('G01', 'GUDANG PUSAT', 'MASPION PLAZA', '-', '-', NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: gl_hutang
#

DROP TABLE IF EXISTS gl_hutang;

CREATE TABLE `gl_hutang` (
  `kode_supplier` varchar(25) NOT NULL,
  `no_invoice` varchar(25) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jwaktu` double DEFAULT '0',
  `total` double DEFAULT '0',
  `kode_kurs` varchar(25) NOT NULL,
  `kurs` double DEFAULT '0',
  `bayar` double DEFAULT '0',
  `tolak` double DEFAULT '0',
  `retur` double DEFAULT '0',
  `jumlah_total` double DEFAULT '0',
  `jumlah_bayar` double DEFAULT '0',
  `jumlah_retur` double DEFAULT '0',
  `jumlah_tolak` double DEFAULT '0',
  `tipe` varchar(1) NOT NULL DEFAULT 'K',
  `lebih` double DEFAULT '0',
  `jumlah_lebih` double DEFAULT '0',
  UNIQUE KEY `no_invoice` (`no_invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_hutang (`kode_supplier`, `no_invoice`, `tanggal`, `jwaktu`, `total`, `kode_kurs`, `kurs`, `bayar`, `tolak`, `retur`, `jumlah_total`, `jumlah_bayar`, `jumlah_retur`, `jumlah_tolak`, `tipe`, `lebih`, `jumlah_lebih`) VALUES ('asd', '2013060001', '2013-06-26', '30', '45550', 'RP.', '1', '0', '0', '0', '45550', '0', '0', '0', 'K', '0', '0');
INSERT INTO gl_hutang (`kode_supplier`, `no_invoice`, `tanggal`, `jwaktu`, `total`, `kode_kurs`, `kurs`, `bayar`, `tolak`, `retur`, `jumlah_total`, `jumlah_bayar`, `jumlah_retur`, `jumlah_tolak`, `tipe`, `lebih`, `jumlah_lebih`) VALUES ('asd', '2013060002', '2013-06-26', '0', '4595000', 'RP.', '1', '0', '0', '0', '4595000', '0', '0', '0', 'K', '0', '0');
INSERT INTO gl_hutang (`kode_supplier`, `no_invoice`, `tanggal`, `jwaktu`, `total`, `kode_kurs`, `kurs`, `bayar`, `tolak`, `retur`, `jumlah_total`, `jumlah_bayar`, `jumlah_retur`, `jumlah_tolak`, `tipe`, `lebih`, `jumlah_lebih`) VALUES ('asd', '2013060003', '2013-06-17', '0', '23525000', 'RP.', '1', '13525000', '0', '0', '23525000', '13525000', '0', '0', 'K', '0', '0');


#
# TABLE STRUCTURE FOR: gl_invoice_stock
#

DROP TABLE IF EXISTS gl_invoice_stock;

CREATE TABLE `gl_invoice_stock` (
  `no_invoice` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `kd_customer` tinytext NOT NULL,
  `id_proyek` tinytext NOT NULL,
  `kode_gudang` tinytext NOT NULL,
  `jenis_bayar` varchar(25) NOT NULL,
  `ppnpersen` int(11) NOT NULL,
  `jwaktu` int(11) NOT NULL,
  `jtempo` date NOT NULL,
  `total` int(11) NOT NULL,
  `ppntotal` int(11) NOT NULL,
  `totalbayar` int(11) NOT NULL,
  `grandtotal` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `creator` varchar(20) NOT NULL,
  `modified` datetime NOT NULL,
  `modifier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_invoice_stock (`no_invoice`, `tanggal`, `kd_customer`, `id_proyek`, `kode_gudang`, `jenis_bayar`, `ppnpersen`, `jwaktu`, `jtempo`, `total`, `ppntotal`, `totalbayar`, `grandtotal`, `created`, `creator`, `modified`, `modifier`) VALUES ('1', '2013-07-15', '001', 'PTest', 'G01', 'kredit', 30, 20, '2013-08-04', 61110, 18333, 10000, 69443, '2013-07-15 10:02:05', '1', '2013-07-19 06:09:42', '1');
INSERT INTO gl_invoice_stock (`no_invoice`, `tanggal`, `kd_customer`, `id_proyek`, `kode_gudang`, `jenis_bayar`, `ppnpersen`, `jwaktu`, `jtempo`, `total`, `ppntotal`, `totalbayar`, `grandtotal`, `created`, `creator`, `modified`, `modifier`) VALUES ('2', '2013-07-15', 'aasd', 'TES', 'G01', 'tunai', 50, 2, '2013-07-17', 1344420, 672210, 100000, 1916630, '2013-07-15 10:24:44', '1', '2013-07-19 06:08:30', '1');
INSERT INTO gl_invoice_stock (`no_invoice`, `tanggal`, `kd_customer`, `id_proyek`, `kode_gudang`, `jenis_bayar`, `ppnpersen`, `jwaktu`, `jtempo`, `total`, `ppntotal`, `totalbayar`, `grandtotal`, `created`, `creator`, `modified`, `modifier`) VALUES ('3', '2013-07-18', '001', 'TES', 'G01', 'kredit', 10, 35, '2013-08-22', 301520000, 30152000, 15000000, 316672000, '2013-07-18 09:23:33', '1', '2013-07-19 06:06:30', '1');
INSERT INTO gl_invoice_stock (`no_invoice`, `tanggal`, `kd_customer`, `id_proyek`, `kode_gudang`, `jenis_bayar`, `ppnpersen`, `jwaktu`, `jtempo`, `total`, `ppntotal`, `totalbayar`, `grandtotal`, `created`, `creator`, `modified`, `modifier`) VALUES ('002', '2013-07-26', '001', 'PTest', 'g01', 'kredit', 10, 30, '2013-08-25', 17111100, 1711110, 0, 18822210, '2013-07-26 06:36:35', '1', '2013-09-18 16:12:11', '1');


#
# TABLE STRUCTURE FOR: gl_invoice_stock_grid
#

DROP TABLE IF EXISTS gl_invoice_stock_grid;

CREATE TABLE `gl_invoice_stock_grid` (
  `id` int(11) NOT NULL,
  `no_invoice` varchar(25) DEFAULT NULL,
  `kode_barang` tinytext,
  `nama_barang` tinytext,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` tinytext,
  `hargajual` double DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_invoice_stock_grid (`id`, `no_invoice`, `kode_barang`, `nama_barang`, `jumlah`, `satuan`, `hargajual`, `total`) VALUES (0, '3', 'asdas', 'asd', 152, 'asd', '10000', '1520000');
INSERT INTO gl_invoice_stock_grid (`id`, `no_invoice`, `kode_barang`, `nama_barang`, `jumlah`, `satuan`, `hargajual`, `total`) VALUES (0, '3', 'test', 'test barang', 100, 'pcs', '3000000', '300000000');
INSERT INTO gl_invoice_stock_grid (`id`, `no_invoice`, `kode_barang`, `nama_barang`, `jumlah`, `satuan`, `hargajual`, `total`) VALUES (0, '2', 'asdas', 'asd', 110, 'asd', '12222', '1344420');
INSERT INTO gl_invoice_stock_grid (`id`, `no_invoice`, `kode_barang`, `nama_barang`, `jumlah`, `satuan`, `hargajual`, `total`) VALUES (0, '1', 'asdas', 'asd', 5, 'asd', '12222', '61110');
INSERT INTO gl_invoice_stock_grid (`id`, `no_invoice`, `kode_barang`, `nama_barang`, `jumlah`, `satuan`, `hargajual`, `total`) VALUES (0, '002', 'test', 'test barang', 50, 'pcs', '222222', '11111100');
INSERT INTO gl_invoice_stock_grid (`id`, `no_invoice`, `kode_barang`, `nama_barang`, `jumlah`, `satuan`, `hargajual`, `total`) VALUES (0, '002', 'test2', 'test2', 60, 'pcs', '100000', '6000000');


#
# TABLE STRUCTURE FOR: gl_invoice_stock_temp
#

DROP TABLE IF EXISTS gl_invoice_stock_temp;

CREATE TABLE `gl_invoice_stock_temp` (
  `creator` int(11) NOT NULL,
  `kode_gudang` tinytext NOT NULL,
  `kode_barang` tinytext NOT NULL,
  `jumlah` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_jurnal_akumulasi
#

DROP TABLE IF EXISTS gl_jurnal_akumulasi;

CREATE TABLE `gl_jurnal_akumulasi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `id_jurnal` varchar(20) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `id_perkiraan` varchar(20) NOT NULL,
  `nama_perkiraan` varchar(100) NOT NULL,
  `debet` decimal(15,2) NOT NULL,
  `kredit` decimal(15,2) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_karyawan
#

DROP TABLE IF EXISTS gl_karyawan;

CREATE TABLE `gl_karyawan` (
  `id_karyawan` tinytext NOT NULL,
  `nama` tinytext NOT NULL,
  `dept` tinytext NOT NULL,
  `jabatan` tinytext NOT NULL,
  `alamat` tinytext NOT NULL,
  `telepon` tinytext NOT NULL,
  `nonaktif` tinyint(4) DEFAULT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  UNIQUE KEY `id_karyawan` (`id_karyawan`(10))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_maccount
#

DROP TABLE IF EXISTS gl_maccount;

CREATE TABLE `gl_maccount` (
  `id_perkiraan` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `level` int(10) unsigned NOT NULL,
  `perkiraan_general` varchar(20) NOT NULL,
  `grup` varchar(20) NOT NULL,
  `saldo_awal_sekali` decimal(15,2) NOT NULL,
  `saldo_awal` decimal(15,2) NOT NULL,
  `saldo_akumulasi` decimal(15,2) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `creator` varchar(20) NOT NULL,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modifier` varchar(20) NOT NULL,
  PRIMARY KEY (`id_perkiraan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('1', 'AKTIVA', 'general', 1, '1', 'aktiva', '0.00', '0.00', '0.00', '2013-05-15 02:34:46', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('11', 'AKTIVA LANCAR', 'general', 2, '1', 'aktiva', '0.00', '0.00', '0.00', '2013-05-16 03:17:07', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('110', 'KAS & BANK', 'general', 3, '11', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:10:53', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('110100', 'Kas HO', 'detail', 4, '110', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:13:43', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('110110', 'Kas Lubuk Linggau', 'detail', 4, '110', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:14:01', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('110120', 'Kas RO Tri Ariyani', 'detail', 4, '110', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:14:21', '1', '2013-05-21 11:16:18', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('110130', 'Kas Transportir', 'detail', 4, '110', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:14:53', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('110140', 'Kas Nibung', 'detail', 4, '110', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:15:15', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('110150', 'Kas Site Tri Ariyani', 'detail', 4, '110', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:15:54', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('110160', 'Kas Lainnya', 'detail', 4, '110', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:02:10', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('110300', 'Bank Mandiri a/c: 119-00-3390000-0', 'detail', 4, '110', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:16:42', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('110500', 'Inter Account', 'detail', 4, '110', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:17:21', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('111', 'PIUTANG USAHA', 'general', 4, '11', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:29:12', '1', '2013-05-21 11:31:13', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('111100', 'Piutang Usaha', 'detail', 4, '111', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:29:55', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('112', 'PIUTANG PEMEGANG SAHAM', 'general', 3, '11', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:30:24', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('112100', 'Piutang Jimmy Manopo', 'detail', 4, '112', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:32:49', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('112200', 'Piutang Lo Hery', 'detail', 4, '112', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:33:16', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('113', 'PIUTANG KARYAWAN', 'general', 3, '11', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:33:53', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('113100', 'Piutang Jonata', 'detail', 4, '113', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:34:20', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('113200', 'Piutang Alamsyah', 'detail', 4, '113', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:34:41', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('114', 'PIUTANG LAINNYA', 'general', 3, '11', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:35:32', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('114100', 'Piutang PT.NBA', 'detail', 4, '114', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:36:11', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('114110', 'Piutang PT.MSK', 'detail', 4, '11', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:36:40', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('114120', 'Piutang PT.TSS', 'detail', 4, '114', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:37:05', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('114130', 'Piutang PT.NCAL', 'detail', 4, '114', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:37:34', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('115', 'UANG MUKA LEASING', 'general', 3, '11', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:38:00', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('115100', 'Uang Muka Leasing PT. Dipo Star', 'detail', 4, '115', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:38:29', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('115110', 'Uang Muka Leasing PT. Mitsui Leasing C.I.', 'detail', 4, '115', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:38:49', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('116', 'UANG MUKA LAINNYA', 'general', 3, '11', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:39:30', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('116100', 'Uang Muka Renovasi', 'detail', 4, '116', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:39:56', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('116110', 'Uang Muka Asuransi', 'detail', 4, '116', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:40:18', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('116120', 'Uang Muka Pembelian', 'detail', 4, '116', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:40:44', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('116130', 'Uang Muka Sewa', 'detail', 4, '116', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:41:07', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('116200', 'Uang Muka Lainnya', 'detail', 4, '116', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 11:41:37', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('117', 'PAJAK DIBAYAR DIMUKA', 'general', 3, '11', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:07:15', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('117100', 'PPh Pasal 22', 'detail', 4, '117', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:08:34', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('117110', 'PPh Pasal 23', 'detail', 4, '117', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:08:57', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('117120', 'PPh Pasal 25', 'detail', 4, '117', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:09:25', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('117130', 'PPN Masukan', 'detail', 4, '117', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:09:41', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('118', 'BIAYA DIBAYAR DIMUKA', 'general', 3, '11', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:07:39', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('118100', 'Sewa Dibayar Dimuka', 'detail', 4, '118', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:10:00', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('118110', 'Asuransi Dibayar Dimuka', 'detail', 4, '118', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:10:15', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('12', 'AKTIVA TETAP', 'general', 2, '1', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:17:46', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('120100', 'Tanah', 'detail', 3, '12', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:19:13', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('120110', 'Gedung', 'detail', 3, '12', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:19:33', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('120120', 'Peralatan & Perlengkapan (HO)', 'detail', 3, '12', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:19:52', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('120130', 'Peralatan & Perlengkapan (Kebun/Site)', 'detail', 3, '12', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:20:08', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('120140', 'Kendaraan', 'detail', 3, '12', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:20:25', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('120150', 'Alat Berat', 'detail', 3, '12', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:20:40', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('121', 'AKUMULASI PENYUSUTAN', 'general', 3, '12', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:23:46', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('121110', 'Akumulasi Penyusutan Gedung', 'detail', 4, '121', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:43:01', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('121120', 'Akumulasi Penyusutan Peralatan & Perlengkapan  ( H0 )', 'detail', 4, '121', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:43:22', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('121130', 'Akumulasi Penyusutan Peralatan & Perlengkapan ( Kebun/Site )', 'detail', 4, '121', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:43:53', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('121140', 'Akumulasi Penyusutan Kendaraan', 'detail', 4, '121', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:44:20', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('121150', 'Akumulasi Penyusutan Alat Berat', 'detail', 4, '121', 'aktiva', '0.00', '0.00', '0.00', '2013-05-21 01:44:48', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('2', 'HUTANG', 'general', 1, '2', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:16:16', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('200', 'HUTANG USAHA', 'general', 2, '2', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:16:49', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('200100', 'Hutang Usaha', 'detail', 3, '200', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:17:06', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('210', 'HUTANG DIREKSI', 'general', 2, '2', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:17:26', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('210100', 'Hutang Direksi', 'detail', 3, '210', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:18:02', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('220', 'HUTANG LEASING', 'general', 2, '2', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:18:20', '1', '2013-05-28 03:19:36', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('220100', 'Hutang Leasing PT. Dipo Star Finance', 'detail', 3, '220', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:19:23', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('220200', 'Hutang Leasing PT. Mitsui Leasing Capital I.', 'detail', 3, '220', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:20:09', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('220300', 'Hutang Leasing PT. Surya Artha Nusantara Finance', 'detail', 3, '220', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:20:32', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('220400', 'Hutang Leasing PT. Clipan Finance', 'detail', 3, '220', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:20:52', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('230', 'HUTANG PAJAK', 'general', 2, '2', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:21:08', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('230100', 'PPh Pasal 21', 'detail', 3, '230', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:21:29', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('230110', 'PPh Pasal 23', 'detail', 3, '230', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:21:45', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('230120', 'PPh Pasal 4 (2)', 'detail', 3, '230', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:22:13', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('230130', 'PPh Pasal 25', 'detail', 3, '230', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:22:30', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('230140', 'PPN Keluaran', 'detail', 3, '230', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:22:49', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('240', 'HUTANG LAINNYA', 'general', 2, '2', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:23:16', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('240100', 'Hutang PT. MSK', 'detail', 3, '240', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:23:38', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('240110', 'Hutang PT. NBA', 'detail', 3, '240', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:23:54', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('240120', 'Hutang PT. TSS', 'detail', 3, '240', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:24:11', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('240130', 'Hutang Tri Ariyani - RO', 'detail', 3, '240', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:24:26', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('240140', 'Hutang Tri Ariyani - Site', 'detail', 3, '240', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:24:44', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('250', 'BIAYA YANG MASIH HARUS DIBAYAR', 'general', 2, '2', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:25:05', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('250100', 'Biaya Gaji Yang Masih Harus Dibayar', 'detail', 3, '250', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:25:24', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('250110', 'Biaya PLN Yang Masih Harus Dibayar', 'detail', 3, '250', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:25:39', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('250120', 'Biaya PAM Yang Masih Harus Dibayar', 'detail', 3, '250', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:25:58', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('250130', 'Biaya Telepon Yang Masih Harus Dibayar', 'detail', 3, '250', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:26:15', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('250140', 'Biaya Lainnya Yang Masih Harus Dibayar', 'detail', 3, '250', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:26:31', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('250150', 'Asuransi Yang Masih Harus Dibayar', 'detail', 3, '250', 'hutang', '0.00', '0.00', '0.00', '2013-05-28 03:26:49', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('3', 'MODAL & LABA', 'general', 1, '3', 'modal', '0.00', '0.00', '0.00', '2013-05-20 04:18:35', '1', '2013-05-20 04:20:45', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('31', 'MODAL', 'general', 2, '3', 'modal', '0.00', '0.00', '0.00', '2013-05-20 04:22:14', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('310100', 'Modal Jimmy Manopo', 'detail', 3, '31', 'modal', '0.00', '0.00', '0.00', '2013-05-20 04:18:53', '1', '2013-05-20 04:21:12', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('310200', 'Modal Lo Hery', 'detail', 3, '31', 'modal', '0.00', '0.00', '0.00', '2013-05-20 04:19:26', '1', '2013-05-20 04:21:47', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('32', 'LABA', 'general', 2, '3', 'modal', '0.00', '0.00', '0.00', '2013-05-22 10:10:58', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('320100', 'Laba (Rugi) Tahun Lalu', 'detail', 3, '32', 'modal', '0.00', '0.00', '0.00', '2013-05-20 04:23:12', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('320200', 'Laba (Rugi) Tahun Berjalan', 'detail', 3, '32', 'modal', '0.00', '0.00', '0.00', '2013-05-20 04:23:39', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('320300', 'Laba (Rugi) bulan berjalan', 'detail', 3, '32', 'modal', '0.00', '0.00', '0.00', '2013-06-11 11:45:17', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('4', 'PENDAPATAN', 'general', 1, '4', 'pendapatan', '0.00', '0.00', '0.00', '2013-05-20 02:41:18', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('410100', 'Pendapatan Mobilisasi', 'detail', 2, '4', 'pendapatan', '0.00', '0.00', '0.00', '2013-05-20 02:41:38', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('410110', 'Pendapatan Rental', 'detail', 2, '4', 'pendapatan', '0.00', '0.00', '0.00', '2013-05-20 02:41:52', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('410200', 'Pendapatan Lainnya', 'detail', 2, '4', 'pendapatan', '0.00', '0.00', '0.00', '2013-05-20 02:42:37', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('5', 'HARGA POKOK PENJUALAN', 'general', 1, '5', 'harga_pokok', '0.00', '0.00', '0.00', '2013-05-20 04:17:24', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('511', 'GAJI & TUNJANGAN', 'general', 2, '5', 'harga_pokok', '0.00', '0.00', '0.00', '2013-05-20 04:17:50', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('511100', 'Gaji - RO', 'detail', 3, '511', 'harga_pokok', '0.00', '0.00', '0.00', '2013-05-20 04:14:54', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('511110', 'Lembur - RO', 'detail', 3, '511', 'harga_pokok', '0.00', '0.00', '0.00', '2013-05-20 03:40:25', '1', '2013-05-20 04:13:32', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('511120', 'Premi - RO', 'detail', 3, '511', 'harga_pokok', '0.00', '0.00', '0.00', '2013-05-20 03:40:41', '1', '2013-05-20 04:13:16', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('511130', 'Iuran Pensiun - RO', 'detail', 3, '511', 'harga_pokok', '0.00', '0.00', '0.00', '2013-05-20 04:15:43', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('511140', 'Tunjangan Jamsostek - RO', 'detail', 3, '511', 'harga_pokok', '0.00', '0.00', '0.00', '2013-05-20 03:41:09', '1', '2013-05-20 04:12:33', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('511150', 'Tunjangan Jabatan - RO', 'detail', 3, '511', 'harga_pokok', '0.00', '0.00', '0.00', '2013-05-20 03:41:34', '1', '2013-05-20 04:11:32', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('511160', 'Tunjangan Makan - RO', 'detail', 3, '511', 'harga_pokok', '0.00', '0.00', '0.00', '2013-05-20 03:41:51', '1', '2013-05-20 04:10:59', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('511170', 'Tunjangan Pengobatan - RO', 'detail', 3, '511', 'harga_pokok', '0.00', '0.00', '0.00', '2013-05-20 03:45:00', '1', '2013-05-20 04:10:44', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('511180', 'Tunjangan Lainnya - RO', 'detail', 3, '511', 'harga_pokok', '0.00', '0.00', '0.00', '2013-05-20 03:49:32', '1', '2013-05-20 04:10:29', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('511190', 'THR, Bonus, Liburan dan Cuti - RO', 'detail', 3, '511', 'harga_pokok', '0.00', '0.00', '0.00', '2013-05-20 03:49:53', '1', '2013-05-20 04:10:12', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('6', 'BIAYA - BIAYA', 'general', 1, 'BIAYA - BIAYA', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:48:30', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('611', 'GAJI & TUNJANGAN', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:50:17', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('611100', 'Gaji - Staf', 'detail', 3, '611', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:50:56', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('611110', 'Lembur - Staff', 'detail', 3, '611', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:51:19', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('611120', 'Komisi - Staff', 'detail', 3, '611', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:51:37', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('611130', 'Iuran Pensiun - Staff', 'detail', 3, '611', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:13:42', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('611140', 'Tunjangan Jamsostek - Staff', 'detail', 3, '611', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:14:19', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('611150', 'Tunjangan Jabatan - Staff', 'detail', 3, '611', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:14:47', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('611160', 'Tunjangan Makan - Staff', 'detail', 3, '611', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:15:16', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('611170', 'Tunjangan Pengobatan - Staff', 'detail', 3, '611', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:15:37', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('611180', 'Tunjangan Lainnya - Staff', 'detail', 3, '611', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:16:15', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('611190', 'THR, Bonus, Liburan dan Cuti - Staff', 'detail', 3, '611', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:16:55', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('612', 'SEWA', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:51:58', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('612100', 'Sewa Mess', 'detail', 3, '612', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:52:24', '1', '2013-05-20 10:53:31', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('612110', 'Sewa Kantor', 'detail', 3, '612', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:52:49', '1', '2013-05-20 10:53:45', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('612200', 'Sewa Lainnya', 'detail', 3, '612', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:53:14', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('613', 'PERBAIKAN & PEMELIHARAAN', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:54:29', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('613100', 'Jasa Perbaikan & Pemeliharaan Kendaraan', 'detail', 3, '613', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:55:06', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('613110', 'Jasa Perbaikan & Pemeliharaan Mess', 'detail', 3, '613', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:55:36', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('613120', 'Jasa Perbaikan & Pemeliharaan Kantor', 'detail', 3, '613', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:17:57', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('613130', 'Sparepart Kendaraan', 'detail', 3, '613', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:18:22', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('613140', 'Peralatan Perkakas', 'detail', 3, '613', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:19:09', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('614', 'PERJALANAN DINAS, TRANSPORTASI & SURVEY', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:19:44', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('614100', 'Akomodasi & Perjalanan Dinas', 'detail', 3, '614', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:20:23', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('614110', 'Survey Lokasi', 'detail', 3, '614', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:20:47', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('614200', 'Transport Lainnya', 'detail', 3, '614', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:21:28', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('615', 'BAHAN BAKAR, TOL & PARKIR', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:25:41', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('615100', 'Bahan Bakar Kendaraan', 'detail', 3, '615', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:26:07', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('615110', 'Tol & Parkir', 'detail', 3, '615', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:26:35', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('616', 'PENGADAAN SARANA & PRASARANA', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:21:59', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('616100', 'Pengadaan Mess', 'detail', 3, '616', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:24:47', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('616200', 'Pengadaan Sarana & Prasarana Lainnya', 'detail', 3, '616', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:25:14', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('617', 'INTERNET, TELP, LISTRIK & AIR', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:27:41', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('617100', 'Internet Provider', 'detail', 3, '617', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:28:03', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('617110', 'Telephone & Pulsa Handphone', 'detail', 3, '617', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:29:12', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('617120', 'PLN', 'detail', 3, '617', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:29:39', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('617130', 'PAM', 'detail', 3, '617', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:30:00', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('618', 'JAMUAN SUMBANGAN & REPRESENTASI', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:30:30', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('618100', 'Jamuan Konsumsi Kantor', 'detail', 3, '618', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:30:51', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('618110', 'Jamuan Entertainment', 'detail', 3, '618', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:31:31', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('618120', 'Sumbangan Internal', 'detail', 3, '618', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:31:52', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('618130', 'Sumbangan External', 'detail', 3, '618', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:32:13', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('618140', 'Representasi', 'detail', 3, '618', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:32:40', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('619', 'KEAMANAN, RETRIBUSI & SERVICE CHARGE', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:33:28', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('619100', 'Keamanan', 'detail', 3, '619', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:34:05', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('619110', 'Retribusi', 'detail', 3, '619', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:34:23', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('619120', 'Service Charge', 'detail', 3, '619', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:34:56', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('620', 'IKLAN & PROMOSI', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:57:11', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('620100', 'Iklan', 'detail', 3, '620', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:57:56', '1', '2013-05-20 10:58:29', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('620110', 'Promosi', 'detail', 3, '620', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 10:58:17', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('621', 'DOKUMEN & PENGIRIMAN', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:38:52', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('621100', 'Cetak Dokumen & Fotocopy', 'detail', 3, '621', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:39:23', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('621110', 'Pos, Kurir & Ekspedisi', 'detail', 3, '621', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:40:00', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('622', 'PERLENGKAPAN & ALAT TULIS', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:40:24', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('622100', 'Perlengkapan', 'detail', 3, '622', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:40:44', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('622110', 'Stationary & Materai', 'detail', 3, '622', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:41:08', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('623', 'PENYUSUTAN', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:35:44', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('623100', 'Penyusutan Gedung', 'detail', 3, '623', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:36:13', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('623110', 'Penyusutan Peralatan & Perlengkapan (HO)', 'detail', 3, '623', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:36:45', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('623120', 'Penyusutan Peralatan & Perlengkapan (Kebun)', 'detail', 3, '623', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:37:17', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('623130', 'Penyusutan Kendaraan', 'detail', 3, '623', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:37:43', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('623140', 'Penyusutan Alat Berat', 'detail', 3, '623', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:38:09', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('624', 'SUMBER DAYA MANUSIA', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:41:43', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('624100', 'Seminar', 'detail', 3, '624', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:42:17', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('624110', 'Kursus Umum', 'detail', 3, '624', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:42:38', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('624120', 'Pelatihan Internal Kantor', 'detail', 3, '624', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:43:13', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('624130', 'Pencarian Tenaga Kerja', 'detail', 3, '624', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:43:52', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('625', 'JASA PROFESIONAL & LAINNYA', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:44:10', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('625100', 'Jasa Notaris', 'detail', 3, '625', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:44:41', '1', '2013-05-20 11:46:12', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('625110', 'Jasa Audit', 'detail', 3, '625', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:45:05', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('625120', 'Jasa Konsultan', 'detail', 3, '625', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:45:32', '1', '2013-05-20 11:47:03', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('625130', 'Jasa Pembuatan Gambar', 'detail', 3, '625', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:45:55', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626', 'PAJAK,PERIJINAN & DENDA', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:48:02', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626100', 'PPh Ps.21/26', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:48:28', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626110', 'PPh Ps. 23', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:48:59', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626120', 'PPh Pasal 4 (2)', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:49:21', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626130', 'PPh Pasal 29', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:49:38', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626140', 'PPN', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:49:53', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626150', 'PBB', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:50:05', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626160', 'PBBKB', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:50:25', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626170', 'Denda Pajak', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:50:41', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626180', 'Denda Pinalty', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:50:58', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626190', 'SITU, SIUP, TDP & Lain Lain', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:51:17', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626200', 'Pengurusan SPPH, SKT, Sporadik', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:51:36', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626210', 'KIR & STNK ', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:51:52', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('626220', 'Denda Tilang', 'detail', 3, '626', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:52:09', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('627', 'ASURANSI', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:52:42', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('627100', 'Asuransi Kendaraan', 'detail', 3, '627', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:53:03', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('627110', 'Asuransi Alat Berat', 'detail', 3, '627', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:53:18', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('627200', 'Asuransi Lainnya', 'detail', 3, '627', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:53:37', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('628', 'DAPUR & RUMAH TANGGA', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:54:01', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('628100', 'Keperluan Dapur', 'detail', 3, '628', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:54:28', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('628110', 'Keperluan Rumah Tangga', 'detail', 3, '628', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 11:54:45', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('629', 'LEASING', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 01:24:39', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('629100', 'Bunga Leasing', 'detail', 3, '629', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 01:25:02', '1', '2013-05-20 01:25:41', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('629110', 'Administrasi Leasing', 'detail', 3, '629', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 01:25:22', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('630', 'LAIN - LAIN', 'general', 2, '6', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 02:15:02', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('630100', 'Sport', 'detail', 3, '630', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 02:17:05', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('630110', 'Rekreasi', 'detail', 3, '630110', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 02:17:25', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('630120', 'Makanan & Minuman', 'detail', 3, '630', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 02:17:47', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('630130', 'Surat Kabar dan Majalah', 'detail', 3, '630', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 02:18:08', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('630200', 'Biaya Lain - Lain', 'detail', 3, '630200', 'biaya', '0.00', '0.00', '0.00', '2013-05-20 02:18:31', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('7', 'PENDAPATAN LAIN - LAIN', 'general', 1, '7', 'pendapatan_lain', '0.00', '0.00', '0.00', '2013-05-20 02:19:28', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('710100', 'Bunga Bank & Jasa Giro', 'detail', 2, '7', 'pendapatan_lain', '0.00', '0.00', '0.00', '2013-05-20 02:30:45', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('710110', 'Bunga Deposito', 'detail', 2, '7', 'pendapatan_lain', '0.00', '0.00', '0.00', '2013-05-20 02:31:07', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('710120', 'Provisi, Adm Bank & Lainnya', 'detail', 2, '7', 'pendapatan_lain', '0.00', '0.00', '0.00', '2013-05-20 02:31:28', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('710130', 'Keuntungan (Kerugian) atas Selisih Kurs', 'detail', 2, '7', 'pendapatan_lain', '0.00', '0.00', '0.00', '2013-05-20 02:31:54', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('710140', 'Laba (Rugi) atas Penjualan Aktiva', 'detail', 2, '7', 'pendapatan_lain', '0.00', '0.00', '0.00', '2013-05-20 02:32:20', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('710150', 'Selisih Pembulatan', 'detail', 2, '7', 'pendapatan_lain', '0.00', '0.00', '0.00', '2013-05-20 02:32:39', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('710200', 'Pendapatan (Biaya) Lainnya', 'detail', 2, '7', 'pendapatan_lain', '0.00', '0.00', '0.00', '2013-05-20 02:33:06', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('8', 'BEBAN LAIN - LAIN', 'general', 1, '8', 'biaya_lain', '0.00', '0.00', '0.00', '2013-05-20 02:33:34', '1', '2013-05-20 02:35:36', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('810100', 'Pajak atas Bunga & Jasa Giro', 'detail', 2, '8', 'biaya_lain', '0.00', '0.00', '0.00', '2013-05-20 02:33:54', '1', '2013-05-20 02:34:30', '1');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('810110', 'Pajak atas Bunga Deposito', 'detail', 2, '8', 'biaya_lain', '0.00', '0.00', '0.00', '2013-05-20 02:34:17', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('810120', 'Provisi, Adm Bank & Lainnya', 'detail', 2, '8', 'biaya_lain', '0.00', '0.00', '0.00', '2013-05-20 02:36:24', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('810130', 'Keuntungan (Kerugian) atas Selisih Kurs', 'detail', 2, '8', 'biaya_lain', '0.00', '0.00', '0.00', '2013-05-20 02:36:42', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('810140', 'Laba (Rugi) atas Penjualan Aktiva', 'detail', 2, '8', 'biaya_lain', '0.00', '0.00', '0.00', '2013-05-20 02:36:59', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('810150', 'Selisih Pembulatan', 'detail', 2, '8', 'biaya_lain', '0.00', '0.00', '0.00', '2013-05-20 02:37:17', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_maccount (`id_perkiraan`, `nama`, `tipe`, `level`, `perkiraan_general`, `grup`, `saldo_awal_sekali`, `saldo_awal`, `saldo_akumulasi`, `created`, `creator`, `modified`, `modifier`) VALUES ('810200', 'Pendapatan (Biaya) Lainnya', 'detail', 2, '8', 'biaya_lain', '0.00', '0.00', '0.00', '2013-05-20 02:37:33', '1', '0000-00-00 00:00:00', '');


#
# TABLE STRUCTURE FOR: gl_mbatasan
#

DROP TABLE IF EXISTS gl_mbatasan;

CREATE TABLE `gl_mbatasan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `awal` varchar(20) NOT NULL DEFAULT '0',
  `akhir` varchar(20) NOT NULL DEFAULT '0',
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (1, 'Aktiva Lancar', '110100', '118900', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (2, 'Kas Di Tangan', '110100', '110160', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (3, 'Kas Di Bank', '110300', '110500', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (4, 'Piutang Dagang', '111100', '111100', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (5, 'PPn Masukan (Tax)', '117130', '117130', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (6, 'Aktiva Tetap', '12', '150000', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (7, 'Aktiva Lain-lain', '', '', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (8, 'Hutang Lancar', '200', '250900', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (9, 'Hutang Jangka Panjang', '', '', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (10, 'Modal', '3', '320900', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (12, 'Laba bln Berjalan', '320300', '320300', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (14, 'Biaya-Biaya', '6', '630900', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (15, 'Pendapatan Lain-Lain', '7', '710900', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (16, 'PPn Keluaran', '230140', '230140', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (22, 'Uang Muka', '', '', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (23, 'Potongan Pendapatan', '', '', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (24, 'Biaya Lain-lain', '8', '810900', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (30, 'Pendapatan Operasional', '410100', '410200', NULL, NULL, NULL, NULL);
INSERT INTO gl_mbatasan (`id`, `nama`, `awal`, `akhir`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES (34, 'Laba Rugi Selisih Kurs', '810130', '810130', NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: gl_mcompany
#

DROP TABLE IF EXISTS gl_mcompany;

CREATE TABLE `gl_mcompany` (
  `id_meta` varchar(30) NOT NULL,
  `value` text,
  PRIMARY KEY (`id_meta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Company Information';

INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('akses_kode', 'qwerty-123456');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('alamat', '-');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('alamat_pusat', '-');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('created', '2012-09-27 05:43:52');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('creator', '1');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('faktur_pajak_pusat', '-');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('fax', '021-123456');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('fax_pusat', '021-123456');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('jabatan_pajak_pusat', 'Direktur');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('kode_pos', '00000');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('kode_pos_pusat', '00000');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('kota', '-');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('kota_pusat', '-');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('mengetahui', 'Migent');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('mengetahui_2', 'Migent');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('menyetujui', 'Migent');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('menyetujui_2', 'Migent');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('modified', '2012-09-27 05:43:52');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('modifier', '1');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('nama', 'PT Karya Sarana Sejati');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('nama_pajak_pusat', '-');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('npwp_pusat', '1234-5678-90');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('pkp_pusat', '12345-67890');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('serial_number', '12345-qwerty');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('tanggal_pengukuhan_pusat', '21-02-2007');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('telepon', '021-123456');
INSERT INTO gl_mcompany (`id_meta`, `value`) VALUES ('telepon_pusat', '021-123456');


#
# TABLE STRUCTURE FOR: gl_mcurrency
#

DROP TABLE IF EXISTS gl_mcurrency;

CREATE TABLE `gl_mcurrency` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kurs` decimal(15,2) unsigned NOT NULL DEFAULT '1.00',
  `status` tinyint(1) NOT NULL,
  `bawaan` tinyint(1) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `creator` varchar(20) NOT NULL,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modifier` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_mfixed_asset
#

DROP TABLE IF EXISTS gl_mfixed_asset;

CREATE TABLE `gl_mfixed_asset` (
  `id_fixed_asset` varchar(20) NOT NULL,
  `id_perkiraan_asset` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis` enum('a','b') NOT NULL DEFAULT 'a',
  `persen` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_perkiraan_penyusutan` varchar(20) NOT NULL,
  `id_perkiraan_akumulasi` varchar(20) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `tanggal_jual` date DEFAULT NULL,
  `harga_beli` decimal(15,2) NOT NULL,
  `harga_akhir` decimal(15,2) NOT NULL,
  `usia_tahun` int(11) NOT NULL,
  `usia_bulan` int(11) NOT NULL,
  `penyusutan` decimal(15,2) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `creator` varchar(20) NOT NULL,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modifier` varchar(20) NOT NULL,
  PRIMARY KEY (`id_fixed_asset`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_mfixed_asset_detail
#

DROP TABLE IF EXISTS gl_mfixed_asset_detail;

CREATE TABLE `gl_mfixed_asset_detail` (
  `id_fixed_asset` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `penyusutan` decimal(15,2) NOT NULL,
  `akumulasi` decimal(15,2) NOT NULL,
  `nilai` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id_fixed_asset`,`tanggal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_mkaryawan
#

DROP TABLE IF EXISTS gl_mkaryawan;

CREATE TABLE `gl_mkaryawan` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `creator` int(11) NOT NULL,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modifier` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_mstockgudang
#

DROP TABLE IF EXISTS gl_mstockgudang;

CREATE TABLE `gl_mstockgudang` (
  `kode_gudang` tinytext NOT NULL,
  `kode_barang` tinytext NOT NULL,
  `sawal` double DEFAULT '0',
  `smasuk` double DEFAULT '0',
  `skeluar` double DEFAULT '0',
  `sakhir` double DEFAULT '0',
  UNIQUE KEY `kode_gudang` (`kode_gudang`(20),`kode_barang`(20))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_mstockgudang (`kode_gudang`, `kode_barang`, `sawal`, `smasuk`, `skeluar`, `sakhir`) VALUES ('G01', 'asdas', '0', '13015', '15', '13000');
INSERT INTO gl_mstockgudang (`kode_gudang`, `kode_barang`, `sawal`, `smasuk`, `skeluar`, `sakhir`) VALUES ('G01', 'test', '0', '80', '40', '40');


#
# TABLE STRUCTURE FOR: gl_mutasibarang
#

DROP TABLE IF EXISTS gl_mutasibarang;

CREATE TABLE `gl_mutasibarang` (
  `id_transaksi` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `created` datetime NOT NULL,
  `creator` varchar(20) NOT NULL,
  `modified` datetime NOT NULL,
  `modifier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_mutasibarang (`id_transaksi`, `tanggal`, `created`, `creator`, `modified`, `modifier`) VALUES ('2', '2013-07-03', '2013-07-03 10:33:19', '1', '2013-07-08 07:09:20', '1');
INSERT INTO gl_mutasibarang (`id_transaksi`, `tanggal`, `created`, `creator`, `modified`, `modifier`) VALUES ('3', '2013-07-03', '2013-07-03 10:54:16', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_mutasibarang (`id_transaksi`, `tanggal`, `created`, `creator`, `modified`, `modifier`) VALUES ('1', '2013-07-03', '2013-07-03 11:28:55', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_mutasibarang (`id_transaksi`, `tanggal`, `created`, `creator`, `modified`, `modifier`) VALUES ('1306001', '2013-07-04', '2013-07-03 04:12:33', '1', '2013-07-08 07:48:47', '1');
INSERT INTO gl_mutasibarang (`id_transaksi`, `tanggal`, `created`, `creator`, `modified`, `modifier`) VALUES ('2', '2013-07-03', '2013-07-03 10:33:19', '1', '2013-07-08 07:09:20', '1');
INSERT INTO gl_mutasibarang (`id_transaksi`, `tanggal`, `created`, `creator`, `modified`, `modifier`) VALUES ('3', '2013-07-03', '2013-07-03 10:54:16', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_mutasibarang (`id_transaksi`, `tanggal`, `created`, `creator`, `modified`, `modifier`) VALUES ('1', '2013-07-03', '2013-07-03 11:28:55', '1', '0000-00-00 00:00:00', '');
INSERT INTO gl_mutasibarang (`id_transaksi`, `tanggal`, `created`, `creator`, `modified`, `modifier`) VALUES ('1306001', '2013-07-04', '2013-07-03 04:12:33', '1', '2013-07-08 07:48:47', '1');


#
# TABLE STRUCTURE FOR: gl_mutasibarangfaktur
#

DROP TABLE IF EXISTS gl_mutasibarangfaktur;

CREATE TABLE `gl_mutasibarangfaktur` (
  `id` int(11) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `id_fixed_asset` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `id_proyek_asal` varchar(20) NOT NULL,
  `namapryasal` varchar(20) NOT NULL,
  `id_proyek_tujuan` varchar(20) NOT NULL,
  `namaprytujuan` varchar(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_mutasibarangfaktur (`id`, `id_transaksi`, `id_fixed_asset`, `nama`, `id_proyek_asal`, `namapryasal`, `id_proyek_tujuan`, `namaprytujuan`, `jumlah`, `keterangan`) VALUES (0, '3', '1', 'fixed tester', 'TES', 'sdf', 'PTest', 'proyek Testtest', 77, 'tester21');
INSERT INTO gl_mutasibarangfaktur (`id`, `id_transaksi`, `id_fixed_asset`, `nama`, `id_proyek_asal`, `namapryasal`, `id_proyek_tujuan`, `namaprytujuan`, `jumlah`, `keterangan`) VALUES (0, '1', '2', 'asd', 'PTest', 'proyek Testtest', 'TES', 'sdf', 1222, 'tes');
INSERT INTO gl_mutasibarangfaktur (`id`, `id_transaksi`, `id_fixed_asset`, `nama`, `id_proyek_asal`, `namapryasal`, `id_proyek_tujuan`, `namaprytujuan`, `jumlah`, `keterangan`) VALUES (0, '2', '1', 'fixed tester', 'PTest', 'proyek Testtest', 'TES', 'sdf', 23, 'tes22');
INSERT INTO gl_mutasibarangfaktur (`id`, `id_transaksi`, `id_fixed_asset`, `nama`, `id_proyek_asal`, `namapryasal`, `id_proyek_tujuan`, `namaprytujuan`, `jumlah`, `keterangan`) VALUES (1, '2', '2', 'asd', 'PTest', 'proyek Testtest', 'TES', 'sdf', 122, 'tes2');
INSERT INTO gl_mutasibarangfaktur (`id`, `id_transaksi`, `id_fixed_asset`, `nama`, `id_proyek_asal`, `namapryasal`, `id_proyek_tujuan`, `namaprytujuan`, `jumlah`, `keterangan`) VALUES (0, '1306001', '1', 'fixed tester', 'PTest', 'proyek Testtest', 'TES', 'sdf', 522, 'tesxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO gl_mutasibarangfaktur (`id`, `id_transaksi`, `id_fixed_asset`, `nama`, `id_proyek_asal`, `namapryasal`, `id_proyek_tujuan`, `namaprytujuan`, `jumlah`, `keterangan`) VALUES (1, '1306001', '2', 'asd', 'TES', 'sdf', 'PTest', 'proyek Testtest', 1, 'thaha');
INSERT INTO gl_mutasibarangfaktur (`id`, `id_transaksi`, `id_fixed_asset`, `nama`, `id_proyek_asal`, `namapryasal`, `id_proyek_tujuan`, `namaprytujuan`, `jumlah`, `keterangan`) VALUES (0, '3', '1', 'fixed tester', 'TES', 'sdf', 'PTest', 'proyek Testtest', 77, 'tester21');
INSERT INTO gl_mutasibarangfaktur (`id`, `id_transaksi`, `id_fixed_asset`, `nama`, `id_proyek_asal`, `namapryasal`, `id_proyek_tujuan`, `namaprytujuan`, `jumlah`, `keterangan`) VALUES (0, '1', '2', 'asd', 'PTest', 'proyek Testtest', 'TES', 'sdf', 1222, 'tes');
INSERT INTO gl_mutasibarangfaktur (`id`, `id_transaksi`, `id_fixed_asset`, `nama`, `id_proyek_asal`, `namapryasal`, `id_proyek_tujuan`, `namaprytujuan`, `jumlah`, `keterangan`) VALUES (0, '2', '1', 'fixed tester', 'PTest', 'proyek Testtest', 'TES', 'sdf', 23, 'tes22');
INSERT INTO gl_mutasibarangfaktur (`id`, `id_transaksi`, `id_fixed_asset`, `nama`, `id_proyek_asal`, `namapryasal`, `id_proyek_tujuan`, `namaprytujuan`, `jumlah`, `keterangan`) VALUES (1, '2', '2', 'asd', 'PTest', 'proyek Testtest', 'TES', 'sdf', 122, 'tes2');
INSERT INTO gl_mutasibarangfaktur (`id`, `id_transaksi`, `id_fixed_asset`, `nama`, `id_proyek_asal`, `namapryasal`, `id_proyek_tujuan`, `namaprytujuan`, `jumlah`, `keterangan`) VALUES (0, '1306001', '1', 'fixed tester', 'PTest', 'proyek Testtest', 'TES', 'sdf', 522, 'tesxxxxxxxxxxxxxxxxxxxxx');
INSERT INTO gl_mutasibarangfaktur (`id`, `id_transaksi`, `id_fixed_asset`, `nama`, `id_proyek_asal`, `namapryasal`, `id_proyek_tujuan`, `namaprytujuan`, `jumlah`, `keterangan`) VALUES (1, '1306001', '2', 'asd', 'TES', 'sdf', 'PTest', 'proyek Testtest', 1, 'thaha');


#
# TABLE STRUCTURE FOR: gl_pekerjaanproyek
#

DROP TABLE IF EXISTS gl_pekerjaanproyek;

CREATE TABLE `gl_pekerjaanproyek` (
  `noproyek` varchar(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `pekerjaan` varchar(250) NOT NULL,
  `tglawal` date NOT NULL DEFAULT '2013-01-01',
  `tglakhir` date NOT NULL DEFAULT '2013-01-01',
  `luas` double NOT NULL DEFAULT '0',
  `satuan` varchar(15) NOT NULL,
  `harga` double NOT NULL DEFAULT '0',
  `premi` double NOT NULL DEFAULT '0',
  `ppn` double NOT NULL DEFAULT '0',
  `total` double NOT NULL DEFAULT '0',
  UNIQUE KEY `pekerjaan` (`noproyek`,`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_pekerjaanproyek (`noproyek`, `kode`, `pekerjaan`, `tglawal`, `tglakhir`, `luas`, `satuan`, `harga`, `premi`, `ppn`, `total`) VALUES ('PTest', '01', 'rental', '2013-06-11', '2014-06-11', '1', 'jam', '350000', '10000', '10', '385000');
INSERT INTO gl_pekerjaanproyek (`noproyek`, `kode`, `pekerjaan`, `tglawal`, `tglakhir`, `luas`, `satuan`, `harga`, `premi`, `ppn`, `total`) VALUES ('TES', 'a', 'sdfsdf', '2013-06-22', '2013-06-22', '10000', 'sdcas', '100000', '0', '10', '1100000000');


#
# TABLE STRUCTURE FOR: gl_persamaanstock
#

DROP TABLE IF EXISTS gl_persamaanstock;

CREATE TABLE `gl_persamaanstock` (
  `kode_barang` tinytext NOT NULL,
  `kode_barang_2` tinytext NOT NULL,
  `nama_barang_2` tinytext NOT NULL,
  UNIQUE KEY `kode_barang` (`kode_barang`(20),`kode_barang_2`(20))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_piutang
#

DROP TABLE IF EXISTS gl_piutang;

CREATE TABLE `gl_piutang` (
  `kode_customer` varchar(25) NOT NULL,
  `no_invoice` varchar(25) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jwaktu` double DEFAULT '0',
  `total` double DEFAULT '0',
  `kode_kurs` varchar(25) NOT NULL,
  `kurs` double DEFAULT '0',
  `bayar` double DEFAULT '0',
  `tolak` double DEFAULT '0',
  `retur` double DEFAULT '0',
  `jumlah_total` double DEFAULT '0',
  `jumlah_bayar` double DEFAULT '0',
  `jumlah_retur` double DEFAULT '0',
  `jumlah_tolak` double DEFAULT '0',
  `tipe` varchar(1) NOT NULL DEFAULT 'K',
  `lebih` double DEFAULT '0',
  `jumlah_lebih` double DEFAULT '0',
  UNIQUE KEY `no_invoice` (`no_invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_piutang (`kode_customer`, `no_invoice`, `tanggal`, `jwaktu`, `total`, `kode_kurs`, `kurs`, `bayar`, `tolak`, `retur`, `jumlah_total`, `jumlah_bayar`, `jumlah_retur`, `jumlah_tolak`, `tipe`, `lebih`, `jumlah_lebih`) VALUES ('001', '2013060001', '2013-06-14', '0', '39936490', 'IDR', '1', '26100000', '21000000', '0', '39936490', '26100000', '0', '21000000', 'K', '0', '0');
INSERT INTO gl_piutang (`kode_customer`, `no_invoice`, `tanggal`, `jwaktu`, `total`, `kode_kurs`, `kurs`, `bayar`, `tolak`, `retur`, `jumlah_total`, `jumlah_bayar`, `jumlah_retur`, `jumlah_tolak`, `tipe`, `lebih`, `jumlah_lebih`) VALUES ('001', '2013060002', '2013-06-14', '0', '4019950000', 'IDR', '1', '1500000000', '1500000000', '0', '4019950000', '1500000000', '0', '1500000000', 'K', '0', '0');
INSERT INTO gl_piutang (`kode_customer`, `no_invoice`, `tanggal`, `jwaktu`, `total`, `kode_kurs`, `kurs`, `bayar`, `tolak`, `retur`, `jumlah_total`, `jumlah_bayar`, `jumlah_retur`, `jumlah_tolak`, `tipe`, `lebih`, `jumlah_lebih`) VALUES ('001', '2013090001', '2013-09-16', '0', '4019939000', 'IDR', '1', '2019939000', '0', '0', '4019939000', '2019939000', '0', '0', 'K', '0', '0');


#
# TABLE STRUCTURE FOR: gl_piutang_stock
#

DROP TABLE IF EXISTS gl_piutang_stock;

CREATE TABLE `gl_piutang_stock` (
  `no_invoice` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `grandtotal` int(11) NOT NULL,
  `jtempo` date DEFAULT NULL,
  `bayar` int(11) NOT NULL,
  `sisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_piutang_stock (`no_invoice`, `tanggal`, `grandtotal`, `jtempo`, `bayar`, `sisa`) VALUES ('2', '2013-07-15', 1916630, '2013-07-17', 0, 1916630);
INSERT INTO gl_piutang_stock (`no_invoice`, `tanggal`, `grandtotal`, `jtempo`, `bayar`, `sisa`) VALUES ('1', '2013-07-15', 69443, '2013-08-04', 0, 69443);
INSERT INTO gl_piutang_stock (`no_invoice`, `tanggal`, `grandtotal`, `jtempo`, `bayar`, `sisa`) VALUES ('3', '2013-07-18', 316672000, '2013-08-22', 0, 316672000);
INSERT INTO gl_piutang_stock (`no_invoice`, `tanggal`, `grandtotal`, `jtempo`, `bayar`, `sisa`) VALUES ('002', '2013-07-26', 18822210, '2013-08-25', 0, 18822210);


#
# TABLE STRUCTURE FOR: gl_proyek
#

DROP TABLE IF EXISTS gl_proyek;

CREATE TABLE `gl_proyek` (
  `noproyek` tinytext NOT NULL,
  `namaproyek` tinytext NOT NULL,
  `lokasi` tinytext NOT NULL,
  `nospk` tinytext NOT NULL,
  `keterangan` tinytext NOT NULL,
  `pekerjaan` tinytext NOT NULL,
  `telepon` tinytext NOT NULL,
  `fax` tinytext NOT NULL,
  `sawal` date NOT NULL,
  `sakhir` date NOT NULL,
  `luaslahan` double DEFAULT '0',
  `hargaperha` double DEFAULT '0',
  `premiperha` double DEFAULT '0',
  `total` double DEFAULT '0',
  `ppn` double DEFAULT '0',
  `ppnvalue` double DEFAULT '0',
  `totalp` double DEFAULT '0',
  `solar` double DEFAULT '0',
  `kode_cust` varchar(25) DEFAULT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  UNIQUE KEY `noproyek` (`noproyek`(10))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_proyek (`noproyek`, `namaproyek`, `lokasi`, `nospk`, `keterangan`, `pekerjaan`, `telepon`, `fax`, `sawal`, `sakhir`, `luaslahan`, `hargaperha`, `premiperha`, `total`, `ppn`, `ppnvalue`, `totalp`, `solar`, `kode_cust`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('PTest', 'proyek Testtest', 'Palembang', '0001', 'test', '', '98765433', '3241235123', '2013-06-11', '2013-06-11', '0', '0', '0', '0', '0', '0', '385000', '7000', '001', NULL, NULL, NULL, NULL);
INSERT INTO gl_proyek (`noproyek`, `namaproyek`, `lokasi`, `nospk`, `keterangan`, `pekerjaan`, `telepon`, `fax`, `sawal`, `sakhir`, `luaslahan`, `hargaperha`, `premiperha`, `total`, `ppn`, `ppnvalue`, `totalp`, `solar`, `kode_cust`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('TES', 'sdf', 'sddf', 'sddf', 'sddf', '', 'sddf', 'sdf', '2013-06-22', '2013-06-22', '0', '0', '0', '0', '0', '0', '1100000000', '10000', '001', NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: gl_stock
#

DROP TABLE IF EXISTS gl_stock;

CREATE TABLE `gl_stock` (
  `kode_barang` tinytext NOT NULL,
  `nama_barang` tinytext NOT NULL,
  `satuan` tinytext NOT NULL,
  `kd_group` tinytext NOT NULL,
  `namagroup` tinytext NOT NULL,
  `kds_group` tinytext NOT NULL,
  `namasub` tinytext NOT NULL,
  `stockmin` double DEFAULT '0',
  `stockmax` double DEFAULT '0',
  `hargapokok` double DEFAULT '0',
  `hargabeli` double DEFAULT '0',
  `jasa` tinyint(1) DEFAULT '0',
  `part_no` tinytext,
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  UNIQUE KEY `kode_barang` (`kode_barang`(20))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_stock (`kode_barang`, `nama_barang`, `satuan`, `kd_group`, `namagroup`, `kds_group`, `namasub`, `stockmin`, `stockmax`, `hargapokok`, `hargabeli`, `jasa`, `part_no`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('asdas', 'asd', 'asd', 'asd', 'asd', 'asd-a', 'asdasd', '1', '10000', '9000.74', '10000', 0, 'sdfsdf', NULL, NULL, NULL, NULL);
INSERT INTO gl_stock (`kode_barang`, `nama_barang`, `satuan`, `kd_group`, `namagroup`, `kds_group`, `namasub`, `stockmin`, `stockmax`, `hargapokok`, `hargabeli`, `jasa`, `part_no`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('test', 'test barang', 'pcs', '001', 'SPARE PARTS', '001.001', 'IDLER', '100', '1000', '0', '0', 0, '01010110', NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: gl_supplier
#

DROP TABLE IF EXISTS gl_supplier;

CREATE TABLE `gl_supplier` (
  `kd_supplier` tinytext NOT NULL,
  `nama` tinytext NOT NULL,
  `alamat` tinytext NOT NULL,
  `telepon` tinytext NOT NULL,
  `fax` tinytext NOT NULL,
  `npwp` tinytext NOT NULL,
  `kontak` tinytext NOT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  UNIQUE KEY `kd_supplier` (`kd_supplier`(10))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_supplier (`kd_supplier`, `nama`, `alamat`, `telepon`, `fax`, `npwp`, `kontak`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('asd', 'asda', 'asd', 'asdas', 'd', 'asdas', 'dasd', NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: gl_tbap
#

DROP TABLE IF EXISTS gl_tbap;

CREATE TABLE `gl_tbap` (
  `no_bap` varchar(25) NOT NULL,
  `tanggal` date NOT NULL DEFAULT '2013-01-01',
  `kode_cust` varchar(25) NOT NULL,
  `noproyek` varchar(25) DEFAULT NULL,
  `lokasi` varchar(250) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  UNIQUE KEY `no_bap` (`no_bap`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tbap (`no_bap`, `tanggal`, `kode_cust`, `noproyek`, `lokasi`, `total`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('0001', '2013-06-12', '001', 'PTest', 'Palembang', '10', NULL, NULL, NULL, NULL);
INSERT INTO gl_tbap (`no_bap`, `tanggal`, `kode_cust`, `noproyek`, `lokasi`, `total`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('0002', '2013-06-14', '001', 'PTest', 'Palembang', '10125.15', NULL, NULL, NULL, NULL);
INSERT INTO gl_tbap (`no_bap`, `tanggal`, `kode_cust`, `noproyek`, `lokasi`, `total`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('0003', '2013-06-14', '001', 'PTest', 'Palembang', '152.25', NULL, NULL, NULL, NULL);
INSERT INTO gl_tbap (`no_bap`, `tanggal`, `kode_cust`, `noproyek`, `lokasi`, `total`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('0004', '2013-06-14', '001', 'PTest', 'Palembang', '154', NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: gl_tbappekerjaan
#

DROP TABLE IF EXISTS gl_tbappekerjaan;

CREATE TABLE `gl_tbappekerjaan` (
  `no_bap` varchar(25) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `pekerjaan` varchar(250) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `blok` varchar(50) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tbappekerjaan (`no_bap`, `kode`, `pekerjaan`, `satuan`, `blok`, `jumlah`) VALUES ('0001', '01', 'rental', 'jam', 'A', '10');
INSERT INTO gl_tbappekerjaan (`no_bap`, `kode`, `pekerjaan`, `satuan`, `blok`, `jumlah`) VALUES ('0003', '01', 'rental', 'jam', 'A1', '152.25');
INSERT INTO gl_tbappekerjaan (`no_bap`, `kode`, `pekerjaan`, `satuan`, `blok`, `jumlah`) VALUES ('0002', '01', 'rental', 'jam', 'A2', '10000');
INSERT INTO gl_tbappekerjaan (`no_bap`, `kode`, `pekerjaan`, `satuan`, `blok`, `jumlah`) VALUES ('0002', '01', 'rental', 'jam', 'A5', '125.15');
INSERT INTO gl_tbappekerjaan (`no_bap`, `kode`, `pekerjaan`, `satuan`, `blok`, `jumlah`) VALUES ('0004', '01', 'rental', 'jam', 'A1', '154');


#
# TABLE STRUCTURE FOR: gl_tinvoice_jasa
#

DROP TABLE IF EXISTS gl_tinvoice_jasa;

CREATE TABLE `gl_tinvoice_jasa` (
  `no_invoice` varchar(25) NOT NULL,
  `kode_cust` varchar(25) NOT NULL,
  `noproyek` varchar(25) NOT NULL,
  `ppn` double NOT NULL,
  `ppnrp` double NOT NULL,
  `subtotal` double NOT NULL,
  `total` double NOT NULL,
  `tanggal` date NOT NULL DEFAULT '2013-01-01',
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  UNIQUE KEY `no_invoice` (`no_invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tinvoice_jasa (`no_invoice`, `kode_cust`, `noproyek`, `ppn`, `ppnrp`, `subtotal`, `total`, `tanggal`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('2013060002', '001', 'PTest', '10', '365450000', '3654500000', '4019950000', '2013-06-14', NULL, NULL, '1', '2013-09-16 16:05:21');
INSERT INTO gl_tinvoice_jasa (`no_invoice`, `kode_cust`, `noproyek`, `ppn`, `ppnrp`, `subtotal`, `total`, `tanggal`, `tgl_add`, `user_add`, `user_edit`, `tgl_edit`) VALUES ('2013090001', '001', 'PTest', '10', '365449000', '3654490000', '4019939000', '2013-09-16', '2013-09-16 15:16:20', '1', '1', '2013-09-16 16:02:43');


#
# TABLE STRUCTURE FOR: gl_tinvoice_jasa_detail
#

DROP TABLE IF EXISTS gl_tinvoice_jasa_detail;

CREATE TABLE `gl_tinvoice_jasa_detail` (
  `no_invoice` varchar(25) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `pekerjaan` varchar(250) DEFAULT NULL,
  `hasil` double DEFAULT '0',
  `harga_kontrak` double DEFAULT '0',
  `harga` double DEFAULT '0',
  `total` double DEFAULT '0',
  `satuan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tinvoice_jasa_detail (`no_invoice`, `kode`, `pekerjaan`, `hasil`, `harga_kontrak`, `harga`, `total`, `satuan`) VALUES ('2013090001', '01', 'rental', '10441.4', '350000', '350000', '3654490000', 'jam');
INSERT INTO gl_tinvoice_jasa_detail (`no_invoice`, `kode`, `pekerjaan`, `hasil`, `harga_kontrak`, `harga`, `total`, `satuan`) VALUES ('2013060002', '-', 'sdas', '1', '0', '10000', '10000', 'zx');
INSERT INTO gl_tinvoice_jasa_detail (`no_invoice`, `kode`, `pekerjaan`, `hasil`, `harga_kontrak`, `harga`, `total`, `satuan`) VALUES ('2013060002', '01', 'rental', '10441.4', '350000', '350000', '3654490000', 'jam');


#
# TABLE STRUCTURE FOR: gl_tju
#

DROP TABLE IF EXISTS gl_tju;

CREATE TABLE `gl_tju` (
  `id_jurnal` varchar(20) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `adjustment` tinyint(1) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_currency` varchar(20) NOT NULL,
  `total_debet` decimal(15,2) NOT NULL,
  `total_kredit` decimal(15,2) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `creator` varchar(20) NOT NULL,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modifier` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jurnal`,`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_tju_transaksi
#

DROP TABLE IF EXISTS gl_tju_transaksi;

CREATE TABLE `gl_tju_transaksi` (
  `id` int(11) NOT NULL,
  `id_jurnal` varchar(20) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `id_perkiraan` varchar(20) NOT NULL,
  `nama_perkiraan` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `debet` decimal(15,2) NOT NULL,
  `kredit` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id`,`id_jurnal`,`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_tkas_bank
#

DROP TABLE IF EXISTS gl_tkas_bank;

CREATE TABLE `gl_tkas_bank` (
  `id_jurnal` varchar(20) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `tipe` enum('terima','keluar') NOT NULL,
  `tanggal` date NOT NULL,
  `terima_bayar` varchar(20) NOT NULL,
  `id_order` varchar(20) DEFAULT NULL,
  `id_ttus` varchar(20) NOT NULL,
  `jumlah` decimal(15,2) NOT NULL,
  `cara_bayar` enum('tunai','giro','transfer') NOT NULL,
  `id_cek_giro` varchar(20) NOT NULL,
  `id_perkiraan` varchar(20) NOT NULL,
  `id_currency` varchar(20) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `kurs` decimal(15,2) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `creator` varchar(20) NOT NULL,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modifier` varchar(20) NOT NULL,
  `proyek` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_jurnal`,`id_transaksi`,`tipe`),
  KEY `id_order` (`id_order`),
  KEY `id_ttus` (`id_ttus`),
  KEY `id_currency` (`id_currency`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tkas_bank (`id_jurnal`, `id_transaksi`, `tipe`, `tanggal`, `terima_bayar`, `id_order`, `id_ttus`, `jumlah`, `cara_bayar`, `id_cek_giro`, `id_perkiraan`, `id_currency`, `jatuh_tempo`, `kurs`, `created`, `creator`, `modified`, `modifier`, `proyek`) VALUES ('BCA201301', '0001', 'keluar', '2013-06-11', 'AMIR', NULL, '', '400000.00', 'tunai', '', '110100', 'RP.', '2013-06-11', '1.00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 'PTest');
INSERT INTO gl_tkas_bank (`id_jurnal`, `id_transaksi`, `tipe`, `tanggal`, `terima_bayar`, `id_order`, `id_ttus`, `jumlah`, `cara_bayar`, `id_cek_giro`, `id_perkiraan`, `id_currency`, `jatuh_tempo`, `kurs`, `created`, `creator`, `modified`, `modifier`, `proyek`) VALUES ('BCA201301', '0002', 'keluar', '2013-06-11', 'jOHAN', NULL, '', '1100000.00', 'giro', '1234567', '110100', 'RP.', '2013-06-11', '1.00', '0000-00-00 00:00:00', '', '2013-09-20 06:03:33', '1', 'PTest');
INSERT INTO gl_tkas_bank (`id_jurnal`, `id_transaksi`, `tipe`, `tanggal`, `terima_bayar`, `id_order`, `id_ttus`, `jumlah`, `cara_bayar`, `id_cek_giro`, `id_perkiraan`, `id_currency`, `jatuh_tempo`, `kurs`, `created`, `creator`, `modified`, `modifier`, `proyek`) VALUES ('kas001', '0001', 'terima', '2013-09-20', 'asda', NULL, '', '100000.00', 'giro', '7890', '110100', 'RP.', '2013-09-20', '1.00', '2013-09-20 11:05:38', '1', '0000-00-00 00:00:00', '', 'PTest');
INSERT INTO gl_tkas_bank (`id_jurnal`, `id_transaksi`, `tipe`, `tanggal`, `terima_bayar`, `id_order`, `id_ttus`, `jumlah`, `cara_bayar`, `id_cek_giro`, `id_perkiraan`, `id_currency`, `jatuh_tempo`, `kurs`, `created`, `creator`, `modified`, `modifier`, `proyek`) VALUES ('kas001', '0002', 'terima', '2013-09-20', 'sdf', NULL, '', '500000.00', 'giro', '7892', '110100', 'RP.', '2013-09-20', '1.00', '2013-09-20 11:06:41', '1', '2013-09-20 11:17:52', '1', 'PTest');
INSERT INTO gl_tkas_bank (`id_jurnal`, `id_transaksi`, `tipe`, `tanggal`, `terima_bayar`, `id_order`, `id_ttus`, `jumlah`, `cara_bayar`, `id_cek_giro`, `id_perkiraan`, `id_currency`, `jatuh_tempo`, `kurs`, `created`, `creator`, `modified`, `modifier`, `proyek`) VALUES ('kas001', '0003', 'terima', '2013-09-20', 'sdfds', NULL, '', '10000.00', 'giro', '7891', '110100', 'RP.', '2013-09-20', '1.00', '2013-09-20 11:12:42', '1', '2013-09-20 11:17:25', '1', 'PTest');
INSERT INTO gl_tkas_bank (`id_jurnal`, `id_transaksi`, `tipe`, `tanggal`, `terima_bayar`, `id_order`, `id_ttus`, `jumlah`, `cara_bayar`, `id_cek_giro`, `id_perkiraan`, `id_currency`, `jatuh_tempo`, `kurs`, `created`, `creator`, `modified`, `modifier`, `proyek`) VALUES ('kas001', '0004', 'terima', '2013-09-20', '545', NULL, '', '80000.00', 'giro', '7893', '110100', 'RP.', '2013-09-20', '1.00', '2013-09-20 11:18:55', '1', '0000-00-00 00:00:00', '', 'PTest');


#
# TABLE STRUCTURE FOR: gl_tkas_bank_transaksi
#

DROP TABLE IF EXISTS gl_tkas_bank_transaksi;

CREATE TABLE `gl_tkas_bank_transaksi` (
  `id` int(11) NOT NULL,
  `id_jurnal` varchar(20) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `tipe` enum('terima','keluar') NOT NULL,
  `id_perkiraan` varchar(20) NOT NULL,
  `nama_perkiraan` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `debet` decimal(15,2) NOT NULL,
  `kredit` decimal(15,2) NOT NULL,
  `saldo` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id`,`id_jurnal`,`id_transaksi`,`tipe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tkas_bank_transaksi (`id`, `id_jurnal`, `id_transaksi`, `tipe`, `id_perkiraan`, `nama_perkiraan`, `keterangan`, `debet`, `kredit`, `saldo`) VALUES (0, 'BCA201301', '0001', 'keluar', '250120', 'Biaya PAM Yang Masih', 'BULAN JUNI', '100000.00', '0.00', '0.00');
INSERT INTO gl_tkas_bank_transaksi (`id`, `id_jurnal`, `id_transaksi`, `tipe`, `id_perkiraan`, `nama_perkiraan`, `keterangan`, `debet`, `kredit`, `saldo`) VALUES (0, 'BCA201301', '0002', 'keluar', '250100', 'Biaya Gaji Yang Masi', 'JUNI', '1000000.00', '0.00', '0.00');
INSERT INTO gl_tkas_bank_transaksi (`id`, `id_jurnal`, `id_transaksi`, `tipe`, `id_perkiraan`, `nama_perkiraan`, `keterangan`, `debet`, `kredit`, `saldo`) VALUES (0, 'kas001', '0001', 'terima', '110100', 'Kas HO', '1231', '0.00', '100000.00', '0.00');
INSERT INTO gl_tkas_bank_transaksi (`id`, `id_jurnal`, `id_transaksi`, `tipe`, `id_perkiraan`, `nama_perkiraan`, `keterangan`, `debet`, `kredit`, `saldo`) VALUES (0, 'kas001', '0002', 'terima', '110100', 'Kas HO', 'dsf', '0.00', '500000.00', '0.00');
INSERT INTO gl_tkas_bank_transaksi (`id`, `id_jurnal`, `id_transaksi`, `tipe`, `id_perkiraan`, `nama_perkiraan`, `keterangan`, `debet`, `kredit`, `saldo`) VALUES (0, 'kas001', '0003', 'terima', '110100', 'Kas HO', 'sdf', '0.00', '10000.00', '0.00');
INSERT INTO gl_tkas_bank_transaksi (`id`, `id_jurnal`, `id_transaksi`, `tipe`, `id_perkiraan`, `nama_perkiraan`, `keterangan`, `debet`, `kredit`, `saldo`) VALUES (0, 'kas001', '0004', 'terima', '110100', 'Kas HO', '1213', '0.00', '80000.00', '0.00');
INSERT INTO gl_tkas_bank_transaksi (`id`, `id_jurnal`, `id_transaksi`, `tipe`, `id_perkiraan`, `nama_perkiraan`, `keterangan`, `debet`, `kredit`, `saldo`) VALUES (1, 'BCA201301', '0001', 'keluar', '250130', 'Biaya Telepon Yang M', 'BULAN JUNI', '300000.00', '0.00', '0.00');
INSERT INTO gl_tkas_bank_transaksi (`id`, `id_jurnal`, `id_transaksi`, `tipe`, `id_perkiraan`, `nama_perkiraan`, `keterangan`, `debet`, `kredit`, `saldo`) VALUES (1, 'BCA201301', '0002', 'keluar', '250100', 'Biaya Gaji Yang Masi', 'JUNI', '100000.00', '0.00', '0.00');


#
# TABLE STRUCTURE FOR: gl_torder_beli
#

DROP TABLE IF EXISTS gl_torder_beli;

CREATE TABLE `gl_torder_beli` (
  `no_invoice` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(25) DEFAULT NULL,
  `kode_kurs` varchar(25) NOT NULL,
  `kurs` double NOT NULL,
  `kode_sup` varchar(25) DEFAULT NULL,
  `noproyek` varchar(25) DEFAULT NULL,
  `ppn` double NOT NULL,
  `ppn_total` double NOT NULL,
  `subtotal` double NOT NULL,
  `total` double NOT NULL,
  `uang_muka` double NOT NULL,
  `sisa` double NOT NULL,
  `user_add` varchar(25) DEFAULT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_edit` varchar(25) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  `kode_acc` varchar(25) DEFAULT NULL,
  `ket` text,
  `no_request` varchar(25) NOT NULL,
  `tanggal_request` varchar(20) NOT NULL,
  `disc` double NOT NULL,
  `nama_sup` varchar(250) NOT NULL,
  `nama_proyek` varchar(250) NOT NULL,
  `jwaktu` double NOT NULL DEFAULT '0',
  `jenis_bayar` varchar(25) NOT NULL DEFAULT 'kredit',
  `namaup` varchar(30) DEFAULT NULL,
  `tlp` varchar(25) DEFAULT NULL,
  `namauser` varchar(20) DEFAULT NULL,
  `ketpt` text,
  `npwp` varchar(30) DEFAULT NULL,
  UNIQUE KEY `no_invoice` (`no_invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_torder_beli (`no_invoice`, `tanggal`, `status`, `kode_kurs`, `kurs`, `kode_sup`, `noproyek`, `ppn`, `ppn_total`, `subtotal`, `total`, `uang_muka`, `sisa`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`, `kode_acc`, `ket`, `no_request`, `tanggal_request`, `disc`, `nama_sup`, `nama_proyek`, `jwaktu`, `jenis_bayar`, `namaup`, `tlp`, `namauser`, `ketpt`, `npwp`) VALUES ('2013060001', '2013-06-20', 'selesai', 'RP.', '1', 'asd', 'PTest', '10', '9900', '100000', '108900', '8900', '100000', '1', '2013-06-20 18:17:26', NULL, NULL, NULL, '', '2013060001', '20-06-2013', '1000', 'asda', 'proyek Testtest', '30', 'kredit', NULL, NULL, NULL, NULL, NULL);
INSERT INTO gl_torder_beli (`no_invoice`, `tanggal`, `status`, `kode_kurs`, `kurs`, `kode_sup`, `noproyek`, `ppn`, `ppn_total`, `subtotal`, `total`, `uang_muka`, `sisa`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`, `kode_acc`, `ket`, `no_request`, `tanggal_request`, `disc`, `nama_sup`, `nama_proyek`, `jwaktu`, `jenis_bayar`, `namaup`, `tlp`, `namauser`, `ketpt`, `npwp`) VALUES ('2013060002', '2013-06-22', 'batal', 'RP.', '1', 'asd', 'PTest', '10', '250000', '3000000', '2750000', '250000', '2500000', '1', '2013-06-22 10:44:21', '1', '2013-06-25 13:46:25', NULL, '', '2013060001', '20-06-2013', '500000', 'asda', 'proyek Testtest', '30', 'kredit', NULL, NULL, NULL, NULL, NULL);
INSERT INTO gl_torder_beli (`no_invoice`, `tanggal`, `status`, `kode_kurs`, `kurs`, `kode_sup`, `noproyek`, `ppn`, `ppn_total`, `subtotal`, `total`, `uang_muka`, `sisa`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`, `kode_acc`, `ket`, `no_request`, `tanggal_request`, `disc`, `nama_sup`, `nama_proyek`, `jwaktu`, `jenis_bayar`, `namaup`, `tlp`, `namauser`, `ketpt`, `npwp`) VALUES ('2013060003', '2013-06-22', 'selesai', 'RP.', '1', 'asd', '-', '10', '1621027', '16710270', '17831297', '17831297', '0', '1', '2013-06-22 14:28:40', '1', '2013-07-29 10:31:39', NULL, 'apa aja boleh deh\r\ntes aja lagi\r\ntes\r\ndata\r\ncustomer\r\nsdsdf', '2013060002', '20-06-2013', '500000', 'asda', '-', '0', 'tunai', 'Kepada', 'telepon', 'Migent', 'PT. MITRA SUKSES KONTRINDO\r\nKomplek Karang Anyar Permai 53-54 Blok D/29\r\nKarang Anyar - Sawah Besar\r\nJakarta Pusat', '31.293.757.6-075.000');
INSERT INTO gl_torder_beli (`no_invoice`, `tanggal`, `status`, `kode_kurs`, `kurs`, `kode_sup`, `noproyek`, `ppn`, `ppn_total`, `subtotal`, `total`, `uang_muka`, `sisa`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`, `kode_acc`, `ket`, `no_request`, `tanggal_request`, `disc`, `nama_sup`, `nama_proyek`, `jwaktu`, `jenis_bayar`, `namaup`, `tlp`, `namauser`, `ketpt`, `npwp`) VALUES ('2013060004', '2013-06-25', 'selesai', 'RP.', '1', 'asd', '-', '0', '0', '8195000', '8195000', '0', '8195000', '1', '2013-06-25 16:19:05', '1', '2013-06-25 16:22:58', NULL, '', '-', '-', '0', 'asda', '-', '0', 'kredit', NULL, NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: gl_torder_beli_detail
#

DROP TABLE IF EXISTS gl_torder_beli_detail;

CREATE TABLE `gl_torder_beli_detail` (
  `no_invoice` varchar(25) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `qty` double NOT NULL DEFAULT '0',
  `satuan` varchar(25) NOT NULL,
  `harga` double NOT NULL DEFAULT '0',
  `disc` double NOT NULL DEFAULT '0',
  `total` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060001', 'asdas', 'asd', '10', 'asd', '10000', '0', '100000');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060002', '-', 'sdfdasf', '100', 'a', '15000', '0', '1500000');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060002', 'asdas', 'asd', '150', 'asd', '10000', '0', '1500000');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060004', 'asdas', 'asd', '10', 'asd', '10000', '5', '95000');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060004', 'test', 'test barang', '90', 'pcs', '100000', '10', '8100000');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060003', '-', 'apa aja', '100', 'ss', '100000', '0', '10000000');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060003', '-', 'ewrwer', '11', 's', '1000', '0', '11000');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060003', '-', '54545', '1', '445', '410000', '0', '410000');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060003', '-', 'sdfsdf', '1', 'sfsd', '1000', '0', '1000');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060003', '-', '5454', '5', '4', '45454', '0', '227270');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060003', '-', 'sdfsdf', '10', 'dd', '100', '0', '1000');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060003', '-', '54574', '4', '7878', '10000', '0', '40000');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060003', 'asdas', 'asd', '550', 'asd', '10000', '0', '5500000');
INSERT INTO gl_torder_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`) VALUES ('2013060003', 'test', 'test barang', '1', 'pcs', '520000', '0', '520000');


#
# TABLE STRUCTURE FOR: gl_tpelhutang
#

DROP TABLE IF EXISTS gl_tpelhutang;

CREATE TABLE `gl_tpelhutang` (
  `no_pel` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_sup` varchar(25) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `kode_perk` varchar(25) DEFAULT NULL,
  `no_giro` varchar(30) DEFAULT NULL,
  `kode_kurs` varchar(25) NOT NULL,
  `kurs` double NOT NULL,
  `jtempo` date DEFAULT NULL,
  `total` double NOT NULL DEFAULT '0',
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tolak` varchar(1) DEFAULT '0',
  PRIMARY KEY (`no_pel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tpelhutang (`no_pel`, `tanggal`, `kode_sup`, `tipe`, `kode_perk`, `no_giro`, `kode_kurs`, `kurs`, `jtempo`, `total`, `tgl_add`, `user_add`, `tgl_edit`, `user_edit`, `tolak`) VALUES ('2013090001', '2013-09-18', 'asd', 'g', '110100', '123456', 'RP.', '1', '2013-09-18', '13500000', '2013-09-18 17:53:16', '1', '2013-09-21 15:01:19', '1', '0');


#
# TABLE STRUCTURE FOR: gl_tpelhutang_detail
#

DROP TABLE IF EXISTS gl_tpelhutang_detail;

CREATE TABLE `gl_tpelhutang_detail` (
  `no_pel` varchar(25) NOT NULL,
  `no_invoice` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` double NOT NULL DEFAULT '0',
  `disc` double NOT NULL DEFAULT '0',
  `bayar` double NOT NULL DEFAULT '0',
  `sisa` double NOT NULL DEFAULT '0',
  `kode_kurs` varchar(25) NOT NULL DEFAULT 'RP.',
  `kurs` double NOT NULL DEFAULT '1',
  `jumlah_bayar` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tpelhutang_detail (`no_pel`, `no_invoice`, `tanggal`, `jumlah`, `disc`, `bayar`, `sisa`, `kode_kurs`, `kurs`, `jumlah_bayar`) VALUES ('2013090001', '2013060003', '2013-06-17', '23525000', '25000', '13500000', '10000000', 'RP.', '1', '13500000');


#
# TABLE STRUCTURE FOR: gl_tpelpiutang
#

DROP TABLE IF EXISTS gl_tpelpiutang;

CREATE TABLE `gl_tpelpiutang` (
  `no_pel` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_cust` varchar(25) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `kode_perk` varchar(25) DEFAULT NULL,
  `no_giro` varchar(30) DEFAULT NULL,
  `kode_kurs` varchar(25) NOT NULL,
  `kurs` double NOT NULL,
  `jtempo` date DEFAULT NULL,
  `total` double NOT NULL DEFAULT '0',
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tolak` varchar(1) DEFAULT '0',
  PRIMARY KEY (`no_pel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tpelpiutang (`no_pel`, `tanggal`, `kode_cust`, `tipe`, `kode_perk`, `no_giro`, `kode_kurs`, `kurs`, `jtempo`, `total`, `tgl_add`, `user_add`, `tgl_edit`, `user_edit`, `tolak`) VALUES ('2013090001', '2013-09-17', '001', 'g', '110100', '123456', 'RP.', '1', '2013-09-17', '1020000000', '2013-09-17 16:27:00', '1', '2013-09-21 14:45:10', '1', '0');
INSERT INTO gl_tpelpiutang (`no_pel`, `tanggal`, `kode_cust`, `tipe`, `kode_perk`, `no_giro`, `kode_kurs`, `kurs`, `jtempo`, `total`, `tgl_add`, `user_add`, `tgl_edit`, `user_edit`, `tolak`) VALUES ('2013090002', '2013-09-18', '001', 't', '110100', '', 'US$', '10000', '2013-09-18', '505000000', '2013-09-18 10:15:46', '1', NULL, NULL, '0');
INSERT INTO gl_tpelpiutang (`no_pel`, `tanggal`, `kode_cust`, `tipe`, `kode_perk`, `no_giro`, `kode_kurs`, `kurs`, `jtempo`, `total`, `tgl_add`, `user_add`, `tgl_edit`, `user_edit`, `tolak`) VALUES ('2013090003', '2013-09-18', '001', 'g', '110100', '789', 'US$', '10000', '2013-09-18', '517939000', '2013-09-18 10:25:59', '1', '2013-09-21 14:54:39', '1', '0');


#
# TABLE STRUCTURE FOR: gl_tpelpiutang_detail
#

DROP TABLE IF EXISTS gl_tpelpiutang_detail;

CREATE TABLE `gl_tpelpiutang_detail` (
  `no_pel` varchar(25) NOT NULL,
  `no_invoice` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` double NOT NULL DEFAULT '0',
  `disc` double NOT NULL DEFAULT '0',
  `bayar` double NOT NULL DEFAULT '0',
  `sisa` double NOT NULL DEFAULT '0',
  `kode_kurs` varchar(25) NOT NULL DEFAULT 'RP.',
  `kurs` double NOT NULL DEFAULT '1',
  `jumlah_bayar` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tpelpiutang_detail (`no_pel`, `no_invoice`, `tanggal`, `jumlah`, `disc`, `bayar`, `sisa`, `kode_kurs`, `kurs`, `jumlah_bayar`) VALUES ('2013090002', '2013090001', '0000-00-00', '4019939000', '1000000', '50000', '3518939000', 'US$', '10000', '500000000');
INSERT INTO gl_tpelpiutang_detail (`no_pel`, `no_invoice`, `tanggal`, `jumlah`, `disc`, `bayar`, `sisa`, `kode_kurs`, `kurs`, `jumlah_bayar`) VALUES ('2013090002', '2013060001', '2013-06-14', '18936490', '100000', '500', '13836490', 'US$', '10000', '5000000');
INSERT INTO gl_tpelpiutang_detail (`no_pel`, `no_invoice`, `tanggal`, `jumlah`, `disc`, `bayar`, `sisa`, `kode_kurs`, `kurs`, `jumlah_bayar`) VALUES ('2013090001', '2013060001', '2013-06-14', '39936490', '1000000', '20000000', '18936490', 'RP.', '1', '20000000');
INSERT INTO gl_tpelpiutang_detail (`no_pel`, `no_invoice`, `tanggal`, `jumlah`, `disc`, `bayar`, `sisa`, `kode_kurs`, `kurs`, `jumlah_bayar`) VALUES ('2013090001', '2013060002', '2013-06-14', '4019950000', '500000000', '1000000000', '2519950000', 'RP.', '1', '1000000000');
INSERT INTO gl_tpelpiutang_detail (`no_pel`, `no_invoice`, `tanggal`, `jumlah`, `disc`, `bayar`, `sisa`, `kode_kurs`, `kurs`, `jumlah_bayar`) VALUES ('2013090003', '2013090001', '2013-09-16', '3518939000', '1001000000', '51793.9', '2000000000', 'US$', '10000', '517939000');


#
# TABLE STRUCTURE FOR: gl_tpelpiutangstock
#

DROP TABLE IF EXISTS gl_tpelpiutangstock;

CREATE TABLE `gl_tpelpiutangstock` (
  `no_pel` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_cust` varchar(25) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `kode_perk` varchar(25) DEFAULT NULL,
  `no_giro` varchar(30) DEFAULT NULL,
  `kode_kurs` varchar(25) NOT NULL,
  `kurs` double NOT NULL,
  `jtempo` date DEFAULT NULL,
  `total` double NOT NULL DEFAULT '0',
  `tgl_add` datetime DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tolak` varchar(1) DEFAULT '0',
  PRIMARY KEY (`no_pel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tpelpiutangstock (`no_pel`, `tanggal`, `kode_cust`, `tipe`, `kode_perk`, `no_giro`, `kode_kurs`, `kurs`, `jtempo`, `total`, `tgl_add`, `user_add`, `tgl_edit`, `user_edit`, `tolak`) VALUES ('2013090001', '2013-09-18', '001', 'g', '110100', '456', 'RP.', '1', '2013-09-18', '8000000', '2013-09-18 16:14:29', '1', '2013-09-21 08:52:19', '1', '0');


#
# TABLE STRUCTURE FOR: gl_tpelpiutangstock_detail
#

DROP TABLE IF EXISTS gl_tpelpiutangstock_detail;

CREATE TABLE `gl_tpelpiutangstock_detail` (
  `no_pel` varchar(25) NOT NULL,
  `no_invoice` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` double NOT NULL DEFAULT '0',
  `disc` double NOT NULL DEFAULT '0',
  `bayar` double NOT NULL DEFAULT '0',
  `sisa` double NOT NULL DEFAULT '0',
  `kode_kurs` varchar(25) NOT NULL DEFAULT 'RP.',
  `kurs` double NOT NULL DEFAULT '1',
  `jumlah_bayar` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tpelpiutangstock_detail (`no_pel`, `no_invoice`, `tanggal`, `jumlah`, `disc`, `bayar`, `sisa`, `kode_kurs`, `kurs`, `jumlah_bayar`) VALUES ('2013090001', '002', '2013-07-26', '18822210', '822210', '8000000', '10000000', 'RP.', '1', '8000000');


#
# TABLE STRUCTURE FOR: gl_tpembelian
#

DROP TABLE IF EXISTS gl_tpembelian;

CREATE TABLE `gl_tpembelian` (
  `no_invoice` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `no_order` varchar(25) NOT NULL,
  `kode_sup` varchar(25) NOT NULL,
  `jenis_bayar` varchar(25) NOT NULL,
  `jwaktu` double NOT NULL DEFAULT '0',
  `ppn` double NOT NULL DEFAULT '0',
  `ppnrp` double NOT NULL DEFAULT '0',
  `disc` double NOT NULL DEFAULT '0',
  `subtotal` double NOT NULL DEFAULT '0',
  `total` double NOT NULL DEFAULT '0',
  `uang_muka` double NOT NULL DEFAULT '0',
  `sisa` double NOT NULL DEFAULT '0',
  `user_add` varchar(25) DEFAULT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_edit` varchar(25) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  `kode_acc` varchar(25) DEFAULT NULL,
  `tanggal_order` varchar(20) NOT NULL,
  `nama_sup` varchar(250) NOT NULL,
  `kode_kurs` varchar(25) NOT NULL,
  `kurs` double NOT NULL DEFAULT '1',
  UNIQUE KEY `no_invoice` (`no_invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tpembelian (`no_invoice`, `tanggal`, `no_order`, `kode_sup`, `jenis_bayar`, `jwaktu`, `ppn`, `ppnrp`, `disc`, `subtotal`, `total`, `uang_muka`, `sisa`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`, `kode_acc`, `tanggal_order`, `nama_sup`, `kode_kurs`, `kurs`) VALUES ('2013060001', '2013-06-26', '2013060001', 'asd', 'kredit', '30', '10', '4950', '500', '50000', '54450', '8900', '45550', '1', '2013-06-26 09:25:54', '1', '2013-06-26 10:38:47', '110100', '20-06-2013', 'asda', 'RP.', '1');
INSERT INTO gl_tpembelian (`no_invoice`, `tanggal`, `no_order`, `kode_sup`, `jenis_bayar`, `jwaktu`, `ppn`, `ppnrp`, `disc`, `subtotal`, `total`, `uang_muka`, `sisa`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`, `kode_acc`, `tanggal_order`, `nama_sup`, `kode_kurs`, `kurs`) VALUES ('2013060002', '2013-06-26', '2013060004', 'asd', 'kredit', '0', '0', '0', '0', '4595000', '4595000', '0', '4595000', '1', '2013-06-26 10:55:16', '', NULL, '', '25-06-2013', 'asda', 'RP.', '1');
INSERT INTO gl_tpembelian (`no_invoice`, `tanggal`, `no_order`, `kode_sup`, `jenis_bayar`, `jwaktu`, `ppn`, `ppnrp`, `disc`, `subtotal`, `total`, `uang_muka`, `sisa`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`, `kode_acc`, `tanggal_order`, `nama_sup`, `kode_kurs`, `kurs`) VALUES ('2013080001', '2013-08-23', '2013060003', 'asd', 'kredit', '0', '10', '0', '0', '0', '0', '0', '0', '1', '2013-08-23 15:08:58', '1', '2013-08-23 15:11:48', '', '22-06-2013', 'asda', 'RP.', '1');


#
# TABLE STRUCTURE FOR: gl_tpembelian_detail
#

DROP TABLE IF EXISTS gl_tpembelian_detail;

CREATE TABLE `gl_tpembelian_detail` (
  `no_invoice` varchar(25) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `qty` double NOT NULL DEFAULT '0',
  `satuan` varchar(25) NOT NULL,
  `harga` double NOT NULL DEFAULT '0',
  `disc` double NOT NULL DEFAULT '0',
  `total` double NOT NULL DEFAULT '0',
  `hpr` double NOT NULL DEFAULT '0',
  `hprrp` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tpembelian_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`, `hpr`, `hprrp`) VALUES ('2013060001', 'asdas', 'asd', '5', 'asd', '10000', '0', '50000', '9900', '9900');
INSERT INTO gl_tpembelian_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`, `hpr`, `hprrp`) VALUES ('2013060002', 'asdas', 'asd', '10', 'asd', '10000', '5', '95000', '9500', '9500');
INSERT INTO gl_tpembelian_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`, `hpr`, `hprrp`) VALUES ('2013060002', 'test', 'test barang', '50', 'pcs', '100000', '10', '4500000', '90000', '90000');
INSERT INTO gl_tpembelian_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`, `hpr`, `hprrp`) VALUES ('2013080001', '-', 'apa aja', '0', 'ss', '100000', '0', '0', '0', '0');
INSERT INTO gl_tpembelian_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`, `hpr`, `hprrp`) VALUES ('2013080001', 'asdas', 'asd', '0', 'asd', '10000', '0', '0', '0', '0');
INSERT INTO gl_tpembelian_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `harga`, `disc`, `total`, `hpr`, `hprrp`) VALUES ('2013080001', 'test', 'test barang', '0', 'pcs', '520000', '0', '0', '0', '0');


#
# TABLE STRUCTURE FOR: gl_tpenyesuaian
#

DROP TABLE IF EXISTS gl_tpenyesuaian;

CREATE TABLE `gl_tpenyesuaian` (
  `no_invoice` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_gudang` varchar(25) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `kode_grup` varchar(25) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `user_add` varchar(5) DEFAULT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`no_invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tpenyesuaian (`no_invoice`, `tanggal`, `kode_gudang`, `tipe`, `kode_grup`, `ket`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`) VALUES ('2013090001', '2013-09-16', 'G01', 'semua', '', 'ket a ja', '1', '2013-09-16 13:52:02', NULL, NULL);
INSERT INTO gl_tpenyesuaian (`no_invoice`, `tanggal`, `kode_gudang`, `tipe`, `kode_grup`, `ket`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`) VALUES ('2013090002', '2013-09-16', 'G01', 'semua', '', 'kk', '1', '2013-09-16 13:52:32', NULL, NULL);
INSERT INTO gl_tpenyesuaian (`no_invoice`, `tanggal`, `kode_gudang`, `tipe`, `kode_grup`, `ket`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`) VALUES ('2013090003', '2013-09-16', 'G01', 'semua', '', '', '1', '2013-09-16 14:32:07', '1', '2013-09-16 16:45:25');


#
# TABLE STRUCTURE FOR: gl_tpenyesuaian_detail
#

DROP TABLE IF EXISTS gl_tpenyesuaian_detail;

CREATE TABLE `gl_tpenyesuaian_detail` (
  `no_invoice` varchar(25) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stock_komputer` double NOT NULL,
  `stock_fisik` double NOT NULL,
  `selisih` double NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `hbeli` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tpenyesuaian_detail (`no_invoice`, `kode_barang`, `nama_barang`, `stock_komputer`, `stock_fisik`, `selisih`, `keterangan`, `hbeli`) VALUES ('2013090001', 'asdas', 'asd', '0', '13015', '13015', '', NULL);
INSERT INTO gl_tpenyesuaian_detail (`no_invoice`, `kode_barang`, `nama_barang`, `stock_komputer`, `stock_fisik`, `selisih`, `keterangan`, `hbeli`) VALUES ('2013090001', 'test', 'test barang', '0', '80', '80', '', NULL);
INSERT INTO gl_tpenyesuaian_detail (`no_invoice`, `kode_barang`, `nama_barang`, `stock_komputer`, `stock_fisik`, `selisih`, `keterangan`, `hbeli`) VALUES ('2013090002', 'asdas', 'asd', '13015', '13000', '-15', '', NULL);
INSERT INTO gl_tpenyesuaian_detail (`no_invoice`, `kode_barang`, `nama_barang`, `stock_komputer`, `stock_fisik`, `selisih`, `keterangan`, `hbeli`) VALUES ('2013090002', 'test', 'test barang', '80', '80', '0', '', NULL);
INSERT INTO gl_tpenyesuaian_detail (`no_invoice`, `kode_barang`, `nama_barang`, `stock_komputer`, `stock_fisik`, `selisih`, `keterangan`, `hbeli`) VALUES ('2013090003', 'test', 'test barang', '80', '40', '-40', '', NULL);


#
# TABLE STRUCTURE FOR: gl_trequest_beli
#

DROP TABLE IF EXISTS gl_trequest_beli;

CREATE TABLE `gl_trequest_beli` (
  `no_invoice` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `bagian` varchar(100) DEFAULT NULL,
  `ket` varchar(250) NOT NULL,
  `total` double NOT NULL,
  `user_add` varchar(25) DEFAULT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_edit` varchar(25) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  `noproyek` varchar(25) NOT NULL,
  UNIQUE KEY `no_invoice` (`no_invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_trequest_beli (`no_invoice`, `tanggal`, `bagian`, `ket`, `total`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`, `noproyek`) VALUES ('2013060001', '2013-06-20', 'bagian aja', 'keterangan aja', '250', '1', '2013-06-20 18:07:03', '1', '2013-06-22 10:53:18', 'PTest');
INSERT INTO gl_trequest_beli (`no_invoice`, `tanggal`, `bagian`, `ket`, `total`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`, `noproyek`) VALUES ('2013060002', '2013-06-20', 'lagi', 'ad', '550', '1', '2013-06-20 18:07:23', '1', '2013-06-22 13:50:34', 'PTest');
INSERT INTO gl_trequest_beli (`no_invoice`, `tanggal`, `bagian`, `ket`, `total`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`, `noproyek`) VALUES ('2013060003', '2013-06-25', 'mesin', 'u/ di lapangan klp sawit', '130', '1', '2013-06-25 16:13:25', '1', '2013-06-25 16:14:36', 'TES');
INSERT INTO gl_trequest_beli (`no_invoice`, `tanggal`, `bagian`, `ket`, `total`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`, `noproyek`) VALUES ('2013060004', '2013-06-25', 'hh', 'jug', '250', '1', '2013-06-25 17:31:28', '1', '2013-07-27 10:47:27', '-');


#
# TABLE STRUCTURE FOR: gl_trequest_beli_detail
#

DROP TABLE IF EXISTS gl_trequest_beli_detail;

CREATE TABLE `gl_trequest_beli_detail` (
  `no_invoice` varchar(25) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `qty` double NOT NULL DEFAULT '0',
  `satuan` varchar(25) NOT NULL,
  `qty_sisa` double NOT NULL DEFAULT '0',
  `segment` varchar(50) DEFAULT NULL,
  `kondisi` varchar(50) DEFAULT NULL,
  `unit` varchar(25) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_trequest_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `qty_sisa`, `segment`, `kondisi`, `unit`, `lokasi`, `ket`) VALUES ('2013060001', '-', 'sdfdasf', '100', 'a', '0', NULL, NULL, NULL, NULL, 'asad');
INSERT INTO gl_trequest_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `qty_sisa`, `segment`, `kondisi`, `unit`, `lokasi`, `ket`) VALUES ('2013060001', 'asdas', 'asd', '150', 'asd', '13000', NULL, NULL, NULL, NULL, 'contoh sampel');
INSERT INTO gl_trequest_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `qty_sisa`, `segment`, `kondisi`, `unit`, `lokasi`, `ket`) VALUES ('2013060002', 'asdas', 'asd', '550', 'asd', '13000', NULL, NULL, NULL, NULL, 'coba');
INSERT INTO gl_trequest_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `qty_sisa`, `segment`, `kondisi`, `unit`, `lokasi`, `ket`) VALUES ('2013060003', 'asdas', 'asd', '100', 'asd', '13005', NULL, NULL, NULL, NULL, 'lapangan');
INSERT INTO gl_trequest_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `qty_sisa`, `segment`, `kondisi`, `unit`, `lokasi`, `ket`) VALUES ('2013060003', 'test', 'test barang', '30', 'pcs', '0', NULL, NULL, NULL, NULL, 'xxxxx');
INSERT INTO gl_trequest_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `qty_sisa`, `segment`, `kondisi`, `unit`, `lokasi`, `ket`) VALUES ('2013060004', 'asdas', 'asd', '150', 'asd', '13012', 'add', 'sdasd', 'scdc', 'ssf', 'vgh');
INSERT INTO gl_trequest_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `qty_sisa`, `segment`, `kondisi`, `unit`, `lokasi`, `ket`) VALUES ('2013060004', 'test', 'test barang', '100', 'pcs', '0', '', '', 'dssdc', 'd', '546');


#
# TABLE STRUCTURE FOR: gl_tterima_beli
#

DROP TABLE IF EXISTS gl_tterima_beli;

CREATE TABLE `gl_tterima_beli` (
  `no_invoice` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_gudang` varchar(25) NOT NULL,
  `no_order` varchar(25) NOT NULL,
  `tanggal_order` varchar(20) NOT NULL,
  `status` varchar(25) DEFAULT NULL,
  `kode_sup` varchar(25) DEFAULT NULL,
  `noproyek` varchar(25) DEFAULT NULL,
  `ket` text,
  `nama_sup` varchar(250) NOT NULL,
  `nama_proyek` varchar(250) NOT NULL,
  `user_add` varchar(25) DEFAULT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_edit` varchar(25) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  UNIQUE KEY `no_invoice` (`no_invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tterima_beli (`no_invoice`, `tanggal`, `kode_gudang`, `no_order`, `tanggal_order`, `status`, `kode_sup`, `noproyek`, `ket`, `nama_sup`, `nama_proyek`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`) VALUES ('2013060001', '2013-06-24', 'G01', '2013060001', '20-06-2013', '', 'asd', 'PTest', 'dsfgsdiuifb ljf\r\nd fsweuf\r\ns f we werwer ', 'asda', 'proyek Testtest', '1', '2013-06-24 17:30:31', '1', '2013-06-24 17:43:09');
INSERT INTO gl_tterima_beli (`no_invoice`, `tanggal`, `kode_gudang`, `no_order`, `tanggal_order`, `status`, `kode_sup`, `noproyek`, `ket`, `nama_sup`, `nama_proyek`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`) VALUES ('2013060002', '2013-06-25', 'G01', '2013060004', '25-06-2013', '', 'asd', '-', '', 'asda', '-', '1', '2013-06-25 16:45:14', '', NULL);
INSERT INTO gl_tterima_beli (`no_invoice`, `tanggal`, `kode_gudang`, `no_order`, `tanggal_order`, `status`, `kode_sup`, `noproyek`, `ket`, `nama_sup`, `nama_proyek`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`) VALUES ('2013060003', '2013-06-25', 'G01', '2013060004', '25-06-2013', '', 'asd', '-', '', 'asda', '-', '1', '2013-06-25 16:49:28', '', NULL);
INSERT INTO gl_tterima_beli (`no_invoice`, `tanggal`, `kode_gudang`, `no_order`, `tanggal_order`, `status`, `kode_sup`, `noproyek`, `ket`, `nama_sup`, `nama_proyek`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`) VALUES ('2013060004', '2013-06-25', 'g01', '2013060004', '25-06-2013', '', 'asd', '-', '', 'asda', '-', '1', '2013-06-25 17:41:46', '', NULL);


#
# TABLE STRUCTURE FOR: gl_tterima_beli_detail
#

DROP TABLE IF EXISTS gl_tterima_beli_detail;

CREATE TABLE `gl_tterima_beli_detail` (
  `no_invoice` varchar(25) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `qty` double NOT NULL DEFAULT '0',
  `satuan` varchar(25) NOT NULL,
  `qty_order` double NOT NULL DEFAULT '0',
  `sisa` double NOT NULL DEFAULT '0',
  `hpr` double NOT NULL DEFAULT '0',
  `hprrp` double NOT NULL DEFAULT '0',
  `harga` double NOT NULL DEFAULT '0',
  `disc` double NOT NULL DEFAULT '0',
  `total` double NOT NULL DEFAULT '0',
  `qty_kirim` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_tterima_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `qty_order`, `sisa`, `hpr`, `hprrp`, `harga`, `disc`, `total`, `qty_kirim`) VALUES ('2013060001', 'asdas', 'asd', '5', 'asd', '10', '5', '9900', '9900', '10000', '0', '50000', '0');
INSERT INTO gl_tterima_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `qty_order`, `sisa`, `hpr`, `hprrp`, `harga`, `disc`, `total`, `qty_kirim`) VALUES ('2013060002', 'asdas', 'asd', '5', 'asd', '10', '5', '9500', '9500', '10000', '5', '47500', '0');
INSERT INTO gl_tterima_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `qty_order`, `sisa`, `hpr`, `hprrp`, `harga`, `disc`, `total`, `qty_kirim`) VALUES ('2013060003', 'asdas', 'asd', '2', 'asd', '10', '3', '9500', '9500', '10000', '5', '19000', '5');
INSERT INTO gl_tterima_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `qty_order`, `sisa`, `hpr`, `hprrp`, `harga`, `disc`, `total`, `qty_kirim`) VALUES ('2013060004', 'asdas', 'asd', '3', 'asd', '10', '0', '9500', '9500', '10000', '5', '28500', '7');
INSERT INTO gl_tterima_beli_detail (`no_invoice`, `kode_barang`, `nama_barang`, `qty`, `satuan`, `qty_order`, `sisa`, `hpr`, `hprrp`, `harga`, `disc`, `total`, `qty_kirim`) VALUES ('2013060004', 'test', 'test barang', '50', 'pcs', '90', '40', '90000', '90000', '100000', '10', '4500000', '0');


#
# TABLE STRUCTURE FOR: gl_ttolakgirohutang
#

DROP TABLE IF EXISTS gl_ttolakgirohutang;

CREATE TABLE `gl_ttolakgirohutang` (
  `no_tolak` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_sup` varchar(25) DEFAULT NULL,
  `total` double NOT NULL DEFAULT '0',
  `user_add` varchar(5) DEFAULT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`no_tolak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_ttolakgirohutang_detail
#

DROP TABLE IF EXISTS gl_ttolakgirohutang_detail;

CREATE TABLE `gl_ttolakgirohutang_detail` (
  `no_tolak` varchar(25) NOT NULL,
  `no_giro` varchar(25) NOT NULL,
  `tipe` varchar(15) NOT NULL DEFAULT 'Jasa',
  `no_pel` varchar(25) NOT NULL,
  `no_invoice` varchar(25) NOT NULL,
  `kode_perk` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jtempo` date NOT NULL,
  `disc` double NOT NULL DEFAULT '0',
  `bayar` double NOT NULL DEFAULT '0',
  `jumlah_bayar` double NOT NULL DEFAULT '0',
  `kode_kurs` varchar(25) NOT NULL,
  `kurs` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_ttolakgiropiutang
#

DROP TABLE IF EXISTS gl_ttolakgiropiutang;

CREATE TABLE `gl_ttolakgiropiutang` (
  `no_tolak` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_cust` varchar(25) DEFAULT NULL,
  `total` double NOT NULL DEFAULT '0',
  `user_add` varchar(5) DEFAULT NULL,
  `tgl_add` datetime DEFAULT NULL,
  `user_edit` varchar(5) DEFAULT NULL,
  `tgl_edit` datetime DEFAULT NULL,
  PRIMARY KEY (`no_tolak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_ttolakgiropiutang (`no_tolak`, `tanggal`, `kode_cust`, `total`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`) VALUES ('2013090001', '2013-09-21', '001', '1020000000', '1', '2013-09-21 14:17:41', NULL, NULL);
INSERT INTO gl_ttolakgiropiutang (`no_tolak`, `tanggal`, `kode_cust`, `total`, `user_add`, `tgl_add`, `user_edit`, `tgl_edit`) VALUES ('2013090002', '2013-09-21', '001', '8000000', '1', '2013-09-21 14:59:57', NULL, NULL);


#
# TABLE STRUCTURE FOR: gl_ttolakgiropiutang_detail
#

DROP TABLE IF EXISTS gl_ttolakgiropiutang_detail;

CREATE TABLE `gl_ttolakgiropiutang_detail` (
  `no_tolak` varchar(25) NOT NULL,
  `no_giro` varchar(25) NOT NULL,
  `tipe` varchar(15) NOT NULL DEFAULT 'Jasa',
  `no_pel` varchar(25) NOT NULL,
  `no_invoice` varchar(25) NOT NULL,
  `kode_perk` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jtempo` date NOT NULL,
  `disc` double NOT NULL DEFAULT '0',
  `bayar` double NOT NULL DEFAULT '0',
  `jumlah_bayar` double NOT NULL DEFAULT '0',
  `kode_kurs` varchar(25) NOT NULL,
  `kurs` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO gl_ttolakgiropiutang_detail (`no_tolak`, `no_giro`, `tipe`, `no_pel`, `no_invoice`, `kode_perk`, `tanggal`, `jtempo`, `disc`, `bayar`, `jumlah_bayar`, `kode_kurs`, `kurs`) VALUES ('2013090001', '123456', 'Jasa', '2013090001', '2013060001', '110100', '2013-09-17', '2013-09-17', '1000000', '20000000', '20000000', 'RP.', '1');
INSERT INTO gl_ttolakgiropiutang_detail (`no_tolak`, `no_giro`, `tipe`, `no_pel`, `no_invoice`, `kode_perk`, `tanggal`, `jtempo`, `disc`, `bayar`, `jumlah_bayar`, `kode_kurs`, `kurs`) VALUES ('2013090001', '123456', 'Jasa', '2013090001', '2013060002', '110100', '2013-09-17', '2013-09-17', '500000000', '1000000000', '1000000000', 'RP.', '1');
INSERT INTO gl_ttolakgiropiutang_detail (`no_tolak`, `no_giro`, `tipe`, `no_pel`, `no_invoice`, `kode_perk`, `tanggal`, `jtempo`, `disc`, `bayar`, `jumlah_bayar`, `kode_kurs`, `kurs`) VALUES ('2013090002', '456', 'Stock', '2013090001', '002', '110100', '2013-09-18', '2013-09-18', '822210', '8000000', '8000000', 'RP.', '1');


#
# TABLE STRUCTURE FOR: gl_tutup_buku
#

DROP TABLE IF EXISTS gl_tutup_buku;

CREATE TABLE `gl_tutup_buku` (
  `periode` int(6) NOT NULL,
  `tahun` int(4) NOT NULL,
  `bulan` int(2) NOT NULL,
  PRIMARY KEY (`periode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: gl_xlog
#

DROP TABLE IF EXISTS gl_xlog;

CREATE TABLE `gl_xlog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `user_agent` varchar(150) NOT NULL,
  `action` varchar(20) NOT NULL,
  `module` varchar(20) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=latin1;

INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (1, 1, '2013-05-15 14:17:26', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (2, 1, '2013-05-15 14:17:32', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (3, 1, '2013-05-15 14:17:49', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (4, 1, '2013-05-15 14:17:52', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (5, 1, '2013-05-15 14:18:29', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'update', 'capabilities', '{\"id\":\"3\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (6, 1, '2013-05-15 14:18:29', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (7, 1, '2013-05-15 14:18:35', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (8, 1, '2013-05-15 14:21:13', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (9, 1, '2013-05-15 14:21:17', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (10, 1, '2013-05-15 14:21:43', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'company', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (11, 1, '2013-05-15 14:27:24', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'company', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (12, 1, '2013-05-17 09:21:13', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (13, 1, '2013-05-17 09:21:18', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (14, 1, '2013-05-17 09:21:24', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'update', 'capabilities', '{\"id\":\"3\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (15, 1, '2013-05-17 09:21:24', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (16, 1, '2013-05-17 09:22:01', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (17, 1, '2013-05-17 09:22:06', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (18, 1, '2013-05-17 09:22:16', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"3\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (19, 1, '2013-05-17 09:22:16', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"failed\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (20, 1, '2013-05-17 09:23:21', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'update', 'capabilities', '{\"id\":\"3\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_batal_tutup_buku\",\"read_batal_tutup_buku\",\"update_batal_tutup_buku\",\"delete_batal_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (21, 1, '2013-05-17 09:23:21', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (22, 1, '2013-05-17 09:23:25', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'update', 'capabilities', '{\"id\":\"3\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_batal_tutup_buku\",\"read_batal_tutup_buku\",\"update_batal_tutup_buku\",\"delete_batal_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (23, 1, '2013-05-17 09:23:25', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'update', 'capabilities', '\"failed\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (24, 1, '2013-05-17 09:23:29', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'update', 'capabilities', '{\"id\":\"3\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_batal_tutup_buku\",\"read_batal_tutup_buku\",\"update_batal_tutup_buku\",\"delete_batal_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (25, 1, '2013-05-17 09:23:29', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'update', 'capabilities', '\"failed\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (26, 1, '2013-05-17 09:23:31', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (27, 1, '2013-05-17 09:23:35', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (28, 1, '2013-05-17 09:23:40', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'update', 'capabilities', '{\"id\":\"3\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_batal_tutup_buku\",\"read_batal_tutup_buku\",\"update_batal_tutup_buku\",\"delete_batal_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (29, 1, '2013-05-17 09:23:40', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'update', 'capabilities', '\"failed\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (30, 1, '2013-05-17 09:23:53', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (31, 1, '2013-05-17 09:23:56', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (32, 1, '2013-05-17 11:02:23', '139.195.48.247', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'company', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (33, 1, '2013-06-06 19:20:08', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (34, 1, '2013-06-06 19:20:10', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (35, 1, '2013-06-06 19:20:15', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (36, 1, '2013-06-06 19:20:15', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (37, 1, '2013-06-06 19:20:17', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (38, 1, '2013-06-06 19:20:20', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (39, 1, '2013-06-06 19:20:32', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (40, 1, '2013-06-06 19:20:37', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (41, 1, '2013-06-06 19:20:41', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"2\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (42, 1, '2013-06-06 19:20:41', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (43, 1, '2013-06-11 11:50:26', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0', 'create', 'kb_keluar', '{\"id_jurnal\":\"MDR1306\",\"id_transaksi\":\"0001\",\"tanggal\":\"11-06-2013\",\"bayar_kepada\":\"HANA\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"123124\",\"id_perkiraan\":\"110300\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"16-06-2013\",\"kurs\":\"1\",\"proyek\":\"-\",\"jumlah\":\"5,500,000.00\",\"baris-kb-keluar\":\"3\",\"kb_keluar\":[{\"id\":\"250110\",\"nama\":\"Biaya PLN Yang Masih Harus Dibayar\",\"keterangan\":\"BL MEI\",\"debet\":\"2,000,000\"},{\"id\":\"250130\",\"nama\":\"Biaya Telepon Yang Masih Harus Dibayar\",\"keterangan\":\"MEI TELP\",\"debet\":\"3,500,000\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"debet\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (44, 1, '2013-06-11 11:50:42', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0', 'read', 'kb_keluar', '{\"jurnal\":\"MDR1306\",\"transaksi\":\"0001\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (45, 1, '2013-06-11 11:51:01', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0', 'update', 'kb_keluar', '{\"id_jurnal\":\"MDR1306\",\"id_transaksi\":\"0001\",\"tanggal\":\"11-06-2013\",\"bayar_kepada\":\"HANA\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"123124\",\"id_perkiraan\":\"110300\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"16-06-2013\",\"kurs\":\"1.00\",\"proyek\":\"-\",\"jumlah\":\"6,000,000.00\",\"baris-kb-keluar\":\"3\",\"kb_keluar\":[{\"id\":\"250110\",\"nama\":\"Biaya PLN Yang Masih\",\"keterangan\":\"BL MEI\",\"debet\":\"2,500,000\"},{\"id\":\"250130\",\"nama\":\"Biaya Telepon Yang M\",\"keterangan\":\"MEI TELP\",\"debet\":\"3,500,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"debet\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (46, 1, '2013-06-11 11:52:35', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_keluar', '{\"jurnal\":\"MDR1306\",\"transaksi\":\"0001\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (47, 1, '2013-06-11 11:52:42', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_keluar', '{\"id_jurnal\":\"MDR1306\",\"id_transaksi\":\"0001\",\"tanggal\":\"11-06-2013\",\"bayar_kepada\":\"HANA\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"123124\",\"id_perkiraan\":\"110300\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"16-06-2013\",\"kurs\":\"1.00\",\"proyek\":\"-\",\"jumlah\":\"6,000,000.00\",\"baris-kb-keluar\":\"3\",\"kb_keluar\":[{\"id\":\"250110\",\"nama\":\"Biaya PLN Yang Masih\",\"keterangan\":\"BL MEI\",\"debet\":\"2,500,000.00\"},{\"id\":\"250130\",\"nama\":\"Biaya Telepon Yang M\",\"keterangan\":\"MEI TELP\",\"debet\":\"3,500,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"debet\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (48, 1, '2013-06-11 11:52:56', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_keluar', '{\"jurnal\":\"MDR1306\",\"transaksi\":\"0001\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (49, 1, '2013-06-11 11:52:59', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_keluar', '{\"id_jurnal\":\"MDR1306\",\"id_transaksi\":\"0001\",\"tanggal\":\"11-06-2013\",\"bayar_kepada\":\"HANA\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"123124\",\"id_perkiraan\":\"110300\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"16-06-2013\",\"kurs\":\"1.00\",\"proyek\":\"-\",\"jumlah\":\"6,000,000.00\",\"baris-kb-keluar\":\"3\",\"kb_keluar\":[{\"id\":\"250110\",\"nama\":\"Biaya PLN Yang Masih\",\"keterangan\":\"BL MEI\",\"debet\":\"2,500,000.00\"},{\"id\":\"250130\",\"nama\":\"Biaya Telepon Yang M\",\"keterangan\":\"MEI TELP\",\"debet\":\"3,500,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"debet\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (50, 1, '2013-06-11 12:01:10', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_keluar', '{\"jurnal\":\"MDR1306\",\"transaksi\":\"0001\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (51, 1, '2013-06-11 12:01:14', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_keluar', '{\"id_jurnal\":\"MDR1306\",\"id_transaksi\":\"0001\",\"tanggal\":\"11-06-2013\",\"bayar_kepada\":\"HANA\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"123124\",\"id_perkiraan\":\"110300\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"16-06-2013\",\"kurs\":\"1.00\",\"proyek\":\"-\",\"jumlah\":\"6,000,000.00\",\"baris-kb-keluar\":\"3\",\"kb_keluar\":[{\"id\":\"250110\",\"nama\":\"Biaya PLN Yang Masih\",\"keterangan\":\"BL MEI\",\"debet\":\"2,500,000.00\"},{\"id\":\"250130\",\"nama\":\"Biaya Telepon Yang M\",\"keterangan\":\"MEI TELP\",\"debet\":\"3,500,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"debet\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (52, 1, '2013-06-11 12:02:22', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0', 'read', 'kb_keluar', '{\"jurnal\":\"MDR1306\",\"transaksi\":\"0001\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (53, 1, '2013-06-11 12:10:32', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0', 'create', 'kb_terima', '{\"id_jurnal\":\"MDR1306\",\"id_transaksi\":\"0001\",\"tanggal\":\"11-06-2013\",\"terima_dari\":\"XXX\",\"cara_bayar\":\"transfer\",\"id_cek_giro\":\"\",\"id_perkiraan\":\"110300\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"18-06-2013\",\"kurs\":\"1\",\"proyek\":\"-\",\"jumlah\":\"11,500,000.00\",\"baris-kb-terima\":\"3\",\"kb_terima\":[{\"id\":\"410200\",\"nama\":\"Pendapatan Lainnya\",\"keterangan\":\"XXXXXXXXXXXXX\",\"kredit\":\"10,000,000\"},{\"id\":\"710200\",\"nama\":\"Pendapatan (Biaya) Lainnya\",\"keterangan\":\"YYYYYYYYYYY\",\"kredit\":\"1,500,000\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (54, 1, '2013-06-11 12:10:51', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0', 'read', 'kb_keluar', '{\"jurnal\":\"MDR1306\",\"transaksi\":\"0001\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (55, 1, '2013-06-11 12:10:57', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0', 'delete', 'kb_keluar', '{\"jurnal\":\"MDR1306\",\"transaksi\":\"0001\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (56, 1, '2013-06-11 12:11:13', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0', 'read', 'kb_terima', '{\"jurnal\":\"MDR1306\",\"transaksi\":\"0001\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (57, 1, '2013-06-11 12:11:21', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0', 'delete', 'kb_terima', '{\"jurnal\":\"MDR1306\",\"transaksi\":\"0001\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (58, 1, '2013-06-11 12:39:17', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (59, 1, '2013-06-11 12:39:19', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (60, 1, '2013-06-11 12:39:28', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (61, 1, '2013-06-11 12:39:28', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (62, 1, '2013-06-11 12:39:34', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (63, 1, '2013-06-11 12:39:36', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (64, 1, '2013-06-11 12:39:39', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"2\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (65, 1, '2013-06-11 12:39:39', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (66, 1, '2013-06-11 12:59:26', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (67, 1, '2013-06-11 12:59:28', '139.194.208.226', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (68, 1, '2013-06-11 14:33:40', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'create', 'kb_keluar', '{\"id_jurnal\":\"BCA201301\",\"id_transaksi\":\"0001\",\"tanggal\":\"11-06-2013\",\"bayar_kepada\":\"AMIR\",\"cara_bayar\":\"tunai\",\"id_cek_giro\":\"\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"11-06-2013\",\"kurs\":\"1\",\"proyek\":\"PTest\",\"jumlah\":\"400,000.00\",\"baris-kb-keluar\":\"3\",\"kb_keluar\":[{\"id\":\"250120\",\"nama\":\"Biaya PAM Yang Masih Harus Dibayar\",\"keterangan\":\"BULAN JUNI\",\"debet\":\"100,000\"},{\"id\":\"250130\",\"nama\":\"Biaya Telepon Yang Masih Harus Dibayar\",\"keterangan\":\"BULAN JUNI\",\"debet\":\"300,000\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"debet\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (69, 1, '2013-06-11 14:50:01', '202.148.4.218', 'Mozilla/5.0 (Windows NT 6.1; rv:17.0; WUID=e2ccabc9ae44bd573223dc4fce77acc5; WTB=592) Gecko/20100101 Firefox/17.0', 'create', 'kb_keluar', '{\"id_jurnal\":\"BCA201301\",\"id_transaksi\":\"0002\",\"tanggal\":\"11-06-2013\",\"bayar_kepada\":\"jOHAN\",\"cara_bayar\":\"tunai\",\"id_cek_giro\":\"\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"11-06-2013\",\"kurs\":\"1\",\"proyek\":\"PTest\",\"jumlah\":\"1,100,000.00\",\"baris-kb-keluar\":\"3\",\"kb_keluar\":[{\"id\":\"250100\",\"nama\":\"Biaya Gaji Yang Masih Harus Dibayar\",\"keterangan\":\"JUNI\",\"debet\":\"1,000,000\"},{\"id\":\"250100\",\"nama\":\"Biaya Gaji Yang Masih Harus Dibayar\",\"keterangan\":\"JUNI\",\"debet\":\"-100,000\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"debet\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (70, 1, '2013-06-15 04:40:49', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (71, 1, '2013-06-15 04:40:51', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (72, 1, '2013-06-15 04:40:57', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\",\"create_pembelian\",\"read_pembelian\",\"update_pembelian\",\"delete_pembelian\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (73, 1, '2013-06-15 04:40:57', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (74, 1, '2013-06-17 12:25:10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (75, 1, '2013-06-17 12:25:13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (76, 1, '2013-06-17 12:25:33', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'company', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (77, 1, '2013-06-20 04:22:08', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (78, 1, '2013-06-20 04:22:10', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (79, 1, '2013-06-20 04:22:14', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\",\"create_order_beli\",\"read_order_beli\",\"update_order_beli\",\"delete_order_beli\",\"create_pembelian\",\"read_pembelian\",\"update_pembelian\",\"delete_pembelian\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (80, 1, '2013-06-20 04:22:14', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (81, 1, '2013-06-20 11:16:06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (82, 1, '2013-06-20 11:16:09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (83, 1, '2013-06-20 11:16:15', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\",\"create_request_beli\",\"read_request_beli\",\"update_request_beli\",\"delete_request_beli\",\"create_order_beli\",\"read_order_beli\",\"update_order_beli\",\"delete_order_beli\",\"create_pembelian\",\"read_pembelian\",\"update_pembelian\",\"delete_pembelian\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (84, 1, '2013-06-20 11:16:15', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (85, 1, '2013-06-20 11:16:18', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (86, 1, '2013-06-22 08:29:31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (87, 1, '2013-06-22 08:29:33', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (88, 1, '2013-06-22 08:29:59', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (89, 1, '2013-06-22 08:30:06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\",\"create_request_beli\",\"read_request_beli\",\"update_request_beli\",\"delete_request_beli\",\"create_order_beli\",\"read_order_beli\",\"update_order_beli\",\"delete_order_beli\",\"create_terima_beli\",\"read_terima_beli\",\"update_terima_beli\",\"delete_terima_beli\",\"create_pembelian\",\"read_pembelian\",\"update_pembelian\",\"delete_pembelian\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (90, 1, '2013-06-22 08:30:06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (91, 1, '2013-06-22 08:30:08', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (92, 1, '2013-06-29 08:23:55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_keluar', '{\"jurnal\":\"BCA201301\",\"transaksi\":\"0001\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (93, 1, '2013-07-25 06:39:42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (94, 1, '2013-07-25 06:39:48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (95, 1, '2013-07-25 06:39:58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (96, 1, '2013-07-25 06:42:43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (97, 1, '2013-07-25 06:42:48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'company', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (98, 1, '2013-07-27 06:09:56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (99, 1, '2013-07-27 06:10:31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'company', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (100, 1, '2013-07-29 09:22:35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (101, 1, '2013-07-29 09:22:38', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (102, 1, '2013-07-29 09:22:52', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_pendapatan\",\"read_pendapatan\",\"update_pendapatan\",\"delete_pendapatan\",\"create_pengeluaran\",\"read_pengeluaran\",\"update_pengeluaran\",\"delete_pengeluaran\",\"create_mutasi\",\"read_mutasi\",\"update_mutasi\",\"delete_mutasi\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_istock\",\"read_istock\",\"update_istock\",\"delete_istock\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\",\"create_request_beli\",\"read_request_beli\",\"update_request_beli\",\"delete_request_beli\",\"create_order_beli\",\"read_order_beli\",\"update_order_beli\",\"delete_order_beli\",\"create_terima_beli\",\"read_terima_beli\",\"update_terima_beli\",\"delete_terima_beli\",\"create_pembelian\",\"read_pembelian\",\"update_pembelian\",\"delete_pembelian\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (103, 1, '2013-07-29 09:22:52', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (104, 1, '2013-07-29 09:22:58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (105, 1, '2013-08-22 10:37:12', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_keluar', '{\"jurnal\":\"BCA201301\",\"transaksi\":\"0001\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (106, 1, '2013-09-14 08:20:05', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (107, 1, '2013-09-14 08:20:08', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (108, 1, '2013-09-14 08:20:16', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_pendapatan\",\"read_pendapatan\",\"update_pendapatan\",\"delete_pendapatan\",\"create_pengeluaran\",\"read_pengeluaran\",\"update_pengeluaran\",\"delete_pengeluaran\",\"create_mutasi\",\"read_mutasi\",\"update_mutasi\",\"delete_mutasi\",\"create_penyesuaian\",\"read_penyesuaian\",\"update_penyesuaian\",\"delete_penyesuaian\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_istock\",\"read_istock\",\"update_istock\",\"delete_istock\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\",\"create_request_beli\",\"read_request_beli\",\"update_request_beli\",\"delete_request_beli\",\"create_order_beli\",\"read_order_beli\",\"update_order_beli\",\"delete_order_beli\",\"create_terima_beli\",\"read_terima_beli\",\"update_terima_beli\",\"delete_terima_beli\",\"create_pembelian\",\"read_pembelian\",\"update_pembelian\",\"delete_pembelian\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (109, 1, '2013-09-14 08:20:16', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (110, 1, '2013-09-16 12:08:48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (111, 1, '2013-09-16 12:08:51', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (112, 1, '2013-09-16 12:08:57', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_pendapatan\",\"read_pendapatan\",\"update_pendapatan\",\"delete_pendapatan\",\"create_pengeluaran\",\"read_pengeluaran\",\"update_pengeluaran\",\"delete_pengeluaran\",\"create_mutasi\",\"read_mutasi\",\"update_mutasi\",\"delete_mutasi\",\"create_penyesuaian\",\"read_penyesuaian\",\"update_penyesuaian\",\"delete_penyesuaian\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_istock\",\"read_istock\",\"update_istock\",\"delete_istock\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\",\"create_request_beli\",\"read_request_beli\",\"update_request_beli\",\"delete_request_beli\",\"create_order_beli\",\"read_order_beli\",\"update_order_beli\",\"delete_order_beli\",\"create_terima_beli\",\"read_terima_beli\",\"update_terima_beli\",\"delete_terima_beli\",\"create_pembelian\",\"read_pembelian\",\"update_pembelian\",\"delete_pembelian\",\"create_pelpiutang\",\"read_pelpiutang\",\"update_pelpiutang\",\"delete_pelpiutang\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (113, 1, '2013-09-16 12:08:57', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (114, 1, '2013-09-18 07:00:34', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (115, 1, '2013-09-18 07:00:37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (116, 1, '2013-09-18 07:00:43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_pendapatan\",\"read_pendapatan\",\"update_pendapatan\",\"delete_pendapatan\",\"create_pengeluaran\",\"read_pengeluaran\",\"update_pengeluaran\",\"delete_pengeluaran\",\"create_mutasi\",\"read_mutasi\",\"update_mutasi\",\"delete_mutasi\",\"create_penyesuaian\",\"read_penyesuaian\",\"update_penyesuaian\",\"delete_penyesuaian\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_istock\",\"read_istock\",\"update_istock\",\"delete_istock\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\",\"create_request_beli\",\"read_request_beli\",\"update_request_beli\",\"delete_request_beli\",\"create_order_beli\",\"read_order_beli\",\"update_order_beli\",\"delete_order_beli\",\"create_terima_beli\",\"read_terima_beli\",\"update_terima_beli\",\"delete_terima_beli\",\"create_pembelian\",\"read_pembelian\",\"update_pembelian\",\"delete_pembelian\",\"create_pelpiutang\",\"read_pelpiutang\",\"update_pelpiutang\",\"delete_pelpiutang\",\"create_pelpiutangstock\",\"read_pelpiutangstock\",\"update_pelpiutangstock\",\"delete_pelpiutangstock\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (117, 1, '2013-09-18 07:00:43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (118, 1, '2013-09-18 12:14:30', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (119, 1, '2013-09-18 12:14:32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (120, 1, '2013-09-18 12:14:37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_pendapatan\",\"read_pendapatan\",\"update_pendapatan\",\"delete_pendapatan\",\"create_pengeluaran\",\"read_pengeluaran\",\"update_pengeluaran\",\"delete_pengeluaran\",\"create_mutasi\",\"read_mutasi\",\"update_mutasi\",\"delete_mutasi\",\"create_penyesuaian\",\"read_penyesuaian\",\"update_penyesuaian\",\"delete_penyesuaian\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_istock\",\"read_istock\",\"update_istock\",\"delete_istock\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\",\"create_request_beli\",\"read_request_beli\",\"update_request_beli\",\"delete_request_beli\",\"create_order_beli\",\"read_order_beli\",\"update_order_beli\",\"delete_order_beli\",\"create_terima_beli\",\"read_terima_beli\",\"update_terima_beli\",\"delete_terima_beli\",\"create_pembelian\",\"read_pembelian\",\"update_pembelian\",\"delete_pembelian\",\"create_pelpiutang\",\"read_pelpiutang\",\"update_pelpiutang\",\"delete_pelpiutang\",\"create_pelpiutangstock\",\"read_pelpiutangstock\",\"update_pelpiutangstock\",\"delete_pelpiutangstock\",\"create_pelhutang\",\"read_pelhutang\",\"update_pelhutang\",\"delete_pelhutang\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (121, 1, '2013-09-18 12:14:37', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (122, 1, '2013-09-20 04:51:36', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (123, 1, '2013-09-20 04:51:39', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (124, 1, '2013-09-20 04:51:44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_pendapatan\",\"read_pendapatan\",\"update_pendapatan\",\"delete_pendapatan\",\"create_pengeluaran\",\"read_pengeluaran\",\"update_pengeluaran\",\"delete_pengeluaran\",\"create_mutasi\",\"read_mutasi\",\"update_mutasi\",\"delete_mutasi\",\"create_penyesuaian\",\"read_penyesuaian\",\"update_penyesuaian\",\"delete_penyesuaian\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_istock\",\"read_istock\",\"update_istock\",\"delete_istock\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\",\"create_request_beli\",\"read_request_beli\",\"update_request_beli\",\"delete_request_beli\",\"create_order_beli\",\"read_order_beli\",\"update_order_beli\",\"delete_order_beli\",\"create_terima_beli\",\"read_terima_beli\",\"update_terima_beli\",\"delete_terima_beli\",\"create_pembelian\",\"read_pembelian\",\"update_pembelian\",\"delete_pembelian\",\"create_pelpiutang\",\"read_pelpiutang\",\"update_pelpiutang\",\"delete_pelpiutang\",\"create_pelpiutangstock\",\"read_pelpiutangstock\",\"update_pelpiutangstock\",\"delete_pelpiutangstock\",\"create_pelhutang\",\"read_pelhutang\",\"update_pelhutang\",\"delete_pelhutang\",\"create_tolakgiropiutang\",\"read_tolakgiropiutang\",\"update_tolakgiropiutang\",\"delete_tolakgiropiutang\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (125, 1, '2013-09-20 04:51:44', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (126, 1, '2013-09-20 05:19:17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'create', 'kb_keluar', '{\"id_jurnal\":\"BCA201301\",\"id_transaksi\":\"0003\",\"tanggal\":\"20-09-2013\",\"bayar_kepada\":\"sdfd\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"123456\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1\",\"proyek\":\"PTest\",\"jumlah\":\"100,000.00\",\"baris-kb-keluar\":\"2\",\"kb_keluar\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"121\",\"debet\":\"100,000\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"debet\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (127, 1, '2013-09-20 05:19:35', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_keluar', '{\"jurnal\":\"BCA201301\",\"transaksi\":\"0003\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (128, 1, '2013-09-20 05:21:43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'create', 'kb_keluar', '{\"id_jurnal\":\"BCA201301\",\"id_transaksi\":\"0003\",\"tanggal\":\"20-09-2013\",\"bayar_kepada\":\"sdf\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"123456\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1\",\"proyek\":\"PTest\",\"jumlah\":\"5,454,545.00\",\"baris-kb-keluar\":\"1\",\"kb_keluar\":[{\"id\":\"110\",\"nama\":\"KAS & BANK\",\"keterangan\":\"54\",\"debet\":\"5,454,545\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (129, 1, '2013-09-20 05:22:56', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'create', 'kb_keluar', '{\"id_jurnal\":\"BCA201301\",\"id_transaksi\":\"0003\",\"tanggal\":\"20-09-2013\",\"bayar_kepada\":\"ds\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"123456\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1\",\"proyek\":\"PTest\",\"jumlah\":\"1,212,313.00\",\"baris-kb-keluar\":\"2\",\"kb_keluar\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"2132\",\"debet\":\"1,212,313\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"debet\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (130, 1, '2013-09-20 05:26:08', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_keluar', '{\"jurnal\":\"BCA201301\",\"transaksi\":\"0002\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (131, 1, '2013-09-20 05:26:17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_keluar', '{\"id_jurnal\":\"BCA201301\",\"id_transaksi\":\"0002\",\"tanggal\":\"11-06-2013\",\"bayar_kepada\":\"jOHAN\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"123456\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"11-06-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"1,100,000.00\",\"baris-kb-keluar\":\"3\",\"kb_keluar\":[{\"id\":\"250100\",\"nama\":\"Biaya Gaji Yang Masi\",\"keterangan\":\"JUNI\",\"debet\":\"1,000,000.00\"},{\"id\":\"250100\",\"nama\":\"Biaya Gaji Yang Masi\",\"keterangan\":\"JUNI\",\"debet\":\"100,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"debet\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (132, 1, '2013-09-20 05:26:21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_keluar', '{\"id_jurnal\":\"BCA201301\",\"id_transaksi\":\"0002\",\"tanggal\":\"11-06-2013\",\"bayar_kepada\":\"jOHAN\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"123456\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"11-06-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"1,100,000.00\",\"baris-kb-keluar\":\"3\",\"kb_keluar\":[{\"id\":\"250100\",\"nama\":\"Biaya Gaji Yang Masi\",\"keterangan\":\"JUNI\",\"debet\":\"1,000,000.00\"},{\"id\":\"250100\",\"nama\":\"Biaya Gaji Yang Masi\",\"keterangan\":\"JUNI\",\"debet\":\"100,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"debet\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (133, 1, '2013-09-20 06:03:33', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_keluar', '{\"id_jurnal\":\"BCA201301\",\"id_transaksi\":\"0002\",\"tanggal\":\"11-06-2013\",\"bayar_kepada\":\"jOHAN\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"1234567\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"11-06-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"1,100,000.00\",\"baris-kb-keluar\":\"3\",\"kb_keluar\":[{\"id\":\"250100\",\"nama\":\"Biaya Gaji Yang Masi\",\"keterangan\":\"JUNI\",\"debet\":\"1,000,000.00\"},{\"id\":\"250100\",\"nama\":\"Biaya Gaji Yang Masi\",\"keterangan\":\"JUNI\",\"debet\":\"100,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"debet\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (134, 1, '2013-09-20 06:05:32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'create', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0001\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"asda\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"789\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1\",\"proyek\":\"PTest\",\"jumlah\":\"100,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"1231\",\"kredit\":\"100,000\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (135, 1, '2013-09-20 06:05:38', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'create', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0001\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"asda\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7890\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1\",\"proyek\":\"PTest\",\"jumlah\":\"100,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"1231\",\"kredit\":\"100,000\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (136, 1, '2013-09-20 06:05:46', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_terima', '{\"jurnal\":\"kas001\",\"transaksi\":\"0001\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (137, 1, '2013-09-20 06:05:54', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0001\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"asda\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"789\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"100,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"1231\",\"kredit\":\"100,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (138, 1, '2013-09-20 06:06:41', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'create', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0002\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"sdf\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7890\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1\",\"proyek\":\"PTest\",\"jumlah\":\"500,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"dsf\",\"kredit\":\"500,000\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (139, 1, '2013-09-20 06:06:55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_terima', '{\"jurnal\":\"kas001\",\"transaksi\":\"0002\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (140, 1, '2013-09-20 06:07:03', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0002\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"sdf\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7890\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"500,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"dsf\",\"kredit\":\"500,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (141, 1, '2013-09-20 06:07:19', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_terima', '{\"jurnal\":\"kas001\",\"transaksi\":\"0002\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (142, 1, '2013-09-20 06:08:24', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0002\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"sdf\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7890\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"500,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"dsf\",\"kredit\":\"500,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (143, 1, '2013-09-20 06:12:42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'create', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0003\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"sdfds\",\"cara_bayar\":\"tunai\",\"id_cek_giro\":\"\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1\",\"proyek\":\"PTest\",\"jumlah\":\"10,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"sdf\",\"kredit\":\"10,000\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (144, 1, '2013-09-20 06:12:52', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_terima', '{\"jurnal\":\"kas001\",\"transaksi\":\"0003\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (145, 1, '2013-09-20 06:13:01', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0003\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"sdfds\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"789\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"10,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"sdf\",\"kredit\":\"10,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (146, 1, '2013-09-20 06:13:06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0003\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"sdfds\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7890\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"10,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"sdf\",\"kredit\":\"10,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (147, 1, '2013-09-20 06:13:29', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_terima', '{\"jurnal\":\"kas001\",\"transaksi\":\"0003\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (148, 1, '2013-09-20 06:13:32', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0003\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"sdfds\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7890\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"10,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"sdf\",\"kredit\":\"10,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (149, 1, '2013-09-20 06:17:09', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_terima', '{\"jurnal\":\"kas001\",\"transaksi\":\"0003\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (150, 1, '2013-09-20 06:17:13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0003\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"sdfds\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7890\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"10,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"sdf\",\"kredit\":\"10,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (151, 1, '2013-09-20 06:17:25', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0003\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"sdfds\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7891\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"10,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"sdf\",\"kredit\":\"10,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (152, 1, '2013-09-20 06:17:34', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'read', 'kb_terima', '{\"jurnal\":\"kas001\",\"transaksi\":\"0002\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (153, 1, '2013-09-20 06:17:39', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0002\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"sdf\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7891\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"500,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"dsf\",\"kredit\":\"500,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (154, 1, '2013-09-20 06:17:46', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0002\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"sdf\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7890\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"500,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"dsf\",\"kredit\":\"500,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (155, 1, '2013-09-20 06:17:52', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0002\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"sdf\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7892\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1.00\",\"proyek\":\"PTest\",\"jumlah\":\"500,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"dsf\",\"kredit\":\"500,000.00\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (156, 1, '2013-09-20 06:18:39', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'create', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0004\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"545\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7891\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1\",\"proyek\":\"PTest\",\"jumlah\":\"80,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"1213\",\"kredit\":\"80,000\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (157, 1, '2013-09-20 06:18:55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'create', 'kb_terima', '{\"id_jurnal\":\"kas001\",\"id_transaksi\":\"0004\",\"tanggal\":\"20-09-2013\",\"terima_dari\":\"545\",\"cara_bayar\":\"giro\",\"id_cek_giro\":\"7893\",\"id_perkiraan\":\"110100\",\"id_currency\":\"RP.\",\"jatuh_tempo\":\"20-09-2013\",\"kurs\":\"1\",\"proyek\":\"PTest\",\"jumlah\":\"80,000.00\",\"baris-kb-terima\":\"2\",\"kb_terima\":[{\"id\":\"110100\",\"nama\":\"Kas HO\",\"keterangan\":\"1213\",\"kredit\":\"80,000\"},{\"id\":\"\",\"nama\":\"\",\"keterangan\":\"\",\"kredit\":\"\"}]}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (158, 1, '2013-09-21 06:56:13', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'user', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (159, 1, '2013-09-21 06:56:16', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'view', 'capabilities', '\"\"');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (160, 1, '2013-09-21 06:56:23', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '{\"id\":\"1\",\"capabilities\":[\"create_account\",\"read_account\",\"update_account\",\"delete_account\",\"create_batasan\",\"read_batasan\",\"update_batasan\",\"delete_batasan\",\"create_fixed_asset\",\"read_fixed_asset\",\"update_fixed_asset\",\"delete_fixed_asset\",\"create_stock\",\"read_stock\",\"update_stock\",\"delete_stock\",\"create_gudang\",\"read_gudang\",\"update_gudang\",\"delete_gudang\",\"create_group\",\"read_group\",\"update_group\",\"delete_group\",\"create_proyek\",\"read_proyek\",\"update_proyek\",\"delete_proyek\",\"create_customer\",\"read_customer\",\"update_customer\",\"delete_customer\",\"create_supplier\",\"read_supplier\",\"update_supplier\",\"delete_supplier\",\"create_currency\",\"read_currency\",\"update_currency\",\"delete_currency\",\"create_karyawan\",\"read_karyawan\",\"update_karyawan\",\"delete_karyawan\",\"create_jurnal_umum\",\"read_jurnal_umum\",\"update_jurnal_umum\",\"delete_jurnal_umum\",\"create_kb_keluar\",\"read_kb_keluar\",\"update_kb_keluar\",\"delete_kb_keluar\",\"create_kb_terima\",\"read_kb_terima\",\"update_kb_terima\",\"delete_kb_terima\",\"create_pendapatan\",\"read_pendapatan\",\"update_pendapatan\",\"delete_pendapatan\",\"create_pengeluaran\",\"read_pengeluaran\",\"update_pengeluaran\",\"delete_pengeluaran\",\"create_mutasi\",\"read_mutasi\",\"update_mutasi\",\"delete_mutasi\",\"create_penyesuaian\",\"read_penyesuaian\",\"update_penyesuaian\",\"delete_penyesuaian\",\"create_bap\",\"read_bap\",\"update_bap\",\"delete_bap\",\"create_istock\",\"read_istock\",\"update_istock\",\"delete_istock\",\"create_invoice_jasa\",\"read_invoice_jasa\",\"update_invoice_jasa\",\"delete_invoice_jasa\",\"create_request_beli\",\"read_request_beli\",\"update_request_beli\",\"delete_request_beli\",\"create_order_beli\",\"read_order_beli\",\"update_order_beli\",\"delete_order_beli\",\"create_terima_beli\",\"read_terima_beli\",\"update_terima_beli\",\"delete_terima_beli\",\"create_pembelian\",\"read_pembelian\",\"update_pembelian\",\"delete_pembelian\",\"create_pelpiutang\",\"read_pelpiutang\",\"update_pelpiutang\",\"delete_pelpiutang\",\"create_pelpiutangstock\",\"read_pelpiutangstock\",\"update_pelpiutangstock\",\"delete_pelpiutangstock\",\"create_pelhutang\",\"read_pelhutang\",\"update_pelhutang\",\"delete_pelhutang\",\"create_tolakgiropiutang\",\"read_tolakgiropiutang\",\"update_tolakgiropiutang\",\"delete_tolakgiropiutang\",\"create_tolakgirohutang\",\"read_tolakgirohutang\",\"update_tolakgirohutang\",\"delete_tolakgirohutang\",\"create_lap_jurnal\",\"read_lap_jurnal\",\"update_lap_jurnal\",\"delete_lap_jurnal\",\"create_lap_neraca_general\",\"read_lap_neraca_general\",\"update_lap_neraca_general\",\"delete_lap_neraca_general\",\"create_lap_neraca_detail\",\"read_lap_neraca_detail\",\"update_lap_neraca_detail\",\"delete_lap_neraca_detail\",\"create_lap_rugi_laba\",\"read_lap_rugi_laba\",\"update_lap_rugi_laba\",\"delete_lap_rugi_laba\",\"create_lap_buku_besar\",\"read_lap_buku_besar\",\"update_lap_buku_besar\",\"delete_lap_buku_besar\",\"create_lap_arus_kas\",\"read_lap_arus_kas\",\"update_lap_arus_kas\",\"delete_lap_arus_kas\",\"create_lap_fixed_asset\",\"read_lap_fixed_asset\",\"update_lap_fixed_asset\",\"delete_lap_fixed_asset\",\"create_proses_jurnal\",\"read_proses_jurnal\",\"update_proses_jurnal\",\"delete_proses_jurnal\",\"create_proses_posting\",\"read_proses_posting\",\"update_proses_posting\",\"delete_proses_posting\",\"create_tutup_buku\",\"read_tutup_buku\",\"update_tutup_buku\",\"delete_tutup_buku\",\"create_user\",\"read_user\",\"update_user\",\"delete_user\",\"create_company\",\"read_company\",\"update_company\",\"delete_company\",\"create_backup_database\",\"read_backup_database\",\"update_backup_database\",\"delete_backup_database\"],\"change\":\"Update Capabilities\"}');
INSERT INTO gl_xlog (`id`, `user_id`, `time`, `ip_address`, `user_agent`, `action`, `module`, `data`) VALUES (161, 1, '2013-09-21 06:56:23', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 'update', 'capabilities', '\"success\"');


#
# TABLE STRUCTURE FOR: gl_xlogin_attempts
#

DROP TABLE IF EXISTS gl_xlogin_attempts;

CREATE TABLE `gl_xlogin_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

#
# TABLE STRUCTURE FOR: gl_xoptions
#

DROP TABLE IF EXISTS gl_xoptions;

CREATE TABLE `gl_xoptions` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(64) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  PRIMARY KEY (`option_id`,`option_name`),
  KEY `option_name` (`option_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO gl_xoptions (`option_id`, `option_name`, `option_value`) VALUES (1, 'version', '0.2.1');
INSERT INTO gl_xoptions (`option_id`, `option_name`, `option_value`) VALUES (2, 'db_version', '79');
INSERT INTO gl_xoptions (`option_id`, `option_name`, `option_value`) VALUES (3, 'release_date', '2012-09-05');


#
# TABLE STRUCTURE FOR: gl_xsessions
#

DROP TABLE IF EXISTS gl_xsessions;

CREATE TABLE `gl_xsessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('2cea3c5aee160fe614802a791a6817f6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379739843, 'a:5:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:6:\"migent\";s:12:\"capabilities\";s:5166:\"a:172:{i:0;s:14:\"create_account\";i:1;s:12:\"read_account\";i:2;s:14:\"update_account\";i:3;s:14:\"delete_account\";i:4;s:14:\"create_batasan\";i:5;s:12:\"read_batasan\";i:6;s:14:\"update_batasan\";i:7;s:14:\"delete_batasan\";i:8;s:18:\"create_fixed_asset\";i:9;s:16:\"read_fixed_asset\";i:10;s:18:\"update_fixed_asset\";i:11;s:18:\"delete_fixed_asset\";i:12;s:12:\"create_stock\";i:13;s:10:\"read_stock\";i:14;s:12:\"update_stock\";i:15;s:12:\"delete_stock\";i:16;s:13:\"create_gudang\";i:17;s:11:\"read_gudang\";i:18;s:13:\"update_gudang\";i:19;s:13:\"delete_gudang\";i:20;s:12:\"create_group\";i:21;s:10:\"read_group\";i:22;s:12:\"update_group\";i:23;s:12:\"delete_group\";i:24;s:13:\"create_proyek\";i:25;s:11:\"read_proyek\";i:26;s:13:\"update_proyek\";i:27;s:13:\"delete_proyek\";i:28;s:15:\"create_customer\";i:29;s:13:\"read_customer\";i:30;s:15:\"update_customer\";i:31;s:15:\"delete_customer\";i:32;s:15:\"create_supplier\";i:33;s:13:\"read_supplier\";i:34;s:15:\"update_supplier\";i:35;s:15:\"delete_supplier\";i:36;s:15:\"create_currency\";i:37;s:13:\"read_currency\";i:38;s:15:\"update_currency\";i:39;s:15:\"delete_currency\";i:40;s:15:\"create_karyawan\";i:41;s:13:\"read_karyawan\";i:42;s:15:\"update_karyawan\";i:43;s:15:\"delete_karyawan\";i:44;s:18:\"create_jurnal_umum\";i:45;s:16:\"read_jurnal_umum\";i:46;s:18:\"update_jurnal_umum\";i:47;s:18:\"delete_jurnal_umum\";i:48;s:16:\"create_kb_keluar\";i:49;s:14:\"read_kb_keluar\";i:50;s:16:\"update_kb_keluar\";i:51;s:16:\"delete_kb_keluar\";i:52;s:16:\"create_kb_terima\";i:53;s:14:\"read_kb_terima\";i:54;s:16:\"update_kb_terima\";i:55;s:16:\"delete_kb_terima\";i:56;s:17:\"create_pendapatan\";i:57;s:15:\"read_pendapatan\";i:58;s:17:\"update_pendapatan\";i:59;s:17:\"delete_pendapatan\";i:60;s:18:\"create_pengeluaran\";i:61;s:16:\"read_pengeluaran\";i:62;s:18:\"update_pengeluaran\";i:63;s:18:\"delete_pengeluaran\";i:64;s:13:\"create_mutasi\";i:65;s:11:\"read_mutasi\";i:66;s:13:\"update_mutasi\";i:67;s:13:\"delete_mutasi\";i:68;s:18:\"create_penyesuaian\";i:69;s:16:\"read_penyesuaian\";i:70;s:18:\"update_penyesuaian\";i:71;s:18:\"delete_penyesuaian\";i:72;s:10:\"create_bap\";i:73;s:8:\"read_bap\";i:74;s:10:\"update_bap\";i:75;s:10:\"delete_bap\";i:76;s:13:\"create_istock\";i:77;s:11:\"read_istock\";i:78;s:13:\"update_istock\";i:79;s:13:\"delete_istock\";i:80;s:19:\"create_invoice_jasa\";i:81;s:17:\"read_invoice_jasa\";i:82;s:19:\"update_invoice_jasa\";i:83;s:19:\"delete_invoice_jasa\";i:84;s:19:\"create_request_beli\";i:85;s:17:\"read_request_beli\";i:86;s:19:\"update_request_beli\";i:87;s:19:\"delete_request_beli\";i:88;s:17:\"create_order_beli\";i:89;s:15:\"read_order_beli\";i:90;s:17:\"update_order_beli\";i:91;s:17:\"delete_order_beli\";i:92;s:18:\"create_terima_beli\";i:93;s:16:\"read_terima_beli\";i:94;s:18:\"update_terima_beli\";i:95;s:18:\"delete_terima_beli\";i:96;s:16:\"create_pembelian\";i:97;s:14:\"read_pembelian\";i:98;s:16:\"update_pembelian\";i:99;s:16:\"delete_pembelian\";i:100;s:17:\"create_pelpiutang\";i:101;s:15:\"read_pelpiutang\";i:102;s:17:\"update_pelpiutang\";i:103;s:17:\"delete_pelpiutang\";i:104;s:22:\"create_pelpiutangstock\";i:105;s:20:\"read_pelpiutangstock\";i:106;s:22:\"update_pelpiutangstock\";i:107;s:22:\"delete_pelpiutangstock\";i:108;s:16:\"create_pelhutang\";i:109;s:14:\"read_pelhutang\";i:110;s:16:\"update_pelhutang\";i:111;s:16:\"delete_pelhutang\";i:112;s:23:\"create_tolakgiropiutang\";i:113;s:21:\"read_tolakgiropiutang\";i:114;s:23:\"update_tolakgiropiutang\";i:115;s:23:\"delete_tolakgiropiutang\";i:116;s:22:\"create_tolakgirohutang\";i:117;s:20:\"read_tolakgirohutang\";i:118;s:22:\"update_tolakgirohutang\";i:119;s:22:\"delete_tolakgirohutang\";i:120;s:17:\"create_lap_jurnal\";i:121;s:15:\"read_lap_jurnal\";i:122;s:17:\"update_lap_jurnal\";i:123;s:17:\"delete_lap_jurnal\";i:124;s:25:\"create_lap_neraca_general\";i:125;s:23:\"read_lap_neraca_general\";i:126;s:25:\"update_lap_neraca_general\";i:127;s:25:\"delete_lap_neraca_general\";i:128;s:24:\"create_lap_neraca_detail\";i:129;s:22:\"read_lap_neraca_detail\";i:130;s:24:\"update_lap_neraca_detail\";i:131;s:24:\"delete_lap_neraca_detail\";i:132;s:20:\"create_lap_rugi_laba\";i:133;s:18:\"read_lap_rugi_laba\";i:134;s:20:\"update_lap_rugi_laba\";i:135;s:20:\"delete_lap_rugi_laba\";i:136;s:21:\"create_lap_buku_besar\";i:137;s:19:\"read_lap_buku_besar\";i:138;s:21:\"update_lap_buku_besar\";i:139;s:21:\"delete_lap_buku_besar\";i:140;s:19:\"create_lap_arus_kas\";i:141;s:17:\"read_lap_arus_kas\";i:142;s:19:\"update_lap_arus_kas\";i:143;s:19:\"delete_lap_arus_kas\";i:144;s:22:\"create_lap_fixed_asset\";i:145;s:20:\"read_lap_fixed_asset\";i:146;s:22:\"update_lap_fixed_asset\";i:147;s:22:\"delete_lap_fixed_asset\";i:148;s:20:\"create_proses_jurnal\";i:149;s:18:\"read_proses_jurnal\";i:150;s:20:\"update_proses_jurnal\";i:151;s:20:\"delete_proses_jurnal\";i:152;s:21:\"create_proses_posting\";i:153;s:19:\"read_proses_posting\";i:154;s:21:\"update_proses_posting\";i:155;s:21:\"delete_proses_posting\";i:156;s:17:\"create_tutup_buku\";i:157;s:15:\"read_tutup_buku\";i:158;s:17:\"update_tutup_buku\";i:159;s:17:\"delete_tutup_buku\";i:160;s:11:\"create_user\";i:161;s:9:\"read_user\";i:162;s:11:\"update_user\";i:163;s:11:\"delete_user\";i:164;s:14:\"create_company\";i:165;s:12:\"read_company\";i:166;s:14:\"update_company\";i:167;s:14:\"delete_company\";i:168;s:22:\"create_backup_database\";i:169;s:20:\"read_backup_database\";i:170;s:22:\"update_backup_database\";i:171;s:22:\"delete_backup_database\";}\";s:6:\"status\";s:1:\"1\";}');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('2d8080916d44f1093b4e294f78d64b42', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379908240, '');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('3992261885e423b105b7a49d4eb33d48', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379908240, '');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('4143f98be51b57b57d0fd155ffd0382b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379910806, 'a:5:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:6:\"migent\";s:12:\"capabilities\";s:5166:\"a:172:{i:0;s:14:\"create_account\";i:1;s:12:\"read_account\";i:2;s:14:\"update_account\";i:3;s:14:\"delete_account\";i:4;s:14:\"create_batasan\";i:5;s:12:\"read_batasan\";i:6;s:14:\"update_batasan\";i:7;s:14:\"delete_batasan\";i:8;s:18:\"create_fixed_asset\";i:9;s:16:\"read_fixed_asset\";i:10;s:18:\"update_fixed_asset\";i:11;s:18:\"delete_fixed_asset\";i:12;s:12:\"create_stock\";i:13;s:10:\"read_stock\";i:14;s:12:\"update_stock\";i:15;s:12:\"delete_stock\";i:16;s:13:\"create_gudang\";i:17;s:11:\"read_gudang\";i:18;s:13:\"update_gudang\";i:19;s:13:\"delete_gudang\";i:20;s:12:\"create_group\";i:21;s:10:\"read_group\";i:22;s:12:\"update_group\";i:23;s:12:\"delete_group\";i:24;s:13:\"create_proyek\";i:25;s:11:\"read_proyek\";i:26;s:13:\"update_proyek\";i:27;s:13:\"delete_proyek\";i:28;s:15:\"create_customer\";i:29;s:13:\"read_customer\";i:30;s:15:\"update_customer\";i:31;s:15:\"delete_customer\";i:32;s:15:\"create_supplier\";i:33;s:13:\"read_supplier\";i:34;s:15:\"update_supplier\";i:35;s:15:\"delete_supplier\";i:36;s:15:\"create_currency\";i:37;s:13:\"read_currency\";i:38;s:15:\"update_currency\";i:39;s:15:\"delete_currency\";i:40;s:15:\"create_karyawan\";i:41;s:13:\"read_karyawan\";i:42;s:15:\"update_karyawan\";i:43;s:15:\"delete_karyawan\";i:44;s:18:\"create_jurnal_umum\";i:45;s:16:\"read_jurnal_umum\";i:46;s:18:\"update_jurnal_umum\";i:47;s:18:\"delete_jurnal_umum\";i:48;s:16:\"create_kb_keluar\";i:49;s:14:\"read_kb_keluar\";i:50;s:16:\"update_kb_keluar\";i:51;s:16:\"delete_kb_keluar\";i:52;s:16:\"create_kb_terima\";i:53;s:14:\"read_kb_terima\";i:54;s:16:\"update_kb_terima\";i:55;s:16:\"delete_kb_terima\";i:56;s:17:\"create_pendapatan\";i:57;s:15:\"read_pendapatan\";i:58;s:17:\"update_pendapatan\";i:59;s:17:\"delete_pendapatan\";i:60;s:18:\"create_pengeluaran\";i:61;s:16:\"read_pengeluaran\";i:62;s:18:\"update_pengeluaran\";i:63;s:18:\"delete_pengeluaran\";i:64;s:13:\"create_mutasi\";i:65;s:11:\"read_mutasi\";i:66;s:13:\"update_mutasi\";i:67;s:13:\"delete_mutasi\";i:68;s:18:\"create_penyesuaian\";i:69;s:16:\"read_penyesuaian\";i:70;s:18:\"update_penyesuaian\";i:71;s:18:\"delete_penyesuaian\";i:72;s:10:\"create_bap\";i:73;s:8:\"read_bap\";i:74;s:10:\"update_bap\";i:75;s:10:\"delete_bap\";i:76;s:13:\"create_istock\";i:77;s:11:\"read_istock\";i:78;s:13:\"update_istock\";i:79;s:13:\"delete_istock\";i:80;s:19:\"create_invoice_jasa\";i:81;s:17:\"read_invoice_jasa\";i:82;s:19:\"update_invoice_jasa\";i:83;s:19:\"delete_invoice_jasa\";i:84;s:19:\"create_request_beli\";i:85;s:17:\"read_request_beli\";i:86;s:19:\"update_request_beli\";i:87;s:19:\"delete_request_beli\";i:88;s:17:\"create_order_beli\";i:89;s:15:\"read_order_beli\";i:90;s:17:\"update_order_beli\";i:91;s:17:\"delete_order_beli\";i:92;s:18:\"create_terima_beli\";i:93;s:16:\"read_terima_beli\";i:94;s:18:\"update_terima_beli\";i:95;s:18:\"delete_terima_beli\";i:96;s:16:\"create_pembelian\";i:97;s:14:\"read_pembelian\";i:98;s:16:\"update_pembelian\";i:99;s:16:\"delete_pembelian\";i:100;s:17:\"create_pelpiutang\";i:101;s:15:\"read_pelpiutang\";i:102;s:17:\"update_pelpiutang\";i:103;s:17:\"delete_pelpiutang\";i:104;s:22:\"create_pelpiutangstock\";i:105;s:20:\"read_pelpiutangstock\";i:106;s:22:\"update_pelpiutangstock\";i:107;s:22:\"delete_pelpiutangstock\";i:108;s:16:\"create_pelhutang\";i:109;s:14:\"read_pelhutang\";i:110;s:16:\"update_pelhutang\";i:111;s:16:\"delete_pelhutang\";i:112;s:23:\"create_tolakgiropiutang\";i:113;s:21:\"read_tolakgiropiutang\";i:114;s:23:\"update_tolakgiropiutang\";i:115;s:23:\"delete_tolakgiropiutang\";i:116;s:22:\"create_tolakgirohutang\";i:117;s:20:\"read_tolakgirohutang\";i:118;s:22:\"update_tolakgirohutang\";i:119;s:22:\"delete_tolakgirohutang\";i:120;s:17:\"create_lap_jurnal\";i:121;s:15:\"read_lap_jurnal\";i:122;s:17:\"update_lap_jurnal\";i:123;s:17:\"delete_lap_jurnal\";i:124;s:25:\"create_lap_neraca_general\";i:125;s:23:\"read_lap_neraca_general\";i:126;s:25:\"update_lap_neraca_general\";i:127;s:25:\"delete_lap_neraca_general\";i:128;s:24:\"create_lap_neraca_detail\";i:129;s:22:\"read_lap_neraca_detail\";i:130;s:24:\"update_lap_neraca_detail\";i:131;s:24:\"delete_lap_neraca_detail\";i:132;s:20:\"create_lap_rugi_laba\";i:133;s:18:\"read_lap_rugi_laba\";i:134;s:20:\"update_lap_rugi_laba\";i:135;s:20:\"delete_lap_rugi_laba\";i:136;s:21:\"create_lap_buku_besar\";i:137;s:19:\"read_lap_buku_besar\";i:138;s:21:\"update_lap_buku_besar\";i:139;s:21:\"delete_lap_buku_besar\";i:140;s:19:\"create_lap_arus_kas\";i:141;s:17:\"read_lap_arus_kas\";i:142;s:19:\"update_lap_arus_kas\";i:143;s:19:\"delete_lap_arus_kas\";i:144;s:22:\"create_lap_fixed_asset\";i:145;s:20:\"read_lap_fixed_asset\";i:146;s:22:\"update_lap_fixed_asset\";i:147;s:22:\"delete_lap_fixed_asset\";i:148;s:20:\"create_proses_jurnal\";i:149;s:18:\"read_proses_jurnal\";i:150;s:20:\"update_proses_jurnal\";i:151;s:20:\"delete_proses_jurnal\";i:152;s:21:\"create_proses_posting\";i:153;s:19:\"read_proses_posting\";i:154;s:21:\"update_proses_posting\";i:155;s:21:\"delete_proses_posting\";i:156;s:17:\"create_tutup_buku\";i:157;s:15:\"read_tutup_buku\";i:158;s:17:\"update_tutup_buku\";i:159;s:17:\"delete_tutup_buku\";i:160;s:11:\"create_user\";i:161;s:9:\"read_user\";i:162;s:11:\"update_user\";i:163;s:11:\"delete_user\";i:164;s:14:\"create_company\";i:165;s:12:\"read_company\";i:166;s:14:\"update_company\";i:167;s:14:\"delete_company\";i:168;s:22:\"create_backup_database\";i:169;s:20:\"read_backup_database\";i:170;s:22:\"update_backup_database\";i:171;s:22:\"delete_backup_database\";}\";s:6:\"status\";s:1:\"1\";}');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('53e77189a0fd052de23570ca46c63364', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379913189, 'a:5:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:6:\"migent\";s:12:\"capabilities\";s:5166:\"a:172:{i:0;s:14:\"create_account\";i:1;s:12:\"read_account\";i:2;s:14:\"update_account\";i:3;s:14:\"delete_account\";i:4;s:14:\"create_batasan\";i:5;s:12:\"read_batasan\";i:6;s:14:\"update_batasan\";i:7;s:14:\"delete_batasan\";i:8;s:18:\"create_fixed_asset\";i:9;s:16:\"read_fixed_asset\";i:10;s:18:\"update_fixed_asset\";i:11;s:18:\"delete_fixed_asset\";i:12;s:12:\"create_stock\";i:13;s:10:\"read_stock\";i:14;s:12:\"update_stock\";i:15;s:12:\"delete_stock\";i:16;s:13:\"create_gudang\";i:17;s:11:\"read_gudang\";i:18;s:13:\"update_gudang\";i:19;s:13:\"delete_gudang\";i:20;s:12:\"create_group\";i:21;s:10:\"read_group\";i:22;s:12:\"update_group\";i:23;s:12:\"delete_group\";i:24;s:13:\"create_proyek\";i:25;s:11:\"read_proyek\";i:26;s:13:\"update_proyek\";i:27;s:13:\"delete_proyek\";i:28;s:15:\"create_customer\";i:29;s:13:\"read_customer\";i:30;s:15:\"update_customer\";i:31;s:15:\"delete_customer\";i:32;s:15:\"create_supplier\";i:33;s:13:\"read_supplier\";i:34;s:15:\"update_supplier\";i:35;s:15:\"delete_supplier\";i:36;s:15:\"create_currency\";i:37;s:13:\"read_currency\";i:38;s:15:\"update_currency\";i:39;s:15:\"delete_currency\";i:40;s:15:\"create_karyawan\";i:41;s:13:\"read_karyawan\";i:42;s:15:\"update_karyawan\";i:43;s:15:\"delete_karyawan\";i:44;s:18:\"create_jurnal_umum\";i:45;s:16:\"read_jurnal_umum\";i:46;s:18:\"update_jurnal_umum\";i:47;s:18:\"delete_jurnal_umum\";i:48;s:16:\"create_kb_keluar\";i:49;s:14:\"read_kb_keluar\";i:50;s:16:\"update_kb_keluar\";i:51;s:16:\"delete_kb_keluar\";i:52;s:16:\"create_kb_terima\";i:53;s:14:\"read_kb_terima\";i:54;s:16:\"update_kb_terima\";i:55;s:16:\"delete_kb_terima\";i:56;s:17:\"create_pendapatan\";i:57;s:15:\"read_pendapatan\";i:58;s:17:\"update_pendapatan\";i:59;s:17:\"delete_pendapatan\";i:60;s:18:\"create_pengeluaran\";i:61;s:16:\"read_pengeluaran\";i:62;s:18:\"update_pengeluaran\";i:63;s:18:\"delete_pengeluaran\";i:64;s:13:\"create_mutasi\";i:65;s:11:\"read_mutasi\";i:66;s:13:\"update_mutasi\";i:67;s:13:\"delete_mutasi\";i:68;s:18:\"create_penyesuaian\";i:69;s:16:\"read_penyesuaian\";i:70;s:18:\"update_penyesuaian\";i:71;s:18:\"delete_penyesuaian\";i:72;s:10:\"create_bap\";i:73;s:8:\"read_bap\";i:74;s:10:\"update_bap\";i:75;s:10:\"delete_bap\";i:76;s:13:\"create_istock\";i:77;s:11:\"read_istock\";i:78;s:13:\"update_istock\";i:79;s:13:\"delete_istock\";i:80;s:19:\"create_invoice_jasa\";i:81;s:17:\"read_invoice_jasa\";i:82;s:19:\"update_invoice_jasa\";i:83;s:19:\"delete_invoice_jasa\";i:84;s:19:\"create_request_beli\";i:85;s:17:\"read_request_beli\";i:86;s:19:\"update_request_beli\";i:87;s:19:\"delete_request_beli\";i:88;s:17:\"create_order_beli\";i:89;s:15:\"read_order_beli\";i:90;s:17:\"update_order_beli\";i:91;s:17:\"delete_order_beli\";i:92;s:18:\"create_terima_beli\";i:93;s:16:\"read_terima_beli\";i:94;s:18:\"update_terima_beli\";i:95;s:18:\"delete_terima_beli\";i:96;s:16:\"create_pembelian\";i:97;s:14:\"read_pembelian\";i:98;s:16:\"update_pembelian\";i:99;s:16:\"delete_pembelian\";i:100;s:17:\"create_pelpiutang\";i:101;s:15:\"read_pelpiutang\";i:102;s:17:\"update_pelpiutang\";i:103;s:17:\"delete_pelpiutang\";i:104;s:22:\"create_pelpiutangstock\";i:105;s:20:\"read_pelpiutangstock\";i:106;s:22:\"update_pelpiutangstock\";i:107;s:22:\"delete_pelpiutangstock\";i:108;s:16:\"create_pelhutang\";i:109;s:14:\"read_pelhutang\";i:110;s:16:\"update_pelhutang\";i:111;s:16:\"delete_pelhutang\";i:112;s:23:\"create_tolakgiropiutang\";i:113;s:21:\"read_tolakgiropiutang\";i:114;s:23:\"update_tolakgiropiutang\";i:115;s:23:\"delete_tolakgiropiutang\";i:116;s:22:\"create_tolakgirohutang\";i:117;s:20:\"read_tolakgirohutang\";i:118;s:22:\"update_tolakgirohutang\";i:119;s:22:\"delete_tolakgirohutang\";i:120;s:17:\"create_lap_jurnal\";i:121;s:15:\"read_lap_jurnal\";i:122;s:17:\"update_lap_jurnal\";i:123;s:17:\"delete_lap_jurnal\";i:124;s:25:\"create_lap_neraca_general\";i:125;s:23:\"read_lap_neraca_general\";i:126;s:25:\"update_lap_neraca_general\";i:127;s:25:\"delete_lap_neraca_general\";i:128;s:24:\"create_lap_neraca_detail\";i:129;s:22:\"read_lap_neraca_detail\";i:130;s:24:\"update_lap_neraca_detail\";i:131;s:24:\"delete_lap_neraca_detail\";i:132;s:20:\"create_lap_rugi_laba\";i:133;s:18:\"read_lap_rugi_laba\";i:134;s:20:\"update_lap_rugi_laba\";i:135;s:20:\"delete_lap_rugi_laba\";i:136;s:21:\"create_lap_buku_besar\";i:137;s:19:\"read_lap_buku_besar\";i:138;s:21:\"update_lap_buku_besar\";i:139;s:21:\"delete_lap_buku_besar\";i:140;s:19:\"create_lap_arus_kas\";i:141;s:17:\"read_lap_arus_kas\";i:142;s:19:\"update_lap_arus_kas\";i:143;s:19:\"delete_lap_arus_kas\";i:144;s:22:\"create_lap_fixed_asset\";i:145;s:20:\"read_lap_fixed_asset\";i:146;s:22:\"update_lap_fixed_asset\";i:147;s:22:\"delete_lap_fixed_asset\";i:148;s:20:\"create_proses_jurnal\";i:149;s:18:\"read_proses_jurnal\";i:150;s:20:\"update_proses_jurnal\";i:151;s:20:\"delete_proses_jurnal\";i:152;s:21:\"create_proses_posting\";i:153;s:19:\"read_proses_posting\";i:154;s:21:\"update_proses_posting\";i:155;s:21:\"delete_proses_posting\";i:156;s:17:\"create_tutup_buku\";i:157;s:15:\"read_tutup_buku\";i:158;s:17:\"update_tutup_buku\";i:159;s:17:\"delete_tutup_buku\";i:160;s:11:\"create_user\";i:161;s:9:\"read_user\";i:162;s:11:\"update_user\";i:163;s:11:\"delete_user\";i:164;s:14:\"create_company\";i:165;s:12:\"read_company\";i:166;s:14:\"update_company\";i:167;s:14:\"delete_company\";i:168;s:22:\"create_backup_database\";i:169;s:20:\"read_backup_database\";i:170;s:22:\"update_backup_database\";i:171;s:22:\"delete_backup_database\";}\";s:6:\"status\";s:1:\"1\";}');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('578f4c7135803ff3682ea266296bcdba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379400974, '');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('5fd2d1f63798143c563dc4dc4858a930', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379908197, 'a:5:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:6:\"migent\";s:12:\"capabilities\";s:5166:\"a:172:{i:0;s:14:\"create_account\";i:1;s:12:\"read_account\";i:2;s:14:\"update_account\";i:3;s:14:\"delete_account\";i:4;s:14:\"create_batasan\";i:5;s:12:\"read_batasan\";i:6;s:14:\"update_batasan\";i:7;s:14:\"delete_batasan\";i:8;s:18:\"create_fixed_asset\";i:9;s:16:\"read_fixed_asset\";i:10;s:18:\"update_fixed_asset\";i:11;s:18:\"delete_fixed_asset\";i:12;s:12:\"create_stock\";i:13;s:10:\"read_stock\";i:14;s:12:\"update_stock\";i:15;s:12:\"delete_stock\";i:16;s:13:\"create_gudang\";i:17;s:11:\"read_gudang\";i:18;s:13:\"update_gudang\";i:19;s:13:\"delete_gudang\";i:20;s:12:\"create_group\";i:21;s:10:\"read_group\";i:22;s:12:\"update_group\";i:23;s:12:\"delete_group\";i:24;s:13:\"create_proyek\";i:25;s:11:\"read_proyek\";i:26;s:13:\"update_proyek\";i:27;s:13:\"delete_proyek\";i:28;s:15:\"create_customer\";i:29;s:13:\"read_customer\";i:30;s:15:\"update_customer\";i:31;s:15:\"delete_customer\";i:32;s:15:\"create_supplier\";i:33;s:13:\"read_supplier\";i:34;s:15:\"update_supplier\";i:35;s:15:\"delete_supplier\";i:36;s:15:\"create_currency\";i:37;s:13:\"read_currency\";i:38;s:15:\"update_currency\";i:39;s:15:\"delete_currency\";i:40;s:15:\"create_karyawan\";i:41;s:13:\"read_karyawan\";i:42;s:15:\"update_karyawan\";i:43;s:15:\"delete_karyawan\";i:44;s:18:\"create_jurnal_umum\";i:45;s:16:\"read_jurnal_umum\";i:46;s:18:\"update_jurnal_umum\";i:47;s:18:\"delete_jurnal_umum\";i:48;s:16:\"create_kb_keluar\";i:49;s:14:\"read_kb_keluar\";i:50;s:16:\"update_kb_keluar\";i:51;s:16:\"delete_kb_keluar\";i:52;s:16:\"create_kb_terima\";i:53;s:14:\"read_kb_terima\";i:54;s:16:\"update_kb_terima\";i:55;s:16:\"delete_kb_terima\";i:56;s:17:\"create_pendapatan\";i:57;s:15:\"read_pendapatan\";i:58;s:17:\"update_pendapatan\";i:59;s:17:\"delete_pendapatan\";i:60;s:18:\"create_pengeluaran\";i:61;s:16:\"read_pengeluaran\";i:62;s:18:\"update_pengeluaran\";i:63;s:18:\"delete_pengeluaran\";i:64;s:13:\"create_mutasi\";i:65;s:11:\"read_mutasi\";i:66;s:13:\"update_mutasi\";i:67;s:13:\"delete_mutasi\";i:68;s:18:\"create_penyesuaian\";i:69;s:16:\"read_penyesuaian\";i:70;s:18:\"update_penyesuaian\";i:71;s:18:\"delete_penyesuaian\";i:72;s:10:\"create_bap\";i:73;s:8:\"read_bap\";i:74;s:10:\"update_bap\";i:75;s:10:\"delete_bap\";i:76;s:13:\"create_istock\";i:77;s:11:\"read_istock\";i:78;s:13:\"update_istock\";i:79;s:13:\"delete_istock\";i:80;s:19:\"create_invoice_jasa\";i:81;s:17:\"read_invoice_jasa\";i:82;s:19:\"update_invoice_jasa\";i:83;s:19:\"delete_invoice_jasa\";i:84;s:19:\"create_request_beli\";i:85;s:17:\"read_request_beli\";i:86;s:19:\"update_request_beli\";i:87;s:19:\"delete_request_beli\";i:88;s:17:\"create_order_beli\";i:89;s:15:\"read_order_beli\";i:90;s:17:\"update_order_beli\";i:91;s:17:\"delete_order_beli\";i:92;s:18:\"create_terima_beli\";i:93;s:16:\"read_terima_beli\";i:94;s:18:\"update_terima_beli\";i:95;s:18:\"delete_terima_beli\";i:96;s:16:\"create_pembelian\";i:97;s:14:\"read_pembelian\";i:98;s:16:\"update_pembelian\";i:99;s:16:\"delete_pembelian\";i:100;s:17:\"create_pelpiutang\";i:101;s:15:\"read_pelpiutang\";i:102;s:17:\"update_pelpiutang\";i:103;s:17:\"delete_pelpiutang\";i:104;s:22:\"create_pelpiutangstock\";i:105;s:20:\"read_pelpiutangstock\";i:106;s:22:\"update_pelpiutangstock\";i:107;s:22:\"delete_pelpiutangstock\";i:108;s:16:\"create_pelhutang\";i:109;s:14:\"read_pelhutang\";i:110;s:16:\"update_pelhutang\";i:111;s:16:\"delete_pelhutang\";i:112;s:23:\"create_tolakgiropiutang\";i:113;s:21:\"read_tolakgiropiutang\";i:114;s:23:\"update_tolakgiropiutang\";i:115;s:23:\"delete_tolakgiropiutang\";i:116;s:22:\"create_tolakgirohutang\";i:117;s:20:\"read_tolakgirohutang\";i:118;s:22:\"update_tolakgirohutang\";i:119;s:22:\"delete_tolakgirohutang\";i:120;s:17:\"create_lap_jurnal\";i:121;s:15:\"read_lap_jurnal\";i:122;s:17:\"update_lap_jurnal\";i:123;s:17:\"delete_lap_jurnal\";i:124;s:25:\"create_lap_neraca_general\";i:125;s:23:\"read_lap_neraca_general\";i:126;s:25:\"update_lap_neraca_general\";i:127;s:25:\"delete_lap_neraca_general\";i:128;s:24:\"create_lap_neraca_detail\";i:129;s:22:\"read_lap_neraca_detail\";i:130;s:24:\"update_lap_neraca_detail\";i:131;s:24:\"delete_lap_neraca_detail\";i:132;s:20:\"create_lap_rugi_laba\";i:133;s:18:\"read_lap_rugi_laba\";i:134;s:20:\"update_lap_rugi_laba\";i:135;s:20:\"delete_lap_rugi_laba\";i:136;s:21:\"create_lap_buku_besar\";i:137;s:19:\"read_lap_buku_besar\";i:138;s:21:\"update_lap_buku_besar\";i:139;s:21:\"delete_lap_buku_besar\";i:140;s:19:\"create_lap_arus_kas\";i:141;s:17:\"read_lap_arus_kas\";i:142;s:19:\"update_lap_arus_kas\";i:143;s:19:\"delete_lap_arus_kas\";i:144;s:22:\"create_lap_fixed_asset\";i:145;s:20:\"read_lap_fixed_asset\";i:146;s:22:\"update_lap_fixed_asset\";i:147;s:22:\"delete_lap_fixed_asset\";i:148;s:20:\"create_proses_jurnal\";i:149;s:18:\"read_proses_jurnal\";i:150;s:20:\"update_proses_jurnal\";i:151;s:20:\"delete_proses_jurnal\";i:152;s:21:\"create_proses_posting\";i:153;s:19:\"read_proses_posting\";i:154;s:21:\"update_proses_posting\";i:155;s:21:\"delete_proses_posting\";i:156;s:17:\"create_tutup_buku\";i:157;s:15:\"read_tutup_buku\";i:158;s:17:\"update_tutup_buku\";i:159;s:17:\"delete_tutup_buku\";i:160;s:11:\"create_user\";i:161;s:9:\"read_user\";i:162;s:11:\"update_user\";i:163;s:11:\"delete_user\";i:164;s:14:\"create_company\";i:165;s:12:\"read_company\";i:166;s:14:\"update_company\";i:167;s:14:\"delete_company\";i:168;s:22:\"create_backup_database\";i:169;s:20:\"read_backup_database\";i:170;s:22:\"update_backup_database\";i:171;s:22:\"delete_backup_database\";}\";s:6:\"status\";s:1:\"1\";}');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('6f3ead401d1788ac736a4d6209a4c951', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379474098, 'a:5:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:6:\"migent\";s:12:\"capabilities\";s:4618:\"a:156:{i:0;s:14:\"create_account\";i:1;s:12:\"read_account\";i:2;s:14:\"update_account\";i:3;s:14:\"delete_account\";i:4;s:14:\"create_batasan\";i:5;s:12:\"read_batasan\";i:6;s:14:\"update_batasan\";i:7;s:14:\"delete_batasan\";i:8;s:18:\"create_fixed_asset\";i:9;s:16:\"read_fixed_asset\";i:10;s:18:\"update_fixed_asset\";i:11;s:18:\"delete_fixed_asset\";i:12;s:12:\"create_stock\";i:13;s:10:\"read_stock\";i:14;s:12:\"update_stock\";i:15;s:12:\"delete_stock\";i:16;s:13:\"create_gudang\";i:17;s:11:\"read_gudang\";i:18;s:13:\"update_gudang\";i:19;s:13:\"delete_gudang\";i:20;s:12:\"create_group\";i:21;s:10:\"read_group\";i:22;s:12:\"update_group\";i:23;s:12:\"delete_group\";i:24;s:13:\"create_proyek\";i:25;s:11:\"read_proyek\";i:26;s:13:\"update_proyek\";i:27;s:13:\"delete_proyek\";i:28;s:15:\"create_customer\";i:29;s:13:\"read_customer\";i:30;s:15:\"update_customer\";i:31;s:15:\"delete_customer\";i:32;s:15:\"create_supplier\";i:33;s:13:\"read_supplier\";i:34;s:15:\"update_supplier\";i:35;s:15:\"delete_supplier\";i:36;s:15:\"create_currency\";i:37;s:13:\"read_currency\";i:38;s:15:\"update_currency\";i:39;s:15:\"delete_currency\";i:40;s:15:\"create_karyawan\";i:41;s:13:\"read_karyawan\";i:42;s:15:\"update_karyawan\";i:43;s:15:\"delete_karyawan\";i:44;s:18:\"create_jurnal_umum\";i:45;s:16:\"read_jurnal_umum\";i:46;s:18:\"update_jurnal_umum\";i:47;s:18:\"delete_jurnal_umum\";i:48;s:16:\"create_kb_keluar\";i:49;s:14:\"read_kb_keluar\";i:50;s:16:\"update_kb_keluar\";i:51;s:16:\"delete_kb_keluar\";i:52;s:16:\"create_kb_terima\";i:53;s:14:\"read_kb_terima\";i:54;s:16:\"update_kb_terima\";i:55;s:16:\"delete_kb_terima\";i:56;s:17:\"create_pendapatan\";i:57;s:15:\"read_pendapatan\";i:58;s:17:\"update_pendapatan\";i:59;s:17:\"delete_pendapatan\";i:60;s:18:\"create_pengeluaran\";i:61;s:16:\"read_pengeluaran\";i:62;s:18:\"update_pengeluaran\";i:63;s:18:\"delete_pengeluaran\";i:64;s:13:\"create_mutasi\";i:65;s:11:\"read_mutasi\";i:66;s:13:\"update_mutasi\";i:67;s:13:\"delete_mutasi\";i:68;s:18:\"create_penyesuaian\";i:69;s:16:\"read_penyesuaian\";i:70;s:18:\"update_penyesuaian\";i:71;s:18:\"delete_penyesuaian\";i:72;s:10:\"create_bap\";i:73;s:8:\"read_bap\";i:74;s:10:\"update_bap\";i:75;s:10:\"delete_bap\";i:76;s:13:\"create_istock\";i:77;s:11:\"read_istock\";i:78;s:13:\"update_istock\";i:79;s:13:\"delete_istock\";i:80;s:19:\"create_invoice_jasa\";i:81;s:17:\"read_invoice_jasa\";i:82;s:19:\"update_invoice_jasa\";i:83;s:19:\"delete_invoice_jasa\";i:84;s:19:\"create_request_beli\";i:85;s:17:\"read_request_beli\";i:86;s:19:\"update_request_beli\";i:87;s:19:\"delete_request_beli\";i:88;s:17:\"create_order_beli\";i:89;s:15:\"read_order_beli\";i:90;s:17:\"update_order_beli\";i:91;s:17:\"delete_order_beli\";i:92;s:18:\"create_terima_beli\";i:93;s:16:\"read_terima_beli\";i:94;s:18:\"update_terima_beli\";i:95;s:18:\"delete_terima_beli\";i:96;s:16:\"create_pembelian\";i:97;s:14:\"read_pembelian\";i:98;s:16:\"update_pembelian\";i:99;s:16:\"delete_pembelian\";i:100;s:17:\"create_pelpiutang\";i:101;s:15:\"read_pelpiutang\";i:102;s:17:\"update_pelpiutang\";i:103;s:17:\"delete_pelpiutang\";i:104;s:17:\"create_lap_jurnal\";i:105;s:15:\"read_lap_jurnal\";i:106;s:17:\"update_lap_jurnal\";i:107;s:17:\"delete_lap_jurnal\";i:108;s:25:\"create_lap_neraca_general\";i:109;s:23:\"read_lap_neraca_general\";i:110;s:25:\"update_lap_neraca_general\";i:111;s:25:\"delete_lap_neraca_general\";i:112;s:24:\"create_lap_neraca_detail\";i:113;s:22:\"read_lap_neraca_detail\";i:114;s:24:\"update_lap_neraca_detail\";i:115;s:24:\"delete_lap_neraca_detail\";i:116;s:20:\"create_lap_rugi_laba\";i:117;s:18:\"read_lap_rugi_laba\";i:118;s:20:\"update_lap_rugi_laba\";i:119;s:20:\"delete_lap_rugi_laba\";i:120;s:21:\"create_lap_buku_besar\";i:121;s:19:\"read_lap_buku_besar\";i:122;s:21:\"update_lap_buku_besar\";i:123;s:21:\"delete_lap_buku_besar\";i:124;s:19:\"create_lap_arus_kas\";i:125;s:17:\"read_lap_arus_kas\";i:126;s:19:\"update_lap_arus_kas\";i:127;s:19:\"delete_lap_arus_kas\";i:128;s:22:\"create_lap_fixed_asset\";i:129;s:20:\"read_lap_fixed_asset\";i:130;s:22:\"update_lap_fixed_asset\";i:131;s:22:\"delete_lap_fixed_asset\";i:132;s:20:\"create_proses_jurnal\";i:133;s:18:\"read_proses_jurnal\";i:134;s:20:\"update_proses_jurnal\";i:135;s:20:\"delete_proses_jurnal\";i:136;s:21:\"create_proses_posting\";i:137;s:19:\"read_proses_posting\";i:138;s:21:\"update_proses_posting\";i:139;s:21:\"delete_proses_posting\";i:140;s:17:\"create_tutup_buku\";i:141;s:15:\"read_tutup_buku\";i:142;s:17:\"update_tutup_buku\";i:143;s:17:\"delete_tutup_buku\";i:144;s:11:\"create_user\";i:145;s:9:\"read_user\";i:146;s:11:\"update_user\";i:147;s:11:\"delete_user\";i:148;s:14:\"create_company\";i:149;s:12:\"read_company\";i:150;s:14:\"update_company\";i:151;s:14:\"delete_company\";i:152;s:22:\"create_backup_database\";i:153;s:20:\"read_backup_database\";i:154;s:22:\"update_backup_database\";i:155;s:22:\"delete_backup_database\";}\";s:6:\"status\";s:1:\"1\";}');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('84888054e33960384b9ceefc7f68bf74', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379908202, '');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('aacff9c6d6fac7a001676226cff3f47c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379734640, 'a:5:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:6:\"migent\";s:12:\"capabilities\";s:5024:\"a:168:{i:0;s:14:\"create_account\";i:1;s:12:\"read_account\";i:2;s:14:\"update_account\";i:3;s:14:\"delete_account\";i:4;s:14:\"create_batasan\";i:5;s:12:\"read_batasan\";i:6;s:14:\"update_batasan\";i:7;s:14:\"delete_batasan\";i:8;s:18:\"create_fixed_asset\";i:9;s:16:\"read_fixed_asset\";i:10;s:18:\"update_fixed_asset\";i:11;s:18:\"delete_fixed_asset\";i:12;s:12:\"create_stock\";i:13;s:10:\"read_stock\";i:14;s:12:\"update_stock\";i:15;s:12:\"delete_stock\";i:16;s:13:\"create_gudang\";i:17;s:11:\"read_gudang\";i:18;s:13:\"update_gudang\";i:19;s:13:\"delete_gudang\";i:20;s:12:\"create_group\";i:21;s:10:\"read_group\";i:22;s:12:\"update_group\";i:23;s:12:\"delete_group\";i:24;s:13:\"create_proyek\";i:25;s:11:\"read_proyek\";i:26;s:13:\"update_proyek\";i:27;s:13:\"delete_proyek\";i:28;s:15:\"create_customer\";i:29;s:13:\"read_customer\";i:30;s:15:\"update_customer\";i:31;s:15:\"delete_customer\";i:32;s:15:\"create_supplier\";i:33;s:13:\"read_supplier\";i:34;s:15:\"update_supplier\";i:35;s:15:\"delete_supplier\";i:36;s:15:\"create_currency\";i:37;s:13:\"read_currency\";i:38;s:15:\"update_currency\";i:39;s:15:\"delete_currency\";i:40;s:15:\"create_karyawan\";i:41;s:13:\"read_karyawan\";i:42;s:15:\"update_karyawan\";i:43;s:15:\"delete_karyawan\";i:44;s:18:\"create_jurnal_umum\";i:45;s:16:\"read_jurnal_umum\";i:46;s:18:\"update_jurnal_umum\";i:47;s:18:\"delete_jurnal_umum\";i:48;s:16:\"create_kb_keluar\";i:49;s:14:\"read_kb_keluar\";i:50;s:16:\"update_kb_keluar\";i:51;s:16:\"delete_kb_keluar\";i:52;s:16:\"create_kb_terima\";i:53;s:14:\"read_kb_terima\";i:54;s:16:\"update_kb_terima\";i:55;s:16:\"delete_kb_terima\";i:56;s:17:\"create_pendapatan\";i:57;s:15:\"read_pendapatan\";i:58;s:17:\"update_pendapatan\";i:59;s:17:\"delete_pendapatan\";i:60;s:18:\"create_pengeluaran\";i:61;s:16:\"read_pengeluaran\";i:62;s:18:\"update_pengeluaran\";i:63;s:18:\"delete_pengeluaran\";i:64;s:13:\"create_mutasi\";i:65;s:11:\"read_mutasi\";i:66;s:13:\"update_mutasi\";i:67;s:13:\"delete_mutasi\";i:68;s:18:\"create_penyesuaian\";i:69;s:16:\"read_penyesuaian\";i:70;s:18:\"update_penyesuaian\";i:71;s:18:\"delete_penyesuaian\";i:72;s:10:\"create_bap\";i:73;s:8:\"read_bap\";i:74;s:10:\"update_bap\";i:75;s:10:\"delete_bap\";i:76;s:13:\"create_istock\";i:77;s:11:\"read_istock\";i:78;s:13:\"update_istock\";i:79;s:13:\"delete_istock\";i:80;s:19:\"create_invoice_jasa\";i:81;s:17:\"read_invoice_jasa\";i:82;s:19:\"update_invoice_jasa\";i:83;s:19:\"delete_invoice_jasa\";i:84;s:19:\"create_request_beli\";i:85;s:17:\"read_request_beli\";i:86;s:19:\"update_request_beli\";i:87;s:19:\"delete_request_beli\";i:88;s:17:\"create_order_beli\";i:89;s:15:\"read_order_beli\";i:90;s:17:\"update_order_beli\";i:91;s:17:\"delete_order_beli\";i:92;s:18:\"create_terima_beli\";i:93;s:16:\"read_terima_beli\";i:94;s:18:\"update_terima_beli\";i:95;s:18:\"delete_terima_beli\";i:96;s:16:\"create_pembelian\";i:97;s:14:\"read_pembelian\";i:98;s:16:\"update_pembelian\";i:99;s:16:\"delete_pembelian\";i:100;s:17:\"create_pelpiutang\";i:101;s:15:\"read_pelpiutang\";i:102;s:17:\"update_pelpiutang\";i:103;s:17:\"delete_pelpiutang\";i:104;s:22:\"create_pelpiutangstock\";i:105;s:20:\"read_pelpiutangstock\";i:106;s:22:\"update_pelpiutangstock\";i:107;s:22:\"delete_pelpiutangstock\";i:108;s:16:\"create_pelhutang\";i:109;s:14:\"read_pelhutang\";i:110;s:16:\"update_pelhutang\";i:111;s:16:\"delete_pelhutang\";i:112;s:23:\"create_tolakgiropiutang\";i:113;s:21:\"read_tolakgiropiutang\";i:114;s:23:\"update_tolakgiropiutang\";i:115;s:23:\"delete_tolakgiropiutang\";i:116;s:17:\"create_lap_jurnal\";i:117;s:15:\"read_lap_jurnal\";i:118;s:17:\"update_lap_jurnal\";i:119;s:17:\"delete_lap_jurnal\";i:120;s:25:\"create_lap_neraca_general\";i:121;s:23:\"read_lap_neraca_general\";i:122;s:25:\"update_lap_neraca_general\";i:123;s:25:\"delete_lap_neraca_general\";i:124;s:24:\"create_lap_neraca_detail\";i:125;s:22:\"read_lap_neraca_detail\";i:126;s:24:\"update_lap_neraca_detail\";i:127;s:24:\"delete_lap_neraca_detail\";i:128;s:20:\"create_lap_rugi_laba\";i:129;s:18:\"read_lap_rugi_laba\";i:130;s:20:\"update_lap_rugi_laba\";i:131;s:20:\"delete_lap_rugi_laba\";i:132;s:21:\"create_lap_buku_besar\";i:133;s:19:\"read_lap_buku_besar\";i:134;s:21:\"update_lap_buku_besar\";i:135;s:21:\"delete_lap_buku_besar\";i:136;s:19:\"create_lap_arus_kas\";i:137;s:17:\"read_lap_arus_kas\";i:138;s:19:\"update_lap_arus_kas\";i:139;s:19:\"delete_lap_arus_kas\";i:140;s:22:\"create_lap_fixed_asset\";i:141;s:20:\"read_lap_fixed_asset\";i:142;s:22:\"update_lap_fixed_asset\";i:143;s:22:\"delete_lap_fixed_asset\";i:144;s:20:\"create_proses_jurnal\";i:145;s:18:\"read_proses_jurnal\";i:146;s:20:\"update_proses_jurnal\";i:147;s:20:\"delete_proses_jurnal\";i:148;s:21:\"create_proses_posting\";i:149;s:19:\"read_proses_posting\";i:150;s:21:\"update_proses_posting\";i:151;s:21:\"delete_proses_posting\";i:152;s:17:\"create_tutup_buku\";i:153;s:15:\"read_tutup_buku\";i:154;s:17:\"update_tutup_buku\";i:155;s:17:\"delete_tutup_buku\";i:156;s:11:\"create_user\";i:157;s:9:\"read_user\";i:158;s:11:\"update_user\";i:159;s:11:\"delete_user\";i:160;s:14:\"create_company\";i:161;s:12:\"read_company\";i:162;s:14:\"update_company\";i:163;s:14:\"delete_company\";i:164;s:22:\"create_backup_database\";i:165;s:20:\"read_backup_database\";i:166;s:22:\"update_backup_database\";i:167;s:22:\"delete_backup_database\";}\";s:6:\"status\";s:1:\"1\";}');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('abc38fea788731342e53bac44421b3f6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379908240, '');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('b45c5b3601879e010ac9dce834bf7b18', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36', 1379908218, '');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('bc332ef13d37d33b1bb112cd266b12d4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379908241, '');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('c2f19878391e9e9ed430669e80e1d137', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379908203, '');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('ca1bf79ad9a3462893ad8f0981a42b2b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379473041, 'a:4:{s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:6:\"migent\";s:12:\"capabilities\";s:4618:\"a:156:{i:0;s:14:\"create_account\";i:1;s:12:\"read_account\";i:2;s:14:\"update_account\";i:3;s:14:\"delete_account\";i:4;s:14:\"create_batasan\";i:5;s:12:\"read_batasan\";i:6;s:14:\"update_batasan\";i:7;s:14:\"delete_batasan\";i:8;s:18:\"create_fixed_asset\";i:9;s:16:\"read_fixed_asset\";i:10;s:18:\"update_fixed_asset\";i:11;s:18:\"delete_fixed_asset\";i:12;s:12:\"create_stock\";i:13;s:10:\"read_stock\";i:14;s:12:\"update_stock\";i:15;s:12:\"delete_stock\";i:16;s:13:\"create_gudang\";i:17;s:11:\"read_gudang\";i:18;s:13:\"update_gudang\";i:19;s:13:\"delete_gudang\";i:20;s:12:\"create_group\";i:21;s:10:\"read_group\";i:22;s:12:\"update_group\";i:23;s:12:\"delete_group\";i:24;s:13:\"create_proyek\";i:25;s:11:\"read_proyek\";i:26;s:13:\"update_proyek\";i:27;s:13:\"delete_proyek\";i:28;s:15:\"create_customer\";i:29;s:13:\"read_customer\";i:30;s:15:\"update_customer\";i:31;s:15:\"delete_customer\";i:32;s:15:\"create_supplier\";i:33;s:13:\"read_supplier\";i:34;s:15:\"update_supplier\";i:35;s:15:\"delete_supplier\";i:36;s:15:\"create_currency\";i:37;s:13:\"read_currency\";i:38;s:15:\"update_currency\";i:39;s:15:\"delete_currency\";i:40;s:15:\"create_karyawan\";i:41;s:13:\"read_karyawan\";i:42;s:15:\"update_karyawan\";i:43;s:15:\"delete_karyawan\";i:44;s:18:\"create_jurnal_umum\";i:45;s:16:\"read_jurnal_umum\";i:46;s:18:\"update_jurnal_umum\";i:47;s:18:\"delete_jurnal_umum\";i:48;s:16:\"create_kb_keluar\";i:49;s:14:\"read_kb_keluar\";i:50;s:16:\"update_kb_keluar\";i:51;s:16:\"delete_kb_keluar\";i:52;s:16:\"create_kb_terima\";i:53;s:14:\"read_kb_terima\";i:54;s:16:\"update_kb_terima\";i:55;s:16:\"delete_kb_terima\";i:56;s:17:\"create_pendapatan\";i:57;s:15:\"read_pendapatan\";i:58;s:17:\"update_pendapatan\";i:59;s:17:\"delete_pendapatan\";i:60;s:18:\"create_pengeluaran\";i:61;s:16:\"read_pengeluaran\";i:62;s:18:\"update_pengeluaran\";i:63;s:18:\"delete_pengeluaran\";i:64;s:13:\"create_mutasi\";i:65;s:11:\"read_mutasi\";i:66;s:13:\"update_mutasi\";i:67;s:13:\"delete_mutasi\";i:68;s:18:\"create_penyesuaian\";i:69;s:16:\"read_penyesuaian\";i:70;s:18:\"update_penyesuaian\";i:71;s:18:\"delete_penyesuaian\";i:72;s:10:\"create_bap\";i:73;s:8:\"read_bap\";i:74;s:10:\"update_bap\";i:75;s:10:\"delete_bap\";i:76;s:13:\"create_istock\";i:77;s:11:\"read_istock\";i:78;s:13:\"update_istock\";i:79;s:13:\"delete_istock\";i:80;s:19:\"create_invoice_jasa\";i:81;s:17:\"read_invoice_jasa\";i:82;s:19:\"update_invoice_jasa\";i:83;s:19:\"delete_invoice_jasa\";i:84;s:19:\"create_request_beli\";i:85;s:17:\"read_request_beli\";i:86;s:19:\"update_request_beli\";i:87;s:19:\"delete_request_beli\";i:88;s:17:\"create_order_beli\";i:89;s:15:\"read_order_beli\";i:90;s:17:\"update_order_beli\";i:91;s:17:\"delete_order_beli\";i:92;s:18:\"create_terima_beli\";i:93;s:16:\"read_terima_beli\";i:94;s:18:\"update_terima_beli\";i:95;s:18:\"delete_terima_beli\";i:96;s:16:\"create_pembelian\";i:97;s:14:\"read_pembelian\";i:98;s:16:\"update_pembelian\";i:99;s:16:\"delete_pembelian\";i:100;s:17:\"create_pelpiutang\";i:101;s:15:\"read_pelpiutang\";i:102;s:17:\"update_pelpiutang\";i:103;s:17:\"delete_pelpiutang\";i:104;s:17:\"create_lap_jurnal\";i:105;s:15:\"read_lap_jurnal\";i:106;s:17:\"update_lap_jurnal\";i:107;s:17:\"delete_lap_jurnal\";i:108;s:25:\"create_lap_neraca_general\";i:109;s:23:\"read_lap_neraca_general\";i:110;s:25:\"update_lap_neraca_general\";i:111;s:25:\"delete_lap_neraca_general\";i:112;s:24:\"create_lap_neraca_detail\";i:113;s:22:\"read_lap_neraca_detail\";i:114;s:24:\"update_lap_neraca_detail\";i:115;s:24:\"delete_lap_neraca_detail\";i:116;s:20:\"create_lap_rugi_laba\";i:117;s:18:\"read_lap_rugi_laba\";i:118;s:20:\"update_lap_rugi_laba\";i:119;s:20:\"delete_lap_rugi_laba\";i:120;s:21:\"create_lap_buku_besar\";i:121;s:19:\"read_lap_buku_besar\";i:122;s:21:\"update_lap_buku_besar\";i:123;s:21:\"delete_lap_buku_besar\";i:124;s:19:\"create_lap_arus_kas\";i:125;s:17:\"read_lap_arus_kas\";i:126;s:19:\"update_lap_arus_kas\";i:127;s:19:\"delete_lap_arus_kas\";i:128;s:22:\"create_lap_fixed_asset\";i:129;s:20:\"read_lap_fixed_asset\";i:130;s:22:\"update_lap_fixed_asset\";i:131;s:22:\"delete_lap_fixed_asset\";i:132;s:20:\"create_proses_jurnal\";i:133;s:18:\"read_proses_jurnal\";i:134;s:20:\"update_proses_jurnal\";i:135;s:20:\"delete_proses_jurnal\";i:136;s:21:\"create_proses_posting\";i:137;s:19:\"read_proses_posting\";i:138;s:21:\"update_proses_posting\";i:139;s:21:\"delete_proses_posting\";i:140;s:17:\"create_tutup_buku\";i:141;s:15:\"read_tutup_buku\";i:142;s:17:\"update_tutup_buku\";i:143;s:17:\"delete_tutup_buku\";i:144;s:11:\"create_user\";i:145;s:9:\"read_user\";i:146;s:11:\"update_user\";i:147;s:11:\"delete_user\";i:148;s:14:\"create_company\";i:149;s:12:\"read_company\";i:150;s:14:\"update_company\";i:151;s:14:\"delete_company\";i:152;s:22:\"create_backup_database\";i:153;s:20:\"read_backup_database\";i:154;s:22:\"update_backup_database\";i:155;s:22:\"delete_backup_database\";}\";s:6:\"status\";s:1:\"1\";}');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('d85196485214a0a99b45985979105b4d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379908203, '');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('dd9d13d682c101d52ad3d79f12d0ec2e', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379400936, 'a:5:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:6:\"migent\";s:12:\"capabilities\";s:4618:\"a:156:{i:0;s:14:\"create_account\";i:1;s:12:\"read_account\";i:2;s:14:\"update_account\";i:3;s:14:\"delete_account\";i:4;s:14:\"create_batasan\";i:5;s:12:\"read_batasan\";i:6;s:14:\"update_batasan\";i:7;s:14:\"delete_batasan\";i:8;s:18:\"create_fixed_asset\";i:9;s:16:\"read_fixed_asset\";i:10;s:18:\"update_fixed_asset\";i:11;s:18:\"delete_fixed_asset\";i:12;s:12:\"create_stock\";i:13;s:10:\"read_stock\";i:14;s:12:\"update_stock\";i:15;s:12:\"delete_stock\";i:16;s:13:\"create_gudang\";i:17;s:11:\"read_gudang\";i:18;s:13:\"update_gudang\";i:19;s:13:\"delete_gudang\";i:20;s:12:\"create_group\";i:21;s:10:\"read_group\";i:22;s:12:\"update_group\";i:23;s:12:\"delete_group\";i:24;s:13:\"create_proyek\";i:25;s:11:\"read_proyek\";i:26;s:13:\"update_proyek\";i:27;s:13:\"delete_proyek\";i:28;s:15:\"create_customer\";i:29;s:13:\"read_customer\";i:30;s:15:\"update_customer\";i:31;s:15:\"delete_customer\";i:32;s:15:\"create_supplier\";i:33;s:13:\"read_supplier\";i:34;s:15:\"update_supplier\";i:35;s:15:\"delete_supplier\";i:36;s:15:\"create_currency\";i:37;s:13:\"read_currency\";i:38;s:15:\"update_currency\";i:39;s:15:\"delete_currency\";i:40;s:15:\"create_karyawan\";i:41;s:13:\"read_karyawan\";i:42;s:15:\"update_karyawan\";i:43;s:15:\"delete_karyawan\";i:44;s:18:\"create_jurnal_umum\";i:45;s:16:\"read_jurnal_umum\";i:46;s:18:\"update_jurnal_umum\";i:47;s:18:\"delete_jurnal_umum\";i:48;s:16:\"create_kb_keluar\";i:49;s:14:\"read_kb_keluar\";i:50;s:16:\"update_kb_keluar\";i:51;s:16:\"delete_kb_keluar\";i:52;s:16:\"create_kb_terima\";i:53;s:14:\"read_kb_terima\";i:54;s:16:\"update_kb_terima\";i:55;s:16:\"delete_kb_terima\";i:56;s:17:\"create_pendapatan\";i:57;s:15:\"read_pendapatan\";i:58;s:17:\"update_pendapatan\";i:59;s:17:\"delete_pendapatan\";i:60;s:18:\"create_pengeluaran\";i:61;s:16:\"read_pengeluaran\";i:62;s:18:\"update_pengeluaran\";i:63;s:18:\"delete_pengeluaran\";i:64;s:13:\"create_mutasi\";i:65;s:11:\"read_mutasi\";i:66;s:13:\"update_mutasi\";i:67;s:13:\"delete_mutasi\";i:68;s:18:\"create_penyesuaian\";i:69;s:16:\"read_penyesuaian\";i:70;s:18:\"update_penyesuaian\";i:71;s:18:\"delete_penyesuaian\";i:72;s:10:\"create_bap\";i:73;s:8:\"read_bap\";i:74;s:10:\"update_bap\";i:75;s:10:\"delete_bap\";i:76;s:13:\"create_istock\";i:77;s:11:\"read_istock\";i:78;s:13:\"update_istock\";i:79;s:13:\"delete_istock\";i:80;s:19:\"create_invoice_jasa\";i:81;s:17:\"read_invoice_jasa\";i:82;s:19:\"update_invoice_jasa\";i:83;s:19:\"delete_invoice_jasa\";i:84;s:19:\"create_request_beli\";i:85;s:17:\"read_request_beli\";i:86;s:19:\"update_request_beli\";i:87;s:19:\"delete_request_beli\";i:88;s:17:\"create_order_beli\";i:89;s:15:\"read_order_beli\";i:90;s:17:\"update_order_beli\";i:91;s:17:\"delete_order_beli\";i:92;s:18:\"create_terima_beli\";i:93;s:16:\"read_terima_beli\";i:94;s:18:\"update_terima_beli\";i:95;s:18:\"delete_terima_beli\";i:96;s:16:\"create_pembelian\";i:97;s:14:\"read_pembelian\";i:98;s:16:\"update_pembelian\";i:99;s:16:\"delete_pembelian\";i:100;s:17:\"create_pelpiutang\";i:101;s:15:\"read_pelpiutang\";i:102;s:17:\"update_pelpiutang\";i:103;s:17:\"delete_pelpiutang\";i:104;s:17:\"create_lap_jurnal\";i:105;s:15:\"read_lap_jurnal\";i:106;s:17:\"update_lap_jurnal\";i:107;s:17:\"delete_lap_jurnal\";i:108;s:25:\"create_lap_neraca_general\";i:109;s:23:\"read_lap_neraca_general\";i:110;s:25:\"update_lap_neraca_general\";i:111;s:25:\"delete_lap_neraca_general\";i:112;s:24:\"create_lap_neraca_detail\";i:113;s:22:\"read_lap_neraca_detail\";i:114;s:24:\"update_lap_neraca_detail\";i:115;s:24:\"delete_lap_neraca_detail\";i:116;s:20:\"create_lap_rugi_laba\";i:117;s:18:\"read_lap_rugi_laba\";i:118;s:20:\"update_lap_rugi_laba\";i:119;s:20:\"delete_lap_rugi_laba\";i:120;s:21:\"create_lap_buku_besar\";i:121;s:19:\"read_lap_buku_besar\";i:122;s:21:\"update_lap_buku_besar\";i:123;s:21:\"delete_lap_buku_besar\";i:124;s:19:\"create_lap_arus_kas\";i:125;s:17:\"read_lap_arus_kas\";i:126;s:19:\"update_lap_arus_kas\";i:127;s:19:\"delete_lap_arus_kas\";i:128;s:22:\"create_lap_fixed_asset\";i:129;s:20:\"read_lap_fixed_asset\";i:130;s:22:\"update_lap_fixed_asset\";i:131;s:22:\"delete_lap_fixed_asset\";i:132;s:20:\"create_proses_jurnal\";i:133;s:18:\"read_proses_jurnal\";i:134;s:20:\"update_proses_jurnal\";i:135;s:20:\"delete_proses_jurnal\";i:136;s:21:\"create_proses_posting\";i:137;s:19:\"read_proses_posting\";i:138;s:21:\"update_proses_posting\";i:139;s:21:\"delete_proses_posting\";i:140;s:17:\"create_tutup_buku\";i:141;s:15:\"read_tutup_buku\";i:142;s:17:\"update_tutup_buku\";i:143;s:17:\"delete_tutup_buku\";i:144;s:11:\"create_user\";i:145;s:9:\"read_user\";i:146;s:11:\"update_user\";i:147;s:11:\"delete_user\";i:148;s:14:\"create_company\";i:149;s:12:\"read_company\";i:150;s:14:\"update_company\";i:151;s:14:\"delete_company\";i:152;s:22:\"create_backup_database\";i:153;s:20:\"read_backup_database\";i:154;s:22:\"update_backup_database\";i:155;s:22:\"delete_backup_database\";}\";s:6:\"status\";s:1:\"1\";}');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('debbf9549fba0ac8a8c77db839bcb6a5', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379410641, 'a:5:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:6:\"migent\";s:12:\"capabilities\";s:4618:\"a:156:{i:0;s:14:\"create_account\";i:1;s:12:\"read_account\";i:2;s:14:\"update_account\";i:3;s:14:\"delete_account\";i:4;s:14:\"create_batasan\";i:5;s:12:\"read_batasan\";i:6;s:14:\"update_batasan\";i:7;s:14:\"delete_batasan\";i:8;s:18:\"create_fixed_asset\";i:9;s:16:\"read_fixed_asset\";i:10;s:18:\"update_fixed_asset\";i:11;s:18:\"delete_fixed_asset\";i:12;s:12:\"create_stock\";i:13;s:10:\"read_stock\";i:14;s:12:\"update_stock\";i:15;s:12:\"delete_stock\";i:16;s:13:\"create_gudang\";i:17;s:11:\"read_gudang\";i:18;s:13:\"update_gudang\";i:19;s:13:\"delete_gudang\";i:20;s:12:\"create_group\";i:21;s:10:\"read_group\";i:22;s:12:\"update_group\";i:23;s:12:\"delete_group\";i:24;s:13:\"create_proyek\";i:25;s:11:\"read_proyek\";i:26;s:13:\"update_proyek\";i:27;s:13:\"delete_proyek\";i:28;s:15:\"create_customer\";i:29;s:13:\"read_customer\";i:30;s:15:\"update_customer\";i:31;s:15:\"delete_customer\";i:32;s:15:\"create_supplier\";i:33;s:13:\"read_supplier\";i:34;s:15:\"update_supplier\";i:35;s:15:\"delete_supplier\";i:36;s:15:\"create_currency\";i:37;s:13:\"read_currency\";i:38;s:15:\"update_currency\";i:39;s:15:\"delete_currency\";i:40;s:15:\"create_karyawan\";i:41;s:13:\"read_karyawan\";i:42;s:15:\"update_karyawan\";i:43;s:15:\"delete_karyawan\";i:44;s:18:\"create_jurnal_umum\";i:45;s:16:\"read_jurnal_umum\";i:46;s:18:\"update_jurnal_umum\";i:47;s:18:\"delete_jurnal_umum\";i:48;s:16:\"create_kb_keluar\";i:49;s:14:\"read_kb_keluar\";i:50;s:16:\"update_kb_keluar\";i:51;s:16:\"delete_kb_keluar\";i:52;s:16:\"create_kb_terima\";i:53;s:14:\"read_kb_terima\";i:54;s:16:\"update_kb_terima\";i:55;s:16:\"delete_kb_terima\";i:56;s:17:\"create_pendapatan\";i:57;s:15:\"read_pendapatan\";i:58;s:17:\"update_pendapatan\";i:59;s:17:\"delete_pendapatan\";i:60;s:18:\"create_pengeluaran\";i:61;s:16:\"read_pengeluaran\";i:62;s:18:\"update_pengeluaran\";i:63;s:18:\"delete_pengeluaran\";i:64;s:13:\"create_mutasi\";i:65;s:11:\"read_mutasi\";i:66;s:13:\"update_mutasi\";i:67;s:13:\"delete_mutasi\";i:68;s:18:\"create_penyesuaian\";i:69;s:16:\"read_penyesuaian\";i:70;s:18:\"update_penyesuaian\";i:71;s:18:\"delete_penyesuaian\";i:72;s:10:\"create_bap\";i:73;s:8:\"read_bap\";i:74;s:10:\"update_bap\";i:75;s:10:\"delete_bap\";i:76;s:13:\"create_istock\";i:77;s:11:\"read_istock\";i:78;s:13:\"update_istock\";i:79;s:13:\"delete_istock\";i:80;s:19:\"create_invoice_jasa\";i:81;s:17:\"read_invoice_jasa\";i:82;s:19:\"update_invoice_jasa\";i:83;s:19:\"delete_invoice_jasa\";i:84;s:19:\"create_request_beli\";i:85;s:17:\"read_request_beli\";i:86;s:19:\"update_request_beli\";i:87;s:19:\"delete_request_beli\";i:88;s:17:\"create_order_beli\";i:89;s:15:\"read_order_beli\";i:90;s:17:\"update_order_beli\";i:91;s:17:\"delete_order_beli\";i:92;s:18:\"create_terima_beli\";i:93;s:16:\"read_terima_beli\";i:94;s:18:\"update_terima_beli\";i:95;s:18:\"delete_terima_beli\";i:96;s:16:\"create_pembelian\";i:97;s:14:\"read_pembelian\";i:98;s:16:\"update_pembelian\";i:99;s:16:\"delete_pembelian\";i:100;s:17:\"create_pelpiutang\";i:101;s:15:\"read_pelpiutang\";i:102;s:17:\"update_pelpiutang\";i:103;s:17:\"delete_pelpiutang\";i:104;s:17:\"create_lap_jurnal\";i:105;s:15:\"read_lap_jurnal\";i:106;s:17:\"update_lap_jurnal\";i:107;s:17:\"delete_lap_jurnal\";i:108;s:25:\"create_lap_neraca_general\";i:109;s:23:\"read_lap_neraca_general\";i:110;s:25:\"update_lap_neraca_general\";i:111;s:25:\"delete_lap_neraca_general\";i:112;s:24:\"create_lap_neraca_detail\";i:113;s:22:\"read_lap_neraca_detail\";i:114;s:24:\"update_lap_neraca_detail\";i:115;s:24:\"delete_lap_neraca_detail\";i:116;s:20:\"create_lap_rugi_laba\";i:117;s:18:\"read_lap_rugi_laba\";i:118;s:20:\"update_lap_rugi_laba\";i:119;s:20:\"delete_lap_rugi_laba\";i:120;s:21:\"create_lap_buku_besar\";i:121;s:19:\"read_lap_buku_besar\";i:122;s:21:\"update_lap_buku_besar\";i:123;s:21:\"delete_lap_buku_besar\";i:124;s:19:\"create_lap_arus_kas\";i:125;s:17:\"read_lap_arus_kas\";i:126;s:19:\"update_lap_arus_kas\";i:127;s:19:\"delete_lap_arus_kas\";i:128;s:22:\"create_lap_fixed_asset\";i:129;s:20:\"read_lap_fixed_asset\";i:130;s:22:\"update_lap_fixed_asset\";i:131;s:22:\"delete_lap_fixed_asset\";i:132;s:20:\"create_proses_jurnal\";i:133;s:18:\"read_proses_jurnal\";i:134;s:20:\"update_proses_jurnal\";i:135;s:20:\"delete_proses_jurnal\";i:136;s:21:\"create_proses_posting\";i:137;s:19:\"read_proses_posting\";i:138;s:21:\"update_proses_posting\";i:139;s:21:\"delete_proses_posting\";i:140;s:17:\"create_tutup_buku\";i:141;s:15:\"read_tutup_buku\";i:142;s:17:\"update_tutup_buku\";i:143;s:17:\"delete_tutup_buku\";i:144;s:11:\"create_user\";i:145;s:9:\"read_user\";i:146;s:11:\"update_user\";i:147;s:11:\"delete_user\";i:148;s:14:\"create_company\";i:149;s:12:\"read_company\";i:150;s:14:\"update_company\";i:151;s:14:\"delete_company\";i:152;s:22:\"create_backup_database\";i:153;s:20:\"read_backup_database\";i:154;s:22:\"update_backup_database\";i:155;s:22:\"delete_backup_database\";}\";s:6:\"status\";s:1:\"1\";}');
INSERT INTO gl_xsessions (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('f99bed225b7a84c81d5db7fba2638a55', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0', 1379908202, '');


#
# TABLE STRUCTURE FOR: gl_xuser_autologin
#

DROP TABLE IF EXISTS gl_xuser_autologin;

CREATE TABLE `gl_xuser_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

#
# TABLE STRUCTURE FOR: gl_xuser_profiles
#

DROP TABLE IF EXISTS gl_xuser_profiles;

CREATE TABLE `gl_xuser_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO gl_xuser_profiles (`id`, `user_id`, `country`, `website`) VALUES (1, 1, NULL, NULL);
INSERT INTO gl_xuser_profiles (`id`, `user_id`, `country`, `website`) VALUES (2, 2, NULL, NULL);
INSERT INTO gl_xuser_profiles (`id`, `user_id`, `country`, `website`) VALUES (3, 3, NULL, NULL);
INSERT INTO gl_xuser_profiles (`id`, `user_id`, `country`, `website`) VALUES (4, 4, NULL, NULL);


#
# TABLE STRUCTURE FOR: gl_xusers
#

DROP TABLE IF EXISTS gl_xusers;

CREATE TABLE `gl_xusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `capabilities` text COLLATE utf8_bin NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO gl_xusers (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `capabilities`, `role`) VALUES (1, 'migent', '$P$BVC8rn2BC8Orj2p9MlxlYME..zpnCv0', 'soft_mgtjkt@yahoo.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', '2013-09-23 06:44:51', '2012-05-15 06:04:12', '2013-09-23 11:44:51', 'a:172:{i:0;s:14:\"create_account\";i:1;s:12:\"read_account\";i:2;s:14:\"update_account\";i:3;s:14:\"delete_account\";i:4;s:14:\"create_batasan\";i:5;s:12:\"read_batasan\";i:6;s:14:\"update_batasan\";i:7;s:14:\"delete_batasan\";i:8;s:18:\"create_fixed_asset\";i:9;s:16:\"read_fixed_asset\";i:10;s:18:\"update_fixed_asset\";i:11;s:18:\"delete_fixed_asset\";i:12;s:12:\"create_stock\";i:13;s:10:\"read_stock\";i:14;s:12:\"update_stock\";i:15;s:12:\"delete_stock\";i:16;s:13:\"create_gudang\";i:17;s:11:\"read_gudang\";i:18;s:13:\"update_gudang\";i:19;s:13:\"delete_gudang\";i:20;s:12:\"create_group\";i:21;s:10:\"read_group\";i:22;s:12:\"update_group\";i:23;s:12:\"delete_group\";i:24;s:13:\"create_proyek\";i:25;s:11:\"read_proyek\";i:26;s:13:\"update_proyek\";i:27;s:13:\"delete_proyek\";i:28;s:15:\"create_customer\";i:29;s:13:\"read_customer\";i:30;s:15:\"update_customer\";i:31;s:15:\"delete_customer\";i:32;s:15:\"create_supplier\";i:33;s:13:\"read_supplier\";i:34;s:15:\"update_supplier\";i:35;s:15:\"delete_supplier\";i:36;s:15:\"create_currency\";i:37;s:13:\"read_currency\";i:38;s:15:\"update_currency\";i:39;s:15:\"delete_currency\";i:40;s:15:\"create_karyawan\";i:41;s:13:\"read_karyawan\";i:42;s:15:\"update_karyawan\";i:43;s:15:\"delete_karyawan\";i:44;s:18:\"create_jurnal_umum\";i:45;s:16:\"read_jurnal_umum\";i:46;s:18:\"update_jurnal_umum\";i:47;s:18:\"delete_jurnal_umum\";i:48;s:16:\"create_kb_keluar\";i:49;s:14:\"read_kb_keluar\";i:50;s:16:\"update_kb_keluar\";i:51;s:16:\"delete_kb_keluar\";i:52;s:16:\"create_kb_terima\";i:53;s:14:\"read_kb_terima\";i:54;s:16:\"update_kb_terima\";i:55;s:16:\"delete_kb_terima\";i:56;s:17:\"create_pendapatan\";i:57;s:15:\"read_pendapatan\";i:58;s:17:\"update_pendapatan\";i:59;s:17:\"delete_pendapatan\";i:60;s:18:\"create_pengeluaran\";i:61;s:16:\"read_pengeluaran\";i:62;s:18:\"update_pengeluaran\";i:63;s:18:\"delete_pengeluaran\";i:64;s:13:\"create_mutasi\";i:65;s:11:\"read_mutasi\";i:66;s:13:\"update_mutasi\";i:67;s:13:\"delete_mutasi\";i:68;s:18:\"create_penyesuaian\";i:69;s:16:\"read_penyesuaian\";i:70;s:18:\"update_penyesuaian\";i:71;s:18:\"delete_penyesuaian\";i:72;s:10:\"create_bap\";i:73;s:8:\"read_bap\";i:74;s:10:\"update_bap\";i:75;s:10:\"delete_bap\";i:76;s:13:\"create_istock\";i:77;s:11:\"read_istock\";i:78;s:13:\"update_istock\";i:79;s:13:\"delete_istock\";i:80;s:19:\"create_invoice_jasa\";i:81;s:17:\"read_invoice_jasa\";i:82;s:19:\"update_invoice_jasa\";i:83;s:19:\"delete_invoice_jasa\";i:84;s:19:\"create_request_beli\";i:85;s:17:\"read_request_beli\";i:86;s:19:\"update_request_beli\";i:87;s:19:\"delete_request_beli\";i:88;s:17:\"create_order_beli\";i:89;s:15:\"read_order_beli\";i:90;s:17:\"update_order_beli\";i:91;s:17:\"delete_order_beli\";i:92;s:18:\"create_terima_beli\";i:93;s:16:\"read_terima_beli\";i:94;s:18:\"update_terima_beli\";i:95;s:18:\"delete_terima_beli\";i:96;s:16:\"create_pembelian\";i:97;s:14:\"read_pembelian\";i:98;s:16:\"update_pembelian\";i:99;s:16:\"delete_pembelian\";i:100;s:17:\"create_pelpiutang\";i:101;s:15:\"read_pelpiutang\";i:102;s:17:\"update_pelpiutang\";i:103;s:17:\"delete_pelpiutang\";i:104;s:22:\"create_pelpiutangstock\";i:105;s:20:\"read_pelpiutangstock\";i:106;s:22:\"update_pelpiutangstock\";i:107;s:22:\"delete_pelpiutangstock\";i:108;s:16:\"create_pelhutang\";i:109;s:14:\"read_pelhutang\";i:110;s:16:\"update_pelhutang\";i:111;s:16:\"delete_pelhutang\";i:112;s:23:\"create_tolakgiropiutang\";i:113;s:21:\"read_tolakgiropiutang\";i:114;s:23:\"update_tolakgiropiutang\";i:115;s:23:\"delete_tolakgiropiutang\";i:116;s:22:\"create_tolakgirohutang\";i:117;s:20:\"read_tolakgirohutang\";i:118;s:22:\"update_tolakgirohutang\";i:119;s:22:\"delete_tolakgirohutang\";i:120;s:17:\"create_lap_jurnal\";i:121;s:15:\"read_lap_jurnal\";i:122;s:17:\"update_lap_jurnal\";i:123;s:17:\"delete_lap_jurnal\";i:124;s:25:\"create_lap_neraca_general\";i:125;s:23:\"read_lap_neraca_general\";i:126;s:25:\"update_lap_neraca_general\";i:127;s:25:\"delete_lap_neraca_general\";i:128;s:24:\"create_lap_neraca_detail\";i:129;s:22:\"read_lap_neraca_detail\";i:130;s:24:\"update_lap_neraca_detail\";i:131;s:24:\"delete_lap_neraca_detail\";i:132;s:20:\"create_lap_rugi_laba\";i:133;s:18:\"read_lap_rugi_laba\";i:134;s:20:\"update_lap_rugi_laba\";i:135;s:20:\"delete_lap_rugi_laba\";i:136;s:21:\"create_lap_buku_besar\";i:137;s:19:\"read_lap_buku_besar\";i:138;s:21:\"update_lap_buku_besar\";i:139;s:21:\"delete_lap_buku_besar\";i:140;s:19:\"create_lap_arus_kas\";i:141;s:17:\"read_lap_arus_kas\";i:142;s:19:\"update_lap_arus_kas\";i:143;s:19:\"delete_lap_arus_kas\";i:144;s:22:\"create_lap_fixed_asset\";i:145;s:20:\"read_lap_fixed_asset\";i:146;s:22:\"update_lap_fixed_asset\";i:147;s:22:\"delete_lap_fixed_asset\";i:148;s:20:\"create_proses_jurnal\";i:149;s:18:\"read_proses_jurnal\";i:150;s:20:\"update_proses_jurnal\";i:151;s:20:\"delete_proses_jurnal\";i:152;s:21:\"create_proses_posting\";i:153;s:19:\"read_proses_posting\";i:154;s:21:\"update_proses_posting\";i:155;s:21:\"delete_proses_posting\";i:156;s:17:\"create_tutup_buku\";i:157;s:15:\"read_tutup_buku\";i:158;s:17:\"update_tutup_buku\";i:159;s:17:\"delete_tutup_buku\";i:160;s:11:\"create_user\";i:161;s:9:\"read_user\";i:162;s:11:\"update_user\";i:163;s:11:\"delete_user\";i:164;s:14:\"create_company\";i:165;s:12:\"read_company\";i:166;s:14:\"update_company\";i:167;s:14:\"delete_company\";i:168;s:22:\"create_backup_database\";i:169;s:20:\"read_backup_database\";i:170;s:22:\"update_backup_database\";i:171;s:22:\"delete_backup_database\";}', 0);
INSERT INTO gl_xusers (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `capabilities`, `role`) VALUES (2, 'ardi', '$2a$08$AC0dd66fJk2STpAsk0GBa.6BSFHg5xn2Ra8M/Ir33CCfv6Jbmzi86', 'ardi@yahoo.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '139.195.48.247', '2013-05-14 16:04:18', '2013-05-14 15:55:55', '2013-06-11 12:39:39', 'a:64:{i:0;s:14:\"create_account\";i:1;s:12:\"read_account\";i:2;s:14:\"update_account\";i:3;s:14:\"delete_account\";i:4;s:14:\"create_batasan\";i:5;s:12:\"read_batasan\";i:6;s:14:\"update_batasan\";i:7;s:14:\"delete_batasan\";i:8;s:18:\"create_fixed_asset\";i:9;s:16:\"read_fixed_asset\";i:10;s:18:\"update_fixed_asset\";i:11;s:18:\"delete_fixed_asset\";i:12;s:12:\"create_stock\";i:13;s:10:\"read_stock\";i:14;s:12:\"update_stock\";i:15;s:12:\"delete_stock\";i:16;s:13:\"create_gudang\";i:17;s:11:\"read_gudang\";i:18;s:13:\"update_gudang\";i:19;s:13:\"delete_gudang\";i:20;s:12:\"create_group\";i:21;s:10:\"read_group\";i:22;s:12:\"update_group\";i:23;s:12:\"delete_group\";i:24;s:13:\"create_proyek\";i:25;s:11:\"read_proyek\";i:26;s:13:\"update_proyek\";i:27;s:13:\"delete_proyek\";i:28;s:15:\"create_customer\";i:29;s:13:\"read_customer\";i:30;s:15:\"update_customer\";i:31;s:15:\"delete_customer\";i:32;s:15:\"create_supplier\";i:33;s:13:\"read_supplier\";i:34;s:15:\"update_supplier\";i:35;s:15:\"delete_supplier\";i:36;s:15:\"create_currency\";i:37;s:13:\"read_currency\";i:38;s:15:\"update_currency\";i:39;s:15:\"delete_currency\";i:40;s:15:\"create_karyawan\";i:41;s:13:\"read_karyawan\";i:42;s:15:\"update_karyawan\";i:43;s:15:\"delete_karyawan\";i:44;s:18:\"create_jurnal_umum\";i:45;s:16:\"read_jurnal_umum\";i:46;s:18:\"update_jurnal_umum\";i:47;s:18:\"delete_jurnal_umum\";i:48;s:16:\"create_kb_keluar\";i:49;s:14:\"read_kb_keluar\";i:50;s:16:\"update_kb_keluar\";i:51;s:16:\"delete_kb_keluar\";i:52;s:16:\"create_kb_terima\";i:53;s:14:\"read_kb_terima\";i:54;s:16:\"update_kb_terima\";i:55;s:16:\"delete_kb_terima\";i:56;s:10:\"create_bap\";i:57;s:8:\"read_bap\";i:58;s:10:\"update_bap\";i:59;s:10:\"delete_bap\";i:60;s:19:\"create_invoice_jasa\";i:61;s:17:\"read_invoice_jasa\";i:62;s:19:\"update_invoice_jasa\";i:63;s:19:\"delete_invoice_jasa\";}', 99);
INSERT INTO gl_xusers (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `capabilities`, `role`) VALUES (3, 'bugie', '$2a$08$Xq/5cYxFSDfm0Itsms28hOXCvcc8NVw3hXXZbxtfpac5uiHgOKrjm', 'bugie@yahoo.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '202.148.4.218', '2013-05-22 15:19:17', '2013-05-14 15:56:40', '2013-05-22 15:19:57', 'a:104:{i:0;s:14:\"create_account\";i:1;s:12:\"read_account\";i:2;s:14:\"update_account\";i:3;s:14:\"delete_account\";i:4;s:14:\"create_batasan\";i:5;s:12:\"read_batasan\";i:6;s:14:\"update_batasan\";i:7;s:14:\"delete_batasan\";i:8;s:18:\"create_fixed_asset\";i:9;s:16:\"read_fixed_asset\";i:10;s:18:\"update_fixed_asset\";i:11;s:18:\"delete_fixed_asset\";i:12;s:12:\"create_stock\";i:13;s:10:\"read_stock\";i:14;s:12:\"update_stock\";i:15;s:12:\"delete_stock\";i:16;s:13:\"create_gudang\";i:17;s:11:\"read_gudang\";i:18;s:13:\"update_gudang\";i:19;s:13:\"delete_gudang\";i:20;s:12:\"create_group\";i:21;s:10:\"read_group\";i:22;s:12:\"update_group\";i:23;s:12:\"delete_group\";i:24;s:13:\"create_proyek\";i:25;s:11:\"read_proyek\";i:26;s:13:\"update_proyek\";i:27;s:13:\"delete_proyek\";i:28;s:15:\"create_customer\";i:29;s:13:\"read_customer\";i:30;s:15:\"update_customer\";i:31;s:15:\"delete_customer\";i:32;s:15:\"create_supplier\";i:33;s:13:\"read_supplier\";i:34;s:15:\"update_supplier\";i:35;s:15:\"delete_supplier\";i:36;s:15:\"create_currency\";i:37;s:13:\"read_currency\";i:38;s:15:\"update_currency\";i:39;s:15:\"delete_currency\";i:40;s:15:\"create_karyawan\";i:41;s:13:\"read_karyawan\";i:42;s:15:\"update_karyawan\";i:43;s:15:\"delete_karyawan\";i:44;s:18:\"create_jurnal_umum\";i:45;s:16:\"read_jurnal_umum\";i:46;s:18:\"update_jurnal_umum\";i:47;s:18:\"delete_jurnal_umum\";i:48;s:17:\"create_lap_jurnal\";i:49;s:15:\"read_lap_jurnal\";i:50;s:17:\"update_lap_jurnal\";i:51;s:17:\"delete_lap_jurnal\";i:52;s:25:\"create_lap_neraca_general\";i:53;s:23:\"read_lap_neraca_general\";i:54;s:25:\"update_lap_neraca_general\";i:55;s:25:\"delete_lap_neraca_general\";i:56;s:24:\"create_lap_neraca_detail\";i:57;s:22:\"read_lap_neraca_detail\";i:58;s:24:\"update_lap_neraca_detail\";i:59;s:24:\"delete_lap_neraca_detail\";i:60;s:20:\"create_lap_rugi_laba\";i:61;s:18:\"read_lap_rugi_laba\";i:62;s:20:\"update_lap_rugi_laba\";i:63;s:20:\"delete_lap_rugi_laba\";i:64;s:21:\"create_lap_buku_besar\";i:65;s:19:\"read_lap_buku_besar\";i:66;s:21:\"update_lap_buku_besar\";i:67;s:21:\"delete_lap_buku_besar\";i:68;s:19:\"create_lap_arus_kas\";i:69;s:17:\"read_lap_arus_kas\";i:70;s:19:\"update_lap_arus_kas\";i:71;s:19:\"delete_lap_arus_kas\";i:72;s:22:\"create_lap_fixed_asset\";i:73;s:20:\"read_lap_fixed_asset\";i:74;s:22:\"update_lap_fixed_asset\";i:75;s:22:\"delete_lap_fixed_asset\";i:76;s:20:\"create_proses_jurnal\";i:77;s:18:\"read_proses_jurnal\";i:78;s:20:\"update_proses_jurnal\";i:79;s:20:\"delete_proses_jurnal\";i:80;s:21:\"create_proses_posting\";i:81;s:19:\"read_proses_posting\";i:82;s:21:\"update_proses_posting\";i:83;s:21:\"delete_proses_posting\";i:84;s:17:\"create_tutup_buku\";i:85;s:15:\"read_tutup_buku\";i:86;s:17:\"update_tutup_buku\";i:87;s:17:\"delete_tutup_buku\";i:88;s:23:\"create_batal_tutup_buku\";i:89;s:21:\"read_batal_tutup_buku\";i:90;s:23:\"update_batal_tutup_buku\";i:91;s:23:\"delete_batal_tutup_buku\";i:92;s:11:\"create_user\";i:93;s:9:\"read_user\";i:94;s:11:\"update_user\";i:95;s:11:\"delete_user\";i:96;s:14:\"create_company\";i:97;s:12:\"read_company\";i:98;s:14:\"update_company\";i:99;s:14:\"delete_company\";i:100;s:22:\"create_backup_database\";i:101;s:20:\"read_backup_database\";i:102;s:22:\"update_backup_database\";i:103;s:22:\"delete_backup_database\";}', 99);
INSERT INTO gl_xusers (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `capabilities`, `role`) VALUES (4, 'sandy', '$2a$08$LA1SkrB9uXlADYT6BHMVbOZf8KRwq73OfmhlmUVhN69UZ9mg6OFji', 'indramgtjkt@yahoo.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '202.148.4.218', '0000-00-00 00:00:00', '2013-05-15 14:21:02', '2013-05-15 14:21:02', 'a:0:{}', 10);


