
<?php

class CartItem {
    private $product;
    private $quantity;

    public function __construct(Product $product, $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getProduct() {
        return $this->product;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function updateQuantity($newQuantity) {
        $this->quantity = $newQuantity;
    }

    public function getIdProduct() {
        return $this->product->idProduct;
    }

    public function getImage() {
        return $this->product->image;
    }

    public function getName() {
        return $this->product->name;
    }

    public function getDescription() {
        return $this->product->description;
    }

    public function getPrice() {
        return $this->product->price;
    }
}
