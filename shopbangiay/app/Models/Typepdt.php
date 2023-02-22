<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typepdt extends Model
{
    // use HasFactory;x`
    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['type'] - string - contains the product type
     * $this->attributes['size'] - string - contains the product size
     * $this->attributes['trademark'] - string - contains the product trademark
     * $this->attributes['created_at'] - timestamp - contains the product creation date
     * $this->attributes['updated_at'] - timestamp - contains the product update date
     */

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getType()
    {
        return $this->attributes['type'];
    }
    public function setType($type)
    {
        $this->attributes['type'] = $type;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}
