const reactRoot = document.querySelector("#react-root");

const SearchForm = (props) => {
  return (
    <React.Fragment>
      <form>
        <label htmlFor="search">Search Snacks</label>
        <input type="search" name="search" id="search" />
        <input type="submit" value="Search Snack" />
      </form>
      <h3>Snack Search Results</h3>
      <ul></ul>
    </React.Fragment>
  );
};

ReactDOM.render(<SearchForm />, reactRoot);
