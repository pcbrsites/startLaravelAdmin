<?php 
 namespace App;
 
/**
 * App/RoleUser *
 *
 * @property integer $role_id
 * @property integer $user_id
 * @method static \Illuminate\Database\Query\Builder|\App\RoleUser whereRoleId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\RoleUser whereUserId($value)
 * @mixin \Eloquent
 */
class RoleUser extends \Eloquent 
{
    public $select ;
    
        
    
    /**
     * The database table used by the model.
     *
     * @var  string
     */
    protected $table = 'role_user';

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
     			'role_id',
			'user_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var  array
     */
    protected $hidden = [ ];
   
    
    public function getAll($col= ['*']){
      $this->select =   $this->select($col);
     	$this->select->leftJoin('roles','roles.id','role_user.role_id');
	$this->select->leftJoin('users','users.id','role_user.user_id');
      return $this->select;
    }
    
    public function getById($id,$col= ['*']){
      $this->select =   $this->select($col);
     	$this->select->leftJoin('roles','roles.id','role_user.role_id');
	$this->select->leftJoin('users','users.id','role_user.user_id');
      $this->select->where($this->getQualifiedKeyName(),$id);
      return $this->select;
    }
    
}
