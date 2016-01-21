<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VisitPagesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testVisitQuienesSomosPage()
    {
        $this->visit('/')
             ->click('Quienes Somos')
             ->seePageIs('/quienes');
    }

    public function testVisitContactoPage()
    {
        $this->visit('/')
            ->click('Contacto')
            ->seePageIs('/contacto');
    }

    public function testVisitContactoAsLoggedUser()
    {
        $user = factory(App\Models\User::class)->create();

        $this->actingAs($user)
             ->visit('/contacto')
             ->see($user->email);
    }

    public function testVisitCalendarioPage()
    {
        $this->visit('/')
            ->click('Calendario')
            ->seePageIs('/calendario');
    }

    public function testVisitRecursosPage()
    {
        $this->visit('/')
            ->click('Recursos')
            ->seePageIs('/recursos');
    }
}
