<?php

class MessageRepository
{
    public function storeMessage($charityId, array $donorIds, $senderId, $message, $attachmentUrls = [])
    {
        // begin a PDO database transaction

        // check if a thread exist for each donor and create one if necessary

        // generate an multidimensional array of messages and thread_ids to be inserted into the database

        // bulk insert the messages and thread_ids into the database 

        // bulk insert attachment_urls into the database

        // bulk update the threads last_message_id, and updated_at columns.

        // commit the transaction

        // return boolean.
    }

    public function markAsDelivered(array $messageIds)
    {
        // bulk update the messages text_delivered column to true.

        // return a boolean
    }
}