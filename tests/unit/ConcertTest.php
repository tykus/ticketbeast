<?php

use App\Concert;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ConcertTest extends TestCase
{
  use DatabaseMigrations;

  /** @test */
  public function can_get_formatted_date()
  {
    $concert = factory(Concert::class)->create([
      'date' => Carbon::parse('2016-12-01 8:00pm')
    ]);

    $this->assertEquals('December 1, 2016', $concert->formatted_date);
  }
}
