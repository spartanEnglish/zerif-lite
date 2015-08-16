<?php



			echo '<section class="our-team" id="team">';


				echo '<div class="container">';


					echo '<div class="section-header">';


						$zerif_ourteam_title = get_theme_mod('zerif_ourteam_title',__('Our Team','zerif-lite'));
					
						if( !empty($zerif_ourteam_title) ):
							echo '<h2 class="dark-text">'.__($zerif_ourteam_title,'zerif-lite').'</h2>';
						endif;


						$zerif_ourteam_subtitle = get_theme_mod('zerif_ourteam_subtitle',__('Add a subtitle in Customizer, "Our team section"','zerif-lite'));


						if( !empty($zerif_ourteam_subtitle) ):


							echo '<h6>'.__($zerif_ourteam_subtitle,'zerif-lite').'</h6>';


						endif;


					echo '</div>';


					if(is_active_sidebar( 'sidebar-ourteam' )):
						echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';
							dynamic_sidebar( 'sidebar-ourteam' );
						echo '</div> ';
					else:
						echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';
							the_widget( 'zerif_team_widget','name=Member 11&position=CEO&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/product-bg.png', array('before_widget' => '', 'after_widget' => '') );
							the_widget( 'zerif_team_widget','name=Member 2&position=CTO&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/product-bg.png', array('before_widget' => '', 'after_widget' => '') );
							the_widget( 'zerif_team_widget','name=Member 3&position=VP&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/product-bg.png', array('before_widget' => '', 'after_widget' => '') );
							the_widget( 'zerif_team_widget','name=Member 4&position=CFO&description=Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque&fb_link=#&tw_link=#&bh_link=#&db_link=#&ln_link=#&image_uri='.get_template_directory_uri().'/images/product-bg.png', array('before_widget' => '', 'after_widget' => '') );
						echo '</div>';
					endif;



				echo '</div>';


			echo '</section>';

?>