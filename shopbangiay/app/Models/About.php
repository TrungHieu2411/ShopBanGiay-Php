<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "maindes" => "required|max:255",
            "ratio1" => "required",
            "ratio2" => "required",
            "description" => "required|max:255",
        ]);
    }

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getMainDescription()
    {
        return $this->attributes['maindes'];
    }
    public function setMainDescription($maindes)
    {
        $this->attributes['maindes'] = $maindes;
    }

    public function getRatio1()
    {
        return $this->attributes['ratio1'];
    }
    public function setRatio1($ratio1)
    {
        $this->attributes['ratio1'] = $ratio1;
    }

    public function getRatio2()
    {
        return $this->attributes['ratio2'];
    }
    public function setRatio2($ratio2)
    {
        $this->attributes['ratio2'] = $ratio2;
    }

    public function getDescription()
    {
        return $this->attributes['description'];
    }
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
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
