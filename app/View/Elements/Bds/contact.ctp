<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY ?>&libraries=places"></script>

<div class="about_top">
    <div class="container">
        <div class="about">
            <h1 class="blog_head">Contact</h1>
            <div class="map" id="map-canvas" style="height: 400px;">
<!--                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>-->
<!--                <iframe src="https://www.google.com/maps/embed/v1/view?key=--><?php //echo GOOGLE_MAP_API_KEY ?><!--&center=-33.8569,151.2152&zoom=18&maptype=satellite"> </iframe>-->
            </div>
            <div class="contact">
                <div class="col-md-4 contact_left">
                    <h3>Contact info</h3>
                    <p>Địa chỉ: L11, Khu biệt thự Sen Phương Nam</p>
                    <p>Đại Phước, Nhơn Trạch, Đồng Nai</p>
                </div>
                <div class="col-md-8 contact_right">
                    <h3>Catch me</h3>
                    <form>
                        <div class="text">
                            <div class="text-fild">
                                <span>Name:</span>
                                <input type="text" class="text" value="Your Name here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name here';}">
                            </div>
                            <div class="text-fild">
                                <span>Email:</span>
                                <input type="text" class="text" value="Your Email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email here';}">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="msg-fild">
                            <span>Subject:</span>
                            <input type="text" class="text" value="Your Subject here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Subject here';}">
                        </div>
                        <div class="message-fild">
                            <span>Message:</span>
                            <textarea> </textarea>
                        </div>
                        <label class="btn1 btn-8 btn-8c"><input type="submit" value="Send"></label>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <script>
            var map;
            var service;
            var infowindow;

            function initialize() {
                geocoder = new google.maps.Geocoder();

                map = new google.maps.Map(document.getElementById('map-canvas'), {
                    zoom: 10
                });

                var address = 'L11, Khu biệt thự Sen Phương Nam Đại Phước, Nhơn Trạch, Đồng Nai';

                marker = new google.maps.Marker({
                    map: map,
                    draggable:true,
                    title: address
                });

                geocoder.geocode({'address': address+''}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var latlng =  results[0].geometry.location;

                        setTimeout(function () {
                            map.setCenter(latlng);
                        }, 600);


                        var infowindow = new google.maps.InfoWindow({
                            content: "<p>" + address + "</p>"
                        });

                        infowindow.open(map, marker);

                    }
                    else {
                        return null;
                    }
                });

            }

            $(function () {
                initialize();
            });
        </script>
