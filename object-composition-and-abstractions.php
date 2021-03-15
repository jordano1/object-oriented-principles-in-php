<?php

// object composition means combining types to build out a more complex object
// object composition is when one class has a pointer to another class where a behavior is located and deferred to (some property on the object)
class Subscription
{
    // pointer to another class
    // essentially just passing a class into the construct as an object
    
    /**
     * @var Gateway
     */

    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {
        # code...
    }

    public function cancel()
    {
        # api request
        // find customer
        // find subscription->customer
        $this->gateway->findCustomer();
    }

    public function invoice()
    {
        # code...
    }

    public function swap($newPlan)
    {
        # code...
    }
}

interface Gateway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}

class StripeGateway implements Gateway
{
    public function findCustomer()
    {
        # code...
    }
    
    public function findSubscriptionByCustomer()
    {
        # code...
    }
}

class BraintreeGateway implements Gateway
{
    public function findCustomer()
    {
        # code...
    }
    
    public function findSubscriptionByCustomer()
    {
        # code...
    }
}

new Subscription(new BraintreeGateway());