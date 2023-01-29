<section class="article-grid">
	<inner-column>
		
		<article-grid>

			<article-header>
				<h2 class="loud-voice">This is an "article grid" module. This is its heading.</h2>

				<p class="calm-voice">Again, we just totally made this up. It's a box with boxes in it.</p>
			</article-header>
			
			<ul>
				<?php foreach ( [1, 2, 3, 4, 5, 6] as $article)  { ?>
				<li>
					<?php include('php/article-card.php'); ?>
				</li>
			<?php } ?>
			</ul>
			

		</article-grid>
	
	</inner-column>
</section>