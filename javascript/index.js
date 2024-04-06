const scrollEl = document.querySelector(".our-doctor__cards");
const citiesButtonContainer = document.querySelector(".our-location__cities");
const citiesCenterEl = document.querySelector(".our-location__cities-centers");
const mapContainerEl = document.querySelector(".our-locations__map");
const ourLocationsEl = document.querySelector(".our-locations");

function scrollToCenter() {
  const container = scrollEl;
  const cards = container.querySelectorAll(".our-doctor__cards");
  const containerWidth = container.offsetWidth;
  const cardsWidth = Array.from(cards).reduce(
    (acc, card) => acc + card.offsetWidth,
    0
  );
  const scrollPosition = (cardsWidth - containerWidth) / 2;
  container.scrollLeft = scrollPosition;
}

window.addEventListener("resize", () => {
  scrollToCenter();
});

let citiAndData = [];
let selectedCity = {};
let selectedCityId = null;
let selectedCenter = [];

function updateMap(currentUrl) {
  mapContainerEl.textContent = "";
  mapContainerEl.innerHTML = `
  <iframe src="${currentUrl}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  `;
}

function onClickCenter(event) {
  let idText = event.target.id;
  console.log(event.target);
  let currentUrl = event.target.dataset.directionUrl;
  updateMap(currentUrl);
}

function createCenterEl(center) {
  const centerEl = document.createElement("div");
  centerEl.classList.add("our-location__center");
  centerEl.id = center.centerId;
  centerEl.onclick = onClickCenter;
  centerEl.setAttribute("data-direction-url", center.map_url);

  centerEl.innerHTML = `
      <h1 class="our-location__center-name" onclick="onClickCenter(event)" data-direction-url="${center.map_url}">
          ${center.center_name}
      </h1>
      <p class="our-location__center-address" onclick="onClickCenter(event)" data-direction-url="${center.map_url}">
        ${center.address}
      </p>
      <div class="our-location__center-buttons" onclick="onClickCenter(event)" data-direction-url="${center.map_url}">
          <button class="outline-button" data-callUs-num="989" style="" onclick="onClickCenter(event)" data-direction-url="${center.map_url}">
              <img src="./assets/call-us-image.webp" alt="call us image">
              Call Us
          </button>
          <button class="filled-button" onclick="onClickCenter(event)" data-direction-url="${center.map_url}">
              <img alt="direction image" src="./assets/direction.webp" alt="">
              Directions
          </button>
      </div>
  `;

  return centerEl;
}

function updateCenter() {
  let centers = selectedCity.centers;
  citiesCenterEl.textContent = "";
  for (let center of centers) {
    const readyMadeEl = createCenterEl(center);
    citiesCenterEl.appendChild(readyMadeEl);
  }
}

function updateCity(event) {
  selectedCityId = event.target.id;
  for (let item of citiAndData) {
    let btnEl = document.getElementById(item.id);
    if (item.id === selectedCityId) {
      btnEl.classList.add("selected-city");
      selectedCity = item;
      updateCenter();
      updateMap(selectedCity.centers[0].map_url);
    } else {
      btnEl.classList.remove("selected-city");
    }
  }
}

function createAllSection(data) {
  let classVal = true;
  for (let city of data) {
    const cityBtn = document.createElement("button");
    cityBtn.id = city.id;
    if (classVal) {
      cityBtn.classList.add("our-locations__city-btn");
      cityBtn.classList.add("selected-city");
      updateMap(city.centers[0].map_url);
    } else {
      cityBtn.classList.add("our-locations__city-btn");
    }

    cityBtn.onclick = updateCity;
    cityBtn.innerHTML = city.city_name;

    citiesButtonContainer.appendChild(cityBtn);
    classVal = false;
  }
  updateCenter();
}

function getOurFormat(arr) {
  let uniqueCity = [];
  for (let obj of arr) {
    if (!uniqueCity.includes(obj.city_name)) uniqueCity.push(obj.city_name);
  }

  let newArr = [];
  let id = 1;
  for (let name of uniqueCity) {
    let itemNew = { id: `cityBtn${id}`, city_name: name, centers: [] };
    id += 1;
    for (item of arr) {
      if (name === item.city_name) {
        itemNew.centers.push(item);
      }
    }
    newArr.push(itemNew);
  }

  return newArr;
}

function getData() {
  var xhr = new XMLHttpRequest();
  try {
    xhr.open("GET", "components/ourLocationData.php", true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        let data = getOurFormat(JSON.parse(xhr.responseText));
        citiAndData = data;
        selectedCity = citiAndData[0];
        selectedCityId = citiAndData[0].id;
        selectedCenter = selectedCity.centers[0];
        createAllSection(data);
      }
    };
    xhr.send();
  } catch (error) {
    ourLocationsEl.textContent = "Opps! something went wrong";
  }
}

getData();

let cities = citiAndData.map((each) => each.centers);

// setTimeout(() => {
//   console.clear();
// }, 5000);
