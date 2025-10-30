<?php 
if (isset($_POST['simpan'])) {
    $categories = $_POST['categories'];
    $price = $_POST['price'];
    $description = $_POST['description']; // perhatikan huruf kecil semua!
    $image = $_FILES['photo']['name'];

    echo
    'categories : ' . $categories . 
    '<br>price : ' . $price .
    '<br>description : ' . $description .
    '<br>file name : ' . $image;
}
?>
