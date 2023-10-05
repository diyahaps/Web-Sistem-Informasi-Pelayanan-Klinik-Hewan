<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('img') }}/logo_engil.png" alt="" width="60%">
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ route('admin.dashboard') }}">EPV</a>
    </div>
    <ul class="sidebar-menu mt-3">
        <li>
            <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
        </li>
        
        <li class="dropdown active">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Master</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('admin.index') }}"><i class="fa fa-user"></i> <span>Admin</span></a>
                </li>          
                <li>
                    <a class="nav-link" href="{{ route('dokter.index') }}"><i class="fa fa-user-md"></i> <span>Dokter</span></a>
                </li>          
                <li>
                    <a class="nav-link" href="{{ route('pelanggan.index') }}"><i class="fa fa-users"></i> <span>Pelanggan</span></a>
                </li>          
                <li>
                    <a class="nav-link" href="{{ route('obat.index') }}"><i class="fa fa-medkit"></i> <span>Obat</span></a>
                </li>          
                <li>
                    <a class="nav-link" href="{{ route('kandang.index') }}"><i class="fa fa-recycle"></i> <span>Kandang</span></a>
                </li>          
                <li>
                    <a class="nav-link" href="{{ route('vaksin.index') }}"><i class="fa fa-flask"></i> <span>Vaksin</span></a>
                </li>        
                <li>
                    <a class="nav-link" href="{{ route('grooming.index') }}"><i class="fa fa-paw"></i> <span>Grooming</span></a>
                </li>
            </ul>
        </li>        
        
        <li class="menu-header">TRANSAKSI</li>       
        <li>
            <a class="nav-link" href="{{ route('reservasi.index') }}"><i class="fa fa-th-large"></i> <span>Reservasi</span></a>
        </li>  
        <li>
            <a class="nav-link" href="{{ route('pembayaran.index') }}"><i class="fa fa-database"></i> <span>Pembayaran</span></a>
        </li> 
        <li>
            <a class="nav-link" href="{{ route('reservasi.selesai') }}"><i class="fa fa-check"></i> <span>Selesai</span></a>
        </li>   
        <li>
            <a class="nav-link" href="{{ route('reservasi.batal') }}"><i class="fa fa-times"></i> <span>Batal</span></a>
        </li>    
    </ul>
    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="{{ route('laporan.index') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fa fa-print"></i> Cetak Laporan
        </a>
    </div>      
</aside>