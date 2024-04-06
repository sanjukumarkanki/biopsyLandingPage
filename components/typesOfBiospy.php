<div class="typesofbiopsy-container">
    <h2 class="h2-text">Types of <span class="h2-span__text">Biopsy Procedures</span></h2>
    <div class="typesofbiopsy-container__cardscontainer">
        <?php foreach ($typesOfBiopsy as $eachCancerCard) : ?>
            <div class="typesofbiopsy-container__eachcard" onclick="myFunction()">
                <img src="<?php echo $eachCancerCard[0]; ?>" alt="<?php echo $eachCancerCard[1]; ?>" />
                <p><?php echo $eachCancerCard[1]; ?></p>

                <dialog id="myDialog">This is a dialog window</dialog>
            </div>
        <?php endforeach; ?>
    </div>
    <script>
        function myFunction() {
            document.getElementById("myDialog").showModal();
            // Add an event listener to the window to close the dialog when clicking outside of it
            window.onclick = function(event) {
                var dialog = document.getElementById("myDialog");
                if (event.target == dialog) {
                    dialog.close();
                }
            }
        }
    </script>
</div>