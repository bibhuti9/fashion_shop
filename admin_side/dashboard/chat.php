<?PHP
    include('sidebar.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parinari Project</title>


    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords"
        content="Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <link rel="icon" href="..\files\assets\images\favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap\css\bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\themify-icons\themify-icons.css">

    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">

    <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">
</head>

<body>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body chat-bg ">
                <div class="page-wrapper">
                    <div id="main-chat" class="container-fluid">



                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <div class="d-inline">
                                            <h4>Chat API</h4>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="bal.html"> <i class="feather icon-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Pages</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Sample page</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->


                        <div class="page-body">
                            <div class="row">
                                <div class="chat-box">
                                    <ul class="text-right boxs">
                                        <li class="chat-single-box card-shadow bg-white active" data-id="1">
                                            <div class="had-container">
                                                <div class="chat-header p-10 bg-gray">
                                                    <div class="user-info d-inline-block f-left">
                                                        <div class="box-live-status bg-danger  d-inline-block m-r-10">
                                                        </div>
                                                        <a href="#">Josephin Doe</a>
                                                    </div>
                                                    <div class="box-tools d-inline-block">
                                                        <a href="#" class="mini">
                                                            <i class="icofont icofont-minus f-20 m-r-10"></i>
                                                        </a>
                                                        <a class="close" href="#">
                                                            <i class="icofont icofont-close f-20"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="chat-body p-10">
                                                    <div class="message-scrooler">
                                                        <div class="messages">
                                                            <div class="message out no-avatar media">
                                                                <div class="body media-body text-right p-l-50">
                                                                    <div
                                                                        class="content msg-reply f-12 bg-primary d-inline-block">
                                                                        Good morning..</div>
                                                                    <div class="seen"><i
                                                                            class="icon-clock f-12 m-r-5 txt-muted d-inline-block"></i><span>a
                                                                            few seconds ago </span>
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="sender media-right friend-box">
                                                                    <a href="javascript:void(0);" title="Me"><img
                                                                            src="..\files\assets\images\avatar-1.jpg"
                                                                            class="  img-chat-profile" alt="Me"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-footer b-t-muted">
                                                    <div class="input-group write-msg">
                                                        <input type="text" class="form-control input-value"
                                                            placeholder="Type a Message">
                                                        <span class="input-group-btn">
                                                            <button id="paper-btn" class="btn btn-primary"
                                                                type="button">
                                                                <i class="icofont icofont-paper-plane"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div id="sidebar" class="users p-chat-user">
                                        <div class="had-container">
                                            <div class="card card_main p-fixed users-main ">
                                                <div class="user-box">
                                                    <div class="card-block">
                                                        <div class="right-icon-control">
                                                            <input type="text" class="form-control  search-text"
                                                                placeholder="Search Friend">
                                                            <div class="form-icon">
                                                                <i class="icofont icofont-search"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-groups">
                                                        <h6>Groups</h6>
                                                        <ul>
                                                            <li class="frnds">Friends</li>
                                                            <li class="work">Work</li>
                                                        </ul>
                                                    </div>
                                                    <div class="user-groups">
                                                        <h6>Favourites</h6>
                                                        <div class="media userlist-box" data-id="1" data-status="online"
                                                            data-username="Josephin Doe" data-toggle="tooltip"
                                                            data-placement="left" title="Josephin Doe">
                                                            <a class="media-left" href="#!">
                                                                <img class="media-object  "
                                                                    src="..\files\assets\images\avatar-3.jpg"
                                                                    alt="Generic placeholder image">
                                                            </a>
                                                            <div class="media-body">
                                                                <div class="f-13 chat-header">Josephin Doe</div>
                                                            </div>
                                                        </div>
                                                        <div class="media userlist-box" data-id="1" data-status="online"
                                                            data-username="Josephin Doe" data-toggle="tooltip"
                                                            data-placement="left" title="Josephin Doe">
                                                            <a class="media-left" href="#!">
                                                                <img class="media-object  "
                                                                    src="..\files\assets\images\task\task-u1.jpg"
                                                                    alt="Generic placeholder image">
                                                            </a>
                                                            <div class="media-body">
                                                                <div class="f-13 chat-header">Lary John</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="1" data-status="online"
                                                        data-username="Josephin Doe" data-toggle="tooltip"
                                                        data-placement="left" title="Josephin Doe">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\avatar-1.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-success"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Josephin Doe</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="2" data-status="online"
                                                        data-username="Lary Doe" data-toggle="tooltip"
                                                        data-placement="left" title="Lary Doe">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\task\task-u1.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-success"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Lary Doe</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="3" data-status="online"
                                                        data-username="Alice" data-toggle="tooltip"
                                                        data-placement="left" title="Alice">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\avatar-2.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-success"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Alice</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="4" data-status="online"
                                                        data-username="Alia" data-toggle="tooltip" data-placement="left"
                                                        title="Alia">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\task\task-u2.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-success"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Alia</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="5" data-status="online"
                                                        data-username="Suzen" data-toggle="tooltip"
                                                        data-placement="left" title="Suzen">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\task\task-u3.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-success"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Suzen</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="6" data-status="offline"
                                                        data-username="Michael Scofield" data-toggle="tooltip"
                                                        data-placement="left" title="Michael Scofield">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\avatar-3.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-danger"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Michael Scofield</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="7" data-status="online"
                                                        data-username="Irina Shayk" data-toggle="tooltip"
                                                        data-placement="left" title="Irina Shayk">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\avatar-4.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-success"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Irina Shayk</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="8" data-status="offline"
                                                        data-username="Sara Tancredi" data-toggle="tooltip"
                                                        data-placement="left" title="Sara Tancredi">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\avatar-5.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-danger"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Sara Tancredi</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="9" data-status="online"
                                                        data-username="Samon" data-toggle="tooltip"
                                                        data-placement="left" title="Samon">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\avatar-1.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-success"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Samon</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="10" data-status="online"
                                                        data-username="Daizy Mendize" data-toggle="tooltip"
                                                        data-placement="left" title="Daizy Mendize">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\task\task-u3.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-success"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Daizy Mendize</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="11" data-status="offline"
                                                        data-username="Loren Scofield" data-toggle="tooltip"
                                                        data-placement="left" title="Loren Scofield">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\avatar-3.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-danger"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Loren Scofield</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="12" data-status="online"
                                                        data-username="Shayk" data-toggle="tooltip"
                                                        data-placement="left" title="Shayk">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\avatar-4.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-success"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Shayk</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="13" data-status="offline"
                                                        data-username="Sara" data-toggle="tooltip" data-placement="left"
                                                        title="Sara">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\task\task-u3.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-danger"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Sara</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="14" data-status="online"
                                                        data-username="Doe" data-toggle="tooltip" data-placement="left"
                                                        title="Doe">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\avatar-1.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-success"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Doe</div>
                                                        </div>
                                                    </div>
                                                    <div class="media userlist-box" data-id="15" data-status="online"
                                                        data-username="Lary" data-toggle="tooltip" data-placement="left"
                                                        title="Lary">
                                                        <a class="media-left" href="#!">
                                                            <img class="media-object  "
                                                                src="..\files\assets\images\task\task-u1.jpg"
                                                                alt="Generic placeholder image">
                                                            <div class="live-status bg-success"></div>
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="f-13 chat-header">Lary</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-error">
                            <div class="card text-center">
                                <div class="card-block">
                                    <div class="m-t-10">
                                        <i class="icofont icofont-warning text-white bg-c-yellow"></i>
                                        <h4 class="f-w-600 m-t-25">Not supported</h4>
                                        <p class="text-muted m-b-0">Chat not supported in this device</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="styleSelector">
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <script type="text/javascript" src="..\files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\bootstrap\js\bootstrap.min.js"></script>

    <script type="text/javascript" src="..\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>

    <script type="text/javascript" src="..\files\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="..\files\bower_components\modernizr\js\css-scrollbars.js"></script>

    <script src="..\files\assets\pages\chat\js\mmc-common.js"></script>
    <script src="..\files\assets\pages\chat\js\mmc-chat.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\chat\js\chat.js"></script>

    <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js">
    </script>
    <script type="text/javascript"
        src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js">
    </script>
    <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>

    <script src="..\files\assets\js\pcoded.min.js"></script>
    <script src="..\files\assets\js\vartical-layout.min.js"></script>
    <script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="..\files\assets\js\script.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>