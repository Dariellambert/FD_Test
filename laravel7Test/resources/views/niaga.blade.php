<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pricing example · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      span{
        color : green
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/niaga.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
  </head>
  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"> <img src="{{ asset('assets/images/logo.png') }}"> </h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Hosting</a>
    <a class="p-2 text-dark" href="#">Domain</a>
    <a class="p-2 text-dark" href="#">Server</a>
    <a class="p-2 text-dark" href="#">Website</a>
    <a class="p-2 text-dark" href="#">Afiliasi</a>
    <a class="p-2 text-dark" href="#">Promo</a>
    <a class="p-2 text-dark" href="#">Pembayaran</a>
    <a class="p-2 text-dark" href="#">Review</a>
    <a class="p-2 text-dark" href="#">Kontak</a>
    <a class="p-2 text-dark" href="#">Blog</a>
  </nav>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-6">
        <h2><b>PHP Hosting</b></h2>
        <h3>Cepat, handal, penuh dengan modul PHP yang anda butuhkan</h3>
        <p> <span class ="fa fa-check-circle"></span> Solusi PHP untuk performa query yang lebih cepat</p>
        <p> <span class ="fa fa-check-circle"></span> Konsumsi memori yang lebih rendah</p>
        <p> <span class ="fa fa-check-circle"></span> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 5.7</p>
        <p> <span class ="fa fa-check-circle"></span> Fitur enkripsi IonCUbe dan Zen Guard Loaders </p>
        
      </div>
      <div class="col-md-6">
      <img src="{{ asset('assets/svg/illustration banner PHP hosting-01.svg') }}">
        
      </div>
   </div>
</div>



<div class="container logofitur" id="feature">
<div class="row align-items-center" >
<div class="col-md-4" >
  <img src="{{ asset('assets/svg/icon PHP Hosting_zendguard.svg') }}" style ="padding-bottom:25pt; padding-top:60pt">
    <p class="text-muted">PHP Zenguard Loader</p>
  </div><!-- /.col-lg-4 -->
  <div class="col-md-4">
  <img src="{{ asset('assets/svg/composer.svg') }}">
    <p class="text-muted">PHP Composer</p>
  </div><!-- /.col-lg-4 -->
  <div class="col-md-4">
  <img src="{{ asset('assets/svg/icon PHP Hosting_ioncube.svg') }}" style ="padding-bottom:25pt; padding-top:60pt">
  <br>
    <p class="text-muted">PHP ionCUbe Loader</p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <p style = "font-size: 18pt"><b>Paket Hosting Singapura yang Tepat</b></p>
  <p class="lead">Diskon 40% + Domain dan SSL Gratis untuk Anda</p>
</div>

<div class="container">
  <div class="card-deck mb-4 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Bayi</h4>
      </div>
      <div class="card-body">
    
        <p id ="thePrice"> <strike>Rp {{ $price[0]->harga }}</strike> </p>
        <h1 class="card-title pricing-card-title">Rp {{ $price[0]->diskon }}<small class="text-muted">/ bln</small></h1>
      
        <div> <b>938</b> Pengguna Terdaftar</div>
        <ul class="list-unstyled mt-4 mb-4">
          <li><b>0.5x RESOURCE POWER</b></li>
          <li><b> 500 MB </b> Disk Space</li>
          <li><b>Unlimited</b> Bandwith</li>
          <li><b>Unlimited</b> Databases </li>
          <li><b>1</b> Domain </li>
          <li><b>Instant</b> Backup </li>
          <li><b>Unlimited SSL</b> Gratis Selamanya </li>
        </ul>
        <button type="button" id="buy" class="btn btn-lg btn-block btn-outline-primary">Pilih Sekarang</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Pelajar</h4>
      </div>
      <div class="card-body">
      <p><strike>Rp {{ $price[1]->harga }}</strike></p>
        <h1 class="card-title pricing-card-title">Rp {{ $price[1]->diskon }}<small class="text-muted">/ bln</small></h1>
        <div> <b>4.168</b> Pengguna Terdaftar</div>
        <ul class="list-unstyled mt-4 mb-4">
          <li><b>1x RESOURCE POWER</b></li>
          <li><b>Unlimited </b> Disk Space</li>
          <li><b>Unlimited</b> Bandwith</li>
          <li><b>Unlimited</b> POP3 Email</li>
          <li><b>Unlimited</b> Databases </li>
          <li><b>10</b> Addon Domain </li>
          <li><b>Instant</b> Backup </li>
          <li><b>Domain Gratis</b> Selamanya</li>
          <li><b>Unlimited SSL</b> Gratis Selamanya </li>
        </ul>
        <button type="button" id="buy" class="btn btn-lg btn-block btn-outline-primary">Pilih Sekarang</button>
      </div>
    </div>
    
    <div class="card mb-4 border-primary shadow-sm">
      <div class="card-header bg-primary text-white">
      <div class = "shadow-sm " id = "best"> <p><b>Best Seller</b></p></div>
       <div> <h4 class=font-weight-normal" id = "personal"><b>Personal</b></h4><br></div>
      <p style = "top: -100pt;"><strike>Rp {{ $price[2]->harga }} </strike></p>
        <h1 class="card-title pricing-card-title">Rp {{ $price[2]->diskon }}<small>/ bln</small></h1>
        <div> <b>10.017</b> Pengguna Terdaftar</div>
        </div>
        <div class="card-body" style = "top: -25pt; position: relative">
        <ul class="list-unstyled mt-4 mb-4">
          <li><b>2x RESOURCE POWER</b></li>
          <li><b>Unlimited </b> Disk Space</li>
          <li><b>Unlimited</b> Bandwith</li>
          <li><b>Unlimited</b> POP3 Email</li>
          <li><b>Unlimited</b> Databases </li>
          <li><b>Unlimited</b> Addon Domain </li>
          <li><b>Instant</b> Backup </li>
          <li><b>Domain Gratis</b> Selamanya</li>
          <li><b>Unlimited SSL</b> Gratis Selamanya </li>
          <li><b>Private</b> Name Server </li>
          <li><b>SpamAssassin</b> Mail Protection </li>
        </ul>
        <button type="button" id="buy" class="btn btn-lg btn-block btn-primary">Pilih Sekarang</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Bisnis</h4>
      </div>
      <div class="card-body">
      <p><strike>Rp {{ $price[3]->harga }}</strike> </p>
        <h1 class="card-title pricing-card-title">Rp {{ $price[3]->diskon }}<small class="text-muted">/ bln</small></h1>
        <div> <b>3.552</b> Pengguna Terdaftar</div>
        <ul class="list-unstyled mt-4 mb-4">
          <li><b>3x RESOURCE POWER</b></li>
          <li><b>Unlimited </b> Disk Space</li>
          <li><b>Unlimited</b> Bandwith</li>
          <li><b>Unlimited</b> POP3 Email</li>
          <li><b>Unlimited</b> Databases </li>
          <li><b>Unlimited</b> Addon Domain </li>
          <li><b>Instant</b> Backup & Restore </li>
          <li><b>Domain Gratis</b> Selamanya</li>
          <li><b>Unlimited SSL</b> Gratis Selamanya </li>
          <li><b>Private</b> Name Server </li>
          <li><b>Prioritas</b> Layanan Support </li>
          <li><span class ="fa fa-star"><span class ="fa fa-star"><span class ="fa fa-star"><span class ="fa fa-star"><span class ="fa fa-star"></span></li>
          <li><b>SpamExpert</b> Pro Mail Protection </li>
        </ul>
        <button type="button" id="buy" class="btn btn-lg btn-circle btn-outline-primary">Diskon 40%</button>
      </div>
    </div>
  </div>
  
  <div class ="container" style = "text-align: center">
    <p class = "lead"> Powerful dengan Limit PHP yang lebih besar </p>
    <div class = "row">
      <div class = "col-md-6">
        <table class="table table-striped">
          <tbody>
           <tr>
            <th scope="row"><span class ="fa fa-check-circle"></span></th>
              <td>max execution time 300s</td>
          </tr>
          <tr>
           <th scope="row"><span class ="fa fa-check-circle"></span></th>
             <td>max execution time 300s</td>
          </tr>
          <tr>
           <th scope="row"><span class ="fa fa-check-circle"></span></th>
            <td>php memory limit 1024 MB</td>
          </tr>
       </tbody>
      </table>
   </div>
   <div class = "col-md-6">
   <table class="table table-striped">
          <tbody>
           <tr>
            <th scope="row"><span class ="fa fa-check-circle"></span></th>
              <td>post max size 128 MB</td>
          </tr>
          <tr>
           <th scope="row"><span class ="fa fa-check-circle"></span></th>
             <td>Upload max filesize 128 MB</td>
          </tr>
          <tr>
           <th scope="row"><span class ="fa fa-check-circle"></span></th>
            <td>Max input vars 2500</td>
          </tr>
       </tbody>
      </table>
   </div>
 </div>
</div>

<div class="container" style = "text-align: center">
<p class = "lead"> Semua Paket Hosting Sudah Termasuk </p>
  <div class="row align-items-center">
    <div class="col">
    <img class="spec" src = "{{ asset('/assets/svg/icon PHP Hosting_PHP Semua Versi.svg') }}">
    <p><b>PHP Semua Versi</b><br>
    <small > Pilih mulai dari versi PHP 5.3 s/d PHP 7 Ubah sesuka Anda!</small></p>
    </div>
    <div class="col">
    <img class="spec" src = "{{ asset('/assets/svg/icon PHP Hosting_My SQL.svg') }}">
    <p><b>MySQL Versi 5.6</b><br>
    <small >Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</small></p>
    </div>
    <div class="col">
    <img class="spec" src = "{{ asset('/assets/svg/icon PHP Hosting_CPanel.svg') }}">
    <p><b>Panel HOsting cPanel</b><br>
    <small >Kelola website dengan panel canggih yang familiar di hati Anda.</small></p>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col">
    <img class="spec" src = "{{ asset('/assets/svg/icon PHP Hosting_garansi uptime.svg') }}">
    <p><b>Garansi Uptime 99.9%</b><br>
    <small >Data center yang mendukung kelangsungan website Anda 24/7</small></p>
    </div>
    <div class="col">
    <img class="spec" src = "{{ asset('/assets/svg/icon PHP Hosting_InnoDB.svg') }}">
    <p><b>Database InnoDB Unlimited</b><br>
    <small >Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</small></p>
    </div>
    <div class="col">
    <img class="spec" src = "{{ asset('/assets/svg/icon PHP Hosting_My SQL remote.svg') }}">
    <p><b>Wildcard Remote MySQL</b><br>
    <small >Mendukung s/d 25 max_user_connections dan 100 max_connections</small></p>
    </div>
  </div>
  </div>

  <div class="container">
  <p class = "lead" style= "text-align:center"> Mendukung Penuh Framework Laravel </p>
    <div class="row">
      <div class="col-md-6">
        <p> Tak perlu menggunakan dedicated server maupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda</p> 
        <small> <span class ="fa fa-check-circle"></span> Install laravel <b>1 klik</b> dengan Softaculous Installer.</small><br>
        <small> <span class ="fa fa-check-circle"></span> Mendukung ekstensi <b> PHP MCrypt, phar, mbstring, json,</b> dan <b>fileinfo.</b></small><br>
        <small> <span class ="fa fa-check-circle"></span> Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstall packages pilihan Anda.</small><br><br>
        <small style = "font-size: 5pt;">Nb. Composer dan SSH hanya tersedia pada paket personal dan bisnis</small><br><br>
        <button type="button" id="buy" class="btn btn-primary">Pilih Hosting Anda</button>
      </div>
      <div class="col-md-6">
      <img src="{{ asset('assets/svg/illustration banner support laravel hosting.svg') }}">
        
      </div>
   </div>
</div>

  <div class="container" id ="modul">
  <p class = "lead" style= "text-align:center"> Modul Lengkap untuk Menjalankan Aplikasi PHP Anda. </p>
    <div class="row">
      <div class="col">
      <ul class="list-unstyled text-small">
          <li class = "text-muted">IcePHP</a></li>
          <li class = "text-muted">apc</a></li>
          <li class = "text-muted">apcu</a></li>
          <li class = "text-muted">apm</a></li>
          <li class = "text-muted">ares</a></li>
          <li class = "text-muted">bcmath</a></li>
          <li class = "text-muted">bcompiler</a></li>
          <li class = "text-muted">big_int</a></li>
          <li class = "text-muted"></a>bitset</li>
          <li class = "text-muted"></a>bloomy</li>
          <li class = "text-muted"></a>bz2_filter</li>
          <li class = "text-muted"></a>clamav</li>
          <li class = "text-muted"></a>coin acceptor</li>
          <li class = "text-muted"></a>crack</li>
          <li class = "text-muted"></a>dba</li>
        </ul>
      </div>
      <div class="col">
        <ul class="list-unstyled text-small">
          <li class = "text-muted">http</a></li>
          <li class = "text-muted">huffman</a></li>
          <li class = "text-muted">idn</a></li>
          <li class = "text-muted">igbinary</a></li>
          <li class = "text-muted">imagick</a></li>
          <li class = "text-muted">imap</a></li>
          <li class = "text-muted"></a>included</li>
          <li class = "text-muted">inotify</a></li>
          <li class = "text-muted"></a>interbase</li>
          <li class = "text-muted"></a>intl</li>
          <li class = "text-muted"></a>ioncube_loader</li>
          <li class = "text-muted"></a>ioncube_loader_4</li>
          <li class = "text-muted"></a>jsmin</li>
          <li class = "text-muted"></a>json</li>
          <li class = "text-muted"></a>ldap</li>
        </ul>
      </div>
      <div class="col">
        <ul class="list-unstyled text-small">
          <li class = "text-muted">nd_pdo_mysql</a></li>
          <li class = "text-muted">oauth</a></li>
          <li class = "text-muted">oci8</a></li>
          <li class = "text-muted">odbc</a></li>
          <li class = "text-muted">opcache</a></li>
          <li class = "text-muted"></a>pdf</li>
          <li class = "text-muted"></a>pdo</li>
          <li class = "text-muted"></a>pdo_dblib</li>
          <li class = "text-muted"></a>pdo_firebird</li>
          <li class = "text-muted"></a>pdo_mysql</li>
          <li class = "text-muted"></a>pdo_odbc</li>
          <li class = "text-muted"></a>pdo_pdsql</li>
          <li class = "text-muted"></a>pdo_sqlite</li>
          <li class = "text-muted"></a>pgsql</li>
          <li class = "text-muted"></a>phalcon</li>
        </ul>
      </div>
      <div class="col">
        <ul class="list-unstyled text-small">
          <li class = "text-muted">stats</a></li>
          <li class = "text-muted">stem</a></li>
          <li class = "text-muted">stomp</a></li>
          <li class = "text-muted">suhosin</a></li>
          <li class = "text-muted"></a>sybase_ct</li>
          <li class = "text-muted"></a>sysvmsg</li>
          <li class = "text-muted"></a>sysvsem</li>
          <li class = "text-muted"></a>sysvshm</li>
          <li class = "text-muted"></a>tidy</li>
          <li class = "text-muted"></a>timezonedb</li>
          <li class = "text-muted"></a>trader</li>
          <li class = "text-muted"></a>translit</li>
          <li class = "text-muted">uploadprogress</a></li>
          <li class = "text-muted"></a>uri_template</li>
          <li class = "text-muted"></a>uuid</li>
        </ul>
      </div>
    </div>
    <div style= "text-align:center">
    <button type="button" id="seleng" class="btn btn-outline-primary">Selengkapnya</button>
    </div>
    </div>
</div>

<div class="container">
<p class ="lead">Linux Hosting yang Stabil dengan Teknologi Live</p><br>
    <div class="row">
      <div class="col-md-6">
        <small> SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LIVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan
      <b>MySQL</b> dan caching. Apache load balancer berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> protection dan auto backup untuk kenyamanan website PHP Anda.</small><br><br>
        <button type="button" id="buy" class="btn btn-primary">Pilih Hosting Anda</button>
      </div>
      <div class="col-md-6">
      <img src="{{ asset('assets/images/Image support.png') }}">
        
      </div>
   </div>
</div>

<footer>
<div class="row">
      <div class="col-md-5 offset-md-1">
        <p style = "text-align: justify"> Bagikan jika anda menyukai ini</p>
      </div>
      <div class="col-md-6" style = "text-align: left">
      <button type="button" class="btn btn-fb" style = "color:  #3b5998"><i class="fa fa-facebook-square"></i></button>
      <button type="button" class="btn btn-tw" style = "color:  #00acee"><i class="fa fa-twitter-square"></i></button>
      <button type="button" class="btn btn-gplus" style = "color:  #db4a39"><i class="fa fa-google-plus-square"></i></button>
        
      </div>
   </div>

   <div class = "row align-items-center" id = "mid-footer">
   <div class="col-md-9 offset-md-1">
        <h1>Perlu <b>BANTUAN</b> Hubungi Kami : <b>0274-53055</b></h1>
      </div>
      <div class="col-md-2">
      <button type="button" id="buy" class="btn btn-primary"><span class ="fa fa-comments-o"></span> Live Chat</button>
      </div>
   </div>
  
    <div class="row" id= "bottom-footer">
      <div class="col-md-3 offset-md-1">
      <h5 class="text-muted">HUBUNGI KAMI</h5>
      <p>0274-5305505 <br> Senin-Minggu <br> 24 Jam Nonstop</p>
      <p>Jl. Selokan Mataram Monjali<br> Karangjati MT 1/304<br> Sinduadi, Mlati, Sleman <br> Yogyakarta 55284</p>
        
      </div>
      <div class="col-md-3">
        <h5 class="text-muted">LAYANAN</h5>
        <ul class="list-unstyled text-small">
          <li><a  href="#">Domain</a></li>
          <li><a  href="#">Shared Hosting</a></li>
          <li><a  href="#">Cloud VPS Hosting</a></li>
          <li><a  href="#">Managed VPS Hosting</a></li>
          <li><a  href="#">Web Builder</a></li>
          <li><a  href="#">Keamanan SSL/HTTPS</a></li>
          <li><a  href="#">Jasa Pembuatan Website</a></li>
          <li><a  href="#">Program Affiliasi</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="text-muted">SERVICE HOSTING</h5>
        <ul class="list-unstyled text-small">
          <li><a  href="#">Hosting Murah</a></li>
          <li><a  href="#">Hosting Indonesia</a></li>
          <li><a  href="#">Hosting Singapura SG</a></li>
          <li><a  href="#">Hosting PHP</a></li>
          <li><a  href="#">Hosting Wordpress</a></li>
          <li><a  href="#">Hosting Laravel</a></li>
        </ul>
      </div>
      <div class="col-md-2">
        <h5 class="text-muted">TUTORIAL</h5>
        <ul class="list-unstyled text-small">
          <li><a  href="#">Knowledgebase</a></li>
          <li><a  href="#">Blog</a></li>
          <li><a  href="#">Cara Pembayaran</a></li>
        </ul>
      </div>
      <div class="col-md-3 offset-md-1">
          <h5 class="text-muted">TENTANG KAMI</h5>
          <ul class="list-unstyled text-small">
          <li><a  href="#">Tim Niagahoster</a></li>
          <li><a  href="#">Karir</a></li>
          <li><a  href="#">Events</a></li>
          <li><a  href="#">Penawaran & Promo Spesial</a></li>
          <li><a  href="#">Kontak Kami</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="text-muted">KENAPA PILIH NIAGA HOSTER</h5>
        <ul class="list-unstyled text-small">
          <li><a  href="#">Support Terbaik</a></li>
          <li><a  href="#">Garansi Harga Termurah</a></li>
          <li><a  href="#">Domain Gratis Selamanya</a></li>
          <li><a  href="#">Datacenter Hosting Terbaik</a></li>
          <li><a  href="#">Review Pelanggan</a></li>
        </ul>
      </div>
      <div class="col-md-3">
      <section id = "newsletter">
        <h5 class="text-muted">NEWSLETTER</h5>
        <div class="row left-content-center">
        <form action="" method="">
          <input type="email" name="email" placeholder="Email"><input type="submit" value="Berlangganan">
        </form>
       </div>
       <div class="row left-content-center">
        <small class = "text-muted">Dapatkan promo dan konten menarik dan penyedia hosting terbaik Anda.</small>
       </div>
      </div>
      </section>
      <div class="col-md-2 left-content-center" id = "follow">
      <button type="button" class="btn btn-fb" style = "color:  white"><i class="fa fa-facebook-square"></i></button>
      <button type="button" class="btn btn-tw" style = "color:  white"><i class="fa fa-twitter-square"></i></button>
      <button type="button" class="btn btn-gplus" style = "color:  white"><i class="fa fa-google-plus-square"></i></button>
      </div>
      <div class = "col-md-11 offset-md-1">
      <h5 class="text-muted">PEMBAYARAN</h5>
    </div>
    <div class = "col-md-11 offset-md-1 " id = "payment">
    <img src = "{{ asset('assets/svg/bca.svg') }}">
        <img src = "{{ asset('assets/svg/mandiri.svg') }}">
        <img src = "{{ asset('assets/svg/bni.svg') }}">
        <img src = "{{ asset('assets/svg/visa.svg') }}">
        <img src = "{{ asset('assets/svg/mastercard.svg') }}">
        <img src = "{{ asset('assets/svg/permata.svg') }}">
    </div>
    <small class = "text-muted col-md-11 offset-md-1"><br>aktivasi instan dengan e-Payment dan domain langsung aktif></small>
    <div class = "col-md-7 offset-md-1">
    <small class = "text-muted "><br>Copyright @2020 Niagahoster | Hosting powered by PHP7, CloudLinux,
   CloudFlare, BitNinja and DC Biznet Technovillage Jakarta <br> Cloud VPS Murah Powered by Webuzo Softacuolus
  Intel SSD and Cloud computing technology</small>
    </div>
    <div class = "col-md-3 offset-md-1" style = "color: white">
    <small class = "text-muted "> <a href = '#'>syarat dan ketentuan</a> | <a href> kebijakan privasi<a> </small>
    </div>
  </footer>
</body>
</html>
<script>
var value = document.getElementById("thePrice").innerHTML;

window.onload = function() {
  nfObject = new Intl.NumberFormat('en-US')
  output = nfObject.format(value)
  var value = document.getElementById("thePrice").value = output;
       
} 

</script>
</body>
</html>
