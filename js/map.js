var DconMap = (function() {
    
    
    var cloudmadeUrl = 'http://{s}.tile.cloudmade.com/aec7cb5f0a5a4e778deb5fedeb56a805/997/256/{z}/{x}/{y}.png',
        cloudmadeAttribution = 'Map data &copy; 2011 OpenStreetMap contributors, Imagery &copy; 2011 CloudMade',
        cloudmade = new L.TileLayer(cloudmadeUrl, {maxZoom: 18, attribution: cloudmadeAttribution});
    
    var CENTRE_POINT_LAT = 50.8235;
    var CENTRE_POINT_LON = -0.138;
    var ICON_SPRITE_URL = "http://media02.dconstruct.org/2010-0003/i/bg/icons.png";
    var map_canvas
    
    var map, current_marker;
    
    var VENUE_TO_MARKER_URL = {
        "dome-venue": "http://media01.dconstruct.org/2011-0003/img/markers/conference.png",
        "workshops-venue": "http://media01.dconstruct.org/2011-0003/img/markers/workshops.png",
        "pre-party-venue": "http://media01.dconstruct.org/2011-0003/img/markers/pre-party.png",
        "after-party-venue": "http://media01.dconstruct.org/2011-0003/img/markers/after-party.png",
    };
    
    function init() {
        
        map_canvas = document.getElementById("map");
        
        if (!map_canvas) {
            return false;
        }

        // Create the map
        map = buildMap(map_canvas);
        
        //Find vCards
        for (var venue in VENUE_TO_MARKER_URL) {
            var el = document.getElementById(venue);
            if (el) {
                var pos = getLatLonFromVCard(el);
                var marker_url = VENUE_TO_MARKER_URL[venue];
                addMarker(pos, marker_url);
                el.onclick = (function(pos) {
                    return function() { map.setView(pos, 17); return false };
                })(pos);
            }
        }
        
        // Bin out here as I haven't implemented the rest.
        return;
        
        // Add click events to list elements in nearby part of page
        var vcards = document.getElementById("location-tips").getElementsByTagName("li");
        for (var i = 0, j = vcards.length; i<j; ++i) {
            var li = vcards[i];
            li.style.cursor = "pointer";
            li.onclick = function() {
                showMarkerOnMap(getLatLonFromVCard(this));
            }
        }
        window.onresize = function() {
            setMapHeight();
        }
        setTimeout( function() {
            setMapHeight();
        }, 1000)
    }
    
    function setMapHeight() {
        // This is only going to work on nice modern browsers that support querySelector;
        if (document.querySelector) {
            var tile5_height = document.defaultView.getComputedStyle(
                document.querySelector(".box.fifth.vertical"), null).getPropertyValue("height");
            var tile6_height =     document.defaultView.getComputedStyle(
                document.querySelector(".box.sixth.vertical"), null).getPropertyValue("height");
            
            tile5_height = Math.ceil(parseFloat(tile5_height.substring(0, tile5_height.length-2)));
            tile6_height = Math.ceil(parseFloat(tile6_height.substring(0, tile6_height.length-2)));
            var map_height = tile5_height + tile6_height;
            
            map_canvas.style.height = map_height + "px";
        }
    }
    
    // Add a marker at a point, using a given Y offset of the image sprite.
    function addMarker(latlon, marker_url) {
        if (marker_url) {
            var icon = new L.Icon(marker_url);
            var marker = new L.Marker(latlon, {"icon": icon});
        } else {
            var marker = new L.Marker(latlon, {"icon": icon});
        }
        map.addLayer(marker);
    }
    
    function showMarkerOnMap(latlon) {
        // Remove current marker if it exists
        if (current_marker) {
            map.removeLayer(current_marker);
        }
        // Add new marker to map
        addMarker(latlon)
        // Then pan the map.
        map.panTo(latlon);
        
        // Set current marke
        current_marker = marker;
    }
    
    // Get first geo element from a vCard
    function getLatLonFromVCard(el) {
        var els = el.getElementsByTagName("*");
        for (var i = 0, j = els.length; i<j; ++i) {
            if (els[i].className.indexOf("geo") !== -1) {
                var coords = els[i].title.split(";");
                return new L.LatLng(parseFloat(coords[0]), parseFloat(coords[1]));
            }
        }
    }
    
    // Stick our map on the page.
    function buildMap(el) {
        
        
        // initialize the map on the "map" div
        var map = new L.Map(el,
            {center: new L.LatLng(CENTRE_POINT_LAT, CENTRE_POINT_LON), 
            zoom: 15,
            scrollWheelZoom: false});

        // set the map view to a given center and zoom and add the CloudMade layer
        map.addLayer(cloudmade);

        // create a marker in the given location and add it to the map
        // var marker = new L.Marker(new L.LatLng(51.5, -0.09));
        // map.addLayer(marker);
        
        return map;
        
    }
    
    
    return {
        "init": init
    }
    
    
    
})();

DconMap.init();