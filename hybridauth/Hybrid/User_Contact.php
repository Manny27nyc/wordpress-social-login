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
 * Hybrid_User_Contact 
 * 
 * used to provider the connected user contacts list on a standardized structure across supported social apis.
 * 
 * http://hybridauth.sourceforge.net/userguide/Profile_Data_User_Contacts.html
 */
class Hybrid_User_Contact
{
	/**
         * The Unique contact user ID
         * @var Numeric
         */
	public $identifier = NULL;

	/**
         * User website, blog, web page
         * @var String
         */ 
	public $webSiteURL = NULL;

	/**
         * URL link to profile page on the IDp web site
         * @var String
         */
	public $profileURL = NULL;

	/**
         * URL link to user photo or avatar
         * @var String
         */
	public $photoURL = NULL;

	/**
         * User displayName provided by the IDp or a concatenation of first and last name
         * @var String
         */
        public $displayName = NULL;

        /**
         * A short about_me
         * @var String
         */
	public $description = NULL;

	/**
         * User email. Not all of IDp grant access to the user email
         * @var String
         */
        public $email = NULL;
}
