<?php
session_start();
include "/xampp/htdocs/VTCshop/app/models/ClientModel/ClientModel.php";
if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    $productId = array_column($cart, 'id');
    $idList = implode(',', $productId);
    //Lấy sản phẩm trong bảng sản phẩm theo id
    $dataDb =  loadone_productCart($idList);

    $sum_total = 0;
    $ship = 30000;
    foreach ($dataDb as $key => $product) :
        $imgpath = "../upload/all_sp/" . $product['img_sanpham'];
        //kiểm tra số lượng sản phẩm trong giỏ hàng
        $quantityInCart = 0;
        foreach ($_SESSION['cart'] as $item) {
            if ($item['id'] == $product['id_sanpham']) {
                $quantityInCart = $item['quantity'];
                break;
            }
        }
?>

        <tr>
            <td class="product_remove">
                <a href="#"><i class="fa fa-trash-o"></i></a>
            </td>
            <td><?= $key + 1 ?></td>
            <td class="product_thumb"><a href="#">
                    <img src="<?= $imgpath ?>" alt=""></a>
            </td>
            <td class="product_name"><?= $product['ten_sanpham'] ?></td>
            <td class="product-price"><?= number_format((int)$product['gia_ban_dau'], 0, ",", ".") ?><u>đ</u></td>
            <td class="product_quantity">
                <label>Số Lượng</label>
                <input id="quantity_<?= $product['id_sanpham'] ?>" min="1" type="number" value="<?= (int)$quantityInCart ?>" oninput="updateQuantity(<?= $product['id_sanpham'] ?>, <?= $key ?> );">
            </td>
            <td class="product_total"><?= number_format((int)$product['gia_ban_dau'] * (int)$quantityInCart, 0, ",", ".") ?><u>đ</u></td>
        </tr>

    <?php
        $sum_total += (int)$product['gia_ban_dau'] * (int)$quantityInCart;
        $sum_total_ship = $sum_total + $ship;
        $_SESSION['resultTotal'] = $sum_total;
    endforeach;
    ?>
<?php
}
?>