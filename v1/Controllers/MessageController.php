<?php

use TwilioAPI;

class MessageController
{
    protected $twilioService;

    protected $messageRepository;

    public function __construct()
    {
        $this->twilioService = new TwilioAPI();
        $this->messageRepository = new MessageRepository();
    }

    public function sendMessage()
    {
        // validate input data

        // verify that the provided donor belongs to the authenticated admin's charity
        
        // create a thread if necessary and store message in database
        $this->messageRepository->storeMessage(
            // $authAdmin->charity_id,
            // $POST['donor_id'],
            // $authAdmin->id,
            // $POST['message']
        );

        // this can be dispatched to a queue,
        // so that the message is sent in the background.
        $this->twilioService->sendMessage(
            // $charity['messaging_phone_number'],
            // $donor['phone_number'],
            // $message
        );


        // if the twilio request was successful, update 
        // the `text_delivered` column to true.
        $this->messageRepository->markAsDelivered(
            // $message
        );

        // return a success message.
    }

    public function receiveMessage()
    {
        // validate input data


        // select from user table where phone number matches 
        // the sender's phone number ($_POST['fromNumber']).


        // select from charity table where phone number matches 
        // the receiver's phone number ($_POST['toNumber']).


        // create a thread if necessary and store message in database
        $this->messageRepository->storeMessage(
            // $charity->charity_id,
            // $donor->id,
            // $POST['donor_id'],
            // $POST['message']
        );


        // This can be dispatched to a queue, so that the message is sent in the background.
        // make a request to TwilioAPI to send the message.
        $this->twilioService->sendMessage(
            $_POST['fromNumber'],
            $_POST['toNumber'],
            $_POST['messageBody']
        );


        // if the twilio request was successful, update 
        // the `text_delivered` column to true.
        

        // return a success message.
    }
}
