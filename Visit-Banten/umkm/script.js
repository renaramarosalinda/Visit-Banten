document.addEventListener("DOMContentLoaded", function () {
  var data = [
    { category: "Sepatu", content: "Ini adalah card sepatu." },
    { category: "Pakaian", content: "Ini adalah card pakaian." },
    { category: "Aksesoris", content: "Ini adalah card aksesoris." },
  ];

  // Mengurutkan data berdasarkan kategori
  var sortedData = data.sort(function (a, b) {
    if (a.category < b.category) return -1;
    if (a.category > b.category) return 1;
    return 0;
  });

  var sortedContainer = document.getElementById("sortedData");

  // Menambahkan data card yang telah diurutkan ke dalam elemen div
  sortedData.forEach(function (item) {
    var card = document.createElement("div");
    card.className = "card";

    var title = document.createElement("h3");
    title.className = "card-title";
    title.textContent = item.category;

    var content = document.createElement("p");
    content.className = "card-text";
    content.textContent = item.content;

    card.appendChild(title);
    card.appendChild(content);
    sortedContainer.appendChild(card);
  });
});
