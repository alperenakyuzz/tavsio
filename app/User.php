<?php namespace App;

use App\Models\Cms\Post\Post;
use App\Tavsio\Tavsio;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Cmgmyr\Messenger\Traits\Messagable;
use Illuminate\Support\Facades\Auth;
use Overtrue\LaravelFollow\Followable;


/**
 * Class User
 * @package App
 * @property int id
 */
class User extends Authenticatable
{
   use Notifiable;
    use Messagable;
    use Followable;


    /***
     * User Follow System Functions
     */

    /**
     * $user1->follow($user2);
    $user1->unfollow($user2);
    $user1->toggleFollow($user2);
    $user1->acceptFollowRequestFrom($user2);
    $user1->rejectFollowRequestFrom($user2);

    $user1->isFollowing($user2);
    $user2->isFollowdBy($user1);
    $user2->hasRequestedToFollow($user1);

    $user1->areFollowingEachOther($user2);
     */
   const USER_ADMIN = 1;
   const USER_MODERATOR = 2;
   const USER_USER = 3;

   const USER_STATUS_ACTIVE = 1;
   const USER_STATUS_WAITING = 2;
   const USER_STATUS_DELETE = 3;
   const USER_STATUS_NOT_APPROVED = 4;
   const USER_STATUS_FROZEN = 5;

   const GENDER_REVERSE = [
       1 => 'Bayan',
       2 => 'Erkek'
   ];

   const STATUS_TABLE_DESC = [
       1 => 'Aktif',
       2 => 'Onay Bekliyor',
       3 => 'Silinmiş',
       4 => 'Red edildi',
       5 => 'Dondurulmuş'
   ];

   protected $table = 'users';

   /**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
   protected $fillable = [
	  'name', 'email', 'password',
   ];

   /**
	* The attributes that should be hidden for arrays.
	*
	* @var array
	*/
   protected $hidden = [
	  'password', 'remember_token',
   ];

   /**
	* The attributes that should be cast to native types.
	*
	* @var array
	*/
   protected $casts = [
	  'email_verified_at' => 'datetime',
   ];

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['posts'];


    //==================================================================================================================
   // Global METODS
   //==================================================================================================================


    /***
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public static function unfolloweds($user, int $limit = 20) {
        $followings = $user->followings->pluck('id');
        return User::whereNotIn('id', $followings) // exclude already followed
        ->where('id', '<>', $user->id) // and the user himself
        ->take($limit)->get();
    }

   /***
	* @param $request
	* @param int $type
	* @return mixed
	*/
   public static function getDatatable($request, $type = User::USER_PARENTS)
   {
	  $user = User::select([ 'id', 'uuid', 'created_at', 'photo', 'firstname', 'lastname', 'email', 'mobile', 'email_valid', 'mobile_valid', 'statusid', 'last_login', 'point', 'change_city' ])
		 ->where('typeid', $type);

	  $removeUserGet = true;
	  if(isset($request[ 'status' ])) {
		 $user = $user->where('statusid', $request[ 'status' ]);
		 if($request[ 'status' ] == User::USER_STATUS_DELETE) {
			$removeUserGet = false;
		 }
	  }

	  if($removeUserGet) {
		 $user = $user->where('statusid', '!=', User::USER_STATUS_DELETE);
	  }

	  if(isset($request[ 'date' ])) {
		 $date = explode('|', $request[ 'date' ]);

		 $startDate = date('Y-m-d 00:00:00', strtotime($date[ 0 ]));
		 $startEnd = date('Y-m-d H:i:s', strtotime($date[ 1 ]));

		 $user = $user->where('created_at', '>=', $startDate)
			->where('created_at', '<=', $startEnd);
	  }

	  return $user;
   }

   // ===============================================================================================
   // | FRONTEND METODS
   // ===============================================================================================
}
