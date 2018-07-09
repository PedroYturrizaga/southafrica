<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="HPE Caribbean Executive Briefing - July 23-26th, 2018">
    <meta name="keywords"               content="HPE Caribbean Executive Briefing">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="July 23, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
	<title>HPE | Registro</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>datetimepicker/css/bootstrap-material-datetimepicker.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="js-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#principal">
                    <img src="<?php echo RUTA_IMG?>logo.png">
                </a>
            </div>
        </div>
    </nav>
    <section id="principal">
        <div class="js-fondo"></div>
        <div class="js-container">
            <div class="js-home js-height js-flex">
                <div class="js-contenido">
                    <h2>Hala Madrid!</h2>
                    <p>Join us at HPE Discover Madrid 2017</p>
                </div>
            </div>
        </div>
    </section>
    <section id="home" class="js-section js-white">
        <div class="js-container">
            <div class="js-information">
                <p>From November 28th to 30th, 2017 join thousands of IT professionals from around the world for Hewlett Packard Enterprise’s largest IT event of the year. Discover 2017 takes place in Madrid 28 - 30 November. As the capital of Spain, Madrid boasts a rich culture, making it a wonderful location for this global gathering. <strong>HPE Caribbean and Tech Data welcomes you!</strong> </p>
            </div>
        </div>
    </section>
    <section id="register" class="js-section js-white">
        <div class="js-container">
            <div class="panel-group" id="accordion" role="tablist">
                <div class="js-card panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Business info</a>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">First Name</label>
                                        <input type="text" id="firstname" onkeypress="return soloLetras(event);" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Middle Name</label>
                                        <input type="text" id="middlename" onkeypress="return soloLetras(event);" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Last Name</label>
                                        <input type="text" id="lastname" onkeypress="return soloLetras(event);" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Company</label>
                                        <input type="text" id="company" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Job Title</label>
                                        <input type="text" id="job" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Mobile Phone Number</label>
                                        <input type="text" id="mobile" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Email</label>
                                        <input type="text" id="email" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">City</label>
                                        <input type="text" id="city" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Country</label>
                                        <input type="text" id="country" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-card panel panel-default">
                    <div class="panel-heading" id="headingTwo">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Personal info</a>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Passport Number</label>
                                        <input type="text" id="passport" >
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input js-date js-flex">
                                        <input class="js-disabled" type="text" id="issuedate" name="issuedate" maxlength="10" placeholder="Issue date" value="" style="pointer-events: none">
                                        <div class="js-icon">
                                            <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                <i class="mdi mdi-date_range"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input js-date js-flex">
                                        <input class="js-disabled" type="text" id="expiredate" name="expiredate" maxlength="10" placeholder="Expire date" value="" style="pointer-events: none">
                                        <div class="js-icon">
                                            <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                <i class="mdi mdi-date_range"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class=" js-input">
                                        <label for="text">Passport Issuing Country</label>
                                        <input type="text" id="issuecountry" >
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input js-select">
                                        <select name="gender" id="gender" title="Gender"> 
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input js-date js-flex">
                                        <input class="js-disabled" type="text" id="birthdate" name="birthdate" maxlength="10" placeholder="Date of birth" value="" style="pointer-events: none">
                                        <div class="js-icon">
                                            <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                <i class="mdi mdi-date_range"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                     <div class=" js-input">
                                        <label for="text">Nationality</label>
                                        <input type="text" id="nationality" >
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class=" js-input">
                                        <label for="text">Country of Residence</label>
                                        <input type="text" id="residence" >
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label>Do you require a visa invitation letter?</label>
                                        </br>
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                          <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                          <span class="mdl-radio__label">Yes</span>
                                        </label>
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                          <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                                          <span class="mdl-radio__label">No</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input js-select">
                                        <select name="seating" id="seating" title="Seating Preference"> 
                                            <option value="Aisle">Aisle</option>
                                            <option value="Window">Window</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input js-select">
                                        <select name="shirt" id="shirt" title="Shirt or T-Shirt Size"> 
                                            <option value="Small">Small</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Large">Large</option>
                                            <option value="X-Large">X-Large</option>
                                            <option value="XX-Large">XX-Large</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-card panel panel-default">
                    <div class="panel-heading " id="headingFour">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Emergency Contact</a>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Contact Name</label>
                                        <input type="text" id="contact" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Contact Phone Number</label>
                                        <input type="text" id="phone" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Their relationship to you</label>
                                        <input type="text" id="relationship" >
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="js-input">
                                        <label for="text">Additional Specifications (i.e.: Special diet, extra leg room needed, etc)</label>
                                        <input type="text" id="specifications" >
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="js-section--button text-right">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="sendInformation()">Send</button>
            </div>
        </div>
    </section>
    <footer class="js-section">
        <div class="js-container text-center">
            <p>Copyright &copy; 2017. Hewlett Packard Enterprise Development LP. All rights reserved.</p>
        </div>
    </footer>
    <!--MODAL-->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm text-center">
            <div class="modal-content">
                <div class="mdl-card mdl-card-login">
                    <div class="mdl-card__supporting-text">
                        <!-- <img class="logo" src="<?php echo RUTA_IMG;?>logo/logo-home.png"> -->
                        <div class="event">
                            <h2>Your feedback is important!</h2>
                            <p>Please share with us your experience at the 2018 Bootcamp.</p>
                        </div>
                        <div class="mdl-input">
                            <div class="mdl-icon">
                                <i class="mdi mdi-email"></i>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="correo" maxlength="50" >
                                <label class="mdl-textfield__label" for="correo">Email</label>
                                <span class="mdl-textfield__error">Invalid email</span>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card__actions p-0">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="ingresar()">Go to Survey</button>
                    </div> 
                    <div class="mdl-card__menu">
                        <button class="mdl-button mdl-js-button mdl-button--icon" data-dismiss="modal"><i class="mdi mdi-close"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-dropdown/2.0.3/jquery.dropdown.min.js"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>moment/moment.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>datetimepicker/js/bootstrap-material-datetimepicker.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
        initButtonCalendarDays('issuedate');
        initButtonCalendarDays('expiredate');
        initButtonCalendarDays('birthdate');
        initButtonCalendarDaysMinToday('checkindate');
        initButtonCalendarDaysMinToday('checkoutdate');
        initButtonCalendarDaysMinToday('departuredate');
        initButtonCalendarDaysMinToday('departuretime');
        initButtonCalendarDaysMinToday('returndate');
        initButtonCalendarDaysMinToday('returntime');
        initButtonCalendarDaysMinToday('returndate');
        initButtonCalendarDaysMinToday('returndate');
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
            $('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
    </script>
</body>
</html>