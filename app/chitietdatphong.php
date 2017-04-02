<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietdatphong extends Model
{
   	public $timestamps = false;
    public $table = 'chitiet_datphong';
    protected $primaryKey = 'mact';
    protected $fillable = [
    	'mact',
    	'ngaydat',
    	'ngayden',
    	'ngaydi',
    	'songuoilon',
    	'sotreem',
    	'xacnhan',
    	'malp',
    	'maphong',
    	'makh',
    	'maql'
    ];
}
