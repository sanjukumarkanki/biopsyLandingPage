<?php
$array = [
  ["Who is a Surgical Oncologist?", "A Surgical Oncologist is a doctor who specializes in using surgery to treat cancer, removing tumors and cancerous tissues while aiming to preserve healthy tissue and function."],
  ["Why is Dr. Purushotham the best surgical oncologist in Hyderabad?", "With over 10+ years of experience and 4000+ cancer surgeries, Dr. Puroshotham is considered the best surgical oncologist in hyderabad."],
  ["What types of cancers are treated using surgery?", "Various types of cancers are treated using surgery depending on the stage, but the most common ones include breast cancer surgery, oral cancer surgery, lung cancer, and kidney cancer."],
  ["Where can I find a Surgical Oncologist near me?", "We have multiple centers where we provide the best cancer treatment and surgical options all around Hyderabad, in Kukatpally, Tolichowki, Masab Tank, Ameerpet, Erragadda, and Kompally."],
  ["How can I get a free second opinion?", "To get a free consultation or a free second opinion, call us at 18001202676 or fill out the form above, and we will get back to you with all the details regarding the free second opinion."],
  ["When is cancer surgery recommended?", "Cancer surgery is recommended when the cancer is at an early stage, confined to one area, and can be safely removed, offering the best chance for cure or symptom relief."]
];

// Set the default index of the accordion item to be opened
$defaultIndex = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accordion FAQ</title>
</head>

<body>
  <h1 class="faqs-h1">FAQs</h1>
  <div class="accordion-main-container">
    <div class="accordion">
      <?php for ($i = 0; $i < 3; $i++) : ?>
        <div class="accordion-item <?php echo $i === $defaultIndex ? 'default-open' : ''; ?>">
          <div class="accordion-title">
            <p><?php echo $array[$i][0]; ?></p>
            <span class="arrow">+</span>
          </div>
          <div class="accordion-content"><?php echo $array[$i][1]; ?></div>
        </div>
      <?php endfor; ?>
    </div>

    <div style="margin-left: 0;" class="accordion">
      <?php for ($i = 3; $i < count($array); $i++) : ?>
        <div class="accordion-item <?php echo $i === $defaultIndex ? 'default-open' : ''; ?>">
          <div class="accordion-title">
            <p><?php echo $array[$i][0]; ?></p>
            <span class="arrow">+</span>
          </div>
          <div class="accordion-content"><?php echo $array[$i][1]; ?></div>
        </div>
      <?php endfor; ?>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const defaultOpenItems = document.querySelectorAll('.default-open');

      defaultOpenItems.forEach(item => {
        const content = item.querySelector('.accordion-content');
        const arrow = item.querySelector('.arrow');
        const title = item.querySelector('.accordion-title');

        content.style.display = 'block';
        arrow.textContent = '-';
        title.classList.add('color-change');
      });

      const accordionItems = document.querySelectorAll('.accordion-item');

      accordionItems.forEach(item => {
        const title = item.querySelector('.accordion-title');
        const arrow = title.querySelector('.arrow');
        const content = item.querySelector('.accordion-content');

        title.addEventListener('click', function() {
          const isOpen = content.style.display === 'block';

          accordionItems.forEach(otherItem => {
            otherItem.querySelector('.accordion-content').style.display = 'none';
            otherItem.querySelector('.arrow').textContent = '+';
            otherItem.querySelector('.accordion-title').classList.remove('color-change');
          });

          content.style.display = isOpen ? 'none' : 'block';
          arrow.textContent = isOpen ? '+' : '-';
          arrow.style.bottom = isOpen ? '0rem' : '0.3rem';
          title.classList.toggle('color-change', !isOpen);
        });
      });
    });
  </script>
</body>

</html>