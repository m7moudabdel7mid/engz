<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
	
	/**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(){
        return 'slug';
    }

	public static function get_slug(){
        $last_url = self::get()->last();

		if($last_url) {
			$last_slug = str_split($last_url->slug);
			$new_slug = array();
			while(sizeof($last_slug)){
				$digit = array_shift($last_slug);
				if($digit == 9) {
					$new_digit = 'a';
					$new_slug[] = $new_digit;
					// if the incremented digit == 9 then the previous digit must be incremented.
					// in case of there is no previous digit then we must add a new digit.
					// meaning that we will increase the characters count by one.
					$add_new_digit = true;
				} else {
					$add_new_digit = false;
					if ($digit == 'z'){
						$new_digit = 0;
					} else {
						$new_digit = ++$digit;
					}
					$new_slug[] = $new_digit;
					break;
				}
			}
			if(sizeof($last_slug) == 0 && isset($add_new_digit) && $add_new_digit) {
				$new_slug[] = 'a';
			}
			$new_slug = array_merge($new_slug, $last_slug);
			
			$slug = '';
			foreach(array_reverse($new_slug) as $digit) {
				$slug .= $digit;
			}
			return $slug;
		} else {
			return 'a';
		}
    }
		
}
