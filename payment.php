<?php
require_once("vendor/stripe/stripe-php/init.php");

class Payment
{
    protected $stripe;
    function __construct()
    {
        $this->stripe = new \Stripe\StripeClient("sk_test_4eC39HqLyjWDarjtT1zdp7dc");
    }
    public function checkout($ref_key, $email, $name, $amount, $success_url, $cancel_url)
    {
        return $this->stripe->checkout->sessions->create([
            "client_reference_id" => $ref_key,
            "payment_method_types" => ["card"],
            "customer_email" => $email,
            "line_items" => [[
                "price_data" => [
                    "currency" => "usd",
                    "product_data" => [
                        "name" => $name,
                    ],
                    "unit_amount" => $amount*100,
                ],
                "quantity" => 1,
            ]],
            "mode" => "payment",
            "success_url" => $success_url,
            "cancel_url" => $cancel_url,
        ]);
    }
    public function retrieveCheckout($id)
    {
        return $this->stripe->checkout->sessions->retrieve(
            $id,
            []
        );
    }
}
