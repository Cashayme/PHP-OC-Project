<?php
require_once("model/Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, reported, post_id, DATE_FORMAT(comment_date, \'%d/%m/%Y à %H:%i\') AS comment_date_fr FROM commentaires WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO commentaires(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function preventComment($id)
    {
        $db = $this->dbConnect();
        $report = $db->prepare('UPDATE commentaires SET reported = "1" WHERE id= ?');
        $affectedLines = $report->execute(array($id));

        return $affectedLines;
    }

        public function adminComments()
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, reported, DATE_FORMAT(comment_date, \'%d/%m/%Y à %H:%i\') AS comment_date_fr FROM commentaires ORDER BY id');
        $comments->execute(array());

        return $comments;
    }

        public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $deleteComment = $db->prepare('DELETE FROM commentaires WHERE id= ?');
        $affectedLines = $deleteComment->execute(array($id));

        return $affectedLines;
    }

    public function revComment($id)
    {
        $db = $this->dbConnect();
        $report = $db->prepare('UPDATE commentaires SET reported = NULL WHERE id= ?');
        $affectedLines = $report->execute(array($id));

        return $affectedLines;
    }
}
