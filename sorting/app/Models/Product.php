<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Product extends Model
{
	use Sortable;


    protected $fillable = [ 'name', 'details' ];


	public $sortable = ['id', 'name', 'details', 'created_at', 'updated_at'];
}