<?php

namespace Outsmartit\Failedlogins;

use Illuminate\Database\Eloquent\Model;

class FailedLoginAttempt extends Model
{
    //
    protected $fillable = ['user_id', 'email_address', 'ip_address'];
}
