<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use Notifiable;

    // Specify the table associated with the model
    protected $table = 'employee';

    // Specify the primary key of the table
    protected $primaryKey = 'id';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'designation',
        'firstname',
        'lastname',
        'username',
        'password',
    ];

    // Timestamps are enabled by default, but you can disable them if not needed
    public $timestamps = true;

    // The authentication guard for the model
    protected $guard = 'employee';

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Validate the user's credentials.
     *
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials($credentials)
    {
        $plain = $credentials['password'];
        return \Hash::check($plain, $this->getAuthPassword());
    }
}
