<!doctype html> 
<html> 
<head> 
  <title>SpryMap | candrews.net</title> 
  <link rel="stylesheet" href="styles/style.css" type="text/css" > 
  <script type="text/javascript" src="scripts/spryMap-2.js"></script> 
  <script type="text/javascript"> 
  window.onload = function() {
  var map = new SpryMap({id : "worldMap",
                         height: 400,
                         width: 800,
                         startX: 200,
                         startY: 200,
                         cssClass: "mappy"});
  }
  </script> 
</head> 
<body> 
    <div class="content"> 
       <h1>Introducing the SpryMap</h1> 
       <h2>The javascript map script so fast and lightweight that it'll knock your knickers off. Give it a try - click and drag the map below.</h2> 
       <img id="worldMap" src="map.jpg" alt="A map of the world." />
       <h3>Note: All credit for creating this wonder of a map image goes to <a href="http://www.lazzmap.com/">Rob Lazzaretti</a>.</h3> 
    </div> 
</body> 
</html>