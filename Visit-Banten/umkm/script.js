// sort
const cardContainer = document.querySelector(".row-cols-1");
const sortMenu = document.getElementById("sort-menu");

sortMenu.addEventListener("click", function (event) {
  event.preventDefault();
  const selectedCategory = event.target.textContent;
  const cards = cardContainer.querySelectorAll(".col");

  cards.forEach(function (card) {
    const cardCategory = card.querySelector(".card-category").textContent;
    if (selectedCategory === "Sort by" || selectedCategory === cardCategory) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
    if (selectedCategory === "Show all") {
      card.style.display = "block";
    }
  });
});

//search
const searchInput = document.getElementById('searchInput');
const cards = cardContainer.getElementsByClassName('col');

searchInput.addEventListener('input', function(event) {
  const keyword = event.target.value.toLowerCase();

  for (let i = 0; i < cards.length; i++) {
    const card = cards[i];
    const title = card.getElementsByClassName('card-title')[0].textContent.toLowerCase();
    const category = card.getElementsByClassName('card-category')[0].textContent.toLowerCase();
    const description = card.getElementsByClassName('card-text')[0].textContent.toLowerCase();
    
    if (title.includes(keyword) || category.includes(keyword) || description.includes(keyword)) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  }
});