<!DOCTYPE html>
<?php include "header.php";?>
<title>Teeth Whitening Spa 2 - Not Found</title>


<div class="page-title page-title-about bg-pattern" data-bgcolor="1a1472">
  <div class="page-title-overlay">
    <div class="container">
      <h1>PAGE NOT FOUND</h1>
      <p>Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and advanced restorative dentistry.</p>
    </div>
  </div>
</div>
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <ol class="breadcrumb">
        <li class="breadcrumb-home"><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Pages</a></li>
        <li class="active">Page not found</li>
      </ol>
    </div>
  </div>
</div>
<div class="notfound bg-pattern" data-bgcolor="cccccc">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="notfound-image"> </div>
        <div class="notfound-title-1"> 404 </div>
        <div class="notfound-title-2"> OOPS! Page not found </div>
        <div class="notfound-text"> The page you are looking for doesn`t exist or an oteher error occurred<br>
          <a href="#">Go back</a> or head over to <a href="index.html">DentalClinic</a> to choose a new direction </div>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php";?>

<!-- =========================
    POPUP FORMS
============================== -->
<div class="bookform bookform-1" id="bookform1">
  <div class="bookform-left">
    <h2 class="section-title">
      <span class="bold700">
        BOOK APPOINTMENT
      </span>
    </h2>
    <form class="bookform-form" action="js/sendmail-book.php" method="post">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item f-doctor">
          <select id="form-doctor" class="form-doctor" name="form-doctor">
            <option value="Not selected" selected="selected">Select doctor</option>
            <option value="Arnie Alban">Arnie Alban</option>
            <option value="Wyatt Esmond">Wyatt Esmond</option>
            <option value="Dustin Callahan">Dustin Callahan</option>
            <option value="Kristin Weaver">Kristin Weaver</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
          <input type="text" name="name" id="name1" data-validation="required" placeholder="Your name" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
          <input type="text" name="phone" id="phone1" data-validation="required" placeholder="Phone" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
          <input type="text" name="email" id="email1" placeholder="E-mail" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
          <input type="text" class="datepicker-f" id="datepicker1" name="date" data-validation="required" placeholder="Date" />
          <div class="help help-sm help-red">!</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
          <input type="text" class="timepicker-f" id="timepicker1" name="time" data-validation="required" placeholder="Time" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <textarea name="message" id="message1" placeholder="Your message.."></textarea>
        </div>
      </div>
      <div class="row" style="display:none;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
          <label class="fl_label">Honeypot:</label>
          <input type="text" name="last" value="" class="form-control fl_input">
        </div>
      </div>
      <div class="row latest-row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <button class="btn btn-primary">
            SUBMIT
          </button>
          <a class="fb-close" id="fb-close1" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
      </div>
      <div class="form-messages form-messages-modal"></div>
    </form>
  </div>
  <div class="bookform-right">
    <div class="bookform-right-info-1">
      <h5>Please select a doctor</h5>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
    <div class="bookform-right-info-2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
  </div>
</div>
<div class="bookform" id="bookform2">
  <div class="bookform-left">
    <h2 class="section-title">
      <span class="bold700">
        BOOK APPOINTMENT
      </span>
    </h2>
    <form class="bookform-form" action="js/sendmail-book.php" method="post">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
          <input type="text" name="name" id="name2" data-validation="required" placeholder="Your name" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
          <input type="text" name="phone" id="phone2" data-validation="required" placeholder="Phone" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
          <input type="text" name="email" id="email2" placeholder="E-mail" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
          <input type="text" class="datepicker-f" id="datepicker2" name="date" data-validation="required" placeholder="Date" />
          <div class="help help-sm help-red">!</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
          <input type="text" class="timepicker-f" id="timepicker2" name="time" data-validation="required" placeholder="Time" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <textarea name="message" id="message2" placeholder="Your message.."></textarea>
        </div>
      </div>
      <div class="row" style="display:none;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
          <label class="fl_label">Honeypot:</label>
          <input type="text" name="last" value="" class="form-control fl_input">
        </div>
      </div>
      <div class="row latest-row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <button class="btn btn-primary">
            SUBMIT
          </button>
          <a class="fb-close" id="fb-close2" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
      </div>
      <div class="form-messages form-messages-modal"></div>
    </form>
  </div>
  <div class="bookform-right">
    <div class="doctor-info">
      <div class="doctor-info-image"> <img src="images/doctor1.jpg" alt="" /> </div>
      <div class="doctor-info-name"> Wyatt Esmond </div>
      <div class="doctor-info-position"> General Dentist </div>
      <div class="doctor-info-hours-title"> OPENING HOURS </div>
      <div class="doctor-info-hours">
        <div class="doctor-info-hours-clock"> <img src="images/clock.png" alt="" /> </div>
        <div class="doctor-info-hours-left"> Monday<br>
          Tuesday<br>
          Wednesday<br>
          Thursday<br>
          Friday<br>
          Saturday<br>
          Sunday </div>
        <div class="doctor-info-hours-right"> Closed<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          Closed </div>
      </div>
      <div class="doctor-info-desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
    </div>
  </div>
</div>
<div class="bookform" id="bookform3">
  <div class="bookform-left">
    <h2 class="section-title">
      <span class="bold700">
        BOOK APPOINTMENT
      </span>
    </h2>
    <form class="bookform-form" action="js/sendmail-book.php" method="post">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
          <input type="text" name="name" id="name3" data-validation="required" placeholder="Your name" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
          <input type="text" name="phone" id="phone3" data-validation="required" placeholder="Phone" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
          <input type="text" name="email" id="email3" placeholder="E-mail" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
          <input type="text" class="datepicker-f" id="datepicker3" name="date" data-validation="required" placeholder="Date" />
          <div class="help help-sm help-red">!</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
          <input type="text" class="timepicker-f" id="timepicker3" name="time" data-validation="required" placeholder="Time" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <textarea name="message" id="message3" placeholder="Your message.."></textarea>
        </div>
      </div>
      <div class="row" style="display:none;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
          <label class="fl_label">Honeypot:</label>
          <input type="text" name="last" value="" class="form-control fl_input">
        </div>
      </div>
      <div class="row latest-row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <button class="btn btn-primary">
            SUBMIT
          </button>
          <a class="fb-close" id="fb-close3" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
      </div>
      <div class="form-messages form-messages-modal"></div>
    </form>
  </div>
  <div class="bookform-right">
    <div class="doctor-info">
      <div class="doctor-info-image"> <img src="images/doctor2.jpg" alt="" /> </div>
      <div class="doctor-info-name"> Arnie Alban </div>
      <div class="doctor-info-position"> Pedodontics </div>
      <div class="doctor-info-hours-title"> OPENING HOURS </div>
      <div class="doctor-info-hours">
        <div class="doctor-info-hours-clock"> <img src="images/clock.png" alt="" /> </div>
        <div class="doctor-info-hours-left"> Monday<br>
          Tuesday<br>
          Wednesday<br>
          Thursday<br>
          Friday<br>
          Saturday<br>
          Sunday </div>
        <div class="doctor-info-hours-right"> Closed<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          Closed </div>
      </div>
      <div class="doctor-info-desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
    </div>
  </div>
</div>
<div class="bookform" id="bookform4">
  <div class="bookform-left">
    <h2 class="section-title">
      <span class="bold700">
        BOOK APPOINTMENT
      </span>
    </h2>
    <form class="bookform-form" action="js/sendmail-book.php" method="post">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
          <input type="text" name="name" id="name4" data-validation="required" placeholder="Your name" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
          <input type="text" name="phone" id="phone4" data-validation="required" placeholder="Phone" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
          <input type="text" name="email" id="email4" placeholder="E-mail" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
          <input type="text" class="datepicker-f" id="datepicker4" name="date" data-validation="required" placeholder="Date" />
          <div class="help help-sm help-red">!</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
          <input type="text" class="timepicker-f" id="timepicker4" name="time" data-validation="required" placeholder="Time" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <textarea name="message" id="message4" placeholder="Your message.."></textarea>
        </div>
      </div>
      <div class="row" style="display:none;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
          <label class="fl_label">Honeypot:</label>
          <input type="text" name="last" value="" class="form-control fl_input">
        </div>
      </div>
      <div class="row latest-row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <button class="btn btn-primary">
            SUBMIT
          </button>
          <a class="fb-close" id="fb-close4" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
      </div>
      <div class="form-messages form-messages-modal"></div>
    </form>
  </div>
  <div class="bookform-right">
    <div class="doctor-info">
      <div class="doctor-info-image"> <img src="images/doctor3.jpg" alt="" /> </div>
      <div class="doctor-info-name"> Dustin Callahan </div>
      <div class="doctor-info-position"> Ortodontist </div>
      <div class="doctor-info-hours-title"> OPENING HOURS </div>
      <div class="doctor-info-hours">
        <div class="doctor-info-hours-clock"> <img src="images/clock.png" alt="" /> </div>
        <div class="doctor-info-hours-left"> Monday<br>
          Tuesday<br>
          Wednesday<br>
          Thursday<br>
          Friday<br>
          Saturday<br>
          Sunday </div>
        <div class="doctor-info-hours-right"> Closed<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          Closed </div>
      </div>
      <div class="doctor-info-desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
    </div>
  </div>
</div>
<div class="bookform" id="bookform5">
  <div class="bookform-left">
    <h2 class="section-title">
      <span class="bold700">
        BOOK APPOINTMENT
      </span>
    </h2>
    <form class="bookform-form" action="js/sendmail-book.php" method="post">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
          <input type="text" name="name" id="name5" data-validation="required" placeholder="Your name" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
          <input type="text" name="phone" id="phone5" data-validation="required" placeholder="Phone" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
          <input type="text" name="email" id="email5" placeholder="E-mail" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
          <input type="text" class="datepicker-f" id="datepicker5" name="date" data-validation="required" placeholder="Date" />
          <div class="help help-sm help-red">!</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
          <input type="text" class="timepicker-f" id="timepicker5" name="time" data-validation="required" placeholder="Time" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <textarea name="message" id="message5" placeholder="Your message.."></textarea>
        </div>
      </div>
      <div class="row" style="display:none;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
          <label class="fl_label">Honeypot:</label>
          <input type="text" name="last" value="" class="form-control fl_input">
        </div>
      </div>
      <div class="row latest-row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <button class="btn btn-primary">
            SUBMIT
          </button>
          <a class="fb-close" id="fb-close5" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
      </div>
      <div class="form-messages form-messages-modal"></div>
    </form>
  </div>
  <div class="bookform-right">
    <div class="doctor-info">
      <div class="doctor-info-image"> <img src="images/doctor4.jpg" alt="" /> </div>
      <div class="doctor-info-name"> Kristin Weaver </div>
      <div class="doctor-info-position"> Hygienist </div>
      <div class="doctor-info-hours-title"> OPENING HOURS </div>
      <div class="doctor-info-hours">
        <div class="doctor-info-hours-clock"> <img src="images/clock.png" alt="" /> </div>
        <div class="doctor-info-hours-left"> Monday<br>
          Tuesday<br>
          Wednesday<br>
          Thursday<br>
          Friday<br>
          Saturday<br>
          Sunday </div>
        <div class="doctor-info-hours-right"> Closed<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          Closed </div>
      </div>
      <div class="doctor-info-desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
    </div>
  </div>
</div>
<div class="bookform" id="bookform6">
  <div class="bookform-left">
    <h2 class="section-title">
      <span class="bold700">
        BOOK APPOINTMENT
      </span>
    </h2>
    <form class="bookform-form" action="js/sendmail-book.php" method="post">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
          <input type="text" name="name" id="name6" data-validation="required" placeholder="Your name" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
          <input type="text" name="phone" id="phone6" data-validation="required" placeholder="Phone" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
          <input type="text" name="email" id="email6" placeholder="E-mail" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
          <input type="text" class="datepicker-f" id="datepicker6" name="date" data-validation="required" placeholder="Date" />
          <div class="help help-sm help-red">!</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
          <input type="text" class="timepicker-f" id="timepicker6" name="time" data-validation="required" placeholder="Time" />
          <div class="help help-sm help-red">!</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <textarea name="message" id="message6" placeholder="Your message.."></textarea>
        </div>
      </div>
      <div class="row" style="display:none;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item honeypot">
          <label class="fl_label">Honeypot:</label>
          <input type="text" name="last" value="" class="form-control fl_input">
        </div>
      </div>
      <div class="row latest-row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
          <button class="btn btn-primary">
            SUBMIT
          </button>
          <a class="fb-close" id="fb-close6" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
      </div>
      <div class="form-messages form-messages-modal"></div>
    </form>
  </div>
  <div class="bookform-right">
    <div class="doctor-info">
      <div class="doctor-info-image"> <img src="images/doctor5.jpg" alt="" /> </div>
      <div class="doctor-info-name"> Leslie Adams </div>
      <div class="doctor-info-position"> Prosthodontics </div>
      <div class="doctor-info-hours-title"> OPENING HOURS </div>
      <div class="doctor-info-hours">
        <div class="doctor-info-hours-clock"> <img src="images/clock.png" alt="" /> </div>
        <div class="doctor-info-hours-left"> Monday<br>
          Tuesday<br>
          Wednesday<br>
          Thursday<br>
          Friday<br>
          Saturday<br>
          Sunday </div>
        <div class="doctor-info-hours-right"> Closed<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          9:00 am - 7:15 pm<br>
          Closed </div>
      </div>
      <div class="doctor-info-desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
    </div>
  </div>
</div>

<!-- =========================
    END POPUP FORMS
============================== --> 

<!-- =========================
    COLOR SWITHER
============================== -->

<div class="color-sw" id="color-sw">
  <div class="color-sw-header"> Style switcher
    <span class="color-sw-close" id="color-sw-close">
      <i class="fa fa-close"></i>
    </span>
  </div>
  <div class="color-sw-body">
    <p>Choose color style</p>
    <div class="color-sw-item active" id="blue">
      <div></div>
    </div>
    <div class="color-sw-item" id="violet">
      <div></div>
    </div>
    <div class="color-sw-item" id="red">
      <div></div>
    </div>
    <div class="color-sw-item" id="green">
      <div></div>
    </div>
  </div>
</div>
<!-- =========================
    END COLOR SWITHER
============================== -->
<div class="totop" id="totop"> <i class="fa fa-angle-up"></i> </div>
<link rel="stylesheet" type="text/css" href="css/responsive.css" />

<!-- =========================
     SCRIPTS   
============================== --> 
<!-- JQUERY --> 
<script src="js/jquery-2.2.0.min.js"></script> 

<!-- BOOTSTRAP --> 
<script src="js/bootstrap.min.js"></script> 

<!-- SLIDER PRO --> 
<script src="js/jquery.sliderPro.min.js"></script> 

<!-- LIGHTBOX --> 
<script src="js/jquery.fancybox.pack.js"></script> 

<!-- CAROUSEL --> 
<script src="js/owl.carousel.js"></script> 

<!-- STAR RATING --> 
<script src="js/jquery.barrating.min.js"></script> 

<!-- ISOTOPE FILTER --> 
<script src="js/isotope.pkgd.min.js"></script> 

<!-- SCROLLSPY --> 
<script src="js/scrollspy.js"></script> 

<!-- DATEPICKER --> 
<script src="js/moment.js"></script> 
<script src="js/bootstrap-datetimepicker.min.js"></script> 

<!-- JQUERY FORM --> 
<script src="js/jquery.form.js"></script> 

<!-- FORM VALIDATOR --> 
<script src="js/jquery.form-validator.js"></script> 

<!-- SELECT STYLING --> 
<script src="js/jquery.selectBox.js"></script> 

<!-- MATCHHEIGHT --> 
<script src="js/jquery.matchHeight.js"></script> 

<!-- IMAGES LOADED --> 
<script src="js/imagesloaded.pkgd.min.js"></script> 

<!-- CUSTOM SCRIPT --> 
<script src="js/theme.js"></script> 

<!-- GOOGLE MAPS --> 
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC1N87a_NHjocaepKKcovPAYTMUkJBr9pQ&amp;language=en&amp;sensor=true"></script> 

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</body>
</html>