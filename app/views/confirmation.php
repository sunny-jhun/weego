<?php require_once "../partials/template.php";
function get_page_content(){
	global $conn;
     ?>
	<div class="container main-container my-4">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">Confirmation Page</h1>

                <h3>Reference No.: <?php echo $_SESSION['new_txn_number']; ?></h3>
                <?php unset($_SESSION['new_txn_number']); ?>

                <p>Thank you for shopping! Your order is being processed.</p>

                <a class="btn btn-primary" href="./catalog.php">Continue Shopping</a>
            </div>
        </div>
    </div>

<?php }?>