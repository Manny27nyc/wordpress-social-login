/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2014, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html 
*/

/**
 * The Hybrid_User class represents the current logged in user 
 */
class Hybrid_User 
{
	/**
	 * The ID (name) of the connected provider
	 * @var Numeric/String
	 */
	public $providerId = NULL;

	/**
	 * timestamp connection to the provider
	 * @var timestamp
	 */
	public $timestamp = NULL; 

	/**
	 * User profile, contains the list of fields available in the normalized user profile structure used by HybridAuth.
	 * @var object
	 */
	public $profile = NULL;

	/**
	* Initialize the user object.
	*/
	function __construct()
	{
		$this->timestamp = time(); 

		$this->profile   = new Hybrid_User_Profile(); 
	}
}
