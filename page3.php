<?php
session_start();

// Simpan data dari page2.php ke $_SESSION
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['fullname'] = $_POST['fullname'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['organization'] = nl2br($_POST['organization']);
    $_SESSION['experience'] = nl2br($_POST['experience']);
    $_SESSION['education_smp'] = $_POST['education_smp'];
    $_SESSION['education_sma'] = $_POST['education_sma'];
    $_SESSION['education_college'] = $_POST['education_college'];
    $_SESSION['achievements'] = nl2br($_POST['achievements']);
    $_SESSION['skills'] = nl2br($_POST['skills']);
}

// Ambil data dari session
$fullname = $_SESSION['fullname'] ?? '';
$email = $_SESSION['email'] ?? '';
$address = $_SESSION['address'] ?? '';
$organization = $_SESSION['organization'] ?? '';
$experience = $_SESSION['experience'] ?? '';
$education_smp = $_SESSION['education_smp'] ?? '';
$education_sma = $_SESSION['education_sma'] ?? '';
$education_college = $_SESSION['education_college'] ?? '';
$achievements = $_SESSION['achievements'] ?? '';
$skills = $_SESSION['skills'] ?? '';

?>

<!DOCTYPE html>
<html>
<head>
    <title>CV</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="cv-container">
        <h1><?php echo $fullname; ?></h1>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Alamat:</strong> <?php echo $address; ?></p>
        
        <?php if (!empty($organization)): ?>
        <h2>Pengalaman Organisasi</h2>
        <p><?php echo $organization; ?></p>
        <?php endif; ?>
        
        <?php if (!empty($experience)): ?>
        <h2>Pengalaman Kerja</h2>
        <p><?php echo $experience; ?></p>
        <?php endif; ?>
        
        <h2>Pendidikan</h2>
        <ul>
            <li><strong>SMP:</strong> <?php echo $education_smp; ?></li>
            <li><strong>SMA:</strong> <?php echo $education_sma; ?></li>
            <li><strong>Kuliah:</strong> <?php echo $education_college; ?></li>
        </ul>
        
        <h2>Prestasi</h2>
        <p><?php echo $achievements; ?></p>
        
        <h2>Skill</h2>
        <p><?php echo $skills; ?></p>
    </div>
</body>
</html>
