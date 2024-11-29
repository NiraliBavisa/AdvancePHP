<?php
class UserController {
    public function show($id) {
        echo "Showing user with ID: $id";
    }
    public function showPost($uid, $pid) {
        echo "Showing post with ID $pid for user with ID $uid";
    }
}
?>