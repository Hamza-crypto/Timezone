<?php

add_shortcode('get_timezone', 'get_timezone_func');
function get_timezone_func() {
	global $post;
	$tz = get_field('timezone', get_the_ID());
	echo $tz;
}

add_shortcode('get_start_time', 'get_start_time_func');
function get_start_time_func() {
	global $post;
	$tz = get_field('timezone', get_the_ID());
	$start_time = get_field('start_time', get_the_ID());

	$date = new DateTime($start_time, new DateTimeZone($tz));

	$date->setTimezone(new DateTimeZone('Asia/Karachi'));
	echo $date->format('h:i a') . "\n";
}

add_shortcode('get_end_time', 'get_end_time_func');
function get_end_time_func() {
	global $post;
	$tz = get_field('timezone', get_the_ID());
	$end_time = get_field('end_time', get_the_ID());

	$date = new DateTime($end_time, new DateTimeZone($tz));

	$date->setTimezone(new DateTimeZone('Asia/Karachi'));
	echo $date->format('h:i a') . "\n";
}