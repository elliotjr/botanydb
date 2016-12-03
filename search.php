<?php
  $searchTerm = $_POST['searchTerm'];
  $url = 'http://bie.ala.org.au/ws/search.json?q='.$searchTerm.'=idxtype,rank,speciesGroup,imageAvailable';
  $json = file_get_contents($url);
  $array = json_decode($json);
  print_r($array); 

 ?>
