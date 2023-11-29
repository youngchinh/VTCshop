<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ ajax đẩy lên
    $productId = $_POST['id'];
    $newQuantity = $_POST['quantity'];

    //kiểm tra trong giỏ hàng có tồn tại sản phẩm hay không
    if (!empty($_SESSION['cart'])) {
        $index = array_search($productId, array_column($_SESSION['cart'], 'id'));

        //nếu có sản phẩm thì cập nhật lại số lượng
        if ($index !== false) {
            $_SESSION['cart'][$index]['quantity'] = $newQuantity;
        } else {
            echo 'Sản phẩm không tồn tại trong giỏ hàng';
        }
    } 
} else {
    echo 'Yêu cầu không hợp lệ';
}
?>