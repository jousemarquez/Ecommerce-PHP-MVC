<?php

class Cart {
    private $items;

    public function __construct() {
        $this->items = array();
    }

    public function addItem(CartItem $item) {
        $productId = $item->getIdProduct();
        if (isset($this->items[$productId])) {
            // Si el producto ya está en el carrito, actualiza la cantidad
            $this->items[$productId]->updateQuantity($item->getQuantity());
        } else {
            // Si no, agrega un nuevo ítem al carrito
            $this->items[$productId] = $item;
        }
    }

    public function removeItem($productId) {
        if (isset($this->items[$productId])) {
            unset($this->items[$productId]);
        }
    }

    public function getItems() {
        return $this->items;
    }

    public function isEmpty() {
        return empty($this->items);
    }
}
