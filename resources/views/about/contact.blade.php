 @extends('layouts.master')

 @section('content')
 <!-- Contact Us -->
 <section class="py-5">
     <div class="container">
         <div class="row" style="padding-top: 30px;">
             <div class="col-lg-4 col-md-4">
                 <h3 class="mt-1 mb-4">Get In Touch</h3>
                 <h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> Address :</h6>
                 <p>23 Balkumari Road, Lalitpur, Nepal PA 44700</p>
                 <h6 class="text-dark"><i class="mdi mdi-phone"></i> Phone :</h6>
                 <p>+977 12345-67890, (+977) 123 456 7890</p>
                 <h6 class="text-dark"><i class="mdi mdi-deskphone"></i> Mobile :</h6>
                 <p>(+977) 986 048 9494, +977 98152-00699</p>
                 <h6 class="text-dark"><i class="mdi mdi-email"></i> Email :</h6>
                 <p>info@skillpark.com, skillparknepal@gmail.com</p>
                 <h6 class="text-dark"><i class="mdi mdi-link"></i> Website :</h6>
                 <p><a href="https://skillpark.herokuapp.com" target="_blank">https://skillpark.com.np</a></p>
                 <style>
                     a,
                     i {
                         color: #666;
                         padding: 5px
                     }
                 </style>
                 <div class="footer-social mb-4"><span>Follow : </span>
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fa fa-envelope"></i></a>
                     <a href="#"><i class="fab fa-github"></i></a>
                     <a href="#"><i class="fab fa-pinterest"></i></a>
                 </div>
             </div>
             <div class="col-lg-8 col-md-8">
                 <div class="card">
                     <div class="card-body">
                         <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                             <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                             <script>
                                 (function() {
                                     var setting = {
                                         "height": 453,
                                         "width": 803,
                                         "zoom": 17,
                                         "queryString": "Kathford International College of Engineering & Managements,CSIT & BBA block, Lalitpur, Nepal",
                                         "place_id": "ChIJ44wF2egZ6zkRlGWVfmQBn18",
                                         "satellite": false,
                                         "centerCoord": [27.673909086086848, 85.33808109384519],
                                         "cid": "0x5f9f01647e956594",
                                         "lang": "en",
                                         "cityUrl": "/nepal/lalitpur-51432",
                                         "cityAnchorText": "Map of Lalitpur, Lalitpur, Nepal",
                                         "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                                         "embed_id": "242698"
                                     };
                                     var d = document;
                                     var s = d.createElement('script');
                                     s.src = 'https://1map.com/js/script-for-user.js?embed_id=242698';
                                     s.async = true;
                                     s.onload = function(e) {
                                         window.OneMap.initMap(setting)
                                     };
                                     var to = d.getElementsByTagName('script')[0];
                                     to.parentNode.insertBefore(s, to);
                                 })();
                             </script><a href="https://1map.com/map-embed">Find Us</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End Contact Us -->
 <!-- Contact Me -->
 <section class="py-5">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 section-title text-left mb-4">
                 <h2>Contact Us</h2>
             </div>
             <form class="col-lg-12 col-md-12" name="sentMessage">
                 <div class="row">
                     <div class="control-group form-group col-lg-4 col-md-4">
                         <div class="controls">
                             <label>Your Name <span class="text-danger">*</span></label>
                             <input type="text" class="form-control" required>
                         </div>
                     </div>
                     <div class="control-group form-group col-lg-4 col-md-4">
                         <div class="controls">
                             <label>Email Address <span class="text-danger">*</span></label>
                             <input type="email" class="form-control" required>
                         </div>
                     </div>
                     <div class="control-group form-group col-lg-4 col-md-4">
                         <div class="controls">
                             <label>Phone Number <span class="text-danger">*</span></label>
                             <input type="email" class="form-control" required>
                         </div>
                     </div>
                 </div>
                 <div class="control-group form-group">
                     <div class="controls">
                         <label>Message <span class="text-danger">*</span></label>
                         <textarea rows="10" cols="100" class="form-control"></textarea>
                     </div>
                 </div>
                 <button type="submit" class="btn btn-success">Send Message</button>
             </form>
         </div>
     </div>
 </section>
 <!-- End Contact Me -->
 @endsection