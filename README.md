This is fork of original [SpryMap](http://candrews.net/blog/2010/10/introducing-sprymap/) with IE fix. 
Demo can be seen here: [demo.spidersoft.com.au/SpryMap/index.html](http://demo.spidersoft.com.au/SpryMap/index.html)


Made by 2011 Charlie Andrews

Small done by Slawomir Jasinski - mostly ie IE


```JAVASCRIPT
var map = new SpryMap({
   // The ID of the element being transformed into a map
   id : "",
   // The width of the map (in px)
   width: 800,
   // The height of the map (in px)
   height: 800,
   // The X value of the starting map position
   startX: 0,
   // The Y value of the starting map position
   startY: 0,
   // Boolean true if the map should animate to a stop
   scrolling: true,
   // The time (in ms) that the above scrolling lasts
   scrollTime: 300,
   // Boolean true if the map disallows moving past its edges
   lockEdges: true,
   // The CSS class attached to the wrapping map div
   cssClass: "",
   // The cursor CSS style rule to apply when the mouse hovers the map
   hoverCursor: "auto",
   // The cursor CSS style rule to apply when the mouse is dragged on the map
   dragCursor: "[closed hand cursor]"
});
```