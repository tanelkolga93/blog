<?php
/**
 * Created by PhpStorm.
 * User: tanel.kolga
 * Date: 27.01.14
 * Time: 13:55
 */

class tags extends Controller
{


    function index()
    {
        $this->tags = get_all("SELECT tag_name, tag_id, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
    }
}