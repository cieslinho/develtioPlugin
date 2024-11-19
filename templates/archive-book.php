<?php get_header(); ?>

<section class="books">
    <div class="container">
        <h2 class="section-title">
            Książki
        </h2>
        <?php if (have_posts()) : ?>
            <div class="books__boxes">
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                  
                    $books_content = get_field( 'books_content' );
                    $book_author = $books_content['book_author'];
                    $book_date = $books_content['book_date'];
                    $book_genre = $books_content['book_genre'];
                    ?>

                    <div class="books__box">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="books__thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium' ); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="books__texts">
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                           <?php the_excerpt(); ?>
                        </div>

                        <?php if ($books_content) : ?>
                            <div class="books__info">
                                <p class="books__author"><span>Autor:</span> <?php echo esc_html( $book_author ); ?></p>
                                <p class="books__date"><span>Data wydania:</span>  <?php echo esc_html( $book_date ); ?></p>
                                <p class="books__genre"><span>Gatunek:</span> <?php echo esc_html( $book_genre ); ?></p>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>Brak książek</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
