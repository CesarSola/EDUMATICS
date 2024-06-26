<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvidenciasCursos extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'curso_id',
        'documento_id',
        'file_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function documento()
    {
        return $this->belongsTo(DocumentosNec::class, 'documento_id');
    }
}
