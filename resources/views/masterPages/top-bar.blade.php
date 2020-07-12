<nav class="navbar navbar-expand navbar-light bg-white topbar mb-2 static-top border">
    <div class="row">
        <li type="none" class="mr-1 ml-4">
            <i class="fa fa-calendar-check mr-1" style="color:#2979FF"></i>
            <a id="hari"></a>
            ,
            <a id="tanggal"></a>
            <a id="bulan"></a>
            <a id="tahun"></a>
            /
        </li>
        <li type="none">
            <a id="jam"></a>
            :
            <a id="menit"></a>
            :
            <a id="detik"></a>
        </li>
    </div>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell" style="color:#2979FF"></i>
                <span class="badge badge-danger badge-counter">{{ $artikel->count() }}</span>
            </a>
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">Notifikasi</h6>
                <?php $no = 0;?>
                @foreach ($artikel->take(3) as $i)
                <?php $no++ ;?>
                <div class="pl-2 pt-2">
                    <span class="mr-1">{{ $no }}.</span>
                    <a href="" style="text-transform: lowercase">{{ substr($i->judul,0,40) }}...</a>
                </div>
                @endforeach
                <a class="dropdown-item text-center small text-gray-500" href="#">Lihat Semua</a>
            </div>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle" src="{{ asset('images/boy.png') }}">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Log Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
<script>
    // Hours
    window.setTimeout("waktu()", 1000);

    function addZero(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    function waktu() {
        var waktu = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = addZero(waktu.getHours());
        document.getElementById("menit").innerHTML = addZero(waktu.getMinutes());
        document.getElementById("detik").innerHTML = addZero(waktu.getSeconds());
    }

    // Day
    arrHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]
    Hari = new Date().getDay();
    document.getElementById("hari").innerHTML = arrHari[Hari];

    // Date
    Tanggal = new Date().getDate();
    document.getElementById("tanggal").innerHTML = Tanggal;

    // Month
    arrbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    Bulan = new Date().getMonth();
    document.getElementById("bulan").innerHTML = arrbulan[Bulan];

    // Year
    Tahun = new Date().getFullYear();
    document.getElementById("tahun").innerHTML = Tahun;

</script>