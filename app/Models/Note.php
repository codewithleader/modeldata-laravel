<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // IMPORTANTE: Si la tabla que hemos creado no respeta la convención de nombres, podemos especificarle al modelo a qué tabla debe apuntar
    // protected $table = "tasks"; // Si es que la tabla se llama "tasks", o "tareas" si se a creado la tabla en español, etc.

    protected $table = "notes";
    protected $fillable = [
        'title',
        'description',
        'deadline',
        'done',
    ];

    // Lo opuesto a $fillable. Es opcional.
    // protected $guarded = ['id', 'created_at', 'updated_at'];

    // Castear
    protected $casts = [
        'deadline' => 'date'
    ];

    // Las columnas que no queremos retornar al usuario. como por ejemplo el password.
    // protected $hidden = ['password'];
}

/*
$note = new Note();
$note->title = "Hello World";
$note->description = "Lorem ipsum";
$note->save();

Metodos static
Note::get();
*/