<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test()
    {
        $response = $this->get('/');
        dd($response->getContent());
    }
}

/*class TitlecaseMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->title) {
            $request->merge([
                'title' => title_case($request->title)
            ]);
        }

        return $next($request);
    }
}


public function testChangeCart()
{
    Event::fake();

    $user = factory(User::class)->create();
    Passport::actingAs(
        $user
    );

    $response = $this->post('/api/v1/cart/update', [
        'products' => [
            [
                // our changed data
            ]
        ],
    ]);

    $data = json_decode($response->getContent());

    $response->assertStatus(200);

    $this->assertEquals($user->id, $data->data->userId);
// and assert other data from response

    Event::assertDispatched(CartChanged::class);
}


public function testUpdateCart()
{
    Event::fake();

    $cartService = resolve(CartService::class);
    $cartRepo = resolve(CartRepository::class);

    $user = factory(User::class)->make();
    $cart = $cartRepo->getCart($user);

    // set data
    $data = [

    ];

    $newCart = $cartService->updateForUser($user, $data);
    $this->assertEquals($data, $newCart->toArray());

    Event::assertDispatched(CartChanged::class, 1);
}


public function testExample()
{
    $response = $this->get('/');
    dd($response->getContent());

}



public function testHandle()
{
    $user = factory(User::class)->create();

    $cart = Cart::create([
        'userId' => $user->id,
        // other needed data
    ]);

    $listener = new CreateTaskForSyncCart();
    $listener->handle(new CartChanged($cart));
    $job = // get our job

        $this->assertSame(json_encode($cart->products), $job->payload);
    $this->assertSame($user->id, $job->user_id);
// some additional asserts. Work with this data simplest for example
    $this->assertTrue($updatedAt->equalTo($job->last_updated_at));
}






public function testSuccessfulSendNetworkService()
{
    $mockHandler = new MockHandler([
        new Response(200),
    ]);

    $handler = HandlerStack::create($mockHandler);
    $client = new Client(['handler' => $handler]);

    app()->instance(\GuzzleHttp\Client::class, $client);

    $networkService = resolve(NetworkService::class);

    $response = $networkService->sendRequestToSite('GET', '/');
    $this->assertEquals('200', $response->getStatusCode());
}

public function testUnsupportedMethodSendNetworkService()
{
    $networkService = resolve(NetworkService::class);

    $this->expectException('\InvalidArgumentException');
    $networkService->sendRequestToSite('PUT', '/');
}

public function testUnsetConfigUrlNetworkService()
{
    $networkService = resolve(NetworkService::class);
    Config::shouldReceive('get')
        ->once()
        ->with('app.api_url')
        ->andReturn('');

    Config::shouldReceive('get')
        ->once()
        ->with('app.api_token')
        ->andReturn('token');

    $this->expectException('\InvalidArgumentException');
    $networkService->sendRequestToApi('GET', '/');
}

class UserControllerTests extends TestCase {

    public function testIndexReturnsDataInValidFormat() {

        $this->json('get', 'api/user')
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure(
                [
                    'data' => [
                        '*' => [
                            'id',
                            'name',
                            'telefon'
                        ]
                    ]
                ]
            );
    }

}


public function testUpdateUserReturnsCorrectData() {
    $user = User::create(
        [
            'id' => $this->faker->Id,
            'name'  => $this->faker->Name,
            'telefon'      => $this->faker->Telefon
        ]
    );

    $this->json('put', "api/user/$user->id", $payload)
        ->assertStatus(Response::HTTP_OK)
        ->assertExactJson(
            [
                'data' => [
                    'id',
                    'name',
                    'telefon'
                ]
            ]
        );
}
Тест функції Update();




public function testShowForMissingUser() {

    $this->json('get', "api/user/0")
        ->assertStatus(Response::HTTP_NOT_FOUND)
        ->assertJsonStructure(['error']);

}

public function testUpdateForMissingUser() {

    $user = [
        'id' => $this->faker->Id,
        'name'=> $this->faker->Name,
        'telefon'=> $this->faker->Telefon

    ];

    $this->json('put', 'api/user/0', $payload)
        ->assertStatus(Response::HTTP_NOT_FOUND)
        ->assertJsonStructure(['error']);
}

public function testDestroyForMissingUser() {

    $this->json('delete', 'api/user/0')
        ->assertStatus(Response::HTTP_NOT_FOUND)
        ->assertJsonStructure(['error']);
}*/
