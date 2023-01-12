

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Cairo:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=IM+Fell+English+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <title>Add Product</title>
</head>
<body>

    <div class="pop_up pop" id="pop_up">
        <div class="form">
            <a href="<?= URLROOT ?>/Dashboard/New_Arrival"><i class="fa-solid fa-backward"></i> Back to Dashboard</a>
            <form action="<?php echo URLROOT; ?>/Dashboard/add" method="POST" enctype="multipart/form-data">

                <!-- Add product name -->
                <div class="Club name">
                    <label for="name">Product name</label>
                    <input type="text" name="ProductName" id="name" placeholder="Product Name" value="<?php echo $data['Title'] ?>">
                    <!-- error message if product input empty or not found -->
                    <span style='color:red; padding: .5rem; border-radius: 3px;'><?php echo $data['Title_err'] ?></span>
                </div>
                
                <!-- Add price product -->
                <div class="description">
                    <label for="name">Product Price</label>
                    <input type="text" name="ProductPrice" id="name" placeholder="Price" value="<?php echo $data['Price'] ?>">
                    <!-- error message if product input or not found -->
                    <span style='color:red; padding: .5rem; border-radius: 3px;'><?php echo $data['Price_err'] ?></span>
                </div>

                <!-- Add club image -->
                <div class="image">
                    <label for="image">Product image</label>
                    <input type="file" name="ProductImage" id="name">
                    <!-- error message if product input or not found -->
                    <span style='color:red; padding: .5rem; border-radius: 3px;'><?php echo $data['Image_err'] ?></span>
                </div>

                <div class="btns">
                    <input type="submit" id="submit" class="submit" value="Ajouter">
                </div>
                
            </form>
        </div>
    </div>
</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>

</html>



