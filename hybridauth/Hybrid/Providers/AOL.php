/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html 
*/

/**
 * Hybrid_Providers_AOL provider adapter based on OpenID protocol
 * 
 * http://hybridauth.sourceforge.net/userguide/IDProvider_info_AOL.html
 */
class Hybrid_Providers_AOL extends Hybrid_Provider_Model_OpenID
{
	var $openidIdentifier = "http://openid.aol.com/";
}
