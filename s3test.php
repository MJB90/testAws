<?php

require 'vendor/autoload.php';

$s3 = new Aws\S3\S3Client([
    'version' => 'latest',
    'region'  => 'us-east-1',
    'credentials' => [
        'key'    => 'AKIAQ7L6LIJAVB5ODH37',
        'secret' => '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'
    ]
]);

$result = $s3->putObject([
    'Bucket' => 's3bucketdemo31031997',
    'Key'    => 'testfromphp.txt',
    'Body'  => 'This is a test upload from PHP'
]);

echo "Uploading to S3.....";
var_dump($result);

?>
