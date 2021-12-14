   <!-- Start Footer  -->
   <footer>
       <div class="footer-main">
           <div class="container">
               <div class="row">
                   <div class="col-lg-4 col-md-12 col-sm-12">
                       <div class="footer-top-box">
                           <h3>Business Time</h3>
                           <ul class="list-time">
                               <li>Mon - Fri: 9:00 - 18:30</li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-12 col-sm-12">
                       <div class="footer-top-box">
                           <h3>Informasi Terkini</h3>
                           <form class="newsletter-box">
                               <div class="form-group">
                                   <input class="" type="email" name="Email"
                                       placeholder="Email Address*" />
                                   <i class="fas fa-envelope"></i>
                               </div>
                               <button class="btn hvr-hover" type="submit">Submit</button>
                           </form>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-12 col-sm-12">
                       <div class="footer-top-box">
                           <h3>Social Media</h3>
                           <p>Ikuti dan dapat kabar terbaru disini!</p>
                           <ul>
                               <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fas fa-rss" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                               <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                           </ul>
                       </div>
                   </div>
               </div>
               <hr>
               <div class="row">
                   <div class="col-lg-4 col-md-12 col-sm-12">
                       <div class="footer-widget">
                           <h4>Tentang MHS</h4>
                           <p>SMK Multistudi High School adalah sebuah institusi pendidikan vokasi yang didirikan pada
                               tahun
                               2007 dengan fokus inovasi, prestasi dan akhlak mulia.Melalui inovasi, SMK MHS menerapkan
                               dan
                               meramu sistem pendidikan vokasi yang paling sesuai dengan kebutuhan dunia kerja saat ini
                               yang
                               menuntut siswa untuk proaktif dan menjadi pionir untuk perkembangan dirinya.</p>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-12 col-sm-12">
                       <div class="footer-link">
                           <h4>Informasi</h4>
                           <ul>
                               <li><a href="#">Tentang Kami</a></li>
                               <li><a href="#">Customer Service</a></li>
                               <li><a href="#">Website MHS</a></li>
                               <li><a href="#">Syarat dan Ketentuan</a></li>
                               <li><a href="#">Aturan Privasi</a></li>
                               <li><a href="#">Cara Memesan</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-12 col-sm-12">
                       <div class="footer-link-contact">
                           <h4>Hubungi Kami</h4>
                           <ul>
                               <li>
                                   <p><i class="fas fa-map-marker-alt"></i>Alamat: Jl. Kuda Laut, Sungai Jodoh, Kec.
                                       Batu Ampar, Kota Batam, Kepulauan Riau 29451</p>
                               </li>
                               <li>
                                   <p><i class="fas fa-phone-square"></i>No Telepon: <a
                                           href="tel:+628117009959">+62-811-7009-959</a></p>
                               </li>
                               <li>
                                   <p><i class="fas fa-envelope"></i>Email: <a
                                           href="mailto:humasmhs@multistudi.sch.id">humasmhs@multistudi.sch.id</a></p>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <!-- End Footer  -->

   <!-- Start copyright  -->
   <div class="footer-copyright">
       <p class="footer-company">All Rights Reserved. &copy; {{ date('Y') }} <a href="#">MHS Soft Teams</a></p>
   </div>
   <!-- End copyright  -->

   <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

   <!-- ALL JS FILES -->
   <script src="{{ asset('assets/public') }}/js/jquery-3.2.1.min.js"></script>
   <script src="{{ asset('assets/public') }}/js/popper.min.js"></script>
   <script src="{{ asset('assets/public') }}/js/bootstrap.min.js"></script>
   <!-- ALL PLUGINS -->
   <script src="{{ asset('assets/public') }}/js/jquery.superslides.min.js"></script>
   <script src="{{ asset('assets/public') }}/js/bootstrap-select.js"></script>
   <script src="{{ asset('assets/public') }}/js/inewsticker.js"></script>
   <script src="{{ asset('assets/public') }}/js/bootsnav.js."></script>
   <script src="{{ asset('assets/public') }}/js/images-loded.min.js"></script>
   <script src="{{ asset('assets/public') }}/js/isotope.min.js"></script>
   <script src="{{ asset('assets/public') }}/js/owl.carousel.min.js"></script>
   <script src="{{ asset('assets/public') }}/js/baguetteBox.min.js"></script>
   <script src="{{ asset('assets/public') }}/js/form-validator.min.js"></script>
   <script src="{{ asset('assets/public') }}/js/contact-form-script.js"></script>
   <script src="{{ asset('assets/public') }}/js/custom.js"></script>
   <script src="{{ asset('assets/public/toastr.min.js') }}"></script>
   <script>
       toastr.options = {
           "closeButton": true,
           "debug": false,
           "newestOnTop": true,
           "progressBar": true,
           "positionClass": "toast-top-right",
           "preventDuplicates": false,
           "onclick": null,
           "showDuration": "300",
           "hideDuration": "1000",
           "timeOut": "5000",
           "extendedTimeOut": "1000",
           "showEasing": "swing",
           "hideEasing": "linear",
           "showMethod": "fadeIn",
           "hideMethod": "fadeOut"
       }
       @if (session()->has('pesan'))
           toastr["{{ session('tipe') }}"]("{{ session('pesan') }}");
       @endif
   </script>
   </body>

   </html>
