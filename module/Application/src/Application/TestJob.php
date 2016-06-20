<?php
/**
 * Created by PhpStorm.
 * User: bas
 * Date: 15/06/16
 * Time: 14:14
 */

namespace Application;


use SlmQueue\Job\AbstractJob;

class TestJob extends AbstractJob
{
    /**
     * Execute the job
     *
     * @return void|int
     */
    public function execute() {
        usleep(50000);
        print 'executed a fine job';
    }
}