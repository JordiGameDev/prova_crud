## Per a fer correr el projecte

1. Descarregar o clonar el projecte
2. Al terminal executar el següent `composer install`
3. `cp .env.example .env`
4. `php artisan key:generate`
5. `php artisan migrate:fresh --seed`
6. `npm install`
7. `npm run build`
7. `php artisan serve`
8. Obrir localhost:8000 al navegador

## Aclariments

Cal tenir instal·lat composer, node... que imagino que ja ho teniu.
El projecte està amb l'última versió de laravel que va amb PHP 8.
En fer el migrate crea una base de dades de nom 'prova_crud' amb user 'root' i password en blanc.
Al pas 5 s'omple la taula d'usuaris amb dades de demo, per fer login podeu registrar un usuari, ja que a l'exemple els usuaris no tenen restriccions ni límit de permisos.

Al generar el projecte amb auth ja s'han creat tots els tests bàsics. N'he creat un d'extra per fer la prova que es pot cridar amb `php artisan test --filter UpdateUserTest`

M'hauria agradat fer-m'hi més, però al cap de setmana vaig tenir temps de revisar la documentació i poc més i durant la setmana el temps que puc esgarrapar és molt limitat.