
<section class="why-cion-container">
    <div class="why-cion-container__center">
        <div class="dot" id="id1"></div>
        <div class="dot" id="id2"></div>
        <div class="dot" id="id3"></div>
        <div class="dot" id="id4"></div>
    </div>
</section>

<script>
    let centerDiv = document.querySelector('.why-cion-container__center');
    const dots = document.querySelectorAll('.dot');
    let isVisible = false;

    centerDiv.addEventListener("click", () => {
        if (!isVisible) {
            dots.forEach((dot, index) => {
                const angle = (index * Math.PI / 2) + (Math.PI / 4);
                const radius = 200;

                const x = Math.cos(angle) * radius;
                const y = Math.sin(angle) * radius;

                dot.style.transform = `translate(${x}px, ${y}px)`;
                dot.style.opacity = 1;
            });
            isVisible = true;
        } else {
            dots.forEach((dot) => {

                dot.style.transform = 'none';
                dot.style.opacity = 0;
            });
            isVisible = false;
        }
    });
</script>