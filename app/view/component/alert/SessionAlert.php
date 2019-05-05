<?php
    session_start();

abstract class Alert{
    public function session($type)
    {
        if (isset($_SESSION[$type])) { ?>
            <div class="alert alert-<?= $type ?>" role="alert">
                <?= $_SESSION[$type] ?>
            </div>
            <?php
            unset($_SESSION[$type]);
        }
    }

}