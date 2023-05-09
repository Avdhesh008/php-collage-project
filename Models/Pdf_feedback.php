<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pdf_feedback extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $fillable = [
        'client_id','salesmen_id','researcher_id','feedback_status','Description'
    ];

   
}
