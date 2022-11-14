<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public static $continents = [
        [
            'name' => 'Africa',
            'countries' => [
                'Algeria',
                'Angola',
                'Benin',
                'Botswana',
                'Egypt',
                'Ghana',
                'Zambia',
                'Zimbabwe',
            ]
        ],
        [
            'name' => 'Asia',
            'countries' => [
                'Afghanistan',
                'Indonesia',
                'Kuwait',
                'Lebanon',
                'Pakistan',
                'Philippines',
                'Taiwan',
                'Vietnam',
            ]
        ],
        [
            'name' => 'Europe',
            'countries' => [
                'Albania',
                'Denmark',
                'Germany',
                'Iceland',
                'Latvia',
                'Russia',
                'Turkey',
                'Ukraine',
            ]
        ],
        [
            'name' => 'North America',
            'countries' => [
                'Canada',
                'Mexico',
                'United States',
                'Haiti',
                'Nicaragua',
                'Puerto Rico',
                'Cuba',
                'Jamaica',
            ]
        ],
        [
            'name' => 'South America',
            'countries' => [
                'Brazil',
                'Argentina',
                'Chile',
                'Guyana',
                'Paraguay',
                'Peru',
                'Uruguay',
                'Venezuela',
            ]
        ],
    ];

    public static function getContinents()
    {
        return self::$continents;
    }

    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
