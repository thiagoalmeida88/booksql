<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'The Lean Startup',
            'author' => 'Eric Ries',
            'image' => '81SrwYY-6-L._AC_UY218_.jpg',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived 
            not only five centuries, but also the leap into electronic typesetting, remaining essentially 
            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
            Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.',
            'link' =>
            'https://www.amazon.com/s?k=the+lean+startup&i=stripbooks-intl-ship&crid=2LZK0BK764E8N&sprefix=The+lean+%2Cstripbooks-intl-ship%2C275&ref=nb_sb_ss_i_1_9',
            'category_id' => 1
        ]);

        Book::create([
            'title' => 'Nuevos retos en tecnología educativa (Educación) (Spanish Edition)',
            'author' => 'Julio Cabero',
            'image' => '51pNqssxVEL._SX367_BO1,204,203,200_.jpg',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived 
            not only five centuries, but also the leap into electronic typesetting, remaining essentially 
            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
            Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.',
            'link' =>
            'https://www.amazon.com/Julio-Barroso-Osuna-ebook/dp/B013HYDYVC/ref=sr_1_1?crid=2TQR2VVU1R4U3&dchild=1&keywords=tecnologia&qid=1589586369&s=books&sprefix=tecnologi%2Cstripbooks-intl-ship%2C277&sr=1-1',
            'category_id' => 2
        ]);

        Book::create([
            'title' => 'Contagio: La evolución de las pandemias (Spanish Edition)',
            'author' => 'David Quammen',
            'image' => '31LEz8KRv7L.jpg',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived 
            not only five centuries, but also the leap into electronic typesetting, remaining essentially 
            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
            Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.',
            'link' =>
            'https://www.amazon.com/Contagio-evoluci%C3%B3n-las-pandemias-Spanish-ebook/dp/B086RX2MQY/ref=sr_1_2?crid=2TQR2VVU1R4U3&dchild=1&keywords=tecnologia&qid=1589586369&s=books&sprefix=tecnologi%2Cstripbooks-intl-ship%2C277&sr=1-2',
            'category_id' => 3
        ]);

        Book::create([
            'title' => 'Estandar de Milady material de estudio sobre tecnologia del cuidado de las unas / Miladys Standard Nail Technology, Study Resource 6th Edition',
            'author' => 'Milady',
            'image' => '51co-sh9J9L._SX390_BO1,204,203,200_.jpg',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived 
            not only five centuries, but also the leap into electronic typesetting, remaining essentially 
            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
            Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.',
            'link' =>
            'https://www.amazon.com/Milady/dp/1435497589/ref=sr_1_3?crid=2TQR2VVU1R4U3&dchild=1&keywords=tecnologia&qid=1589586369&s=books&sprefix=tecnologi%2Cstripbooks-intl-ship%2C277&sr=1-3',
            'category_id' => 5
        ]);

        Book::create([
            'title' => 'Las leyes de la interfaz: Diseño, ecología, evolución, tecnología',
            'author' => 'Carlos A. Scolari',
            'image' => '41n3G7dPTdL.jpg',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived 
            not only five centuries, but also the leap into electronic typesetting, remaining essentially 
            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
            Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.',
            'link' =>
            'https://www.amazon.com/Las-leyes-interfaz-evoluci%C3%B3n-tecnolog%C3%ADa-ebook/dp/B079RMBFNB/ref=sr_1_4?crid=2TQR2VVU1R4U3&dchild=1&keywords=tecnologia&qid=1589586369&s=books&sprefix=tecnologi%2Cstripbooks-intl-ship%2C277&sr=1-4',
            'category_id' => 4
        ]);

        Book::create([
            'title' => 'Nano: Tecnología de la mente sobre la materia',
            'author' => 'Kabbalista Rav Berg',
            'image' => '41nZs9jehgL.jpg',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived 
            not only five centuries, but also the leap into electronic typesetting, remaining essentially 
            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
            Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.',
            'link' =>
            'https://www.amazon.com/Nano-Tecnolog%C3%ADa-mente-materia-Spanish-ebook/dp/B07MFYDDJM/ref=sr_1_7?crid=2TQR2VVU1R4U3&dchild=1&keywords=tecnologia&qid=1589586369&s=books&sprefix=tecnologi%2Cstripbooks-intl-ship%2C277&sr=1-7',
            'category_id' => 3
        ]);

        Book::create([
            'title' => 'Criptomonedas: Qué son, como utilizarlas y por qué van a cambiar el mundo',
            'author' => 'José Manoel Torres',
            'image' => '51f09s+HTXL.jpg',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived 
            not only five centuries, but also the leap into electronic typesetting, remaining essentially 
            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
            Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.',
            'link' =>
            'https://www.amazon.com/Criptomonedas-utilizarlas-cambiar-mundo-Spanish-ebook/dp/B07Y2FWBWM/ref=sr_1_5?crid=2TQR2VVU1R4U3&dchild=1&keywords=tecnologia&qid=1589586369&s=books&sprefix=tecnologi%2Cstripbooks-intl-ship%2C277&sr=1-5',
            'category_id' => 4
        ]);

        Book::create([
            'title' => 'Il primato delle tecnologie: Guida per una nuova iperumanità',
            'author' => 'Carlo Bordoni',
            'image' => '51zEL69DMOL.jpg',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived 
            not only five centuries, but also the leap into electronic typesetting, remaining essentially 
            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
            Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.',
            'link' =>
            'https://www.amazon.com/primato-delle-tecnologie-iperumanit%C3%A0-Italian-ebook/dp/B083Y1Q8JC/ref=sr_1_6?crid=2TQR2VVU1R4U3&dchild=1&keywords=tecnologia&qid=1589586369&s=books&sprefix=tecnologi%2Cstripbooks-intl-ship%2C277&sr=1-6',
            'category_id' => 6
        ]);

        Book::create([
            'title' => 'La Gestion De La Innovacion Y La Tecnologia En Las Organizaciones',
            'author' => 'Antonio Hildago Nuchera',
            'image' => '51f2bYr-R9L._SX394_BO1,204,203,200_.jpg',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived 
            not only five centuries, but also the leap into electronic typesetting, remaining essentially 
            unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
            Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.',
            'link' =>
            'https://www.amazon.com/Innovacion-Tecnologia-Organizaciones-Innovation-Technology/dp/8436817028/ref=sr_1_8?dchild=1&keywords=tecnologia&qid=1589586863&s=books&sr=1-8',
            'category_id' => 6
        ]);
    }
}