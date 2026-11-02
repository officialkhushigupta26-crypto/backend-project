<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor = skyblue>
    <h2>Submit a product</h2>
    <form action="db/insert_action.php" method="post" enctype="multipart/form-data">

    <label for="">Product Name</label>
    <input type="text" name= "pname" id="">
    <br>
    <br>

    
    <label for="">Product Category</label>
    <input type="text" name="pcategory">
    
    <br>
    <br>


    <label for="">Product Freshness</label>
    <input type="radio" name= "pfreshness" value="brand new" id=""> Brand New
    <input type="radio" name="pfreshness" value="second hand" id=""> Second Hand
    <input type="radio" name="pfreshness" value="refurbished" id=""> Refurbished
    <br>
    <br>

    

    <label for="">Image of Product</label>
    <input type="file" name= "image" id="">
    <br>
    <br>


    <label for="">Additional Description</label>
    <input type="text" name= "additional" id="">
    <br>
    <br>

    
    <label for="">Product Price</label>
    <input type="number" name= "price" id="">
    <br>
    <br>

    <label for="">Comments</label>
    <input type="text" name= "comment" id="">
    <br>
    <br>

    <input type="submit" value="Submit">
    


    </form>
</body>
</html>