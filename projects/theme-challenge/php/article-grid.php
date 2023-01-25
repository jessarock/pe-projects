<section class="article-grid">
	<inner-column>
		
		<article-grid>

			<article-header>
				<h2 class="loud-voice"></h2>

				<p class="calm-voice"></p>
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