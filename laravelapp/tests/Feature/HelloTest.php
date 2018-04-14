<?php

namespace Tests\Feature;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelloTest extends TestCase
{
   use DatabaseMigrations;

   public function testHello()
   {
       // ダミーで利用するデータ
       factory(User::class)->create([
           'name' => 'AAA',
           'email' => 'BBB@CCC.COM',
           'password' => 'ABCABC',
       ]);
       factory(User::class, 10)->create();

       $this->assertDatabaseHas('users', [
           'name' => 'AAA',
           'email' => 'BBB@CCC.COM',
           'password' => 'ABCABC',
       ]);
     }
}
