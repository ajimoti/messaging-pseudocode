<?php

class ThreadRepository
{
    public function all($charity, $limit)
    {
        // select all threads for the provided charity
        // ordered by `updated_at` in DESC, with the 
        // user's detail, and last message detail.

        // return the paginated results.
    }

    public function messages($thread, $donor, $limit)
    {
        // select messages from the database for 
        // the provided donor $_POST['donor_id'], ordered by `sent_at` in DESC

        // return the paginate results.
    }
}