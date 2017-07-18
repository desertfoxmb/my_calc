<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MyFirstDuskTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                ->type('a', 3)
/**                ->select('action', '*')**/
                ->type('b', 4)
                ->press('Execute')
                ->assertPathIs('/calc')
                ->assertSee('13');
        });
    }
}