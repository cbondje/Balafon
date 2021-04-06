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
}
