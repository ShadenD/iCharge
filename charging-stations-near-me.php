<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iCharge</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css-iCharge.css">
    <link rel="stylesheet" href="lightbox.css">
    <script src="lightbox-plus-jquery.js" type="module"></script>
    <script src="language.js" type="module"></script>
  
   
</head>
<body>
<header style="display: flex;width: 100%;background-color: #1e0b6f;position: fixed;"> 
        <img src="images/iCharge-Logo-removebg-preview.png" style="width: 14%;height: 50%;margin-left: 100px;margin-top: 10px;margin-right: 120px;">
        <nav>
           <ul class="menu" id="scrollContainer">
              
<div class="dropdown7">
  <button class="dropbtn" data-i18n="products">Products</button>
  <div class="dropdown-content7">
    <a href="#EV Chargers" data-i18n="1">EV Chargers</a>
    <a href="EV Accessories.php" data-i18n="2">EV Accessories</a>
    <a href="White Lable Chargers.php" data-i18n="3">White Label Chargers</a>
    <a href="software.php" data-i18n="4">Software</a>
  </div>
</div>
<!-- ________________________________________________________________________ -->
<div class="dropdown7">
  <button class="dropbtn" data-i18n="solutions">Solutions</button>
  <div class="dropdown-content8">
    <div style="display: flex;">
        <div>
            <h1 style="color: rgb(0, 0, 0); text-decoration: none; display: block;font-size: 14px;margin-right: 60px;text-align: left;" data-i18n="25">By Industry</h1>
            <p style="text-align: left;">______________________</p>
<div style="display: flex;">
     <div>
    <a href="automaker.php" data-i18n="5">Automaker</a>
    <a href="cities and goverment.php" data-i18n="6">Cities and Governments</a>
    <a href="Entertainment.php" data-i18n="7">Entertainment</a>
    <a href="Residential.php" data-i18n="8">Fuel Retailers</a>
    <a href="#EV Chargers" data-i18n="9">Healthcare</a>
    <a href="EV Accessories.php" data-i18n="10">Parking Lots</a>
    <a href="Residential.php" data-i18n="11">Residential</a>
    <a href="software.php" data-i18n="12">Street Power Poles</a>
  </div>
  <div >
    <a href="#EV Chargers" data-i18n="13">Charging Networks</a>
    <a href="EV Accessories.php" data-i18n="14">Education</a>
    <a href="White Lable Chargers.php" data-i18n="15">Fleets</a>
    <a href="software.php" data-i18n="16">Green Buildings</li></a>
    <a href="#EV Chargers" data-i18n="17">Hospitality</a>
    <a href="EV Accessories.php" data-i18n="18">Property Developers</a>
    <a href="White Lable Chargers.php" data-i18n="19">Restaurants</a>
    <a href="software.php" data-i18n="20">Workplaces</a>
  </div>   

            </div>
    </div>
    <!-- _______________________________________________ -->
     <div>
    <div style="margin-left: 40px;">
            <h1 style="color: rgb(0, 0, 0); text-decoration: none; display: block;font-size: 14px;margin-right: 60px;text-align: left;" data-i18n="24">By Charging Level</h1>
            <p style="text-align: left;">______________________</p>

     <div>
    <a href="#EV Chargers" data-i18n="21">Level 1 Charger</a>
    <a href="EV Accessories.php" data-i18n="22">Level 2 Charger</a>
    <a href="White Lable Chargers.php" data-i18n="23">DC Fast Charging</a>
  </div>          
    </div>
    <div style="margin-left: 40px;">
            <h1 style="color: rgb(0, 0, 0); text-decoration: none; display: block;font-size: 14px;margin-right: 60px;text-align: left;" data-i18n="26">By Charging Type</h1>
            <p style="text-align: left;">______________________</p>

     <div>
    <a href="#EV Chargers"">Home Charging</a>
    <a href="EV Accessories.php">Business Charging</a>
  </div>          
    </div>
    </div>


    <div style="margin-left: 40px;">
            <h1 style="color: rgb(0, 0, 0); text-decoration: none; display: block;font-size: 14px;margin-right: 60px;text-align: left;" data-i18n="27">By Vehicle Level</h1>
            <p style="text-align: left;">______________________</p>

     <div>
    <a href="#EV Chargers"">E-Bus</a>
    <a href="EV Accessories.php">E-Truck</a>
    <a href="White Lable Chargers.php">Car & Light Vehicles</a>
  </div>          
    </div>
    </div>
  </div>
</div>
<!-- _________________________________________________________________________ -->
<div class="dropdown7">
  <button class="dropbtn" data-i18n="company">Company</button>
  <div class="dropdown-content7">
    <a href="about us.php"">About Us</a>
    <a href="contact us.php">Contact Us</a>
    <a href="partner-program.php">Partner Program</a>
    <a href="certifications.php">Certifications</a>
    <a href="EV Accessories.php">Customer Story</a>
    <a href="Gallery.php">Gallery</a>
  </div>
</div>
<!-- _____________________________________________________________________ -->
<div class="dropdown7">
  <button class="dropbtn" data-i18n="resources">Resources</button>
  <div class="dropdown-content9">
    <div style="display: flex;">
      
 <!-- _______________________________________________ -->
     <div>
    <div style="margin-left: 10px;">
            <h1 style="color: rgb(0, 0, 0); text-decoration: none; display: block;font-size: 14px;margin-right: 60px;text-align: left;">Find A Charger</h1>
            <p style="text-align: left;">______________________</p>

     <div>
    <a href="charging-stations-near-me.php" style="text-align: left;">EV Charging Stations Near Me</a>
    <a href="EV Accessories.php" style="text-align: left;">Tesla Superchargers Near Me</a>
    <a href="White Lable Chargers.php" style="text-align: left;">EV Charging Stations Near Me in Canada</a>
  </div>          
    </div>
    <div style="margin-left: 1s0px;">     
    </div>
    </div>
    <div style="margin-left: 40px;">
            <h1 style="color: rgb(0, 0, 0); text-decoration: none; display: block;font-size: 14px;margin-right: 60px;text-align: left;">Learn</h1>
            <p style="text-align: left;">______________________</p>

     <div>
    <a href="#EV Chargers" style="text-align: left;">EV Basics</a>
    <a href="EV Accessories.php" style="text-align: left;">EV Charging Guide</a>
    <a href="White Lable Chargers.php" style="text-align: left;">EV Charging Business</a>
    <a href="White Lable Chargers.php" style="text-align: left;">EV Network & Reviews</a>
    <a href="White Lable Chargers.php" style="text-align: left;">EV Charger Manufacturers</a>

  </div>          
    </div>
    </div>
  </div>
</div>
           </ul>
       </nav>
       <select style="background-color:transparent;border:none;color:white;border-radius: 50px;font-size: 12px;margin-left:140px;">
        <option value="en" data-i18n="english" style="color:black" selected>English</option>
        <option value="ar" data-i18n="arabic" style="color:black">Arabic</option>
      </select>
 
       <div class="button-container1">
           <button class="btn1 btn-primary1" data-i18n="ourProducts">  <i class="fas fa-user-friends"></i>
               View Our Products</button>
           <button class="btn1 btn-outline1" data-i18n="contact">Contact an Expert</button>
       </div>
        <!-- div for categories -->
    </div>
    </header>
    <br><br><br> <br><br><br> <br><br><br>

    <center><h1 style="font-size: 40px;">EV Charging Stations Near Me</h1></center>
    <br><br><br>
<div class="controls">
        <input type="text" id="search" placeholder="Enter a station name, street, city or ZIP">
        <select id="charger-type">
            <option value="">Charger Type</option>
            <option value="L1">L1</option>
            <option value="L2">L2</option>
            <option value="DC">DC Fast Charger</option>
        </select>
        <select id="connector">
            <option value="">Connector</option>
            <option value="type1">Type 1</option>
            <option value="type2">Type 2</option>
        </select>
        <select id="network">
            <option value="">Network</option>
            <option value="network1">Network 1</option>
            <option value="network2">Network 2</option>
        </select>
        <select id="charging-speed">
            <option value="">Charging Speed</option>
            <option value="fast">Fast</option>
            <option value="medium">Medium</option>
            <option value="slow">Slow</option>
        </select>
        <select id="payment">
            <option value="">Payment</option>
            <option value="free">Free</option>
            <option value="paid">Paid</option>
        </select>
    </div>
    <div id="map"></div>

    <script src="https://cdn.jsdelivr.net/npm/leaflet-simple-map-screenshoter@0.4.1/dist/leaflet-simple-map-screenshoter.min.js"></script>
    <script>
        // Initialize the map
        var map = L.map('map').setView([37.0902, -95.7129], 4); // Centered on the US

        // Add a tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add custom controls to the map
        var customControl = L.Control.extend({
            options: {
                position: 'topright'
            },
            onAdd: function (map) {
                var container = L.DomUtil.create('div', 'leaflet-bar leaflet-control leaflet-control-custom');

                container.style.backgroundColor = 'white';
                container.style.width = '30px';
                container.style.height = '30px';

                container.innerHTML = '<img src="images/help.png" alt="Help">';
                container.onclick = function(){
                    alert('Help clicked');
                };

                return container;
            }
        });

        map.addControl(new customControl());

        var locateControl = L.Control.extend({
            options: {
                position: 'topright'
            },
            onAdd: function (map) {
                var container = L.DomUtil.create('div', 'leaflet-bar leaflet-control leaflet-control-custom');

                container.style.backgroundColor = 'white';
                container.style.width = '30px';
                container.style.height = '30px';
                container.style.marginTop = '5px';

                container.innerHTML = '<img src="images/location.png" alt="Locate">';
                container.onclick = function(){
                    map.locate({setView: true, maxZoom: 16});
                };

                return container;
            }
        });

        map.addControl(new locateControl());

        var downloadControl = L.Control.extend({
            options: {
                position: 'topright'
            },
            onAdd: function (map) {
                var container = L.DomUtil.create('div', 'leaflet-bar leaflet-control leaflet-control-custom');

                container.style.backgroundColor = 'white';
                container.style.width = '30px';
                container.style.height = '30px';
                container.style.marginTop = '5px';

                container.innerHTML = '<img src="images/download.png" alt="Download">';
                container.onclick = function(){
                    mapScreenshoter.takeScreen('blob').then(blob => {
                        var a = document.createElement('a');
                        a.href = URL.createObjectURL(blob);
                        a.download = 'map.png';
                        a.click();
                    });
                };

                return container;
            }
        });

        map.addControl(new downloadControl());

        var zoomInControl = L.Control.extend({
            options: {
                position: 'topright'
            },
            onAdd: function (map) {
                var container = L.DomUtil.create('div', 'leaflet-bar leaflet-control leaflet-control-custom');

                container.style.backgroundColor = 'white';
                container.style.width = '30px';
                container.style.height = '30px';
                container.style.marginTop = '5px';

                container.innerHTML = '<img src="images/plus.png" alt="Zoom In">';
                container.onclick = function(){
                    map.zoomIn();
                };

                return container;
            }
        });

        map.addControl(new zoomInControl());

        var zoomOutControl = L.Control.extend({
            options: {
                position: 'topright'
            },
            onAdd: function (map) {
                var container = L.DomUtil.create('div', 'leaflet-bar leaflet-control leaflet-control-custom');

                container.style.backgroundColor = 'white';
                container.style.width = '30px';
                container.style.height = '30px';
                container.style.marginTop = '5px';

                container.innerHTML = '<img src="images/minus.png" alt="Zoom Out">';
                container.onclick = function(){
                    map.zoomOut();
                };

                return container;
            }
        });

        map.addControl(new zoomOutControl());

        // Locate user
        map.on('locationfound', function(e) {
            L.marker(e.latlng).addTo(map)
                .bindPopup("You are here!").openPopup();
        });

        map.on('locationerror', function() {
            alert("Location access denied.");
        });
    </script>
</body>
</html>