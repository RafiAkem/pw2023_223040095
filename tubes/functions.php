<?php
define('BASE_URL', '/pw2023_223040095/tubes');

function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'berita') or die('KONEKSI GAGAL!');
    return $conn;
}

$conn = koneksi();


function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function signup($data)
{
    global $conn;
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['konfirmasi']);

    if ($password !== $password2) {
        echo "
			<script>
				alert('Password tidak sama');
			</script>
		";
        return false;
    }

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
			<script>
				alert('username sudah ada');
			</script>
		";
        return false;
    }


    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO user VALUES (null, '$username', '$password')");
    return mysqli_affected_rows($conn);
}

function createNews($data)
{
    global $conn;

    $title = htmlspecialchars($data['title']);
    $content = htmlspecialchars($data['content']);
    $category = htmlspecialchars($data['category']);

    $image = uploadImage();
    if (!$image) {
        return false;
    }

    $query = "INSERT INTO berita VALUES (null,'$title', '$content', '$image', '$category', NOW())";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function uploadImage()
{
    $imageName = $_FILES['image']['name'];
    $imageSize = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];


    if ($error === 4) {
        echo "<script>alert('Insert an image!');</script>";
        return false;
    }


    if ($imageSize > 10000000 || $error === 1) {
        echo "<script>alert('Image is too big');</script>";
        return false;
    }

    if ($error !== 0) {
        echo "<script>alert('Failed to upload an image!');</script>";
        return false;
    }

    $validExtention = ['jpg', 'jpeg', 'png'];
    $imageExtention = explode('.', $imageName);
    $imageExtention = strtolower(end($imageExtention));
    if (!in_array($imageExtention, $validExtention)) {
        echo "<script>alert('Not an image!');</script>";
        return false;
    }



    $newImageName = uniqid();
    $newImageName .= '.';
    $newImageName .= $imageExtention;


    move_uploaded_file($tmpName, '../img/upload/' . $newImageName);
    return $newImageName;
}
