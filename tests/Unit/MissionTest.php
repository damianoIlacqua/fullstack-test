<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Interlocutor;

use App\Mission;
use App\User;

class InterlocutorTest extends TestCase
{
  public function setUp()
  {
    parent::setUp();
  }

  public function test_mission()
  {
    //Get only a mission with users
    $mission = Mission::with("users")->firstOrFail();

    //Test relations
    $this->a_mission_has_a_user($mission);
    //Test scope
    $this->a_mission_works_with_title_scope($mission);
  }

  //------------Relations------------//

  public function a_mission_has_a_user($mission)
  {
    // Create a Mission

    $user = User::create([
            'name'     => 'User 1',
            'email'    => 'user1@missions.tst',
            'password' => 'tst_pwd',
        ]);

    $mission->user()->associate($user);

    if($mission->user()) {
      $this->assertTrue(true);
    } else {
      $this->assertTrue(false);
    }

  }

  //------------Scopes------------//

  public function a_mission_works_with_title_scope($mission)
  {


  }

}
