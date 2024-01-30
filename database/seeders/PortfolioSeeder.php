<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;
=======
use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
>>>>>>> 5c086d578443f5f39767b1bd51f6390c55bf9375

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            [
<<<<<<< HEAD
                "title" => "Porfolio di Marco",
                "description" => "Porfolio magnifico di Marco",
                "thumb" => "https://s.tmimgcdn.com/scr/1200x750/339200/portfolio-di-architettura-portfolio-design-modello-portfolio-interni_339244-original.jpg"
            ]
        ];
        
        for($i=0; $i<sizeof($portfolios); $i++){
            $new_portfolio = new Portfolio();
            $new_portfolio->title = $portfolios[$i]["title"];
            $new_portfolio->description = $portfolios[$i]["description"];
            $new_portfolio->thumb = $portfolios[$i]["thumb"];
=======
                'title' => 'progetto 1',
                'description' => 'descrizione lunga',
                'thumb' => 'ulr img',
            ],
            [
                'title' => 'progetto 2',
                'description' => 'descrizione lunga 2',
                'thumb' => 'ulr img 2',
            ],
        ];
        foreach ($portfolios as $portfolio) {

            $new_portfolio = new Portfolio();
            $new_portfolio->title = $portfolio['title'];
            $new_portfolio->description = $portfolio['description'];
            $new_portfolio->thumb =  $portfolio['thumb'];
>>>>>>> 5c086d578443f5f39767b1bd51f6390c55bf9375
            $new_portfolio->save();
        }
    }
}
<<<<<<< HEAD

=======
>>>>>>> 5c086d578443f5f39767b1bd51f6390c55bf9375
