<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Application Services | Miracle
        </title>
        <?php include '../config/Locations.php';?>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
        <style>
            .overlay{
                background-color:rgba(0,0,0,0.5) !important;
            }
            .modal-dialog
            {
                overflow:hidden !important;

            }
            ul.breadcrumb > li > a, ul.breadcrumb > li .divider {
                color: #fff;
            }
            ul.breadcrumb > li.active {
                color: #fff;
            }
            ul.breadcrumb > li > a:hover {
                color: #fff;
            }
            body{
                overflow-x:hidden;
            }
            body > section {
                padding-top: 0px !important;}

            .tinted-image {
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("../img/key.jpg");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .modal-dialog
            {
                overflow:hidden !important;

            }
            
            
            .section_bg{
               background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/banners/application-service.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         
            }

            
            
        </style>
    </head><!--/head-->
    <?php include '../header.php';?>
    <body>
         <section>
        <div class="overlay section_bg">
            <div class=" container">
               
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong>Application Services</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                       <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="../services/">Services</a>
                        </li>
                        <li class="active">Application Services
                        </li>
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
        <section class="container" id="about-us">
            <br>
        <!--    <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 text-left">
                    <h1 class="heavy">
                        Application Services
                    </h1>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="../services/">Services</a>
                        </li>
                        <li class="active">Application Services
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div> -->
            <div class="row">
                
                <div class="col-sm-12">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#overview">Overview</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Development">Development</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Support">Support</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Testing">Testing</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#Modernization">Modernization</a>
                        </li>
                    </ul><!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="overview">
                            <br>
                            <p class="methodText">
                                Adoption of new technologies, expansion of organizations and increase in data usage is driving a new era of applications in the IT World. With Mobile and Social playing a huge role, data is piling up, and in turn changing the way that an organization interacts with its customers, employees and stakeholders. Standard approaches to application development and management will no longer suffice in this dynamic world; agile and innovative solutions are required at lower costs and high output levels. Our team of experts has years of experience and industry know-how to help you achieve what your business needs.
                            </p>
                            <p class="methodText">
                                Miracle's Application Services Team specializes on various aspects of an application’s life cycle spanning Development, Support and Maintenance, Testing and Quality Assurance, and Modernization of Applications.
                            </p>
                            <p class="methodText">
                                <strong>Application Development</strong>
                            </p>
                            <p class="methodText">
                                Our teams are capable of working with multiple application development platforms, which range from standard Microsoft .NET (or) J2EE based applications to custom applications built on top of SAP ERP systems. Our teams are also experts in building applications using internal and external API with both Open Source (or) Commercial Software.
                            </p>
                            <p class="methodText">
                                <strong>Application Support</strong>
                            </p>
                            <p class="methodText">
                                Our teams can help support Level 1,2 and 3 activities for any custom (or) off-the-shelf application including Cloud-Based Applications. Miracle is the expert in providing 24/7 support through its trusted and proven Hybrid Global Delivery Model based on our multiple Offshore Development Facilities.
                            </p>
                            <p class="methodText">
                                <strong>Application Testing</strong>
                            </p>
                            <p class="methodText">
                                The Quality and Performance of your applications is critical in enabling high performance for you. At Miracle, we can provide that through our expertise in both Manual and Automated Testing with tools such as HP Quality Center and Selenium. Our expertise spans across SOA Testing, EDI Testing, Application Testing, Cross Browser Testing, Performance Testing and Compatibility Testing for both Mobile and Web Applications.
                            </p>
                            <p class="methodText">
                                <strong>Application Modernization</strong>
                            </p>
                            <p class="methodText">
                                Our Modernization Services include converting Legacy Cobol/Oracle Forms/Fortran/C Based Applications to Java/.NET based applications. For the past 2 decades Miracle has helped enterprises migrate to high-performance platforms, enabling them to take the next step towards growing their business. Our teams are even capable of migrating Legacy Systems to Packaged Applications with some parts being migrated to a Rules Management System (or) to a federated approach across multiple platforms using Integration as the glue. We have also been able to expose the Mainframe/Legacy Environment as web services to modern technologies such as Mobile and Web Applications.
                            </p>
                            <p class="methodText">
                                For more information regarding <strong>Application Services</strong>, contact us at <a class="linkText" href="mailto:appservices@miraclesoft.com"><strong style="text-decoration: none">appservices@miraclesoft.com</strong></a>
                            </p>
                            <p><br>
                            <br>
                        </div>
                        <div class="tab-pane" id="Development">
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="methodText">
                                        Any organization needs a strong foundation of their business process implementations in order for them to be able to sustain in the industry and increase ROI. With the ever growing technologies and available design, architectural and implementation solutions, businesses are finding it extremely difficult to evaluate and make the right choice for their business needs.
                                    </p>
                                    <p class="methodText">
                                        The right choice is not only one that makes the design, development and deployment in the most effective way, but it should also provide enough scope for application enhancements and future maintenence to be done with minimum effort. Our teams are trained to analyze and dissect your problem to the core, so that we can provide the right choice for you.
                                    </p>
                                    <p class="methodText">
                                        Whether it is building an application from scratch and managing the entire life cycle of the application (or) enhancing/modernizing a existing legacy application, Miracle is your partner of choice. Our expertise and experience in helping enterprises make the right choices, ensures that we can help solve your critical business challenges.
                                    </p>
                                    <p class="methodText">
                                        <strong>We can help you with,</strong>
                                    </p>
                                    <div class="container">
                                    <div class="col-sm-12">
                                    
                                    <ul class="methodText">
                                        <li>Compliance Checks 
                                        </li>
                                        <li>Web/Application Server Choices
                                        </li>
                                        <li>Application Architecture and Design
                                        </li>
                                        <li>Application Development and Deployment
                                        </li>
                                        <li>Application Maintenance and Enhancements
                                        </li>
                                        <li>Application Testing and Build Automation
                                        </li>
                                        <li>Custom Training and User Guide Creation
                                        </li>
                                    </ul>
                                   
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="heavy">
                                        <h5>
                                            <strong>Java/J2EE Technologies</strong>
                                        </h5>
                                    </h3>
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Layer
                                                </th>
                                                <th>
                                                    Technologies
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Presentation Layer
                                                </td>
                                                <td>
                                                    HTML, JSP, JSF, Ajax, Struts, Velocity, Tapestry, XML, XSLT
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Business Layer
                                                </td>
                                                <td>
                                                    Servlets, EJB, Spring, Web Services and POJO
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Persistence Layer
                                                </td>
                                                <td>
                                                    Hibernate, JDBC, TopLink, JBO and JPA
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="heavy">
                                        <h5>
                                            <strong>Microsoft .NET Technologies</strong>
                                        </h5>
                                    </h3>
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Layer
                                                </th>
                                                <th>
                                                    Technologies
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Presentation Layer
                                                </td>
                                                <td>
                                                    Console, Windows Forms, ASP .NET, HTML, VBA, XML, XSLM
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Business Layer
                                                </td>
                                                <td>
                                                    Class Library, .DLL, WCF, Web Services
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Persistence Layer
                                                </td>
                                                <td>
                                                    Hibernate, JDBC, TopLink, JBO and JPA
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><br>
                            <br>
                        </div>
                        <div class="tab-pane" id="Support">
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="methodText">
                                        Miracle's Hybrid Onsite/Offshore model makes it the king in providing support services for large and medium size enterprises. Our pool of experts can help support your applications in 24/7 model at low costs and high-efficiency. We provide support in 3 major categories starting with Help Desk Services (Level 1), Combine Onsite/Offshore Team Support (Level 2) and Major Enhancements Support (Level 3).
                                    </p>
                                    <p class="methodText">
                                        Through our customized support model you can acheive and benefit as follows,
                                    </p>
                                    <div class="container">
                                    <div class="col-sm-12">
                                    <ul class="methodText">
                                        <li>Bridging the gaps between Application Development, Technical Support and Operational Areas
                                        </li>
                                        <li>Production processing and off-hours support
                                        </li>
                                        <li>Developing SOP’s and Play Books for identifying and rectifying problem situations
                                        </li>
                                    </ul>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="heavy">
                                        <strong>The Support Eco-System</strong>
                                    </h5>
                                    <hr>
                                    <p class="methodText">
                                        <strong>24/7 Help Desk :</strong> Helps to monitor and input issues into call log and forward all issues to the Support Team while also solving basic procedural issues
                                    </p>
                                    <p class="methodText">
                                        <strong>Our Support Team :</strong> Primarily handles L2 support along with KT and support transition to Offshore Support Team while also interfacing wth Client Team and other L3 Support Teams
                                    </p>
                                    <p class="methodText">
                                        <strong>Variable Project Team :</strong>Handles major enhancements and developments whenever required in an on-demand model(Can be provided both as T&M or Fixed Cost enhancements)
                                    </p>
                                    <p class="methodText">
                                        The Support model can be extended as a Fixed-Cost Support offering (or) can be a variable-cost model where resources are added flexibly on-demand.
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="<?= AMAZON_URL ?>/images/services/support-services.png" alt="Support-Services" title="Support Services">
                                </div>
                            </div><br>
                            <br>
                        </div>
                        <div class="tab-pane" id="Testing">
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="methodText">
                                        <strong>Software Quality</strong> is a key factor for the success of today’s enterprises. Miracle’s Quality Assurance and Testing Services ensure that your Application Portfolio is quality enhanced, while reusing both time-to-market and cost-of-testing. With automated testing strategies we can help in drastically reducing the testing cycles, while also enhancing the overall test quality.
                                    </p>
                                    <p class="methodText">
                                        <strong>Our Testing Services cycle encompasses the following stages</strong>
                                    </p>
                                    <div class="container">
                                    <div class="col-sm-12">
                                    <ul class="methodText">
                                        <li>Test Strategy Design
                                        </li>
                                        <li>Test Case Creation
                                        </li>
                                        <li>Test Bed Design and Test Execution
                                        </li>
                                        <li>Test Replication
                                        </li>
                                        <li>Bug Tracking and Resolution
                                        </li>
                                    </ul>
                                    </div>
                                    </div>
                                    <p class="methodText">
                                        <strong>Advantages and Benefits</strong>
                                    </p>
                                    <div class="container">
                                    <div class="col-sm-12">
                                    <ul class="methodText">
                                        <li>Offshore Testing Services with a lower cost-of-ownership
                                        </li>
                                        <li>Complete Regression Testing, allows your teams to concentrate on enhancements
                                        </li>
                                        <li>Our flexible model, allows you to concentrate on critical project management activities, while we take care of the lower level tasks at a low management overhead
                                        </li>
                                        <li>Moving to automated testing enables major reduction in testing times
                                        </li>
                                        <li>While we handle the automation process, you can have your team concentrate on the release strategy
                                        </li>
                                    </ul>
                                    </div>
                                    </div>
                                </div>
                            </div><br>
                            <br>
                        </div>
                        <div class="tab-pane" id="Modernization">
                            <br>
                            <p class="methodText">
                                Our rich understanding of the Application Development process helps us to quickly understand, solve and enhance your existing applications so that your business can stay in tune with the technological advancements and provide the efficiency and output that you require. It is absolutely crucial that we are able to understand your existing architecture to be able to migrate (or) upgrade your application while maintaining reliability.
                            </p>
                            <p class="methodText">
                                <strong>We can help you with,</strong>
                            </p>
                            <div class="container">
                                    <div class="col-sm-12">
                            <ul class="methodText">
                                <li>Architecture and Consulting
                                </li>
                                <li>Scaling existing application to handle increase in user base
                                </li>
                                <li>Modernize application to improve performance issues with current application portfolio
                                </li>
                                <li>Improve user experience and portability of applications
                                </li>
                                <li>Study and Re-Engineer your business processes
                                </li>
                                <li>Reduce cost associated with poorly documented Legacy Systems
                                </li>
                                <li>Migrate existing application to a Cloud Environment
                                </li>
                                <li>Migrate existing application to Open Source Environment
                                </li>
                                <li>Expose Legacy Systems as Web Services
                                </li>
                                <li>Convert Legacy Programs to Packaged Applications
                                </li>
                                <li>Integrate/Enhance Applications from different platforms
                                </li>
                                <li>Assess Application Portfolio and provide Risk Management Plan
                                </li>
                            </ul>
                            </div>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section><!--/#about-us-->
        <?php include '../footer.php';?>
    </body>
</html>