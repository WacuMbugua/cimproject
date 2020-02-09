<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TransactionsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_an_authenticated_user_can_login()
    {
        $this->be($user = factory('App\User')->create());
 
        $this->get($clients->path())->assertSee('');
    }
}
