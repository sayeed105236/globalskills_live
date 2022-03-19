@extends('frontend.layouts.master')
@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <!-- Content -->
    <style>
        div {
            text-align: justify;
            text-justify: inter-word;

        }

        h2,
        h4 {
            font-family: 'Roboto', sans-serif;
        }

        .robo {
            font-family: 'Roboto', sans-serif;
        }

        .dot {
            height: 5px;
            width: 5px;
            background-color: black;
            border-radius: 50%;
            display: inline-block;
        }

        .button-solid {
            border: none;
        }

        button-solid:focus {
            border: none;
            outline: none;
        }

    </style>
    <div class="page-content">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('images/banner/banner2.jpg') }});">
            <div class="container">
                <div class="page-banner-entry">
                    <br />
                    <br />

                </div>
            </div>
        </div>
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
        <!-- Page Heading Box END ==== -->
        <!-- Page Content Box ==== -->
        <div class="content-block">
            <!-- About Us ==== -->
            <!-- About Us END ==== -->
            <!-- Our Story ==== -->
            <div class="section-area">
                <div class="container">
                    <div class="row align-items-center d-flex">
                        <div class="container">
                            <h2 class="text-center m-4" style="color: blue;">Digital Services</h2>
                            <div class="col-md-12 row clearfix">
                                <div class="col-md-6">
                                    <h4
                                        style="text-decoration: underline;color: blue; text-align:center;margin-bottom:20px;">
                                        Technology Service</h4>
                                    <p style="font-size: 16px"><span class="robo"
                                            style="font-size: 20px;color: blue;">Ed-Tech</span><br><span
                                            class="robo" style="font-size: 16px;font-weight:700">Learning
                                            Management
                                            System</span><br>We
                                        have a state of the art of Learning Management Solution
                                        which
                                        can
                                        enlarge

                                        <span id="dots1" style="color: black; font-size: 30px;">. . .</span><span
                                            style="display:none;" id="more1"> your corporate learning need to meet your
                                            benchmark. Our

                                            platform has
                                            classroom-based training, E-learning training and even one-to-one training
                                            features.
                                            If
                                            you
                                            want to set up your own education platform, our system is ready to meet your
                                            need.
                                            <br>
                                            A learning management system generally enables an instructor to design and
                                            deliver
                                            curriculum, monitor student engagement, and evaluate student performance.
                                            Students
                                            would
                                            be
                                            able to use interactive content including threaded conversations, streaming
                                            video,
                                            and
                                            discussion forums using a learning management system.
                                            <br>
                                            If school/college/university going students need to assess their exams, check
                                            them
                                            or
                                            even
                                            if the guardians want to check them, we can provide that service to the
                                            Schools/Colleges/Universities. There is so much flexibility in our service.<br>


                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Live-Virtual<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>E-Leaning Modules<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Assessments<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Enrollment<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Purchase<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Certifications<br>
                                        </span>
                                        <button onclick="myFunction1()" class="btn-sm button-solid" id="myBtn1">Read
                                            More</button>
                                    </p>

                                    <p style="font-size:16px;"><span class="robo"
                                        style="font-size: 16px;font-weight:700">Full Stack Web Service
                                            Development</span><br>We assist our customers with web application development
                                        and
                                        web
                                        design.<span id="dots2" style="color: black; font-size: 30px;">. . .</span><span
                                            style="display:none;" id="more2"> Global Skills Development Agency provides a
                                            wide range of website design and
                                            development services, including everything from responsive website design to
                                            custom
                                            e-commerce and workplace experiences built with the latest and most reliable web
                                            technologies.
                                            <br>


                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>End to End Software
                                            Development<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>UX Design<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>UI Design<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Web Solution
                                            Engineering<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Quality Assurance<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Integration<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>24/7 Support<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Growth and
                                            Evolution<br>
                                        </span>
                                        <button onclick="myFunction2()" class="button-solid btn-sm" id="myBtn2">Read
                                            More</button>
                                    </p>

                                    <p style="font-size: 16px;"><span class="robo"
                                        style="font-size: 16px;font-weight:700">Software & System License</span><br>Every
                                        organization needs software & system license. We
                                        provide
                                        those
                                        necessary<span id="dots3" style="color: black; font-size: 30px;">. . .</span><span
                                            style="display:none;" id="more3"> license. We deal in Software Licensing
                                            relating to Business Applications
                                            (ERP
                                            /
                                            CRM, Mobility), Software Infrastructure Products (Operating System,
                                            Virtualization),
                                            Software Platform Products Developer Tools, and Cloud Solutions etc.
                                            <br>


                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>MS Office<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Windows<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Adobe<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>All ManageEngine
                                            Products<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Information
                                            Security<br>

                                        </span>
                                        <button onclick="myFunction3()" class="button-solid btn-sm" id="myBtn3">Read
                                            More</button>
                                    </p>

                                    <p style="font-size: 16px;"><span class="robo"
                                        style="font-size: 16px;font-weight:700">Website Management
                                            Services</span><br>If you need to hire one or two developers for maintaining
                                        your
                                        websites<span id="dots4" style="color: black; font-size: 30px;">. . .</span><span
                                            style="display:none;" id="more4">, it may be expensive for you. You can give
                                            access to your websites to us,
                                            we as
                                            in
                                            our developers will always keep on maintaining your websites. It will be
                                            reasonable
                                            price
                                            and you can save your money and time. You can avoid the hassle to manage your
                                            website.

                                            <br>


                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Outsourcing Existing
                                            Websites<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Management Existing
                                            Websites<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Always Keeping on
                                            Maintaining Websites<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Regular Maintenance<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Content Publish<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Small Development<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Major Enhancement<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Software<br>
                                        </span>
                                        <button onclick="myFunction4()" class="button-solid btn-sm" id="myBtn4">Read
                                            More</button>
                                    </p>
                                </div>



                                <div class="col-md-6">
                                    <h4 style="text-decoration: underline;color:blue;text-align:center;margin-bottom:20px;">Digital Content</h4>
                                        <span class="robo" style="font-size: 16px;font-weight:700"></span><br>
                                    <p style="font-size: 16px;"><span class="robo"
                                        style="font-size: 16px;font-weight:700">Digital Graphics Design &
                                            Video Editing</span><br>We have digital marketing team and content creator team who know
                                        the<span id="dots5" style="color: black; font-size: 30px;">. . .</span><span
                                            style="display:none;" id="more5">
                                            aspect ratio and size of each and every image, video, story etc for every media
                                            platform.
                                            You do not need to worry about your contents and contents’ size. You can leave
                                            that
                                            to
                                            us,
                                            we will solve your content regarding any issue.
                                            <br>


                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Graphics Designing<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Video Editing<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Motion Graphics<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Social Media
                                            Images/Videos (Facebook, Instagram, LinkedIn, YouTube etc.)<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Animation Creation<br>

                                        </span>
                                        <button onclick="myFunction5()" class="button-solid btn-sm" id="myBtn5">Read
                                            More</button>
                                    </p>

                                    <p style="font-size: 16px;"><span class="robo"
                                        style="font-size: 16px;font-weight:700">Digital Training Content
                                            Development</span><br>The process of developing, implementing, maintaining, and
                                        managing
                                        E-learning<span id="dots6" style="color: black; font-size: 30px;">. . .</span><span
                                            style="display:none;" id="more6"> programs is recognized as Digital Content
                                            Development. Content
                                            development is
                                            the
                                            second-most crucial process competency for training organizations to improve in
                                            order to
                                            be
                                            successful, according to a decade of training industry research on the best
                                            practices of
                                            successful training organizations.
                                            <br>


                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Business Needs
                                            Analysis<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Learning Needs
                                            Analysis<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Learner Profile<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Reviewing Existing
                                            Module<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Content Outline<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Preparation for
                                            Self-Study<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Video Editing<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Publishing on the
                                            E-Learning Website<br>
                                        </span>
                                        <button onclick="myFunction6()" class="button-solid btn-sm" id="myBtn6">Read
                                            More</button>
                                    </p>
                                    <p style="font-size: 16px;"><span class="robo"
                                        style="font-size: 16px;font-weight:700">Digital Marketing
                                            Solution</span><br>If you need to create a digital presence, we are here to
                                        help you.
                                        <br>We are<span id="dots7" style="color: black; font-size: 30px;">. . .</span><span
                                            style="display:none;" id="more7"> a dynamic, results-oriented advanced marketing
                                            team.
                                            We
                                            provide end-to-end site
                                            planning, development, and sophisticated showcasing solutions according on
                                            customer
                                            goals
                                            and objectives.
                                            <br>
                                            Our group of digital marketing experts ensures customer
                                            fulfillment
                                            on every project, from strategy and setup to web promoting development. We work
                                            for
                                            our
                                            clients to help them achieve their goals.
                                            <br>


                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Lead Capture<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Content Design<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Campaign Design<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>SMM<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>SEO<br>

                                        </span>
                                        <button onclick="myFunction7()" class="button-solid btn-sm" id="myBtn7">Read
                                            More</button>
                                    </p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 row clearfix">
                                <div class="col-md-6">
                                    <h4 style="text-decoration:underline;color:blue;text-align:center;margin-bottom:20px;">
                                        Human Resource Development</h4>

                                    <p style="font-size: 16px;"><span class="robo"
                                        style="font-size: 16px;font-weight:700">Skills Development</span><br>We can help
                                        you to transform your organizations or
                                        individuals
                                        by
                                        providing<span id="dots8" style="color: black; font-size: 30px;">. . .</span><span
                                            style="display:none;" id="more8"> training and development. Few of our global
                                            certifications -
                                            <br>


                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>ITIL 4 Foundation
                                            Training & Certification<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>ITIL 4 Digital & IT
                                            strategy Training & Certification<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>ITIL 4 Direct, Plan and
                                            Improve training and Certification<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>PRINCE 2 Foundation &
                                            Practitioner Training and Certification<br>

                                        </span>
                                        <button onclick="myFunction8()" class="button-solid btn-sm" id="myBtn8">Read
                                            More</button>
                                    </p>

                                    <p style="font-size: 16px;"><span class="robo"
                                        style="font-size: 16px;font-weight:700">Human Resource Supply</span><br>If your
                                        company needs human resource supply, we can provide
                                        you
                                        this
                                        service.<span id="dots9" style="color: black; font-size: 30px;">. . .</span><span
                                            style="display:none;" id="more9"> For instance, if you need a web developer or a
                                            video editor or a digital
                                            marketer
                                            for your any project, we can provide you that service.
                                        </span>
                                        <button onclick="myFunction9()" class="button-solid btn-sm" id="myBtn9">Read
                                            More</button>
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <h4 style="text-decoration:underline;text-align:center;color:blue;margin-bottom:20px;">
                                        Consultancy</h4>

                                    <p style="font-size: 16px;"><span style="font-size: 16px;font-weight:700"
                                            class="robo">Research</span><br>To provide advice or consultancy, data
                                        is very important. In
                                        this
                                        regard, we provide<span id="dots10" style="color: black; font-size: 30px;">. .
                                            .</span><span style="display:none;" id="more10"> research support/service to
                                            organization who needs
                                            baseline/midline/endline survey and even market research.
                                            <br>


                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Baseline Survey: A
                                            baseline survey is a research conducted at the start of a project
                                            to gather information on a subject's current state before any type of
                                            intervention can be implemented.<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Midline Survey: When
                                            you need to know whether the survey is going smoothly or not
                                            you need to evaluate it. We do this kind of midline survey.<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Endline Survey: An
                                            endline survey is a survey completed after the intervention has
                                            ended. As part of an impact evaluation, the results of the endline survey are
                                            compared to some comparable data, ideally the baseline survey.<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Market Research: Market
                                            research is the process of actively interviewing potential
                                            customers to determine the viability of a new service or product.<br>

                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Impact Research:
                                            Research impact is variously defined but can be summarized as
                                            having an effect, benefit, or contribution to economic, social, cultural, and
                                            other
                                            aspects of the lives of citizens and society beyond contributions to academic
                                            research.<br>
                                            <span class="dot"
                                                style="margin-left: 20px;margin-right: 10px;"></span>Customer Research:
                                            Customer research may be conducted via a variety of quantitative
                                            and qualitative methods such as interviews, surveys, focus groups, and
                                            ethnographic
                                            field studies. We also do this research for our clients.<br>


                                            <span style="font-size: 16px;">Our research service is available to manage
                                                everything for
                                                you
                                                if
                                                you do not have a team of research professionals. We will be with you every
                                                step of
                                                the
                                                way,
                                                from creating your project to recruiting respondents, fielding it, and
                                                reporting on
                                                the
                                                results.
                                                <br>
                                                We will assist you in locating your target audience, no matter how detailed
                                                it is.
                                                We
                                                will
                                                take care of everything from the beginning to the end of your project,
                                                including
                                                managing it
                                                and reporting on the results. For everything, our skilled team can assist
                                                with
                                                survey
                                                design
                                                and research methods.
                                            </span>
                                        </span>
                                        <button onclick="myFunction10()" class="button-solid btn-sm" id="myBtn10">Read
                                            More</button>
                                    </p>
                                    <p style="font-size: 16px;"><span style="font-size: 16px;font-weight:700">IT Service
                                            Management</span><br>IT service management - often referred to as ITSM - is
                                        simply
                                        how IT
                                        teams<span id="dots11" style="color: black; font-size: 30px;">. .
                                            .</span><span style="display:none;" id="more11"> manage the end-to-end delivery
                                            of IT services to customers. This includes all
                                            the
                                            processes and activities to design, create, deliver, and support IT services.
                                            The
                                            core
                                            concept of ITSM is the belief that IT should be delivered as a service.
                                            <br>
                                            We provide IT Service Management training to organizations or individuals.
                                        </span>
                                        <button onclick="myFunction11()" class="button-solid btn-sm" id="myBtn11">Read
                                            More</button>
                                    </p>

                                    <p style="font-size: 16px;"><span style="font-size: 16px;font-weight:700">Process Design &
                                            Development</span><br>We can assist you to build a process that will help you
                                        achieve
                                        your
                                        objectives.<span id="dots12" style="color: black; font-size: 30px;">. .
                                            .</span><span style="display:none;" id="more12"> Based on your requirements, we
                                            can assist you in developing an
                                            innovative
                                            strategic plan for your business. We can test your process and provide a turnkey
                                            solution or
                                            individual pieces of equipment.
                                        </span>
                                        <button onclick="myFunction12()" class="button-solid btn-sm" id="myBtn12">Read
                                            More</button>
                                    </p>

                                    <p style="font-size: 16px;"><span style="font-size: 16px;font-weight:700">ISO 9001:
                                            2015</span><br>We provide ISO 9001:2015 Quality management systems training to
                                        individuals<span id="dots13" style="color: black; font-size: 30px;">. .
                                            .</span><span style="display:none;" id="more13"> and organizations to transform
                                            them into international certified ISO
                                            9001:2015
                                            Quality management systems.
                                        </span>
                                        <button onclick="myFunction13()" class="button-solid btn-sm" id="myBtn13">Read
                                            More</button>
                                    </p>

                                    <p style="font-size: 16px;"> <span style="font-size: 16px;font-weight:700">ISO/IEC 27001
                                            Certification</span><br>You can be an international certified ISO/IEC 27001 Lead
                                        Implementer
                                        through<span id="dots14" style="color: black; font-size: 30px;">. .
                                            .</span><span style="display:none;" id="more14"> our training. We train people
                                            and organization ISO/IEC 27001 and transform
                                            them
                                            into
                                            internationally certified ISO/IEC 27001.
                                        </span>
                                        <button onclick="myFunction14()" class="button-solid btn-sm" id="myBtn14">Read
                                            More</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Our Story END ==== -->
                <!-- Our Status ==== -->

                <!-- Our Status END ==== -->
                <!-- About Content ==== -->

                <!-- About Content END ==== -->
                <!-- Testimonials ==== -->

                <!-- Testimonials END ==== -->
            </div>
            <!-- Page Content Box END ==== -->
        </div>
    </div>
    <br>

    <script>
        function myFunction1() {
            var dots = document.getElementById("dots1");
            var moreText = document.getElementById("more1");
            var btnText = document.getElementById("myBtn1");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction2() {
            var dots = document.getElementById("dots2");
            var moreText = document.getElementById("more2");
            var btnText = document.getElementById("myBtn2");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction3() {
            var dots = document.getElementById("dots3");
            var moreText = document.getElementById("more3");
            var btnText = document.getElementById("myBtn3");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction4() {
            var dots = document.getElementById("dots4");
            var moreText = document.getElementById("more4");
            var btnText = document.getElementById("myBtn4");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction5() {
            var dots = document.getElementById("dots5");
            var moreText = document.getElementById("more5");
            var btnText = document.getElementById("myBtn5");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction6() {
            var dots = document.getElementById("dots6");
            var moreText = document.getElementById("more6");
            var btnText = document.getElementById("myBtn6");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction7() {
            var dots = document.getElementById("dots7");
            var moreText = document.getElementById("more7");
            var btnText = document.getElementById("myBtn7");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction8() {
            var dots = document.getElementById("dots8");
            var moreText = document.getElementById("more8");
            var btnText = document.getElementById("myBtn8");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction9() {
            var dots = document.getElementById("dots9");
            var moreText = document.getElementById("more9");
            var btnText = document.getElementById("myBtn9");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction10() {
            var dots = document.getElementById("dots10");
            var moreText = document.getElementById("more10");
            var btnText = document.getElementById("myBtn10");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction11() {
            var dots = document.getElementById("dots11");
            var moreText = document.getElementById("more11");
            var btnText = document.getElementById("myBtn11");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction12() {
            var dots = document.getElementById("dots12");
            var moreText = document.getElementById("more12");
            var btnText = document.getElementById("myBtn12");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction13() {
            var dots = document.getElementById("dots13");
            var moreText = document.getElementById("more13");
            var btnText = document.getElementById("myBtn13");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        function myFunction14() {
            var dots = document.getElementById("dots14");
            var moreText = document.getElementById("more14");
            var btnText = document.getElementById("myBtn14");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read More";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read Less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <!-- Inner Content Box END ==== -->
    <!-- Content END-->
@endsection
