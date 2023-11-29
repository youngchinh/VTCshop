<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ ajax đẩy lên
    $productId = $_POST['id'];

    //kiểm tra trong giỏ hàng có tồn tại sản phẩm hay không
    if (!empty($_SESSION['cart'])) {
        $index = array_search($productId, array_column($_SESSION['cart'], 'id'));

        //nếu có sản phẩm thì cập nhật lại số lượng
        if ($index !== false) {
            //xóa sản phẩm khỏi giỏ hàng
            unset($_SESSION['cart'][$index]);
            $_SESSION['cart'] = array_values(($_SESSION['cart']));
        } else {
            echo 'Sản phẩm không tồn tại trong giỏ hàng';
        }
    } 
} else {
    echo 'Yêu cầu không hợp lệ';
}
?>