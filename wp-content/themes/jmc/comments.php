<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.<p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<div id="commentblock">
<?php if ($comments) : ?>

<ul class="commentlist">
<?php foreach ($comments as $comment) : ?>
<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
<div class="quote"><?php comment_text() ?></div>
<?php if ($comment->comment_approved == '0') : ?>
<em>Your comment is awaiting moderation.</em>
<?php endif; ?>
</li>
<cite style="font-size:10px;">
  <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></a>&nbsp;|&nbsp;
  <?php comment_author_link() ?>
</cite>
<?php
/* Changes every other comment to a different class */
$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
?>
<?php endforeach; /* end for each comment */ ?>
</ul>


 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		</div>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<div class="blog" style="font-size:10px; margin-bottom:20px; padding-top:8px; padding-bottom:8px; padding-left:20px; padding-right:20px; background-color:#0066a4; color:#ffffff; ">
  You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.
</div>
</div>
<?php else : ?>
<div class="line"></div>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<div class="clear"></div>
<div class="blog" style="font-size:10px; margin-bottom:20px; padding-top:8px; padding-bottom:8px; padding-left:20px; padding-right:20px; background-color:#ffffff; color:#0066a4; border: none;">
  Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a>
</div>

<div class="clear"></div>

<?php else : ?>

<div class="clear"></div>

<p>&nbsp;</p>

<p><label for="name">Name <?php if ($req) echo "*"; ?></label><br />
<input type="text" name="author" id="name" value="<?php echo $comment_author; ?>" size="50" tabindex="1" class="input" /></p>

<p><label for="email">Email Address <?php if ($req) echo "*"; ?></label><br />
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="50" tabindex="2" class="input" /></p>

<p><label for="url">Website</label><br />
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="50" tabindex="3" class="input"  /></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<p><label for="words">Comment </label><br /><textarea name="comment" id="words" cols="50" rows="10" tabindex="4" class="input_message" width="100%"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit" class="submit_btn" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>

<?php do_action('comment_form', $post->ID); ?>

</form>
</div>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>