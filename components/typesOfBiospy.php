<div class="typesofbiopsy-container">
    <h2 class="h2-text">Types of <span class="h2-span__text">Biopsy Procedures</span></h2>
    <div class="typesofbiopsy-container__cardscontainer">
        <?php foreach ($typesOfBiopsy as $eachCancerCard) : ?>
            <div class="typesofbiopsy-container__eachcard" onclick="displayPopup()">
                <img src="<?php echo $eachCancerCard[0]; ?>" alt="<?php echo $eachCancerCard[1]; ?>" />
                <p><?php echo $eachCancerCard[1]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function closeVideo() {
            Swal.close(); // Close the SweetAlert dialog
        }


        function displayPopup() {
            const popupContainer = `
        <button class="popupbtn1" onclick="closeVideo()"><img src="assets/CancelButtonSmallDevices.webp" alt="cancel-button-icon" /></button>
        <button class="popupbtn2" onclick="closeVideo()"><img src="assets/Cancel.webp" alt="cancel-button-icon" /></button>
        <div class="popup-container">
            <div class="popup-container__bannerImageSection">
                <h3>Needle Biopsy</h3>
                <p>A Needle Biopsy is a minimally invasive procedure that uses a 
                    thin needle to retrieve a small cancer tissue sample from the
                    target area for examination under a microscope</p>
            </div>
            <div class="popup-container__popup__text__container">
                <h3>To Know More About The Doctor</h3>
                <form method="POST" action="components/formData.php">
                    <input name="username" required pattern="[A-Za-z ]{3,}" minlength="3" maxlength="25" title="Please enter at least 3 alphabetic characters" type="text" placeholder="Name" name="name" />
                    <input name="userPassword" type="tel" required minlength="10" maxlength="14" title="Minimum 10 Numbers Required" placeholder="Phone number" name="phone" />
                    <button type="submit">Submit</button>
                    <label>Call us at:</label>
                    <a href="tel:1800 120 2676"><button type="button">1800 120 2676</button></a>
                </form>
            </div>
        </div>
        `;

            Swal.fire({
                html: popupContainer,
                width: '100%',
                padding: '0px',
                showCloseButton: false,
                showConfirmButton: false,
            });
        }
    </script>
</div>