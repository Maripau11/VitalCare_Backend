<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *      schema="Photo_detail",
 *      required={"gps_location","status"},
 *      @OA\Property(
 *          property="gps_location",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="status",
 *          description="",
 *          readOnly=false,
 *          nullable=false,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="descripcion",
 *          description="",
 *          readOnly=false,
 *          nullable=true,
 *          type="string",
 *      ),
 *      @OA\Property(
 *          property="created_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      ),
 *      @OA\Property(
 *          property="updated_at",
 *          description="",
 *          readOnly=true,
 *          nullable=true,
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */class Photo_detail extends Model
{
    public $table = 'photo_details';

    public $fillable = [
        'gps_location',
        'status',
        'descripcion'
    ];

    protected $casts = [
        'gps_location' => 'string',
        'status' => 'string',
        'descripcion' => 'string'
    ];

    public static array $rules = [
        'gps_location' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'descripcion' => 'nullable|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function photos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Photo::class, 'photo_details_id');
    }
}
