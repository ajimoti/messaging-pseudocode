<?php

use ThreadRepository;

class CharityInboxController
{
    protected $threadRepository;

    public function __construct()
    {
        // verify that admin belongs to the charity

        $this->threadRepository = new ThreadRepository();
    }

    public function viewThreads()
    {
        // validate input data

        $this->threadRepository->all($admin->charity_id, $perPage);

        // return the paginated results.
    }

    public function viewMessages($threadId)
    {
        // validate input data

        $this->threadRepository->messages($threadId, $_POST['donor_id'], $perPage);

        // return the paginate results.
    }
}
