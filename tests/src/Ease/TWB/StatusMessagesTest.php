<?php

namespace Test\Ease\TWB;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:41.
 */
class StatusMessagesTest extends \Test\Ease\Html\DivTagTest
{
    /**
     * @var StatusMessages
     */
    protected $object;
    public $rendered = '<div><div class="MessageForUser" style="color: blue;" >test</div>
<div class="MessageForUser" style="color: #2C5F23;" >test</div>
<div class="MessageForUser" style="color: black;" >test</div>
<div class="MessageForUser" style="color: #AB250E;" >test</div></div>';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $shared       = \Ease\Shared::instanced();
        $this->object = new \Ease\TWB\StatusMessages();
        $shared->cleanMessages();
        $shared->addStatusMessage('test');
        $shared->addStatusMessage('test', 'success');
        $shared->addStatusMessage('test', 'danger');
        $shared->addStatusMessage('test', 'warning');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
        
    }
}
