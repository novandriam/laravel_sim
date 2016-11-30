
<?php
// untuk superadmin
if(isset($_SESSION['SES_SUPERADMIN'])){

//UNTUK HOME

echo"<li class='home'><a href='?page=Halaman-Utama'><span>Home</span></a></li>";

//UNTUK LAPORAN
echo"<li class='laporan'><a href='#'><span>Laporan</span></a>
      <ul>
         <li class='has-sub'><a href='' title='Laporan Pemasukan Per dok pabean'>Pemasukan </a>
			<ul>
          		<li class='has-sub'><a href='?page=Lap-Pemasukan-Perdokpab' title='Tampilan View'>View</a></li>
          		<li><a href='?page=Lap-Excel-Pemasukan-Perdokpab' title='Export ke Excel'>Excel</a></li>
         	</ul>
   		 </li>
		 <li class='has-sub '><a href='' title='Laporan Posisi Barang dalam proses (WIP)'>Posisi WIP </a>
			<ul>
          		<li><a href='?page=Lap-Posisi-Wip' title='Tampilan View'>View</a></li>
          		<li><a href='?page=Lap-Excel-Posisi-Wip' title='Export ke Excel'>Excel</a></li>
         	</ul>
		 </li>
		 <li class='has-sub '><a href='' title='Laporan Pengeluaran Per dok pabean'>Pengeluaran </a>
		 	<ul>
           		<li><a href='?page=Lap-Pengeluaran-Perdokpab' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Pengeluaran-Perdokpab' title='Export ke Excel'>Excel</a></li>
         	</ul>
   		 </li>
		 <li class='has-sub '><a href='' title='Laporan Bulanan ke Hanggar'>Bulanan </a>
		 	<ul>
           		<li><a href='?page=Lap-Excel-Bulanan-Pemasukan' title='Laporan Bulanan Kegiatan Pemasukan KB'>Pemasukan</a></li>
           		<li><a href='?page=Lap-Excel-Bulanan-Pengeluaran' title='Laporan Bulanan Kegiatan Pengeluaran KB'>Pengeluaran</a></li>
           		<li><a href='?page=Lap-Excel-Bulanan-Transaksi' title='Laporan Bulanan Transaksi Pemasukan dan Pengeluaran KB'>Transaksi</a></li>

         	</ul>
   		 </li>
		 <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Bahan baku/Penolong'>Mutasi Bahan Baku </a>
 		 	<ul>
           		<li><a href='?page=Lap-Mutasi-BahanBaku' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BahanBaku' title='Export ke Excel'>Excel</a></li>
         	</ul>
		 </li>
     <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Jadi'>Mutasi Barang Jadi</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangJadi' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangJadi' title='Export ke Excel'>Excel</a></li>
         	</ul>
	 </li>
	 <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Mesin dan Peralatan Perkantoran'>Mutasi Barang Modal</a>
 	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangModal' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangModal' title='Export ke Excel'>Excel</a></li>
         	</ul>

	 </li>
 <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Sisa/Scrap'>Mutasi Scrap</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-Scrap' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-Scrap' title='Export ke Excel'>Excel</a></li>
         	</ul>
 </li>
           </ul>
   </li>";
   
//UNTUK PENGATURAN / CONTROL PANEL
echo"<li class='panel'><a href='#'><span>Control Panel</span></a>
  <ul>
   <li><a href='?page=Data-Perusahaan' title='Data Perusahaan'>Info KB</a></li>
   <li class='has-sub'><a href='' title='Data Barang'>Master Barang</a>
	<ul>
 		<li><a href='?page=Data-Barang' title='Data barang'>Data Barang</a></li>
 		<li><a href='?page=Barang-Stock' title='Cari Stock Barang'>Cari Barang</a></li>
		<li class='has-subb'><a href='' title='Upload Excel'>Upload Awal</a>
			<ul>
				<li><a href='?page=Upload-Excel-StockAwal' title='Upload Excel Stock Awal'>Stock Awal</a></li>
				<li><a href='?page=Upload-Excel-Closing' title='Upload Excel Clossing'>Closing </a></li>
				<li><a href='?page=Upload-Excel-Pemasukan-Awal' title='Upload Excel Stock Pemasukan'>Pemasukan </a></li>
				<li><a href='?page=Upload-Excel-Produksi-Awal' title='Upload Excel Stock Produksi'>Produksi</a></li>
				<li><a href='?page=Upload-Excel-Pengeluaran-Awal' title='Upload Excel Stock Pengeluaran'>Pengeluaran </a></li>
         	</ul>
		</li>
 	</ul>
   </li>
   <li class='has-sub '><a href='' title='Backup dan Restore Database'> Database</a>
	<ul>
        <li><a href='?page=Backup-Database' title='Backup dan Download Database'>Backup</a></li>
        <li><a href='?page=Restore-Database' title='Restore Database'>Restore</a></li>
    </ul> 
   </li>
   <li><a href='?page=Data-Kategori' title='Data Kategori'>Kategori</a></li>
   <li><a href='?page=Data-Catatan' title='Data Tujuan Pengiriman'>Cat. Kirim</a></li>
   <li><a href='?page=Data-Dept' title='Data Bagian/departemen'>Dept</a></li>    
   <li><a href='?page=Data-Supplier' title='Data Supplier'>Pemasok</a></li>
   <li><a href='?page=Data-Penerima' title='Data Penerima'>Penerima</a></li>
   <li class='has-sub '><a href='#'>Jenis DokPab</a>
      <ul>
        <li><a href='?page=Data-Jenisbcmasuk' title='Data Jenis dokpab Masuk'>Masuk</a></li>
        <li><a href='?page=Data-Jenisbckeluar' title='Data Jenis dokpab Keluar'>Keluar</a></li>
      </ul>
   </li>
   <li class='has-sub '><a href='#'>Referensi</a>
      <ul>
        <li><a href='?page=Data-Satuan' title='Data Satuan Barang'>Satuan barang</a></li>
        <li><a href='?page=Data-Kemasan' title='Data Kemasan Barang'>Kemasan barang</a></li>
        <li><a href='?page=Data-Matauang' title='Data Mata Uang'>Mata Uang</a></li>
      </ul>
   </li>
   <li><a href='?page=Aktivitas-User' title='Lihat Aktivitas User'>Aktifitas User</a></li>
   <li class='has-sub '><a href='#'>User/Pengguna</a>
      <ul>
        <li><a href='?page=Data-User' title='User Aplikasi Offline'>User Offline</a></li>
        <li><a href='?page=Data-Pengguna' title='Data Mata Uang'>Pengguna Online</a></li>
      </ul>
   </li>
   </ul></li>";

//UNTUK USER PEMASUKAN
echo"<li class='masuk'><a href='#'><span>Pemasukan</span></a>
  <ul>
  		  <li><a href='?page=Pemasukan-Stock' title='Stock Pemasukan'>Stock</a></li>
		 <li><a href='?page=Pemasukan-Data' title='Data Pemasukan'>Incoming</a></li>
	 
         <li class='has-sub '><a href='#'>Transfer</a>
            <ul>
               <li><a href='?page=Pemakaian-Data' title='Penyerahan Bahan untuk proses produksi'> Produksi</a></li>
               <li><a href='?page=Incoming-Outgoing-Data' title='Penyerahan barang ke Outgoing'> Outgoing</a></li>
            </ul> 
         </li>
		 <li class='has-sub '><a href='#'>Terima barang</a>
            <ul>
               <li><a href='?page=Incoming-Lpb-Data' title='Laporan Penerimaan Barang'>LPB</a></li>
               <li><a href='?page=Incoming-Terima-Data' title='Barang yang akan masuk'>Inbox</a></li>
			   <li class='has-subb'><a href='' title='Laporan Penerimaan Barang Per Tgl Terima'>Laporan</a>
		  		<ul>
          			<li><a href='?page=Lap-Incoming-Terima' title='Tampilan View'>View</a></li>
          			<li><a href='?page=Lap-Excel-Incoming-Terima' title='Export ke Excel'>Excel</a></li>
         		</ul>
		</li>

            </ul>
         </li>
		 <li class='has-sub '><a href='#'>Upload Detail</a>
            <ul>
               <li><a href='?page=Upload-Detail-Incoming' title='Upload Excel Detail Barang Incoming'>Incoming</a></li>
			   <li><a href='?page=Upload-Detail-Produksi' title='Upload Excel Detail Barang Transfer ke Produksi'>Trt Produksi</a></li>
               <li><a href='?page=Upload-Detail-Incoming-Outgoing' title='Upload Excel Detail Barang Transfer ke Outgoing'>Trt Outgoing</a></li>
            </ul>
         </li>
		  <li class='has-sub '><a href='#'>Laporan</a>
      <ul>
          <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl penerimaan'>Per Tgl BPB</a>
		  <ul>
          <li><a href='?page=Lap-Pemasukan-Pertglpenerimaan' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglbpb' title='Export ke Excel'>Excel</a></li>
         </ul></li>
         <li class='has-subb'><a href='' title='Lap Pemasukan Per Jenis dokpab'>Per Jenis Dokpab</a>
		 <ul>
           <li><a href='?page=Lap-Pemasukan-Perjenisdokpab' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Pemasukan-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>		  
        <li class='has-subb'><a href='' title='Lap Pemasukan Per Pemasok/Supplier'>Supplier</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Perpemasok' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Perpemasok' title='Export ke Excel'>Excel</a></li>
         </ul></li>		      
        <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl invoice'>Per Tgl Invoice</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
		   <ul>
           <li><a href='?page=Lap-Pengiriman-Incoming-Produksi' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Incoming-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		<li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
         <li><a href='?page=Lap-Pengiriman-Incoming-Outgoing' title='Tampilan View'>View</a></li>
         <li><a href='?page=Lap-Excel-Incoming-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul></li>
        </ul>
		 </li>
  </ul></li>";

//UNTUK USER PRODUKSI
echo"<li class='produksi'><a href='#'><span>Produksi</span></a>
<ul>
	<li><a href='?page=Produksi-Stock' title='Stock Produksi'>Stock</a></li>
	<li class='has-sub'><a href='?page=Produksi-Stock' title='Laporan Produksi'>Laporan Produksi</a>
	<ul>
	<li><a href='?page=Brgjadi-Data' title='Data Laporan Produksi Barang Jadi'>LP Barang Jadi</a></li>
	<li><a href='?page=Scrap-Data' title='Data Laporan Scrap'>Laporan Scrap</a></li>
	<li><a href='?page=Bahan-Data' title='Data Laporan Scrap'>Laporan Pemakaian Bahan</a></li>
	<li><a href='?page=Brgjadi_Gabung-Add' title='Data LP Barang Jadi/Scrap beserta konversi'>LP Gabungan</a></li>
	</ul>
	</li>
		<li><a href='?page=Konversi-Data' title='Konversi Barang Jadi'>Konversi</a></li>
	<li class='has-sub'><a href='#'>Transfer</a>
      <ul>
         <li><a href='?page=Produksi-Incoming-Data' title='Penyerahan bahan ke Incoming'>Incoming</a></li>
         <li><a href='?page=Produksi-Outgoing-Data' title='Penyerahan barang ke Outgoing'>Outgoing</a></li>
       </ul>
	</li>
	<li class='has-sub '><a href='#'>Terima barang</a>
            <ul>
               <li><a href='?page=Produksi-Lpb-Data' title='Laporan Penerimaan Barang'>LPB</a></li>
               <li><a href='?page=Produksi-Terima-Data' title='Barang yang akan masuk'>Inbox</a></li>
			   <li class='has-subb'><a href='' title='Laporan Penerimaan Barang Per Tgl Terima'>Laporan</a>
		  		<ul>
          			<li><a href='?page=Lap-Produksi-Terima' title='Tampilan View'>View</a></li>
          			<li><a href='?page=Lap-Excel-Produksi-Terima' title='Export ke Excel'>Excel</a></li>
         		</ul>
			   </li>
            </ul>
         </li>
		<li class='has-sub '><a href='#'>Upload Detail</a>
            <ul>
<li><a href='?page=Upload-Detail-Brgjadi' title='Upload Excel Detail Laporan Produksi'>Laporan Produksi</a></li>			   
<li><a href='?page=Upload-Detail-Produksi-Incoming' title='Upload Excel Detail Barang Transfer ke Incoming'>Trt Incoming</a></li>
<li><a href='?page=Upload-Detail-Produksi-Outgoing' title='Upload Excel Detail Barang Transfer ke Outgoing'>Trt Outgoing</a></li>
            </ul>
         </li>

	<li class='has-sub '><a href='#'>Laporan</a>
       <ul>
		 <li class='has-subb'><a href='?page=Lap-Posisi-Wip' title='Posisi WIP'>Posisi WIP</a>
		 <ul>
          <li><a href='?page=Lap-Posisi-Wip' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Posisi-Wip' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Laporan Produksi '>Barang Jadi/Scrap</a>
		 <ul>
          <li><a href='?page=Lap-Barangjadi' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Brgjadi' title='Export ke Excel'>Excel</a></li>
         </ul>
		 </li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Outgoing' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
        </ul>
    </li>
</ul></li>";

//UNTUK USER PENGELUARAN
echo"<li class='keluar'><a href='#'><span>Pengeluaran</span></a>
<ul>

 <li><a href='?page=Pengeluaran-Stock' title='Stock Pengeluaran'>Stock</a></li>
   <li><a href='?page=Pengeluaran-Data' title='Pengeluaran barang ke penerima'>Outgoing</a></li>
    <li><a href='?page=Pemusnahan-Data' title='Pemusnahan Barang'>Pemusnahan</a></li>
   <li class='has-sub '><a href='#'>Transfer</a>
     <ul>
       <li><a href='?page=Outgoing-Incoming-Data' title='Penyerahan barang ke Incoming'>Incoming</a></li>
       <li><a href='?page=Outgoing-Produksi-Data' title='Penyerahan barang ke Produksi'>Produksi</a></li>
     </ul>
   </li>
   <li class='has-sub '><a href='#'>Terima barang</a>
            <ul>
               <li><a href='?page=Outgoing-Lpb-Data' title='Laporan Penerimaan Barang'>LPB</a></li>
               <li><a href='?page=Outgoing-Terima-Data' title='Barang yang akan masuk'>Inbox</a></li>
			   <li class='has-subb'><a href='' title='Laporan Penerimaan Barang Per Tgl Terima'>Laporan</a>
		  		<ul>
          			<li><a href='?page=Lap-Outgoing-Terima' title='Tampilan View'>View</a></li>
          			<li><a href='?page=Lap-Excel-Outgoing-Terima' title='Export ke Excel'>Excel</a></li>
         		</ul>
			   </li>

            </ul>
         </li>
		  <li class='has-sub '><a href='#'>Upload Detail</a>
            <ul>
               <li><a href='?page=Upload-Detail-Outgoing' title='Upload Excel Detail Outgoing'>Outgoing</a></li>
			    <li><a href='?page=Upload-Detail-Outgoing-Incoming' title='Upload Excel Detail Barang Transfer ke Incoming'>Trt Incoming</a></li>
             <li><a href='?page=Upload-Detail-Outgoing-Produksi' title='Upload Excel Detail Barang Transfer ke Produksi'>Trt Produksi</a></li>
            </ul>
         </li>
<li class='has-sub'><a href='#'>Laporan</a>
     <ul>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Jalan'>Tgl Surat Jalan</a>
	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglpengeluaran' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglsj' title='Export ke Excel'>Excel</a></li>
         </ul>
		 </li>

       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Jenis dokpab'>Per Jenis Dokpab</a>
	    <ul>
          <li><a href='?page=Lap-Pengeluaran-Perjenisdokpab' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul>
	   </li>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Penerima'>Penerima</a>
 		<ul>
          <li><a href='?page=Lap-Pengeluaran-Perpenerima' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perpenerima' title='Export ke Excel'>Excel</a></li>
         </ul>
	   
	   </li>
     <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Invoice'>Tgl Invoice</a>
 	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul>
	 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
	   <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul>
 
 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
 <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Produksi' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul>
 </li>
      </ul>
    </li>

</ul></li>";

//UNTUK USER BEA CUKAI
echo"<li class='user'><a href='#'><span>User BC</span></a>
<ul>
<li class='has-sub '><a href='#'>Pemasukan</a>
              <ul>
		 <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl dok pabean'>Per Tgl Dokpab</a>
		  <ul>
           <li><a href='?page=Lap-Pemasukan-Perdokpab' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Perdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>

          <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl penerimaan'>Per Tgl BPB</a>
		  <ul>
          <li><a href='?page=Lap-Pemasukan-Pertglpenerimaan' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglbpb' title='Export ke Excel'>Excel</a></li>
         </ul></li>
         <li class='has-subb'><a href='' title='Lap Pemasukan Per Jenis dokpab'>Per Jenis Dokpab</a>
		 <ul>
           <li><a href='?page=Lap-Pemasukan-Perjenisdokpab' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Pemasukan-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>		  
        <li class='has-subb'><a href='' title='Lap Pemasukan Per Pemasok/Supplier'>Supplier</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Perpemasok' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Perpemasok' title='Export ke Excel'>Excel</a></li>
         </ul></li>		      
        <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl invoice'>Per Tgl Invoice</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
		   <ul>
           <li><a href='?page=Lap-Pengiriman-Incoming-Produksi' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Incoming-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		<li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
         <li><a href='?page=Lap-Pengiriman-Incoming-Outgoing' title='Tampilan View'>View</a></li>
         <li><a href='?page=Lap-Excel-Incoming-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul></li>
        </ul>
        
         </li>
		 <li class='has-sub '><a href='#'>Produksi</a>
             <ul>
		 <li class='has-subb'><a href='?page=Lap-Posisi-Wip' title='Posisi WIP'>Posisi WIP</a>
		 <ul>
          <li><a href='?page=Lap-Posisi-Wip' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Posisi-Wip' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Outgoing' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
        </ul>

    </li>
		 <li class='has-sub '><a href='#'>Pengeluaran</a>
     <ul>
	 <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Dok pabean'>Tgl dokpabean</a>
 		 <ul>
           <li><a href='?page=Lap-Pengeluaran-Perdokpab' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Pengeluaran-Perdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Jalan'>Tgl Surat Jalan</a>
	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglpengeluaran' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglsj' title='Export ke Excel'>Excel</a></li>
         </ul>
		 </li>

       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Jenis dokpab'>Per Jenis Dokpab</a>
	    <ul>
          <li><a href='?page=Lap-Pengeluaran-Perjenisdokpab' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul>
	   </li>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Penerima'>Penerima</a>
 		<ul>
          <li><a href='?page=Lap-Pengeluaran-Perpenerima' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perpenerima' title='Export ke Excel'>Excel</a></li>
         </ul>
	   
	   </li>
     <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Invoice'>Tgl Invoice</a>
 	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul>
	 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
	   <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul>
 
 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
 <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Produksi' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul>
 </li>
      </ul>
    </li>
		<li class='has-sub '><a href='?page=Laporan-Mutasi' title='Laporan Mutasi Barang'>Lap.Mutasi</a>
		<ul>
   		 <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Bahan baku/Penolong'>Mutasi Bahan Baku </a>
 		 	<ul>
           		<li><a href='?page=Lap-Mutasi-BahanBaku' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BahanBaku' title='Export ke Excel'>Excel</a></li>
         	</ul>
		 </li>
     <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Jadi'>Mutasi Barang Jadi</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangJadi' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangJadi' title='Export ke Excel'>Excel</a></li>
         	</ul>
	 </li>
	 <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Mesin dan Peralatan Perkantoran'>Mutasi Barang Modal</a>
 	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangModal' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangModal' title='Export ke Excel'>Excel</a></li>
         	</ul>

	 </li>
 <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Sisa/Scrap'>Mutasi Scrap</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-Scrap' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-Scrap' title='Export ke Excel'>Excel</a></li>
         	</ul>
 </li>

	</ul></li>
</ul></li>";

//UNTUK MANAJEMEN STOCK (STOCK OPNAME,ADJUSTMENT,CLOSING)
echo"<li class='stock'><a href='#'><span>Stock</span></a>
<ul>
<li><a href='?page=Data-StockOpname' title='Data Stock Opname'>Stock Opname</a></li>
<li><a href='?page=Data-Penyesuaian' title='Data Adjustment/Penyesuaian'>Adjustment</a></li>
<li><a href='?page=Data-Closing' title='Data Closing'>Closing Stock</a></li>
</ul></li>";

//UNTUK PENGERJAAN DOKUMEN
echo"<li class='produksi'><a href='#'><span>Dokumen</span></a>
<ul>
<li><a href='?page=Data-BC40' title='Data dokumen BC 4.0'>BC 4.0</a></li>
<li><a href='' title='Data dokumen BC 4.1'>BC 4.1</a></li>
<li><a href='' title='Data dokumen BC 2.6.1'>BC 2.6.1</a></li>
<li><a href='' title='Data dokumen BC 2.6.2'>BC 2.6.2</a></li>
<li><a href='?page=Data-BC27' title='Data dokumen BC 2.7'>BC 2.7</a></li>
</ul></li>";



//UNTUK LOGOUT
echo"   <li class='logout'><a href='?page=Logout'><span>Logout</span></a></li>
</ul>";	


}
elseif(isset($_SESSION['SES_PEMASUKAN'])){
//UNTUK HOME

echo"<li class='home'><a href='?page=Halaman-Utama'><span>Home</span></a></li>";
//UNTUK USER PEMASUKAN
echo"<li class='masuk'><a href='#'><span>Pemasukan</span></a>
  <ul>
  		  <li><a href='?page=Pemasukan-Stock' title='Stock Pemasukan'>Stock</a></li>
		 <li><a href='?page=Pemasukan-Data' title='Data Pemasukan'>Incoming</a></li>
	 
         <li class='has-sub '><a href='#'>Transfer</a>
            <ul>
               <li><a href='?page=Pemakaian-Data' title='Penyerahan Bahan untuk proses produksi'> Produksi</a></li>
               <li><a href='?page=Incoming-Outgoing-Data' title='Penyerahan barang ke Outgoing'> Outgoing</a></li>
            </ul> 
         </li>
		 <li class='has-sub '><a href='#'>Terima barang</a>
            <ul>
               <li><a href='?page=Incoming-Lpb-Data' title='Laporan Penerimaan Barang'>LPB</a></li>
               <li><a href='?page=Incoming-Terima-Data' title='Barang yang akan masuk'>Inbox</a></li>
			   <li class='has-subb'><a href='' title='Laporan Penerimaan Barang Per Tgl Terima'>Laporan</a>
		  		<ul>
          			<li><a href='?page=Lap-Incoming-Terima' title='Tampilan View'>View</a></li>
          			<li><a href='?page=Lap-Excel-Incoming-Terima' title='Export ke Excel'>Excel</a></li>
         		</ul>
		</li>

            </ul>
         </li>
		 <li class='has-sub '><a href='#'>Upload Detail</a>
            <ul>
               <li><a href='?page=Upload-Detail-Incoming' title='Upload Excel Detail Barang Incoming'>Incoming</a></li>
			   <li><a href='?page=Upload-Detail-Produksi' title='Upload Excel Detail Barang Transfer ke Produksi'>Trt Produksi</a></li>
               <li><a href='?page=Upload-Detail-Incoming-Outgoing' title='Upload Excel Detail Barang Transfer ke Outgoing'>Trt Outgoing</a></li>
            </ul>
         </li>
		  <li class='has-sub '><a href='#'>Laporan</a>
      <ul>
          <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl penerimaan'>Per Tgl BPB</a>
		  <ul>
          <li><a href='?page=Lap-Pemasukan-Pertglpenerimaan' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglbpb' title='Export ke Excel'>Excel</a></li>
         </ul></li>
         <li class='has-subb'><a href='' title='Lap Pemasukan Per Jenis dokpab'>Per Jenis Dokpab</a>
		 <ul>
           <li><a href='?page=Lap-Pemasukan-Perjenisdokpab' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Pemasukan-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>		  
        <li class='has-subb'><a href='' title='Lap Pemasukan Per Pemasok/Supplier'>Supplier</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Perpemasok' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Perpemasok' title='Export ke Excel'>Excel</a></li>
         </ul></li>		      
        <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl invoice'>Per Tgl Invoice</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
		   <ul>
           <li><a href='?page=Lap-Pengiriman-Incoming-Produksi' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Incoming-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		<li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
         <li><a href='?page=Lap-Pengiriman-Incoming-Outgoing' title='Tampilan View'>View</a></li>
         <li><a href='?page=Lap-Excel-Incoming-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul></li>
        </ul>
		 </li>
  </ul></li>";

  

//UNTUK LOGOUT
echo"   <li class='logout'><a href='?page=Logout'><span>Logout</span></a></li>";	

}

elseif(isset($_SESSION['SES_PRODUKSI'])){
//UNTUK HOME

echo"<li class='home'><a href='?page=Halaman-Utama'><span>Home</span></a></li>";
//UNTUK USER PRODUKSI
echo"<li class='produksi'><a href='#'><span>Produksi</span></a>
<ul>
	<li><a href='?page=Produksi-Stock' title='Stock Produksi'>Stock</a></li>
	<li class='has-sub'><a href='?page=Produksi-Stock' title='Laporan Produksi'>Laporan Produksi</a>
	<ul>
	<li><a href='?page=Brgjadi-Data' title='Data Laporan Produksi Barang Jadi'>LP Barang Jadi</a></li>
	<li><a href='?page=Scrap-Data' title='Data Laporan Scrap'>Laporan Scrap</a></li>
	<li><a href='?page=Bahan-Data' title='Data Laporan Scrap'>Laporan Pemakaian Bahan</a></li>
	<li><a href='?page=Brgjadi_Gabung-Add' title='Data LP Barang Jadi/Scrap beserta konversi'>LP Gabungan</a></li>
	</ul>
	</li>

	<li><a href='?page=Konversi-Data' title='Konversi Barang Jadi'>Konversi</a></li>
	<li class='has-sub '><a href='#'>Transfer</a>
      <ul>
         <li><a href='?page=Produksi-Incoming-Data' title='Penyerahan bahan ke Incoming'>Incoming</a></li>
         <li><a href='?page=Produksi-Outgoing-Data' title='Penyerahan barang ke Outgoing'>Outgoing</a></li>
       </ul>
	</li>
	<li class='has-sub '><a href='#'>Terima barang</a>
            <ul>
               <li><a href='?page=Produksi-Lpb-Data' title='Laporan Penerimaan Barang'>LPB</a></li>
               <li><a href='?page=Produksi-Terima-Data' title='Barang yang akan masuk'>Inbox</a></li>
			   <li class='has-subb'><a href='' title='Laporan Penerimaan Barang Per Tgl Terima'>Laporan</a>
		  		<ul>
          			<li><a href='?page=Lap-Produksi-Terima' title='Tampilan View'>View</a></li>
          			<li><a href='?page=Lap-Excel-Produksi-Terima' title='Export ke Excel'>Excel</a></li>
         		</ul>
			   </li>
            </ul>
         </li>
		<li class='has-sub '><a href='#'>Upload Detail</a>
            <ul>
<li><a href='?page=Upload-Detail-Brgjadi' title='Upload Excel Detail Laporan Produksi'>Laporan Produksi</a></li>			   
<li><a href='?page=Upload-Detail-Produksi-Incoming' title='Upload Excel Detail Barang Transfer ke Incoming'>Trt Incoming</a></li>
<li><a href='?page=Upload-Detail-Produksi-Outgoing' title='Upload Excel Detail Barang Transfer ke Outgoing'>Trt Outgoing</a></li>
            </ul>
         </li>

	<li class='has-sub '><a href='#'>Laporan</a>
       <ul>
		 <li class='has-subb'><a href='?page=Lap-Posisi-Wip' title='Posisi WIP'>Posisi WIP</a>
		 <ul>
          <li><a href='?page=Lap-Posisi-Wip' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Posisi-Wip' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Laporan Produksi '>Barang Jadi/Scrap</a>
		 <ul>
          <li><a href='?page=Lap-Barangjadi' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Brgjadi' title='Export ke Excel'>Excel</a></li>
         </ul>
		 </li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Outgoing' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
        </ul>
    </li>
</ul></li>";



//UNTUK LOGOUT
echo"   <li class='logout'><a href='?page=Logout'><span>Logout</span></a></li>";	
}

elseif(isset($_SESSION['SES_PENGELUARAN'])){
//UNTUK HOME

echo"<li class='home'><a href='?page=Halaman-Utama'><span>Home</span></a></li>";

//UNTUK USER PENGELUARAN
echo"<li class='keluar'><a href='#'><span>Pengeluaran</span></a>
<ul>

 <li><a href='?page=Pengeluaran-Stock' title='Stock Pengeluaran'>Stock</a></li>
   <li><a href='?page=Pengeluaran-Data' title='Pengeluaran barang ke penerima'>Outgoing</a></li>
       <li><a href='?page=Pemusnahan-Data' title='Pemusnahan Barang'>Pemusnahan</a></li>

   <li class='has-sub '><a href='#'>Transfer</a>
     <ul>
       <li><a href='?page=Outgoing-Incoming-Data' title='Penyerahan barang ke Incoming'>Incoming</a></li>
       <li><a href='?page=Outgoing-Produksi-Data' title='Penyerahan barang ke Produksi'>Produksi</a></li>
     </ul>
   </li>
   <li class='has-sub '><a href='#'>Terima barang</a>
            <ul>
               <li><a href='?page=Outgoing-Lpb-Data' title='Laporan Penerimaan Barang'>LPB</a></li>
               <li><a href='?page=Outgoing-Terima-Data' title='Barang yang akan masuk'>Inbox</a></li>
			   <li class='has-subb'><a href='' title='Laporan Penerimaan Barang Per Tgl Terima'>Laporan</a>
		  		<ul>
          			<li><a href='?page=Lap-Outgoing-Terima' title='Tampilan View'>View</a></li>
          			<li><a href='?page=Lap-Excel-Outgoing-Terima' title='Export ke Excel'>Excel</a></li>
         		</ul>
			   </li>

            </ul>
         </li>
		  <li class='has-sub '><a href='#'>Upload Detail</a>
            <ul>
               <li><a href='?page=Upload-Detail-Outgoing' title='Upload Excel Detail Outgoing'>Outgoing</a></li>
			    <li><a href='?page=Upload-Detail-Outgoing-Incoming' title='Upload Excel Detail Barang Transfer ke Incoming'>Trt Incoming</a></li>
             <li><a href='?page=Upload-Detail-Outgoing-Produksi' title='Upload Excel Detail Barang Transfer ke Produksi'>Trt Produksi</a></li>
            </ul>
         </li>
<li class='has-sub'><a href='#'>Laporan</a>
     <ul>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Jalan'>Tgl Surat Jalan</a>
	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglpengeluaran' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglsj' title='Export ke Excel'>Excel</a></li>
         </ul>
		 </li>

       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Jenis dokpab'>Per Jenis Dokpab</a>
	    <ul>
          <li><a href='?page=Lap-Pengeluaran-Perjenisdokpab' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul>
	   </li>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Penerima'>Penerima</a>
 		<ul>
          <li><a href='?page=Lap-Pengeluaran-Perpenerima' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perpenerima' title='Export ke Excel'>Excel</a></li>
         </ul>
	   
	   </li>
     <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Invoice'>Tgl Invoice</a>
 	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul>
	 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
	   <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul>
 
 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
 <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Produksi' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul>
 </li>
      </ul>
    </li>

</ul></li>";


//UNTUK LOGOUT
echo"   <li class='logout'><a href='?page=Logout'><span>Logout</span></a></li>";	
}

elseif(isset($_SESSION['SES_EXIM'])){
//UNTUK HOME

echo"<li class='home'><a href='?page=Halaman-Utama'><span>Home</span></a></li>";
//UNTUK LAPORAN
echo"<li class='has-sub'><a href='#'><span>Laporan</span></a>
      <ul>
         <li class='has-sub '><a href='' title='Laporan Pemasukan Per dok pabean'>Pemasukan </a>
			<ul>
          		<li><a href='?page=Lap-Pemasukan-Perdokpab' title='Tampilan View'>View</a></li>
          		<li><a href='?page=Lap-Excel-Pemasukan-Perdokpab' title='Export ke Excel'>Excel</a></li>
         	</ul>
   		 </li>
		 <li class='has-sub '><a href='' title='Laporan Posisi Barang dalam proses (WIP)'>Posisi WIP </a>
			<ul>
          		<li><a href='?page=Lap-Posisi-Wip' title='Tampilan View'>View</a></li>
          		<li><a href='?page=Lap-Excel-Posisi-Wip' title='Export ke Excel'>Excel</a></li>
         	</ul>
		 </li>
		 <li class='has-sub '><a href='' title='Laporan Pengeluaran Per dok pabean'>Pengeluaran </a>
		 	<ul>
           		<li><a href='?page=Lap-Pengeluaran-Perdokpab' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Pengeluaran-Perdokpab' title='Export ke Excel'>Excel</a></li>
         	</ul>
   		 </li>
		  <li class='has-sub '><a href='' title='Laporan Bulanan ke Hanggar'>Bulanan </a>
		 	<ul>
           		<li><a href='?page=Lap-Excel-Bulanan-Pemasukan' title='Laporan Bulanan Kegiatan Pemasukan KB'>Pemasukan</a></li>
           		<li><a href='?page=Lap-Excel-Bulanan-Pengeluaran' title='Laporan Bulanan Kegiatan Pengeluaran KB'>Pengeluaran</a></li>
           		<li><a href='?page=Lap-Excel-Bulanan-Transaksi' title='Laporan Bulanan Transaksi Pemasukan dan Pengeluaran KB'>Transaksi</a></li>

         	</ul>
   		 </li>
		 		 <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Bahan baku/Penolong'>Mutasi Bahan Baku </a>
 		 	<ul>
           		<li><a href='?page=Lap-Mutasi-BahanBaku' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BahanBaku' title='Export ke Excel'>Excel</a></li>
         	</ul>
		 </li>
     <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Jadi'>Mutasi Barang Jadi</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangJadi' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangJadi' title='Export ke Excel'>Excel</a></li>
         	</ul>
	 </li>
	 <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Mesin dan Peralatan Perkantoran'>Mutasi Barang Modal</a>
 	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangModal' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangModal' title='Export ke Excel'>Excel</a></li>
         	</ul>

	 </li>
 <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Sisa/Scrap'>Mutasi Scrap</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-Scrap' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-Scrap' title='Export ke Excel'>Excel</a></li>
         	</ul>
 </li>

           </ul>
   </li>";
//UNTUK USER BEA CUKAI
echo"<li class='user'><a href='#'><span>User BC</span></a>
<ul>
<li class='has-sub '><a href='#'>Pemasukan</a>
              <ul>
		 <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl dok pabean'>Per Tgl Dokpab</a>
		  <ul>
           <li><a href='?page=Lap-Pemasukan-Perdokpab' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Perdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>

          <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl penerimaan'>Per Tgl BPB</a>
		  <ul>
          <li><a href='?page=Lap-Pemasukan-Pertglpenerimaan' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglbpb' title='Export ke Excel'>Excel</a></li>
         </ul></li>
         <li class='has-subb'><a href='' title='Lap Pemasukan Per Jenis dokpab'>Per Jenis Dokpab</a>
		 <ul>
           <li><a href='?page=Lap-Pemasukan-Perjenisdokpab' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Pemasukan-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>		  
        <li class='has-subb'><a href='' title='Lap Pemasukan Per Pemasok/Supplier'>Supplier</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Perpemasok' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Perpemasok' title='Export ke Excel'>Excel</a></li>
         </ul></li>		      
        <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl invoice'>Per Tgl Invoice</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
		   <ul>
           <li><a href='?page=Lap-Pengiriman-Incoming-Produksi' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Incoming-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		<li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
         <li><a href='?page=Lap-Pengiriman-Incoming-Outgoing' title='Tampilan View'>View</a></li>
         <li><a href='?page=Lap-Excel-Incoming-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul></li>
        </ul>
        
         </li>
		 <li class='has-sub '><a href='#'>Produksi</a>
             <ul>
		 <li class='has-subb'><a href='?page=Lap-Posisi-Wip' title='Posisi WIP'>Posisi WIP</a>
		 <ul>
          <li><a href='?page=Lap-Posisi-Wip' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Posisi-Wip' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Outgoing' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
        </ul>

    </li>
		 <li class='has-sub '><a href='#'>Pengeluaran</a>
     <ul>
	 <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Dok pabean'>Tgl dokpabean</a>
 		 <ul>
           <li><a href='?page=Lap-Pengeluaran-Perdokpab' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Pengeluaran-Perdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Jalan'>Tgl Surat Jalan</a>
	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglpengeluaran' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglsj' title='Export ke Excel'>Excel</a></li>
         </ul>
		 </li>

       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Jenis dokpab'>Per Jenis Dokpab</a>
	    <ul>
          <li><a href='?page=Lap-Pengeluaran-Perjenisdokpab' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul>
	   </li>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Penerima'>Penerima</a>
 		<ul>
          <li><a href='?page=Lap-Pengeluaran-Perpenerima' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perpenerima' title='Export ke Excel'>Excel</a></li>
         </ul>
	   
	   </li>
     <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Invoice'>Tgl Invoice</a>
 	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul>
	 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
	   <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul>
 
 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
 <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Produksi' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul>
 </li>
      </ul>
    </li>
		<li class='has-sub '><a href='?page=Laporan-Mutasi' title='Laporan Mutasi Barang'>Lap.Mutasi</a>
		<ul>
    		 <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Bahan baku/Penolong'>Mutasi Bahan Baku </a>
 		 	<ul>
           		<li><a href='?page=Lap-Mutasi-BahanBaku' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BahanBaku' title='Export ke Excel'>Excel</a></li>
         	</ul>
		 </li>
     <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Jadi'>Mutasi Barang Jadi</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangJadi' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangJadi' title='Export ke Excel'>Excel</a></li>
         	</ul>
	 </li>
	 <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Mesin dan Peralatan Perkantoran'>Mutasi Barang Modal</a>
 	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangModal' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangModal' title='Export ke Excel'>Excel</a></li>
         	</ul>

	 </li>
 <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Sisa/Scrap'>Mutasi Scrap</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-Scrap' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-Scrap' title='Export ke Excel'>Excel</a></li>
         	</ul>
 </li>

	</ul></li>
</ul></li>";


//UNTUK MANAJEMEN STOCK (STOCK OPNAME,ADJUSTMENT,CLOSING)
echo"<li class='stock'><a href='#'><span>Stock</span></a>
<ul>
<li><a href='?page=Data-StockOpname' title='Data Stock Opname'>Stock Opname</a></li>
<li><a href='?page=Data-Penyesuaian' title='Data Adjustment/Penyesuaian'>Adjustment</a></li>
<li><a href='?page=Data-Closing' title='Data Closing'>Closing Stock</a></li>
</ul></li>";



//UNTUK LOGOUT
echo"   <li class='logout'><a href='?page=Logout'><span>Logout</span></a></li>";	
}

elseif(isset($_SESSION['SES_HIGHEST'])){
//UNTUK HOME

echo"<li class='home'><a href='?page=Halaman-Utama'><span>Home</span></a></li>";
//UNTUK LAPORAN
echo"<li class='laporan'><a href='#'><span>Laporan</span></a>
      <ul>
         <li class='has-sub'><a href='' title='Laporan Pemasukan Per dok pabean'>Pemasukan </a>
			<ul>
          		<li class='has-sub'><a href='?page=Lap-Pemasukan-Perdokpab' title='Tampilan View'>View</a></li>
          		<li><a href='?page=Lap-Excel-Pemasukan-Perdokpab' title='Export ke Excel'>Excel</a></li>
         	</ul>
   		 </li>
		 <li class='has-sub '><a href='' title='Laporan Posisi Barang dalam proses (WIP)'>Posisi WIP </a>
			<ul>
          		<li><a href='?page=Lap-Posisi-Wip' title='Tampilan View'>View</a></li>
          		<li><a href='?page=Lap-Excel-Posisi-Wip' title='Export ke Excel'>Excel</a></li>
         	</ul>
		 </li>
		 <li class='has-sub '><a href='' title='Laporan Pengeluaran Per dok pabean'>Pengeluaran </a>
		 	<ul>
           		<li><a href='?page=Lap-Pengeluaran-Perdokpab' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Pengeluaran-Perdokpab' title='Export ke Excel'>Excel</a></li>
         	</ul>
   		 </li>
		  <li class='has-sub '><a href='' title='Laporan Bulanan ke Hanggar'>Bulanan </a>
		 	<ul>
           		<li><a href='?page=Lap-Excel-Bulanan-Pemasukan' title='Laporan Bulanan Kegiatan Pemasukan KB'>Pemasukan</a></li>
           		<li><a href='?page=Lap-Excel-Bulanan-Pengeluaran' title='Laporan Bulanan Kegiatan Pengeluaran KB'>Pengeluaran</a></li>
           		<li><a href='?page=Lap-Excel-Bulanan-Transaksi' title='Laporan Bulanan Transaksi Pemasukan dan Pengeluaran KB'>Transaksi</a></li>

         	</ul>
   		 </li>
		  <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Bahan baku/Penolong'>Mutasi Bahan Baku </a>
 		 	<ul>
           		<li><a href='?page=Lap-Mutasi-BahanBaku' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BahanBaku' title='Export ke Excel'>Excel</a></li>
         	</ul>
		 </li>
     <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Jadi'>Mutasi Barang Jadi</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangJadi' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangJadi' title='Export ke Excel'>Excel</a></li>
         	</ul>
	 </li>
	 <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Mesin dan Peralatan Perkantoran'>Mutasi Barang Modal</a>
 	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangModal' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangModal' title='Export ke Excel'>Excel</a></li>
         	</ul>

	 </li>
 <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Sisa/Scrap'>Mutasi Scrap</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-Scrap' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-Scrap' title='Export ke Excel'>Excel</a></li>
         	</ul>
 </li>

           </ul>
   </li>";


//UNTUK MANAJEMEN STOCK (STOCK OPNAME,ADJUSTMENT,CLOSING)
echo"<li class='stock'><a href='#'><span>Stock</span></a>
<ul>
<li><a href='?page=Data-StockOpname' title='Data Stock Opname'>Stock Opname</a></li>
<li><a href='?page=Data-Penyesuaian' title='Data Adjustment/Penyesuaian'>Adjustment</a></li>
<li><a href='?page=Data-Closing' title='Data Closing'>Closing Stock</a></li>
</ul></li>";


//UNTUK LOGOUT
echo"   <li class='logout'><a href='?page=Logout'><span>Logout</span></a></li>
</ul>";	
}

elseif(isset($_SESSION['SES_BEACUKAI'])){
//UNTUK HOME

echo"<li class='home'><a href='?page=Halaman-Utama'><span>Home</span></a></li>";
//UNTUK USER BEA CUKAI
echo"<li class='user'><a href='#'><span>User BC</span></a>
<ul>
<li class='has-sub '><a href='#'>Pemasukan</a>
              <ul>
		 <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl dok pabean'>Per Tgl Dokpab</a>
		  <ul>
           <li><a href='?page=Lap-Pemasukan-Perdokpab' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Perdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>

          <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl penerimaan'>Per Tgl BPB</a>
		  <ul>
          <li><a href='?page=Lap-Pemasukan-Pertglpenerimaan' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglbpb' title='Export ke Excel'>Excel</a></li>
         </ul></li>
         <li class='has-subb'><a href='' title='Lap Pemasukan Per Jenis dokpab'>Per Jenis Dokpab</a>
		 <ul>
           <li><a href='?page=Lap-Pemasukan-Perjenisdokpab' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Pemasukan-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>		  
        <li class='has-subb'><a href='' title='Lap Pemasukan Per Pemasok/Supplier'>Supplier</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Perpemasok' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Perpemasok' title='Export ke Excel'>Excel</a></li>
         </ul></li>		      
        <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl invoice'>Per Tgl Invoice</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
		   <ul>
           <li><a href='?page=Lap-Pengiriman-Incoming-Produksi' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Incoming-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		<li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
         <li><a href='?page=Lap-Pengiriman-Incoming-Outgoing' title='Tampilan View'>View</a></li>
         <li><a href='?page=Lap-Excel-Incoming-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul></li>
        </ul>
        
         </li>
		 <li class='has-sub '><a href='#'>Produksi</a>
             <ul>
		 <li class='has-subb'><a href='?page=Lap-Posisi-Wip' title='Posisi WIP'>Posisi WIP</a>
		 <ul>
          <li><a href='?page=Lap-Posisi-Wip' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Posisi-Wip' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Outgoing' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
        </ul>

    </li>
		 <li class='has-sub '><a href='#'>Pengeluaran</a>
     <ul>
	 <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Dok pabean'>Tgl dokpabean</a>
 		 <ul>
           <li><a href='?page=Lap-Pengeluaran-Perdokpab' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Pengeluaran-Perdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Jalan'>Tgl Surat Jalan</a>
	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglpengeluaran' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglsj' title='Export ke Excel'>Excel</a></li>
         </ul>
		 </li>

       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Jenis dokpab'>Per Jenis Dokpab</a>
	    <ul>
          <li><a href='?page=Lap-Pengeluaran-Perjenisdokpab' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul>
	   </li>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Penerima'>Penerima</a>
 		<ul>
          <li><a href='?page=Lap-Pengeluaran-Perpenerima' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perpenerima' title='Export ke Excel'>Excel</a></li>
         </ul>
	   
	   </li>
     <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Invoice'>Tgl Invoice</a>
 	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul>
	 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
	   <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul>
 
 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
 <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Produksi' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul>
 </li>
      </ul>
    </li>
		<li class='has-sub '><a href='?page=Laporan-Mutasi' title='Laporan Mutasi Barang'>Lap.Mutasi</a>
		<ul>
    		 <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Bahan baku/Penolong'>Mutasi Bahan Baku </a>
 		 	<ul>
           		<li><a href='?page=Lap-Mutasi-BahanBaku' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BahanBaku' title='Export ke Excel'>Excel</a></li>
         	</ul>
		 </li>
     <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Jadi'>Mutasi Barang Jadi</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangJadi' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangJadi' title='Export ke Excel'>Excel</a></li>
         	</ul>
	 </li>
	 <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Mesin dan Peralatan Perkantoran'>Mutasi Barang Modal</a>
 	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangModal' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangModal' title='Export ke Excel'>Excel</a></li>
         	</ul>

	 </li>
 <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Sisa/Scrap'>Mutasi Scrap</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-Scrap' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-Scrap' title='Export ke Excel'>Excel</a></li>
         	</ul>
 </li>

	</ul></li>
</ul></li>";



//UNTUK LOGOUT
echo"   <li class='logout'><a href='?page=Logout'><span>Logout</span></a></li>";	
}
elseif(isset($_SESSION['SES_ADMIN'])){
//UNTUK HOME

echo"<li class='home'><a href='?page=Halaman-Utama'><span>Home</span></a></li>";
//UNTUK LAPORAN
echo"<li class='laporan'><a href='#'><span>Laporan</span></a>
      <ul>
         <li class='has-sub'><a href='' title='Laporan Pemasukan Per dok pabean'>Pemasukan </a>
			<ul>
          		<li class='has-sub'><a href='?page=Lap-Pemasukan-Perdokpab' title='Tampilan View'>View</a></li>
          		<li><a href='?page=Lap-Excel-Pemasukan-Perdokpab' title='Export ke Excel'>Excel</a></li>
         	</ul>
   		 </li>
		 <li class='has-sub '><a href='' title='Laporan Posisi Barang dalam proses (WIP)'>Posisi WIP </a>
			<ul>
          		<li><a href='?page=Lap-Posisi-Wip' title='Tampilan View'>View</a></li>
          		<li><a href='?page=Lap-Excel-Posisi-Wip' title='Export ke Excel'>Excel</a></li>
         	</ul>
		 </li>
		 <li class='has-sub '><a href='' title='Laporan Pengeluaran Per dok pabean'>Pengeluaran </a>
		 	<ul>
           		<li><a href='?page=Lap-Pengeluaran-Perdokpab' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Pengeluaran-Perdokpab' title='Export ke Excel'>Excel</a></li>
         	</ul>
   		 </li>
		  <li class='has-sub '><a href='' title='Laporan Bulanan ke Hanggar'>Bulanan </a>
		 	<ul>
           		<li><a href='?page=Lap-Excel-Bulanan-Pemasukan' title='Laporan Bulanan Kegiatan Pemasukan KB'>Pemasukan</a></li>
           		<li><a href='?page=Lap-Excel-Bulanan-Pengeluaran' title='Laporan Bulanan Kegiatan Pengeluaran KB'>Pengeluaran</a></li>
           		<li><a href='?page=Lap-Excel-Bulanan-Transaksi' title='Laporan Bulanan Transaksi Pemasukan dan Pengeluaran KB'>Transaksi</a></li>

         	</ul>
   		 </li>
		 		 <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Bahan baku/Penolong'>Mutasi Bahan Baku </a>
 		 	<ul>
           		<li><a href='?page=Lap-Mutasi-BahanBaku' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BahanBaku' title='Export ke Excel'>Excel</a></li>
         	</ul>
		 </li>
     <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Jadi'>Mutasi Barang Jadi</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangJadi' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangJadi' title='Export ke Excel'>Excel</a></li>
         	</ul>
	 </li>
	 <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Mesin dan Peralatan Perkantoran'>Mutasi Barang Modal</a>
 	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangModal' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangModal' title='Export ke Excel'>Excel</a></li>
         	</ul>

	 </li>
 <li class='has-sub '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Sisa/Scrap'>Mutasi Scrap</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-Scrap' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-Scrap' title='Export ke Excel'>Excel</a></li>
         	</ul>
 </li>

           </ul>
   </li>";   
//UNTUK PENGATURAN / CONTROL PANEL
echo"<li class='panel'><a href='#'><span>Control Panel</span></a>
  <ul>
   <li class='has-sub '><a href='' title='Data Barang'>Master Barang</a>
	<ul>
 		<li><a href='?page=Data-Barang' title='Data barang'>Data Barang</a></li>
 		<li><a href='?page=Barang-Stock' title='Cari Stock Barang'>Cari Barang</a></li>
		
 	</ul>
   </li>
   <li class='has-sub '><a href='' title='Backup dan Restore Database'> Database</a>
	<ul>
        <li><a href='?page=Backup-Database' title='Backup dan Download Database'>Backup</a></li>
        <li><a href='?page=Restore-Database' title='Restore Database'>Restore</a></li>
    </ul> 
   </li>
   <li><a href='?page=Data-Catatan' title='Data Tujuan Pengiriman'>Cat. Kirim</a></li>
   <li><a href='?page=Data-Dept' title='Data Bagian/departemen'>Dept</a></li>    
   <li><a href='?page=Data-Supplier' title='Data Supplier'>Pemasok</a></li>
   <li><a href='?page=Data-Penerima' title='Data Penerima'>Penerima</a></li>
   <li class='has-sub '><a href='#'>Jenis DokPab</a>
      <ul>
        <li><a href='?page=Data-Jenisbcmasuk' title='Data Jenis dokpab Masuk'>Masuk</a></li>
        <li><a href='?page=Data-Jenisbckeluar' title='Data Jenis dokpab Keluar'>Keluar</a></li>
      </ul>
   </li>
   <li class='has-sub '><a href='#'>Referensi</a>
      <ul>
        <li><a href='?page=Data-Satuan' title='Data Satuan Barang'>Satuan barang</a></li>
        <li><a href='?page=Data-Kemasan' title='Data Kemasan Barang'>Kemasan barang</a></li>
        <li><a href='?page=Data-Matauang' title='Data Mata Uang'>Mata Uang</a></li>
      </ul>
   </li>
   <li><a href='?page=Aktivitas-User' title='Lihat Aktivitas User'>Aktifitas User</a></li>
   </ul></li>";

//UNTUK USER PEMASUKAN
echo"<li class='masuk'><a href='#'><span>Pemasukan</span></a>
  <ul>
  		  <li><a href='?page=Pemasukan-Stock' title='Stock Pemasukan'>Stock</a></li>
		 <li><a href='?page=Pemasukan-Data' title='Data Pemasukan'>Incoming</a></li>
	 
         <li class='has-sub '><a href='#'>Transfer</a>
            <ul>
               <li><a href='?page=Pemakaian-Data' title='Penyerahan Bahan untuk proses produksi'> Produksi</a></li>
               <li><a href='?page=Incoming-Outgoing-Data' title='Penyerahan barang ke Outgoing'> Outgoing</a></li>
            </ul> 
         </li>
		 <li class='has-sub '><a href='#'>Terima barang</a>
            <ul>
               <li><a href='?page=Incoming-Lpb-Data' title='Laporan Penerimaan Barang'>LPB</a></li>
               <li><a href='?page=Incoming-Terima-Data' title='Barang yang akan masuk'>Inbox</a></li>
			   <li class='has-subb'><a href='' title='Laporan Penerimaan Barang Per Tgl Terima'>Laporan</a>
		  		<ul>
          			<li><a href='?page=Lap-Incoming-Terima' title='Tampilan View'>View</a></li>
          			<li><a href='?page=Lap-Excel-Incoming-Terima' title='Export ke Excel'>Excel</a></li>
         		</ul>
		</li>

            </ul>
         </li>
		 <li class='has-sub '><a href='#'>Upload Detail</a>
            <ul>
               <li><a href='?page=Upload-Detail-Incoming' title='Upload Excel Detail Barang Incoming'>Incoming</a></li>
			   <li><a href='?page=Upload-Detail-Produksi' title='Upload Excel Detail Barang Transfer ke Produksi'>Trt Produksi</a></li>
               <li><a href='?page=Upload-Detail-Incoming-Outgoing' title='Upload Excel Detail Barang Transfer ke Outgoing'>Trt Outgoing</a></li>
            </ul>
         </li>
		  <li class='has-sub '><a href='#'>Laporan</a>
      <ul>
          <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl penerimaan'>Per Tgl BPB</a>
		  <ul>
          <li><a href='?page=Lap-Pemasukan-Pertglpenerimaan' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglbpb' title='Export ke Excel'>Excel</a></li>
         </ul></li>
         <li class='has-subb'><a href='' title='Lap Pemasukan Per Jenis dokpab'>Per Jenis Dokpab</a>
		 <ul>
           <li><a href='?page=Lap-Pemasukan-Perjenisdokpab' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Pemasukan-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>		  
        <li class='has-subb'><a href='' title='Lap Pemasukan Per Pemasok/Supplier'>Supplier</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Perpemasok' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Perpemasok' title='Export ke Excel'>Excel</a></li>
         </ul></li>		      
        <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl invoice'>Per Tgl Invoice</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
		   <ul>
           <li><a href='?page=Lap-Pengiriman-Incoming-Produksi' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Incoming-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		<li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
         <li><a href='?page=Lap-Pengiriman-Incoming-Outgoing' title='Tampilan View'>View</a></li>
         <li><a href='?page=Lap-Excel-Incoming-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul></li>
        </ul>
		 </li>
  </ul></li>";

//UNTUK USER PRODUKSI
echo"<li class='produksi'><a href='#'><span>Produksi</span></a>
<ul>
	<li><a href='?page=Produksi-Stock' title='Stock Produksi'>Stock</a></li>
	<li class='has-sub'><a href='?page=Produksi-Stock' title='Laporan Produksi'>Laporan Produksi</a>
	<ul>
	<li><a href='?page=Brgjadi-Data' title='Data Laporan Produksi Barang Jadi'>LP Barang Jadi</a></li>
	<li><a href='?page=Scrap-Data' title='Data Laporan Scrap'>Laporan Scrap</a></li>
	<li><a href='?page=Bahan-Data' title='Data Laporan Scrap'>Laporan Pemakaian Bahan</a></li>
	<li><a href='?page=Brgjadi_Gabung-Add' title='Data LP Barang Jadi/Scrap beserta konversi'>LP Gabungan</a></li>
	</ul>
	</li>

	<li><a href='?page=Konversi-Data' title='Konversi Barang Jadi'>Konversi</a></li>
	<li class='has-sub '><a href='#'>Transfer</a>
      <ul>
         <li><a href='?page=Produksi-Incoming-Data' title='Penyerahan bahan ke Incoming'>Incoming</a></li>
         <li><a href='?page=Produksi-Outgoing-Data' title='Penyerahan barang ke Outgoing'>Outgoing</a></li>
       </ul>
	</li>
	<li class='has-sub '><a href='#'>Terima barang</a>
            <ul>
               <li><a href='?page=Produksi-Lpb-Data' title='Laporan Penerimaan Barang'>LPB</a></li>
               <li><a href='?page=Produksi-Terima-Data' title='Barang yang akan masuk'>Inbox</a></li>
			   <li class='has-subb'><a href='' title='Laporan Penerimaan Barang Per Tgl Terima'>Laporan</a>
		  		<ul>
          			<li><a href='?page=Lap-Produksi-Terima' title='Tampilan View'>View</a></li>
          			<li><a href='?page=Lap-Excel-Produksi-Terima' title='Export ke Excel'>Excel</a></li>
         		</ul>
			   </li>
            </ul>
         </li>
		<li class='has-sub '><a href='#'>Upload Detail</a>
            <ul>
<li><a href='?page=Upload-Detail-Brgjadi' title='Upload Excel Detail Laporan Produksi'>Laporan Produksi</a></li>			   
<li><a href='?page=Upload-Detail-Produksi-Incoming' title='Upload Excel Detail Barang Transfer ke Incoming'>Trt Incoming</a></li>
<li><a href='?page=Upload-Detail-Produksi-Outgoing' title='Upload Excel Detail Barang Transfer ke Outgoing'>Trt Outgoing</a></li>
            </ul>
         </li>

	<li class='has-sub '><a href='#'>Laporan</a>
       <ul>
		 <li class='has-subb'><a href='?page=Lap-Posisi-Wip' title='Posisi WIP'>Posisi WIP</a>
		 <ul>
          <li><a href='?page=Lap-Posisi-Wip' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Posisi-Wip' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Laporan Produksi '>Barang Jadi/Scrap</a>
		 <ul>
          <li><a href='?page=Lap-Barangjadi' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Brgjadi' title='Export ke Excel'>Excel</a></li>
         </ul>
		 </li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Outgoing' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
        </ul>
    </li>
</ul></li>";

//UNTUK USER PENGELUARAN
echo"<li class='keluar'><a href='#'><span>Pengeluaran</span></a>
<ul>

 <li><a href='?page=Pengeluaran-Stock' title='Stock Pengeluaran'>Stock</a></li>
   <li><a href='?page=Pengeluaran-Data' title='Pengeluaran barang ke penerima'>Outgoing</a></li>
       <li><a href='?page=Pemusnahan-Data' title='Pemusnahan Barang'>Pemusnahan</a></li>
   <li class='has-sub '><a href='#'>Transfer</a>
     <ul>
       <li><a href='?page=Outgoing-Incoming-Data' title='Penyerahan barang ke Incoming'>Incoming</a></li>
       <li><a href='?page=Outgoing-Produksi-Data' title='Penyerahan barang ke Produksi'>Produksi</a></li>
     </ul>
   </li>
   <li class='has-sub '><a href='#'>Terima barang</a>
            <ul>
               <li><a href='?page=Outgoing-Lpb-Data' title='Laporan Penerimaan Barang'>LPB</a></li>
               <li><a href='?page=Outgoing-Terima-Data' title='Barang yang akan masuk'>Inbox</a></li>
			   <li class='has-subb'><a href='' title='Laporan Penerimaan Barang Per Tgl Terima'>Laporan</a>
		  		<ul>
          			<li><a href='?page=Lap-Outgoing-Terima' title='Tampilan View'>View</a></li>
          			<li><a href='?page=Lap-Excel-Outgoing-Terima' title='Export ke Excel'>Excel</a></li>
         		</ul>
			   </li>

            </ul>
         </li>
		  <li class='has-sub '><a href='#'>Upload Detail</a>
            <ul>
               <li><a href='?page=Upload-Detail-Outgoing' title='Upload Excel Detail Outgoing'>Outgoing</a></li>
			    <li><a href='?page=Upload-Detail-Outgoing-Incoming' title='Upload Excel Detail Barang Transfer ke Incoming'>Trt Incoming</a></li>
             <li><a href='?page=Upload-Detail-Outgoing-Produksi' title='Upload Excel Detail Barang Transfer ke Produksi'>Trt Produksi</a></li>
            </ul>
         </li>
<li class='has-sub'><a href='#'>Laporan</a>
     <ul>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Jalan'>Tgl Surat Jalan</a>
	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglpengeluaran' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglsj' title='Export ke Excel'>Excel</a></li>
         </ul>
		 </li>

       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Jenis dokpab'>Per Jenis Dokpab</a>
	    <ul>
          <li><a href='?page=Lap-Pengeluaran-Perjenisdokpab' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul>
	   </li>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Penerima'>Penerima</a>
 		<ul>
          <li><a href='?page=Lap-Pengeluaran-Perpenerima' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perpenerima' title='Export ke Excel'>Excel</a></li>
         </ul>
	   
	   </li>
     <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Invoice'>Tgl Invoice</a>
 	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul>
	 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
	   <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul>
 
 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
 <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Produksi' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul>
 </li>
      </ul>
    </li>

</ul></li>";

//UNTUK USER BEA CUKAI
echo"<li class='user'><a href='#'><span>User BC</span></a>
<ul>
<li class='has-sub '><a href='#'>Pemasukan</a>
              <ul>
		 <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl dok pabean'>Per Tgl Dokpab</a>
		  <ul>
           <li><a href='?page=Lap-Pemasukan-Perdokpab' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Perdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>

          <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl penerimaan'>Per Tgl BPB</a>
		  <ul>
          <li><a href='?page=Lap-Pemasukan-Pertglpenerimaan' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglbpb' title='Export ke Excel'>Excel</a></li>
         </ul></li>
         <li class='has-subb'><a href='' title='Lap Pemasukan Per Jenis dokpab'>Per Jenis Dokpab</a>
		 <ul>
           <li><a href='?page=Lap-Pemasukan-Perjenisdokpab' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Pemasukan-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>		  
        <li class='has-subb'><a href='' title='Lap Pemasukan Per Pemasok/Supplier'>Supplier</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Perpemasok' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Perpemasok' title='Export ke Excel'>Excel</a></li>
         </ul></li>		      
        <li class='has-subb'><a href='' title='Lap Pemasukan Per tgl invoice'>Per Tgl Invoice</a>
		<ul>
          <li><a href='?page=Lap-Pemasukan-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pemasukan-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
		   <ul>
           <li><a href='?page=Lap-Pengiriman-Incoming-Produksi' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Incoming-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		<li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
         <li><a href='?page=Lap-Pengiriman-Incoming-Outgoing' title='Tampilan View'>View</a></li>
         <li><a href='?page=Lap-Excel-Incoming-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul></li>
        </ul>
        
         </li>
		 <li class='has-sub '><a href='#'>Produksi</a>
             <ul>
		 <li class='has-subb'><a href='?page=Lap-Posisi-Wip' title='Posisi WIP'>Posisi WIP</a>
		 <ul>
          <li><a href='?page=Lap-Posisi-Wip' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Posisi-Wip' title='Export ke Excel'>Excel</a></li>
         </ul></li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
		 <li class='has-subb'><a href='' title='Lap Pengiriman ke Outgoing'>Trt Outgoing</a>
		 <ul>
          <li><a href='?page=Lap-Pengiriman-Produksi-Outgoing' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Produksi-Outgoing' title='Export ke Excel'>Excel</a></li>
         </ul> </li>
        </ul>

    </li>
		 <li class='has-sub '><a href='#'>Pengeluaran</a>
     <ul>
	 <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Dok pabean'>Tgl dokpabean</a>
 		 <ul>
           <li><a href='?page=Lap-Pengeluaran-Perdokpab' title='Tampilan View'>View</a></li>
           <li><a href='?page=Lap-Excel-Pengeluaran-Perdokpab' title='Export ke Excel'>Excel</a></li>
         </ul></li>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Jalan'>Tgl Surat Jalan</a>
	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglpengeluaran' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglsj' title='Export ke Excel'>Excel</a></li>
         </ul>
		 </li>

       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Jenis dokpab'>Per Jenis Dokpab</a>
	    <ul>
          <li><a href='?page=Lap-Pengeluaran-Perjenisdokpab' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perjenisdokpab' title='Export ke Excel'>Excel</a></li>
         </ul>
	   </li>
       <li class='has-subb'><a href='' title='Lap Pengeluaran Per Penerima'>Penerima</a>
 		<ul>
          <li><a href='?page=Lap-Pengeluaran-Perpenerima' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Perpenerima' title='Export ke Excel'>Excel</a></li>
         </ul>
	   
	   </li>
     <li class='has-subb'><a href='' title='Lap Pengeluaran Per Tanggal Surat Invoice'>Tgl Invoice</a>
 	   <ul>
          <li><a href='?page=Lap-Pengeluaran-Pertglinvoice' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Pengeluaran-Pertglinvoice' title='Export ke Excel'>Excel</a></li>
         </ul>
	 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Incoming'>Trt Incoming</a>
	   <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Incoming' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Incoming' title='Export ke Excel'>Excel</a></li>
         </ul>
 
 </li>
 <li class='has-subb'><a href='' title='Lap Pengiriman ke Produksi'>Trt Produksi</a>
 <ul>
          <li><a href='?page=Lap-Pengiriman-Outgoing-Produksi' title='Tampilan View'>View</a></li>
          <li><a href='?page=Lap-Excel-Outgoing-Produksi' title='Export ke Excel'>Excel</a></li>
         </ul>
 </li>
      </ul>
    </li>
		<li class='has-sub '><a href='?page=Laporan-Mutasi' title='Laporan Mutasi Barang'>Lap.Mutasi</a>
		<ul>
   		 <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Bahan baku/Penolong'>Mutasi Bahan Baku </a>
 		 	<ul>
           		<li><a href='?page=Lap-Mutasi-BahanBaku' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BahanBaku' title='Export ke Excel'>Excel</a></li>
         	</ul>
		 </li>
     <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Jadi'>Mutasi Barang Jadi</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangJadi' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangJadi' title='Export ke Excel'>Excel</a></li>
         	</ul>
	 </li>
	 <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Mesin dan Peralatan Perkantoran'>Mutasi Barang Modal</a>
 	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-BarangModal' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-BarangModal' title='Export ke Excel'>Excel</a></li>
         	</ul>

	 </li>
 <li class='has-subb '><a href='' title='Laporan Pertanggungjawaban Mutasi Barang Sisa/Scrap'>Mutasi Scrap</a>
	 	 	<ul>
           		<li><a href='?page=Lap-Mutasi-Scrap' title='Tampilan View'>View</a></li>
           		<li><a href='?page=Lap-Excel-Mutasi-Scrap' title='Export ke Excel'>Excel</a></li>
         	</ul>
 </li>

	</ul></li>
</ul></li>";


//UNTUK LOGOUT
echo"   <li class='logout'><a href='?page=Logout'><span>Logout</span></a></li>";	
}

else {
	echo "<ul><li class='masuk'><a href='?page=Login' title='Login System'>Login</a></li></ul>";	
}
?>
