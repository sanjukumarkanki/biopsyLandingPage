<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biopsy LandingPage</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/typesOfBiops.css">
    <link rel="stylesheet" href="styles/reusable.css">
    <link rel="stylesheet" href="styles/costOfBiopsy.css">
    <link rel="stylesheet" href="styles/biopsyFaqs.css">
    <script src="./javascript/index.js"></script>
</head>

<body>
    <?php include("components/array.php"); ?>

    <div class="main-app-container">
        <?php include("components/typesOfBiospy.php"); ?>
        <?php include("components/costOFBiopsy.php") ?>
        <?php include("components/biopsyFaqs.php") ?>
    </div>
</body>

</html>