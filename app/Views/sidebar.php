<style>
    .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: white;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: black;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #818181;;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
</style>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="dropdownMaster">Master</div>
    <div class="contentMaster">
        <a href="/karyawan">Karyawan</a>
        <a href="#">Supplier</a>
        <a href="#">Konsumen</a>
        <a href="/kategori">Kategori</a>
        <a href="/produk">Produk</a>
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

<span>Selamat Datang, </span>
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