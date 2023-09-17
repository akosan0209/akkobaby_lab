<ul class="post_pager">
  <?php $pages = get_pager() ?>
  <?php foreach ((array)$pages as $page): ?>
    <li><?php echo $page ?></li>
  <?php endforeach ?>
</ul>