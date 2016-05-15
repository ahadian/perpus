<?php

function bootstrap_pagination()
{
	$config['full_tag_open'] 	= '<div class="pagination"><ul>';
	$config['full_tag_close'] 	= '</ul></div>';
	$config['cur_tag_open'] 	= '<li class="active"><a>';
	$config['cur_tag_close'] 	= '</a></li>';
	$config['num_tag_open'] 	= '<li>';
	$config['num_tag_close'] 	= '</li>';
	$config['next_tag_open'] 	= '<li>';
	$config['next_tag_close']	= '</li>';
	$config['prev_tag_open'] 	= '<li>';
	$config['prev_tag_close'] 	= '</li>';
	
	$config['last_tag_open'] 	= '<li>';
	$config['last_tag_close'] 	= '</li>';
	$config['first_tag_open'] 	= '<li>';
	$config['first_tag_close'] 	= '</li>';
	
	return $config;
}