<?php 
 namespace App;
 
/**
 * App/PermissionRole *
 *
 * @property integer $permission_id
 * @property integer $role_id
 * @method static \Illuminate\Database\Query\Builder|\App\PermissionRole wherePermissionId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PermissionRole whereRoleId($value)
 * @mixin \Eloquent
 */
class PermissionRole extends \Eloquent 
{
    public $select ;
    
        
    
    /**
     * The database table used by the model.
     *
     * @var  string
     */
    protected $table = 'permission_role';

      /**
     * Indicates if the model should be timestamped.
     *
     * @var  bool
     */
    
    public $timestamps = false;   
    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var  array
     */
    protected $fillable = [
     			'permission_id',
			'role_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var  array
     */
    protected $hidden = [ ];
   
    
    public function getAll($col= ['*']){
      $this->select =   $this->select($col);
     	$this->select->leftJoin('permissions','permissions.id','permission_role.permission_id');
	$this->select->leftJoin('roles','roles.id','permission_role.role_id');
      return $this->select;
    }
    
    public function getById($id,$col= ['*']){
      $this->select =   $this->select($col);
     	$this->select->leftJoin('permissions','permissions.id','permission_role.permission_id');
	$this->select->leftJoin('roles','roles.id','permission_role.role_id');
      $this->select->where($this->getQualifiedKeyName(),$id);
      return $this->select;
    }
    
}
