### Modified Zend Framework Skeleton Application to test SlmQueue and ZF3 components


note: doctrine disabled a.t.m...

```
composer install

configure your database by modifying config/autoload/doctrine-orm-module.global.php

adding vendor/slm/queue-doctrine/data/queue_default.sql to your database


```

Add a test job

```
php public/index.php add-job
```

Process queue

```
php public/index.php queue doctrine doctrine --start
php public/index.php queue sqs queue-test-processor
```


