#SpryMap

##Introduction
This is fork of original [SpryMap](http://candrews.net/blog/2010/10/introducing-sprymap/) with IE fix. 
Demo can be seen here: [demo.spidersoft.com.au/SpryMap/index.html](https://demo.spidersoft.com.au/SpryMap/index.html)

##Author && contributors

Made by 2011 Charlie Andrews

- Slawomir Jasinski - fizing mostly IE problems
- [xloong](https://github.com/xloong) - [mobile support](https://github.com/slav123/SpryMap/pull/7/commits/1d432e553870384a1100d1cf4d93fbf31dd487db)
- [Matt Holt](https://github.com/mholt) - [customizable cursors](https://github.com/slav123/SpryMap/pull/1/commits/5e38434ce12f4593ee4c43867009b46ee2ca9f31) 
 
## Usage

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

## FAQ

1. Did you have a way to insert some clickable area on the map?  I want to insert on two different city on your map the possibility for a user to click and open a link.
```HTML
<img id="worldMap" src="map.jpg" alt="A map of the world." usemap="#Map" />
<map name="Map" id="Map">
<area alt="" title="" href="#" shape="rect" coords="432,49,758,425" onclick="alert('Area1');" />
<area alt="" title="" href="#" shape="rect" coords="589,1586,772,1727" onclick="alert('Area2');" />
<area alt="" title="" href="#" shape="rect" coords="435,1259,681,1581" onclick="alert('Area3');" />
<area alt="" title="" href="#" shape="rect" coords="688,1585,780,911" onclick="alert('Area4');" />
</map>
```

2. Do yo 