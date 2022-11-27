<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

<!-- MULAI LOOPING -->
<?php foreach($sidebar as $sb) :?>

  <li class="nav-item">
    <a class="nav-link collapsed" href="<?= $sb["sidebar_url"]; ?>">
      <i class="<?= $sb["icon"] ?>"></i>
      <span><?= $sb["sidebar_name"]; ?></span>
    </a>
  </li><!-- End Dashboard Nav -->

<?php endforeach; ?>
</ul>

</aside>