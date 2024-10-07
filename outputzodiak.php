<?php
    if (isset($_GET['Lihat'])) {
        $nama = $_GET['nama'];
        $bulan = $_GET['bulan'];
        $zodiak = "";
        $keterangan = "";

        // Cek zodiak berdasarkan bulan lahir
        if ($bulan == 1) {
            $zodiak = "Capricorn 🐐";
            $keterangan = "Pemilik zodiak ini dikenal sebagai pribadi yang pekerja keras dan sangat menyukai kemajuan dalam hidup. pemilik zodiak Capricorn juga punya kepribadian ambisius, tekun, materialistis, dan kuat. Mereka akan terus berjalan ketika orang lain sudah menyerah.";
        } elseif ($bulan == 2) {
            $zodiak = "Aquarius🐳🏺";
            $keterangan = "Ini adalah bagian dari karakter zodiak Aquarius yang membuat mereka terlibat dalam aktivisme atau pekerjaan sosial.";
        } elseif ($bulan == 3) {
            $zodiak = "Pisces🐟.";
            $keterangan = "Pisces dikenal memiliki dikap yang lemah lembut, sehingga tidak suka menyakiti perasaan orang lain.";
        } elseif ($bulan == 4) {
            $zodiak = "Aries 🐏";
            $keterangan = "Aries tegas dan pemimpin, sedangkan Taurus sabar dan keras kepala.";
        } elseif ($bulan == 5) {
            $zodiak = "Taurus 🐂";
            $keterangan = "Taurus setia dan stabil, sedangkan Gemini cerdas dan mudah beradaptasi.";
        } elseif ($bulan == 6) {
            $zodiak = "Gemini👯‍♀️";
            $keterangan = "Gemini komunikatif, sementara Cancer sangat peduli dan emosional.";
        } elseif ($bulan == 7) {
            $zodiak = "Cancer🦀 ";
            $keterangan = "Cancer penuh perhatian, sedangkan Leo penuh percaya diri dan karismatik.";
        } elseif ($bulan == 8) {
            $zodiak = "Leo🦁";
            $keterangan = "Leo suka diperhatikan, sedangkan Virgo teliti dan perfeksionis.";
        } elseif ($bulan == 9) {
            $zodiak = "Virgo🧞‍♀️👧🏻";
            $keterangan = "Virgo logis dan praktis, sementara Libra cinta keadilan dan harmoni.";
        } elseif ($bulan == 10) {
            $zodiak = "Libra.⚖ ";
            $keterangan = "Libra cinta kedamaian, sedangkan Scorpio penuh gairah dan misterius.";
        } elseif ($bulan == 11) {
            $zodiak = "Scorpio 🦞";
            $keterangan = "Scorpio kuat dan penuh intuisi, sementara Sagitarius optimis dan suka kebebasan.";
        } elseif ($bulan == 12) {
            $zodiak = "Sagitarius🏹";
            $keterangan = "Sagitarius suka petualangan dan filosofi, sementara Capricorn disiplin dan ambisius.";
        } else {
            $zodiak = "Bulan tidak valid!";
            $keterangan = "Mohon masukkan bulan lahir yang valid.";
        }

        // Tampilkan hasil
        echo "<h2>Halo $nama, zodiak kamu adalah: $zodiak</h2>";
        echo "<p>$keterangan</p>";
    }
    ?>
</body>
</html>
