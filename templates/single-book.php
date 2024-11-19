<?php get_header(); ?>

<section class="book">
    <div class="container">
        <h1 class="section-title">
        <?php the_title(); ?>
        </h1>
       
            
               
                    <?php
                    $books_content = get_field("books_content");
                    $book_author = $books_content["book_author"];
                    $book_date = $books_content["book_date"];
                    $book_genre = $books_content["book_genre"];
                    ?>

                    <div class="book__box">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="book__thumbnail">
                               
                                    <?php the_post_thumbnail("large"); ?>
                                
                            </div>
                        <?php endif; ?>

                        <div class="book__texts">
                            
                           <?php the_excerpt(); ?>
                       

                        <?php if ($books_content): ?>
                            <div class="book__info">
                                <p class="book__author"><span>Autor:</span> <?php echo esc_html(
                                    $book_author
                                ); ?></p>
                                <p class="book__date"><span>Data wydania:</span>  <?php echo esc_html(
                                    $book_date
                                ); ?></p>
                                <p class="book__genre"><span>Gatunek:</span> <?php echo esc_html(
                                    $book_genre
                                ); ?></p>
                            </div>
                        <?php endif; ?>
                        </div>

                    </div>
                        <a href="<?php echo get_post_type_archive_link(
                            "book"
                        ); ?>" class="book__btn">Powrót do listy książek</a>
                    </div>
               
           
       
        
    </div>
</section>

<?php get_footer(); ?>
