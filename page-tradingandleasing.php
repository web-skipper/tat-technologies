<?php /*Template Name: Trading and Leasing Page */
get_header();
$pid = $post->ID; 
$header_bg_color = get_field('header_bg_color', $pid);
$header_curved_lines_image = get_field('header_curved_lines_image', $pid);
$header_title = get_field('header_title', $pid);
$header_sub_title = get_field('header_sub_title', $pid);
$overview_label = get_field('overview_label', $pid);
$overview_title = get_field('overview_title', $pid);
$overview_description = get_field('overview_description', $pid);
$read_more_text = get_field('read_more_text', $pid);
$read_more_link = get_field('read_more_link', $pid);
$read_more_target = get_field('read_more_target', $pid);?>

<style type="text/css">
.tradfourrgt a.relessbut{ display:none;}
.tradfourrgt.active a.relessbut{ display:block;}
.tradfourrgt.active a.rebut{ display:none;}
.listview_head{ display:none;}
.trading_list_view_sec{ display:none;}
.trading_list_view_sec .more_trading_info{ display:none;}
.listview .trading_list_view_sec, .listview .listview_head{ display:block;}
.listview .trading_grid_view_sec{ display:none;}
.gridview .trading_list_view_sec, .gridview .listview_head{ display:none;}
.gridview .trading_grid_view_sec{ display:block;}


</style>

<div class="inner_main tradpurch_main" id="skypcon">
    <div class="tradpuchban" <?php if($header_bg_color!=""){?>style="background:<?php echo $$header_bg_color;?>"<?php }?>>
    	<?php if($header_curved_lines_image!=""){?><div class="tradlayer"><img alt="<?php echo $header_curved_lines_image['alt'];?>" src="<?php echo $header_curved_lines_image['url'];?>" /></div><?php }?>
    	<div class="tradpurctxt">
        	<h1><?php if($header_title!=""){echo $header_title;} else {echo the_title();}?></h1>
            <?php if($header_sub_title!=""){?><h2><?php echo $header_sub_title;?></h2><?php }?>
        </div>
    </div>
    <div class="tradleasmid">
    	<div class="tradleadmidtop">
    		<?php if($overview_label!=""){?><div class="tradleadsubtitle"><?php echo $overview_label;?></div><?php }?>
            <div class="tradmidtleft">
               <?php if($overview_title!=""){?><h3><?php echo $overview_title;?></h3><?php }?>
               <?php /*if($read_more_text!=""){?><a href="<?php echo $read_more_link;?>" target="<?php echo $read_more_target;?>"><?php echo $read_more_text;?> <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 10.0039H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 5L15 10L10 15" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a><?php }*/?>
            </div>
            <div class="tradmidtright">
            	<?php echo $overview_description;?>
            </div>
            <div class="clr"></div>
        </div>
        <div class="tradleadmidbot">
        	<div class="tradmidwrap">
            	<div class="tradbottop latst cf">
					<?php echo do_shortcode('[searchandfilter id="2262"]');?>
                    <div class="trading_views">
                    	<a href="#" class="tradfiltone active"><svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"><g opacity="0.5"><circle cx="9.5" cy="10.75" r="1.5" fill="#2E313F"/><circle cx="16" cy="10.75" r="1.5" fill="#2E313F"/><circle cx="22.5" cy="10.75" r="1.5" fill="#2E313F"/><circle cx="9.5" cy="16.75" r="1.5" fill="#2E313F"/><circle cx="16" cy="16.75" r="1.5" fill="#2E313F"/><circle cx="22.5" cy="16.75" r="1.5" fill="#2E313F"/><circle cx="9.5" cy="22.75" r="1.5" fill="#2E313F"/><circle cx="16" cy="22.75" r="1.5" fill="#2E313F"/><circle cx="22.5" cy="22.75" r="1.5" fill="#2E313F"/></g></svg></a>
                        <a href="#" class="tradfilttwo"><svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="9.2207" cy="11.25" r="1.25" fill="#2E313F"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.4707 11.25C13.4707 10.8358 13.8065 10.5 14.2207 10.5L23.2801 10.5C23.6943 10.5 24.0301 10.8358 24.0301 11.25C24.0301 11.6642 23.6943 12 23.2801 12L14.2207 12C13.8065 12 13.4707 11.6642 13.4707 11.25Z" fill="#2E313F"/><circle cx="9.2207" cy="16.75" r="1.25" fill="#2E313F"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.4707 16.75C13.4707 16.3358 13.8065 16 14.2207 16L23.2801 16C23.6943 16 24.0301 16.3358 24.0301 16.75C24.0301 17.1642 23.6943 17.5 23.2801 17.5H14.2207C13.8065 17.5 13.4707 17.1642 13.4707 16.75Z" fill="#2E313F"/><circle cx="9.2207" cy="22.25" r="1.25" fill="#2E313F"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.4707 22.25C13.4707 21.8358 13.8065 21.5 14.2207 21.5L23.2801 21.5C23.6943 21.5 24.0301 21.8358 24.0301 22.25C24.0301 22.6642 23.6943 23 23.2801 23H14.2207C13.8065 23 13.4707 22.6642 13.4707 22.25Z" fill="#2E313F"/></svg></a>
                    </div>
                </div>
            	<?php /*?><div class="tradbottop">
                	<div class="tradbotbuts"><a href="#">All</a><a href="#">APU</a><a href="#">Heat Exchanger</a><a href="#">Landing Gear</a></div>
                    <div class="tradbotrfilter">
                    	<a href="#" class="tradfiltone">
                        	
<svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<g opacity="0.5">
<circle cx="9.5" cy="10.75" r="1.5" fill="#2E313F"/>
<circle cx="16" cy="10.75" r="1.5" fill="#2E313F"/>
<circle cx="22.5" cy="10.75" r="1.5" fill="#2E313F"/>
<circle cx="9.5" cy="16.75" r="1.5" fill="#2E313F"/>
<circle cx="16" cy="16.75" r="1.5" fill="#2E313F"/>
<circle cx="22.5" cy="16.75" r="1.5" fill="#2E313F"/>
<circle cx="9.5" cy="22.75" r="1.5" fill="#2E313F"/>
<circle cx="16" cy="22.75" r="1.5" fill="#2E313F"/>
<circle cx="22.5" cy="22.75" r="1.5" fill="#2E313F"/>
</g>
</svg>

                        </a>
                        <a href="#" class="tradfilttwo">
                        	

<svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="9.2207" cy="11.25" r="1.25" fill="#2E313F"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4707 11.25C13.4707 10.8358 13.8065 10.5 14.2207 10.5L23.2801 10.5C23.6943 10.5 24.0301 10.8358 24.0301 11.25C24.0301 11.6642 23.6943 12 23.2801 12L14.2207 12C13.8065 12 13.4707 11.6642 13.4707 11.25Z" fill="#2E313F"/>
<circle cx="9.2207" cy="16.75" r="1.25" fill="#2E313F"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4707 16.75C13.4707 16.3358 13.8065 16 14.2207 16L23.2801 16C23.6943 16 24.0301 16.3358 24.0301 16.75C24.0301 17.1642 23.6943 17.5 23.2801 17.5H14.2207C13.8065 17.5 13.4707 17.1642 13.4707 16.75Z" fill="#2E313F"/>
<circle cx="9.2207" cy="22.25" r="1.25" fill="#2E313F"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4707 22.25C13.4707 21.8358 13.8065 21.5 14.2207 21.5L23.2801 21.5C23.6943 21.5 24.0301 21.8358 24.0301 22.25C24.0301 22.6642 23.6943 23 23.2801 23H14.2207C13.8065 23 13.4707 22.6642 13.4707 22.25Z" fill="#2E313F"/>
</svg>


                        </a>
                        <div class="aricraftfilt">
                        	<select name=""><option>Aircraft Aplication</option><option>Aircraft Aplication 2</option><option>Aircraft Aplication 3</option></select>
                        </div>
                        <div class="aricraftaval">
                        	<select name=""><option>Availability</option><option>Availability 2</option><option>Availability 3</option></select>
                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div><?php */?>
                <div class="appllist"><div class="appselction"></div></div>
                <div class="tradbotlist gridview" id="maintrade">
                
                	<div class="listview_head cf">
                    	<div class="listview_col1">Aircraft Application</div>
                        <div class="listview_col2">Cat.</div>
                        <div class="listview_col3">Component</div>
                        <div class="listview_col4">S/N</div>
                        <div class="listview_col5">P/N</div>
                        <div class="listview_col6">Status</div>
                        <div class="listview_col7"></div>
                    </div>
                    
                
                	<?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;      
					//$trd = array('search_filter_id' => $filter_shortcode_id, 'post_type' => 'tat_trading',  'paged' => $paged, 'post_status' => 'publish', 'sort_column'=> 'menu_order' , 'posts_per_page'=>-1 );	
					$trd = array('search_filter_id' => 2262, 'post_type' => 'tat_trading',  'paged' => $paged, 'post_status' => 'publish', 'sort_column'=> 'menu_order' , 'posts_per_page'=>-1 );	
					
					$tradlist = new WP_Query($trd);
					$tradecount = $tradlist->post_count;
					query_posts($trd);
					if ($tradlist->have_posts()) :?> 
                    <div class="trading_list_view_sec">
                    	<?php $flag=1;while ( $tradlist->have_posts() ) : $tradlist->the_post();
						//$feat_image=wp_get_attachment_url( get_post_thumbnail_id(get_the_id()));
						$stauts = get_field('stauts');
						$pdf_file = get_field('pdf_file');
						
						$condition = get_field('condition');
						$condition_text = get_field('condition_text');
						$condition_hint = get_field('condition_hint');
						
						$serial_number = get_field('serial_number');
						$serial_number_text = get_field('serial_number_text');
						$serial_number_hint = get_field('serial_number_hint');
						
						$part_number = get_field('part_number');
						$part_number_text = get_field('part_number_text');
						$part_number_hint = get_field('part_number_hint');
						
						$stauts=get_field('stauts');
						$stauts=get_field('stauts');					
						?>     
						<?php $tradecat = wp_get_post_terms( $post->ID , 'tradingcat' ); 
						foreach ( $tradecat as $tradca ) {
							//$term_link1 = get_term_link( $appl, 'jobcat' );
							$tradeid = $tradca->term_id;
							$tradename = $tradca->name;									
							break;					
						} 
						$short_name = get_field('short_name','tradingcat_'.$tradeid);
						$trading_blue_icon = get_field('trading_blue_icon','tradingcat_'.$tradeid);
						$trading_black_icon = get_field('trading_black_icon','tradingcat_'.$tradeid);
						$trading_color = get_field('trading_color','tradingcat_'.$tradeid);
						?>
						<?php $applicationcat = wp_get_post_terms( $post->ID , 'applicationcat' ); 				
						foreach ( $applicationcat as $appterm ) {
							$appid = $appterm->term_id;
							$appname = $appterm->name;									
							break;
						}
						$application_image = get_field('application_image','applicationcat_'.$appid);
						?> 
                        <div class="listview_content">
                            <div class="listview_content_inner">
                            <?php $colo = '';
							if($stauts == 'Immediate'){
								$colo = '#199225';
							}
							if($stauts == 'At Shop'){
								$colo = '#F2A102';
							}
							if($stauts == 'Sold'){
								$colo = '#9FB2B8';
							}
							if($stauts == 'For Lease'){
								$colo = '#199225';
							}
							if($stauts == 'Leased'){
								$colo = '#9FB2B8';
							}?>
                            <div class="listview_content_top cf">                            
                                <div class="listview_col1"><?php echo $appname;?></div>
                                <div class="listview_col2"><?php if($short_name!=""){echo $short_name;} else {echo $tradename;}?></div>
                                <div class="listview_col3"><?php the_title();?></div>
                                <div class="listview_col4"><?php echo $serial_number_text;?></div>
                                <div class="listview_col5"><?php echo $part_number_text;?></div>
                                <div class="listview_col6" style="color:<?php echo $colo;?>;"><?php echo $stauts;?></div>
                                <div class="listview_col7">
                                	<div class="tradlsdfour">
                                        <div class="tradfourlft">
                                            <a href="#" class="downlomini" data-serial="<?php echo $serial_number_text;?>" data-part="<?php echo $part_number_text;?>" data-name="<?php echo $appname;?>" data-trading="<?php echo $tradename;?>" data-flight="<?php the_title();?>" data-pdft="<?php echo $pdf_file['url'];?>" <?php if($pdf_file==""){?>style="pointer-events: none;"<?php }?> >Download MiniPack</a>
                                        </div>
                                        <div class="tradfourrgt">
                                            <a href="Javascript:void(0);" class="rebut">Read More <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 4.5V12.5M12 8.5L4 8.5" stroke="#2E313F" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                                            <a href="Javascript:void(0);" class="relessbut">Read Less <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 8L4 8" stroke="#2E313F" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                                        </div>
                                        <div class="clr"></div>
                                    </div>
                                 </div>
                            </div>
                            <div class="more_trading_info cf" style=" display:block;">
                                <div class="more_condition_listview listsameheight">
                                    <div class="more_info_title"><?php echo $condition;?></div>
                                    <div class="list_conditions"><span><?php echo $condition;?></span><?php echo $condition_text;?></div>
                                </div>
                                
                                <?php if( have_rows('tag_lists') ): ?>
                                <?php $tag_title = get_field('tag_title');?>
                                <div class="more_tags_listview listsameheight">
                                    <div class="more_info_title">Availability</div>        
                                    <div class="serial_box cf"> 
                                        <?php while( have_rows('tag_lists') ): the_row(); 
        								$tag_name = get_sub_field('tag_name');
										$tag_text = get_sub_field('tag_text');
										$tag_hint = get_sub_field('tag_hint');?>
                                        <div class="tag_lione"><span><?php echo $tag_name;?></span><?php echo $tag_text;?></div>
                                        <?php endwhile;?> 
                                        <div class="clr"></div>
                                    </div>
                                </div>
                                <?php endif;?>
                                
                                <?php if( have_rows('times_cycles_list') ): ?>
                                <?php $times_cycles_title = get_field('times_cycles_title');?>
                                <div class="more_tags_listview listsameheight">
                                    <div class="more_info_title botti">Times & Cycles</div>                        
                                    <div class="serial_box botti cf">                                    
                                        <?php while( have_rows('times_cycles_list') ): the_row(); 
        								$tag_name = get_sub_field('tag_name');
										$tag_text = get_sub_field('tag_text');
										$tag_hint = get_sub_field('tag_hint');?>
                                        <div class="tag_lione"><span><?php echo $tag_name;?></span><?php echo $tag_text;?></div>
                                        <?php endwhile;?> 
    
                                        <div class="clr"></div>
                                    </div>
                                </div>
                                <?php endif;?>
                            </div>
                            </div>
                        </div>
                        <?php $flag++; endwhile; wp_reset_postdata();?>
                    </div>
                	<ul class="trading_grid_view_sec">
                    	<?php $flag=1;while ( $tradlist->have_posts() ) : $tradlist->the_post();
						//$feat_image=wp_get_attachment_url( get_post_thumbnail_id(get_the_id()));
						$stauts = get_field('stauts');
						$pdf_file = get_field('pdf_file');
						
						$condition = get_field('condition');
						$condition_text = get_field('condition_text');
						$condition_hint = get_field('condition_hint');
						
						$serial_number = get_field('serial_number');
						$serial_number_text = get_field('serial_number_text');
						$serial_number_hint = get_field('serial_number_hint');
						
						$part_number = get_field('part_number');
						$part_number_text = get_field('part_number_text');
						$part_number_hint = get_field('part_number_hint');
						
						$stauts=get_field('stauts');
						$stauts=get_field('stauts');					
						?>     
						<?php $tradecat = wp_get_post_terms( $post->ID , 'tradingcat' ); 
						foreach ( $tradecat as $tradca ) {
							//$term_link1 = get_term_link( $appl, 'jobcat' );
							$tradeid = $tradca->term_id;
							$tradename = $tradca->name;									
							break;					
						} 
						$short_name = get_field('short_name','tradingcat_'.$tradeid);
						$trading_blue_icon = get_field('trading_blue_icon','tradingcat_'.$tradeid);
						$trading_black_icon = get_field('trading_black_icon','tradingcat_'.$tradeid);
						$trading_color = get_field('trading_color','tradingcat_'.$tradeid);
						?>
						<?php $applicationcat = wp_get_post_terms( $post->ID , 'applicationcat' ); 				
						foreach ( $applicationcat as $appterm ) {
							$appid = $appterm->term_id;
							$appname = $appterm->name;									
							break;
						}
						$application_image = get_field('application_image','applicationcat_'.$appid);
						?> 
                    	<li>
                        	<div class="tradlistdiv">
                            	<div class="tradlsdone">
                                	<div class="tradsonelft"><?php echo $appname;?></div>
                                    <?php $colo = '';
									if($stauts == 'Immediate'){
										$colo = '#199225';
									}
									if($stauts == 'At Shop'){
										$colo = '#F2A102';
									}
									if($stauts == 'Sold'){
										$colo = '#9FB2B8';
									}
									if($stauts == 'For Lease'){
										$colo = '#199225';
									}
									if($stauts == 'Leased'){
										$colo = '#9FB2B8';
									}?>
                                    <div class="tradsonergt"><span class="one"><?php if($short_name!=""){echo $short_name;} else {echo $tradename;}?></span><span class="two" style="color:<?php echo $colo;?>;"><?php echo $stauts;?></span></div>
                                    <div class="clr"></div>
                                </div>
                                <div class="tradlsdtwo">
                                	<?php the_title();?>
                                </div>
                                <div class="tradlsdthre">
                                	<div class="trdthreone"><span><?php echo $serial_number;?></span><?php echo $serial_number_text;?></div>
                                    <div class="trdthretwo"><span><?php echo $part_number;?></span><?php echo $part_number_text;?></div>
                                    <div class="clr"></div>
                                    <div class="trdthretwo conditions"><span><?php echo $condition;?></span><?php echo $condition_text;?></div>
                                    <div class="clr"></div>
                                </div>
                                <div class="more_trading_info">
                                	<?php if( have_rows('tag_lists') ): ?>
                                    <?php $tag_title = get_field('tag_title');?>
									<div class="tagtitle">Availability</div>
			
                                    <div class="serial_box cf">                                    	
                                        <?php while( have_rows('tag_lists') ): the_row(); 
        								$tag_name = get_sub_field('tag_name');
										$tag_text = get_sub_field('tag_text');
										$tag_hint = get_sub_field('tag_hint');?>
                                        <div class="tag_lione"><span><?php echo $tag_name;?></span><?php echo $tag_text;?></div>
                                        <?php endwhile;?> 
                                        <div class="clr"></div>
                                    </div>
                                    <?php endif;?>
                                    
                                    <?php if( have_rows('times_cycles_list') ): ?>
                                    <?php $times_cycles_title = get_field('times_cycles_title');?>
								
									<div class="tagtitle botti">Times & Cycles</div>
								
                                    <div class="serial_box botti cf">                                    	
                                        <?php while( have_rows('times_cycles_list') ): the_row(); 
        								$tag_name = get_sub_field('tag_name');
										$tag_text = get_sub_field('tag_text');
										$tag_hint = get_sub_field('tag_hint');?>
                                        <div class="tag_lione"><span><?php echo $tag_name;?></span><?php echo $tag_text;?></div>
                                        <?php endwhile;?> 
                                        <div class="clr"></div>
                                    </div>
                                    <?php endif;?>
                                </div>
                                <div class="tradlsdfour">
                                	<div class="tradfourlft">
                                    	<a href="#" class="downlomini" data-serial="<?php echo $serial_number_text;?>" data-part="<?php echo $part_number_text;?>" data-name="<?php echo $appname;?>" data-trading="<?php echo $tradename;?>" data-flight="<?php the_title();?>" data-pdft="<?php echo $pdf_file['url'];?>" <?php if($pdf_file==""){?>style="pointer-events: none;"<?php }?> >Download MiniPack</a>
                                    </div>
                                    <div class="tradfourrgt">
                                    	<a href="Javascript:void(0);" class="rebut">Read More <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 4.5V12.5M12 8.5L4 8.5" stroke="#2E313F" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                                        <a href="Javascript:void(0);" class="relessbut">Read Less <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 8L4 8" stroke="#2E313F" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                                    </div>
                                    <div class="clr"></div>
                                </div>
                            </div>
                        </li>
                        <?php $flag++; endwhile; wp_reset_postdata();?>
                        
                    </ul>
                    <?php endif;?>
                    
                    <script type="text/javascript">
					jQuery(document).ready(function($){
						
						$('.tradfiltone').click(function (e) {	
							e.preventDefault();
							equalheight('.tradsonelft');
							equalheight('.tradlsdtwo');
							equalheight('.listsameheight');
							$('.tradfilttwo').removeClass('active');
							$(this).addClass('active');
							$('.tradbotlist').removeClass('listview');
							$('.tradbotlist').addClass('gridview');
							$('.trading_list_view_sec').hide();
							$('.listview_head').hide();
							$('.trading_grid_view_sec').show();
						});
						$('.tradfilttwo').click(function (e) {	
							e.preventDefault();
							equalheight('.tradsonelft');
							equalheight('.tradlsdtwo');
							equalheight('.listsameheight');
							$('.tradfiltone').removeClass('active');
							$(this).addClass('active');
							$('.tradbotlist').addClass('listview');
							$('.tradbotlist').removeClass('gridview');
							$('.trading_grid_view_sec').hide();
							$('.listview_head').show();
							$('.trading_list_view_sec').show();
							
						});
						
						
						$('.trading_grid_view_sec .tradfourrgt .rebut').click(function (e) {	
							$('.trading_grid_view_sec .more_trading_info').slideUp(300);
							//$('.comtradbox').removeClass('active');
							$('.tradfourrgt').removeClass('active');
							$(this).parent().parent().parent().find('.more_trading_info').slideToggle(300);
							$(this).parent().parent().parent().addClass('active');
							//$(this).parent().parent('.comtradbox').toggleClass('active');
							$(this).parent().toggleClass('active');
						});
						$('.trading_grid_view_sec .tradfourrgt .relessbut').click(function () {	
							$('.trading_grid_view_sec .more_trading_info').slideUp(300);
							//$('.comtradbox').removeClass('active');
							$('.tradlistdiv').removeClass('active');
							$('.tradfourrgt').removeClass('active');
						});
						
					
						$('.trading_list_view_sec .more_trading_info').hide();
						$('.trading_list_view_sec .tradfourrgt .rebut').click(function (e) {	
							equalheight('.listsameheight');
							setTimeout( function() {
								equalheight('.listsameheight');
							},200);
							$('.trading_list_view_sec .more_trading_info').slideUp(300);							
							$('.tradfourrgt').removeClass('active');
							$('.listview_content_inner').removeClass('active');
							$(this).parent().parent().parent().parent().parent().addClass('active');
							$(this).parent().parent().parent().parent().parent().find('.more_trading_info').slideToggle(300);
							$(this).parent().parent().parent().addClass('active');
							$(this).parent().toggleClass('active');
						});
						$('.trading_list_view_sec .tradfourrgt .relessbut').click(function () {	
							$('.trading_list_view_sec .more_trading_info').slideUp(300);
							$('.listview_content_inner').removeClass('active');
							$('.tradlistdiv').removeClass('active');
							$('.tradfourrgt').removeClass('active');
						});
						
						
						$('.tradbottop ul > li.sf-field-reset').addClass('act');
						$('.tradbottop ul > li.sf-field-taxonomy-applicationcat li').click(function () {	 
							$('.tradbottop ul > li.sf-field-taxonomy-applicationcat ul').removeClass('active');
							$('.tradbottop ul > li.sf-field-reset').addClass('removeact');
						});
						
						$('.tradbottop ul > li.sf-field-taxonomy-tradingcat li').click(function () {
							$('.tradbottop ul > li.sf-field-reset').addClass('removeact');
						});
						$('.tradbottop ul > li.sf-field-reset .search-filter-reset').click(function(){
							//window.location.reload();
							$(".appselction").hide(100);
							$(this).parent().removeClass('removeact');
						});
						
						
						$('.tradbottop ul > li.sf-field-taxonomy-applicationcat h4').click(function () {	 
							//$(this).next('ul').toggleClass('active');
							$('.tradbottop ul > li.sf-field-taxonomy-applicationcat ul').addClass('active');
							//$(this).addClass('active');
							
						});
						
						/*$('.sf-field-taxonomy-applicationcat ul li').click(function () {	 
							$('.sf-field-taxonomy-applicationcat ul').addClass('active');
						});*/
						$('.tradbottop ul > li.sf-field-taxonomy-applicationcat').click(function (e) {	
							e.stopPropagation();
						});
						
						$('.tradbottop ul > li.sf-field-taxonomy-applicationcat li').click(function () {	 
							$('.tradbottop ul > li.sf-field-taxonomy-applicationcat ul').removeClass('active');
							$('.tradbottop ul > li.sf-field-reset').addClass('removeact');
						});
						
						$('.tradbottop ul > li.sf-field-taxonomy-tradingcat li').click(function () {
							$('.tradbottop ul > li.sf-field-reset').addClass('removeact');
						});
						$('body').click(function () {	
							//console.log("up");
							$('.tradbottop ul > li.sf-field-taxonomy-applicationcat ul').removeClass('active');
							//$('.tradefilterbox ul > li.sf-field-taxonomy-applicationcat h4').removeClass('active');
						});
						
						$('.tradbottop ul > li.sf-field-taxonomy-applicationcat input[type="checkbox"]').click(function() {
							var applicationcat = [];
							$.each($(".tradbottop ul > li.sf-field-taxonomy-applicationcat ul li input:checked:checked"), function(){
								//applicationcat.push($(this).next('label').text());
								var ddd = '';
								var checkid = $(this).attr('id');
								ddd += '<span class="checkselect"><span class="checkremove" data-id='+checkid+'></span>'+$(this).next('label').text()+'</span>';
								applicationcat.push(ddd);
							});
							//console.log(applicationcat.join(" "));
							$(".appselction").html(applicationcat.join("  "));
							
						});
						
						$(".checkremove").click(function(){
							var chid = $(this).attr('data-id');
							//console.log(chid);
							//console.log('test');
							$('.tradbottop ul li.sf-field-taxonomy-applicationcat').find('ul li #'+chid).trigger('click');
						});
						
						
						equalheight('.tradsonelft');
						equalheight('.tradlsdtwo');
						equalheight('.listsameheight');
							
			
						$(window).resize(function(){
							equalheight('.tradsonelft');
							equalheight('.tradlsdtwo');	
							equalheight('.listsameheight');							
						});	
						
					});
					jQuery(window).on('load', function(){
						equalheight('.tradsonelft');
						equalheight('.tradlsdtwo');
						equalheight('.listsameheight');
					});
					</script>
                </div>
                
                <?php $contact_short_text = get_field('contact_short_text',$pid);
				$contact_button = get_field('contact_button',$pid);
				$contact_button_link = get_field('contact_button_link',$pid);
				$contact_target = get_field('contact_target',$pid);?>
                <div class="trdbotcon">
                	<?php if($contact_short_text!=""){?><p><?php echo $contact_short_text;?></p><?php }?>
                    <?php if($contact_button!=""){?><a href="<?php echo $contact_button_link;?>" target="<?php echo $contact_target;?>"><?php echo $contact_button;?> 
<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 10.5039H5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 5.5L15 10.5L10 15.5" stroke="#2E313F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a><?php }?>
                </div>
            </div>
        </div>
    </div>
    

    
</div>

<?php get_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
       
    });
</script>