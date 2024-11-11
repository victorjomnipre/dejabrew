<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Coffee</title>
    <link rel="stylesheet" href="css/addBooks.css">
    <script type="text/javascript">
        function imagePreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("previewImage");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
</head>
<body>
    <section class="addingPage">
        <form action="index.php?command=insertBooks" method="post" enctype="multipart/form-data" class="form-container">
            <h2>Add Coffee Products</h2>
            
            <label for="ID">Coffee ID:</label>
            <input type="text" name="ID" id="ID">
            
            <label for="Name">Coffee Name:</label>
            <input type="text" name="Name" id="Name">
            
            <p class="form-subheading">Please upload a product picture</p>
            <div class="image-preview">
                <img src="uploads/preview.jpg" id="previewImage" alt="Preview" width="300" height="300">
            </div>
            
            <label for="fileToUpload" class="custom-file-button">Upload Photo</label>
            <input type="file" name="fileToUpload" id="fileToUpload" onchange="imagePreview(event)" accept="image/*">
            
            <label for="Description">Description:</label>
            <textarea name="Description" id="Description" cols="45" rows="5"></textarea>
            
            <label for="Sugar">Sugar Level:</label>
            <input type="text" name="Sugar" id="Sugar">
            
            <label for="Roast">Roast Level:</label>
            <input type="text" name="Roast" id="Roast">
            
            <label for="Caffeine">Caffeine Content:</label>
            <input type="text" name="Caffeine" id="Caffeine">
            
            <label for="Category">Category:</label>
            <input type="text" name="Category" id="Category">
            
            <label for="Ingredients">Ingredients:</label>
            <textarea name="Ingredients" id="Ingredients" cols="45" rows="3"></textarea>
            
            <div class="button-group">
                <button type="submit" name="saveRecords" class="submit-button">Save Records</button>
                <button type="reset" class="reset-button">Reset</button>
            </div>
        </form>
    </section>
</body>
</html>
