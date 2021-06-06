<?php
// Menghubungkan php dengan koneksi database
session_start();
include ('../includes/koneksi.php');
if (!isset($_SESSION['username']))
{
    header("location:../login_register.php");
}
else {
   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NEWS Admin</title>
      <!-- Favicons -->
        <link href="assets/img/r.png" rel="icon">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
        if ($_SESSION['level']=="user"){
          header("location:../index.php?pesan=gagal");
        }
        else if ($_SESSION['level']==""){
          header("location:../login_register.php?pesan=gagal");
        }
    ?>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a style="font-weight:bold; color:yellow; "class="navbar-brand ps-3" href="admin.php">Welcome, Admins!</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <form action="" method="GET">
                            <br>
                              <tr>
                              <td>
                                <button type="submit" name="daftarakun" class="btn btn-dark">Daftar Akun</button>
                              </td>
                              <td>
                                <button type="submit" name="daftarposting" class="btn btn-dark">Daftar Postingan</button>
                              </td>
                              <td>
                              <button class="btn btn-dark"><a href="../tambah.php" style="text-decoration: none; color: white;">Tambah Berita</a></button>
                              </td>
                                  <br>
                              <td>
                                <button type="submit" class="btn btn-dark"><a href="../logout.php" style="text-decoration: none; color: white;">Keluar</a></button>
                              </td>
                              </tr>
                        </form>
                        <br>
                        <div class="sb-sidenav-footer">
                        <div class="small"><b>Logged in as: <?php echo $_SESSION['username']; ?></b></div>
                    </div>
                            </div>
                            </div>
                            </nav>
                            </div>
                            </div>

                            <div id="layoutSidenav_content">
                            <main>
                            <div class="container">
                                <div class="row justify-content-md-center">
                                    <div id="post">
                                      
                                    <!-- Tindakan setelah meng-klik tombol Hapus -->
                                    <?php
                                        if(isset($_POST['btnHapusG'])){
                          
                                          // Inisiasi variabel untuk menampung isian id
                                          $id=$_POST['id'];
                          
                                          if ($koneksi)
                                          {
                                            // Menghapus semua data dari tabel gambar dengan id yang sesuai
                                            $sql = "DELETE FROM gambar WHERE id=$id";
                                            mysqli_query($koneksi,$sql);
                                            
                                              echo '<script language="javascript">alert("Data Berita Berhasil dihapus."); document.location="admin.php?daftarposting=";</script>';
                                          } 
                                            else
                                            {
                                                  echo "<p class='alert alert-danger text-center><b>Data gagal dihapus. Terjadi kesalahan: ". $error. "</b></p>";
                                            }
                                        }
                                    ?>
                                        <?php
                                        if(isset($_POST['btnHapus'])){
                          
                                          // Inisiasi variabel untuk menampung isian id
                                          $id=$_POST['id'];
                          
                                          if ($koneksi)
                                          {
                                            // Menghapus semua data dari tabel gambar dengan id yang sesuai
                                            $sql = "DELETE FROM login1 WHERE id=$id";
                                            mysqli_query($koneksi,$sql);
                                           echo '<script language="javascript">alert("Data Akun Berhasil dihapus."); document.location="admin.php?daftarakun=";</script>';
                                          } 
                                            else
                                            {
                                                  echo "<p class='alert alert-danger text-center><b>Data gagal dihapus. Terjadi kesalahan: ". $error. "</b></p>";
                                            }
                                        }
                                    ?>
                          
                                    <!-- Ketika tombol Daftar Akun diklik maka akan ditampilkan data Akun dan Tindakan terhadap data tersebut   -->
                                    <?php
                                        // Jika tombol daftar akun diklik
                                        if(isset($_GET['daftarakun'])){
                                            echo "<br><br><br><br>";
                                          // Membuat fitur pagination
                                          if(isset($_GET['halaman']) && $_GET['halaman']!="")
                                          {
                                            $halaman = $_GET['halaman'];
                                          }
                                          else
                                          {
                                            $halaman = 1;
                                          }
                                          // Membuat batas data yang ditampilkan
                                          $limit = 5;
                          
                                          if($halaman>1)
                                          {
                                            $offset = ($halaman*$limit) - $limit;
                                          }
                                          else $offset = 0;
                          
                                          $previous = $halaman - 1;
                                          $next = $halaman + 1;
                          
                                            // Menyeleksi semua data dari tabel login
                                            $query = "SELECT * FROM login1";
                                            $hasil=mysqli_query($koneksi, $query);
                                            $jlh_data = mysqli_num_rows($hasil);
                          
                                            $jlh_halaman = ceil($jlh_data / $limit);
                                            $halaman_akhir = $jlh_halaman;
                          
                                            // Menyeleksi semua data dari tabel login dengan limit dan offset
                                            $query2 = "SELECT * FROM login1 LIMIT $offset,$limit";
                                            $hasil2 = mysqli_query($koneksi, $query2);
                          
                                        //Membuat Searching
                                        if(isset($_GET['keyword']))
                                        {
                                            $keyword = $_GET['keyword'];
                                            $hasil2 = mysqli_query($koneksi, "SELECT * FROM login1 WHERE username LIKE '%$keyword%' ");
                                        }
                                        if(mysqli_num_rows($hasil2))
                                        {
                                         
                                            echo "<form class='d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0' action='admin.php?keyword' method='GET'><div class='input-group'><input class='form-control' type='text' name='keyword' placeholder='Cari Akun Disini...' aria-label='Cari Akun Disini...' aria-describedby='btnNavbarSearch'/><input type='hidden' name='daftarakun'><button class='btn btn-primary' id='btnNavbarSearch' type='submit'><i class='fas fa-search'></i> Search</button></div></form><br>";
                                            
                                            echo "<br>";
                          
                                            echo "<table bgcolor=silver class='table table-bordered'>";
                                            echo "<tr><th>Username</th><th>Password</th><th>Nama</th><th>Email</th><th colspan='2' class='text-center'>Tindakan</th>";
                                  
                                            // Melakukan perulangan untuk menampilkan daftar akun
                                            foreach($hasil2 as $data)
                                            {
                                                echo "<tr><td>".$data['username']."</td><td>".$data['password']."</td><td>".$data['nama']."</td><td>".$data['email']."</td>";
                                                echo "<td><form method='POST' action='ubah.php'><input hidden type='text' name='id' value=".$data['id']."><button type='submit' name='btnUpdate' class='btn btn-info'>Update</button></form></td>"; ?>
                                                <td><form method="POST" onsubmit="return confirm ('Anda Yakin Mau Menghapus Data?');"><input hidden name="id" type="tex" value="<?php echo "".$data['id']."" ?>"> <button type="submit" name="btnHapus" class="btn btn-danger btn">Delete</button></form></td><?php
                                                echo "</tr>";
                                            } 
                                            echo "</table>";
                                        
                          
                                        //Membuat pagination yang ditampilkan
                                        echo "<ul class = 'pagination'>";
                                            if($halaman == 1)
                                            {
                                                echo "";
                                            }else echo "<li class='page-item'><a class='page-link' href = admin.php?daftarakun&halaman=$previous>Previous</a></li>";
                                            
                                            for($i = 1;$i <= $halaman_akhir;$i++)
                                            {
                                                if($i == $halaman)
                                                {
                                                    echo "<li class='active page-item'><a class='page-link' href = admin.php?daftarakun&halaman=$i>$i</a></li>";
                                                }
                                                else 
                                                {
                                                    echo "<li class='page-item'><a class='page-link' href = admin.php?daftarakun&halaman=$i>$i</a></li>";
                                                }
                                            }
                                        
                                            if($halaman == $halaman_akhir)
                                            {
                                                echo "";
                                            }
                                            else 
                                            {
                                                echo "<li class='page-item'><a class='page-link' href = admin.php?daftarakun&halaman=$next>Next</a></li>";
                                            }
                                            echo "</ul>";
                                            }     
                                        else
                                        {
                                          echo "<h3><b style='color:navy'>Username Tidak Terdaftar</b></h3><br>";
                                        }
                                          }
                                    ?>
                                  
                                   <!-- Ketika tombol Daftar Posting diklik maka akan ditampilkan data postingan   -->
                                   <?php
                                      // Jika tombol daftar postingan diklik
                                      if(isset($_GET['daftarposting'])){
                                        // Menyeleksi semua data dari tabel gambar
                                        $query = "SELECT * FROM gambar";
                                        $hasil=mysqli_query($koneksi,$query);
                                        
                                        // Jika tidak terkoneksi ke database maka akan muncul pesan error
                                        if(!$hasil) 
                                        {
                                          echo "mysqli_error($koneksi)";
                                        }
                                        echo "<table bgcolor=silver Class='table table-bordered'>";
                                        echo "<tr><th>Judul</th><th>Link</th><th>Jenis</th><th colspan='2' class='text-center'>Tindakan</th>";
                                        // Melakukan perulangan untuk menampilkan data gambar
                                        foreach ($hasil as $data) {
                                  ?>
                                      <tr>
                                      <td><?php echo $data['judul']?></td>
                                      <td><a href="<?php echo $data['link']?>"><?php echo $data['link']?></a></td>
                                      <td><?php echo $data['jenis']?></td>
                                      <!-- Menghapus data gambar apabila tombol hapus diklik -->
                                      <td><form method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data?')">
                                          <input type="number" hidden name="id" value="<?php echo "".$data['id']."" ?>">
                                          <button type="submit" name="btnHapusG" class="btn btn-danger btn-sm">Hapus</button>
                                        </form></td></tr>
                                  <?php
                                    }}
                                  ?>
                                  </div>
                                </div>
        
            </div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"></div>
                            <div>
                                <a href="#"></a>
                                &middot;
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
               </footer>
           </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>