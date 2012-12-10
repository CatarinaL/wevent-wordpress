<?php global $authordata; ?>
<div class="entry-meta">

<span class="entry-date"><abbr class="published" title="Ver os artigos do mês de <?php the_time('F') ?>"><a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>" class="data"> <?php the_time(__('j', 'f2')); ?> de <?php the_time(__('F', 'f2')); ?>, <?php the_time(__('Y', 'f2')); ?></a></abbr></span>
<span class="meta-sep"> &bull; </span>
<span class="author vcard"><a class="url fn n autor" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php printf( __( 'Ver todos os artigos de %s', 'blankslate' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>


<?php edit_post_link( __( 'Editar', 'blankslate' ), "<span class=\"meta-sep\"> | </span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
</div>