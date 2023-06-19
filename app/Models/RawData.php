<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawData extends Model
{
    use HasFactory;
    protected $table = 'raw_datas';
    protected $fillable = [
        'analysis_id',

        // micro
        'micr1_hpc_plate_a',
        'micr1_hpc_plate_b',
        'micr1_hpc_average',
        'micr1_hpc_difference',
        'micr1_hpc_final_result',
        'micr1_hpc_remarks',
        'micr2_tc_24',
        'micr2_tc_48',
        'micr2_tc_final_result',
        'micr2_tc_remarks',
        'micr3_lauryl_24',
        'micr3_lauryl_48',
        'micr3_brillant_24',
        'micr3_brillant_48',
        'micr3_final_result',
        'micr3_remarks',
        'micr4_color_of_the_sample',
        'micr4_fluorescence',
        'micr4_final_result',

        // chem
        'chem1_instrument_reading_1',
        'chem1_instrument_reading_2',
        'chem1_instrument_reading_3',
        'chem1_average_instrument_reading',
        'chem1_final_result',
        'chem1_final_result_remarks',
        'chem2_instrument_reading_1',
        'chem2_instrument_reading_2',
        'chem2_instrument_reading_3',
        'chem2_average_instrument_reading',
        'chem2_final_result',
        'chem2_final_result_remarks',
        'chem3_initial_wt_of_evaporating_dish_replicate_1',
        'chem3_final_wt_of_evaporating_dish_replicate_1',
        'chem3_wt_of_residue_replicate_1',
        'chem3_initial_wt_of_evaporating_dish_replicate_2',
        'chem3_final_wt_of_evaporating_dish_replicate_2',
        'chem3_wt_of_residue_replicate_2',
        'chem3_average_wt_of_residue',
        'chem3_final_result',
        'chem3_final_result_remarks',
        'chem4_instrument_reading',
        'chem4_final_result',
        'chem4_final_result_remarks',
        'chem5_instrument_reading_1',
        'chem5_instrument_reading_2',
        'chem5_instrument_reading_3',
        'chem5_average_instrument_reading',
        'chem5_final_result',
        'chem5_final_result_remarks',
        'chem6_instrument_reading_1',
        'chem6_instrument_reading_2',
        'chem6_instrument_reading_3',
        'chem6_average_instrument_reading',
        'chem6_final_result',
        'chem6_final_result_remarks',
        'chem7_instrument_reading_1',
        'chem7_instrument_reading_2',
        'chem7_instrument_reading_3',
        'chem7_average_instrument_reading',
        'chem7_final_result',
        'chem7_final_result_remarks',
        'chem9_instrument_reading_1',
        'chem9_instrument_reading_2',
        'chem9_instrument_reading_3',
        'chem9_average_instrument_reading',
        'chem9_final_result',
        'chem9_final_result_remarks',
        'chem10_instrument_reading_1',
        'chem10_instrument_reading_2',
        'chem10_instrument_reading_3',
        'chem10_average_instrument_reading',
        'chem10_final_result',
        'chem10_final_result_remarks',

        // phys
        'phys1_observation',
        'phys1_final_result',
        'phys1_final_result_remarks',
        'phys2_observation',
        'phys2_final_result',
        'phys2_final_result_remarks',
        'phys3_concentration_of_comparable_color_standard',
        'phys3_final_result',
        'phys3_final_result_remarks',
        'phys4_instrument_reading_1',
        'phys4_instrument_reading_2',
        'phys4_instrument_reading_3',
        'phys4_average_instrument_reading',
        'phys4_final_result',
        'phys4_final_result_remarks',
    ];

}