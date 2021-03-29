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
              "description"=>"<p><br></p>",
              "created_at"=>"2020-10-06 15:35:44",
              "updated_at"=>"2021-03-25 00:43:33"
            ],
            [
              "id"=>"2",
              "name"=>"Viral Manager",
              "sorting_number"=>"1",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:36:08",
              "updated_at"=>"2021-03-25 00:43:40"
            ],
            [
              "id"=>"3",
              "name"=>"INSTAGRAM Likes",
              "sorting_number"=>"2",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:36:25",
              "updated_at"=>"2021-03-25 00:44:00"
            ],
            [
              "id"=>"4",
              "name"=>"INSTAGRAM Visitas al Perfil",
              "sorting_number"=>"3",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:51:14",
              "updated_at"=>"2021-03-25 00:46:34"
            ],
            [
              "id"=>"5",
              "name"=>"INSTAGRAM Reproducciones IGTV",
              "sorting_number"=>"4",
              "status"=>"1",
              "description"=>"<p>Visitas de IGTV</p>",
              "created_at"=>"2020-10-06 15:51:51",
              "updated_at"=>"2020-10-06 15:51:51"
            ],
            [
              "id"=>"6",
              "name"=>"INSTAGRAM Reproducciones videos",
              "sorting_number"=>"4",
              "status"=>"1",
              "description"=>"<p><br></p>",
              "created_at"=>"2020-10-06 15:52:15",
              "updated_at"=>"2021-03-25 00:44:21"
            ],
            [
              "id"=>"7",
              "name"=>"INSTAGRAM Saves",
              "sorting_number"=>"5",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:52:30",
              "updated_at"=>"2021-03-25 00:44:30"
            ],
            [
              "id"=>"8",
              "name"=>"INSTAGRAM Impresiones en publicaciones",
              "sorting_number"=>"6",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:52:53",
              "updated_at"=>"2021-03-25 00:44:54"
            ],
            [
              "id"=>"9",
              "name"=>"INSTAGRAM Reel",
              "sorting_number"=>"6",
              "status"=>"1",
              "description"=>"<p>Visitas y likes para tus reel para que puedas posicionar y llegar a más personas.</p>",
              "created_at"=>"2020-10-06 15:53:14",
              "updated_at"=>"2020-10-06 15:53:27"
            ],
            [
              "id"=>"10",
              "name"=>"INSTAGRAM Seguidores BOTS",
              "sorting_number"=>"7",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:54:06",
              "updated_at"=>"2021-03-25 00:45:20"
            ],
            [
              "id"=>"11",
              "name"=>"Viral Managers Plus",
              "sorting_number"=>"7",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:54:55",
              "updated_at"=>"2021-03-25 00:45:27"
            ],
            [
              "id"=>"12",
              "name"=>"Viral Media IG",
              "sorting_number"=>"8",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:55:19",
              "updated_at"=>"2021-03-25 00:45:45"
            ],
            [
              "id"=>"13",
              "name"=>"Guía personalizada",
              "sorting_number"=>"9",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:55:37",
              "updated_at"=>"2021-03-25 00:45:54"
            ],
            [
              "id"=>"14",
              "name"=>"FACEBOOK Reproducciones Videos",
              "sorting_number"=>"11",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:55:58",
              "updated_at"=>"2021-03-25 00:46:04"
            ],
            [
              "id"=>"15",
              "name"=>"FACEBOOK Seguidores fanspage",
              "sorting_number"=>"12",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:56:11",
              "updated_at"=>"2021-03-25 00:50:41"
            ],
            [
              "id"=>"16",
              "name"=>"FACEBOOK likes PUBLICACIONES",
              "sorting_number"=>"13",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:56:26",
              "updated_at"=>"2021-03-25 00:50:49"
            ],
            [
              "id"=>"17",
              "name"=>"YOUTUBE Reproducciones Videos",
              "sorting_number"=>"14",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:56:40",
              "updated_at"=>"2021-03-25 00:51:22"
            ],
            [
              "id"=>"18",
              "name"=>"YOUTUBE Likes Videos",
              "sorting_number"=>"14",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:56:54",
              "updated_at"=>"2021-03-25 00:51:28"
            ],
            [
              "id"=>"19",
              "name"=>"Tik Tok",
              "sorting_number"=>"16",
              "status"=>"1",
              "description"=>"<p>Visitas</p><p>Seguidores&nbsp;</p><p>Likes</p>",
              "created_at"=>"2020-10-06 15:57:31",
              "updated_at"=>"2020-10-06 15:57:31"
            ],
            [
              "id"=>"20",
              "name"=>"Telegram Suscriptores",
              "sorting_number"=>"21",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:57:48",
              "updated_at"=>"2021-03-25 00:51:48"
            ],
            [
              "id"=>"21",
              "name"=>"Packs Diseños Fotos",
              "sorting_number"=>"22",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2020-10-06 15:58:23",
              "updated_at"=>"2021-03-25 00:51:56"
            ],
            [
              "id"=>"22",
              "name"=>"NO USAR (ES MODO PRUEBA)",
              "sorting_number"=>"99",
              "status"=>"1",
              "description"=>"<p>no usar estamos probando nuevos servicios. se vienen mejoras...</p>",
              "created_at"=>"2020-10-06 15:58:51",
              "updated_at"=>"2020-10-06 15:58:51"
            ],
            [
              "id"=>"24",
              "name"=>"PROMO DEL MES🔥🔥🔥",
              "sorting_number"=>"1",
              "status"=>"1",
              "description"=>"null",
              "created_at"=>"2021-03-25 00:42:47",
              "updated_at"=>"2021-03-25 00:42:47"
            ]
          
         
    ];
    foreach ($arrayCategory as $category ) {
        Category::create($category);
    }
  }
}
