<?php

namespace App\Http\Controllers;

use PDF;
use App;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Educations;
use App\Models\Coursetype;
use App\Models\Degreename;
use App\Models\Coursename;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Portfolio;
use ZipArchive;

class PdfController extends Controller
{
    public function index($idd) 
    {
       
        $ex=explode(",",$idd);
       
        if(!empty($ex[1]))
        {
                $path='storage/app/public/download/';
                $dir =scandir($path);
                foreach($dir as $key=>$file)
                {
                if($key>1)
                {
                    unlink($path.$dir[$key]);
                }
                }
                foreach($ex as $id)
                {
                    $users=User::find($id);
                        $pdf = App::make('dompdf.wrapper');
                        $pdf->loadHTML($this->resume($id));
                        $pdf->stream();
                         $pdf->save($path.str_replace(' ','',$users->name).'.pdf');
                     //$pdf->download(str_replace(' ','',$users->name).'.pdf');
                }
                ////////////////////////////////////
                $zip = new ZipArchive();

                $DelFilePath=date('d_m_Y').'_'.(count(explode(",",$idd))).".zip";
               

                if(file_exists($path.$DelFilePath)) {

                unlink ($path.$DelFilePath); 

                }
                if ($zip->open($path.$DelFilePath, ZIPARCHIVE::CREATE) != TRUE) 
                {
                    die ("Could not open archive");
                }
                $dir =scandir($path);
                foreach($dir as $key=>$file)
                {
                    
                    if($key>1)
                    {
                        $zip->addFile($path.$dir[$key],$dir[$key]);
                        ///unlink($path.$dir[$key]);
                   }
                    
                }
                $zip->close(); 
                foreach($dir as $key=>$file)
                {
                    if($key>1)
                    {
                        unlink($path.$dir[$key]);
                   }
                }
                    $file_name = $DelFilePath;
                    $file_url =url($path).'/'.$file_name;
                    return $file_url;

                //////////////////////////////
        }
        else{
            
        $users=User::find($ex[0]);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($this->resume($ex[0]));
        $pdf->stream();
        return $pdf->download(str_replace(' ','',$users->name).'.pdf');

        }
        
    }

    public function resume($id)
    {
        $users=User::find($id);      
      
        $educationdata=array();
        $user_educa=Educations::where('user_id',$users->id)->orderBy('ord', 'DESC')->get();
        foreach($user_educa as $eduss)
        {
            $degname=Degreename::find($eduss->degree_name);
            $Cousname=Coursename::find($eduss->coursename);
            if(isset($eduss->coursetype)&&$eduss->coursetype!='')
            {
                $Coursetype=Coursetype::find($eduss->coursetype);
                
            }
            $eduss->d_name=$degname->degreename;
            $eduss->c_name=$Cousname->coursename;
            $eduss->c_type=isset($Coursetype->coursetype)&&$Coursetype->coursetype!=''?$Coursetype->coursetype:'';
            
            array_push($educationdata,$eduss);
        }

        $user_experi=Experience::where('user_id',$users->id)->get();
        $user_skill=Skill::where('user_id',$users->id)->get();
        $user_port=Portfolio::where('user_id',$users->id)->get();
        
        $users->education=$educationdata;   
        $users->exper=$user_experi;
        $users->skill=$user_skill;
        $users->portfolio=$user_port;

           $html='';
           $html.='<!DOCTYPE html><html lang="en"><head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Document</title> <style>.container{max-width: 700px; background: #fff; margin: 0px auto 0px; box-shadow: 1px 1px 20px #DAD7D7; border-radius: 3px; padding: 40px; margin-top: 50px;}.header{margin-bottom: 30px;}.full-name{font-size: 35px; text-transform: uppercase; margin-bottom: 10px; color: #00b0f1;}.first-name{font-weight: 700;}.contact-info{margin-bottom: 20px; max-width: 480px;}.contact-info.extrainfo{margin-bottom: 8px;}.email,.address, .phone{color: #999; font-weight: 300;}.separator{height: 10px; display: inline-block; border-left: 2px solid #999; margin: 0px 10px;}.position{font-weight: bold; display: inline-block; margin-right: 10px; text-decoration: underline;}.details{line-height: 20px;}.section{margin-bottom: 40px;}.section:last-of-type{margin-bottom: 0px;}.section__title{letter-spacing: 2px; color: #00b0f1; font-weight: bold; margin-bottom: 10px; text-transform: uppercase;}.section__list-item{margin-bottom: 40px;}.section__list-item.extra{margin-bottom: 10px;}.section__list-item:last-of-type{margin-bottom: 0;}.left, .right{vertical-align: top; display: inline-block;}.left{width: 60%;}.right{text-align: right; width: 39%;}.name{font-weight: bold;}a{text-decoration: none; color: #000; font-style: italic;}a:hover{text-decoration: underline; color: #000;}.skills__item{margin-bottom: 10px;}input{display: none;}label{display: inline-block; width: 20px; height: 20px; background: #C3DEF3; border-radius: 20px; margin-right: 3px;}input:checked+label{background: #79A9CE;}.profile_image img{width: 180px; height: 180px;}.col-sm-4{margin-left: 480px; margin-top: -190px; margin-right: -30px;}.about{margin-top: 10px;}</style></head><body> <div class="container">';

           $html.='<div class="header"> <div class="row"><div class="col-sm-8"><div class="full-name"> <span class="first-name">'.$users->name.'</span> </div><div class="contact-info extrainfo"> <span class="email">Email: </span> <span class="email-val">'.$users->email.'</span><span class="separator"></span> <span class="phone">Phone: </span> <span class="phone-val">'.$users->mobile.'</span> </div><div class="contact-info"> <span class="address">Address:</span> <span class="address-val">'.$users->address.'</span> </div></div><div class="col-sm-4"><div class="profile_image"><img src="'.url("storage/app/public/".$users->photo).'" alt="profile_image"></div></div></div><div class="about"> <span class="position">'.$users->designation.':-</span> <span class="desc">'.$users->about_me.'</span> </div></div>';
           $html.='<div class="details">';
           $html.=' <div class="section"><div class="section__title">Experience</div><div class="section__list">';
           foreach($users->exper as $expeVal)
           {
            $html.='<div class="section__list-item"> <div class="left"> <div class="name">Company Name: '.$expeVal->company.'</div><div class="addr">Start Date: '.$expeVal->join_date.'</div><div class="addr">End Date: '.$expeVal->end_date.'</div><div class="addr">Location: '.$expeVal->location.'</div><div class="duration">About Company: '.$expeVal->about_company.'</div></div><br><br><hr> </div>';
           }
           $html.='</div></div>';
           $html.='<div class="section"><div class="section__title">Education</div><div class="section__list">';
           foreach($users->education as $educVal) 
           { 
            $html.='<div class="section__list-item"> <div class="left"> <div class="name">'.$educVal->d_name.'</div><div class="addr">'.$educVal->c_name.'-'.$educVal->c_type.'/'.$educVal->percent.'%</div><div class="duration">'.$educVal->institute_name.'</div></div></div>';
           }
           $html.='</div></div>';
           $html.='<div class="section"><div class="section__title">Portfolio</div><div class="section__list">';
           foreach($users->portfolio as $portVal)
           {
            $html.='<div class="section__list-item"> <div class="name">'.$portVal->project_name.'</div><div class="name">Start Date: '.$portVal->start.'</div><div class="name">End Date: '.$portVal->end.'</div><div class="text">'.$portVal->pro_dis.'</div></div>';
           }
           $html.='</div></div>';
           $html.='<div class="section"><div class="section__title">Skills</div><div class="skills">';
           foreach($users->skill as $skillVal) 
           {
            $html.='<div class="skills__item"> <div class="left"> <div class="name"> '.$skillVal->skill.' </div></div></div>';
           }
           $html.='</div></div>';
           $html.='<div class="section"><div class="section__title">Personal Details</div><div class="section__list"><div class="section__list-item extra"><div class="left"><div class="name">Experience</div></div><div class="right"><div class="name">'.($users->experience.' '.$users->experience!=''?($users->experience>1?'Years':'Year'):'').'</div></div></div><div class="section__list-item extra"><div class="left"><div class="name">Age</div></div><div class="right"> <div class="name">'.$users->age.' Years</div></div></div><div class="section__list-item extra"><div class="left"><div class="name">Current Salary(INR)</div></div><div class="right"><div class="name">'.$users->current_salary.'</div></div></div><div class="section__list-item extra"> <div class="left"><div class="name">Expected Salary(INR)</div></div><div class="right"><div class="name">'.$users->demand.'</div></div></div><div class="section__list-item extra"><div class="left"><div class="name">Education Levels</div></div><div class="right"> <div class="name">'.$users->education_level.'</div></div></div></div></div>';
           $html.='</div></div></div></body></html>';
           
           return $html;
    }
}




