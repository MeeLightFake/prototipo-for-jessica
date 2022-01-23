<?php

class Course
{
    # Attributes
    private $id, $name, $description, $image;
    private $typeImage, $price, $status;

    public function __construct(
        $id,
        $name,
        $description,
        $image,
        $typeImage,
        $price,
        $status
    )
    {
        $this->id          = $id;
        $this->name        = $name;
        $this->description = $description;
        $this->image       = $image;
        $this->typeImage   = $typeImage;
        $this->price       = $price;
        $this->status      = $status;
    }

    # Getters and setters

    # Id
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    # Name
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    # Description
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    # Image
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    # Type image
    public function getTypeImage()
    {
        return $this->typeImage;
    }

    public function setTypeImage($typeImage)
    {
        $this->typeImage = $typeImage;
    }

    # Price
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    # Status
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
};
