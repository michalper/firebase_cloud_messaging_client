# firebase_cloud_messaging_client

Unofficial PHP client for Firebase Cloud Messaging's legacy HTTP server API.

## Install

```bash
composer require michalper/firebase_cloud_messaging_client
```

## Usage

```php
$client = new FireBaseClient();
$client->setApiKey('...');

$message = (new Message())
    ->setTo($deviceToken)
    ->setPriority('high')
    ->setNotification((new Notification())->setTitle('...')->setBody('...'))
    ->setData(['score' => '3x1']);

$response = $client->message->send($message);
```

Covers the full [FCM message payload](https://firebase.google.com/docs/cloud-messaging/http-server-ref): single/multicast recipients (`to`, `registration_ids`), topic `condition`s, `priority`, `time_to_live`, `collapse_key`, `dry_run`, and both `data` and `notification` payloads.

## License

GNU GPL
