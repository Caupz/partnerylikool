<?php

namespace app\models;

use app\components\ActiveRecord;

class Teacher extends ActiveRecord {
	
	public static function tableName() {
		return "teacher";
	}
	
	public function rules(){
		return[
			[['firstname', 'lastname'], ["string"]],
			[['email'], ['email']],
			[['id'], ["integer"]],
			[['created_at'], ["created-datetime"]],
			[['created_by'], ["auto-user-id"]]
		];
	}
}

?>