<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DIP extends Model
{
     protected $table = 'dips';

     protected $fillable = [
					        'name',	
					        'act_type',
					        'act_others',
	                        'obj',
	                        'outcome',
	                        'ind_act',
	                        'ind_no',
	                        'police_str',
	                        'imp_date',
	                        'imp_area',
	                        'eb_dis' ,
	                        'eb_female',
	                        'eb_male',
	                        'eb_total',
	                        'eb_dis_grp' ,
	                        'pb_type' ,
	                        'pb_travel',
	                        'pb_accom',
	                        'pb_program',
	                        'pb_total',
	                        'est_ben',
	                        'p_budget',
	                        'target_grp',
	                        'tg_others',
	                        'i_partners',
	                        'c_partners',
	                        'r_persons',
	                        'res_p',
	                        'ct_name',
	                        'ct_pos',
	                        'ct_cell',
   						 ];


}
