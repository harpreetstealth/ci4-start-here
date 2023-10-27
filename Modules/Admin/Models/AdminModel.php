<?php namespace Admin\Models;

class AdminModel extends \CodeIgniter\Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'admin_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'admin_username',
        'admin_email',
        'admin_pwd',
        'admin_status'
    ];
}
