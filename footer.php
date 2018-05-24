  <hr>
  <footer class="stripe-pattern">
    <img id="footerlogo" src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/logo.png">
    <div id="lets-connect">
      <img src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/lets-connect.png">
      <div class="white-box" style="margin-top: 20px;">
        <p style="font-style: italic; text-align: center;font-size: 1.15rem;">Follow us for the latest news,<br>specials, and fun</p>
        <div id="social-media">
          <a id="fb-icon" href="http://www.facebook.com/TeaTradeCafe/"><img src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/fb-icon.png"></a>
          <a href="http://www.instagram.com/teatradecafe/"><img src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/ig-icon.png"></a>
        </div>
      </div>
    </div>

    <div id="message-us">
      <img src=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/assets/message.png">
      <form method="post" action=<?php get_bloginfo( 'url' ); ?>"/wp-content/themes/TeaTradeCafe/contact-submit.php" id="message-form"> 
        <input type="email" name="Email" placeholder="Email" required>
        <textarea name="Message" form="message-form" placeholder="Write Your Message to Us Here" rows="4" required></textarea>
        <input type="email" name="pot-email" id="pot">
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>

  </footer>
</body>
