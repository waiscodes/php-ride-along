<?php  
/* 
* Goal: Return a JSON representation of a Snack
* Parameter: Query Parameter string "search" term.
*/

// This gives additional info about the request response describing the Afile type or how we intent the content body string to be read or treated. 
header('Content-type: app/JSON; charset=UTF-8');

if (isset($_GET['search']) && !empty($_GET['search']))
{ // This is a JSON object response with search term
  // echo "{\"response\":\"Search term: {$_GET['search']}\"}";
  // Now let's retrieve the data
  $snacksJSONString = file_get_contents('../data/snacks.json');
  // echo $snacksJSONString;
  if ($snacksJSONString != FALSE)
  { //Decode to manipulate so we can give it back to them in JSON format
    $snacksList = json_decode($snacksJSONString);
    if ($snacksList != NULL)
    {
      $matchingSnacks = array();
      foreach ($snacksList as $snack)
      {
        if (stristr($snack[0], $_GET['search'] ))
        {
          array_push($matchingSnacks, $snack);
        }
      }
      echo json_encode($matchingSnacks);
    }
    else {
      "{\"response\":\"ERROR: Unable to convert Snacks list from JSON.\"}";
    }
  }
  else
  {
    echo "{\"response\":\"ERROR: Unable to retrieve Snacks list.\"}";
  }
}
else
{ // We're creating a jason object with this basically. 
  echo "{\"response\":\"ERROR: No search term present.\"}";
}



?>