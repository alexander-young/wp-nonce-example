<?php get_header(); ?>

<main id="site-content" role="main">
  <div class="entry-content">
    <div class="post-inner">
    
    <form id="message-form">

      <label>Username:
        <input type="text" name="username" />
      </label>

      <label>Email:
        <input type="email" name="email" />
      </label>

      <label>Message:
        <textarea name="message"></textarea>
      </label>

      <hr>

      <?php wp_nonce_field('send_message_form', 'smf-nonce'); ?>

      <button type="submit">Send</button>

    </form>

    </div>
  </div>
</main>

<?php get_template_part('template-parts/footer-menus-widgets'); ?>


<?php get_footer(); ?>
