<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public static function validate($request)
    {
        $request->validate([
            "price" => "required|numeric|gt:0",
            "name" => "required|max:255",
            "image" => "required|max:255",
            "description" => "required|max:255",
            "size" => "required|numeric|gt:0",
            "typepdt_id" => "required|exists:typepdt,id",
        ]);
    }

    public static function sumPricesByQuantities($products, $productsInSession)
    {
        $total = 0;
        foreach ($products as $product) {
            $total = $total + ($product->getPrice() * $productsInSession[$product->getId()]);
        }
        return $total;
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

    public function getDescription()
    {
        return $this->attributes['description'];
    }
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }

    public function getImage()
    {
        return $this->attributes['image'];
    }
    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

    public function getPrice()
    {
        return $this->attributes['price'];
    }
    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }

    public function getSize()
    {
        return $this->attributes['size'];
    }
    public function setSize($size)
    {
        $this->attributes['size'] = $size;
    }

    public function getTrademark()
    {
        return $this->attributes['trademark'];
    }
    public function setTrademark($trademark)
    {
        $this->attributes['trademark'] = $trademark;
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

    public function typepdt()
    {
        return $this->belongsTo(Typepdt::class);
    }
    public function getTypepdt()
    {
        return $this->typepdt();
    }
    public function setTypepdt($typepdt)
    {
        $this->typepdt_id = $typepdt;
    }
}
