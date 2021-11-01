<?php 

namespace App\Http\Service;

class Commentable
{
    /**
     * @var array
     */
    protected comments_list = [];

    /**
     * Add a comment in the database.
     *
     * @return void
     */
    public function addComment()
    {}

    /**
     * Display a comment.
     *
     * @return void
     */
    public function viewComment()
    {}

    /**
     * Delete a comment in the database.
     *
     * @return void
     */
    public function deleteComment()
    {}

    /**
     * Display a list of comments.
     *
     * @return void
     */
    public function listComments()
    {}
}

?>
