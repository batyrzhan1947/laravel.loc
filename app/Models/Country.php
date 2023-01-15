<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * @package App
 * @mixin Builder
 */

class Country extends Model
{
  protected $table = 'country';
}
