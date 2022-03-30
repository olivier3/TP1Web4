<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ip extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ip',
        'description',
        'user'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date_ajout' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    static public function rechercheIp(string $ipARechercher)
    {
        if (Ip::where('ip', $ipARechercher)->exists()) {

            $ip = Ip::where('ip', $ipARechercher)->get();

            return $ip;

        } else {
            $liste = Ip::all();

            $ips = array();

            foreach ($liste as $item) {

                similar_text($ipARechercher, $item->ip, $percent);

                if ($percent >= 80) {
                    $ips[] = $item;
                }

                if (count($ips) == 3)
                    break;
            }

            return $ips;
        }
    }
}
