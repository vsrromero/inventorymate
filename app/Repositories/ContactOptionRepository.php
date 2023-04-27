<?php  

namespace App\Repositories;

use App\Models\ContactOption;

class ContactOptionRepository
{
    public static function getOptions()
    {
        $contactOptions = ContactOption::pluck('option_description', 'option_value')->toArray();
        return $contactOptions;
    }
}