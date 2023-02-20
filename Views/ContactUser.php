<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Museum</title>
    <link rel="stylesheet" href="ContactUserStyle.php">
</head>
<body>
    <header><a href="HomeUser.php">MuseumEX</a></header>

    <div class="container contact-form">
        <div class="contact-image">
            <img src="9.jpg" alt="rocket_contact"/>
        </div>
        <form method="post" id="form" class="form" name="contactForm">
            <h3>Drop Us a Message!</h3>
           <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control" placeholder="Your Name " value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtEmail" class="form-control" placeholder="Your Email" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number " value="" />
                    </div>
                    <div class="col-md-6">
                    <div class="form-group1">
                        <textarea name="txtMsg" class="form1-control" placeholder="Your Message" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                </div>
                </div>
            </div>
        </form>
        <?php include_once '../Controllers/MessagesController.php';?>
</div>
</body>


    </html>