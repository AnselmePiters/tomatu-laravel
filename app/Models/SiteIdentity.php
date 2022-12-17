<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteIdentity extends Model
{
    use HasFactory;
    protected $table = "site_identity";
    protected $primaryKey = "id";
    protected $fillable = ["site_name", "site_logo", "headline", "cta_red_text", "banner_image"];
}
