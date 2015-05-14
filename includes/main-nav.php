<nav class="main-nav">
  <?php if ($registration_open) { ?>
  <ol class="open">
  <?php } else { ?>
  <ol>
  <?php } ?>
    <li class="conference"><a href="/conference/">Conference</a></li>
    <li class="workshops"><a href="/workshops/">Workshops</a></li>
    <li class="location"><a href="/location">Location</a></li>
    <?php if ($registration_open) { ?>
    <li class="register"><a href="/register">Register</a></li>
    <?php } ?>
  </ol>
</nav><!-- /.main-nav -->