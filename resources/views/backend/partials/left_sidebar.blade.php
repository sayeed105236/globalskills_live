<div class="ttr-sidebar">
  <div class="ttr-sidebar-wrapper content-scroll">
    <!-- side menu logo start -->
    <div class="ttr-sidebar-logo">
      <a href="/"><img alt="" src="{{ asset('images/gsda logo.png')}}" width="122" height="27"></a>
      <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
        <i class="material-icons ttr-fixed-icon">gps_fixed</i>
        <i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
      </div> -->
      <div class="ttr-sidebar-toggle-button">
        <i class="ti-arrow-left"></i>
      </div>
    </div>
    <!-- side menu logo end -->
    <!-- sidebar menu start -->
    <nav class="ttr-sidebar-navi">
      <ul>
        <li>
          <a href="{{route('admin.home')}}" class="ttr-material-button">
            <span class="ttr-icon"><i class="ti-home"></i></span>
                    <span class="ttr-label">Dashborad</span>
                  </a>
              </li>
        <li>
          <li>
            <a href="{{route('addmain-category')}}" class="ttr-material-button">
              <span class="ttr-icon"><i class="fas fa-cubes"></i></span>
                      <span class="ttr-label">Main Category</span>

                    </a>

                </li>
                <li>
                  <a href="{{route('managecourse-category')}}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="fas fa-cube"></i></span>
                            <span class="ttr-label">Course Category</span>

                          </a>

                      </li>
          <li>
          <a href="{{route('manage-course')}}" class="ttr-material-button">
            <span class="ttr-icon"><i class="ti-book"></i></span>
                    <span class="ttr-label">E-Learning Courses</span>
                  </a>
              </li>
              <li>
              <a href="{{route('manage-classroom-course')}}" class="ttr-material-button">
                <span class="ttr-icon"><i class="fas fa-person-booth"></i></span>
                        <span class="ttr-label">Classroom Courses</span>
                      </a>
              </li>
                  <li>
                    <a href="#" class="ttr-material-button">
                        <span class="ttr-icon"><i class="fas fa-question-circle"></i></span>
                        <span class="ttr-label">Mock Test</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li class=""><a href="{{ route('mock-category') }}"
                                class="list-group-item list-group-item-action bg-light">Mock Test Category</a>
                        </li>
                        <li class=""><a href="{{ route('admin-topic') }}"
                                class="list-group-item list-group-item-action bg-light">Create new quiz</a>
                        </li>


                        <li class=""><a href="{{ route('results.index') }}"
                                class="list-group-item list-group-item-action bg-light">All Results</a>
                        </li>
                        <li class=""><a href="{{ route('topics-show') }}"
                                class="list-group-item list-group-item-action bg-light">Topics</a>
                        </li>
                        <li class=""><a href="{{ url('question/topic') }}"
                                class="list-group-item list-group-item-action bg-light">Questions</a>
                        </li>
                        <li class=""> <a href="{{ route('questionsOptions-index') }}"
                                class="list-group-item list-group-item-action bg-light">Questions Options</a>
                        </li>

                    </ul>
                </li>
              <!--<li>-->
              <!--<a href="{{route('manage-training-course')}}" class="ttr-material-button">-->
              <!--  <span class="ttr-icon"><i class="fas fa-book-reader"></i></span>-->
              <!--          <span class="ttr-label">Training Without Exam Courses</span>-->
              <!--        </a>-->
              <!--</li>-->
              <li>
              <a href="{{route('user-lists')}}" class="ttr-material-button">
                <span class="ttr-icon"><i class="fas fa-users"></i></span>
                        <span class="ttr-label">Users</span>
                      </a>
                  </li>
                  <!--<li>-->
                  <!--                        <a href="{{route('enrollments-lists')}}" class="ttr-material-button">-->
                  <!--                          <span class="ttr-icon"><i class="fas fa-clipboard-check"></i></span>-->
                  <!--                                  <span class="ttr-label">Latest Enrollments</span>-->
                  <!--                                </a>-->
                  <!--                            </li>-->
                    <li>
                  <a href="{{route('experts')}}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="fas fa-users"></i></span>
                            <span class="ttr-label">Our Certified Experts</span>
                          </a>
                      </li>
                  <li>
                  <a href="{{route('accreditation')}}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="fab fa-cc-diners-club"></i></span>
                            <span class="ttr-label">Accreditation</span>
                          </a>
                      </li>
                      <li>
                      <a href="{{route('manage-blogs')}}" class="ttr-material-button">
                        <span class="ttr-icon"><i class="fab fa-blogger"></i></i></span>
                                <span class="ttr-label">Blogs</span>
                              </a>
                          </li>
                          <li>
                          <a href="{{route('manage-system-settings')}}" class="ttr-material-button">
                            <span class="ttr-icon"><i class="fa fa-cogs"></i></span>
                                    <span class="ttr-label">System Settings</span>
                                  </a>
                              </li>
                              <li>
                              <a href="{{route('manage-events')}}" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fas fa-calendar-alt"></i></span>
                                        <span class="ttr-label">Events</span>
                                      </a>
                                  </li>
                                  <li>
                                  <a href="{{route('bookings-list')}}" class="ttr-material-button">
                                    <span class="ttr-icon"><i class="fas fa-folder-open"></i></span>
                                            <span class="ttr-label">Classroom Course Booking</span>
                                          </a>
                                      </li>
                                      <li>
                                      <a href="{{route('manage-evolution')}}" class="ttr-material-button">
                                        <span class="ttr-icon"><i class="far fa-star"></i></span>
                                                <span class="ttr-label">Evaluation Lists</span>
                                              </a>
                                          </li>
                                          <li>
                                          <a href="{{route('certificate-request-check')}}" class="ttr-material-button">
                                            <span class="ttr-icon"><i class="fas fa-certificate"></i></span>
                                                    <span class="ttr-label">Certificate Request Lists</span>
                                                  </a>
                                              </li>
                                      <li>
                                      <a href="{{route('admin.currency')}}" class="ttr-material-button">
                                        <span class="ttr-icon"><i class="fas fa-money-bill-wave-alt"></i></span>
                                                <span class="ttr-label">Currency</span>
                                              </a>
                                          </li>
                                                            <li>
                                    <a href="{{route('timer')}}" class="ttr-material-button">
                                      <span class="ttr-icon"><i class="fas fa-clock"></i></span>
                                              <span class="ttr-label">Timer</span>
                                            </a>
                                        </li>
                                                             <li>
                              <a href="{{route('flipcard')}}" class="ttr-material-button">
                                <span class="ttr-icon"><i class="fab fa-cc-diners-club"></i></span>
                                        <span class="ttr-label">Flipcard</span>
                                      </a>
                                  </li>
                                          <li>
                            <a href="#" class="ttr-material-button">
                              <span class="ttr-icon"><i class="fas fa-users"></i></span>
                                      <span class="ttr-label">Trainer List</span>
                                      <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                                    </a>
                                    <ul>
                                      <li>
                                        <a href="{{ route('trainer') }}" class="ttr-material-button"><span class="ttr-label">E-Learning</span></a>
                                      </li>
                                      <li>
                                        <a href="{{ route('trainer-classroom') }}" class="ttr-material-button"><span class="ttr-label">Classroom</span></a>
                                      </li>
                                    </ul>
                                </li>
                       <li>
                        <a href="{{route('coupon')}}" class="ttr-material-button">
                          <span class="ttr-icon"><i class="fab fa-cc-diners-club"></i></span>
                                  <span class="ttr-label">Coupon</span>
                                </a>
                            </li>
          <!--          <li>-->
          <!--<a href="#" class="ttr-material-button">-->
          <!--  <span class="ttr-icon"><i class="ti-email"></i></span>-->
          <!--          <span class="ttr-label">Mailbox</span>-->
          <!--          <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>-->
          <!--        </a>-->
          <!--        <ul>-->
          <!--          <li>-->
          <!--            <a href="mailbox.html" class="ttr-material-button"><span class="ttr-label">Mail Box</span></a>-->
          <!--          </li>-->
          <!--          <li>-->
          <!--            <a href="mailbox-compose.html" class="ttr-material-button"><span class="ttr-label">Compose</span></a>-->
          <!--          </li>-->
          <!--  <li>-->
          <!--            <a href="mailbox-read.html" class="ttr-material-button"><span class="ttr-label">Mail Read</span></a>-->
          <!--          </li>-->
          <!--        </ul>-->
          <!--    </li>-->

              <li>
                <a href="{{ route('customer.review') }}" class="ttr-material-button" @yield('review')>
                  <span class="ttr-icon"><i class="ti-comments"></i></span>
                          <span class="ttr-label">Review</span>
                        </a>
                    </li>
                    <li>
                  <a href="{{ route('contact-us') }}" class="ttr-material-button" @yield('review')>
                    <span class="ttr-icon"><i class="ti-comments"></i></span>
                            <span class="ttr-label">Contact Us</span>
                          </a>
                      </li>
                      <li>
                       <a href="{{ route('faqs') }}" class="ttr-material-button" @yield('faq')>
                         <span class="ttr-icon"><i class="ti-comments"></i></span>
                                 <span class="ttr-label">FaQs</span>
                               </a>
                           </li>

      </ul>
      <!-- sidebar menu end -->
    </nav>
    <!-- sidebar menu end -->
  </div>
</div>
