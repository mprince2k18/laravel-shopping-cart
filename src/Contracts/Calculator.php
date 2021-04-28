<?php

namespace Mprince\Shoppingcart\Contracts;

use Mprince\Shoppingcart\CartItem;

interface Calculator
{
    public static function getAttribute(string $attribute, CartItem $cartItem);
}
