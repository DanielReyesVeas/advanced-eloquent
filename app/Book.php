<?php

namespace AdvancedELOQUENT;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use SoftDeletes;
}
