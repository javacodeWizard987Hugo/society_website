<?php

namespace Tests\Feature;

use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class TeamTest extends TestCase
{
    use RefreshDatabase;

    public function test_team_page_is_accessible()
    {
        $response = $this->get('/team');
        $response.assertStatus(200);
    }

    public function test_admin_can_add_team_member_with_image()
    {
        Storage::fake('public');
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('admin.team.store'), [
            'name' => 'John Doe',
            'position' => 'Developer',
            'order' => 1,
            'image' => UploadedFile::fake()->image('member.jpg'),
        ]);

        $response->assertRedirect(route('admin.team.index'));
        $this->assertDatabaseHas('team_members', [
            'name' => 'John Doe',
        ]);

        $member = TeamMember::first();
        $this->assertNotNull($member->image);
        Storage::disk('public')->assertExists($member->image);
    }

    public function test_admin_can_update_team_member_without_clearing_image()
    {
        Storage::fake('public');
        $user = User::factory()->create();
        $member = TeamMember::create([
            'name' => 'John Doe',
            'position' => 'Developer',
            'order' => 1,
            'image' => 'team/old.jpg',
        ]);

        $response = $this->actingAs($user)->put(route('admin.team.update', $member->id), [
            'name' => 'John Updated',
            'position' => 'Developer',
            'order' => 1,
        ]);

        $response->assertRedirect(route('admin.team.index'));
        $member->refresh();
        $this->assertEquals('John Updated', $member->name);
        $this->assertEquals('team/old.jpg', $member->image);
    }
}
