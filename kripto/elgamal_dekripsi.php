<?php include "../fungsi/fungsi_elgamal.php";
include("../assets/header.php");?>
<a href="../index.php"><p align="left">Kembali</p></a>
<h2 align="center">ALGORTMA ELGAMAL</h2>
<p align="center">Merupakan salah satu algoritma kriptografi asimetris yang memiliki metode penyandian kunci publik, dengan menggunakan algoritma blok chipper yang melakukan proses enkripsi pada blok-blok plainteks yang kemudian menghasilkan blok-blok chipertext, yang nantinya blok-blok chipertext tersebut akan didekripsi kembali dan hasilnya kemudian digabungkan menjadi plainteks semula.</p>
<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Enkripsi')">Enkripsi</button>
    <button class="tablinks" onclick="openCity(event, 'Dekripsi')" id="defaultOpen">Dekripsi</button>
</div>
<div id="Enkripsi" class="tabcontent">
    <h3 align="center">Proses Enkripsi</h3><hr>
    <p><b>Pembangkitan kunci :</b></p> 
    <form method="post" action="elgamal_enkripsi.php">
    <input type="number" placeholder="p (Bilangan Prima > 255)" name="p" required>
    <input type="number" placeholder="g (g < p)" name="g" required>
    <p><b>Pesan :</b></p> 
    <textarea min-height="100px" max-height="100px" min-width="100%" max-width="100%" rows="4" cols="50" placeholder="Plainteks" name="teks" id="teks" required required></textarea>
    <button type="submit" class="submit" name="enkripsi" id="enkripsi" value="enkripsi">Enkripsi</button>
    </form>
</div>
<div id="Dekripsi" class="tabcontent">
    <h3 align="center">Proses Dekripsi</h3><hr>
    <p><b>Kunci Privat (x, p) :</b></p> 
    <form method="post" action="elgamal_dekripsi.php">
    <input type="number" placeholder="x" name="x" required>
    <input type="number" placeholder="p" name="p" required>
    <p><b>Pesan :</b></p> 
    <textarea min-height="100px" max-height="100px" min-width="100%" max-width="100%" rows="4" cols="50" placeholder="Chiperteks" name="teks" id="teks" required></textarea>
    <button type="submit" class="submit" name="dekripsi" id="dekripsi" value="dekripsi">Dekripsi</button>
    </form>
    
    <?php
    if (isset($_POST['dekripsi'])){
        echo '<p style="color:red;">'.$duration.' detik</p>
        Kunci Privat (x, p) = (<b>'.$x.'</b>, <b>'.$p.'</b>)
        <br/><br/>
        <p><b>Hasil dekripsi pesan <span style="color:blue;">'.$teks.'</span> :</b></p> <textarea min-height="100px" max-height="100px" min-width="100%" max-width="100%" rows="4" cols="50" placeholder="Chiperteks" name="teks" id="teks" disabled>'.$hasildekripsi.' </textarea>';
    }
    ?>
</div>
<?php include("../assets/footer.php");?>