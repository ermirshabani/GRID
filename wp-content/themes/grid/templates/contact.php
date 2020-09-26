<!-- 
    Template Name: Contact
 -->
<?php get_header(); ?>
                                
<div class="firstBg">
<div id="map" id="overlaymap"></div>

<button class=" butonishfaqe" onclick="shfaqe()">
 <p id="shfaqeparagrafi"><i class='fa fa-street-view' aria-hidden='true'></i> Lokacioni</p></button>


<div class="bg-contact" id="bgcontact">

<script>
function shfaqe() {
  
  var bgcontact = document.getElementById("bgcontact");
  var shfaqeparagrafi = document.getElementById("shfaqeparagrafi");
  var mapa = document.getElementById("map");

  if (bgcontact.style.opacity === "0") {
    bgcontact.style.opacity = "1";
    bgcontact.style.visibility = "visible";
    bgcontact.style.transition = "0.5s ease-in-out";
    shfaqeparagrafi.innerHTML = "<i class='fa fa-street-view' aria-hidden='true'></i> Lokacioni";
    mapa.style.filter = "brightness(0.4)";
    mapa.style.transition = "0.5s ease-in-out";

  } else {
    bgcontact.style.visibility = "hidden";
    bgcontact.style.transition = "0.2s ease-in-out";
    bgcontact.style.opacity = "0";
    shfaqeparagrafi.innerHTML = "<i class='fas fa-address-card'></i> Kontakti";
    mapa.style.filter = "brightness(1)";
    mapa.style.transition = "0.2s ease-in-out";
  }
}
</script>






<div class="container">
<div class="row">

<div class="col-12 findusTxt">
<h1>Na gjeni në <span>Media Sociale</span></h1>
</div>

<div class="col col-12 socialMedia d-flex justify-content-center">
<a target="_blank" href="<?php the_field('facebook'); ?>"><p><i class="fab fa-facebook-f"></i></p></a>
<a target="_blank" href="<?php the_field('instagram'); ?>"><p><i class="fab fa-instagram"></i></p></a>
</div>

</div>
</div>

    
<div class="container-fluid cc">
<div class="row rowBottom">

<div class="col-12 col-lg-4 col-xl-4 topCol">
<h1><span>Adresa</span> jonë</h1>

<ul>
<li id="emriKompanis"><?php the_field('emri_kompanis'); ?></li>
<li><i class="fas fa-road"></i> <?php the_field('adresa_e_rruges'); ?></li>
<li><i class="fas fa-city"></i> <?php the_field('qyteti'); ?></li>
<li><i class="fas fa-phone"></i> <?php the_field('nrtelefonit'); ?></li>
<li><i class="fas fa-envelope-square"></i> <a href="mailto:<?php the_field('email'); ?>"> <?php the_field('email'); ?></a></li>
</ul>
</div>

<div class="col-12 col-lg-8 col-xl-8 rightCol">
<h1>Dërgo <span>Mesazh</span></h1>
<?php echo do_shortcode('[contact-form-7 id="74" title="Contact form 1"]'); ?>
    </div>  

</div>
</div>


                                    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVu3FMyk485eNAMGE6uc5ttRxS1PYDFJE"></script>
                                    <script type="text/javascript">
                                        // When the window has finished loading create our google map below
                                        google.maps.event.addDomListener(window, 'load', init);

 

                                        function init() {
                                            // Basic options for a simple Google Map
                                            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                                            var mapOptions = {
                                                // How zoomed in you want the map to start at (always required)
                                                zoom: 17,

 

                                                // The latitude and longitude to center the map (always required)
                                                center: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),

 

                                                // How you would like to style the map.
                                                // This is where you would paste any style found on Snazzy Maps.
                                                // styles: [{"featureType": 'water',"elementType": 'labels.text.fill',"stylers": [{"color": '#686868'}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]
                                            };

 

                                            // Get the HTML DOM element that will contain your map
                                            // We are using a div with id="map" seen below in the <body>
                                            var mapElement = document.getElementById('map');

 

                                            // Create the Google Map using our element and options defined above
                                            var map = new google.maps.Map(mapElement, mapOptions);

 

                                            // Let's also add a marker while we're at it

 

                                            var marker = new google.maps.Marker({
                                                position: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),
                                                map: map,
                                                // icon: {
                                                //      url: "<?php the_field('addressicon');?>"
                                                // }
                                            });

 

                                            // var customMarker = '<?php the_field('address_icon');?>';
                                            // var marker = new google.maps.Marker({
                                            //     position: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),
                                            //     map: map,
                                            //     icon: customMarker

 

                                            // });
                                        }
                                </script>
                            



</div>


    </div>


<?php get_footer(); ?>