const reactRoot = document.querySelector("#react-root");

const SearchForm = (props) => {
  const [search, setSearch] = React.useState("");
  const [snacks, setSnacks] = React.useState([]);

  const submitSearch = (e) => {
    e.preventDefault();

    fetch(`http://localhost:3000/api/snacks.php?search=${search}`)
      .then((response) => response.json())
      .then((result) => {
        console.log(result);
        setSnacks(result);
      })
      .catch((error) => {
        throw error;
      });
  };
  return (
    <React.Fragment>
      <form onSubmit={submitSearch}>
        <label htmlFor="search">Search Snacks: </label>
        <input
          type="search"
          name="search"
          id="search"
          onChange={(e) => {
            setSearch(e.target.value);
          }}
          value={search}
        />
        <input type="submit" value="Search Snack" />
      </form>
      <h3>Snack Search Results</h3>
      <ul>
        {snacks.map((snack) => (
          <li>
            <h4>{snack[0]}</h4>
            <dl>
              <dt>Snack Type:</dt>
              <dd>{snack[1]}</dd>
              <dt>Snack Price:</dt>
              <dd>${parseFloat(snack[2]).toFixed(2)}</dd>
              <dt>Snack Calories:</dt>
              <dd>{snack[3]}</dd>
            </dl>
          </li>
        ))}
      </ul>
    </React.Fragment>
  );
};

ReactDOM.render(<SearchForm />, reactRoot);
