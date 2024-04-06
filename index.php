<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biopsy LandingPage</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/banner.css">
    <link rel="stylesheet" href="./styles/whyCion.css">
    <link rel="stylesheet" href="styles/typesOfBiopsy.css">
    <link rel="stylesheet" href="styles/reusable.css">
    <link rel="stylesheet" href="styles/costOfBiopsys.css">
    <link rel="stylesheet" href="styles/biopsyFaqs.css">
    <link rel="stylesheet" href="styles/ourlocations.css">
    <script src="./javascript/index.js" defer></script>
</head>

<body>
    <?php include "./components/array.php";
    include("components/connectDB.php"); ?>
    <div class="main-app-container">
        <?php include "./components/banner.php" ?>
        <?php include "./components/new.php" ?>
        <?php include("components/typesOfBiospy.php"); ?>
        <?php include("components/costOFBiopsy.php") ?>
        <?php include("components/biopsyFaqs.php") ?>
        <?php include("components/ourLocations.php") ?>
    </div>
</body>

</html>