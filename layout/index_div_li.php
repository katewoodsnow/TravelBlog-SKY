


<div>
      <h3 class="rebellion"> Welcome <?php print($userRow['user_name']);?> </h3>
      <br>
        <?php if ($userRow['user_role'] == 'admin') :?>
      <a href="post_blog.php" class="btn btn-default rebellion dark_orange">Create New Post</a>
        <?php endif; ?>
      <br>
</div>
      
