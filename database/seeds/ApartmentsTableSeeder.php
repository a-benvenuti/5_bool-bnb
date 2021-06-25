<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\User;
use App\Service;
use Illuminate\Support\Str;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * apartments-user1
         */
        $apartment_1a = new Apartment();
        $apartment_1a->user_id = 1;
        $apartment_1a->name = 'Villa Madrigali';
        $apartment_1a->slug = Str::slug($apartment_1a->name, '-');
        $apartment_1a->visibility = 1;
        $apartment_1a->image = 'https://images.freeimages.com/images/large-previews/5d3/my-living-room-1227463.jpg';
        $apartment_1a->description = 'Questo carinissimo alloggio si trova nel cuore del centro di Levanto, a due passi dal Centro della città. E\' composto da un comodo letto matrimoniale e un bagno con doccia. E\' in una posizione perfetta per esplorare la città a piedi (ma è anche molto vicino ai principali mezzi di trasporto pubblico).';
        $apartment_1a->num_room = 5;
        $apartment_1a->num_bath = 2;
        $apartment_1a->num_bed = 5;
        $apartment_1a->mq = 200;
        $apartment_1a->price_day = 400;
        $apartment_1a->country = 'Italia';
        $apartment_1a->region = 'Liguria';
        $apartment_1a->city = 'Levanto';
        $apartment_1a->street = 'Via Madrigali, 10';
        $apartment_1a->zip_code = '19015';
        $apartment_1a->floor = 1;
        $apartment_1a->latitude = 44.17128000;
        $apartment_1a->longitude = 9.61346000;
        $apartment_1a->save();

        $apartment_1b = new Apartment();
        $apartment_1b->user_id = 1;
        $apartment_1b->name = 'Residence Il Fortino';
        $apartment_1b->slug = Str::slug($apartment_1b->name, '-');
        $apartment_1b->visibility = 1;
        $apartment_1b->image = 'https://images.unsplash.com/photo-1613553497126-a44624272024?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80';
        $apartment_1b->description = 'Residence situato sul lungomare di Ronchi a Marina di Massa, con grande parco privato, Ristorante e Piscina';
        $apartment_1b->num_room = 2;
        $apartment_1b->num_bath = 1;
        $apartment_1b->num_bed = 2;
        $apartment_1b->mq = 60;
        $apartment_1b->price_day = 50;
        $apartment_1b->country = 'Italia';
        $apartment_1b->region = 'Toscana';
        $apartment_1b->city = 'Marina di Massa';
        $apartment_1b->street = 'Via G.Verdi 24';
        $apartment_1b->zip_code = '54100';
        $apartment_1b->floor = 2;
        $apartment_1b->latitude = 43.99517000;
        $apartment_1b->longitude = 10.12153000;
        $apartment_1b->save();

        $apartment_1c = new Apartment();
        $apartment_1c->user_id = 1;
        $apartment_1c->name = 'Casa Cocca';
        $apartment_1c->slug = Str::slug($apartment_1c->name, '-');
        $apartment_1c->visibility = 1;
        $apartment_1c->image = 'https://images.pexels.com/photos/6903218/pexels-photo-6903218.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260';
        $apartment_1c->description = 'L\'appartamento è  a 5 minuti dal mare, è composto da un ingresso con cucina e divano, una camera matrimoniale e un bagno con lavatrice. L\'appartamento è dotato di wi-fi, biancheria da letto e da bagno. ';
        $apartment_1c->num_room = 3;
        $apartment_1c->num_bath = 1;
        $apartment_1c->num_bed = 3;
        $apartment_1c->mq = 100;
        $apartment_1c->price_day = 90;
        $apartment_1c->country = 'Italia';
        $apartment_1c->region = 'Liguria';
        $apartment_1c->city = 'Levanto';
        $apartment_1c->street = 'Via Viviani 45';
        $apartment_1c->zip_code = '19015';
        $apartment_1c->floor = 1;
        $apartment_1c->latitude = 44.17280000;
        $apartment_1c->longitude = 9.61698000;
        $apartment_1c->save();

        $apartment_1d = new Apartment();
        $apartment_1d->user_id = 1;
        $apartment_1d->name = 'Agriturismo Millefiori';
        $apartment_1d->slug = Str::slug($apartment_1d->name, '-');
        $apartment_1d->visibility = 1;
        $apartment_1d->image = 'https://images.pexels.com/photos/4846101/pexels-photo-4846101.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260';
        $apartment_1d->description = 'Stanza Rosa, stanza privata che fa parte di un piccolo agriturismo a conduzione familiare; immerso nel verde e nella natura. Vicinissimo alle bellissime "Cinque Terre"';
        $apartment_1d->num_room = 1;
        $apartment_1d->num_bath = 1;
        $apartment_1d->num_bed = 1;
        $apartment_1d->mq = 40;
        $apartment_1d->price_day = 30;
        $apartment_1d->country = 'Italia';
        $apartment_1d->region = 'Liguria';
        $apartment_1d->city = 'Levanto';
        $apartment_1d->street = 'Via Fossato 1';
        $apartment_1d->zip_code = '19015';
        $apartment_1d->floor = 1;
        $apartment_1d->latitude = 44.18599000;
        $apartment_1d->longitude = 9.61973000;
        $apartment_1d->save();

        $apartment_1e = new Apartment();
        $apartment_1e->user_id = 1;
        $apartment_1e->name = 'Casa Amar';
        $apartment_1e->slug = Str::slug($apartment_1e->name, '-');
        $apartment_1e->visibility = 1;
        $apartment_1e->image = 'https://images.pexels.com/photos/3797991/pexels-photo-3797991.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260';
        $apartment_1e->description = 'A pochi passi dalla spiaggia e dai servizi di Levanto Casa Amar propone in un contesto di recente ristrutturazione, 5 camere molto luminose e accoglienti, tutte dotate di Aria condizionata, wifii, bagno con doccia (anche per disabili), frigorifero, TV a schermo piatto con servizio NETFLIX e Pass Auto per parcheggiare in apposite aree comunali. Nelle vicinanze di Levanto potete trovare le bellezze naturali delle 5 Terre, la passeggiata ciclopedonale Levanto a Framura (5km) con relative spiagge.';
        $apartment_1e->num_room = 5;
        $apartment_1e->num_bath = 3;
        $apartment_1e->num_bed = 5;
        $apartment_1e->mq = 250;
        $apartment_1e->price_day = 500;
        $apartment_1e->country = 'Italia';
        $apartment_1e->region = 'Liguria';
        $apartment_1e->city = 'Levanto';
        $apartment_1e->street = 'Via Olivi 19';
        $apartment_1e->zip_code = '19015';
        $apartment_1e->floor = 2;
        $apartment_1e->latitude = 44.17036000;
        $apartment_1e->longitude = 9.61033000;
        $apartment_1e->save();

        $apartment_1f = new Apartment();
        $apartment_1f->user_id = 1;
        $apartment_1f->name = 'Campo dei Fiori';
        $apartment_1f->slug = Str::slug($apartment_1f->name, '-');
        $apartment_1f->visibility = 1;
        $apartment_1f->image = 'https://images.pexels.com/photos/5998041/pexels-photo-5998041.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260';
        $apartment_1f->description = 'Ottima posizione nel cuore del centro storico di Roma, situato tra il ghetto ebraico e Campo dei fiori. Si trova in un palazzo storico del 1700, piano terra, completamente ristrutturato e arredato';
        $apartment_1f->num_room = 1;
        $apartment_1f->num_bath = 1;
        $apartment_1f->num_bed = 1;
        $apartment_1f->mq = 60;
        $apartment_1f->price_day = 80;
        $apartment_1f->country = 'Italia';
        $apartment_1f->region = 'Lazio';
        $apartment_1f->city = 'Roma';
        $apartment_1f->street = 'Via degli Strengari 26';
        $apartment_1f->zip_code = '00186';
        $apartment_1f->floor = 1;
        $apartment_1f->latitude = 41.89199000;
        $apartment_1f->longitude = 12.27323000;
        $apartment_1f->save();

        $apartment_1g = new Apartment();
        $apartment_1g->user_id = 1;
        $apartment_1g->name = 'Villa Lina';
        $apartment_1g->slug = Str::slug($apartment_1g->name, '-');
        $apartment_1g->visibility = 1;
        $apartment_1g->image = 'https://images.pexels.com/photos/2121121/pexels-photo-2121121.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260';
        $apartment_1g->description = 'Villa Liberty indipendente con ampio giardino. Ampia camera matrimoniale posta al primo piano e dotata di grande terrazzo ad uso esclusivo, ove é possibile fumare. Grande bagno. Il centro città è raggiungibile a piedi in 10 minuti.';
        $apartment_1g->num_room = 2;
        $apartment_1g->num_bath = 2;
        $apartment_1g->num_bed = 3;
        $apartment_1g->mq = 110;
        $apartment_1g->price_day = 100;
        $apartment_1g->country = 'Italia';
        $apartment_1g->region = 'Lombardia';
        $apartment_1g->city = 'Cremona';
        $apartment_1g->street = 'Via Angelo Cabrini 29';
        $apartment_1g->zip_code = '26100';
        $apartment_1g->floor = 2;
        $apartment_1g->latitude = 45.14311000;
        $apartment_1g->longitude = 10.03991000;
        $apartment_1g->save();

        /**
         * apartments-user2
         */
        $apartment_2a = new Apartment();
        $apartment_2a->user_id = 2;
        $apartment_2a->name = 'Hidden Gem of Cremona';
        $apartment_2a->slug = Str::slug($apartment_2a->name, '-');
        $apartment_2a->visibility = 1;
        $apartment_2a->image = 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=973&q=80';
        $apartment_2a->description = 'Ampio bilocale nel centro di Cremona posizionato di fronte al Museo Civico e alla Biblioteca comunale a pochi passi dal centro storico e a 10 minuti a piedi dalla Stazione ferroviaria.';
        $apartment_2a->num_room = 3;
        $apartment_2a->num_bath = 1;
        $apartment_2a->num_bed = 4;
        $apartment_2a->mq = 80;
        $apartment_2a->price_day = 100;
        $apartment_2a->country = 'Italia';
        $apartment_2a->region = 'Lombardia';
        $apartment_2a->city = 'Cremona';
        $apartment_2a->street = 'Via Dati Ugolani, 22';
        $apartment_2a->zip_code = '26100';
        $apartment_2a->floor = 2;
        $apartment_2a->latitude = 45.13851000;
        $apartment_2a->longitude = 10.02238000;
        $apartment_2a->save();

        $apartment_2b = new Apartment();
        $apartment_2b->user_id = 2;
        $apartment_2b->name = 'Vila Guerreiro';
        $apartment_2b->slug = Str::slug($apartment_2b->name, '-');
        $apartment_2b->visibility = 1;
        $apartment_2b->image = 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80';
        $apartment_2b->description = 'Situata a 1,7 km da Praia do Canavial, la Vila Guerreiro offre sistemazioni climatizzate con balcone e connessione WiFi gratuita. Le unità sono dotate di pavimenti piastrellati, angolo cottura completamente attrezzato con forno a microonde, zona pranzo, TV a schermo piatto con canali via cavo e bagno privato con doccia. A vostra disposizione un frigorifero, un piano cottura, un tostapane e una macchina da caffè. In loco troverete anche un\'area giochi per bambini.';
        $apartment_2b->num_room = 7;
        $apartment_2b->num_bath = 2;
        $apartment_2b->num_bed = 6;
        $apartment_2b->mq = 300;
        $apartment_2b->price_day = 500;
        $apartment_2b->country = 'Portogallo';
        $apartment_2b->region = 'Algarve';
        $apartment_2b->city = 'Albuferia';
        $apartment_2b->street = 'Estr. dos Brejos, 24';
        $apartment_2b->zip_code = '8200';
        $apartment_2b->floor = 1;
        $apartment_2b->latitude = 37.11733000;
        $apartment_2b->longitude = -8.22642000;
        $apartment_2b->save();

        $apartment_2c = new Apartment();
        $apartment_2c->user_id = 2;
        $apartment_2c->name = 'Industrial style Chicago Loft';
        $apartment_2c->slug = Str::slug($apartment_2c->name, '-');
        $apartment_2c->visibility = 1;
        $apartment_2c->image = 'https://images.unsplash.com/photo-1505873242700-f289a29e1e0f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80';
        $apartment_2c->description = 'Goditi Chicago in questo loft con una camera da letto splendidamente ristrutturata con un\'atmosfera chic e industriale. Bevi il tuo caffè mattutino sulla terrazza privata all\'aperto o dormi fino a tardi sul letto king size della California. L\'incantevole soffitto art déco del loft, le pareti con mattoni a vista e Netflix gratuito sono solo alcune delle fantastiche funzionalità che adorerai.';
        $apartment_2c->num_room = 1;
        $apartment_2c->num_bath = 1;
        $apartment_2c->num_bed = 2;
        $apartment_2c->mq = 60;
        $apartment_2c->price_day = 110;
        $apartment_2c->country = 'USA';
        $apartment_2c->region = 'Illinois';
        $apartment_2c->city = 'Chicago';
        $apartment_2c->street = 'Walters Henderson St, 12';
        $apartment_2c->zip_code = '60641';
        $apartment_2c->floor = 1;
        $apartment_2c->latitude = 41.94174000;
        $apartment_2c->longitude = -87.73320000;
        $apartment_2c->save();

        $apartment_2d = new Apartment();
        $apartment_2d->user_id = 2;
        $apartment_2d->name = 'Loft in Cremona';
        $apartment_2d->slug = Str::slug($apartment_2d->name, '-');
        $apartment_2d->visibility = 1;
        $apartment_2d->image = 'https://images.unsplash.com/photo-1536376072261-38c75010e6c9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80';
        $apartment_2d->description = 'Situato in una zona alberata nella periferia della città, questo loft moderno con portico dista 1,6 km dal Teatro Ponchielli, 2,1 km dal Duomo di Cremona e 2,6 km dalla stazione centrale.';
        $apartment_2d->num_room = 1;
        $apartment_2d->num_bath = 2;
        $apartment_2d->num_bed = 2;
        $apartment_2d->mq = 80;
        $apartment_2d->price_day = 75;
        $apartment_2d->country = 'Italia';
        $apartment_2d->region = 'Lombardia';
        $apartment_2d->city = 'Cremona';
        $apartment_2d->street = 'Viale Po 131';
        $apartment_2d->zip_code = '26100';
        $apartment_2d->floor = 1;
        $apartment_2d->latitude = 45.13116000;
        $apartment_2d->longitude = 9.99973000;
        $apartment_2d->save();

        $apartment_2e = new Apartment();
        $apartment_2e->user_id = 2;
        $apartment_2e->name = 'Villa Stendhal';
        $apartment_2e->slug = Str::slug($apartment_2e->name, '-');
        $apartment_2e->visibility = 1;
        $apartment_2e->image = 'https://images.unsplash.com/photo-1530629013299-6cb10d168419?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1047&q=80';
        $apartment_2e->description = 'Affascinante monolocale di 20 m² situato al 7° piano con ascensore di un bellissimo edificio parigino del 1913. Attraversante, tranquillo, luminoso, con vista libera su Parigi. Vicino a Père Lachaise e Place Gambetta. ';
        $apartment_2e->num_room = 1;
        $apartment_2e->num_bath = 1;
        $apartment_2e->num_bed = 1;
        $apartment_2e->mq = 20;
        $apartment_2e->price_day = 65;
        $apartment_2e->country = 'Francia';
        $apartment_2e->region = 'Parigi';
        $apartment_2e->city = 'Parigi';
        $apartment_2e->street = 'Rue Stendhal';
        $apartment_2e->zip_code = '75020';
        $apartment_2e->floor = 1;
        $apartment_2e->latitude = 48.86235000;
        $apartment_2e->longitude = 2.40093000;
        $apartment_2e->save();

        $apartment_2f = new Apartment();
        $apartment_2f->user_id = 2;
        $apartment_2f->name = 'Vicolo della Torre';
        $apartment_2f->slug = Str::slug($apartment_2f->name, '-');
        $apartment_2f->visibility = 1;
        $apartment_2f->image = 'https://images.pexels.com/photos/6933776/pexels-photo-6933776.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500';
        $apartment_2f->description = 'Trastevere, raffinato Loft nel centro di Roma, completamente ristrutturato nel 2019. Finemente arredato, dotato di ogni comodità, caratteristico e funzionale, con entrata indipendente e check-in automatico, ti sentirai libero di godere della vera atmosfera di Roma. La posizione è eccezionale tutti i monumenti più famosi sono raggiungibile a piedi.';
        $apartment_2f->num_room = 3;
        $apartment_2f->num_bath = 2;
        $apartment_2f->num_bed = 4;
        $apartment_2f->mq = 100;
        $apartment_2f->price_day = 185;
        $apartment_2f->country = 'Italia';
        $apartment_2f->region = 'Lazio';
        $apartment_2f->city = 'Roma';
        $apartment_2f->street = 'Via di Monte Fiore 13';
        $apartment_2f->zip_code = '00153';
        $apartment_2f->floor = 2;
        $apartment_2f->latitude = 41.88916000;
        $apartment_2f->longitude = 12.47483000;
        $apartment_2f->save();

        $apartment_2g = new Apartment();
        $apartment_2g->user_id = 2;
        $apartment_2g->name = 'Maxime Home';
        $apartment_2g->slug = Str::slug($apartment_2g->name, '-');
        $apartment_2g->visibility = 1;
        $apartment_2g->image = 'https://images.pexels.com/photos/4819708/pexels-photo-4819708.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260';
        $apartment_2g->description = 'Piccolo e accogliente appartamento nel centro storico della città , a due passi da Piazza del Duomo e dalle principali attrazioni storiche. Raggiungibile facilmente dalla stazione ferroviaria che garantisce collegamenti ogni ora con la stazione di Milano e di conseguenza i suoi aeroporti. ';
        $apartment_2g->num_room = 1;
        $apartment_2g->num_bath = 1;
        $apartment_2g->num_bed = 1;
        $apartment_2g->mq = 55;
        $apartment_2g->price_day = 40;
        $apartment_2g->country = 'Italia';
        $apartment_2g->region = 'Lombardia';
        $apartment_2g->city = 'Cremona';
        $apartment_2g->street = 'Via Radaelli 3';
        $apartment_2g->zip_code = '26100';
        $apartment_2g->floor = 1;
        $apartment_2g->latitude = 45.13745000;
        $apartment_2g->longitude = 10.02641000;
        $apartment_2g->save();

        /**
         * apartments-user3
         */
        $apartment_3a = new Apartment();
        $apartment_3a->user_id = 3;
        $apartment_3a->name = 'Cabana da Mata';
        $apartment_3a->slug = Str::slug($apartment_3a->name, '-');
        $apartment_3a->visibility = 1;
        $apartment_3a->image = 'https://images.unsplash.com/photo-1524061614234-8449637d36ce?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80';
        $apartment_3a->description = 'Il luogo ideale per fuggire dalla routine e godersi incredibili e romantiche giornate nel bosco, sarà il tuo rifugio in mezzo alla natura! Siamo situati nella regione di Ilha de Guaratiba a Rio de Janeiro in un condominio chiuso. Abbiamo biancheria da letto e da bagno, tutto è pronto per l\'arrivo degli ospiti. ';
        $apartment_3a->num_room = 1;
        $apartment_3a->num_bath = 1;
        $apartment_3a->num_bed = 3;
        $apartment_3a->mq = 50;
        $apartment_3a->price_day = 55;
        $apartment_3a->country = 'Brasile';
        $apartment_3a->region = 'Ilha de Guaratiba';
        $apartment_3a->city = 'Rio de Janeiro';
        $apartment_3a->street = 'Av. das Americas';
        $apartment_3a->zip_code = '23020';
        $apartment_3a->floor = 1;
        $apartment_3a->latitude = -23.01346000;
        $apartment_3a->longitude = -43.53430000;
        $apartment_3a->save();

        $apartment_3b = new Apartment();
        $apartment_3b->user_id = 3;
        $apartment_3b->name = 'Cozzy Studio in Palermo Hollywood';
        $apartment_3b->slug = Str::slug($apartment_3b->name, '-');
        $apartment_3b->visibility = 1;
        $apartment_3b->image = 'https://images.unsplash.com/photo-1528914137830-c85ee162f588?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80';
        $apartment_3b->description = 'Studio situato nel quartiere più alla moda di Buenos Aires, circondato dai migliori ristoranti. L\'edificio dispone di sicurezza 24 ore, servizio di lavanderia (a pagamento), sauna, somma (affitto precedente) e piscina. L\'appartamento è dotato di Wi-Fi ad alta velocità, aria condizionata H/C e riscaldamento a pavimento. ';
        $apartment_3b->num_room = 1;
        $apartment_3b->num_bath = 1;
        $apartment_3b->num_bed = 2;
        $apartment_3b->mq = 60;
        $apartment_3b->price_day = 60;
        $apartment_3b->country = 'Argentina';
        $apartment_3b->region = 'Buenos Aires';
        $apartment_3b->city = 'Palermo';
        $apartment_3b->street = 'Av. Cordoba';
        $apartment_3b->zip_code = '4720';
        $apartment_3b->floor = 2;
        $apartment_3b->latitude = -34.58576000;
        $apartment_3b->longitude = -58.44296000;
        $apartment_3b->save();

        $apartment_3c = new Apartment();
        $apartment_3c->user_id = 3;
        $apartment_3c->name = 'Bacche Apartament';
        $apartment_3c->slug = Str::slug($apartment_3c->name, '-');
        $apartment_3c->visibility = 1;
        $apartment_3c->image = 'https://images.unsplash.com/photo-1534595038511-9f219fe0c979?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80';
        $apartment_3c->description = 'Bacche Apartament, nasce nel centro storico di Palermo, dai principali monumenti, musei e mercati storici come la Vucciria. Appartamento interamente ristrutturato e dotato di tutti i comfort, composto da una camera da letto con letto matrimoniale grande, una stanza con divano, cucina e due bagni con doccia.';
        $apartment_3c->num_room = 1;
        $apartment_3c->num_bath = 2;
        $apartment_3c->num_bed = 3;
        $apartment_3c->mq = 80;
        $apartment_3c->price_day = 105;
        $apartment_3c->country = 'Italia';
        $apartment_3c->region = 'Sicilia';
        $apartment_3c->city = 'Palermo';
        $apartment_3c->street = 'Piazza Franco Franchi e Ciccio Ingrassia';
        $apartment_3c->zip_code = '90133';
        $apartment_3c->floor = 1;
        $apartment_3c->latitude = 38.11726000;
        $apartment_3c->longitude = 13.36248000;
        $apartment_3c->save();

        $apartment_3d = new Apartment();
        $apartment_3d->user_id = 3;
        $apartment_3d->name = 'Attico dell\'Idria';
        $apartment_3d->slug = Str::slug($apartment_3d->name, '-');
        $apartment_3d->visibility = 1;
        $apartment_3d->image = 'https://images.freeimages.com/images/large-previews/91b/home-interiors-1-1234960.jpg';
        $apartment_3d->description = 'Siamo a Catania, centro storico, a 50 mt dal monumentale monastero dei Benedettini di piazza Dante e vicino alla nota salita Di Sangiuliano, in una piccola strada di un quartiere caratteristico, ricco di ristoranti e locali tipici. Si tratta di un grazioso monovano al secondo piano senza ascensore con un delizioso terrazzino, bagno e cucina, luminosissimo e ben accessoriato. Ottimo punto di partenza per escursioni in città.';
        $apartment_3d->num_room = 1;
        $apartment_3d->num_bath = 1;
        $apartment_3d->num_bed = 2;
        $apartment_3d->mq = 50;
        $apartment_3d->price_day = 55;
        $apartment_3d->country = 'Italia';
        $apartment_3d->region = 'Sicilia';
        $apartment_3d->city = 'Catania';
        $apartment_3d->street = 'Piazza Dante Alighieri';
        $apartment_3d->zip_code = '95100';
        $apartment_3d->floor = 1;
        $apartment_3d->latitude = 37.82268000;
        $apartment_3d->longitude = 15.22804000;
        $apartment_3d->save();

        $apartment_3e = new Apartment();
        $apartment_3e->user_id = 3;
        $apartment_3e->name = 'Appartamento Viola';
        $apartment_3e->slug = Str::slug($apartment_3e->name, '-');
        $apartment_3e->visibility = 1;
        $apartment_3e->image = 'https://images.unsplash.com/photo-1617817643768-8855fc457e3a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1099&q=80';
        $apartment_3e->description = 'Situata a Baunei, l\'appartamento di Viola è ospitato in un antico edificio in pietra, appena ristrutturato nel rispetto dei canoni architettonici e con l\'utilizzo dei materiali delle antiche case Baunesi. ';
        $apartment_3e->num_room = 2;
        $apartment_3e->num_bath = 2;
        $apartment_3e->num_bed = 4;
        $apartment_3e->mq = 100;
        $apartment_3e->price_day = 155;
        $apartment_3e->country = 'Italia';
        $apartment_3e->region = 'Sardegna';
        $apartment_3e->city = 'Olbia';
        $apartment_3e->street = 'Via Brigata Sassari';
        $apartment_3e->zip_code = '07026';
        $apartment_3e->floor = 2;
        $apartment_3e->latitude = 40.92251000;
        $apartment_3e->longitude = 9.48685000;
        $apartment_3e->save();

        $apartment_3f = new Apartment();
        $apartment_3f->user_id = 3;
        $apartment_3f->name = 'Colosseo Apartment';
        $apartment_3f->slug = Str::slug($apartment_3f->name, '-');
        $apartment_3f->visibility = 1;
        $apartment_3f->image = 'https://images.pexels.com/photos/6934174/pexels-photo-6934174.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260';
        $apartment_3f->description = 'l\'appartamento è stato recentemente ristrutturato al fine di offrire un ambiente confortevole e piacevole. Si trova in uno dei quartieri tipici della Roma Antica: Monti,a due passi dal Colosseo ,primo quartiere costruito in città dove di certo non mancano siti da visitare durante il giorno e locali tipici dove passare la serata.';
        $apartment_3f->num_room = 3;
        $apartment_3f->num_bath = 2;
        $apartment_3f->num_bed = 6;
        $apartment_3f->mq = 220;
        $apartment_3f->price_day = 285;
        $apartment_3f->country = 'Italia';
        $apartment_3f->region = 'Lazio';
        $apartment_3f->city = 'Roma';
        $apartment_3f->street = 'Viale del Monte Oppio 22';
        $apartment_3f->zip_code = '00184';
        $apartment_3f->floor = 2;
        $apartment_3f->latitude = 41.89392000;
        $apartment_3f->longitude = 12.49801000;
        $apartment_3f->save();

        $apartment_3g = new Apartment();
        $apartment_3g->user_id = 3;
        $apartment_3g->name = 'Casa Matisse';
        $apartment_3g->slug = Str::slug($apartment_3g->name, '-');
        $apartment_3g->visibility = 1;
        $apartment_3g->image = 'https://images.pexels.com/photos/6492388/pexels-photo-6492388.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260';
        $apartment_3g->description = 'Sito in pieno Centro Storico dove si incrociano tradizione, arte e cultura di questa splendida città, in una delle vie, Via Calderai, dove ancora sopravvivono antichi mestieri da più di 500 anni, "i quararara" (i calderai), artigiani che, all\'interno delle loro botteghe, producono bracieri, tegami, pentole ed altri oggetti in rame, alluminio o bronzo. Il mio alloggio è adatto a coppie, avventurieri solitari, chi viaggia per lavoro e amici pelosi (animali domestici).';
        $apartment_3g->num_room = 2;
        $apartment_3g->num_bath = 1;
        $apartment_3g->num_bed = 2;
        $apartment_3g->mq = 75;
        $apartment_3g->price_day = 95;
        $apartment_3g->country = 'Italia';
        $apartment_3g->region = 'Sicilia';
        $apartment_3g->city = 'Palermo';
        $apartment_3g->street = 'Via Calderai 51';
        $apartment_3g->zip_code = '95133';
        $apartment_3g->floor = 1;
        $apartment_3g->latitude = 38.11433000;
        $apartment_3g->longitude = 13.36340000;
        $apartment_3g->save();
    }
}
