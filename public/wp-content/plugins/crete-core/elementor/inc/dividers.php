<?php


/* ---------------------------------------------------------------------------
  * Dividers [crete_dividers]
  * --------------------------------------------------------------------------- */
if (!function_exists('sc_crete_dividers')) {
	function sc_crete_dividers($attr, $content = null) {
		extract(shortcode_atts(array(
			'top_divider_color' 			=> '#fff',
			'bottom_divider_color' 			=> '#fff',
			'top_divider_select' 			=> '0',
			'top_layers' 					=> '3',
			't_1_is_gradient' 				=> false,
			't_1_color' 					=> '#ffffff',
			't_1_color_2' 					=> '#ffffff',
			't_2_is_gradient' 				=> false,
			't_2_color' 					=> 'rgba(255,255,255,0.6)',
			't_2_color_2' 					=> '#ffffff',
			't_3_is_gradient' 				=> false,
			't_3_color' 					=> 'rgba(255,255,255,0.3)',
			't_3_color_2' 					=> '#ffffff',
			't_divider_in_front' 			=> false,
			't_flip_h' 						=> false,
			'top_moving_divider_color' 		=> '',
			't_custom_height' 				=> '',
			'bottom_divider_color' 			=> '#fff',
			'bottom_divider_color' 			=> '#fff',
			'bottom_divider_select' 		=> '0',
			'bottom_layers' 				=> '3',
			'b_1_is_gradient' 				=> false,
			'b_1_color' 					=> '#ffffff',
			'b_1_color_2' 					=> '#ffffff',
			'b_2_is_gradient' 				=> false,
			'b_2_color' 					=> 'rgba(255,255,255,0.6)',
			'b_2_color_2' 					=> '#ffffff',
			'b_3_is_gradient' 				=> false,
			'b_3_color' 					=> 'rgba(255,255,255,0.3)',
			'b_3_color_2' 					=> '#ffffff',
			'b_divider_in_front' 			=> false,
			'b_flip_h' 						=> false,
			'bottom_moving_divider_color' 	=> '',
			'b_custom_height' 				=> '',

		), $attr));

		$el_id = 'crete-accordion-' . rand(1, 1000000);
		$output = '';
		
	
		if ($top_divider_select && $top_divider_select != '' && $top_divider_select != '0' && $top_divider_select != 'dynamic') {
			if (!empty($attr['__globals__'])) {
				$colors = array(
					't_1_color',
					't_1_color_2',
					't_2_color',
					't_2_color_2',
					't_3_color',
					't_3_color_2',
				);
				foreach ($colors as $key => $value) {
					if (!empty($attr['__globals__'][$value])) {
						$$value = str_replace('globals/colors?id=', "", $attr['__globals__'][$value]);
						$$value = 'var(--e-global-color-' . $$value . ')';
					}
				}
			}
			$t_divider_opts = array(
				'd_divider_select'			=> $top_divider_select,
				'd_layers'					=> $top_layers,
				'd_1_is_gradient'			=> $t_1_is_gradient,
				'd_1_color'					=> $t_1_color,
				'd_1_color_2'				=> $t_1_color_2,
				'd_2_is_gradient'			=> $t_2_is_gradient,
				'd_2_color'					=> $t_2_color,
				'd_2_color_2'				=> $t_2_color_2,
				'd_3_is_gradient'			=> $t_3_is_gradient,
				'd_3_color'					=> $t_3_color,
				'd_3_color_2'				=> $t_3_color_2,
				'd_high_index'				=> $t_divider_in_front,
				'd_flip_h'					=> $t_flip_h,
				'is_element'				=> true,
			);
			$c_height = false;
			if (!empty($t_custom_height)) {
				$c_height = $t_custom_height;
			}
			$output .= crete_get_divider($top_divider_select, $top_divider_color, 'top', $el_id, $top_moving_divider_color, $t_divider_opts, $c_height);
		}

		if ($top_divider_select && $top_divider_select == 'dynamic') {
			$t_divider_opts = array(
				'd_divider_select'			=> $top_divider_select,
				'd_high_index'				=> $t_divider_in_front,
				'd_flip_h'					=> $t_flip_h,
				'is_element'					=> true,
			);
			$output .= crete_get_divider($top_divider_select, $top_divider_color, 'top', $el_id, $top_moving_divider_color, $t_divider_opts);
		}

		if ($bottom_divider_select && $bottom_divider_select != '' && $bottom_divider_select != '0' && $bottom_divider_select != 'dynamic') {
			if (!empty($attr['__globals__'])) {
				$colors = array(
					'b_1_color',
					'b_1_color_2',
					'b_2_color',
					'b_2_color_2',
					'b_3_color',
					'b_3_color_2',
				);
				foreach ($colors as $key => $value) {
					if (!empty($attr['__globals__'][$value])) {
						$$value = str_replace('globals/colors?id=', "", $attr['__globals__'][$value]);
						$$value = 'var(--e-global-color-' . $$value . ')';
					}
				}
			}
			$b_divider_opts = array(
				'd_divider_select'			=> $bottom_divider_select,
				'd_layers'					=> $bottom_layers,
				'd_1_is_gradient'			=> $b_1_is_gradient,
				'd_1_color'					=> $b_1_color,
				'd_1_color_2'				=> $b_1_color_2,
				'd_2_is_gradient'			=> $b_2_is_gradient,
				'd_2_color'					=> $b_2_color,
				'd_2_color_2'				=> $b_2_color_2,
				'd_3_is_gradient'			=> $b_3_is_gradient,
				'd_3_color'					=> $b_3_color,
				'd_3_color_2'				=> $b_3_color_2,
				'd_high_index'				=> $b_divider_in_front,
				'd_flip_h'					=> $b_flip_h,
				'is_element'				=> true,
			);
			$c_height = false;
			if (!empty($b_custom_height)) {
				$c_height = $b_custom_height;
			}
			$output .= crete_get_divider($bottom_divider_select, $bottom_divider_color, 'bottom', $el_id, $bottom_moving_divider_color, $b_divider_opts, $c_height);
		}

		if ($bottom_divider_select && $bottom_divider_select == 'dynamic') {
			$b_divider_opts = array(
				'd_divider_select'			=> $bottom_divider_select,
				'd_high_index'				=> $b_divider_in_front,
				'd_flip_h'					=> $b_flip_h,
				'is_element'					=> true,
			);
			$output .= crete_get_divider($bottom_divider_select, $bottom_divider_color, 'bottom', $el_id, $bottom_moving_divider_color, $b_divider_opts);
		}

		return $output;
	}
}

add_shortcode('crete_dividers', 'sc_crete_dividers');