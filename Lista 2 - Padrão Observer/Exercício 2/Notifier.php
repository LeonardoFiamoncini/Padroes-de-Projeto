<?php

class Notifier {

    public function sendProductNotification(User $user, $product) {
        echo "\n Hey " . $user->getName(). ", the product '" . $product['name'] . "' has been added to the store! \n";
    }

    public function sendPriceNotification(User $user, $product) {
        printf("\n Hey %s, the price of the product '%s' has been update! The new price is $%.2f. \n",
            $user->getName(),
            $product['name'],
            $product['price']
        );
    }
}
