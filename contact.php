<!DOCTYPE html>
<html>
<head>
    <?php include_once 'includes.php'; ?>
    <?php include_once 'session.php'; ?>
    <title>Kontakt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Contact Approach Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"/>

    <link href="assets/css/contact.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- //web font -->
</head>
<?php include_once 'menu.php'; ?>
<body>

<!--<h1>Contact Approach Form</h1> -->
<div class="main-agileits">
    <!--form-stars-here-->
    <div class="left-form-w3-agile">
        <h2><?php echo $lang['contact.contact_person']; ?></h2>
        <form action="#" method="post">
            <div class="upper">
                <div class="form-sub-w3">
                    <div class="icon-w3">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <input type="text" value="Katarína Kermietová" readonly/>
                </div>
                <div class="form-sub-w3">
                    <div class="icon-w3">
                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                    </div>
                    <input type="text" value="blok D, miestnosť č. 116" readonly/>
                </div>
                <div class="form-sub-w3">
                    <div class="icon-w3">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <input type="text" value="+421 260 291 598,&#13;&#10; +421 265 429 734" readonly/>
                </div>
                <div class="form-sub-w3">
                    <div class="icon-w3">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <input type="text" value="katarina.kermietova@stuba.sk" readonly/>
                </div>

            </div>

        </form>
    </div>
    <!--//form-ends-here-->
    <div class="right-map-w3-agile">
        <h2><?php echo $lang['contact.locate_us']; ?></h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.8418986780007!2d17.07115601529536!3d48.151853179224666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8bec3cb92f93%3A0xff667b13b0802cbd!2sFakulta+elektrotechniky+a+informatiky+Slovenskej+technickej+univerzity+v+Bratislave!5e0!3m2!1ssk!2ssk!4v1495624521355"></iframe>
        <ul class="add">
            <li class="dot"><?php echo $lang['contact.faculty']; ?></li>
            <li class="dot"><?php echo $lang['contact.university']; ?></li>
            <li class="dot">Ilkovičova 3</li>
            <li class="dot">Bratislava, 812 19</li>
            <li class="dot"><?php echo $lang['contact.country']; ?></li>
        </ul>


        <div class="clear"></div>


    </div>
    <div class="clear"></div>
</div>
<?php include_once 'footer.php'; ?>
</body>

</html>