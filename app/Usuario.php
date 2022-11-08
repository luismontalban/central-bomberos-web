<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;



class Usuario extends Model implements AuthenticatableContract
{
   
    use Authenticatable;
    
    
    
    protected $table = 'usuario';
  
   
    protected $fillable = [
        'rut', 'password',
    ];
    
    
    
      protected $hidden = [
        'password', 'remember_token',
    ];
      
      
  
      
   }
    
  

