<?php

require_once __DIR__ . '/../../application.php';

$account_id = get('account_id');

if (empty($account_id)) {
    redirect('admin/accounts');
}

$AccountInfo = $DB->find('account', '*', array('account_id' => $account_id), null, 1);

if (empty($AccountInfo)) {
    redirect('admin/accounts');
}

require_once ROOT . '/core/handler/HostingHandler.php';
