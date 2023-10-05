<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dokter.dashboard') }}">
            <img src="{{ asset('img') }}/logo_engil.png" alt="" width="60%">
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ route('dokter.dashboard') }}">EPV</a>
    </div>
    <ul class="sidebar-menu mt-3">
        <li>
            <a class="nav-link" href="{{ route('dokter.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
        </li>
        <li class="menu-header">PEMERIKSAAN & VAKSIN</li>       
        <li>
            <a class="nav-link" href="{{ route('dokter.pemeriksaan.index') }}"><i class="fa fa-stethoscope"></i> <span>Pemeriksaan</span></a>
        </li>  
        <li>
            <a class="nav-link" href="{{ route('dokter.vaksinasi.index') }}"><i class="fa fa-flask"></i> <span>Vaksinasi</span></a>
        </li>     
    </ul>   
    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="{{ route('dokter.laporan.index') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fa fa-print"></i> Cetak Laporan
        </a>
    </div> 
</aside>