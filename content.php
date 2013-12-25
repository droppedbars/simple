		<div class='mainblock'>
			<div class='titleblock'> <!-- title -->
				<h1 class='articletitle'>
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h1>
				<span class='showmore'>
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'simple' ) . '</span>', __( '1 Reply', 'simple' ), __( '% Replies', 'simple' ) ); ?>
				</span>
			</div>
			<div class='textblock'> <!-- text summary -->
				<p class='content'>
					<?php if ( is_singular() ) : ?>
						<?php the_content(); ?>
					<?php else : ?>
						<?php the_excerpt(); ?>
					<?php endif ?>
				</p>
			</div>
				<?php if ( is_singular() ) : ?>				
					<div class='showmore'>
					</div>
				<?php else : ?>
					<?php if ( comments_open() ) : ?>
					<div class='showmore'>
						<a href="<?php the_permalink(); ?>" rel="bookmark">show full article</a>
					</div>
					<?php endif; // comments_open() ?>
				<?php endif ?>
			</div>
		</div>
		<div class='spacer'>
		</div>
