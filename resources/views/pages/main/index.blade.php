@if(Auth::check())
<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard | By Code Info</title>
      <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
      <style>

        .chart {
            width: 90%;
            height: 60%;
            padding: 20px;
            position: relative;
            margin-top: -40px;
            /* margin-left: -100px; */
        }
        /* CSS */
        .parent {
        padding-right: 1rem; /* px-4 pada Tailwind CSS */
        padding-left: 1rem; /* px-4 pada Tailwind CSS */
        margin-right: auto; /* mx-auto pada Tailwind CSS */
        margin-left: auto; /* mx-auto pada Tailwind CSS */
        max-width: 80%; /* container pada Tailwind CSS */
        }
        /* CSS */
        .child {
        padding: 1.5rem; /* p-6 pada Tailwind CSS */
        margin: 2.5rem; /* m-20 pada Tailwind CSS */
        background-color: #ffffff; /* bg-white pada Tailwind CSS */
        border-radius: 0.375rem; /* rounded pada Tailwind CSS */
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.1); /* shadow pada Tailwind CSS */
        }

        .diagram {
            margin-top: 50px;
            font-size: 20px;
        }

        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
    </style>
    </head>
    <body>
      <div class="container">
        <nav class="nav">
        <h1 class="judul"> Dashboard </h1>
          <ul>
            <li><a href="/dashboard">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
              </a></li>
            <li><a href="/dashboard">
              <i class="fas fa-solid fa-user-plus" style="color: #ffffff;"></i>
              <span class="nav-item">Tambah Siswa</span>
              </a></li>
            <li><a href="">
              <i class="fas fa-solid fa-calendar-plus" style="color: #ffffff;"></i>
              <span class="nav-item">Tambah Data</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Daftar Data</span>
            </a></li>
            <li><a href="/login/logout" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Keluar</span>
            </a></li>
          </ul>
        </nav>

        <section class="main">
          <div class="main-top">
            <h1>UKS SMK TELKOM BANJARBARU</h1>
            <div class="logoo">
                <img class="ulogo" src="img/uks.png" />
                <img class="tlogo" src="img/telkom.png" />
                <img class="plogo" src="img/pmi.png" />
            </div>
          </div>
          <div class="main-skills">
            <div class="card">
              <i class="fas fa-laptop-code"></i>
              <h3>Rekayasa Perangkat Lunak</h3>
              <p style="margin-bottom: 15px;">Jumlah data siswa sakit :</p>
              <span>12</span>
            </div>
            <div class="card">
              <i class="fa-solid fa-network-wired" style="color: #000000;"></i>
              <h3>Teknik Komputer Jaringan</h3>
              <p style="margin-bottom: 15px;">Jumlah data siswa sakit :</p>
              <span>9</span>
            </div>
            <div class="card">
              <i class="fas fa-palette"></i>
              <h3>Desain Komunikasi Visual</h3>
              <p style="margin-bottom: 15px;">Jumlah data siswa sakit :</p>
              <span>14</span>
            </div>
            <div class="card">
              <i class="fa-solid fa-bolt-lightning" style="color: #000000;"></i>
              <h3>Teknik Jaringan Akses</h3>
              <p style="margin-bottom: 15px;">Jumlah data siswa sakit :</p>
              <span>22</span>
            </div>
            <div class="card">
              <i class="fab fa-app-store-ios"></i>
              <h3>Animasi</h3>
              <p style="margin-bottom: 15px;">Jumlah data siswa sakit :</p>
              <span>17</span>
            </div>
            <div class="card">
              <i class="fa-solid fa-diagram-project" style="color: #000000;"></i>
              <h3>Teknik Jaringan Komputer dan Telekomunikasi</h3>
              <p style="margin-bottom: 15px;">Jumlah data siswa sakit :</p>
              <span >30</span>
            </div>
          </div>
            
          <h1 class="diagram">Diagram Siswa Sakit</h1>
          <center>  
            <div class="chart">
            <div class="parent">
            <div class="child">
                {!! $chart->container() !!}
            </div>
            </div>
            <script src="{{ $chart->cdn() }}"></script>
            {{ $chart->script() }}
            </div>
          </center>
          <!-- <section class="main-course">
            <h1>My courses</h1>
            <div class="course-box">
              <ul>
                <li class="active">In progress</li>
                <li>explore</li>
                <li>incoming</li>
                <li>finished</li>
              </ul>
              <div class="course">
                <div class="box">
                  <h3>HTML</h3>
                  <p>80% - progress</p>
                  <button>continue</button>
                  <i class="fab fa-html5 html"></i>
                </div>
                <div class="box">
                  <h3>CSS</h3>
                  <p>50% - progress</p>
                  <button>continue</button>
                  <i class="fab fa-css3-alt css"></i>
                </div>
                <div class="box">
                  <h3>JavaScript</h3>
                  <p>30% - progress</p>
                  <button>continue</button>
                  <i class="fab fa-js-square js"></i>
                </div>
              </div>
            </div>
          </section> -->
        </section>
      </div>
    </body>
    </html>
@endif
    