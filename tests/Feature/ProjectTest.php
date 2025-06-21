<?php

namespace Tests\Feature;

use App\Models\User;
use Workdo\Taskly\Entities\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_access_project_routes()
    {
        $response = $this->get('/projects');
        $response->assertRedirect('/login');
    }

    public function test_authenticated_user_can_view_projects()
    {
        // Create a company user (matching your seeder's logic)
        $user = User::factory()->company()->create();

        // Create a project tied to the user's workspace, assuming Project has workspace_id
        $project = Project::factory()->create([
            'workspace' => $user->workspace_id,
            'name' => 'Test Project'
        ]);

        // Act as the user and access the projects page
        $response = $this->actingAs($user)->get('/projects');

        // Assert the page loads successfully
        $response->assertStatus(200);

        // Assert the project name is visible on the page
        $response->assertSee('Test Project');
    }

    public function test_user_can_create_project()
    {
        $user = User::factory()->create();

        $data = [
            'name' => 'Test Project',
            'description' => 'A sample description.',
            'start_date' => now()->format('Y-m-d'),
            'end_date' => now()->addDays(10)->format('Y-m-d'),
        ];

        $response = $this->actingAs($user)->post('/projects', $data);

        $response->assertRedirect('/projects');
        $this->assertDatabaseHas('projects', ['name' => 'Test Project']);
    }

    public function test_project_creation_fails_with_missing_fields()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/projects', []);

        $response->assertSessionHasErrors(['name', 'start_date', 'end_date']);
    }

    public function test_user_can_update_project()
    {
        $user = User::factory()->create();
        $project = Project::factory()->create();

        $response = $this->actingAs($user)->put("/projects/{$project->id}", [
            'name' => 'Updated Project',
        ]);

        $response->assertRedirect('/projects');
        $this->assertDatabaseHas('projects', ['id' => $project->id, 'name' => 'Updated Project']);
    }

    public function test_user_can_delete_project()
    {
        $user = User::factory()->create();
        $project = Project::factory()->create();

        $response = $this->actingAs($user)->delete("/projects/{$project->id}");

        $response->assertRedirect('/projects');
        $this->assertModelMissing($project);
    }
}
