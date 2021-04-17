<?php 
namespace IGK\Models;
 
use IGKUsersController;

/** 
 */
class Users extends ModelBase {
	/** 
	 */
	protected $table = "%prefix%users";

	protected $controller = IGKUsersController::class;

	public function fullname(){
		return implode(" ", array_filter([ strtoupper($this->clLastName), ucfirst($this->clFirstName)]));
	}
}
