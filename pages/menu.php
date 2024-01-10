<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | Narrow Cafe</title>
    <link rel="stylesheet" href="src/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body id="menuBody">
    <?php include 'partials/navbar.php'; ?>
    <section class="section1-menupage">
        <!-- Header ! -->
        <div class="headerContainer">
            <div class="logoContainer">
                <img src="src/img/logocafe.png" alt="logocafe.png">
                <div>Narrow Coffee</div>
            </div>
            <div class="titleContainer">
                <div>
                    <div class="text">
                        MENU
                    </div>
                    <div class="text">
                        <span>Premium</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="menuContainer">
            <div class="category1">
                <div class="titleCategory">
                    Food
                </div>
                <div class="contentMenuContainer">
                <?php
                    include 'config.php';
                    $stmt = $conn->prepare('SELECT * FROM product WHERE product_type = "food"');
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()):
                ?>
                    <form action="" class="listProductContainer form-submit">
                        <div class="productName">
                            <span class="item1"><?= $row['product_name'] ?></span>
                            <span class="item2">Rp. <?= $row['product_price'] ?></span>
                            <input type="hidden" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                            <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                            <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                            <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                            <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                            <input type="hidden" class="ptype" value="<?= $row['product_type'] ?>">
                            <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                            <span class="item3">
                                <button type="submit" class="addItemBtn">
                                    <svg width="35" height="35" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="45" height="45" rx="22.5"/>
                                        <path d="M30.1352 35C29.603 35 29.1714 34.5694 29.1714 34.0384C29.1714 33.5075 29.603 33.0769 30.1352 33.0769C30.6676 33.0769 31.0989 33.5075 31.0989 34.0384C31.0989 34.5694 30.6676 35 30.1352 35Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17.6059 35C17.0736 35 16.6421 34.5694 16.6421 34.0384C16.6421 33.5075 17.0736 33.0769 17.6059 33.0769C18.1382 33.0769 18.5697 33.5075 18.5697 34.0384C18.5697 34.5694 18.1382 35 17.6059 35Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M27.5493 21.5385H21.7666" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M24.6582 18.6538V24.423" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 10H14.8189L15.3262 14.8077M15.3262 14.8077L16.5648 26.5475C16.6681 27.5262 17.4953 28.2692 18.4818 28.2692H30.6619C31.5465 28.2692 32.3175 27.6687 32.532 26.8126L34.9415 17.1972C35.2457 15.9834 34.3254 14.8077 33.0714 14.8077H15.3262Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                </button>
                            </span>
                        </div>
                        <div class="productDesc"><?= $row['product_desc'] ?></div>
                    </form>
                <?php endwhile; ?>
                </div>
            </div>
            <div class="imageContainer">
                <div class="accent">
                    <div>

                    </div>
                </div>
                <img src="src/img/background-foodcategory-menupage.png" alt="foodcategoryFoto">
            </div>
        </div>
        <div id="drinkMenuContainer">
            <div id="drinkImageMenu">
            <img src="src/img/background-drinkcategory-menupage.png" width="360" height="504" alt="drinkcategoryFoto">
            </div>
            <div id="category2">
                <div class="titleCategory">
                    Drink
                </div>
                <div class="contentMenuContainer">
                <?php
                    include 'config.php';
                    $stmt = $conn->prepare('SELECT * FROM product WHERE product_type = "drink"');
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($row = $result->fetch_assoc()):
                ?>
                    <form action="" class="listProductContainer form-submit">
                        <div class="productName">
                            <span class="item1"><?= $row['product_name'] ?></span>
                            <span class="item2">Rp. <?= $row['product_price'] ?></span>
                            <input type="hidden" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                            <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                            <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                            <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                            <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                            <input type="hidden" class="ptype" value="<?= $row['product_type'] ?>">
                            <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                            <span class="item3">
                                <button type="submit" class="addItemBtn">
                                    <svg width="35" height="35" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="45" height="45" rx="22.5"/>
                                        <path d="M30.1352 35C29.603 35 29.1714 34.5694 29.1714 34.0384C29.1714 33.5075 29.603 33.0769 30.1352 33.0769C30.6676 33.0769 31.0989 33.5075 31.0989 34.0384C31.0989 34.5694 30.6676 35 30.1352 35Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17.6059 35C17.0736 35 16.6421 34.5694 16.6421 34.0384C16.6421 33.5075 17.0736 33.0769 17.6059 33.0769C18.1382 33.0769 18.5697 33.5075 18.5697 34.0384C18.5697 34.5694 18.1382 35 17.6059 35Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M27.5493 21.5385H21.7666" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M24.6582 18.6538V24.423" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 10H14.8189L15.3262 14.8077M15.3262 14.8077L16.5648 26.5475C16.6681 27.5262 17.4953 28.2692 18.4818 28.2692H30.6619C31.5465 28.2692 32.3175 27.6687 32.532 26.8126L34.9415 17.1972C35.2457 15.9834 34.3254 14.8077 33.0714 14.8077H15.3262Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                </button>
                            </span>
                        </div>
                        <div class="productDesc"><?= $row['product_desc'] ?></div>
                    </form>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <div id="cartContainer">
        <div class="cartButtonContainer">
            <a href="cart" id="myBtn" class="cartButton">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                    <g clip-path="url(#clip0_219_247)">
                    <path d="M30.4543 18.75H10.0044L7.50439 6.25H32.5043C32.6873 6.25067 32.8676 6.29143 33.0331 6.36943C33.1983 6.4474 33.3446 6.56073 33.4613 6.70138C33.5783 6.842 33.6628 7.00657 33.7091 7.18342C33.7553 7.3603 33.7623 7.54515 33.7293 7.725L31.6793 17.725C31.6316 18.0141 31.4816 18.2765 31.2568 18.4646C31.0321 18.6527 30.7473 18.7539 30.4543 18.75Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.50439 6.25L6.45439 2.25C6.39677 1.96766 6.24334 1.7139 6.02012 1.53167C5.79689 1.34945 5.51757 1.24994 5.22939 1.25H1.25439" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.0044 18.75L11.0544 24C11.112 24.2824 11.2654 24.5361 11.4887 24.7183C11.7119 24.9006 11.9912 25 12.2794 25H27.5043" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26.2544 33.75C25.5641 33.75 25.0044 33.1903 25.0044 32.5C25.0044 31.8097 25.5641 31.25 26.2544 31.25C26.9449 31.25 27.5044 31.8097 27.5044 32.5C27.5044 33.1903 26.9449 33.75 26.2544 33.75Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13.7544 33.75C13.064 33.75 12.5044 33.1903 12.5044 32.5C12.5044 31.8097 13.064 31.25 13.7544 31.25C14.4447 31.25 15.0044 31.8097 15.0044 32.5C15.0044 33.1903 14.4447 33.75 13.7544 33.75Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_219_247">
                    <rect width="35" height="35" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
                <span>
                    Keranjang Saya
                </span>
            </a>
        </div>
    </div>
</body>
<script src="src/script/script.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

<script type="text/javascript">
$(document).ready(function() {

// Send product details in the server
$(".addItemBtn").click(function(e) {
    e.preventDefault();
    var $form = $(this).closest(".form-submit");
    var pid = $form.find(".pid").val();
    var pname = $form.find(".pname").val();
    var pprice = $form.find(".pprice").val();
    var pimage = $form.find(".pimage").val();
    var ptype = $form.find(".ptype").val();
    var pcode = $form.find(".pcode").val();

    var pqty = $form.find(".pqty").val();

    $.ajax({
    url: 'action.php',
    method: 'post',
    data: {
        pid: pid,
        pname: pname,
        pprice: pprice,
        pqty: pqty,
        pimage: pimage,
        ptype: ptype,
        pcode: pcode
    },
    success: function(response) {
        $("#message").html(response);
        window.scrollTo(0, 0);
        load_cart_item_number();
    }
    });
});

// Load total no.of items added in the cart and display in the navbar
load_cart_item_number();

function load_cart_item_number() {
    $.ajax({
    url: 'action.php',
    method: 'get',
    data: {
        cartItem: "cart_item"
    },
    success: function(response) {
        $("#cart-item").html(response);
    }
    });
}
});
</script>
</html>