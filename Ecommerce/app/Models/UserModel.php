<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Entities\User;

class UserModel extends BaseModel
{
	protected $DBGroup              = 'default';
	protected $table                = 'users';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = User::class;
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'name',
		'email',
		'type',
		'password',
		'remember_token',
		'is_active',
		'last_login_at',
		'email_verified_at',
		'login_count'
	];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'email' => 'required'
	];
	protected $validationMessages   = [
		'email' => [
			'required' => 'Informer o email'
		]
	];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function getByEmail(string $email) {
		return $this->where('email', $email)->first();
	}
}
