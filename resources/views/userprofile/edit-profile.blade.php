@extends('layouts.freelancers.freelancermaster')

@section('content')
<script>
   document.title = '{{ Auth::user()->name }} | Account Settings';
</script>

<div class="py-5">
   <div class="container">
      <div class="row">
         <!-- Main Content -->
         <aside class="col-md-4">
            <div class="box mb-3 shadow-sm rounded bg-white profile-box text-center">
               <div class="py-4 px-3 border-bottom">
                  <img src="{{ Auth::user()->avatar }}" width="100" class="img-fluid mt-2 rounded-circle"
                     alt="Responsive image">
                  <h5 class="font-weight-bold text-dark mb-1 mt-4">{{ Auth::user()->name }}</h5>
                  <p class="mb-0 text-muted">UI / UX Designer</p>
               </div>
               <div class="p-4">
                  <label data-toggle="tooltip" data-placement="top" data-original-title="Upload New Picture"
                     class="btn btn-info m-0" for="fileAttachmentBtn">
                     <i class="mdi mdi-image"></i> Upload
                     <input id="fileAttachmentBtn" name="file-attachment" type="file" class="d-none">
                  </label>
                  <button data-toggle="tooltip" data-placement="top" data-original-title="Delete" type="submit"
                     class="btn btn-danger"><i class="mdi mdi-delete"></i> Delete</button>
               </div>
            </div>
            <div class="shadow-sm rounded bg-white mb-3">
               <div class="box-title border-bottom p-3">
                  <h6 class="m-0">About</h6>
                  <p class="mb-0 mt-0 small">Tell about yourself in two sentences.
                  </p>
               </div>
               <div class="box-body">
                  <div class="p-3">
                     <div class="form-group mb-4">
                        <label class="mb-1">BIO</label>
                        <div class="position-relative">
                           <textarea class="form-control" rows="4" name="text"
                              placeholder="Enter Bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor :)</textarea>
                        </div>
                     </div>
                     <div class="form-group mb-0">
                        <label class="mb-1 w-100">SKILLS</label>
                        <div class="custom-control custom-checkbox d-inline mr-3">
                           <input type="checkbox" class="custom-control-input" id="customCheck1">
                           <label class="custom-control-label" for="customCheck1">JavaScript, jQuery</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck2">
                           <label class="custom-control-label" for="customCheck2">HTML5, CSS3</label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="shadow-sm rounded bg-white mb-3">
               <div class="box-title border-bottom p-3">
                  <h6 class="m-0">Social profiles</h6>
                  <p class="mb-0 mt-0 small">Add elsewhere links to your profile.
                  </p>
               </div>
               <div class="box-body">
                  <div class="p-3">
                     <div class="position-relative icon-form-control mb-2">
                        <i class="fab fa-instagram p-2 m-1 position-absolute text-muted"></i>
                        <input placeholder="Add Instagram link" type="text" class="form-control">
                     </div>
                     <div class="position-relative icon-form-control mb-2">
                        <i class="fab fa-facebook p-2 m-1 position-absolute text-muted"></i>
                        <input placeholder="Add Facebook link" type="text" class="form-control">
                     </div>
                     <div class="position-relative icon-form-control mb-2">
                        <i class="fab fa-twitter p-2 m-1 position-absolute text-muted"></i>
                        <input placeholder="Add Twitter link" type="text" class="form-control">
                     </div>
                  </div>
               </div>
            </div>
         </aside>
         <main class="col-md-8">
            <div class="shadow-sm rounded bg-white mb-3">
               <div class="box-title border-bottom p-3">
                  <h6 class="m-0">Edit Basic Info</h6>
                  <p class="mb-0 mt-0 small">Lorem ipsum dolor sit amet, consecteturs.
                  </p>
               </div>
               <div class="box-body p-3">
                  <form class="js-validate" novalidate="novalidate">
                     <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label id="nameLabel" class="form-label">
                                 Name
                                 <span class="text-danger">*</span>
                              </label>
                              <div class="form-group">
                                 <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}"
                                    placeholder="Enter your name" aria-label="Enter your name" required=""
                                    aria-describedby="nameLabel" data-msg="Please enter your name."
                                    data-error-class="u-has-error" data-success-class="u-has-success">
                              </div>
                           </div>
                        </div>
                        <!-- End Input -->
                        <!-- Input -->
                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label id="usernameLabel" class="form-label">
                                 Username
                                 <span class="text-danger">*</span>
                              </label>
                              <div class="form-group">
                                 <input type="text" class="form-control" name="username" value=""
                                    placeholder="Enter your username" aria-label="Enter your username" required=""
                                    aria-describedby="usernameLabel" data-msg="Please enter your username."
                                    data-error-class="u-has-error" data-success-class="u-has-success">
                              </div>
                           </div>
                        </div>
                        <!-- End Input -->
                     </div>
                     <label class="form-label">
                        Birth date
                        <span class="text-danger">*</span>
                     </label>
                     <div class="row">
                        <!-- Input -->
                        <div class="col-md-6 mb-3 mb-sm-6">
                           <div class="js-form-message">
                              <div class="form-group">
                                 <select class="form-control custom-select" required="" data-msg="Please select month."
                                    data-error-class="u-has-error" data-success-class="u-has-success">
                                    <option value="">Select month</option>
                                    <option value="birthMonthSelect1">January</option>
                                    <option value="birthMonthSelect2">February</option>
                                    <option value="birthMonthSelect3">March</option>
                                    <option value="birthMonthSelect4">April</option>
                                    <option value="birthMonthSelect5">May</option>
                                    <option value="birthMonthSelect6">June</option>
                                    <option value="birthMonthSelect7">July</option>
                                    <option value="birthMonthSelect8">August</option>
                                    <option value="birthMonthSelect9">September</option>
                                    <option value="birthMonthSelect10">October</option>
                                    <option value="birthMonthSelect11">November</option>
                                    <option value="birthMonthSelect12">December</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <!-- End Input -->
                        <!-- Input -->
                        <div class="col-sm-4 col-md-2 mb-3 mb-sm-6">
                           <div class="js-form-message">
                              <div class="form-group">
                                 <select class="form-control custom-select" required="" data-msg="Please select date."
                                    data-error-class="u-has-error" data-success-class="u-has-success">
                                    <option value="">Select date</option>
                                    <option value="birthDateSelect1">1</option>
                                    <option value="birthDateSelect2">2</option>
                                    <option value="birthDateSelect3">3</option>
                                    <option value="birthDateSelect4">4</option>
                                    <option value="birthDateSelect5">5</option>
                                    <option value="birthDateSelect6">6</option>
                                    <option value="birthDateSelect7">7</option>
                                    <option value="birthDateSelect8">8</option>
                                    <option value="birthDateSelect9">9</option>
                                    <option value="birthDateSelect10">10</option>
                                    <option value="birthDateSelect11">11</option>
                                    <option value="birthDateSelect12">12</option>
                                    <option value="birthDateSelect13">13</option>
                                    <option value="birthDateSelect14">14</option>
                                    <option value="birthDateSelect15">15</option>
                                    <option value="birthDateSelect16">16</option>
                                    <option value="birthDateSelect17">17</option>
                                    <option value="birthDateSelect18">18</option>
                                    <option value="birthDateSelect19">19</option>
                                    <option value="birthDateSelect20">20</option>
                                    <option value="birthDateSelect21">21</option>
                                    <option value="birthDateSelect22">22</option>
                                    <option value="birthDateSelect23">23</option>
                                    <option value="birthDateSelect24">24</option>
                                    <option value="birthDateSelect25">25</option>
                                    <option value="birthDateSelect26">26</option>
                                    <option value="birthDateSelect27">27</option>
                                    <option value="birthDateSelect28">28</option>
                                    <option value="birthDateSelect29">29</option>
                                    <option value="birthDateSelect30">30</option>
                                    <option value="birthDateSelect31">31</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <!-- End Input -->
                        <!-- Input -->
                        <div class="col-sm-4 col-md-2 mb-3 mb-sm-6">
                           <div class="js-form-message">
                              <div class="form-group">
                                 <select class="form-control custom-select" required="" data-msg="Please select year."
                                    data-error-class="u-has-error" data-success-class="u-has-success">
                                    <option value="">Select year</option>
                                    <option value="birthYearSelect1961">1961</option>
                                    <option value="birthYearSelect1962">1962</option>
                                    <option value="birthYearSelect1963">1963</option>
                                    <option value="birthYearSelect1964">1964</option>
                                    <option value="birthYearSelect1965">1965</option>
                                    <option value="birthYearSelect1966">1966</option>
                                    <option value="birthYearSelect1967">1967</option>
                                    <option value="birthYearSelect1968">1968</option>
                                    <option value="birthYearSelect1969">1969</option>
                                    <option value="birthYearSelect1970">1970</option>
                                    <option value="birthYearSelect1971">1971</option>
                                    <option value="birthYearSelect1972">1972</option>
                                    <option value="birthYearSelect1973">1973</option>
                                    <option value="birthYearSelect1974">1974</option>
                                    <option value="birthYearSelect1975">1975</option>
                                    <option value="birthYearSelect1976">1976</option>
                                    <option value="birthYearSelect1977">1977</option>
                                    <option value="birthYearSelect1978">1978</option>
                                    <option value="birthYearSelect1979">1979</option>
                                    <option value="birthYearSelect1980">1980</option>
                                    <option value="birthYearSelect1981">1981</option>
                                    <option value="birthYearSelect1982">1982</option>
                                    <option value="birthYearSelect1983">1983</option>
                                    <option value="birthYearSelect1984">1984</option>
                                    <option value="birthYearSelect1985">1985</option>
                                    <option value="birthYearSelect1986">1986</option>
                                    <option value="birthYearSelect1987">1987</option>
                                    <option value="birthYearSelect1988">1988</option>
                                    <option value="birthYearSelect1989">1989</option>
                                    <option value="birthYearSelect1990">1990</option>
                                    <option value="birthYearSelect1991">1991</option>
                                    <option value="birthYearSelect1992">1992</option>
                                    <option value="birthYearSelect1993">1993</option>
                                    <option value="birthYearSelect1994">1994</option>
                                    <option value="birthYearSelect1995">1995</option>
                                    <option value="birthYearSelect1996">1996</option>
                                    <option value="birthYearSelect1997">1997</option>
                                    <option value="birthYearSelect1998">1998</option>
                                    <option value="birthYearSelect1999">1999</option>
                                    <option value="birthYearSelect2000">2000</option>
                                    <option value="birthYearSelect2001">2001</option>
                                    <option value="birthYearSelect2002">2002</option>
                                    <option value="birthYearSelect2003">2003</option>
                                    <option value="birthYearSelect2004">2004</option>
                                    <option value="birthYearSelect2005">2005</option>
                                    <option value="birthYearSelect2006">2006</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <!-- End Input -->
                        <!-- Input -->
                        <div class="col-sm-4 col-md-2 mb-2">
                           <div class="js-form-message">
                              <div class="form-group">
                                 <select class="form-control custom-select" required=""
                                    data-msg="Please select your gender." data-error-class="u-has-error"
                                    data-success-class="u-has-success">
                                    <option value="genderSelect1">Male</option>
                                    <option value="genderSelect2">Female</option>
                                    <option value="genderSelect3">Other</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <!-- End Input -->
                     </div>
                     <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label id="emailLabel" class="form-label">
                                 Email address
                                 <span class="text-danger">*</span>
                              </label>
                              <div class="form-group">
                                 <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}"
                                    placeholder="Enter your email address" aria-label="Enter your email address"
                                    required="" aria-describedby="emailLabel"
                                    data-msg="Please enter a valid email address." data-error-class="u-has-error"
                                    data-success-class="u-has-success">
                              </div>
                           </div>
                        </div>
                        <!-- End Input -->
                        <!-- Input -->
                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label id="locationLabel" class="form-label">
                                 Location
                                 <span class="text-danger">*</span>
                              </label>
                              <div class="form-group">
                                 <input type="text" class="form-control" name="location" value=""
                                    placeholder="Enter your location" aria-label="Enter your location" required=""
                                    aria-describedby="locationLabel" data-msg="Please enter your location."
                                    data-error-class="u-has-error" data-success-class="u-has-success">
                              </div>
                           </div>
                        </div>
                        <!-- End Input -->
                     </div>
                     <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label id="organizationLabel" class="form-label">
                                 Organization
                                 <span class="text-danger">*</span>
                              </label>
                              <div class="form-group">
                                 <input type="text" class="form-control" name="organization" value=""
                                    placeholder="Enter your organization name" aria-label="Enter your organization name"
                                    required="" aria-describedby="organizationLabel"
                                    data-msg="Please enter your organization name" data-error-class="u-has-error"
                                    data-success-class="u-has-success">
                              </div>
                           </div>
                        </div>
                        <!-- End Input -->
                        <!-- Input -->
                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label id="websiteLabel" class="form-label">
                                 Website
                                 <span class="text-danger">*</span>
                              </label>
                              <div class="form-group">
                                 <input class="form-control" type="url" name="website" value=""
                                    placeholder="Enter your website" aria-label="Enter your website" required=""
                                    aria-describedby="websiteLabel" data-msg="Password enter a valid website"
                                    data-error-class="u-has-error" data-success-class="u-has-success">
                              </div>
                           </div>
                        </div>
                        <!-- End Input -->
                     </div>
                     <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label id="phoneNumberLabel" class="form-label">
                                 Phone number
                                 <span class="text-danger">*</span>
                              </label>
                              <div class="form-group">
                                 <input class="form-control" type="tel" name="phoneNumber" value=""
                                    placeholder="Enter your phone number" aria-label="Enter your phone number"
                                    required="" aria-describedby="phoneNumberLabel"
                                    data-msg="Please enter a valid phone number" data-error-class="u-has-error"
                                    data-success-class="u-has-success">
                              </div>
                           </div>
                           <a class="d-inline-block u-text-muted" href="#">
                              <span class="mr-1">+</span>
                              Add phone number
                           </a>
                        </div>
                        <!-- End Input -->
                        <!-- Input -->
                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label class="form-label">
                                 Preferred language
                                 <span class="text-danger">*</span>
                              </label>
                              <div class="form-group">
                                 <select class="custom-select">
                                    <option value="">Select language</option>
                                    <option value="languageSelect1" selected="">English</option>
                                    <option value="languageSelect2">Français</option>
                                    <option value="languageSelect3">Deutsch</option>
                                    <option value="languageSelect4">Português</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <!-- End Input -->
                     </div>
                  </form>
               </div>
            </div>
            <div class="shadow-sm rounded bg-white mb-3">
               <div class="box-title border-bottom p-3">
                  <h6 class="m-0">Experience
                  </h6>
                  <p class="mb-0 mt-0 small">Tell about your work, job, and other experiences.
                  </p>
               </div>
               <div class="box-body px-3 pt-3 pb-0">
                  <div class="row">
                     <div class="col-sm-6 mb-4">
                        <label id="FROM" class="form-label">FROM</label>
                        <!-- Input -->
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="From" aria-label="FROM"
                              aria-describedby="FROM">
                        </div>
                        <!-- End Input -->
                     </div>
                     <div class="col-sm-6 mb-4">
                        <label id="TO" class="form-label">TO</label>
                        <!-- Input -->
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="TO" aria-label="TO"
                              aria-describedby="TO">
                        </div>
                        <!-- End Input -->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6 mb-4">
                        <label id="companyLabel" class="form-label">Company</label>
                        <!-- Input -->
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Enter your company title"
                              aria-label="Enter your company title" aria-describedby="companyLabel">
                        </div>
                        <!-- End Input -->
                     </div>
                     <div class="col-sm-6 mb-4">
                        <label id="positionLabel" class="form-label">Position</label>
                        <!-- Input -->
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Enter your position"
                              aria-label="Enter your position" aria-describedby="positionLabel">
                        </div>
                        <!-- End Input -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="mb-3 text-right">
               <button type="submit" class="btn btn-outline-success">Cancel</button>
               <button type="submit" class="btn btn-success">Submit</button>
            </div>
         </main>
      </div>
   </div>
</div>

@endsection