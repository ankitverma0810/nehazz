<?php
App::uses('Helper', 'View');

class AppHelper extends Helper {
	public $helpers = array('Session', 'Html');
	
	public function user( $key ) {
		$user = $this->Session->read( 'Auth.User' );
		if(isset( $user[$key]) ) {
			return $user[$key];
		}
		return false;
	}

	public function beautifulDate( $date = null, $time = false ) {
        if( $time ) {
            if( is_int( $date ) ) return date( 'M d, Y \a\t H:i:s ', $date );
            return date( 'M d, Y \a\t H:i:s ', strtotime( $date ) );
        } else {
            if( is_int( $date ) ) return date( 'M d, Y', $date );
            else return date( 'M d, Y', strtotime( $date ) );
        }
    }
}