            <footer>
                
                <div class="redes">
                    <h2>Visita nuestras redes sociales</h2>
                    <ul>
                        <li>
                            <a class="social facebook wow slideInLeft" data-wow-duration="2s" data-wow-offset="10" href="http://facebook.com/lagels" target="_blank">facebook</a>
                        </li>
                        <li>
                            <a class="social twitter wow slideInRight" data-wow-duration="2s" data-wow-offset="10" href="https://twitter.com/LagelsTejido" target="_blank">twitter</a>
                        </li>
                    </ul>
                </div>
                <!-- /redes -->
            </footer>
            <!-- /pie -->
        </main>
        <!-- /pagina -->
        
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <p class="description"></p>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        
        <script src="<?php echo $pos_dir;?>js/jquery-2.0.2.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="<?php echo $pos_dir;?>js/stellar.js"></script>
        <script src="<?php echo $pos_dir;?>js/owl.carousel.min.js"></script>
        <script src="<?php echo $pos_dir;?>js/wow.js"></script>
        
        <script src="https://blueimp.github.io/Gallery/js/blueimp-gallery.js"></script>
        
        <script>
            function initMap() { //19.427151,-99.1366624
              var uluru = {lat: 19.4274941, lng: -99.1352229};
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 20,
                center: uluru
              });
              var marker = new google.maps.Marker({
                position: uluru,
                map: map
              });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDndLNkDDzKZSPGQ5D6NyVSxJl9XIgc_Rc&callback=initMap">
        </script>
        <?php echo $js_extra; ?>
        
    </body>
</html>