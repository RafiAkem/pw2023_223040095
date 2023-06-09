<?php
define('BASE_URL', '/pw2023_223040095/tubes');

//Function untuk koneksi ke database
function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'berita') or die('KONEKSI GAGAL!');
    return $conn;
}

//Function untuk melakukan query ke database
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

//Function untuk menambahkan data ke database
function signup($data)
{
    global $conn;
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['konfirmasi']);

    //cek jika password tidak sama dengan konfirmasi password maka akan muncul alert
    if ($password !== $password2) {
        echo "
			<script>
				alert('Password tidak sama');
			</script>
		";
        return false;
    }

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
			<script>
				alert('username sudah ada');
			</script>
		";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO user VALUES (null, '$username', '$password')");
    return mysqli_affected_rows($conn);
}

//Function untuk menambah berita
function createNews($data)
{
    global $conn;

    //htmlspecialchars untuk menghindari hacker seperti masukin tag html
    $title = htmlspecialchars($data['title']);
    $content = htmlspecialchars($data['content']);
    $category = htmlspecialchars($data['category']);

    $image = uploadImage();
    if (!$image) {
        return false;
    }

    //query untuk insert ke database berita
    $query = "INSERT INTO berita VALUES (null,'$title', '$content', '$image', '$category', NOW())";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Function untuk mengupload gambar
function uploadImage()
{
    $imageName = $_FILES['image']['name'];
    $imageSize = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>alert('Insert an image!');</script>";
        return false;
    }

    //maksimal image 10mb
    if ($imageSize > 10000000 || $error === 1) {
        echo "<script>alert('Image is too big');</script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    if ($error !== 0) {
        echo "<script>alert('Failed to upload an image!');</script>";
        return false;
    }

    //cek ekstensi file
    $validExtention = ['jpg', 'jpeg', 'png'];
    $imageExtention = explode('.', $imageName);
    $imageExtention = strtolower(end($imageExtention));
    if (!in_array($imageExtention, $validExtention)) {
        echo "<script>alert('Not an image!');</script>";
        return false;
    }


    //generate nama baru
    $newImageName = uniqid();
    $newImageName .= '.';
    $newImageName .= $imageExtention;

    //lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, '../img/upload/' . $newImageName);
    return $newImageName;
}

//Function untuk menghapus berita
function deleteNews($id)
{
    global $conn;

    //untuk menghapus gambar di folder img/upload
    $news = query("SELECT * FROM berita WHERE id = $id")[0];
    unlink('../img/upload/' . $news['image']);

    //query untuk menghapus data di database
    mysqli_query($conn, "DELETE FROM berita WHERE id = $id");
    return mysqli_affected_rows($conn);
}

//function edit berita
function editNews($data)
{
    global $conn;

    $id = $data['id'];
    $title = htmlspecialchars($data['title']);
    $content = htmlspecialchars($data['content']);
    $category = htmlspecialchars($data['category']);
    $oldImage = htmlspecialchars($data['oldImage']);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['image']['error'] === 4) {
        $image = $oldImage;
    } else {
        $image = uploadImage();
    }

    $query = "UPDATE berita SET
                title = '$title',
                content = '$content',
                image = '$image',
                category = '$category'
                WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//function cari di admin
function cari($keyword)
{
    $query = "SELECT * FROM berita WHERE
                title LIKE '%$keyword%' OR
                content LIKE '%$keyword%' OR
                category LIKE '%$keyword%' OR
                timestamp LIKE '%$keyword%'
            ";
    return query($query);
}

//function comment untuk menambah comment ke news artikel.
function comment($data)
{
    global $conn;
    $comment = htmlspecialchars($data['comment']);

    $news_id = htmlspecialchars($data['newsId']);

    $query = "INSERT INTO comments VALUES (null,'$comment', NOW(), '$news_id')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
