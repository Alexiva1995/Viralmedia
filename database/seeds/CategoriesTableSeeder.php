<?php

use Illuminate\Database\Seeder;
// modelo
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayCategory = [
            
                [
                  "id"=>"1",
                  "name"=>"INSTAGRAM Seguidores Premium",
                  "sorting_number"=>"1",
                  "status"=>"1",
                  "description"=>"<p>fgfdg</p>",
                  "created_at"=>"2020-10-06 11:35:44",
                  "updated_at"=>"2021-03-22 21:04:52"
                ],
                [
                  "id"=>"2",
                  "name"=>"Viral Manager",
                  "sorting_number"=>"1",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:36:08",
                  "updated_at"=>"2020-10-06 11:46:58"
                ],
                [
                  "id"=>"3",
                  "name"=>"INSTAGRAM Likes",
                  "sorting_number"=>"2",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:36:25",
                  "updated_at"=>"2020-10-06 11:36:25"
                ],
                [
                  "id"=>"4",
                  "name"=>"INSTAGRAM Visitas al Perfil",
                  "sorting_number"=>"3",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:51:14",
                  "updated_at"=>"2020-10-06 11:51:14"
                ],
                [
                  "id"=>"5",
                  "name"=>"INSTAGRAM Reproducciones IGTV",
                  "sorting_number"=>"4",
                  "status"=>"1",
                  "description"=>"<p>Visitas de IGTV</p>",
                  "created_at"=>"2020-10-06 11:51:51",
                  "updated_at"=>"2020-10-06 11:51:51"
                ],
                [
                  "id"=>"6",
                  "name"=>"INSTAGRAM Reproducciones videos",
                  "sorting_number"=>"4",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:52:15",
                  "updated_at"=>"2020-10-06 11:52:15"
                ],
                [
                  "id"=>"7",
                  "name"=>"INSTAGRAM Saves",
                  "sorting_number"=>"5",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:52:30",
                  "updated_at"=>"2020-10-06 11:52:30"
                ],
                [
                  "id"=>"8",
                  "name"=>"INSTAGRAM Impresiones en publicaciones",
                  "sorting_number"=>"6",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:52:53",
                  "updated_at"=>"2020-10-06 11:52:53"
                ],
                [
                  "id"=>"9",
                  "name"=>"INSTAGRAM Reel",
                  "sorting_number"=>"6",
                  "status"=>"1",
                  "description"=>"<p>Visitas y likes para tus reel para que puedas posicionar y llegar a más personas.</p>",
                  "created_at"=>"2020-10-06 11:53:14",
                  "updated_at"=>"2020-10-06 11:53:27"
                ],
                [
                  "id"=>"10",
                  "name"=>"INSTAGRAM Seguidores BOTS",
                  "sorting_number"=>"7",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:54:06",
                  "updated_at"=>"2020-10-06 11:54:06"
                ],
                [
                  "id"=>"11",
                  "name"=>"Viral Managers Plus",
                  "sorting_number"=>"7",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:54:55",
                  "updated_at"=>"2020-10-06 11:54:55"
                ],
                [
                  "id"=>"12",
                  "name"=>"Viral Media IG",
                  "sorting_number"=>"8",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:55:19",
                  "updated_at"=>"2020-10-06 11:55:19"
                ],
                [
                  "id"=>"13",
                  "name"=>"Guía personalizada",
                  "sorting_number"=>"9",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:55:37",
                  "updated_at"=>"2020-10-06 11:55:37"
                ],
                [
                  "id"=>"14",
                  "name"=>"FACEBOOK Reproducciones Videos",
                  "sorting_number"=>"11",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:55:58",
                  "updated_at"=>"2020-10-06 11:55:58"
                ],
                [
                  "id"=>"15",
                  "name"=>"FACEBOOK Seguidores fanspage",
                  "sorting_number"=>"12",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:56:11",
                  "updated_at"=>"2020-10-06 11:56:11"
                ],
                [
                  "id"=>"16",
                  "name"=>"FACEBOOK likes PUBLICACIONES",
                  "sorting_number"=>"13",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:56:26",
                  "updated_at"=>"2020-10-06 11:56:26"
                ],
                [
                  "id"=>"17",
                  "name"=>"YOUTUBE Reproducciones Videos",
                  "sorting_number"=>"14",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:56:40",
                  "updated_at"=>"2020-10-06 11:56:40"
                ],
                [
                  "id"=>"18",
                  "name"=>"YOUTUBE Likes Videos",
                  "sorting_number"=>"14",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:56:54",
                  "updated_at"=>"2020-10-06 11:56:54"
                ],
                [
                  "id"=>"19",
                  "name"=>"Tik Tok",
                  "sorting_number"=>"16",
                  "status"=>"1",
                  "description"=>"<p>Visitas</p><p>Seguidores&nbsp;</p><p>Likes</p>",
                  "created_at"=>"2020-10-06 11:57:31",
                  "updated_at"=>"2020-10-06 11:57:31"
                ],
                [
                  "id"=>"20",
                  "name"=>"Telegram Suscriptores",
                  "sorting_number"=>"21",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:57:48",
                  "updated_at"=>"2020-10-06 11:57:48"
                ],
                [
                  "id"=>"21",
                  "name"=>"Packs Diseños Fotos",
                  "sorting_number"=>"22",
                  "status"=>"1",
                  "description"=>"null",
                  "created_at"=>"2020-10-06 11:58:23",
                  "updated_at"=>"2020-10-06 11:58:23"
                ],
                [
                  "id"=>"22",
                  "name"=>"NO USAR (ES MODO PRUEBA)",
                  "sorting_number"=>"99",
                  "status"=>"1",
                  "description"=>"<p>no usar estamos probando nuevos servicios. se vienen mejoras...</p>",
                  "created_at"=>"2020-10-06 11:58:51",
                  "updated_at"=>"2020-10-06 11:58:51"
                ]
              
         
    ];
    foreach ($arrayCategory as $category ) {
        Category::create($category);
    }
}
}
