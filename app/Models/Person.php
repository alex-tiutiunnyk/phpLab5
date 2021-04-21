<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Parent_;

class Person extends Model
{
    use HasFactory;

    public $id;

    public function __construct($id)
    {
        if (!$id == 0) {
            $this->id = $id;
        } else echo "Invalid id";
    }
}
