<?php

require '../../application.php';

if (!isset($_POST['submit'])) {
    exit('Access Denied');
}

$ticket_id = post('ticket_id');

if (!$ticket_id) {
    exit('Access Denied');
}

// update status
$resault = $DB->update('tickets', array('ticket_status' => '2'), array('ticket_id' => $ticket_id));

if ($resault) {
    $FormData = array(
        'reply_for' => $ticket_id,
        'reply_from' => $ClientInfo['hosting_client_id'],
        'reply_content' => post('editor'),
        'reply_date' => date('Y-m-d H:i:s'),
    );
    $resault_insert = $DB->insert('ticket_replies', $FormData);
    if ($resault_insert) {
        $ticket_url = setURL('clientarea/tickets', '', array('action' => 'view', 'ticket_id' => $ticket_id));

        $email_content = '<p>You have received a reply from ' . $ClientInfo['hosting_client_fname'] . '.</p>';
        $email_description = '<center><a href="' . $ticket_url . '" style="text-decoration:none;border:white;color:#fff;padding:10px 20px 10px 20px;background:orange;border-radius:5px;">View Ticket</a></center>';

        $email_body = email_build_body('Ticket Reply', 'there', $email_content, $email_description);

        send_mail(array(
            'to' => $SiteConfig['site_email'],
            'subject' => 'Ticket Reply (#' . $ticket_id . ')',
            'message' => $email_body,
        ));

        setMessage('Reply added <b>successfully</b> !', 'success');
    } else {
        setMessage('Something went' . "'" . 's <b>wrong</b> !', 'danger');
    }
} else {
    setMessage('Something went' . "'" . 's <b>wrong</b> !', 'danger');
}

redirect('clientarea/tickets', '', array('action' => 'view', 'ticket_id' => $ticket_id), '#reply');
