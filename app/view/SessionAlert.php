<?php
session_start();

function sessionAlert($type) {
    if(isset($_SESSION[$type])) { ?>
        <div class="alert alert-<?= $type ?>" role="alert">
            <?= $_SESSION[$type]?>
        </div>
<?php
        unset($_SESSION[$type]);
    }
}
