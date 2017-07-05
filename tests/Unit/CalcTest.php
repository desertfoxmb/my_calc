<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CalcTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAdd()
    {
        $this->json('GET','api/calc/add/x/5/y/8')
            ->assertStatus(200)
            ->assertSee("13");
    }

    public function testDiff()
    {
        $this->json('GET','api/calc/diff/x/5/y/8')
            ->assertStatus(200)
            ->assertSee("-3");
    }

    public function testMult()
    {
        $this->json('GET','api/calc/mult/x/5/y/8')
            ->assertStatus(200)
            ->assertSee("40");
    }

    public function testDiv()
    {
        $this->json('GET','api/calc/div/x/4/y/2')
            ->assertStatus(200)
            ->assertSee("2");

        $this->json('GET','api/calc/div/x/4/y/0')
            ->assertStatus(200)
            ->assertSee("don't divide by zero dummy.");
    }

}
