<footer id="footer" class="background-color-quaternary m-none pb-xlg">
			<div class="container pt-xlg pb-xlg">
				<div class="row mb-xlg pb-xlg">
					<div class="col-md-5">
						<div class="mb-xlg pb-xlg">
							<h4 class="text-color-light font-weight-light mb-sm">Porto Event - July 17 &amp; 18, 2017 in NYC</h4>
							<p class="custom-font-size-3 text-color-light font-weight-normal text-uppercase mb-none">New York Plaza - New Work - NY</p>
						</div>
						<a href="" class="btn btn-primary custom-border-radius custom-btn-style-1 font-size-md font-weight-semibold text-color-light text-uppercase outline-none">Buy Tickets <i class="custom-long-arrow-right ml-md" aria-hidden="true"></i></a>
					</div>
					<div class="col-md-3">
						<div class="contact-details">
							<h4 class="text-color-light font-weight-light mb-lg pb-xs">Contact Us</h4>
							<div class="mb-md">
								<strong class="font-weight-light text-color-light">Address:</strong>
								<span class="font-weight-light">1234 Street Name, City Name, United States</span>
							</div>
							<div class="mb-md">
								<strong class="font-weight-light text-color-light">Phone:</strong>
								<a href="tel:1234567890" class="text-decoration-none font-weight-light">(123) 456-7890</a>
							</div>
							<div>
								<strong class="font-weight-light text-color-light">Email:</strong>
								<a href="mailto:mail@example.com" class="text-decoration-none font-weight-light">mail@example.com</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-offset-1">
						<h4 class="text-color-light font-weight-light mb-lg pb-xs">Follow Us</h4>
						<ul class="social-icons">
							<li class="social-icons-facebook">
								<a href="http://www.facebook.com/" target="_blank" title="Facebook">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li class="social-icons-twitter">
								<a href="http://www.twitter.com/" target="_blank" title="Twitter">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="social-icons-google">
								<a href="http://www.plus.google.com/" target="_blank" title="Twitter">
									<i class="fa fa-google-plus" aria-hidden="true"></i>
								</a>
							</li>
							<li class="social-icons-linkedin">
								<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="footer-border center pt-xlg">
							<p class="font-weight-normal mb-none">© Copyright 2017. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Vendor -->
		<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/common/common.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?= base_url() ?>assets/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="<?= base_url() ?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?= base_url() ?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?= base_url() ?>assets/js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="<?= base_url() ?>assets/js/demos/demo-event.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?= base_url() ?>assets/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?= base_url() ?>assets/js/theme.init.js"></script>


		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdAJgto5VLduLTvRa9_m7_xEt5B56epUE"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				icon: {
					image: "<?=base_url() ?>assets/img/demos/event/venue/map-pin.png",
					iconsize: [36, 48],
					iconanchor: [36, 48]
				}
			}];

			// Map Initial Location
			var initLatitude = -6.556197;
			var initLongitude = 106.7815113;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 14
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

			// Styles from https://snazzymaps.com/
			var styles = [{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');
			
			if( $('html[dir="rtl"]').get(0) ) {
				mapRef.panBy(60,50);
			} else {
				mapRef.panBy(-68,50);
			}

			

		</script>

</body>

</html>