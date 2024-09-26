<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    //este metodo se ejecuta cuando se inicia cuando el usuario le de click al boton de enviar correo de verificacion
    public function boot(): void
    {
        $this->registerPolicies();

        //el callback recibe 2 parametros pero solo usaremos el segundo
        VerifyEmail::toMailUsing(function($notifiable, $url){
            return(new MailMessage)
                ->subject('Verificar Cuenta')
                ->line('Tu cuenta esta casi lista, presiona el boton para Verificar la cuenta')
                ->action('Verificar Cuenta', $url)
                ->line("Si no creaste la cuenta, ignora este mensaje");
        });
    }
}
