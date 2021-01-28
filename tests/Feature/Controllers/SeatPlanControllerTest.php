<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\SeatPlan;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SeatPlanControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_seat_plans()
    {
        $seatPlans = SeatPlan::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('seat-plans.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.seat_plans.index')
            ->assertViewHas('seatPlans');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_seat_plan()
    {
        $response = $this->get(route('seat-plans.create'));

        $response->assertOk()->assertViewIs('app.seat_plans.create');
    }

    /**
     * @test
     */
    public function it_stores_the_seat_plan()
    {
        $data = SeatPlan::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('seat-plans.store'), $data);

        $this->assertDatabaseHas('seat_plans', $data);

        $seatPlan = SeatPlan::latest('id')->first();

        $response->assertRedirect(route('seat-plans.edit', $seatPlan));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_seat_plan()
    {
        $seatPlan = SeatPlan::factory()->create();

        $response = $this->get(route('seat-plans.show', $seatPlan));

        $response
            ->assertOk()
            ->assertViewIs('app.seat_plans.show')
            ->assertViewHas('seatPlan');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_seat_plan()
    {
        $seatPlan = SeatPlan::factory()->create();

        $response = $this->get(route('seat-plans.edit', $seatPlan));

        $response
            ->assertOk()
            ->assertViewIs('app.seat_plans.edit')
            ->assertViewHas('seatPlan');
    }

    /**
     * @test
     */
    public function it_updates_the_seat_plan()
    {
        $seatPlan = SeatPlan::factory()->create();

        $data = [
            'class_wise_seat_qty' => $this->faker->text(255),
            'seat_quantity' => $this->faker->randomNumber(0),
        ];

        $response = $this->put(route('seat-plans.update', $seatPlan), $data);

        $data['id'] = $seatPlan->id;

        $this->assertDatabaseHas('seat_plans', $data);

        $response->assertRedirect(route('seat-plans.edit', $seatPlan));
    }

    /**
     * @test
     */
    public function it_deletes_the_seat_plan()
    {
        $seatPlan = SeatPlan::factory()->create();

        $response = $this->delete(route('seat-plans.destroy', $seatPlan));

        $response->assertRedirect(route('seat-plans.index'));

        $this->assertDeleted($seatPlan);
    }
}
