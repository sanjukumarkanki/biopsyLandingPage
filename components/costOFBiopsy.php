<div class="costof-biopsy-container">
    <h2 class="h2-text">Factors Influencing the <span class="h2-span__text">Cost of Biopsy</span></h2>
    <div class="costof-biopsy__subcontainer">
        <ul>
            <?php foreach ($costOfBiopsyArray as $eachBiopsyCard) :  ?>
                <li>
                    <img class="costof-biopsy__subcontainer__img1" src="assets\costOfBiopsy\PolygonPlayIcon.webp" alt="li polygon icon" />
                    <img class="costof-biopsy__subcontainer__img" src="assets\costOfBiopsy\PolygonSmallPlay.png" alt="playIcon" />

                    <p><?php echo $eachBiopsyCard[0]; ?></p>

                </li>
            <?php endforeach; ?>
        </ul>
        <div>
            <img src="assets/costOfBiopsy/costOfBiopsyImg.webp" alt=" Types of Biopsy Image" />
        </div>
    </div>
</div>