<?php
$_DOCUMENT['include'] = str_replace($_SERVER['SCRIPT_NAME'], '/includes/', $_SERVER['SCRIPT_FILENAME']);
$_DOCUMENT['title'] = 'Contact Us';
$_DOCUMENT['class'] = 'contact-form';

$email_to = 'info@clearleft.com';
$sent_message = '';

if ($_POST) {
  $name = trim(isset($_POST['name']) ? $_POST['name'] : '');
  $email = trim(isset($_POST['email']) ? $_POST['email'] : '');
  $message = trim(isset($_POST['message']) ? $_POST['message'] : '');
  // Validation checks
  if (!$name) {
    $name_error = '<p class="error">Please tell us your name</p>'; 
  }
  if (!preg_match('/^\S+?@\S+?$/i', $email)) {
    $email_error = '<p class="error">Please enter a valid e-mail address</p>';
  }
  if (!$message) {
    $message_error = '<p class="error">Don\'t forget your message!</p>';
  }
  if (!$name_error && !$email_error && !$message_error) {
    // Actually send the message
    $header = "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email;
    $body = "The message reads:\n " . $message . "\n\nFrom:\n" . $name . "\n" . $email;
    if(mail($email_to, 'dConstruct 2011 contact message', $body, $header)) {
      $sent_message = '<p class="notice">Your message has been sent</p>';
    } else {
      $sent_message = '<p class="error">An error occurred; your message could not be sent</p>';
    }
  }
} else {
  $name = '';
  $email = '';
  $message = '';
  $name_error = '';
  $email_error = '';
  $message_error = '';
}

include_once $_DOCUMENT['include'].'header.php';
?>
      <div class="page">
        <div class="section">

          <div class="main page" role="main">
            <div class="gutter prose">
              <h1>Contact Us</h1>
              <p><?php echo $sent_message; ?></p>
              <form action="/contact" method="post">
                <fieldset>
                  <legend>E-mail us through this magic form</legend>
                  <div>
                    <label for="name">Your name</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" />
                    <?php echo $name_error; ?>
                  </div>
                  <div>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" />
                    <em class="help">So we can contact you</em>
                    <?php echo $email_error; ?>
                  </div>
                  <div class="textarea-container">
                    <label for="message">Your message</label>
                    <textarea rows="5" cols="20" id="message" name="message"><?php echo htmlspecialchars($message); ?></textarea>
                    <?php echo $message_error; ?>
                  </div>
                  <button type="submit"><span>Send message</span></button>
                </fieldset>
              </form>
            </div><!-- /.gutter -->
          </div><!-- /.main -->

          <aside class="aside">
            <h1>Information</h1>
            <nav class="conference-nav">
              <ol class="aside-list">
                <li><a href="/sponsorship">Sponsorship</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
                <li><a href="/terms">Terms &#38; Conditions</a></li>
                <li><a href="/accessibility">Accessibility</a></li>
                <li class="current"><a href="/contact">Contact</a></li>
              </ol>
            </nav><!-- /.conference-nav -->
          </aside><!-- /.aside -->
        </div><!-- /.section -->
        <br style="clear:both"><!-- Digging that spade -->
      </div><!-- /.page -->

<?php include_once $_DOCUMENT['include'].'sponsors.php';?>
<?php include_once $_DOCUMENT['include'].'footer.php';?>