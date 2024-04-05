function displayPopup() {
    const popupContainer = `
        <button class="popupbtn1" onclick="closeVideo()"><img src="assets/CancelButtonSmallDevices.webp" alt="cancel-button-icon" /></button>
        <button class="popupbtn2" onclick="closeVideo()"><img src="assets/Cancel.webp" alt="cancel-button-icon" /></button>
        <div class="popup-container">
        <img src="assets/popupBanner.webp" alt="" />
        <div class="popup__text__container">
            <h3>To Know More About The Doctor</h3>
            <form method="POST" action="components/formData.php">
                <input name="username" required pattern="[A-Za-z ]{3,}" minlength="3" maxlength="25" title="Please enter at least 3 alphabetic characters" type="text" placeholder="Enter Your Name Here" name="name" />
                <input name="userPassword" type="tel" required minlength="10" maxlength="14" title="Minimum 10 Numbers Required" placeholder="Enter Your Phone Number Here" name="phone" />
                <button type="submit">Submit</button>
                <label >Call us at:</label>
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

function closeVideo() {
    Swal.close(); // Close the SweetAlert dialog
}