<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="page3.php" method="post">
        <h2>Input Biodata</h2>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly>
        <label>Nama Lengkap:</label>
        <input type="text" name="fullname" required>
        <label>Alamat:</label>
        <textarea name="address" required></textarea>
        <label>Pengalaman Organisasi (Opsional):</label>
        <textarea name="organization" placeholder="Pisahkan dengan enter"></textarea>
        <label>Pengalaman Kerja (Opsional):</label>
        <textarea name="experience"></textarea>
        <label>Pendidikan:</label>
        <input type="text" name="education_smp" placeholder="SMP" required>
        <input type="text" name="education_sma" placeholder="SMA" required>
        <input type="text" name="education_college" placeholder="Kuliah" required>
        <label>Prestasi:</label>
        <textarea name="achievements" required></textarea>
        <label>Skill:</label>
        <textarea name="skills" required></textarea>
        <button type="submit">Next</button>
    </form>
</body>
</html>
