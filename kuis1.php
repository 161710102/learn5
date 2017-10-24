<?php
  
require_once 'kuis.php';

$kuis1 = new kuis ('Agung Sugiyanto',"Jakarta","XI RPL 1","Dukatah");
$kuis1 ->set_nama1 ('agung');
$kuis1 ->set_tempat_lahir1 ('Jakarta');
$kuis1 ->set_kelas1 ('XI RPL 1');
$kuis1 ->set_status1 ('Dukatah');

echo "Nama..".$kuis1->get_nama().'<br>';
echo "Tempat Lahir..".$kuis1->get_tempat_lahir().'<br>';
echo "Kelas..".$kuis1->get_kelas().'<br>';
echo "Status..".$kuis1->get_status().'<br>'.'<br>';


$kuis1 ->set_nama1 ('Rizki');
$kuis1 ->set_tempat_lahir1 ('Garut');
$kuis1 ->set_kelas1 ('XI RPL 1');
$kuis1 ->set_status1 ('Jomblo Abadi');

echo "Nama..".$kuis1->get_nama1().'<br>';
echo "Tempat Lahir..".$kuis1->get_tempat_lahir1().'<br>';
echo "Kelas..".$kuis1->get_kelas1().'<br>';
echo "Status..".$kuis1->get_status1().'<br>'.'<br>';



$kuis1 ->set_nama1 ('dika');
$kuis1 ->set_tempat_lahir1 ('Tasikmalaya');
$kuis1 ->set_kelas1 ('XI RPL 1');
$kuis1 ->set_status1 ('Jomblo Setia');

echo "Nama..".$kuis1->get_nama2().'<br>';
echo "Tempat Lahir..".$kuis1->get_tempat_lahir2().'<br>';
echo "Kelas..".$kuis1->get_kelas2().'<br>';
echo "Status..".$kuis1->get_status2().'<br>'.'<br>';



$kuis1 ->set_nama1 ('dheri');
$kuis1 ->set_tempat_lahir1 ('Pangandaran');
$kuis1 ->set_kelas1 ('XI RPL 1');
$kuis1 ->set_status1 ('Jomblo Sederhana');

echo "Nama..".$kuis1->get_nama3().'<br>';
echo "Tempat Lahir..".$kuis1->get_tempat_lahir3().'<br>';
echo "Kelas..".$kuis1->get_kelas3().'<br>';
echo "Status..".$kuis1->get_status3().'<br>'.'<br>';



$kuis1 ->set_nama1 ('Ferdiansyah');
$kuis1 ->set_tempat_lahir1 ('Ciodeng');
$kuis1 ->set_kelas1 ('XI RPL 1');
$kuis1 ->set_status1 ('Jomblo Bahagia');

echo "Nama..".$kuis1->get_nama4().'<br>';
echo "Tempat Lahir..".$kuis1->get_tempat_lahir4().'<br>';
echo "Kelas..".$kuis1->get_kelas4().'<br>';
echo "Status..".$kuis1->get_status4().'<br>'.'<br>';
?>