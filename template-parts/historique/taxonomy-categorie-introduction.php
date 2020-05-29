<?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="col-12 ">
                            <?php the_field('details_histoire'); ?>
                            </div>

                            <!--  -->
                        <?php endwhile; ?>