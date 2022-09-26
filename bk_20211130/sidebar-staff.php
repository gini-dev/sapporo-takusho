		<div class="child-side-bar static-side">
				<div class="side-bar-blo">
					<div class="blo">
						<h2 class="rel">部門</h2>
<?php 
	$my_tax = 'departmentcategory';
	$parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 0) );
	if ( !empty( $parent_terms ) ) :
		foreach ( $parent_terms as $pt ) : 
		$pt_id = $pt->term_id;
		$pt_name = $pt->name;
		$pt_slug = $pt->slug;
		$pt_url = get_term_link($pt);
?>
	<h3><a href="<?php echo home_url('/company/staff/'); ?>?department=<?php print $pt_slug; ?>"><?php echo $pt_name; ?></a></h3>
<?php 
	$child_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => $pt_id) );
	if ( !empty( $child_terms ) ) :
		echo '<ul class="link-ul">';
		foreach ( $child_terms as $ct ) : 
			$ct_id = $ct->term_id;
			$ct_name = $ct->name;
			$ct_slug = $ct->slug;
			$ct_url = get_term_link($ct);
?>
	<li>
		<a href="<?php echo home_url('/company/staff/'); ?>?department=<?php print $ct_slug; ?>"><?php echo $ct_name; ?></a>
	</li>
<?php
	endforeach;
	echo '</ul>';
	endif;
?>
<?php
	endforeach;
	endif;
?>
					</div><!-- /.blo -->
					<div class="blo">
						<h2 class="rel">出身地</h2>
<?php 
	$my_tax = 'place';
	$parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 0) );
	if ( !empty( $parent_terms ) ) :
		foreach ( $parent_terms as $pt ) : 
		$pt_id = $pt->term_id;
		$pt_name = $pt->name;
		$pt_slug = $pt->slug;
		$pt_url = get_term_link($pt);
?>
	<h3><a href="<?php echo home_url('/company/staff/'); ?>?birthplace=<?php print $pt_slug; ?>"><?php echo $pt_name; ?></a></h3>
<?php 
	$child_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => $pt_id) );
	if ( !empty( $child_terms ) ) :
		echo '<ul class="link-ul">';
		foreach ( $child_terms as $ct ) : 
			$ct_id = $ct->term_id;
			$ct_name = $ct->name;
			$ct_slug = $ct->slug;
			$ct_url = get_term_link($ct);
?>
	<li>
		<a href="<?php echo home_url('/company/staff/'); ?>?birthplace=<?php print $ct_slug; ?>"><?php echo $ct_name; ?></a>
	</li>
<?php
	endforeach;
	echo '</ul>';
	endif;
?>
<?php
	endforeach;
	endif;
?>
					</div><!-- /.blo -->
					<div class="blo">
						<h2 class="rel">所属同好会</h2>
<?php 
	$my_tax = 'club';
	$parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 0) );
	if ( !empty( $parent_terms ) ) :
		foreach ( $parent_terms as $pt ) : 
		$pt_id = $pt->term_id;
		$pt_name = $pt->name;
		$pt_slug = $pt->slug;
		$pt_url = get_term_link($pt);
?>
	<h3><a href="<?php echo home_url('/company/staff/'); ?>?affiliation=<?php print $pt_slug; ?>"><?php echo $pt_name; ?></a></h3>
<?php 
	$child_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => $pt_id) );
	if ( !empty( $child_terms ) ) :
		echo '<ul class="link-ul">';
		foreach ( $child_terms as $ct ) : 
			$ct_id = $ct->term_id;
			$ct_name = $ct->name;
			$ct_slug = $ct->slug;
			$ct_url = get_term_link($ct);
?>
	<li>
		<a href="<?php echo home_url('/company/staff/'); ?>?affiliation=<?php print $ct_slug; ?>"><?php echo $ct_name; ?></a>
	</li>
<?php
	endforeach;
	echo '</ul>';
	endif;
?>
<?php
	endforeach;
	endif;
?>
					</div><!-- /.blo -->
				</div><!-- /.side-bar-blo -->
		</div><!-- /.child-side-bar -->