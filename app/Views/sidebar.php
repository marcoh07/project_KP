<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="dropdownMaster">Master</div>
    <div class="contentMaster">
        <a href="#">Karyawan</a>
        <a href="#">Supplier</a>
        <a href="#">Konsumen</a>
        <a href="#">Kategori</a>
        <a href="#">Produk</a>
    </div>
    <div class="dropdownTransaksi">Transaksi</div>
    <div class="contentTransaksi">
        <a href="#">Pembelian</a>
        <a href="#">Penjualan</a>
    </div>
    <div class="dropdownLaporan">Laporan</div>
    <div class="contentLaporan">
        <a href="#">Mutasi Penjualan & Pembelian</a>
        <a href="#">Pembelian Per Supplier</a>
        <a href="#">Penjualan Per Customer</a>
        <a href="#">Barang Pembelian Terbanyak</a>
        <a href="#">Barang Penjualan Terbanyak</a>
    </div>
</div>
<span class="btn fa-stack fa-lg" onclick="openNav()">
    <i class="fa fa-circle fa-stack-2x" style="color: #3CBC8D;"></i>
    <i class="fa fa-list fa-stack-1x fa-inverse"></i>
</span>

<span>Selamat Datang, <?php echo $_SESSION['user']['name']?></span>
<br>

<script>
    function openNav() 
    {
        document.getElementById("mySidenav").style.width = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() 
    {
        document.getElementById("mySidenav").style.width = "0";
        document.body.style.backgroundColor = "white";
    }
</script>