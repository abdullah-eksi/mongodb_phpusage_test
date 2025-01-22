<?php
include "lib/lib.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page2 = isset($_GET['page2']) ? $_GET['page2'] : '';
$id = isset($_GET['intvariable']) ? $_GET['intvariable'] : '';
$no = isset($_GET['intvariable2']) ? $_GET['intvariable2'] : '';



if ($page === 'logout') {
      include __DIR__ . "/view/Account/logout.php";
      include __DIR__ . "/process/account.php";
} elseif ($page === 'login') {
      include __DIR__ . "/view/Account/$page.php";
      include __DIR__ . "/process/account.php";
} elseif ($page === '404') {
      include __DIR__ . "/inc/header.php";
      include __DIR__ . "/view/$page.php";
      include __DIR__ . "/process/$page.php";
      include __DIR__ . "/inc/footer.php";
} elseif ($page === 'register') {
      include __DIR__ . "/inc/header.php";
      include __DIR__ . "/view/account/$page.php";
      include __DIR__ . "/process/account.php";
      include __DIR__ . "/inc/footer.php";
} elseif ($page === 'forget_password') {
      include __DIR__ . "/inc/header.php";
      include __DIR__ . "/view/account/$page.php";
      include __DIR__ . "/process/account.php";
      include __DIR__ . "/inc/footer.php";
} elseif ($page === 'forget_username') {
      include __DIR__ . "/inc/header.php";
      include __DIR__ . "/view/account/$page.php";
      include __DIR__ . "/process/account.php";
      include __DIR__ . "/inc/footer.php";
} elseif ($page === 'reset_password') {
      include __DIR__ . "/inc/header.php";
      include __DIR__ . "/view/account/$page.php";
      include __DIR__ . "/process/account.php";
      include __DIR__ . "/inc/footer.php";
} elseif (!empty($page)) {
      if (file_exists(__DIR__ . "/view/$page.php")) {
            include __DIR__ . "/inc/header.php";
            include __DIR__ . "/view/$page.php";

            if (file_exists(__DIR__ . "/process/$page.php")) {
                  include __DIR__ . "/process/$page.php";
            }
            include __DIR__ . "/inc/footer.php";
      } elseif (!empty($page2)) {
            include __DIR__ . "/inc/header.php";

            if (file_exists(__DIR__ . "/view/$page/$page2.php")) {
                  include __DIR__ . "/view/$page/$page2.php";

                  if (file_exists(__DIR__ . "/process/$page.php")) {
                        include __DIR__ . "/process/$page.php";
                  }
                  include __DIR__ . "/inc/footer.php";
            } else {
                  yonlendir(AeXp_URL . "/404");
            }
      } else {
            yonlendir(AeXp_URL . "/404");
      }
} else {
      include __DIR__ . "/view/home.php";
      include __DIR__ . "/process/home.php";
}
?>
