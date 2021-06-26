<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Health - Medical Website Template</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<form action="" method="GET">
     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     


     
     </section>


  


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                         <center>      <h4 class="wow fadeInUp" data-wow-delay="0.6s">Hasil Analisa <i class="fa fa-h-square"></i></br>COVID-19</h4> </center> 
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p></p>
                                   <p></p>
                              </br>

                            <center> <b><h5> <?php
        $sql = "SELECT * FROM covid_19 ORDER BY kode DESC LIMIT 1";
        $query = mysqli_query($db, $sql);

        while($covid = mysqli_fetch_array($query)){
            echo "<tr>";

            if ($covid['kelelahan'] == "ya" && $covid['suhu'] == "ya" && $covid['meler'] == "ya" && $covid['bersin'] == "ya" && $covid['tenggorokan'] == "ya" && $covid['otot'] == "ya" && $covid['nafas'] == "ya" && $covid['dahak'] == "ya" && $covid['muntah'] == "ya" )
               {
                    echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER" ;
               }

          elseif ($covid['kelelahan'] == "tidak" && $covid['suhu'] == "tidak" && $covid['meler'] == "tidak" && $covid['bersin'] == "tidak" && $covid['tenggorokan'] == "tidak" && $covid['otot'] == "tidak" && $covid['nafas'] == "tidak" && $covid['dahak'] == "tidak" && $covid['muntah'] == "tidak" )
          {
               echo "ANDA SEDANG SEHAT TETAPLAH JAGA KESEHATAN ANDA DAN TETAP MENGGUNAKAN MASKER DISAAT KELUAR RUMAH";
          }
          elseif ($covid['kelelahan'] == "ya" && $covid['bersin'] == "ya" && $covid['nafas'] == "ya" && $covid['dahak'] == "ya" && $covid['suhu'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['kelelahan'] == "ya" && $covid['suhu'] == "ya" && $covid['bersin'] == "ya" && $covid['nafas'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['kelelahan'] == "ya" && $covid['suhu'] == "ya" && $covid['bersin'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['kelelahan'] == "ya" && $covid['suhu'] == "ya" && $covid['nafas'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['kelelahan'] == "ya" && $covid['suhu'] == "ya" && $covid['dahak'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['suhu'] == "ya" && $covid['bersin'] == "ya" && $covid['nafas'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['suhu'] == "ya" && $covid['bersin'] == "ya" && $covid['dahak'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['bersin'] == "ya" && $covid['nafas'] == "ya" && $covid['dahak'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['bersin'] == "ya" && $covid['nafas'] == "ya" && $covid['kelelahan'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['bersin'] == "ya" && $covid['nafas'] == "ya" && $covid['suhu'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['nafas'] == "ya" && $covid['dahak'] == "ya" && $covid['kelelahan'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['nafas'] == "ya" && $covid['dahak'] == "ya" && $covid['suhu'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['nafas'] == "ya" && $covid['dahak'] == "ya" && $covid['bersin'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['dahak'] == "ya" && $covid['kelelahan'] == "ya" && $covid['suhu'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['dahak'] == "ya" && $covid['kelelahan'] == "ya" && $covid['bersin'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
          elseif ($covid['dahak'] == "ya" && $covid['kelelahan'] == "ya" && $covid['nafas'] == "ya" ) {
               echo "GEJALA YANG DITIMBULKAN DIRI ANDA TERMASUK GEJALA COVID-19 SEGERA PERIKSAKAN DIRI ANDA DAN TETAPLAH MEMAKAI MASKER";
          }
            else 
            {
                 echo "ANDA SEDANG TERKENA FLU BIASA JAGALAH DIRI ANDA JANGAN LUPA MINUM OBAT DAN TETAP MENGGUNAKAN MASKER DISAAT KELUAR RUMAH";
            }

           // echo "<td>".$covid['kelelahan']."</td>";
            //echo "<td>".$covid['suhu']."</td>";
           // echo "<td>".$covid['meler']."</td>";
           // echo "<td>".$covid['bersin']."</td>";
           // echo "<td>".$covid['tenggorokan']."</td>";
           // echo "<td>".$covid['otot']."</td>";
           // echo "<td>".$covid['nafas']."</td>";
           // echo "<td>".$covid['dahak']."</td>";
           // echo "<td>".$covid['muntah']."</td>";

            echo "<td>";
            
            echo "</td>";

            echo "</tr>";
        }
        ?> </b></center></h5>

                         </br>
                    </br>
                    <center>  <a href="index.html" class="section-btn btn btn-default smoothScroll">Terimakasih Telah Mengecek Diri anda</br>Mari Cek Keluarga Anda</a> </center>
                              </div>
                         </br>
                    </br>
               </br>
          </br>
          <?php
        $sql = "SELECT * FROM covid_19 ORDER BY kode DESC LIMIT 1";
        $query = mysqli_query($db, $sql);

        while($covid = mysqli_fetch_array($query)){
            echo "<tr>";

           

           // echo "<td>".$covid['kelelahan']."</td>";
            //echo "<td>".$covid['suhu']."</td>";
           // echo "<td>".$covid['meler']."</td>";
           // echo "<td>".$covid['bersin']."</td>";
           // echo "<td>".$covid['tenggorokan']."</td>";
           // echo "<td>".$covid['otot']."</td>";
           // echo "<td>".$covid['nafas']."</td>";
           // echo "<td>".$covid['dahak']."</td>";
           // echo "<td>".$covid['muntah']."</td>";

            echo "<td>";
            
            echo "</td>";

            echo "</tr>";
        }
        ?>


                              
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


 




     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>