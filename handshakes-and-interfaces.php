<?php

// interfaces need to be used in every class they're used in if they implement

interface Newsletter
{
    public function subscribe($email);

}

class CampaignMonitor implements Newsletter
{

    public function subscribe($email)
    {
        die('subscribing with campaign moniter');
    }
}

class Drip
{
    public function subscribe($email)
    {
        die('subscribing with Drip');
    }
}

class NewsletterSubscriptionsController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'foo@foomail.com';
        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionsController();

$controller->store(new Drip());