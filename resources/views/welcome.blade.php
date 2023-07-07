<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Insure - Insurance HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{ url('') }}/theme/inicio/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="{{ url('') }}/theme/inicio/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('') }}/theme/inicio/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ url('') }}/theme/inicio/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Recursos Humanos</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                @if (Route::has('login'))

                @auth
                    <a href="{{ url('/admin') }}" class="btn btn-primary px-3 d-none d-lg-block" style="color:white;"> Admin </a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth

           @endif
            </li>

          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->
    <!-- Table Start -->
    <table id="example" class="display" style="width:100%">
      <thead>
          <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011-04-25</td>
              <td>$320,800</td>
          </tr>
          <tr>
              <td>Garrett Winters</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>63</td>
              <td>2011-07-25</td>
              <td>$170,750</td>
          </tr>
          <tr>
              <td>Ashton Cox</td>
              <td>Junior Technical Author</td>
              <td>San Francisco</td>
              <td>66</td>
              <td>2009-01-12</td>
              <td>$86,000</td>
          </tr>
          <tr>
              <td>Cedric Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>22</td>
              <td>2012-03-29</td>
              <td>$433,060</td>
          </tr>
          <tr>
              <td>Airi Satou</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>33</td>
              <td>2008-11-28</td>
              <td>$162,700</td>
          </tr>
          <tr>
              <td>Brielle Williamson</td>
              <td>Integration Specialist</td>
              <td>New York</td>
              <td>61</td>
              <td>2012-12-02</td>
              <td>$372,000</td>
          </tr>
          <tr>
              <td>Herrod Chandler</td>
              <td>Sales Assistant</td>
              <td>San Francisco</td>
              <td>59</td>
              <td>2012-08-06</td>
              <td>$137,500</td>
          </tr>
          <tr>
              <td>Rhona Davidson</td>
              <td>Integration Specialist</td>
              <td>Tokyo</td>
              <td>55</td>
              <td>2010-10-14</td>
              <td>$327,900</td>
          </tr>
          <tr>
              <td>Colleen Hurst</td>
              <td>Javascript Developer</td>
              <td>San Francisco</td>
              <td>39</td>
              <td>2009-09-15</td>
              <td>$205,500</td>
          </tr>
          <tr>
              <td>Sonya Frost</td>
              <td>Software Engineer</td>
              <td>Edinburgh</td>
              <td>23</td>
              <td>2008-12-13</td>
              <td>$103,600</td>
          </tr>
          <tr>
              <td>Jena Gaines</td>
              <td>Office Manager</td>
              <td>London</td>
              <td>30</td>
              <td>2008-12-19</td>
              <td>$90,560</td>
          </tr>
          <tr>
              <td>Quinn Flynn</td>
              <td>Support Lead</td>
              <td>Edinburgh</td>
              <td>22</td>
              <td>2013-03-03</td>
              <td>$342,000</td>
          </tr>
          <tr>
              <td>Charde Marshall</td>
              <td>Regional Director</td>
              <td>San Francisco</td>
              <td>36</td>
              <td>2008-10-16</td>
              <td>$470,600</td>
          </tr>
          <tr>
              <td>Haley Kennedy</td>
              <td>Senior Marketing Designer</td>
              <td>London</td>
              <td>43</td>
              <td>2012-12-18</td>
              <td>$313,500</td>
          </tr>
          <tr>
              <td>Tatyana Fitzpatrick</td>
              <td>Regional Director</td>
              <td>London</td>
              <td>19</td>
              <td>2010-03-17</td>
              <td>$385,750</td>
          </tr>
          <tr>
              <td>Michael Silva</td>
              <td>Marketing Designer</td>
              <td>London</td>
              <td>66</td>
              <td>2012-11-27</td>
              <td>$198,500</td>
          </tr>
          <tr>
              <td>Paul Byrd</td>
              <td>Chief Financial Officer (CFO)</td>
              <td>New York</td>
              <td>64</td>
              <td>2010-06-09</td>
              <td>$725,000</td>
          </tr>
          <tr>
              <td>Gloria Little</td>
              <td>Systems Administrator</td>
              <td>New York</td>
              <td>59</td>
              <td>2009-04-10</td>
              <td>$237,500</td>
          </tr>
          <tr>
              <td>Bradley Greer</td>
              <td>Software Engineer</td>
              <td>London</td>
              <td>41</td>
              <td>2012-10-13</td>
              <td>$132,000</td>
          </tr>
          <tr>
              <td>Dai Rios</td>
              <td>Personnel Lead</td>
              <td>Edinburgh</td>
              <td>35</td>
              <td>2012-09-26</td>
              <td>$217,500</td>
          </tr>
          <tr>
              <td>Jenette Caldwell</td>
              <td>Development Lead</td>
              <td>New York</td>
              <td>30</td>
              <td>2011-09-03</td>
              <td>$345,000</td>
          </tr>
          <tr>
              <td>Yuri Berry</td>
              <td>Chief Marketing Officer (CMO)</td>
              <td>New York</td>
              <td>40</td>
              <td>2009-06-25</td>
              <td>$675,000</td>
          </tr>
          <tr>
              <td>Caesar Vance</td>
              <td>Pre-Sales Support</td>
              <td>New York</td>
              <td>21</td>
              <td>2011-12-12</td>
              <td>$106,450</td>
          </tr>
          <tr>
              <td>Doris Wilder</td>
              <td>Sales Assistant</td>
              <td>Sydney</td>
              <td>23</td>
              <td>2010-09-20</td>
              <td>$85,600</td>
          </tr>
          <tr>
              <td>Angelica Ramos</td>
              <td>Chief Executive Officer (CEO)</td>
              <td>London</td>
              <td>47</td>
              <td>2009-10-09</td>
              <td>$1,200,000</td>
          </tr>
          <tr>
              <td>Gavin Joyce</td>
              <td>Developer</td>
              <td>Edinburgh</td>
              <td>42</td>
              <td>2010-12-22</td>
              <td>$92,575</td>
          </tr>
          <tr>
              <td>Jennifer Chang</td>
              <td>Regional Director</td>
              <td>Singapore</td>
              <td>28</td>
              <td>2010-11-14</td>
              <td>$357,650</td>
          </tr>
          <tr>
              <td>Brenden Wagner</td>
              <td>Software Engineer</td>
              <td>San Francisco</td>
              <td>28</td>
              <td>2011-06-07</td>
              <td>$206,850</td>
          </tr>
          <tr>
              <td>Fiona Green</td>
              <td>Chief Operating Officer (COO)</td>
              <td>San Francisco</td>
              <td>48</td>
              <td>2010-03-11</td>
              <td>$850,000</td>
          </tr>
          <tr>
              <td>Shou Itou</td>
              <td>Regional Marketing</td>
              <td>Tokyo</td>
              <td>20</td>
              <td>2011-08-14</td>
              <td>$163,000</td>
          </tr>
          <tr>
              <td>Michelle House</td>
              <td>Integration Specialist</td>
              <td>Sydney</td>
              <td>37</td>
              <td>2011-06-02</td>
              <td>$95,400</td>
          </tr>
          <tr>
              <td>Suki Burks</td>
              <td>Developer</td>
              <td>London</td>
              <td>53</td>
              <td>2009-10-22</td>
              <td>$114,500</td>
          </tr>
          <tr>
              <td>Prescott Bartlett</td>
              <td>Technical Author</td>
              <td>London</td>
              <td>27</td>
              <td>2011-05-07</td>
              <td>$145,000</td>
          </tr>
          <tr>
              <td>Gavin Cortez</td>
              <td>Team Leader</td>
              <td>San Francisco</td>
              <td>22</td>
              <td>2008-10-26</td>
              <td>$235,500</td>
          </tr>
          <tr>
              <td>Martena Mccray</td>
              <td>Post-Sales support</td>
              <td>Edinburgh</td>
              <td>46</td>
              <td>2011-03-09</td>
              <td>$324,050</td>
          </tr>
          <tr>
              <td>Unity Butler</td>
              <td>Marketing Designer</td>
              <td>San Francisco</td>
              <td>47</td>
              <td>2009-12-09</td>
              <td>$85,675</td>
          </tr>
          <tr>
              <td>Howard Hatfield</td>
              <td>Office Manager</td>
              <td>San Francisco</td>
              <td>51</td>
              <td>2008-12-16</td>
              <td>$164,500</td>
          </tr>
          <tr>
              <td>Hope Fuentes</td>
              <td>Secretary</td>
              <td>San Francisco</td>
              <td>41</td>
              <td>2010-02-12</td>
              <td>$109,850</td>
          </tr>
          <tr>
              <td>Vivian Harrell</td>
              <td>Financial Controller</td>
              <td>San Francisco</td>
              <td>62</td>
              <td>2009-02-14</td>
              <td>$452,500</td>
          </tr>
          <tr>
              <td>Timothy Mooney</td>
              <td>Office Manager</td>
              <td>London</td>
              <td>37</td>
              <td>2008-12-11</td>
              <td>$136,200</td>
          </tr>
          <tr>
              <td>Jackson Bradshaw</td>
              <td>Director</td>
              <td>New York</td>
              <td>65</td>
              <td>2008-09-26</td>
              <td>$645,750</td>
          </tr>
          <tr>
              <td>Olivia Liang</td>
              <td>Support Engineer</td>
              <td>Singapore</td>
              <td>64</td>
              <td>2011-02-03</td>
              <td>$234,500</td>
          </tr>
          <tr>
              <td>Bruno Nash</td>
              <td>Software Engineer</td>
              <td>London</td>
              <td>38</td>
              <td>2011-05-03</td>
              <td>$163,500</td>
          </tr>
          <tr>
              <td>Sakura Yamamoto</td>
              <td>Support Engineer</td>
              <td>Tokyo</td>
              <td>37</td>
              <td>2009-08-19</td>
              <td>$139,575</td>
          </tr>
          <tr>
              <td>Thor Walton</td>
              <td>Developer</td>
              <td>New York</td>
              <td>61</td>
              <td>2013-08-11</td>
              <td>$98,540</td>
          </tr>
          <tr>
              <td>Finn Camacho</td>
              <td>Support Engineer</td>
              <td>San Francisco</td>
              <td>47</td>
              <td>2009-07-07</td>
              <td>$87,500</td>
          </tr>
          <tr>
              <td>Serge Baldwin</td>
              <td>Data Coordinator</td>
              <td>Singapore</td>
              <td>64</td>
              <td>2012-04-09</td>
              <td>$138,575</td>
          </tr>
          <tr>
              <td>Zenaida Frank</td>
              <td>Software Engineer</td>
              <td>New York</td>
              <td>63</td>
              <td>2010-01-04</td>
              <td>$125,250</td>
          </tr>
          <tr>
              <td>Zorita Serrano</td>
              <td>Software Engineer</td>
              <td>San Francisco</td>
              <td>56</td>
              <td>2012-06-01</td>
              <td>$115,000</td>
          </tr>
          <tr>
              <td>Jennifer Acosta</td>
              <td>Junior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>43</td>
              <td>2013-02-01</td>
              <td>$75,650</td>
          </tr>
          <tr>
              <td>Cara Stevens</td>
              <td>Sales Assistant</td>
              <td>New York</td>
              <td>46</td>
              <td>2011-12-06</td>
              <td>$145,600</td>
          </tr>
          <tr>
              <td>Hermione Butler</td>
              <td>Regional Director</td>
              <td>London</td>
              <td>47</td>
              <td>2011-03-21</td>
              <td>$356,250</td>
          </tr>
          <tr>
              <td>Lael Greer</td>
              <td>Systems Administrator</td>
              <td>London</td>
              <td>21</td>
              <td>2009-02-27</td>
              <td>$103,500</td>
          </tr>
          <tr>
              <td>Jonas Alexander</td>
              <td>Developer</td>
              <td>San Francisco</td>
              <td>30</td>
              <td>2010-07-14</td>
              <td>$86,500</td>
          </tr>
          <tr>
              <td>Shad Decker</td>
              <td>Regional Director</td>
              <td>Edinburgh</td>
              <td>51</td>
              <td>2008-11-13</td>
              <td>$183,000</td>
          </tr>
          <tr>
              <td>Michael Bruce</td>
              <td>Javascript Developer</td>
              <td>Singapore</td>
              <td>29</td>
              <td>2011-06-27</td>
              <td>$183,000</td>
          </tr>
          <tr>
              <td>Donna Snider</td>
              <td>Customer Support</td>
              <td>New York</td>
              <td>27</td>
              <td>2011-01-25</td>
              <td>$112,000</td>
          </tr>
      </tbody>
      <tfoot>
          <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
          </tr>
      </tfoot>
  </table>
   
   
           
    
    <!-- Table End -->
    <!-- Features Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
              diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
              lorem sit clita duo justo magna dolore erat amet
            </p>
            <div class="row g-3">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-06-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Easy Process</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-03-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Fast Delivery</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-04-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Policy Controlling</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-07-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Money Saving</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="position-relative rounded overflow-hidden h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="img/feature.jpg"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h1 class="text-white mb-4">
              <img
                class="img-fluid me-3"
                src="img/icon/icon-02-light.png"
                alt=""
              />Insure
            </h1>
            <p>
              Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
              ipsum et lorem et sit, sed stet lorem sit clita
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-square me-1" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-square me-1" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-square me-1" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-square me-0" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Address</h5>
            <p>
              <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
            </p>
            <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
            <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Quick Links</h5>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Our Services</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">Support</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="text-light mb-4">Newsletter</h5>
            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              <input
                class="form-control bg-transparent w-100 py-3 ps-4 pe-5"
                type="text"
                placeholder="Your email"
              />
              <button
                type="button"
                class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2"
              >
                SignUp
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a href="#">Your Site Name</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              Designed By <a href="https://htmlcodex.com">HTML Codex</a>
              <br />Distributed By:
              <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('') }}/theme/inicio/lib/wow/wow.min.js"></script>
    <script src="{{ url('') }}/theme/inicio/lib/easing/easing.min.js"></script>
    <script src="{{ url('') }}/theme/inicio/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ url('') }}/theme/inicio/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ url('') }}/theme/inicio/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ url('') }}/theme/inicio/js/main.js"></script>
  </body>
</html>

