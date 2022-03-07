<?php

class MessageRepository
{
    public function storeMessage($charityId, $donorId, $senderId, $message)
    {
        // begin a PDO database transaction

        // create a thread if none exists

        // set the authenticated admin id as the sender_id
        
        // store the message in the database.

        // update the thread's last_message_id, and updated_at columns.

        // commit the transaction

        // return boolean.
    }

    public function markAsDelivered($message)
    {
        // update the `text_delivered` column to true.
    }
}