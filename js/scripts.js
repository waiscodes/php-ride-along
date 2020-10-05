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
      for (let snack of data) {
        const snackLI = document.createElement("li");
        snackLI.innerHTML = `<h5>${snack[0]}</h5>
          <dl>
            <dt>Type</dt>
              <dd>${snack[1]}</dd>
            <dt>Price</dt>
              <dd>$${snack[2]}</dd>
            <dt>Calories</dt>
              <dd>${snack[3]}</dd>
            `;
        searchResults.append(snackLI);
      }
    });
});
