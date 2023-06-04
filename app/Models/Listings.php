<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    use HasFactory;
    public static function all($columns = ['*'])
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Posuere dicam deseruisse egestas commune. Tota mutat referrentur quaestio sit expetenda pro platea. Semper nulla platonem neque dicat alienum. Pericula postea similique singulis falli conclusionemque voluptatibus utroque dictum. Nulla suscipit dictum solet facilis vix his verear eleifend iaculis. Delenit agam intellegebat litora dictumst consul integer percipit. Mentitum consequat tale varius posse fastidii. Omnesque singulis dolorum alienum alia lectus doctus amet. Minim mi graece egestas aliquid. Porro aliquip massa in nonumy deseruisse at. Semper deserunt mauris tempor dui melius ridiculus utroque. Mucius fabulas prodesset postulant nisl primis detraxit finibus potenti. Imperdiet vivamus iuvaret saperet oratio pellentesque commodo eu viderer urna. Dolor posse tortor interdum convallis brute verterem. Suas cras platonem mazim persequeris consul tacimates usu aeque audire. Pertinax conclusionemque tractatos sadipscing reformidans maximus. Salutatus nostra appetere adolescens possim egestas. Ridiculus possit quam delenit dolorum his docendi numquam. Iudicabit sumo a venenatis placerat intellegat. Vitae sapien his fermentum sit ultrices esse prompta dicant. Audire reprehendunt te ad tortor detraxit. Aperiri eget postulant mi errem perpetua sumo quas elitr. Meliore nam docendi eum curae. Litora turpis luptatum dictumst conclusionemque docendi eu euripidis donec integer. Luctus voluptaria convenire voluptatum senserit sit recteque erat legere montes.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Posuere dicam deseruisse egestas commune. Tota mutat referrentur quaestio sit expetenda pro platea. Semper nulla platonem neque dicat alienum. Pericula postea similique singulis falli conclusionemque voluptatibus utroque dictum. Nulla suscipit dictum solet facilis vix his verear eleifend iaculis. Delenit agam intellegebat litora dictumst consul integer percipit. Mentitum consequat tale varius posse fastidii. Omnesque singulis dolorum alienum alia lectus doctus amet. Minim mi graece egestas aliquid. Porro aliquip massa in nonumy deseruisse at. Semper deserunt mauris tempor dui melius ridiculus utroque. Mucius fabulas prodesset postulant nisl primis detraxit finibus potenti. Imperdiet vivamus iuvaret saperet oratio pellentesque commodo eu viderer urna. Dolor posse tortor interdum convallis brute verterem. Suas cras platonem mazim persequeris consul tacimates usu aeque audire. Pertinax conclusionemque tractatos sadipscing reformidans maximus. Salutatus nostra appetere adolescens possim egestas. Ridiculus possit quam delenit dolorum his docendi numquam. Iudicabit sumo a venenatis placerat intellegat. Vitae sapien his fermentum sit ultrices esse prompta dicant. Audire reprehendunt te ad tortor detraxit. Aperiri eget postulant mi errem perpetua sumo quas elitr. Meliore nam docendi eum curae. Litora turpis luptatum dictumst conclusionemque docendi eu euripidis donec integer. Luctus voluptaria convenire voluptatum senserit sit recteque erat legere montes.'
            ]
        ];
    }

    public static function find($id){
//        $listings = self::all();
        $listings = self::all();
        foreach ($listings as $listing) {
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}
