<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Appearance extends Model
{

  protected $fillable = ['companyimage','phone_number','address', 'open_hours','facebook','instagram','youtube','tiktok','daraj','email','missiontitle','missiondescription','popuptitle','popuptext','whyus','image','title','description','popimage','gimage',

'title1','offer1','o1image','title2','offer2','o2image','title3','offer3','o3image','title4','offer4','o4image','title5','offer5','o5image', 'poplink','ad1',
'ad2','ad3', 'ad1link','ad2link','ad3link', 'customone', 'customtwo', 'customthree', 'customfour', 'abannerimage', 'teambannerimage',
'archivebannerimage', 'contactbannerimage', 'mediacoveragebannerimage', 'sponsorbannerimage','mtitle','votinglink','sponsordescription','sponsor','statustwo','sponsortwo','bannervideo','popupimage','popupstatus'

];

    use HasFactory;
}
