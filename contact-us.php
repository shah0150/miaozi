<?php /* Template Name: contact-us */ ?>

    <?php get_header(); ?>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "aadishah74@outlook.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

                    <form method="post">
                        Email:
                        <input name="email" type="text" />
                        <br /> Subject:
                        <input name="subject" type="text" />
                        <br /> Message:
                        <br />
                        <textarea name="comment" rows="15" cols="40"></textarea>
                        <br />
                        <input type="submit" value="Submit" />
                    </form>

                    <?php
  }
?>
            </main>
        </div>
