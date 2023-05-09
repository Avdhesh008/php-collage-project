<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $fillable = [
        'email_empID','assign_to_salesTl','sales_TL_ID','sales_id','research_TL_ID','feedback','Assign_to','assign_to_researchTL','assign_to_research','client_name','client_email','client_mobile','report_title','client_company','client_region','client_country','client_linkedin','description','brief_description','client_requirements','raise_to_research','sales_comments','client_status','followup_date','pipline_reason','ticket_size','mode_of_payment','dispatch','dispatch_date','lost_reason'
    ];
   
}
