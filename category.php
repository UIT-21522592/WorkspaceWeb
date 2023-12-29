<?php
include('./functions/userFunctions.php');
include('./includes/header.php'); ?>




<div class="py-4 position-relative">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="display-4 fw-bold text-center" style="color: #957B3F;">Our Game</h2>
                <hr>
                <div class="row">
                    <?php
                    $categories = getAllActive("categories");
                    if (mysqli_num_rows($categories) > 0) {
                        foreach ($categories as $item) {
                    ?>
                            <div class="col-md-4 mb-2">
                                <a href="product.php?category=<?= $item['slug']; ?>">
                                    <div class="card bg-brown shadow-lg mb-5 rounded border-0">
                                        <div class="card-body p-0">
                                            <img src="uploads/categories/<?= $item['image']; ?>" alt="Category Image" class="w-100">
                                            <div>
                                                <h4 class="fw-bolder d-flex justify-content-center" style="color: #8B4513;"><?= $item['name']; ?></h4>

                                            </div>

                                        </div>
                                    </div>
                                </a>

                            </div>


                    <?php
                        }
                    } else {
                        echo "No data available";
                    }

                    ?>
                </div>

            </div>
        </div>
    </div>
</div>


<?php include('./includes/footer.php') ?>