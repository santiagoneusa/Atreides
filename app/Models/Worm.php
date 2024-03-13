<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Worm extends Model
{
    /**
     * WORM ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the product name
     * $this->attributes['type'] - enum - contains the type of worm
     * $this->attributes['velocity'] - integer - contains the worm velocity
     * $this->attributes['created_at'] - timestamp - contains the product creation date
     * $this->attributes['updated_at'] - timestamp - contains the product update date
     */
    protected $fillable = [
        'name',
        'type',
        'velocity',
    ];

    public static function validation(Request $request): void
    {
        $request->validate([
            'name' => ['required'],
            'type' => ['required'],
            'velocity' => ['required', 'numeric', 'gt:0'],
        ]);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getType(): string
    {
        return $this->attributes['type'];
    }

    public function setType(string $type): void
    {
        $this->attributes['type'] = $type;
    }

    public function getVelocity(): int
    {
        return $this->attributes['velocity'];
    }

    public function setVelocity(string $velocity): void
    {
        $this->attributes['velocity'] = $velocity;
    }

    public function getCreatedAt(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->attributes['updated_at'];
    }
}
