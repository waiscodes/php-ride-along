const reactRoot = document.querySelector("#react-root");

const SearchForm = (props) => {
  const [search, setSearch] = React.useState("");

  return (
    <React.Fragment>
      <form>
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
      <ul>{search}</ul>
    </React.Fragment>
  );
};

ReactDOM.render(<SearchForm />, reactRoot);
