<?php
declare(strict_types=1);
require __DIR__.'/views/header.php';
require __DIR__.'/navbar.php';
?>

<h1>post</h1>


		<form action="/app/posts/store.php" method="POST" enctype="multipart/form-data" class="post-form">
    <input class="file-input" type="file"  onchange="previewFile()" name="image" id="image" type="file" multiple="">
    <br>
    <img class="previewimage" src="" height="200">
    <br>
    <div class="select-image-div">
    <input type="button" class="button image-button" value="Select image" onclick="document.getElementById('image').click();"/>
    <br>
        <input type="text" name="description" placeholder="add description">
        <br>
        <button type="submit" class="button" name="button">Submit</button>
    </form>


	<textarea name="description" id="description" placeholder="description"></textarea>
	<textarea name="tags" id="tags" placeholder="add tags"></textarea>
	<button type="submit" class="">Submit Toast</button>
</form>


<?php
require __DIR__.'/views/footer.php';
require __DIR__.'/footer.php';
?>

<!-- 
<form action="/app/posts/store.php" method="POST" enctype="multipart/form-data" class="post-form">
<input class="file-input" type="file"  onchange="previewFile()" name="image" id="image" type="file" multiple="">
        <br>
        <img class="previewimage" src="" height="150" alt="Image preview..."> -->
