const snackSearchForm = document.querySelector("form");
const snackSearchInput = document.querySelector("#search");
const searchResults = document.querySelector("#search-results");

snackSearchForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const results = false;
  fetch(`http://localhost:3000/api/snacks.php?search=${snackSearchInput.value}`)
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
    });
});
