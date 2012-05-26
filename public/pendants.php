<html>
    <head>
        <title>Soley Inspired: Handcrafted Jewelry & Decor | Pendants</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script>
            !window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
        </script>
        <script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        <meta http-equiv="content-language" content="en-US" />
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="date" content="Thu, 19 Jan 2012 03:51:06 GMT" />
        <meta http-equiv="last-modified" content="Thu, 19 Jan 2012 04:03:06 GMT" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript">
            $(document).ready(function() {

                $("a[rel=pendants_group]").fancybox({
                    'titleShow'     : false
                });
            });
        </script>
    </head>
    <body>
        <div id="page">
            <div id="left_menu">
                <a href="index.html"><img id="top_menu_item" src="website-boutton-home.png"></a>
                <a href="pendants.php"><img id="menu_item" src="website-boutton-pendants.png"></a>
                <a href="earrings.html"><img id="menu_item" src="website-boutton-earrings.png"></a>
                <a href="pottery.html"><img id="menu_item" src="website-boutton-pottery.png"></a>
                <a href="http://soleyinspired.etsy.com"><img id="menu_item" src="website-boutton-store.png"></a>
                <a href="aboutme.html"><img id="bottom_menu_item" src="website-boutton-aboutme.png"></a>
            </div>
            <div id="content">
                <img id="top_label" src="Soley-Inspired-pendant.png">

                <h1 id='form_title'>Request a Quote&hellip;</h1>
<?php

// Taken from http://www.w3schools.com/php/php_mail.asp
if (isset($_REQUEST['email'])){
//if "email" is filled out or a blank string, send email

  // send email
  $fullName = $_REQUEST['fullName'] ;
  $email = $_REQUEST['email'] ;
  $phone = $_REQUEST['phone'] ;
  $coinCountry = $_REQUEST['coinCountry'] ;
  $coinValu = $_REQUEST['coinValu'] ;
  $coinAcqu = $_REQUEST['coinAcqu'] ;
  $settingPref = $_REQUEST['settingPref'] ;
  $stylePref = $_REQUEST['stylePref'] ;

  // Validation code taken from
  // http://www.damonkohler.com/2008/12/email-injection.html 
  // Validations are to be performed on everything except the freeform
  // text entry $specialRequ.
  if (eregi("(\r|\n)", $fullName)) {
    echo "<p id='art_detail'>Info. in the \"Name\" field is invalid. " .
        "Please <a href=\"pendants.php#form_title\" onClick=" .
        "\"window.location.reload(); return false;\">click here</a> " .
        "to try again.</p>";
  }

  // email regex taken from http://www.regular-expressions.info/regexbuddy/email.html
  elseif ( ! (eregi("[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}", $email) ||
      $email == "") ) {
    echo "<p id='art_detail'>Info. in the \"Email Address\" field is " .
        "invalid, it should be entered similar to \"email@example.com\"." .
        " Please <a href=\"pendants.php#form_title\" " .
        "onClick=\"window.location.reload(); return false;\">click " .
        "here</a> to try again.</p>";
  }

  // phone regex taken http://regexlib.com/
  elseif ( ! (eregi("[01]?[- .]?\(?[2-9][0-9]{2}\)?[- .]?[0-9]{3}[- .]?[0-9]{4}", $phone) ||
      $phone == "") ) {
    echo "<p id='art_detail'>Info. in the \"Phone &#35;\" field is " .
        "invalid, it should be entered similar to \"555-867-5309\". " .
        "Please <a href=\"pendants.php#form_title\" " .
        "onClick=\"window.location.reload(); return false;\">click " .
        "here</a> to try again.</p>";
  }

  elseif ( $phone == "" && $email == "") {
    echo "<p id='art_detail'>Either an \"Email Address\" or \"Phone " .
        "&#35;\" must be provided. Please <a href=" .
        "\"pendants.php#form_title\" onClick=" .
        "\"window.location.reload(); return false;\">click here</a> " .
        "to try again.</p>";
  }

  elseif (eregi("(\r|\n)", $coinCountry)) {
    echo "<p id='art_detail'>Info. in the \"Coin Country&hellip;\" " .
        "field is invalid. Please <a href=\"pendants.php#form_title\"" .
        " onClick=\"window.location.reload(); return false;\">click " .
        "here</a> to try again.</p>";
  }

  elseif (eregi("(\r|\n)", $coinValu)) {
    echo "<p id='art_detail'>Info. in the \"Coin Face Value\" field " .
        "is invalid. Please <a href=\"pendants.php#form_title\" " .
        "onClick=\"window.location.reload(); return false;\">click " .
        "here</a> to try again.</p>";
  }

  elseif (eregi("(\r|\n)", $coinAcqu)) {
    echo "<p id='art_detail'>Info. in the \"Coin Acquisition\" field " .
        "is invalid. Please <a href=\"pendants.php#form_title\" " .
        "onClick=\"window.location.reload(); return false;\">click " .
        "here</a> to try again.</p>";
  }

  elseif (eregi("(\r|\n)", $settingPref)) {
    echo "<p id='art_detail'>Info. in the \"Setting Preference\" " .
        "field is invalid. Please <a href=\"pendants.php#form_title\"" .
        " onClick=\"window.location.reload(); return false;\">click " .
        "here</a> to try again.</p>";
  }

  elseif (eregi("(\r|\n)", $stylePref)) {
    echo "<p id='art_detail'>Info. in the \"Style Preference\" " .
        "field is invalid. Please <a href=\"pendants.php#form_title\"" .
        " onClick=\"window.location.reload(); return false;\">click " .
        "here</a> to try again.</p>";
  }

  else {
    $specialRequ = $_REQUEST['specialRequ'] ;

    if ($fullName == "") {
      $fullName = "(unidentified sender)";
    }

    $subject = "Quote Request for a " . $settingPref . " " . 
          $coinCountry . " coin from " . $fullName ;
    $message = <<<EMESSAGE
-- Quote Request from www.soleyinspired.com --

Full Name: $fullName

Email Address: $email

Phone #: $phone

Coin Country of Origin: $coinCountry

Coin Face Value: $coinValu

Coin Acquisition: $coinAcqu

Setting Preference: $settingPref

Style Preference: $stylePref

Special Requests: $specialRequ
EMESSAGE;

    mail("info@soleyinspired.com", $subject, $message, "From:" . $email .
      "\r\n" . "CC:" . $email);

    echo "<p id='art_detail'>Thank you for your request.  We will " .
        "respond back with more information shortly. Please <a " .
        "href=\"#form_title\" onClick=\"window.location.reload(); " .
        "return false;\">click here</a> to submit another request.</p>";
  }
}
else {
//if "email" is unset, display the form

  echo <<<FORMML
                <form method='post' action='pendants.php#form_title'>

                    <table id='form_table'>
                        <tr>
                            <td id='form_label'><label>Name:</label></td>
                            <td><input type='text' name='fullName' /></td>
                            <td id='form_label'><label>Email Address:</label></td>
                            <td><input type='text' name='email' /></td>
                        </tr>

                        <tr>
                            <td id='form_label'><label>Phone &#35;:</label></td>
                            <td><input type='text' name='phone' /></td>
                            <td id='form_label'><label>Coin Country of Origin:</label></td>
                            <td><input type='text' name='coinCountry' /></td>
                        </tr>

                        <tr>
                            <td id='form_label'><label>Coin Face Value:</label></td>
                            <td><input type='text' name='coinValu' /></td>
                            <td id='form_label'><label>Coin Acquisition:</label></td>
                            <td>
                                <select name='coinAcqu'>
                                    <option value='from collection'>From Soley Inspired collection</option>
                                    <option value='mailed-in'>Mailed in by the customer</option>
                                    <option value='delivered'>Delivered by the customer</option>
                                    <option value='to acquire'>Acquired for a small fee</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td id='form_label'><label>Setting Preference:</label></td>
                            <td>
                                <select name='settingPref'>
                                    <option value='mounted'>Mounted</option>
                                    <option value='drilled'>Drilled</option>
                                    <option value='hand wired'>Hand Wired</option>
                                    <option value='reversible'>Reversible</option>
                                    <option value='bezel-set'>Bezel</option>
                                </select>
                            </td>
                            <td id='form_label'><label>Style Preference:</label></td>
                            <td>
                                <select name='stylePref'>
                                    <option value='W011'>Sample W011</option>
                                    <option value='W012'>Sample W012</option>
                                    <option value='W013'>Sample W013</option>
                                    <option value='D014'>Sample D014</option>
                                    <option value='D011'>Sample D011</option>
                                    <option value='D012'>Sample D012</option>
                                    <option value='D013'>Sample D013</option>
                                    <option value='D014'>Sample D014</option>
                                    <option value='M011'>Sample M011</option>
                                    <option value='M012'>Sample M012</option>
                                    <option value='M013'>Sample M013</option>
                                    <option value='M014'>Sample M014</option>
                                    <option value='B011'>Sample B011</option>
                                    <option value='R011'>Sample R011</option>
                                    <option value='R012'>Sample R012</option>
                                    <option value='R013'>Sample R013</option>
                                    <option value='R014'>Sample R014</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td id='form_label'><label>Special Requests:</label></td>
                            <td colspan='3'><textarea rows='3' type='text' name='specialRequ'></textarea> </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><button type='submit' name='submit'>Submit</button></td>
                        </tr>
                    </table>
                </form>
FORMML;
}
?>

                <h1 id="form_title">Pricing&hellip;</h1>
                <table id="info_table">
                    <tr>
                        <td>Mounted Coin Pendant with Chain</td>
                        <td id="info_value">&#36;16.00</td>
                    </tr>

                    <tr>
                        <td>Drilled Coin Pendant with Chain</td>
                        <td id="info_value">&#36;18.00</td>
                    </tr>

                    <tr>
                        <td>Hand Wired Coin Pendant with Chain</td>
                        <td id="info_value">&#36;22.00</td>
                    </tr>

                    <tr>
                        <td>Reversible Coin Pendant with Chain</td>
                        <td id="info_value">&#36;28.00</td>
                    </tr>

                    <tr>
                        <td>Bezel-set Coin Pendant with Chain</td>
                        <td id="info_value">&#36;32.00</td>
                    </tr>
                </table>
                
                <p id="art_detail">These are average prices and include a 20" chain in a
                   coordinating finish.  Discounts and/or credits are given to
                   customers that provide their own coins or forgo the
                   chain.</p>

                <p id="art_detail">We Accept Cash, Check, Money Order, and Credit Cards (a
                    Paypal bill will be generated upon request).</p>

                <p id="art_detail">Worldwide shipping available.  Delivery/Pickup available by
                   request.</p>

                <p>See much more work and like us at <a href="http://www.facebook.com/soleyinspired">www.facebook.com/soleyinspired</a></p>

                <table>
                <tr>
                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/guam.jpg"><img id="thumb-land" src="./site-res/pendants/t-guam.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/guana.jpg"><img id="thumb-land" src="./site-res/pendants/t-guana.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/hawaii.jpg"><img id="thumb-land" src="./site-res/pendants/t-hawaii.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1395.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1395.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1398.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1398.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1409.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1409.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1413.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1413.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1593.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1593.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>
                </tr>

                <tr>
                    <td>
                         <a rel="pendants_group" href="./site-res/pendants/IMAG1610.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1610.jpg"/></a>
                         <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1628.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1628.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1416.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1416.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1550.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1550.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1418.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1418.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1423.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1423.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1440.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1440.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1441.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1441.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1447.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1447.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1461.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1461.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1648.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1648.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1498.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1498.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1463.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1463.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1468.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1468.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1477.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1477.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1479.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1479.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1585.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1585.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1589.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1589.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1500.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1500.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>

                    <td>
                        <a rel="pendants_group" href="./site-res/pendants/IMAG1501.jpg"><img id="thumb-land" src="./site-res/pendants/t-IMAG1501.jpg"/></a>
                        <p id="img_cell"></p>
                    </td>
                </tr>
                </table>
            </div>
        </div>
    </body>
</html>
<!-- vim:set ai et sw=4 sts=4 ts=4 nowrap: -->
