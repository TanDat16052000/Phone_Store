<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereIn(string $string, array $array)
 */
class Promotions extends Model
{
    use HasFactory;
    protected $table="khuyenmai";
}