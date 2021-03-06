<?php 
    include 'helpers/Format.php'; 
    $fm = new Format();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $fm->title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/project-request.css">

    <meta name="keywords" content="<?= KEYWORDS; ?>">
	<meta name="description" content="<?= DESCRIPTION; ?>">

	<!-- Favicons -->
	<link rel="apple-touch-icon" href="http://lixir.com.ng/images/brand_logo.png" sizes="180x180">
	<link rel="icon" href="http://lixir.com.ng/images/brand_logo.png" sizes="32x32" type="image/png">
	<link rel="icon" href="http://lixir.com.ng/images/brand_logo.png" sizes="16x16" type="image/png">

	<!-- Twitter -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="http://lixir.com.ng">
	<meta name="twitter:creator" content="Lixir">
	<meta name="twitter:title" content="<?= $fm->title(); ?>">
	<meta name="twitter:description" content="<?= DESCRIPTION; ?>">
	<meta name="twitter:image" content="http://lixir.com.ng/images/brand_logo.png">

	<!-- Facebook & Whatsapp -->
	<meta property="og:title" content="<?= $fm->title(); ?>">
	<meta property="og:url" content="http://lixir.com.ng">
	<meta property="og:description" content="<?= DESCRIPTION; ?>">
	<meta property="og:image" content="http://lixir.com.ng/images/brand_logo.png">
	<meta property="og:image:secure_url" content="http://lixir.com.ng/images/brand_logo.png">
	<meta property="og:image:width" content="300">
	<meta property="og:image:height" content="200">
	<meta property="og:image:alt" content="site-logo">
	<meta property="og:type" content="website">
</head>

<body> <?php require_once "./Fragments/header.php" ?>

    <main>
        <section class="form_container">
            <h3 class="title">Project Request Form</h3>
            <?php
                $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                if(strpos($url, 'status=sent') !== false){
                    echo "<div style='color: green; font-size: 18px; font-weight: bold; padding: 20px;'>Project Request Sent Successfully!!!.</div>";
                }
                if(strpos($url, 'status=failed') !== false){
                    echo "<div style='color: red; font-size: 18px; font-weight: bold; padding: 20px;'>Request Not Sent!!!<br> Please Try Again Later.</div>";
                }
                if(strpos($url, 'status=file-error') !== false){
                    echo "<div style='color: red; font-size: 18px; font-weight: bold; padding: 20px;'>You can upload only image or pdf file.</div>";
                }
            ?>
            <form action="submit_request.php" method="POST" enctype="multipart/form-data">
                <div class="form_group">    
                    <label for="p_info">General Project Information</label>
                    <input type="text" placeholder="Project Name" name="projName" required>
                    <input type="text" placeholder="Project Duration" name="projDur" required>
                    <input type="text" placeholder="Requested By">
                </div>
                <div class="form_group">
                    <label for="c_info">Customer Information</label>
                    <input type="text" placeholder="Customer Name" name="cusName" required>
                    <input type="text" placeholder="Organization Name" name="orgName" required>
                </div>
                <div class="form_group">
                    <label for="project_scope">Project Scope</label>
                    <textarea name="scope" id="p_scope" placeholder="Project Description" cols="30" rows="5"></textarea>
                    <input type="text" placeholder="Project High-Level Objectives" name="highObj" required>
                    <input type="text"
                        placeholder="Project Low-Level Objectives" name="lowObj" required>
                </div>
                <div class="form_group">
                    <input type="button" value="Attach File" id="attachFile" class="btn">
                    <input type="file" name="projFile" id="file">
                </div>

                <input type="submit" value="Submit" name="submit" class="btn submit"> <br>
                <input type="reset" value="Reset Form" class="reset btn">
            </form>
        </section>
    </main>
    <?php require_once "./Fragments/footer.php" ?>
</body>

<script>
    let attachFile = document.getElementById("attachFile");
    let fileInput = document.getElementById("file");
    attachFile.addEventListener("click", () => { fileInput.style.visibility = "visible" })
</script>

</html>