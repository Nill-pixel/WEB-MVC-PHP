<?php
class SessionManager
{
    public function isLoggedIn(): bool
    {
        return isset($_SESSION['user_id']);
    }
    public function destroy(): void
    {
        session_destroy();
    }

    public function verify()
    {
        if (!$this->isLoggedIn()) {
            echo "<script>alert('Error Login!');location.href='./signIn';</script>";
        }
    }
}
