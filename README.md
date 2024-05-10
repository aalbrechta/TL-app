# App pre záznamy meraní teploty jazier 
Tento projekt je určený na správu meraní teplôt jazier. Pomocou neho môžete jednoducho pridávať, upravovať a mazať záznamy o teplotách jazier.

- Zobrazenie záznamov o teplotách jazier vo forme prehľadnej tabuľky
- Možnosť pridávať nové záznamy o teplotách jazier
- Upravovanie existujúcich záznamov o teplotách jazier
- Odstraňovanie záznamov o teplotách jazier
- Informačné správy o úspešných akciách (pridanie, úprava, odstránenie)

## Použité nástroje

- Laravel Framework
- PHPStorm IDE
- XAMPP (Apache, MySQL)
- PHPMyAdmin


## Inštalácia

1. Sklonujte tento repozitár na svoje zariadenie: `git clone https://github.com/aalbrechta/TL-app`
2. Nainštalujte závislosti pomocou príkazu `composer install`
3. Vytvorte súbor s prostredím `.env` a skonfigurujte ho podľa svojich potrieb
4. Vytvorte databázu a spustite migrácie pomocou príkazu `php artisan migrate`
5. Spustite lokálny server pomocou príkazu `php artisan serve` a navštívte adresu `http://localhost:8000/Measurement` vo svojom prehliadači.
