<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use \App\Models\User;
use \App\Models\Salle;
use \App\Models\Seance;
use \App\Models\Abonnement;
use Illuminate\Support\Facades\Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            
            if (Auth::user()->role_id === 2)
            $event->menu->add([
                'text' => Auth::user()->name,
                'url'  => 'user/profile',
            ]);
            $event->menu->add([
                'text' => 'Dashboard',
                'url'  => 'admin/dashboard',
            ]);
            $event->menu->add('Users Management');
            $event->menu->add([
                'text'        => 'Clients',
                'url'         => 'admin/clients',
                'icon'        => 'users',
                'label'       => User::where('role_id',0)->count(),
                'label_color' => 'success',
                'submenu' => [
                    [
                        'text' => 'List',
                        'url'  => 'admin/clients',
                        'icon_color' => 'blue',
                    ],
                    [
                        'text' => 'Create',
                        'url'  => 'admin/clients/create',
                        'icon_color' => 'green',
                    ],
                ],
            ],
            );
            $event->menu->add([
                'text'        => 'Coachs',
                'url'         => 'admin/coachs',
                'icon'        => 'users',
                'label'       => User::where('role_id',1)->count(),
                'label_color' => 'success',
                'submenu' => [
                    [
                        'text' => 'List',
                        'url'  => 'admin/coachs',
                        'icon_color' => 'blue',
                    ],
                    [
                        'text' => 'Create',
                        'url'  => 'admin/coachs/create',
                        'icon_color' => 'green',
                    ],
                ],
            ],
            );
            $event->menu->add([
                'text'        => 'Salles',
                'url'         => 'admin/salles',
                'icon'        => 'users',
                'label'       => Salle::count(),
                'label_color' => 'success',
                'submenu' => [
                    [
                        'text' => 'List',
                        'url'  => 'admin/salles',
                        'icon_color' => 'blue',
                    ],
                    [
                        'text' => 'Create',
                        'url'  => 'admin/salles/create',
                        'icon_color' => 'green',
                    ],
                ],
            ],
            );
            $event->menu->add([
                'text'        => 'Seances',
                'url'         => 'admin/seances',
                'icon'        => 'users',
                'label'       => Seance::count(),
                'label_color' => 'success',
                'submenu' => [
                    [
                        'text' => 'List',
                        'url'  => 'admin/seances',
                        'icon_color' => 'blue',
                    ],
                    [
                        'text' => 'Create',
                        'url'  => 'admin/seances/create',
                        'icon_color' => 'green',
                    ],
                ],
            ],
            );
            $event->menu->add([
                'text'        => 'Abonnements',
                'url'         => 'admin/aboneements',
                'icon'        => 'users',
                'label'       => Abonnement::count(),
                'label_color' => 'success',
                'submenu' => [
                    [
                        'text' => 'List',
                        'url'  => 'admin/abonnements',
                        'icon_color' => 'blue',
                    ],
                    [
                        'text' => 'Create',
                        'url'  => 'admin/abonnements/create',
                        'icon_color' => 'green',
                    ],
                ],
            ],
            );
            $event->menu->add([
                'text' => 'Change Creneau',
                'url'  => '#',
            ]);
            $event->menu->add([
                'text' => 'Deamndes d\'acces au seances',
                'url'  => 'admin/demandes_acces',
            ]);
            $event->menu->add([
                'text' => 'Planning',
                'url'  => '/planning',
            ]);

        }
    );
    }
}
