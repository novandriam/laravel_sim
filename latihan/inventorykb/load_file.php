<?php
if($_GET) {
	switch ($_GET['page']){				
		case '' :				
			if(!file_exists ("main.php")) die ("Empty Main Page!"); 
			include "main.php";						
		break;
		case 'Halaman-Utama' :				
			if(!file_exists ("main.php")) die ("Sorry Empty Page!"); 
			include "main.php";						
		break;			
		case 'Login' :				
			if(!file_exists ("settings/login.php")) die ("Sorry Empty Page!"); 
			include "settings/login.php";						
		break;
		case 'Login-Validasi' :				
			if(!file_exists ("settings/login_validasi.php")) die ("Sorry Empty Page!"); 
			include "settings/login_validasi.php";						
		break;
		case 'Ubah-Password' :				
			if(!file_exists ("settings/ubah_pass.php")) die ("Sorry Empty Page!"); 
			include "settings/ubah_pass.php";						
		break;
		case 'Logout' :				
			if(!file_exists ("settings/login_out.php")) die ("Sorry Empty Page!"); 
			include "settings/login_out.php";						
		break;
		
		# PENGGUNA ONLINE
		case 'Data-Pengguna' :				
			if(!file_exists ("settings/pengguna_data.php")) die ("Sorry Empty Page!"); 
			include "settings/pengguna_data.php";	 break;		
		case 'Add-Pengguna' :				
			if(!file_exists ("settings/pengguna_add.php")) die ("Sorry Empty Page!"); 
			include "settings/pengguna_add.php";	 break;		
		case 'Delete-Pengguna' :				
			if(!file_exists ("settings/pengguna_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/pengguna_delete.php"; break;		
		case 'Edit-Pengguna' :				
			if(!file_exists ("settings/pengguna_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/pengguna_edit.php"; break;		

		# USER LOGIN
		case 'Data-User' :				
			if(!file_exists ("settings/user_data.php")) die ("Sorry Empty Page!"); 
			include "settings/user_data.php";	 break;		
		case 'Add-User' :				
			if(!file_exists ("settings/user_add.php")) die ("Sorry Empty Page!"); 
			include "settings/user_add.php";	 break;		
		case 'Delete-User' :				
			if(!file_exists ("settings/user_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/user_delete.php"; break;		
		case 'Edit-User' :				
			if(!file_exists ("settings/user_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/user_edit.php"; break;
		case 'Aktivitas-User' :				
			if(!file_exists ("settings/user_act.php")) die ("Sorry Empty Page!"); 
			include "settings/user_act.php"; break;		

		# BACKUP DAN RESTORE DATASBE
		case 'Backup-Database' :				
			if(!file_exists ("backup/backup.php")) die ("Sorry Empty Page!"); 
			include "backup/backup.php";	 break;
		case 'Restore-Database' :				
			if(!file_exists ("backup/restore.php")) die ("Sorry Empty Page!"); 
			include "backup/restore.php";	 break;
		
		# INFO PERUSAHAAN
		case 'Data-Perusahaan' :				
			if(!file_exists ("settings/infokb_view.php")) die ("Sorry Empty Page!"); 
			include "settings/infokb_view.php";	 break;	
		case 'Edit-Perusahaan' :				
			if(!file_exists ("settings/infokb_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/infokb_edit.php";	 break;		
		
		# STOCK OPNAME
		case 'Data-StockOpname' :				
			if(!file_exists ("data/data_stockopname.php")) die ("Sorry Empty Page!"); 
			include "data/data_stockopname.php";	 break;	
		case 'Add-StockOpname' :				
			if(!file_exists ("settings/stockopname_add.php")) die ("Sorry Empty Page!"); 
			include "settings/stockopname_add.php";	 break;
		case 'Simpan-StockOpname' :				
			if(!file_exists ("settings/simpan_stockopname.php")) die ("Sorry Empty Page!"); 
			include "settings/simpan_stockopname.php";	 break;				
		case 'Daftar-Stockopname' :				
			if(!file_exists ("daftar/daftar_stockopname.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_stockopname.php";	 break;
		case 'Detail-Stockopname' :				
			if(!file_exists ("data/data_viewstockopname.php")) die ("Sorry Empty Page!"); 
			include "data/data_viewstockopname.php";	 break;				

		# SUPPLIER / PEMASOK
		case 'Data-Supplier' :				
			if(!file_exists ("data/data_pemasok.php")) die ("Sorry Empty Page!"); 
			include "data/data_pemasok.php";	 break;		
		case 'Add-Supplier' :				
			if(!file_exists ("settings/supplier_add.php")) die ("Sorry Empty Page!"); 
			include "settings/supplier_add.php";	 break;		
		case 'View-Supplier' :				
			if(!file_exists ("settings/supplier_view.php")) die ("Sorry Empty Page!"); 
			include "settings/supplier_view.php";	 break;	
		case 'Delete-Supplier' :				
			if(!file_exists ("settings/supplier_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/supplier_delete.php"; break;		
		case 'Edit-Supplier' :				
			if(!file_exists ("settings/supplier_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/supplier_edit.php"; break;	
		
		# DATA PENERIMA
		case 'Data-Penerima' :				
			if(!file_exists ("data/data_penerima.php")) die ("Sorry Empty Page!"); 
			include "data/data_penerima.php";	 break;		
		case 'Add-Penerima' :				
			if(!file_exists ("settings/penerima_add.php")) die ("Sorry Empty Page!"); 
			include "settings/penerima_add.php";	 break;		
		case 'View-Penerima' :				
			if(!file_exists ("settings/penerima_view.php")) die ("Sorry Empty Page!"); 
			include "settings/penerima_view.php";	 break;	
		case 'Delete-Penerima' :				
			if(!file_exists ("settings/penerima_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/penerima_delete.php"; break;		
		case 'Edit-Penerima' :				
			if(!file_exists ("settings/penerima_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/penerima_edit.php"; break;	

		# DATA KATEGORI
		case 'Data-Kategori' :				
			if(!file_exists ("settings/kategori_data.php")) die ("Sorry Empty Page!"); 
			include "settings/kategori_data.php"; break;		
		case 'Add-Kategori' :				
			if(!file_exists ("settings/kategori_add.php")) die ("Sorry Empty Page!"); 
			include "settings/kategori_add.php"; break;		
		case 'Delete-Kategori' :				
			if(!file_exists ("settings/kategori_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/kategori_delete.php"; break;		
		case 'Edit-Kategori' :				
			if(!file_exists ("settings/kategori_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/kategori_edit.php"; break;
		# DATA CATATAN
		case 'Data-Catatan' :				 
			if(!file_exists ("data/data_catatan.php")) die ("Sorry Empty Page!"); 
			include "data/data_catatan.php"; break;		
		case 'Add-Catatan' :				
			if(!file_exists ("settings/catatan_add.php")) die ("Sorry Empty Page!"); 
			include "settings/catatan_add.php"; break;		
		case 'Delete-Catatan' :				
			if(!file_exists ("settings/catatan_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/catatan_delete.php"; break;		
		case 'Edit-Catatan' :				
			if(!file_exists ("settings/catatan_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/catatan_edit.php"; break;				
		# DATA DEPT
		case 'Data-Dept' :				
			if(!file_exists ("data/data_dept.php")) die ("Sorry Empty Page!"); 
			include "data/data_dept.php"; break;		
		case 'Add-Dept' :				
			if(!file_exists ("settings/dept_add.php")) die ("Sorry Empty Page!"); 
			include "settings/dept_add.php"; break;		
		case 'Delete-Dept' :				
			if(!file_exists ("settings/dept_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/dept_delete.php"; break;		
		case 'Edit-Dept' :				
			if(!file_exists ("settings/dept_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/dept_edit.php"; break;				

		# DATA JENIS DOKPAB MASUK
		case 'Data-Jenisbcmasuk' :				
			if(!file_exists ("settings/jenisbcmasuk_data.php")) die ("Sorry Empty Page!"); 
			include "settings/jenisbcmasuk_data.php"; break;		
		case 'Add-Jenisbcmasuk' :				
			if(!file_exists ("settings/jenisbcmasuk_add.php")) die ("Sorry Empty Page!"); 
			include "settings/jenisbcmasuk_add.php"; break;		
		case 'Delete-Jenisbcmasuk' :				
			if(!file_exists ("settings/jenisbcmasuk_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/jenisbcmasuk_delete.php"; break;		
		case 'Edit-Jenisbcmasuk' :				
			if(!file_exists ("settings/jenisbcmasuk_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/jenisbcmasuk_edit.php"; break;		
		
		# DATA JENIS DOKPAB KELUAR
		case 'Data-Jenisbckeluar' :				
			if(!file_exists ("settings/jenisbckeluar_data.php")) die ("Sorry Empty Page!"); 
			include "settings/jenisbckeluar_data.php"; break;		
		case 'Add-Jenisbckeluar' :				
			if(!file_exists ("settings/jenisbckeluar_add.php")) die ("Sorry Empty Page!"); 
			include "settings/jenisbckeluar_add.php"; break;		
		case 'Delete-Jenisbckeluar' :				
			if(!file_exists ("settings/jenisbckeluar_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/jenisbckeluar_delete.php"; break;		
		case 'Edit-Jenisbckeluar' :				
			if(!file_exists ("settings/jenisbckeluar_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/jenisbckeluar_edit.php"; break;		


		# DATA BARANG
		case 'Data-Barang' :				
			if(!file_exists ("data/data_barang.php")) die ("Sorry Empty Page!"); 
			include "data/data_barang.php"; break;		
		case 'Add-Barang' :				
			if(!file_exists ("settings/barang_add.php")) die ("Sorry Empty Page!"); 
			include "settings/barang_add.php"; break;		
		case 'Delete-Barang' :				
			if(!file_exists ("settings/barang_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/barang_delete.php"; break;		
		case 'Edit-Barang' :				
			if(!file_exists ("settings/barang_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/barang_edit.php"; break;		
		case 'View-Barang' :				
			if(!file_exists ("settings/barang_view.php")) die ("Sorry Empty Page!"); 
			include "settings/barang_view.php"; break;
		case 'Upload-Excel' :				
			if(!file_exists ("upload_excel.php")) die ("Sorry Empty Page!"); 
			include "upload_excel.php"; break;
		case 'Upload-Excel-Pemasukan' :				
			if(!file_exists ("upload/upload_excel_pemasukanawal.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_pemasukanawal.php"; break;
		case 'Upload-Excel-Produksi' :				
			if(!file_exists ("upload/upload_excel_produksiawal.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_produksiawal.php"; break;
		case 'Upload-Excel-Pengeluaran' :				
			if(!file_exists ("upload/upload_excel_pengeluaranawal.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_pengeluaranawal.php"; break;
		
		# DATA SATUAN BARANG
		case 'Data-Satuan' :				
			if(!file_exists ("data/data_satuan.php")) die ("Sorry Empty Page!"); 
			include "data/data_satuan.php"; break;		
		case 'Add-Satuan' :				
			if(!file_exists ("settings/satuan_add.php")) die ("Sorry Empty Page!"); 
			include "settings/satuan_add.php"; break;		
		case 'Delete-Satuan' :				
			if(!file_exists ("settings/satuan_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/satuan_delete.php"; break;		
		case 'Edit-Satuan' :				
			if(!file_exists ("settings/satuan_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/satuan_edit.php"; break;
		# DATA KEMASAN BARANG
		case 'Data-Kemasan' :				
			if(!file_exists ("data/data_kemasan.php")) die ("Sorry Empty Page!"); 
			include "data/data_kemasan.php"; break;		
		case 'Add-Kemasan' :				
			if(!file_exists ("settings/kemasan_add.php")) die ("Sorry Empty Page!"); 
			include "settings/kemasan_add.php"; break;		
		case 'Delete-Kemasan' :				
			if(!file_exists ("settings/kemasan_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/kemasan_delete.php"; break;		
		case 'Edit-Kemasan' :				
			if(!file_exists ("settings/kemasan_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/kemasan_edit.php"; break;				

		# DATA MATA UANG
		case 'Data-Matauang' :				
			if(!file_exists ("data/data_matauang.php")) die ("Sorry Empty Page!"); 
			include "data/data_matauang.php"; break;		
		case 'Add-Matauang' :				
			if(!file_exists ("settings/matauang_add.php")) die ("Sorry Empty Page!"); 
			include "settings/matauang_add.php"; break;		
		case 'Delete-Matauang' :				
			if(!file_exists ("settings/matauang_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/matauang_delete.php"; break;		
		case 'Edit-Matauang' :				
			if(!file_exists ("settings/matauang_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/matauang_edit.php"; break;		


		
		# DATA PEMASUKAN BARANG (BARANG MASUK)	
		case 'Pemasukan-Data' :				
			if(!file_exists ("data/data_incoming.php")) die ("Sorry Empty Page!"); 
			include "data/data_incoming.php"; break;
		case 'View-Pemasukan' :				
			if(!file_exists ("incoming/pemasukan_view.php")) die ("Sorry Empty Page!"); 
			include "incoming/pemasukan_view.php";	 break;		
		case 'Pemasukan-Barang' :				
			if(!file_exists ("incoming/transaksi_incoming.php")) die ("Sorry Empty Page!"); 
			include "incoming/transaksi_incoming.php"; break;		
		case 'Edit-Pemasukan-Barang' :				
			if(!file_exists ("incoming/pemasukan-barang_edit.php")) die ("Sorry Empty Page!"); 
			include "incoming/pemasukan-barang_edit.php"; break;	

		# DATA PENGELUARAN BARANG (BARANG KELUAR DARI BARANG JADI)	
		case 'Pengeluaran-Data' :				
			if(!file_exists ("data/data_outgoing.php")) die ("Sorry Empty Page!"); 
			include "data/data_outgoing.php"; break;
		case 'View-Pengeluaran' :				
			if(!file_exists ("outgoing/pengeluaran_view.php")) die ("Sorry Empty Page!"); 
			include "outgoing/pengeluaran_view.php";	 break;		

		case 'Pengeluaran-Barang' :				
			if(!file_exists ("outgoing/transaksi_outgoing.php")) die ("Sorry Empty Page!"); 
			include "outgoing/transaksi_outgoing.php"; break;
		case 'Edit-Pengeluaran-Barang' :				
			if(!file_exists ("outgoing/pengeluaran-barang_edit.php")) die ("Sorry Empty Page!"); 
			include "outgoing/pengeluaran-barang_edit.php"; break;	

		case 'Pemusnahan-Data' :				
			if(!file_exists ("data/data_pemusnahan.php")) die ("Sorry Empty Page!"); 
			include "data/data_pemusnahan.php"; break;
		case 'Pemusnahan-Barang' :				
			if(!file_exists ("outgoing/pemusnahan.php")) die ("Sorry Empty Page!"); 
			include "outgoing/pemusnahan.php"; break;
		case 'View-Pemusnahan' :				
			if(!file_exists ("outgoing/pemusnahan_view.php")) die ("Sorry Empty Page!"); 
			include "outgoing/pemusnahan_view.php";	 break;		
		case 'Edit-Pemusnahan-Barang' :				
			if(!file_exists ("outgoing/pemusnahan-barang_edit.php")) die ("Sorry Empty Page!"); 
			include "outgoing/pemusnahan-barang_edit.php"; break;	
	# DATA PEMAKAIAN BAHAN BAKU KE PRODUKSI (WIP)	
		case 'Pemakaian-Data' :				
			if(!file_exists ("data/data_incoming-produksi.php")) die ("Sorry Empty Page!"); 
			include "data/data_incoming-produksi.php"; break;
		case 'Pemakaian-Add' :				
			if(!file_exists ("incoming/pemakaian_add.php")) die ("Sorry Empty Page!"); 
			include "incoming/pemakaian_add.php"; break;
		case 'Pemakaian-View' :				
			if(!file_exists ("incoming/pemakaian_view.php")) die ("Sorry Empty Page!"); 
			include "incoming/pemakaian_view.php";	 break;
		case 'Edit-Pemakaian' :				
			if(!file_exists ("incoming/pemakaian_edit.php")) die ("Sorry Empty Page!"); 
			include "incoming/pemakaian_edit.php";	 break;			
	
	# PENGELUARAN BARANG JADI (DARI WIP KE GD OUTGOING	
		case 'Brgjadi-Data' :				
			if(!file_exists ("data/data_brgjadi.php")) die ("Sorry Empty Page!"); 
			include "data/data_brgjadi.php"; break;
		case 'Brgjadi-Add' :				
			if(!file_exists ("produksi/brgjadi_add.php")) die ("Sorry Empty Page!"); 
			include "produksi/brgjadi_add.php"; break;
		case 'Brgjadi-View' :				
			if(!file_exists ("produksi/brgjadi_view.php")) die ("Sorry Empty Page!"); 
			include "produksi/brgjadi_view.php"; break;
		case 'Brgjadi_Gabung-Add' :				
			if(!file_exists ("produksi/brgjadi_add2.php")) die ("Sorry Empty Page!"); 
			include "produksi/brgjadi_add2.php"; break;
		case 'Edit-Brgjadi' :				
			if(!file_exists ("produksi/brgjadi_edit.php")) die ("Sorry Empty Page!"); 
			include "produksi/brgjadi_edit.php"; break;
		case 'Edit-Brgjadi2' :				
			if(!file_exists ("produksi/brgjadi2_edit.php")) die ("Sorry Empty Page!"); 
			include "produksi/brgjadi2_edit.php"; break;

	# PENGELUARAN BARANG INCOMING - OUTGOING
		case 'Incoming-Outgoing-Data' :				
			if(!file_exists ("data/data_incoming-outgoing.php")) die ("Sorry Empty Page!"); 
			include "data/data_incoming-outgoing.php"; break;
		case 'Incoming-Outgoing-Add' :				
			if(!file_exists ("incoming/incoming_outgoing_add.php")) die ("Sorry Empty Page!"); 
			include "incoming/incoming_outgoing_add.php"; break;
		case 'Incoming-Outgoing-View' :				
			if(!file_exists ("incoming/incoming_outgoing_view.php")) die ("Sorry Empty Page!"); 
			include "incoming/incoming_outgoing_view.php"; break;
		case 'Edit-Incoming-Outgoing' :				
			if(!file_exists ("incoming/incoming-outgoing_edit.php")) die ("Sorry Empty Page!"); 
			include "incoming/incoming-outgoing_edit.php"; break;

	# PENGELUARAN BARANG PRODUKSI - INCOMING
		case 'Produksi-Incoming-Data' :				
			if(!file_exists ("data/data_produksi-incoming.php")) die ("Sorry Empty Page!"); 
			include "data/data_produksi-incoming.php"; break;
		case 'Produksi-Incoming-Add' :				
			if(!file_exists ("produksi/produksi_incoming_add.php")) die ("Sorry Empty Page!"); 
			include "produksi/produksi_incoming_add.php"; break;
		case 'Produksi-Incoming-View' :				
			if(!file_exists ("produksi/produksi_incoming_view.php")) die ("Sorry Empty Page!"); 
			include "produksi/produksi_incoming_view.php"; break;
		case 'Edit-Produksi-Incoming' :				
			if(!file_exists ("produksi/produksi-incoming_edit.php")) die ("Sorry Empty Page!"); 
			include "produksi/produksi-incoming_edit.php"; break;

	# PENGELUARAN BARANG PRODUKSI - OUTGOING
		case 'Produksi-Outgoing-Data' :				
			if(!file_exists ("data/data_produksi-outgoing.php")) die ("Sorry Empty Page!"); 
			include "data/data_produksi-outgoing.php"; break;
		case 'Produksi-Outgoing-Add' :				
			if(!file_exists ("produksi/produksi_outgoing_add.php")) die ("Sorry Empty Page!"); 
			include "produksi/produksi_outgoing_add.php"; break;
		case 'Produksi-Outgoing-View' :				
			if(!file_exists ("produksi/produksi_outgoing_view.php")) die ("Sorry Empty Page!"); 
			include "produksi/produksi_outgoing_view.php"; break;
		case 'Edit-Produksi-Outgoing' :				
			if(!file_exists ("produksi/produksi-outgoing_edit.php")) die ("Sorry Empty Page!"); 
			include "produksi/produksi-outgoing_edit.php"; break;
			
		# PEMASUKAN DATA LAPORAN SCRAP
		case 'Scrap-Data' :				
			if(!file_exists ("data/data_scrap.php")) die ("Sorry Empty Page!"); 
			include "data/data_scrap.php"; break;
		case 'Scrap-Add' :				
			if(!file_exists ("produksi/scrap_add.php")) die ("Sorry Empty Page!"); 
			include "produksi/scrap_add.php"; break;
		case 'Scrap-View' :				
			if(!file_exists ("produksi/scrap_view.php")) die ("Sorry Empty Page!"); 
			include "produksi/scrap_view.php"; break;
		case 'Edit-Scrap' :				
			if(!file_exists ("produksi/scrap_edit.php")) die ("Sorry Empty Page!"); 
			include "produksi/scrap_edit.php"; break;
			
	# PEMASUKAN DATA LAPORAN PEMAKAIAN BAHAN BAKU/PENOLONG
		case 'Bahan-Data' :				
			if(!file_exists ("data/data_bahan.php")) die ("Sorry Empty Page!"); 
			include "data/data_bahan.php"; break;
		case 'Bahan-Add' :				
			if(!file_exists ("produksi/bahan_add.php")) die ("Sorry Empty Page!"); 
			include "produksi/bahan_add.php"; break;
		case 'Bahan-View' :				
			if(!file_exists ("produksi/bahan_view.php")) die ("Sorry Empty Page!"); 
			include "produksi/bahan_view.php"; break;
		case 'Edit-Bahan' :				
			if(!file_exists ("produksi/bahan_add_edit.php")) die ("Sorry Empty Page!"); 
			include "produksi/bahan_add_edit.php"; break;
		case 'Edit-Bahanbaku' :				
			if(!file_exists ("produksi/bahanbaku_edit.php")) die ("Sorry Empty Page!"); 
			include "produksi/bahanbaku_edit.php"; break;


	# PENGELUARAN BARANG OUTGOING - INCOMING
		case 'Outgoing-Incoming-Data' :				
			if(!file_exists ("data/data_outgoing-incoming.php")) die ("Sorry Empty Page!"); 
			include "data/data_outgoing-incoming.php"; break;
		case 'Outgoing-Incoming-Add' :				
			if(!file_exists ("outgoing/outgoing_incoming_add.php")) die ("Sorry Empty Page!"); 
			include "outgoing/outgoing_incoming_add.php"; break;
		case 'Outgoing-Incoming-View' :				
			if(!file_exists ("outgoing/outgoing_incoming_view.php")) die ("Sorry Empty Page!"); 
			include "outgoing/outgoing_incoming_view.php"; break;
		case 'Edit-Outgoing-Incoming' :				
			if(!file_exists ("outgoing/outgoing-incoming_edit.php")) die ("Sorry Empty Page!"); 
			include "outgoing/outgoing-incoming_edit.php"; break;

	# PENGELUARAN BARANG OUTGOING - PRODUKSI
		case 'Outgoing-Produksi-Data' :				
			if(!file_exists ("data/data_outgoing-produksi.php")) die ("Sorry Empty Page!"); 
			include "data/data_outgoing-produksi.php"; break;
		case 'Outgoing-Produksi-Add' :				
			if(!file_exists ("outgoing/outgoing_produksi_add.php")) die ("Sorry Empty Page!"); 
			include "outgoing/outgoing_produksi_add.php"; break;
		case 'Outgoing-Produksi-View' :				
			if(!file_exists ("outgoing/outgoing_produksi_view.php")) die ("Sorry Empty Page!"); 
			include "outgoing/outgoing_produksi_view.php"; break;
		case 'Edit-Outgoing-Produksi' :				
			if(!file_exists ("outgoing/outgoing-produksi_edit.php")) die ("Sorry Empty Page!"); 
			include "outgoing/outgoing-produksi_edit.php"; break;

	# PENERIMAAN BARANG INCOMING
		case 'Incoming-Terima-Data' :				
			if(!file_exists ("data/data_incoming-inbox.php")) die ("Sorry Empty Page!"); 
			include "data/data_incoming-inbox.php"; break;
		case 'Incoming-Terima-View' :				
			if(!file_exists ("incoming/incoming_terima_view.php")) die ("Sorry Empty Page!"); 
			include "incoming/incoming_terima_view.php"; break;
		case 'Incoming-Lpb-Data' :				
			if(!file_exists ("data/data_incoming-terima.php")) die ("Sorry Empty Page!"); 
			include "data/data_incoming-terima.php"; break;
		case 'Incoming-Lpb-View' :				
			if(!file_exists ("incoming/incoming_lpb_view.php")) die ("Sorry Empty Page!"); 
			include "incoming/incoming_lpb_view.php"; break;
		case 'Lap-Incoming-Terima' :				
			if(!file_exists ("daftar/daftar_incoming_terima.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_incoming_terima.php"; break;
		case 'Lap-Excel-Incoming-Terima' :				
			if(!file_exists ("daftar/daftar_excel_incoming_lpb.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_incoming_lpb.php"; break;
		
	# PENERIMAAN BARANG PRODUKSI
		case 'Produksi-Terima-Data' :				
			if(!file_exists ("data/data_produksi-inbox.php")) die ("Sorry Empty Page!"); 
			include "data/data_produksi-inbox.php"; break;
		case 'Produksi-Terima-View' :				
			if(!file_exists ("produksi/produksi_terima_view.php")) die ("Sorry Empty Page!"); 
			include "produksi/produksi_terima_view.php"; break;
		case 'Produksi-Lpb-Data' :				
			if(!file_exists ("data/data_produksi-terima.php")) die ("Sorry Empty Page!"); 
			include "data/data_produksi-terima.php"; break;
		case 'Produksi-Lpb-View' :				
			if(!file_exists ("produksi/produksi_lpb_view.php")) die ("Sorry Empty Page!"); 
			include "produksi/produksi_lpb_view.php"; break;
		case 'Lap-Produksi-Terima' :				
			if(!file_exists ("daftar/daftar_produksi_terima.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_produksi_terima.php"; break;
		case 'Lap-Excel-Produksi-Terima' :				
			if(!file_exists ("daftar/daftar_excel_produksi_lpb.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_produksi_lpb.php"; break;

	# PENERIMAAN BARANG OUTGOING
		case 'Outgoing-Terima-Data' :				
			if(!file_exists ("data/data_outgoing-inbox.php")) die ("Sorry Empty Page!"); 
			include "data/data_outgoing-inbox.php"; break;
		case 'Outgoing-Terima-View' :				
			if(!file_exists ("outgoing/outgoing_terima_view.php")) die ("Sorry Empty Page!"); 
			include "outgoing/outgoing_terima_view.php"; break;
		case 'Outgoing-Lpb-Data' :				
			if(!file_exists ("data/data_outgoing-terima.php")) die ("Sorry Empty Page!"); 
			include "data/data_outgoing-terima.php"; break;
		case 'Outgoing-Lpb-View' :				
			if(!file_exists ("outgoing/outgoing_lpb_view.php")) die ("Sorry Empty Page!"); 
			include "outgoing/outgoing_lpb_view.php"; break;
		case 'Lap-Outgoing-Terima' :				
			if(!file_exists ("daftar/daftar_outgoing_terima.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_outgoing_terima.php"; break;
		case 'Lap-Excel-Outgoing-Terima' :				
			if(!file_exists ("daftar/daftar_excel_outgoing_lpb.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_outgoing_lpb.php"; break;

	# ADJUSTMENT
		case 'Data-Penyesuaian' :				
			if(!file_exists ("data/data_adjustment.php")) die ("Sorry Empty Page!"); 
			include "data/data_adjustment.php"; break;
		case 'Add-Penyesuaian' :				
			if(!file_exists ("settings/adjustment_add.php")) die ("Sorry Empty Page!"); 
			include "settings/adjustment_add.php"; break;
		case 'View-Penyesuaian' :				
			if(!file_exists ("settings/adjustment_view.php")) die ("Sorry Empty Page!"); 
			include "settings/adjustment_view.php"; break;
		case 'Edit-Penyesuaian' :				
			if(!file_exists ("settings/adjustment_edit.php")) die ("Sorry Empty Page!"); 
			include "settings/adjustment_edit.php"; break;
		


	# KONVERSI BARANG JADI	
		case 'Konversi-Data' :				
			if(!file_exists ("data/data_konversi.php")) die ("Sorry Empty Page!"); 
			include "data/data_konversi.php"; break;
		case 'Konversi-Add' :				
			if(!file_exists ("produksi/konversi_add.php")) die ("Sorry Empty Page!"); 
			include "produksi/konversi_add.php"; break;
		case 'Konversi-View' :				
			if(!file_exists ("produksi/konversi_view.php")) die ("Sorry Empty Page!"); 
			include "produksi/konversi_view.php"; break;

	# CETAK	
		case 'Cetak-Bpb' :				
			if(!file_exists ("nota_bpb.php")) die ("Sorry Empty Page!"); 
			include "nota_bpb.php"; break;			

	# LAPORAN
		case 'Laporan-Mutasi' :				
			if(!file_exists ("lap_mutasi2.php")) die ("Sorry Empty Page!"); 
			include "lap_mutasi2.php"; break;
		case 'Lap-Mutasi-BahanBaku' :				
			if(!file_exists ("daftar/laporan_mutasi_bahanbaku.php")) die  ("Sorry Empty Page!"); 
			include "daftar/laporan_mutasi_bahanbaku.php"; break;
		case 'Lap-Mutasi-BarangJadi' :				
			if(!file_exists ("daftar/laporan_mutasi_barangjadi.php")) die ("Sorry Empty Page!"); 
			include "daftar/laporan_mutasi_barangjadi.php"; break;
		case 'Lap-Mutasi-BarangModal' :				
			if(!file_exists ("daftar/laporan_mutasi_barangmodal.php")) die  ("Sorry Empty Page!"); 
			include "daftar/laporan_mutasi_barangmodal.php"; break;
		case 'Lap-Mutasi-Scrap' :				
			if(!file_exists ("daftar/laporan_mutasi_scrap.php")) die 	 ("Sorry Empty Page!"); 
			include "daftar/laporan_mutasi_scrap.php"; break;

	# LAPORAN EXCEL MUTASI BARANG
		case 'Lap-Excel-Mutasi-BahanBaku' :				
			if(!file_exists ("daftar/daftar_excel_mutasi_bahanbaku.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_mutasi_bahanbaku.php"; break;
		case 'Lap-Excel-Mutasi-BarangJadi' :				
			if(!file_exists ("daftar/daftar_excel_mutasi_barangjadi.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_mutasi_barangjadi.php"; break;
		case 'Lap-Excel-Mutasi-BarangModal' :				
			if(!file_exists ("daftar/daftar_excel_mutasi_barangmodal.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_mutasi_barangmodal.php"; break;
		case 'Lap-Excel-Mutasi-Scrap' :				
			if(!file_exists ("daftar/daftar_excel_mutasi_scrap.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_mutasi_scrap.php"; break;

		case 'Laporan-Pemasukan' :				
			if(!file_exists ("lap_pemasukan-tgldokpab.php")) die ("Sorry Empty Page!"); 
			include "lap_pemasukan-tgldokpab.php"; break;			
		case 'Lap-Pemasukan-Perdokpab' :				
			if(!file_exists ("daftar/daftar_pemasukan_per_dokpab.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_pemasukan_per_dokpab.php"; break;			
		case 'Lap-Pemasukan-Pertglpenerimaan' :				
			if(!file_exists ("daftar/daftar_pemasukan_per_tglpenerimaan.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_pemasukan_per_tglpenerimaan.php"; break;			
		case 'Lap-Pemasukan-Pertglinvoice' :				
			if(!file_exists ("daftar/daftar_pemasukan_per_tglinvoice.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_pemasukan_per_tglinvoice.php"; break;			
		case 'Lap-Pemasukan-Perjenisdokpab' :				
			if(!file_exists ("daftar/daftar_pemasukan_per_jenisdokpab.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_pemasukan_per_jenisdokpab.php"; break;			
		case 'Lap-Pemasukan-Perpemasok' :				
			if(!file_exists ("daftar/daftar_pemasukan_per_pemasok.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_pemasukan_per_pemasok.php"; break;				
		case 'Lap-Pengeluaran-Pertglpengeluaran' :				
			if(!file_exists ("daftar/daftar_pengeluaran_per_tglpengeluaran.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_pengeluaran_per_tglpengeluaran.php"; break;
		case 'Lap-Pengeluaran-Pertglinvoice' :				
			if(!file_exists ("daftar/daftar_pengeluaran_per_tglinvoice.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_pengeluaran_per_tglinvoice.php"; break;			
		case 'Lap-Pengeluaran-Perpenerima' :				
			if(!file_exists ("daftar/daftar_pengeluaran_per_penerima.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_pengeluaran_per_penerima.php"; break;		
		case 'Lap-Pengeluaran-Perjenisdokpab' :				
			if(!file_exists ("daftar/daftar_pengeluaran_per_jenisdokpab.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_pengeluaran_per_jenisdokpab.php"; break;			
		case 'Lap-Posisi-Wip' :				
			if(!file_exists ("daftar/daftar_posisi_wip.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_posisi_wip.php"; break;
		case 'Lap-Barangjadi' :				
			if(!file_exists ("daftar/daftar_barangjadi.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_barangjadi.php"; break;
		case 'Lap-Pengeluaran-Perdokpab' :				
			if(!file_exists ("daftar/daftar_pengeluaran_per_dokpab.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_pengeluaran_per_dokpab.php"; break;			

		# LAPORAN EXCEL PEMASUKAN
		case 'Lap-Excel-Pemasukan-Perdokpab' :				
			if(!file_exists ("daftar/daftar_excel_pemasukan_per_dokpab.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_pemasukan_per_dokpab.php"; break;			
		case 'Lap-Excel-Pemasukan-Pertglbpb' :				
			if(!file_exists ("daftar/daftar_excel_pemasukan_per_tglbpb.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_pemasukan_per_tglbpb.php"; break;
		case 'Lap-Excel-Pemasukan-Pertglinvoice' :				
			if(!file_exists ("daftar/daftar_excel_pemasukan_per_tglinvoice.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_pemasukan_per_tglinvoice.php"; break;					
		case 'Lap-Excel-Incoming-Produksi' :				
			if(!file_exists ("daftar/daftar_excel_incoming_produksi.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_incoming_produksi.php"; break;
		case 'Lap-Excel-Incoming-Outgoing' :				
			if(!file_exists ("daftar/daftar_excel_incoming_outgoing.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_incoming_outgoing.php"; break;		
		case 'Lap-Excel-Pemasukan-Perjenisdokpab' :				
			if(!file_exists ("daftar/daftar_excel_pemasukan_per_jenisdokpab.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_pemasukan_per_jenisdokpab.php"; break;
		case 'Lap-Excel-Pemasukan-Perpemasok' :				
			if(!file_exists ("daftar/daftar_excel_pemasukan_per_pemasok.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_pemasukan_per_pemasok.php"; break;				
		
		# LAPORAN EXCEL PRODUKSI
		case 'Lap-Excel-Produksi-Incoming' :				
			if(!file_exists ("daftar/daftar_excel_produksi_incoming.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_produksi_incoming.php"; break;	
		case 'Lap-Excel-Produksi-Outgoing' :				
			if(!file_exists ("daftar/daftar_excel_produksi_outgoing.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_produksi_outgoing.php"; break;	
		case 'Lap-Excel-Produksi-Brgjadi' :				
			if(!file_exists ("daftar/daftar_excel_produksi_brgjadi.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_produksi_brgjadi.php"; break;	

		# LAPORAN EXCEL PENGELUARAN
		case 'Lap-Excel-Pengeluaran-Perdokpab' :				
			if(!file_exists ("daftar/daftar_excel_pengeluaran_per_dokpab.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_pengeluaran_per_dokpab.php"; break;			
		case 'Lap-Excel-Posisi-Wip' :				
			if(!file_exists ("daftar/daftar_excel_posisi_wip.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_posisi_wip.php"; break;
		case 'Lap-Excel-Brgjadi' :				
			if(!file_exists ("daftar/daftar_excel_barangjadi.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_barangjadi.php"; break;					
		case 'Lap-Excel-Pengeluaran-Pertglsj' :				
			if(!file_exists ("daftar/daftar_excel_pengeluaran_per_tglsj.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_pengeluaran_per_tglsj.php"; break;
		case 'Lap-Excel-Pengeluaran-Pertglinvoice' :				
			if(!file_exists ("daftar/daftar_excel_pengeluaran_per_tglinvoice.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_pengeluaran_per_tglinvoice.php"; break;
		case 'Lap-Excel-Outgoing-Produksi' :				
			if(!file_exists ("daftar/daftar_excel_outgoing_produksi.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_outgoing_produksi.php"; break;
		case 'Lap-Excel-Outgoing-Incoming' :				
			if(!file_exists ("daftar/daftar_excel_outgoing_incoming.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_outgoing_incoming.php"; break;
		case 'Lap-Excel-Pengeluaran-Perjenisdokpab' :				
			if(!file_exists ("daftar/daftar_excel_pengeluaran_per_jenisdokpab.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_pengeluaran_per_jenisdokpab.php"; break;
		case 'Lap-Excel-Pengeluaran-Perpenerima' :				
			if(!file_exists ("daftar/daftar_excel_pengeluaran_per_penerima.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_pengeluaran_per_penerima.php"; break;	
		case 'Lap-Excel-Bulanan-Pemasukan' :				
			if(!file_exists ("daftar/daftar_excel_bulanan-pemasukan.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_bulanan-pemasukan.php"; break;
		case 'Lap-Excel-Bulanan-Pengeluaran' :				
			if(!file_exists ("daftar/daftar_excel_bulanan-pengeluaran.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_bulanan-pengeluaran.php"; break;		
		case 'Lap-Excel-Bulanan-Transaksi' :				
			if(!file_exists ("daftar/daftar_excel_bulanan-transaksi.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_excel_bulanan-transaksi.php"; break;		
		
		# LAPORAN TRANSFER
		case 'Lap-Pengiriman-Incoming-Outgoing' :				
			if(!file_exists ("daftar/daftar_transfer_incoming-outgoing.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_transfer_incoming-outgoing.php"; break;
		case 'Lap-Pengiriman-Incoming-Produksi' :				
			if(!file_exists ("daftar/daftar_transfer_incoming-produksi.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_transfer_incoming-produksi.php"; break;		
		case 'Lap-Pengiriman-Produksi-Incoming' :				
			if(!file_exists ("daftar/daftar_transfer_produksi-incoming.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_transfer_produksi-incoming.php"; break;	
		case 'Lap-Pengiriman-Produksi-Outgoing' :				
			if(!file_exists ("daftar/daftar_transfer_produksi-outgoing.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_transfer_produksi-outgoing.php"; break;	
		case 'Lap-Pengiriman-Outgoing-Incoming' :				
			if(!file_exists ("daftar/daftar_transfer_outgoing-incoming.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_transfer_outgoing-incoming.php"; break;	
		case 'Lap-Pengiriman-Outgoing-Produksi' :				
			if(!file_exists ("daftar/daftar_transfer_outgoing-produksi.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_transfer_outgoing-produksi.php"; break;	
		case 'Lap-Pengiriman-Produksi-Brgjadi' :				
			if(!file_exists ("daftar/daftar_transfer_produksi-brgjadi.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_transfer_produksi-brgjadi.php"; break;	

				
		# DATA STOCK
		case 'Barang-Stock' :				
			if(!file_exists ("data/stock_barang.php")) die ("Sorry Empty Page!"); 
			include "data/stock_barang.php"; break;
		case 'Pemasukan-Stock' :				
			if(!file_exists ("data/stock_pemasukan.php")) die ("Sorry Empty Page!"); 
			include "data/stock_pemasukan.php"; break;
		case 'Produksi-Stock' :				
			if(!file_exists ("data/stock_produksi.php")) die ("Sorry Empty Page!"); 
			include "data/stock_produksi.php"; break;
		case 'Pengeluaran-Stock' :				
			if(!file_exists ("data/stock_pengeluaran.php")) die ("Sorry Empty Page!"); 
			include "data/stock_pengeluaran.php"; break;
		
		# UPLOAD DETAIL BRG DARI EXCEL
		case 'Upload-Excel-DaftarKodebrg' :				
			if(!file_exists ("upload/upload_excel_registrasi_kodebrg.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_registrasi_kodebrg.php"; break;
		case 'Upload-Excel-StockAwal' :				
			if(!file_exists ("upload/upload_excel_stock_awal.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_stock_awal.php"; break;
		case 'Upload-Excel-Pemasukan-Awal' :				
			if(!file_exists ("upload/upload_excel_pemasukan_awal.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_pemasukan_awal.php"; break;
		case 'Upload-Excel-Produksi-Awal' :				
			if(!file_exists ("upload/upload_excel_produksi_awal.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_produksi_awal.php"; break;
		case 'Upload-Excel-Pengeluaran-Awal' :				
			if(!file_exists ("upload/upload_excel_pengeluaran_awal.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_pengeluaran_awal.php"; break;
		case 'Upload-Detail-Incoming' :				
			if(!file_exists ("upload/upload_excel_trans_incoming.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_trans_incoming.php"; break;
		case 'Upload-Detail-Outgoing' :				
			if(!file_exists ("upload/upload_excel_trans_outgoing.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_trans_outgoing.php"; break;
		case 'Upload-Detail-Produksi' :				
			if(!file_exists ("upload/upload_excel_trans_produksi.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_trans_produksi.php"; break;
		case 'Upload-Detail-Incoming-Outgoing' :				
			if(!file_exists ("upload/upload_excel_trans_incoming-outgoing.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_trans_incoming-outgoing.php"; break;
		case 'Upload-Detail-Produksi-Outgoing' :				
			if(!file_exists ("upload/upload_excel_trans_produksi-outgoing.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_trans_produksi-outgoing.php"; break;
		case 'Upload-Detail-Produksi-Incoming' :				
			if(!file_exists ("upload/upload_excel_trans_produksi-incoming.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_trans_produksi-incoming.php"; break;
		case 'Upload-Detail-Outgoing-Incoming' :				
			if(!file_exists ("upload/upload_excel_trans_outgoing-incoming.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_trans_outgoing-incoming.php"; break;
		case 'Upload-Detail-Outgoing-Produksi' :				
			if(!file_exists ("upload/upload_excel_trans_outgoing-produksi.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_trans_outgoing-produksi.php"; break;
		case 'Upload-Detail-Brgjadi' :				
			if(!file_exists ("upload/upload_excel_trans_brgjadi.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_trans_brgjadi.php"; break;
		case 'Upload-Detail-Bahan' :				
			if(!file_exists ("upload/upload_excel_lap-pemakaian.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_lap-pemakaian.php"; break;
			
		# EDIT DETAIL UPLOAD DARI EXCEL
		case 'Edit-Trans-Incoming' :				
			if(!file_exists ("upload/trans_incoming_edit.php")) die ("Sorry Empty Page!"); 
			include "upload/trans_incoming_edit.php"; break;
		case 'Edit-Trans-Outgoing' :				
			if(!file_exists ("upload/trans_outgoing_edit.php")) die ("Sorry Empty Page!"); 
			include "upload/trans_outgoing_edit.php"; break;
		case 'Edit-Trans-Incoming-Produksi' :				
			if(!file_exists ("upload/incoming_produksi_edit.php")) die ("Sorry Empty Page!"); 
			include "upload/incoming_produksi_edit.php"; break;
		case 'Edit-Trans-Incoming-Outgoing' :				
			if(!file_exists ("upload/incoming_outgoing_edit.php")) die ("Sorry Empty Page!"); 
			include "upload/incoming_outgoing_edit.php"; break;
		case 'Edit-Trans-Produksi-Incoming' :				
			if(!file_exists ("upload/produksi_incoming_edit.php")) die ("Sorry Empty Page!"); 
			include "upload/produksi_incoming_edit.php"; break;
		case 'Edit-Trans-Produksi-Outgoing' :				
			if(!file_exists ("upload/produksi_outgoing_edit.php")) die ("Sorry Empty Page!"); 
			include "upload/produksi_outgoing_edit.php"; break;
		case 'Edit-Trans-Outgoing-Produksi' :				
			if(!file_exists ("upload/outgoing_produksi_edit.php")) die ("Sorry Empty Page!"); 
			include "upload/outgoing_produksi_edit.php"; break;
		case 'Edit-Trans-Outgoing-Incoming' :				
			if(!file_exists ("upload/outgoing_incoming_edit.php")) die ("Sorry Empty Page!"); 
			include "upload/outgoing_incoming_edit.php"; break;
			
		
		# CLOSING STOCK
		case 'Data-Closing' :				
			if(!file_exists ("data/data_closing.php")) die ("Sorry Empty Page!"); 
			include "data/data_closing.php"; break;
		case 'View-Closing' :				
			if(!file_exists ("daftar/daftar_closing.php")) die ("Sorry Empty Page!"); 
			include "daftar/daftar_closing.php"; break;
		case 'Closing-Scrap' :				
			if(!file_exists ("settings/closing_scrap.php")) die ("Sorry Empty Page!"); 
			include "settings/closing_scrap.php"; break;
		case 'Closing-Bahanbaku' :				
			if(!file_exists ("settings/closing_bahanbaku.php")) die ("Sorry Empty Page!"); 
			include "settings/closing_bahanbaku.php"; break;
		case 'Closing-Barangjadi' :				
			if(!file_exists ("settings/closing_barangjadi.php")) die ("Sorry Empty Page!"); 
			include "settings/closing_barangjadi.php"; break;
		case 'Closing-Barangmodal' :				
			if(!file_exists ("settings/closing_barangmodal.php")) die ("Sorry Empty Page!"); 
			include "settings/closing_barangmodal.php"; break;

		case 'Delete-Closingstock' :				
			if(!file_exists ("settings/closingstock_delete.php")) die ("Sorry Empty Page!"); 
			include "settings/closingstock_delete.php"; break;
		case 'Upload-Excel-Closing' :				
			if(!file_exists ("upload/upload_excel_closing_awal.php")) die ("Sorry Empty Page!"); 
			include "upload/upload_excel_closing_awal.php"; break;
			
		# PENGERJAAN DOKUMEN BC 27 (LAMPIRAN 9)
		case 'Data-BC27' :				
			if(!file_exists ("dokumen/data_bc27.php")) die ("Sorry Empty Page!"); 
			include "dokumen/data_bc27.php"; break;
		case 'Tambah-BC27' :				
			if(!file_exists ("dokumen/input_lampiran9.php")) die ("Sorry Empty Page!"); 
			include "dokumen/input_lampiran9.php"; break;
		case 'Data-BC40' :				
			if(!file_exists ("dokumen/data_bc40.php")) die ("Sorry Empty Page!"); 
			include "dokumen/data_bc40.php"; break;
		case 'Tambah-BC40' :				
			if(!file_exists ("dokumen/i_bc40.php")) die ("Sorry Empty Page!"); 
			include "dokumen/i_bc40.php"; break;
		case 'Edit-BC40' :				
			if(!file_exists ("dokumen/i_bc40_edit.php")) die ("Sorry Empty Page!"); 
			include "dokumen/i_bc40_edit.php"; break;
	
		default:
			if(!file_exists ("main.php")) die ("Empty Main Page!"); 
			include "main.php";						
		break;
	}
}
?>